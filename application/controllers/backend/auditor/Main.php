<?php
	class Main extends CI_Controller{
		
		public function index(){

				$this->load->view('backend/auditor/templates/header');
				$this->load->view('backend/auditor/templates/topnavigation');
				$this->load->view('backend/auditor/templates/navbar.php');
				$this->load->view('backend/auditor/index');
				$this->load->view('backend/auditor/templates/footer');
		}

	}