<?php
class Cotizacion extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('mCotizacion');
		$this->load->model('mRechazo_servicio');
		$this->load->model('mSolicitud');
	}

	public function ver($id)
	{
		$data['consulta_rechazo']= $this->mRechazo_servicio->consulta_rechazo($id);
		$data['consulta_sol_id'] = $this->mSolicitud->consulta_solicitudes_full_id($id);
		$data['consulta_cotizacion'] = $this->mCotizacion->consulta_cotizacion($id);
		$this->load->view('backend/cliente/templates/head');
		$this->load->view('backend/cliente/templates/header');
		$this->load->view('backend/cliente/templates/sideNav');
			$this->load->view('backend/cliente/solicitud/cotizacion',$data);
		$this->load->view('backend/cliente/templates/pre_footer');
		$this->load->view('backend/cliente/templates/footer');
	}
}