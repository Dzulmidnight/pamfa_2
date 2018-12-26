<?php
class Ccliente extends MY_Controller {

	
	function __construct(){
		parent:: __construct();
		$this->load->model('mCliente');
		$this->load->model('mSolicitud');
		$this->load->model('mPais');
		$this->load->model('mPago');
		$this->load->model('mCotizacion');
		$this->load->model('mRechazo_servicio');
		$this->load->model('mObservacion');
		$this->load->model('mSeccion');

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
	
	public function cotiz_cliente()
	{
		
		$data=$_POST;
		$this->mPago->cotiz_cliente($data);
			
	}
	public function obser()
	{
		$id=$_POST['id'];

		$data['ids']=$id;
		$data['consulta_sol_id'] = $this->mSolicitud->consulta_solicitudes_full_id($id);
		$data['consulta_rechazo']= $this->mRechazo_servicio->consulta_rechazo($id);
		$modal=$this->load->view('backend/cliente/modal_rechazo',$data,true);
		echo $modal;
		
	}
	public function pag()
	{
		$id=$_POST['id'];

		$data['ids']=$id;
		$data['consulta_sol_id'] = $this->mSolicitud->consulta_solicitudes_full_id($id);
		$data['consulta_pago']= $this->mPago->consulta_pago($id);
		$data['consulta_cotizacion']= $this->mCotizacion->consulta_cotizacion($id);
		$modal=$this->load->view('backend/cliente/modal_pago',$data,true);
		echo $modal;
		
	}
	public function obser2()
	{
		$id=$_POST['id'];

		$id=$_POST['id'];
		$data['ids']=$id;
		$data['seccion']= $this->mSeccion->consulta();
		$data['observaciones'] = $this->mObservacion->consulta_obs($id);
		$modal=$this->load->view('backend/cliente/observaciones_c',$data,true);
		echo $modal;
		
	}
	public function obser4()
	{
		$id=$_POST['id'];
		$campo=$_POST['campo'];

		$id=$_POST['id'];
		$data['ids']=$id;
		$data['seccion']= $this->mSeccion->consulta();
		$data['observaciones'] = $this->mObservacion->consulta_obs_cliente($id,$campo);
		$modal=$this->load->view('backend/cliente/observaciones_c_sol',$data,true);
		echo $modal;
		
	}
	
}
