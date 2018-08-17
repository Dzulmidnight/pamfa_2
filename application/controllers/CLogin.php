<?php
class cLogin extends CI_Controller {

	
	function __construct(){
		parent:: __construct();
		$this->load->model('mLogin');
	}
	public function index()
	{
		//$this->load->view('vLogin');
	}
	public function ingresar()
	{
		//echo "entra a a login";
		//echo "kjdj". $this->input->post('inputOculto');
		$tipo=$this->input->post('inputOculto');
		
		$usu=$this->input->post('username');
		$pass=sha1($this->input->post('password'));
		
		
		$res=$this->mLogin->ingresar($usu,$pass,$tipo);
		
		if($res){
		
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
