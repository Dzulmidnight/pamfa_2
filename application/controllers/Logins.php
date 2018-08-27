<?php
	class Logins extends CI_Controller{
		
		function __construct(){
		parent:: __construct();
		
		$this->load->model('mPais');
	}
		public function view($login = 'Inicio'){
			if(!file_exists(APPPATH.'views/logins/'.$login.'.php')){
				show_404();
			}
$data['pais'] = $this->mPais->paises();
			$data['title'] = ucfirst($login); /// nos mostrara como titulo el nombre del archivo que estamos llamando

			$this->load->view('templates/header');
			$this->load->view('logins/'.$login, $data);
			$this->load->view('templates/footer');
		}
	}