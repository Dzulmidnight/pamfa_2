<?php
	class Main extends CI_Controller{


		function __construct(){
		parent:: __construct();
		
		$this->load->model('mSolicitud');
		$this->load->model('mCliente');
		
	}
		
		public function index(){
			if($this->session->userdata('s_tipo')=='administrador'){

				$data['consulta_todo'] = $this->mSolicitud->consulta_solicitudes();
				$data['consulta_full'] = $this->mSolicitud->consulta_solicitudes_full();
				$data['consulta_gral'] = $this->mCliente->consulta_pendientes();
				
			$this->load->view('backend/administrador/templates/head');
			$this->load->view('backend/administrador/templates/header');
			$this->load->view('backend/administrador/templates/sideNav');
				$this->load->view('backend/administrador/index',$data);
			$this->load->view('backend/administrador/templates/pre_footer.php');
			$this->load->view('backend/administrador/templates/footer');
		}
		else{
			//echo "datos incorrectos";
			$this->load->view('templates/header');
				$this->load->view('logins/inicio');
			$this->load->view('templates/footer');}
		}

	}