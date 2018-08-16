<?php
	class Main extends CI_Controller{
		
		public function index(){
			$this->load->view('backend/administrador/templates/header');
			$this->load->view('backend/administrador/templates/topnavigation');
			$this->load->view('backend/administrador/templates/navbar.php');
			$this->load->view('backend/administrador/index');
			$this->load->view('backend/administrador/templates/footer');
		}

	}