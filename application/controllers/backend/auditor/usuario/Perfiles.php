<?php
	
class Perfiles extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('mAuditor');
	}

	function index($seccion = null){

		$data['menu'] = 'backend/auditor/usuario/sub_menu';
		$data['seccion'] = $seccion;

		switch ($seccion) {
			
			case 'datos_generales':
				$data['consulta_id'] = $this->mAuditor->consulta_id();

				$seccion = 'backend/auditor/usuario/datos_generales';
				
				break;
			default:
				$data['consulta_id'] = $this->mAuditor->consulta_id();

				$seccion = 'backend/auditor/usuario/datos_generales';
				
				break;
		}

		$this->load->view('backend/auditor/templates/header');
		$this->load->view('backend/auditor/templates/topnavigation');
		$this->load->view('backend/auditor/templates/navbar.php');
		$this->load->view($seccion, $data);
		$this->load->view('backend/auditor/templates/footer');
	}
}