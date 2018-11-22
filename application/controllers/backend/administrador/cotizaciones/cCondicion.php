<?php
class cCondicion extends CI_Controller {

	
	function __construct(){
		parent:: __construct();
		
		$this->load->model('mSolicitud');
		$this->load->model('mCondicion');
		
	}
	public function index()
	{
		//$this->load->view('backend/cliente/usuario/datos_generales');
	}
	public function guardar($id)
	{
		$data=$_POST;
		$total= $this->mCondicion->consulta_totales($id);
		if ($total==1) {
		
		$this->mCondicion->actualizar_id($data,$id);
	}
	else {
		
		$this->mCondicion->guardar($data,$id);
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
