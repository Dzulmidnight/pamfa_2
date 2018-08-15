<?php
	
class Perfiles extends CI_Controller{

	function index($seccion = null){

		$data['menu'] = 'backend/cliente/usuario/sub_menu';
		$data['seccion'] = $seccion;

		switch ($seccion) {
			case 'datos_fiscales':
				$seccion = 'backend/cliente/usuario/datos_fiscales';
				break;
			case 'datos_generales':
				$seccion = 'backend/cliente/usuario/datos_generales';
				break;
			default:
				$seccion = 'backend/cliente/usuario/datos_generales';
				break;
		}

		$this->load->view('backend/cliente/templates/header');
		$this->load->view('backend/cliente/templates/topnavigation');
		$this->load->view('backend/cliente/templates/navbar.php');
		$this->load->view($seccion, $data);
		$this->load->view('backend/cliente/templates/footer');
	}
}