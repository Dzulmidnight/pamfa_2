<?php
class SolicitudesProceso extends MY_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('mSolicitud');
	}

	public function index()
	{


		$data['consulta_solicitudes4']= $this->mSolicitud->consulta_solicitudes_full4();
		$data['consulta_todo']= $this->mSolicitud->consulta_solicitudes();
		
		$this->load->view('backend/administrador/templates/head');
		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/sideNav',$data);
			$this->load->view('backend/administrador/solicitudes/solicitudes_proceso',$data);
		$this->load->view('backend/administrador/templates/pre_footer');
		$this->load->view('backend/administrador/templates/footer');
	}
}