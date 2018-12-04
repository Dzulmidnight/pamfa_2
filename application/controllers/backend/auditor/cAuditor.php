<?php
class cAuditor extends MY_Controller{

	
	function __construct(){
		parent:: __construct();
		
		$this->load->model('mAuditor');
	}
	public function index()
	{
		//$this->load->view('backend/cliente/usuario/datos_generales');
	}
	
	
	public function generales()
	{
		
		$data=$_POST;
		$fechaM=time();
		$this->mAuditor->actualiza_generales($data,$fechaM);
			$this->load->view('backend/auditor/templates/header');
			$this->load->view('backend/auditor/templates/topnavigation');
			$this->load->view('backend/auditor/templates/navbar.php');
			$this->load->view('backend/auditor/index');
			$this->load->view('backend/auditor/templates/footer');
	}
	
}