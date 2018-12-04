<?php
class cSrrc extends MY_Controller {

	
	function __construct(){
		parent:: __construct();
		$this->load->model('mSrrc');
		$this->load->model('mProducto_srrc');
		$this->load->model('mSolicitud');
		
	}
	public function index()
	{
		//$this->load->view('backend/cliente/usuario/datos_generales');
	}
	public function guardar($id)
	{
		$data=$_POST;
		//$fechaM=time();
		
		$this->mSrrc->guardar($id);
			
			
	}
	public function guardar_c($id)
	{
		$data=$_POST;
		//$fechaM=time();
		
			
		$this->mSrrc->guardar_c($id);
			
			
	}
	
	public function actualizar($id)
	{
		$data=$_POST;
		//$fechaM=time();
		
			if($id==""){
		
			}else{
					$this->mSrrc->actualizar($data,$id);
				}
			
	}
	public function eliminar($id)
	{
		
		
			if($id==""){
		
			}else{
					$this->mSrrc->eliminar($id);
					$this->mProducto_srrc->eliminar_todo($id);
				}
			
	}
	public function ver()
	{
		/*$data2['sol']= $this->mSolicitud->consulta();

		
			$idsol=$data2['sol']->id_solicitud;
		
		
		$data['consulta_ifa'] = $this->mGlobal_ifa->consulta_ifa($idsol);
		*/
			
	}
	Public function div($id)
	{
		
		
		
		$data['consulta_srrc'] = $this->mSrrc->consulta_srrc($id);
		$this->load->view('backend/cliente/solicitud/normas/srrc',$data);	
		//$this->load->view('backend/cliente/solicitud/nueva_solicitud',$data);
	}
	
}