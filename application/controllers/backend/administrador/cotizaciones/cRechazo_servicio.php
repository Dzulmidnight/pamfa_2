<?php
class cRechazo_servicio extends MY_Controller {

	
	function __construct(){
		parent:: __construct();
		
		$this->load->model('mSolicitud');
		$this->load->model('mRechazo_servicio');
		
	}
	public function index()
	{
		//$this->load->view('backend/cliente/usuario/datos_generales');
	}
	public function guardar($id)
	{
		$data=$_POST;
		
		$total= $this->mRechazo_servicio->consulta_totales($id);
		if ($total==1) {
		
		$this->mRechazo_servicio->actualizar_id($data,$id);
	}
	else {
		
		$this->mRechazo_servicio->guardar($data,$id);
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
			
	}
	
	Public function tabla($id)
	{
		
		
		$data3['observaciones'] = $this->mObservacion->consulta_obs($id);
		$data3['seccion']= $this->mSeccion->consulta();
		$this->load->view('backend/administrador/solicitud/observaciones_div',$data3);	
		//$this->load->view('backend/cliente/solicitud/nueva_solicitud',$data);
	}
	
	
}
