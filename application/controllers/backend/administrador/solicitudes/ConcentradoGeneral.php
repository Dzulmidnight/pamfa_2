<?php
	
class ConcentradoGeneral extends CI_Controller{

	function index(){

		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/topnavigation');
		$this->load->view('backend/administrador/templates/navbar.php');
		$this->load->view('backend/administrador/solicitudes/concentrado_general');
		$this->load->view('backend/administrador/templates/footer');
	}
}