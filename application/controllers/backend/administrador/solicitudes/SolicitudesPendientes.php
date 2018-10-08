<?php
	class SolicitudesPendientes extends CI_Controller{
		
		function index(){
			$this->load->view('backend/administrador/templates/head');
			$this->load->view('backend/administrador/templates/header');
			$this->load->view('backend/administrador/templates/sideNav');
				$this->load->view('backend/administrador/solicitudes/solicitudes_pendientes');
			$this->load->view('backend/administrador/templates/pre_footer');
			$this->load->view('backend/administrador/templates/footer');
		}
	}