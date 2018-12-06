<?php
class cCliente extends MY_Controller {

	
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
	public function estatus($e,$id)
	{
		echo json_encode("jfjksjdbfkjds".$e);
		
		$fechaM=time();
		
		$this->mCliente->estatus($e,$id,$fechaM);
		
		
			$data['consulta_gral'] = $this->mCliente->consulta_gral();
				$seccion = 'backend/administrador/clientes/listado_clientes';
			
		$this->load->view('backend/administrador/templates/head');
		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/sideNav');
			$this->load->view($seccion, $data);
		$this->load->view('backend/administrador/templates/pre_footer');
		$this->load->view('backend/administrador/templates/footer');
	}
	public function estatus2($e,$id)
	{
		echo json_encode("jfjksjdbfkjds".$e);
		
		$fechaM=time();
		
		$this->mCliente->estatus($e,$id,$fechaM);
			
	}
	
	public function fiscal()
	{
		
		$data=$_POST;
		$this->mCliente->actualiza_fiscal($data);
			$this->load->view('backend/cliente/templates/header');
			$this->load->view('backend/cliente/templates/topnavigation');
			$this->load->view('backend/cliente/templates/navbar.php');
			$this->load->view('backend/cliente/index');
			$this->load->view('backend/cliente/templates/footer');
	}
	Public function tabla()
	{
		
		
		$data['consulta_gral'] = $this->mCliente->consulta_pendientes();
		$this->load->view('backend/administrador/pendientes',$data);	
		//$this->load->view('backend/cliente/solicitud/nueva_solicitud',$data);
	}


	////////////admn
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
	public function password()
	{
		
		$data=$_POST;
		$this->mCliente->actualiza_pass($data);
			
	}


	
}
