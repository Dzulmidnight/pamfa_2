<?php
	class SolicitudesPendientes extends CI_Controller{
		function __construct(){
		parent:: __construct();

		$this->load->model('mSolicitud');
		$this->load->model('mObservacion');
		$this->load->model('mSeccion');
		$this->load->model('mCotizacion');
		$this->load->model('mPago');
	}

		function index(){


		$data['consulta_solicitudes']= $this->mSolicitud->consulta_solicitudes_full();
		$data['consulta_todo']= $this->mSolicitud->consulta_solicitudes();
		$data['consulta_totales']= $this->mObservacion->consulta_totales();
		$data['consulta_pago']= $this->mPago->consulta_todo();

			$this->load->view('backend/administrador/templates/head');
			$this->load->view('backend/administrador/templates/header');
			$this->load->view('backend/administrador/templates/sideNav',$data);
			$data['vistaOb'] = $this->load->view('backend/administrador/solicitudes/solicitudes_pendientes',$data,true);
			$this->load->view('backend/administrador/solicitudes/vob',$data);
				
			$this->load->view('backend/administrador/templates/pre_footer');
			$this->load->view('backend/administrador/templates/footer');
		}
public function obser()
	{
		$id=$_POST['id'];
		$data['ids']=$id;
		$data['seccion']= $this->mSeccion->consulta();
		$data['observaciones'] = $this->mObservacion->consulta_obs($id);
		$modal=$this->load->view('backend/administrador/solicitudes/observaciones',$data,true);
		echo $modal;
		
	}


	}
