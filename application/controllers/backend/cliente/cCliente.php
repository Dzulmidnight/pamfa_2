<?php
class Ccliente extends MY_Controller {

	
	function __construct(){
		parent:: __construct();
		$this->load->model('mCliente');
		$this->load->model('mPais');
	}
	public function index()
	{
		//$this->load->view('backend/cliente/usuario/datos_generales');
	}
	public function guardar()
	{			
		$params['username']=$this->input->post('username');
		$params['password']=$this->input->post('password');
		$params['nombreLegal']=$this->input->post('nombreLegal');
		$params['nombreRepresentante']=$this->input->post('nombreRepresentante');
		$params['direccion']=$this->input->post('direccion');
		$params['cp']=$this->input->post('cp');
		$params['colonia']=$this->input->post('colonia');
		$params['municipio']=$this->input->post('municipio');
		$params['estado']=$this->input->post('estado');
		$params['pais']=$this->input->post('pais');
		//$params['coordenadas']=$this->input->post('coordenadas');
		$params['email']=$this->input->post('email');
		$params['telefono']=$this->input->post('telefono');
		$params['fax']=$this->input->post('fax');
		$params['fechaAlta']=time();
		
		$params['estatus']=$this->input->post('estatus');
		
		//echo json_encode($params);
		$this->mCliente->guardar($params);



		$this->load->view('templates/header');
				$this->load->view('logins/inicio');
		$this->load->view('templates/footer');
	}
	public function generales()
	{
		
		$data=$_POST;
		$fechaM=time();
		$this->mCliente->actualiza_generales($data,$fechaM);

			$this->load->view('backend/cliente/templates/head');
			$this->load->view('backend/cliente/templates/header');
			$this->load->view('backend/cliente/templates/sideNav');
				$this->load->view('backend/cliente/index');
			$this->load->view('backend/cliente/templates/pre_footer');
			$this->load->view('backend/cliente/templates/footer');
	}
	
	public function fiscal()
	{
		
		$data=$_POST;
		$this->mCliente->actualiza_fiscal($data);

			$this->load->view('backend/cliente/templates/head');
			$this->load->view('backend/cliente/templates/header');
			$this->load->view('backend/cliente/templates/sideNav');
				$this->load->view('backend/cliente/index');
			$this->load->view('backend/cliente/templates/pre_footer');
			$this->load->view('backend/cliente/templates/footer');

	}

	public function generales_sol()
	{
		
		$data=$_POST;
		$fechaM=time();
		$this->mCliente->actualiza_generales_sol($data,$fechaM);
			
	}
	public function fiscal_sol()
	{
		
		$data=$_POST;
		$this->mCliente->actualiza_fiscal_sol($data);
			
	}
	
	
}
