<?php
class cCliente extends CI_Controller {

	
	function __construct(){
		parent:: __construct();
		$this->load->model('mCliente');
	}
	public function index()
	{
		//$this->load->view('backend/cliente/usuario/datos_generales');
	}
	public function guardar()
	{
		echo "entra a uardar";
				

		$params['username']=sha1($this->input->post('username'));
		$params['password']=sha1($this->input->post('password'));
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
		$params['fechaAlta']=$this->input->post('fechaAlta');
		
		$params['estatus']=$this->input->post('estatus');
		
		echo json_encode($params);
		$this->mCliente->guardar($params);
			$this->load->view('templates/header');
		$this->load->view('logins/inicio');
			$this->load->view('templates/footer');
	}
}
