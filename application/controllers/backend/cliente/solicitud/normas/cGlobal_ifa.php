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
	public function guardar()
	{
		$data=$_POST;
		//$fechaM=time();
		$data2['sol']= $this->mSolicitud->consulta();

		
			$id=$data2['sol']->id_solicitud;
			
		$this->mGlobal_ifa->guardar($id);
			
			
	}
	
	public function actualizar()
	{
		$data=$_POST;
		//$fechaM=time();
		$data2['sol']= $this->mSolicitud->consulta();

		
			$id=$data2['sol']->id_solicitud;
			if($id==""){
		
			}else{
					$this->mGlobal_ifa->actualizar($data,$id);
				}
			
	}
	public function eliminar()
	{
		
		$data2['sol']= $this->mSolicitud->consulta();

		
			$id=$data2['sol']->id_solicitud;
			if($id==""){
		
			}else{
					$this->mGlobal_ifa->eliminar($id);
				}
			
	}
	public function ver()
	{
		/*$data2['sol']= $this->mSolicitud->consulta();

		
			$idsol=$data2['sol']->id_solicitud;
		
		
		$data['consulta_ifa'] = $this->mGlobal_ifa->consulta_ifa($idsol);
		*/
			
	}
	Public function div()
	{
		
		
		$data2['sol']= $this->mSolicitud->consulta();

		
			$idsol=$data2['sol']->id_solicitud;
		//$norma=$data2['sol']->global_ifa;
		//echo json_encode($norma);
		$data['consulta_ifa'] = $this->mGlobal_ifa->consulta_ifa($idsol);
		$this->load->view('backend/cliente/solicitud/normas/global_ifa',$data);	
		//$this->load->view('backend/cliente/solicitud/nueva_solicitud',$data);
	}
	
}