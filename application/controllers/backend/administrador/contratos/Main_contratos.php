<?php

class Main_contratos extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('mSolicitud');
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
		$data['consulta_sol_id']= $this->mSolicitud->consulta_solicitudes_full_id($id_contrato);
		$this->load->view('backend/administrador/templates/head');
		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/sideNav');
			$this->load->view('backend/administrador/contratos/detalle_contrato.php',$data);
		$this->load->view('backend/administrador/templates/pre_footer');
		$this->load->view('backend/administrador/templates/footer');
	}

}
