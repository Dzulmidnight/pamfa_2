<?php
	
class Clientes extends CI_Controller{

function __construct(){
		parent:: __construct();
		$this->load->model('mCliente');
		$this->load->model('mSolicitud');
	}
	function index($seccion = null){

		$data['seccion'] = $seccion;
		$data['consulta_todo']= $this->mSolicitud->consulta_solicitudes();

		switch ($seccion) {
			case 'datos_fiscales':
				$seccion = 'backend/administrador/usuario/datos_fiscales';
				break;
			case 'datos_generales':
				$seccion = 'backend/administrador/usuario/datos_generales';
				break;
			default:
			$data['consulta_gral'] = $this->mCliente->consulta_gral();
				$seccion = 'backend/administrador/clientes/listado_clientes';
				break;
		}

		$this->load->view('backend/administrador/templates/head');
		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/sideNav',$data);
			$this->load->view($seccion, $data);
		$this->load->view('backend/administrador/templates/pre_footer');
		$this->load->view('backend/administrador/templates/footer');
	}

	function representantes(){
		$this->load->view('backend/administrador/templates/head');
		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/sideNav');
			$this->load->view('backend/administrador/clientes/representantes/representantes');
		$this->load->view('backend/administrador/templates/pre_footer');
		$this->load->view('backend/administrador/templates/footer');
	}

	function perfilRepresentante(){
		$this->load->view('backend/administrador/templates/head');
		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/sideNav');
			$this->load->view('backend/administrador/clientes/representantes/perfil_representante');
		$this->load->view('backend/administrador/templates/pre_footer');
		$this->load->view('backend/administrador/templates/footer');
	}
}