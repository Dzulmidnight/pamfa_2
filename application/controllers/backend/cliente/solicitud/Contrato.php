<?php

class Contrato extends CI_Controller{

	
	function __construct(){
		parent:: __construct();
		$this->load->model('mSolicitud');
		$this->load->model('mGlobal_ifa');
		$this->load->model('mProducto_srrc');
		$this->load->model('mGlobal_coc');
		$this->load->model('mMcs');
		$this->load->model('mDen_origen');
		$this->load->model('mMexico');
		$this->load->model('mSrrc');
		$this->load->model('mContrato');
		$this->load->model('mCotizacion');
		
	}

	

	public function detalleContrato($id_contrato){
		$data['id_contrato'] = $id_contrato;
		$data['consulta_sol_id']= $this->mSolicitud->consulta_solicitudes_full_id($id_contrato);

		foreach ($data['consulta_sol_id'] as $f) {
			
		if($f->global_ifa!=null)
		{
			$data['consulta_ifa']= $this->mGlobal_ifa->consulta_ifa($id_contrato);

		}
		if($f->global_coc!=null)
		{
			$data['consulta_coc']= $this->mGlobal_coc->consulta_coc($id_contrato);

		}
		if($f->mcs!=null)
		{
			$data['consulta_mcs']= $this->mMcs->consulta_mexcalsup($id_contrato);

		}
		if($f->srrc!=null)
		{
			$data['consulta_srrc']= $this->mProducto_srrc->consulta_srrc($id_contrato);
			$data['consulta_srrc2']= $this->mSrrc->consulta_srrc($id_contrato);

		}
		if($f->hecho_mexico!=null)
		{
			$data['consulta_mex']= $this->mMexico->consulta_mex($id_contrato);

		}
		if($f->den_origen!=null)
		{
			$data['consulta_origen']= $this->mDen_origen->consulta_origen($id_contrato);

		}

	}
	$data['consulta_cont']= $this->mContrato->consulta($id_contrato);
	$data['consulta_contrato']= $this->mContrato->consulta_contrato($id_contrato);
	$data['consulta_cotizacion']= $this->mCotizacion->consulta_cotizacion($id_contrato);
	$data['consulta_todo']= $this->mSolicitud->consulta_solicitudes();
	$data['ids']=$id_contrato;
		$this->load->view('backend/cliente/templates/head');
		$this->load->view('backend/cliente/templates/header');
		$this->load->view('backend/cliente/templates/sideNav',$data);
			$this->load->view('backend/cliente/contrato/detalle_contrato.php',$data);
		$this->load->view('backend/cliente/templates/pre_footer');
		$this->load->view('backend/cliente/templates/footer');
	}

	function actualizar()
	{
		$data['razon']=NULL;
		$data['firma']=$this->session->userdata('s_idusuario');
		$data['idsolicitud']=$this->input->post('idsolicitud');

		$data['estatus']=$this->input->post('estatus');
		if ($data['estatus']==2) {
			$data['razon']=$this->input->post('text');
			$data['firma']=NULL;

			# code...
		}
		
		
		$this->mContrato->actualizar_de_cliente($data);
		
	}


}