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
	public function guardar()
	{
		$data=$_POST;
		//$fechaM=time();
		$data2['sol']= $this->mSolicitud->consulta();

		
			$id=$data2['sol']->id_solicitud;
			
		$this->mSrrc->guardar($id);
			
			
	}
	public function guardar_c()
	{
		$data=$_POST;
		//$fechaM=time();
		$data2['sol']= $this->mSolicitud->consulta();

		
			$id=$data2['sol']->id_solicitud;
			
		$this->mSrrc->guardar_c($id);
			
			
	}
	
	public function actualizar()
	{
		$data=$_POST;
		//$fechaM=time();
		$data2['sol']= $this->mSolicitud->consulta();

		
			$id=$data2['sol']->id_solicitud;
			if($id==""){
		
			}else{
					$this->mSrrc->actualizar($data,$id);
				}
			
	}
	public function eliminar()
	{
		
		$data2['sol']= $this->mSolicitud->consulta();

		
			$id=$data2['sol']->id_solicitud;
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
	Public function div()
	{
		
		
		$data2['sol']= $this->mSolicitud->consulta();

		
			$idsol=$data2['sol']->id_solicitud;
		//$norma=$data2['sol']->srrc;
		//echo json_encode($norma);
		$data['consulta_srrc'] = $this->mSrrc->consulta_srrc($idsol);
		$this->load->view('backend/cliente/solicitud/normas/srrc',$data);	
		//$this->load->view('backend/cliente/solicitud/nueva_solicitud',$data);
	}
	
}