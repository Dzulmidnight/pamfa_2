<?php
	
class Auditores extends MY_Controller{

function __construct(){
		parent:: __construct();
		
		$this->load->model('mAuditor');
		
	}
	function index(){

			$data['consulta'] = $this->mAuditor->consulta();

		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/topnavigation');
		$this->load->view('backend/administrador/templates/navbar');
		$this->load->view('backend/administrador/auditores/listado_auditores',$data);
		$this->load->view('backend/administrador/templates/footer');
	}

	function nuevo(){
		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/topnavigation');
		$this->load->view('backend/administrador/templates/navbar');
		$this->load->view('backend/administrador/auditores/nuevo_auditor');
		$this->load->view('backend/administrador/templates/footer');
	}
}