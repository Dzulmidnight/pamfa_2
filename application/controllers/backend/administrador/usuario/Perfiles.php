<?php
	
class Perfiles extends MY_Controller{

	function index($seccion = null){

		$data['menu'] = 'backend/administrador/usuario/sub_menu';
		$data['seccion'] = $seccion;

		switch ($seccion) {
			case 'datos_fiscales':
				$seccion = 'backend/administrador/usuario/datos_fiscales';
				break;
			case 'datos_generales':
				$seccion = 'backend/administrador/usuario/datos_generales';
				break;
			default:
				$seccion = 'backend/administrador/usuario/datos_generales';
				break;
		}

		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/topnavigation');
		$this->load->view('backend/administrador/templates/navbar.php');
		$this->load->view($seccion, $data);
		$this->load->view('backend/administrador/templates/footer');
	}
}