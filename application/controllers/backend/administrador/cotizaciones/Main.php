<?php

class Main extends MY_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('mSolicitud');
		$this->load->model('mObservacion');
		$this->load->model('mCliente');
		$this->load->model('mVerificacion');
		$this->load->model('mCondicion');
		$this->load->model('mRechazo_servicio');
		$this->load->model('mCotizacion');
			$this->load->model('mPago');
	}

	public function index()
	{
		
	}
	public function inicio($id)
	{
		$data['id']=$id;
		$total= $this->mVerificacion->consulta_totales($id);
		$total2= $this->mCondicion->consulta_totales($id);
		$total3= $this->mRechazo_servicio->consulta_totales($id);
		$total4= $this->mPago->consulta_totales($id);
		if ($total==0) {
		
		$data['consulta_sol_id']= $this->mSolicitud->consulta_solicitudes_full_id($id);
	}
	else {
		$data['consulta_sol_id']= $this->mSolicitud->consulta_solicitudes_full_id($id);

		$data['consulta_verificacion']= $this->mVerificacion->consulta_verificacion($id);
	}

		if ($total2==1) {
		
		$data['consulta_condicion']= $this->mCondicion->consulta_condicion($id);
	}
	if ($total3==1) {
		
		$data['consulta_rechazo']= $this->mRechazo_servicio->consulta_rechazo($id);
	}
	if ($total4==1) {
		
		$data['consulta_cotizacion']= $this->mCotizacion->consulta_cotizacion($id);
		$data['consulta_pago']= $this->mPago->consulta_pago($id);
	}
$data['indice']=6;

			$data2['consulta_todo'] = $this->mSolicitud->consulta_solicitudes();


		$this->load->view('backend/administrador/templates/head');
		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/sideNav',$data2);
			$this->load->view('backend/administrador/cotizaciones/proceso_cotizacion',$data);
		$this->load->view('backend/administrador/templates/pre_footer');
		$this->load->view('backend/administrador/templates/footer');
	}
}