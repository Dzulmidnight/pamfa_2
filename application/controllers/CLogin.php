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
		if($this->session->userdata('s_tipo')=='cliente' || $this->session->userdata('s_tipo')=='administrador' ||$this->session->userdata('s_tipo')=='auditor'){
			
			
		if($this->session->userdata('s_tipo')=='cliente'){
			
		$this->load->view('backend/cliente/templates/header');
			$this->load->view('backend/cliente/templates/topnavigation');
			$this->load->view('backend/cliente/templates/navbar.php');
			$this->load->view('backend/cliente/index');
			$this->load->view('backend/cliente/templates/footer');	
		}
			if($this->session->userdata('s_tipo')=='auditor'){
		$this->load->view('backend/auditor/templates/header');
			$this->load->view('backend/auditor/templates/topnavigation');
			$this->load->view('backend/auditor/templates/navbar.php');
			$this->load->view('backend/auditor/index');
			$this->load->view('backend/auditor/templates/footer');	
		}
			if($this->session->userdata('s_tipo')=='adminitrador'){
		$this->load->view('backend/administrador/templates/header');
			$this->load->view('backend/administrador/templates/topnavigation');
			$this->load->view('backend/administrador/templates/navbar.php');
			$this->load->view('backend/administrador/index');
			$this->load->view('backend/administrador/templates/footer');
		}
			
			
		}
		else{
		$tipo=$this->input->post('inputOculto');
		
		$usu=$this->input->post('username');
		$pass=$this->input->post('password');
		
		
		$res=$this->mLogin->ingresar($usu,$pass,$tipo);
		
		
		if($res==1){
		
		if($this->session->userdata('s_tipo')=='cliente'){
		$this->load->view('backend/cliente/templates/header');
			$this->load->view('backend/cliente/templates/topnavigation');
			$this->load->view('backend/cliente/templates/navbar.php');
			$this->load->view('backend/cliente/index');
			$this->load->view('backend/cliente/templates/footer');
		}
		if($this->session->userdata('s_tipo')=='auditor'){
		$this->load->view('backend/auditor/templates/header');
			$this->load->view('backend/auditor/templates/topnavigation');
			$this->load->view('backend/auditor/templates/navbar.php');
			$this->load->view('backend/auditor/index');
			$this->load->view('backend/auditor/templates/footer');	
		}
		if($this->session->userdata('s_tipo')=='administrador'){
			$this->load->view('backend/administrador/templates/header');
			$this->load->view('backend/administrador/templates/topnavigation');
			$this->load->view('backend/administrador/templates/navbar.php');
			$this->load->view('backend/administrador/index');
			$this->load->view('backend/administrador/templates/footer');
		}
		}

		else{
			//echo "datos incorrectos";
		$this->load->view('templates/header');
		$this->load->view('logins/inicio');
			$this->load->view('templates/footer');}
			
		}
	}
	
	public function salir()
	{
		
		$this->session->sess_destroy();
		
		
		
		$this->load->view('templates/header');
		$this->load->view('logins/inicio');
			$this->load->view('templates/footer');
	}
		
}
