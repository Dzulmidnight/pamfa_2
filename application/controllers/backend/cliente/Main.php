<?php
	class Main extends CI_Controller{
		
		public function index(){
			if($this->session->userdata('s_tipo')=='cliente'){
			$this->load->view('backend/cliente/templates/header');
			$this->load->view('backend/cliente/templates/topnavigation');
			$this->load->view('backend/cliente/templates/navbar.php');
			$this->load->view('backend/cliente/index');
			$this->load->view('backend/cliente/templates/footer');
		}
		else{
			//echo "datos incorrectos";
		$this->load->view('templates/header');
		$this->load->view('logins/inicio');
			$this->load->view('templates/footer');}
		}
	}