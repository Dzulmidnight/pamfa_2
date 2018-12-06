<?php
	
class Clientes extends MY_Controller{

function __construct(){
		parent:: __construct();
		$this->load->model('mCliente');
		$this->load->model('mSolicitud');
		$this->load->model('mPais');
	}
	function index($seccion = null){

		$data['seccion'] = $seccion;
		$data['consulta_todo']= $this->mSolicitud->consulta_solicitudes();

		switch ($seccion) {
			case 'datos_fiscales':
				$seccion = 'backend/administrador/usuario/datos_fiscales';
				break;
			case 'datos_generales':
			$data['consulta_datos_gral'] = $this->mCliente->consulta_datos_gral();
				$seccion = 'backend/administrador/usuario/datos_generale';
				break;
			default:
			//$data['consulta_gral'] = $this->mCliente->consulta_gral();
			$data['consulta_gral'] = $this->mCliente->consulta_gral_adm();
				$seccion = 'backend/administrador/clientes/listado_clientes';
				break;
		}

		$this->load->view('backend/administrador/templates/head');
		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/sideNav',$data);
			$this->load->view($seccion, $data);
		$this->load->view('backend/administrador/templates/pre_footer');
		$this->load->view('backend/administrador/templates/footer');
	}

	function detalleCliente($id){
		$data['consulta_datos_gral'] = $this->mCliente->consulta_datos_gral_admin($id);
		$data['consulta_datos_fiscal'] = $this->mCliente->consulta_fiscal_admin($id);
		$data['consulta_todo']= $this->mSolicitud->consulta_solicitudes();
		$data['pais'] = $this->mPais->paises();
		$this->load->view('backend/administrador/templates/head');
		$this->load->view('backend/administrador/templates/header');
	$this->load->view('backend/administrador/templates/sideNav',$data);
			$this->load->view('backend/administrador/clientes/detalle_cliente');
		$this->load->view('backend/administrador/templates/pre_footer');
		$this->load->view('backend/administrador/templates/footer');
	}

	function representantes(){
		$data['consulta_todo']= $this->mSolicitud->consulta_solicitudes();
		$this->load->view('backend/administrador/templates/head');
		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/sideNav',$data);
			$this->load->view('backend/administrador/clientes/representantes/representantes');
		$this->load->view('backend/administrador/templates/pre_footer');
		$this->load->view('backend/administrador/templates/footer');
	}

	function perfilRepresentante(){
		$data['consulta_todo']= $this->mSolicitud->consulta_solicitudes();
		$this->load->view('backend/administrador/templates/head');
		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/sideNav',$data);
			$this->load->view('backend/administrador/clientes/representantes/perfil_representante');
		$this->load->view('backend/administrador/templates/pre_footer');
		$this->load->view('backend/administrador/templates/footer');
	}
}