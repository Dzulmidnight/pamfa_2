<?php
class cProducto_srrc extends MY_Controller {

	
	function __construct(){
		parent:: __construct();
		$this->load->model('mProducto_srrc');
		$this->load->model('mSolicitud');
		
	}
	public function index()
	{
		//$this->load->view('backend/cliente/usuario/datos_generales');
	}
	public function guardar()
	{
		$data=$_POST;
		//$fechaM=time();
		$data2['sol']= $this->mSolicitud->consulta();

		
			$id=$data2['sol']->id_solicitud;
		
		$this->mProducto_srrc->guardar($data,$id);
			
	}
	public function eliminar()
	{
		$data=$_POST;
		//$fechaM=time();
		$this->mProducto_srrc->eliminar($data);
			
	}
	
	Public function tabla()
	{
		$data2['sol']= $this->mSolicitud->consulta();

		
			$idsol=$data2['sol']->id_solicitud;
		
		$data['consulta_srrc'] = $this->mProducto_srrc->consulta_srrc($idsol);
		$this->load->view('backend/cliente/solicitud/normas/producto_srrc',$data);	
		//$this->load->view('backend/cliente/solicitud/nueva_solicitud',$data);
	}
	Public function div()
	{
		
		
		$data2['sol']= $this->mSolicitud->consulta();

		
			$idsol=$data2['sol']->id_solicitud;
		
		if($idsol!=""){
		$data['consulta_srrc2'] = $this->mProducto_srrc->consulta_srrc($idsol);

		$this->load->view('backend/cliente/solicitud/normas/producto_srrc',$data);	
	}
	else{$this->load->view('backend/cliente/solicitud/normas/vacio');}
		//$this->load->view('backend/cliente/solicitud/nueva_solicitud',$data);
	
	}
	
}
