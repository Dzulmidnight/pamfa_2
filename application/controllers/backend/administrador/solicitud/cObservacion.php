<?php
class cObservacion extends CI_Controller {

	
	function __construct(){
		parent:: __construct();
		$this->load->model('mObservacion');
		$this->load->model('mSolicitud');
		$this->load->model('mSeccion');
		
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
			
	}
	
	Public function tabla($id)
	{
		
		
		$data3['observaciones'] = $this->mObservacion->consulta_obs($id);
		$data3['seccion']= $this->mSeccion->consulta();
		$this->load->view('backend/administrador/solicitud/observaciones_div',$data3);	
		//$this->load->view('backend/cliente/solicitud/nueva_solicitud',$data);
	}
	
	
}
