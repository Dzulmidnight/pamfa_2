<?php
	
class Solicitudes extends CI_Controller{

	function nueva_solicitud(){

		$this->load->view('backend/cliente/templates/header');
		$this->load->view('backend/cliente/templates/topnavigation');
		$this->load->view('backend/cliente/templates/navbar.php');
		$this->load->view('backend/cliente/solicitud/nueva_solicitud');
		$this->load->view('backend/cliente/templates/footer');
	}
}