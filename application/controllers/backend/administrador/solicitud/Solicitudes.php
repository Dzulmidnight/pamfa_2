<?php

class Solicitudes extends CI_Controller{


	function __construct(){
		parent:: __construct();
		$this->load->model('mCliente');
		$this->load->model('mPais');
		$this->load->model('mMexico');
		$this->load->model('mSolicitud');
		$this->load->model('mCert_anterior_sol');
		$this->load->model('mGlobal_ifa');
		$this->load->model('mGlobal_coc');
		$this->load->model('mProducto_srrc');
		$this->load->model('mSrrc');
		$this->load->model('mDen_origen');
		$this->load->model('mMcs');
		$this->load->model('mObservacion');
		$this->load->model('mSeccion');
		$this->load->model('mNorma');
	}

	function nueva_solicitud($id,$cliente){


$idsol="";
			$norma_ifa="";
			$norma_coc="";
			$norma_mex="";
			$norma_srrc="";
			$norma_origen="";
			$norma_mcs="";
		$data2['sol']= $this->mSolicitud->consulta_id($id);

		if(!empty($data2['sol']))
		{
			$idsol=$data2['sol']->id_solicitud;
			$norma_ifa=$data2['sol']->global_ifa;
			$norma_coc=$data2['sol']->global_coc;
			$norma_mex=$data2['sol']->hecho_mexico;
			$norma_srrc=$data2['sol']->srrc;
			$norma_origen=$data2['sol']->den_origen;
			$norma_mcs=$data2['sol']->mcs;
				$anexo_m=$data2['sol']->anexo_m;
			$anexo_p=$data2['sol']->anexo_p;
			

		}

			else{
			$this->mSolicitud->guardar();
			$data2['sol']= $this->mSolicitud->consulta_id($id);

			$idsol=$data2['sol']->id_solicitud;
			$norma_ifa=$data2['sol']->global_ifa;
			$norma_coc=$data2['sol']->global_coc;
			$norma_mex=$data2['sol']->hecho_mexico;
			$norma_srrc=$data2['sol']->srrc;
			$norma_origen=$data2['sol']->den_origen;
			$norma_mcs=$data2['sol']->mcs;
				$anexo_m=$data2['sol']->anexo_m;
			$anexo_p=$data2['sol']->anexo_p;
			


			$this->mCert_anterior_sol->guardar($idsol);
		}

		$data['ids']=$idsol;

		$data['consulta_datos_gral'] = $this->mCliente->consulta_datos_gral_admin($cliente);
			$data['pais'] = $this->mPais->paises();
			$data['consulta_fiscal'] = $this->mCliente->consulta_fiscal_admin($cliente);

			$data['consulta_cert'] = $this->mCert_anterior_sol->consulta_cert($idsol);

			if($norma_ifa!=NULL){
				$data['consulta_ifa'] = $this->mGlobal_ifa->consulta_ifa($idsol);
				$data['norma_ifa']='ifa';
			}
			if($norma_coc!=NULL){
				$data['consulta_coc'] = $this->mGlobal_coc->consulta_coc($idsol);
				$data['norma_coc']='coc';
			}
			if($norma_mex!=NULL){
				$data['consulta_mex'] = $this->mMexico->consulta_mex($idsol);
				$data['norma_mex']='mexico';
			}
			if($norma_srrc!=NULL){
				$data['consulta_srrc'] = $this->mSrrc->consulta_srrc($idsol);
				$data['consulta_srrc2'] = $this->mProducto_srrc->consulta_srrc($idsol);
				$data['norma_srrc']='srrc';
			}
			if($norma_origen!=NULL){
				$data['consulta_den_origen'] = $this->mDen_origen->consulta_origen($idsol);
				$data['norma_origen']='origen';
			}
			if($norma_mcs!=NULL){
				$data['consulta_mexcalsup'] = $this->mMcs->consulta_mexcalsup($idsol);
				$data['consulta_productos'] = $this->mMcs->consulta_productos($idsol);
				$data['norma_mexcalsup']='mexcalsup';
			}
			$data['idiomas']=$data2['sol']->idiomas;
			$data['uso_datos']=$data2['sol']->uso_datos;
			$data['consulta_todo'] = $this->mSolicitud->consulta_solicitudes();
			$data['anexo_p']=$anexo_p;
			$data['anexo_m']=$anexo_m;

		//$this->load->view('backend/cliente/solicitud/global_ifa',$data,$norma);

		$this->load->view('backend/administrador/templates/head');
		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/sideNav',$data);
		$data['observaciones'] = $this->mObservacion->consulta_obs($idsol);
		$data['seccion']= $this->mSeccion->consulta();
		$data['norma_comp']= $this->mNorma->consulta();
		$this->load->view('backend/administrador/solicitud/nueva_solicitud',$data);
			$this->load->view('backend/administrador/solicitudes/observaciones',$data);
			
		$this->load->view('backend/administrador/templates/pre_footer');
		$this->load->view('backend/administrador/templates/footer',$data);


	}

	public function ingresa_norma($id,$x,$y)
	{



			$idsol=$id;
		$data=$_POST;

		if($x=='cGlobal_ifa'){
			$x="global_ifa";
		}
		if($x=='cGlobal_coc'){
			$x="global_coc";
		}
		if($x=='cMexico'){
			$x="hecho_mexico";
			$this->mMexico->eliminar_todo($idsol);
		}
		if($x=='cSrrc'){
			$x="srrc";

		}
		if($x=='cDen_origen'){
			$x="den_origen";

		}
		if($x=='cMcs'){
			$x="mcs";

		}

		$this->mSolicitud->actualiza_norma($x,$y,$idsol);



	}
	public function ver($x)
	{
		$data2['sol']= $this->mSolicitud->consulta();


			$idsol=$data2['sol']->id_solicitud;


		$data['consulta_ifa2'] = $this->mGlobal_ifa->consulta_ifa($idsol);

	}
	public function actualizar_final($id)
	{
		$data=$_POST;



		$this->mSolicitud->actualiza_final($data,$id);


	}
}
