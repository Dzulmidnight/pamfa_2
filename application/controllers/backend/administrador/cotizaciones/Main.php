<?php

class Main extends CI_Controller{

	function __construct(){
		parent:: __construct();
	}

	public function index()
	{
		$this->load->view('backend/administrador/templates/head');
		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/sideNav');
			$this->load->view('backend/administrador/cotizaciones/detalle_cotizacion');
		$this->load->view('backend/administrador/templates/pre_footer');
		$this->load->view('backend/administrador/templates/footer');
	}
}