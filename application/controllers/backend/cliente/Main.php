<?php
	class Main extends MY_Controller{
		
		function __construct(){
		parent:: __construct();
		
		$this->load->model('mSolicitud');
		$this->load->model('mCliente');
		$this->load->model('mObservacion');
		$this->load->model('mPago');
		$this->load->model('mRechazo_servicio');

		$this->load->model('mContrato');
			$this->load->model('mObservacion');
		$this->load->model('mSeccion');
		
	}
		public function index(){
			if($this->session->userdata('s_tipo')=='cliente'){

				$data['consulta_todo_c'] = $this->mSolicitud->consulta_solicitudes_cliente($this->session->userdata('s_idusuario'));
				$data['consulta_totales']= $this->mObservacion->consulta_totales();
				$data['consulta_pago']= $this->mPago->consulta_todo();
				$data['consulta_rechazo']= $this->mRechazo_servicio->consulta_rechazo_c();
				$data['consulta_contrato']= $this->mContrato->consulta_todo();
					//echo $data['consulta_todo'];
			$this->load->view('backend/cliente/templates/head');
			$this->load->view('backend/cliente/templates/header');
			$this->load->view('backend/cliente/templates/sideNav');
				$data['vistaOb'] = $this->load->view('backend/cliente/index',$data,true);
			$this->load->view('backend/administrador/solicitudes/vob',$data);
			$this->load->view('backend/cliente/templates/pre_footer');
			$this->load->view('backend/cliente/templates/footer');
		}
		else{
			//echo "datos incorrectos";
		$this->load->view('templates/header');
		$this->load->view('logins/inicio');
			$this->load->view('templates/footer');}
		}

		

	}