<?php
	
class Perfiles extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('mCliente');
	}

	function index($seccion = null){

		$data['menu'] = 'backend/auditor/usuario/sub_menu';
		$data['seccion'] = $seccion;

		switch ($seccion) {
			case 'datos_fiscales':

				$seccion = 'backend/auditor/usuario/datos_fiscales';
				
				
				break;
			case 'datos_generales':

				$seccion = 'backend/auditor/usuario/datos_generales';
				
				break;
			default:

				$seccion = 'backend/auditor/usuario/datos_generales';
				
				break;
		}

		$this->load->view('backend/auditor/templates/header');
		$this->load->view('backend/auditor/templates/topnavigation');
		$this->load->view('backend/auditor/templates/navbar.php');
		$this->load->view($seccion, $data);
		$this->load->view('backend/auditor/templates/footer');
	}
}