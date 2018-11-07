<?php

class Main_contratos extends CI_Controller{

	function __construct(){
		parent:: __construct();
	}

	public function index()
	{
		$this->load->view('backend/administrador/templates/head');
		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/sideNav');
			$this->load->view('backend/administrador/contratos/listado_contratos.php');
		$this->load->view('backend/administrador/templates/pre_footer');
		$this->load->view('backend/administrador/templates/footer');
	}

	public function detalleContrato($id_contrato){
		$data['id_contrato'] = $id_contrato;
		
		$this->load->view('backend/administrador/templates/head');
		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/sideNav');
			$this->load->view('backend/administrador/contratos/detalle_contrato.php');
		$this->load->view('backend/administrador/templates/pre_footer');
		$this->load->view('backend/administrador/templates/footer');
	}

}
