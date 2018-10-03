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
	public function guardar()
	{
		$data=$_POST;
		//$fechaM=time();
		$data2['sol']= $this->mSolicitud->consulta();

		
			$id=$data2['sol']->id_solicitud;
		
		$this->mMexico->guardar($data,$id);
			
	}
	public function eliminar()
	{
		$data=$_POST;
		//$fechaM=time();
		$this->mMexico->eliminar($data);
			
	}
	
	Public function tabla()
	{
		
		$data2['sol']= $this->mSolicitud->consulta();

		
			$id=$data2['sol']->id_solicitud;
		
		$data['consulta_mex'] = $this->mMexico->consulta_mex($id);
		$this->load->view('backend/cliente/solicitud/normas/mexico',$data);	
		//$this->load->view('backend/cliente/solicitud/nueva_solicitud',$data);
	}
	
	
}
