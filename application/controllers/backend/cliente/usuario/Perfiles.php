<?php
	
class Perfiles extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('mCliente');
		$this->load->model('mPais');
	}

	function index($seccion = null){

		$data['menu'] = 'backend/cliente/usuario/sub_menu';
		$data['seccion'] = $seccion;

		switch ($seccion) {
			case 'datos_fiscales':
			$data['consulta_fiscal'] = $this->mCliente->consulta_fiscal();
				$seccion = 'backend/cliente/usuario/datos_fiscales';
				
				
				break;
			case 'datos_generales':
			$data['consulta_datos_gral'] = $this->mCliente->consulta_datos_gral();
				$seccion = 'backend/cliente/usuario/datos_generales';
				
				break;
			default:
			$data['consulta_datos_gral'] = $this->mCliente->consulta_datos_gral();
			$data['pais'] = $this->mPais->paises();
				$seccion = 'backend/cliente/usuario/datos_generales';
				
				break;
		}

		$this->load->view('backend/cliente/templates/head');
		$this->load->view('backend/cliente/templates/header');
		$this->load->view('backend/cliente/templates/sideNav');
			$this->load->view($seccion, $data);
		$this->load->view('backend/cliente/templates/pre_footer');
		$this->load->view('backend/cliente/templates/footer');
	}
}