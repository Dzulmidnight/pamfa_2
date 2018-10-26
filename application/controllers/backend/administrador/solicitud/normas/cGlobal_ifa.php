<?php
class cGlobal_ifa extends CI_Controller {

	
	function __construct(){
		parent:: __construct();
		$this->load->model('mGlobal_ifa');
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
		//$data2['sol']= $this->mSolicitud->consulta_id();

		
			//$id=$data2['sol']->id_solicitud;
			
		$this->mGlobal_ifa->guardar($id);
			
			
	}
	
	public function actualizar($id)
	{
		$data=$_POST;
		//$fechaM=time();
		
			if($id==""){
		
			}else{
					$this->mGlobal_ifa->actualizar($data,$id);
				}
			
	}
	public function eliminar($id)
	{
		
		
					$this->mGlobal_ifa->eliminar($id);
				
			
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
		
		
		
		//$norma=$data2['sol']->global_ifa;
		//echo json_encode($norma);
		$data['consulta_ifa'] = $this->mGlobal_ifa->consulta_ifa($id);
		$this->load->view('backend/cliente/solicitud/normas/global_ifa',$data);	
		//$this->load->view('backend/cliente/solicitud/nueva_solicitud',$data);
	}
	
}