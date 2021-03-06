<?php
class cLogin extends CI_Controller {

	
	function __construct(){
		parent:: __construct();
		
		$this->load->model('mLogin');

		$this->load->model('mSolicitud');
		$this->load->model('mCliente');
		$this->load->model('mObservacion');
		$this->load->model('mPago');
		$this->load->model('mRechazo_servicio');
		$this->load->model('mContrato');
		
	
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
			$data['consulta_todo_c'] = $this->mSolicitud->consulta_solicitudes_cliente($this->session->userdata('s_idusuario'));
				$data['consulta_totales']= $this->mObservacion->consulta_totales();
				$data['consulta_pago']= $this->mPago->consulta_todo();
				$data['consulta_rechazo']= $this->mRechazo_servicio->consulta_rechazo_c();
			

			$data['consulta_contrato']= $this->mContrato->consulta_todo();

			
			$this->load->view('backend/cliente/templates/head');
			$this->load->view('backend/cliente/templates/header');
			$this->load->view('backend/cliente/templates/sideNav');
			$data['vistaOb'] = $this->load->view('backend/cliente/index',$data,true);
			$this->load->view('backend/administrador/solicitudes/vob',$data);

			$this->load->view('backend/cliente/templates/pre_footer');
			$this->load->view('backend/cliente/templates/footer');	
		}
		if($this->session->userdata('s_tipo')=='auditor'){
			$this->load->view('backend/auditor/templates/head');
			$this->load->view('backend/auditor/templates/header');
			$this->load->view('backend/auditor/templates/sideNav');
				$this->load->view('backend/auditor/index');
			$this->load->view('backend/auditor/templates/pre_footer');
			$this->load->view('backend/auditor/templates/footer');	
		}
		if($this->session->userdata('s_tipo')=='administrador'){
			$data['consulta_todo3'] = $this->mSolicitud->consulta_solicitudes3();
				$data['consulta_todo'] = $this->mSolicitud->consulta_solicitudes();
				$data['consulta_full'] = $this->mSolicitud->consulta_solicitudes_full();
				$data['consulta_full2'] = $this->mSolicitud->consulta_solicitudes_full2();
				$data['consulta_gral'] = $this->mCliente->consulta_pendientes();
			$this->load->view('backend/administrador/templates/head');
			$this->load->view('backend/administrador/templates/header');
			$this->load->view('backend/administrador/templates/sideNav',$data);
				$this->load->view('backend/administrador/index',$data);
			$this->load->view('backend/administrador/templates/pre_footer');
			
			$this->load->view('backend/administrador/templates/footer');
		}
			
			
		}
		else{
		$tipo=$this->input->post('inputOculto');
		
		$usu=$this->input->post('username');
		$pass=$this->input->post('password');
		
		
		$res=$this->mLogin->ingresar($usu,$pass,$tipo);
		
		
		if($res==true){
		
		if($this->session->userdata('s_tipo')=='cliente'){


			$data['consulta_todo_c'] = $this->mSolicitud->consulta_solicitudes_cliente($this->session->userdata('s_idusuario'));
				$data['consulta_totales']= $this->mObservacion->consulta_totales();
				$data['consulta_pago']= $this->mPago->consulta_todo();
				$data['consulta_rechazo']= $this->mRechazo_servicio->consulta_rechazo_c();
			
			$data['consulta_contrato']= $this->mContrato->consulta_todo();
				
			$this->load->view('backend/cliente/templates/head');
			$this->load->view('backend/cliente/templates/header');
			$this->load->view('backend/cliente/templates/sideNav.php');
			$data['vistaOb'] = $this->load->view('backend/cliente/index',$data,true);
			$this->load->view('backend/administrador/solicitudes/vob',$data);
			

			$this->load->view('backend/cliente/templates/pre_footer');
			$this->load->view('backend/cliente/templates/footer');
		}
		if($this->session->userdata('s_tipo')=='auditor'){
		$this->load->view('backend/auditor/templates/header');
			$this->load->view('backend/auditor/templates/navbar.php');
			$this->load->view('backend/auditor/index');
			$this->load->view('backend/auditor/templates/footer');	
		}
		if($this->session->userdata('s_tipo')=='administrador'){
			$data['consulta_todo3'] = $this->mSolicitud->consulta_solicitudes3();
				$data['consulta_todo'] = $this->mSolicitud->consulta_solicitudes();
				$data['consulta_full'] = $this->mSolicitud->consulta_solicitudes_full();
				$data['consulta_full2'] = $this->mSolicitud->consulta_solicitudes_full2();
				$data['consulta_gral'] = $this->mCliente->consulta_pendientes();
			$this->load->view('backend/administrador/templates/head');
			$this->load->view('backend/administrador/templates/header');
			$this->load->view('backend/administrador/templates/sideNav',$data);
				$this->load->view('backend/administrador/index',$data);
			$this->load->view('backend/administrador/templates/pre_footer');
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
