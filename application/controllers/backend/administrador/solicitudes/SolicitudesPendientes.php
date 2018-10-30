<?php
	class SolicitudesPendientes extends CI_Controller{
		function __construct(){
		parent:: __construct();

		$this->load->model('mSolicitud');
	}

		function index(){


		$data['consulta_solicitudes']= $this->mSolicitud->consulta_solicitudes_full();
		$data['consulta_todo']= $this->mSolicitud->consulta_solicitudes();
			$this->load->view('backend/administrador/templates/head');
			$this->load->view('backend/administrador/templates/header');
			$this->load->view('backend/administrador/templates/sideNav',$data);
				$this->load->view('backend/administrador/solicitudes/solicitudes_pendientes',$data);
			$this->load->view('backend/administrador/templates/pre_footer');
			$this->load->view('backend/administrador/templates/footer');
		}
	}
