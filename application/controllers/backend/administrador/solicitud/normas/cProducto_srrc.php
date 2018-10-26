<?php
class cProducto_srrc extends CI_Controller {

	
	function __construct(){
		parent:: __construct();
		$this->load->model('mProducto_srrc');
		$this->load->model('mSolicitud');
		
	}
	public function index()
	{
		//$this->load->view('backend/cliente/usuario/datos_generales');
	}
	public function guardar($id)
	{
		$data=$_POST;
		//$fechaM=time();
		
		
		$this->mProducto_srrc->guardar($data,$id);
			
	}
	public function eliminar()
	{
		$data=$_POST;
		//$fechaM=time();
		$this->mProducto_srrc->eliminar($data);
			
	}
	
	Public function tabla($id)
	{
		
		
		$data['consulta_srrc'] = $this->mProducto_srrc->consulta_srrc($id);
		$this->load->view('backend/cliente/solicitud/normas/producto_srrc',$data);	
		//$this->load->view('backend/cliente/solicitud/nueva_solicitud',$data);
	}
	Public function div($id)
	{
		
		
		
		
		if($id!=""){
		$data['consulta_srrc2'] = $this->mProducto_srrc->consulta_srrc($id);

		$this->load->view('backend/cliente/solicitud/normas/producto_srrc',$data);	
	}
	else{$this->load->view('backend/cliente/solicitud/normas/vacio');}
		//$this->load->view('backend/cliente/solicitud/nueva_solicitud',$data);
	
	}
	
}
