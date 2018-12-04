<?php
class cCotizacion extends MY_Controller {

	
	function __construct(){
		parent:: __construct();
		
		$this->load->model('mSolicitud');
		$this->load->model('mCotizacion');
		
	}
	public function index()
	{
		//$this->load->view('backend/cliente/usuario/datos_generales');
	}
	public function guardar()
	{
		$i=$this->input->post('indice');
		$data['concepto']=$this->input->post('concepto');
		$data['descripcion']=$this->input->post('descripcion');
		$data['costo']=$this->input->post('costo');

		$data['cantidad']=$this->input->post('cantidad');
		$data['pre_total']=$this->input->post('pre_total');
		$data['indice']=$this->input->post('indice');
		$data['idsolicitud']=$this->input->post('idsolicitud');
		

		
		$total= $this->mCotizacion->consulta_totales($data);
		if ($total==1) {
		
		$this->mCotizacion->actualizar($data,$i);
		//$this->mCotizacion->guardar($data,$id);
	}
	else {
		
		$this->mCotizacion->guardar($data);
	}
		
			
	}
	
	
	
	
	Public function tabla($indice)
	{
		
		
		
		$data3['indice']= $indice;
		$this->load->view('backend/administrador/cotizaciones/cotizacion_div',$data3);	
			
		//$this->load->view('backend/cliente/solicitud/nueva_solicitud',$data);
	}
	public function eliminar($id)
	{
		$data=$_POST;
		
		//echo json_encode($data);
		//$data['indice']=$this->input->post('indice');
		$data['idsolicitud']=$id;
		echo json_encode($data);
		
		$total=$this->mCotizacion->consulta_totales($data);
		if ($total>0) {
			$this->mCotizacion->eliminar($data);
		}
		
			
	}
	
	
}
