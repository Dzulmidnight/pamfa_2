<?php
class cMexico extends CI_Controller {

	
	function __construct(){
		parent:: __construct();
		$this->load->model('mMexico');
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
		
		
		$this->mMexico->guardar($data,$id);
			
	}
	public function eliminar()
	{
		$data=$_POST;
		//$fechaM=time();
		$this->mMexico->eliminar($data);
			
	}
	
	Public function tabla($id)
	{
		
		
		
		$data['consulta_mex'] = $this->mMexico->consulta_mex($id);
		$this->load->view('backend/cliente/solicitud/normas/mexico',$data);	
		//$this->load->view('backend/cliente/solicitud/nueva_solicitud',$data);
	}
	
	
}
