<?php
class cAuditor extends CI_Controller {

	
	function __construct(){
		parent:: __construct();
		
		$this->load->model('mAuditor');
	}
	public function index()
	{
		//$this->load->view('backend/cliente/usuario/datos_generales');
	}
	public function guardar()
	{
		
				

		$params=$_POST;
		
		$this->mAuditor->guardar($params);
		$data['consulta'] = $this->mAuditor->consulta();

		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/topnavigation');
		$this->load->view('backend/administrador/templates/navbar');
		$this->load->view('backend/administrador/auditores/listado_auditores',$data);
		$this->load->view('backend/administrador/templates/footer');


	}
	public function estatus($e,$id)
	{
		echo json_encode("jfjksjdbfkjds".$e);
		
		$fechaM=time();
		
		$this->mAuditor->estatus($e,$id,$fechaM);
		
		
		
				$data['consulta'] = $this->mAuditor->consulta();

		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/topnavigation');
		$this->load->view('backend/administrador/templates/navbar');
		$this->load->view('backend/administrador/auditores/listado_auditores',$data);
		$this->load->view('backend/administrador/templates/footer');
	}
	public function generales()
	{
		
		$data=$_POST;
		$fechaM=time();
		$this->mAuditor->actualiza_generales($data,$fechaM);
			$this->load->view('backend/auditor/templates/header');
			$this->load->view('backend/auditor/templates/topnavigation');
			$this->load->view('backend/auditor/templates/navbar.php');
			$this->load->view('backend/auditor/index');
			$this->load->view('backend/auditor/templates/footer');
	}
	
}
