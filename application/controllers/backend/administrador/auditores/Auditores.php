<?php
	
class Auditores extends CI_Controller{

	function index(){


		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/topnavigation');
		$this->load->view('backend/administrador/templates/navbar');
		$this->load->view('backend/administrador/auditores/listado_auditores');
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