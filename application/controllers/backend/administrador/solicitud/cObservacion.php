<?php
class cObservacion extends MY_Controller {

	
	function __construct(){
		parent:: __construct();
		$this->load->model('mObservacion');
		$this->load->model('mSolicitud');
		$this->load->model('mSeccion');


		$this->load->model('mCliente');
		$this->load->model('mObservacion');
		$this->load->model('mPago');
		$this->load->model('mRechazo_servicio');

		$this->load->model('mContrato');

		
	
		
	}
	public function index()
	{
		//$this->load->view('backend/cliente/usuario/datos_generales');
	}
	public function guardar($id)
	{
		$data=$_POST;

		$s=$this->mSeccion->consulta($_POST['seccion']);
		$fechaM=time();
		$t=1;
		$t=$this->mObservacion->consulta_obs_una($data,$id);
		if ($t==0) {
		$this->mObservacion->guardar($data,$id,$fechaM);
		}
		
			
	}
	
	public function eliminar()
	{
		$data=$_POST;
		//$fechaM=time();
		$this->mObservacion->eliminar($data);
			
	}
	public function actualizar()
	{
		$data=$_POST;
		$this->mObservacion->actualizar($data);

		$data2['consulta_solicitudes']= $this->mSolicitud->consulta_solicitudes_full();
		$data2['consulta_todo']= $this->mSolicitud->consulta_solicitudes();
		$data2['consulta_totales']= $this->mObservacion->consulta_totales();
			

				$data['vistaOb'] = $this->load->view('backend/administrador/solicitudes/solicitudes_pendientes',$data2,true);
			echo $data['vistaOb'];
			
			
	}
	public function actualizar_de_cliente()
	{
		$data=$_POST;
		$this->mObservacion->actualizar($data);

		$data2['consulta_todo_c'] = $this->mSolicitud->consulta_solicitudes_cliente($this->session->userdata('s_idusuario'));
				$data2['consulta_totales']= $this->mObservacion->consulta_totales();
				$data2['consulta_pago']= $this->mPago->consulta_todo();
				$data2['consulta_rechazo']= $this->mRechazo_servicio->consulta_rechazo_c();
				$data2['consulta_contrato']= $this->mContrato->consulta_todo();
					//echo $data['consulta_todo'];
			$this->load->view('backend/cliente/templates/head');
			$this->load->view('backend/cliente/templates/header');
			$this->load->view('backend/cliente/templates/sideNav');
				
			

				$data['vistaOb'] = $this->load->view('backend/cliente/index',$data2,true);
			echo $data['vistaOb'];
			
			
	}
	
	Public function tabla($id)
	{
		
		
		$data3['observaciones'] = $this->mObservacion->consulta_obs($id);
		$data3['seccion']= $this->mSeccion->consulta();
		$this->load->view('backend/administrador/solicitud/observaciones_div',$data3);	
		//$this->load->view('backend/cliente/solicitud/nueva_solicitud',$data);
	}
	

	
}
