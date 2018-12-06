<?php

class Contrato extends CI_Controller{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('backend/cliente/templates/head');
		$this->load->view('backend/cliente/templates/header');
		$this->load->view('backend/cliente/templates/sideNav');
			$this->load->view('backend/cliente/solicitud/contrato');
		$this->load->view('backend/cliente/templates/pre_footer');
		$this->load->view('backend/cliente/templates/footer');
	}
}