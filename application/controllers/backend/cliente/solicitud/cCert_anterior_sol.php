<?php
class cCert_anterior_sol extends MY_Controller {

	
	function __construct(){
		parent:: __construct();
		$this->load->model('mCert_anterior_sol');
		$this->load->model('mSolicitud');
	}
	public function index()
	{
		//$this->load->view('backend/cliente/usuario/datos_generales');
	}
	public function guardar_c()
	{
		$data=$_POST;
		//$fechaM=time();
		$data2['sol']= $this->mSolicitud->consulta();

		
			$id=$data2['sol']->id_solicitud;
			if($id==""){
		$this->mCert_anterior_sol->guardar($data,$id);
				}
				else{
		$this->mCert_anterior_sol->actualizar($data,$id);

				}
			
	}
	
	
}