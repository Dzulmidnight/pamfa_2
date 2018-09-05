<?php
	class SolicitudesPendientes extends CI_Controller{
		
		function index(){
			$this->load->view('backend/administrador/templates/header');
			$this->load->view('backend/administrador/templates/topnavigation');
			$this->load->view('backend/administrador/templates/navbar.php');
			$this->load->view('backend/administrador/solicitudes/solicitudes_pendientes.php');
			$this->load->view('backend/administrador/templates/footer');
		}
	}