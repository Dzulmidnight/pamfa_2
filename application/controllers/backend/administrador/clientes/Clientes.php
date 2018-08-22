<?php
	
class Clientes extends CI_Controller{

function __construct(){
		parent:: __construct();
		$this->load->model('mCliente');
	}
	function index($seccion = null){

		$data['seccion'] = $seccion;

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

		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/topnavigation');
		$this->load->view('backend/administrador/templates/navbar.php');
		$this->load->view($seccion, $data);
		$this->load->view('backend/administrador/templates/footer');
	}
}