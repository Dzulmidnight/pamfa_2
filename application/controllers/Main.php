<?php
	class Main extends CI_Controller{
		
		public function index(){
			//$this->load->view('backend/cliente/templates/header');
			//$this->load->view('backend/cliente/main');
			//$this->load->view('backend/cliente/templates/footer');
			 echo 'Hello World!';
		}

		/*public function view($login = 'Inicio'){
			if(!file_exists(APPPATH.'views/logins/'.$login.'.php')){
				show_404();
			}

			$data['title'] = ucfirst($login); /// nos mostrara como titulo el nombre del archivo que estamos llamando

			$this->load->view('templates/header');
			$this->load->view('logins/'.$login, $data);
			$this->load->view('templates/footer');
		}*/
	}