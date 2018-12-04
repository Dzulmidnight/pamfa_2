<?php
class cProducto_solicitud extends MY_Controller {

	
	function __construct(){
		parent:: __construct();
		$this->load->model('mProducto_solicitud');
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
		
		$this->mProducto_solicitud->guardar($data,$id);
			
	}
	public function eliminar()
	{
		$data=$_POST;
		//$fechaM=time();
		$this->mProducto_solicitud->eliminar($data);
			
	}
	
	Public function tabla()
	{
		
		
		$data['consulta_prod'] = $this->mProducto_solicitud->consulta_prod();
		$this->load->view('backend/cliente/usuario/tab',$data);	
		//$this->load->view('backend/cliente/solicitud/nueva_solicitud',$data);
	}
	
	
}
