<?php
	class Main extends CI_Controller{
		
		public function index(){
			if($this->session->userdata('s_tipo')=='administrador'){
			$this->load->view('backend/administrador/templates/header');
			$this->load->view('backend/administrador/templates/topnavigation');
			$this->load->view('backend/administrador/templates/navbar.php');
			$this->load->view('backend/administrador/index');
			$this->load->view('backend/administrador/templates/footer');
		}
		else{
			//echo "datos incorrectos";
		$this->load->view('templates/header');
		$this->load->view('logins/inicio');
			$this->load->view('templates/footer');}
		}

	}