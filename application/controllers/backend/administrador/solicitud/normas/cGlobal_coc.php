<?php
class cGlobal_coc extends CI_Controller {

	
	function __construct(){
		parent:: __construct();
		$this->load->model('mGlobal_coc');
		$this->load->model('mSolicitud');
		
	}
	public function index()
	{
		//$this->load->view('backend/cliente/usuario/datos_generales');
	}
	public function guardar($id)
	{
		
			
		$this->mGlobal_coc->guardar($id);
			
			
	}
	
	public function actualizar($id)
	{
		$data=$_POST;
		//$fechaM=time();
		
			if($id==""){
		
			}else{
					$this->mGlobal_coc->actualizar($data,$id);
				}
			
	}
	public function eliminar($id)
	{
		
		
					$this->mGlobal_coc->eliminar($id);
				
			
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
		
		
		
		//$norma=$data2['sol']->global_coc;
		//echo json_encode($norma);
		$data['consulta_coc'] = $this->mGlobal_coc->consulta_coc($id);
		$this->load->view('backend/cliente/solicitud/normas/global_coc',$data);	
		//$this->load->view('backend/cliente/solicitud/nueva_solicitud',$data);
	}
	
}