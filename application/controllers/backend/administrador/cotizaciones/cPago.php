<?php
class cPago extends CI_Controller {

	
	function __construct(){
		parent:: __construct();
		
		$this->load->model('mSolicitud');
		$this->load->model('mPago');
		
	}
	public function index()
	{
		//$this->load->view('backend/cliente/usuario/datos_generales');
	}
	
	

	public function guardar1($id)
	{
		
		
		$data['idsolicitud']=$id;
		$data['estatus']="no";
		$data['fpago']=$_POST['fpago'];

		
		$this->mPago->guardar1($data);
			
	}
	
	
	public function aprobar()
	{
		
		
		$data['idsolicitud']=$_POST['idsolicitud'];
		$data['estatus']=$_POST['estatus'];

		if($_POST['text']!=NULL){
			$data['razon']=$_POST['text'];
		}
		else {
			$data['razon']="";
		}

		
		$this->mPago->actualizar($data);
			
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
		
		
		$total=$this->mCotizacion->consulta_totales($data);
		if ($total>0) {
			$this->mCotizacion->eliminar($data);
		}
		
			
	}
	
	public function subir_archivo($id)
	{
		
		//$docs=$this->load->database('docs',true);

		

$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder

if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Por favor seleccione un archivo.";
    exit();
}

 $dossier ="pago_cotizacion/";
             $fichier = $_POST['fecha'].basename($_FILES['file1']['name']);
             if(move_uploaded_file($_FILES['file1']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
             {

//if(move_uploaded_file($fileTmpLoc,base_url()."$fileName")){
   $data=$_POST;
   $data['url']=$dossier.$fichier;
   $data['id']=$id;
		//$fechaM=time();
		$this->mPago->subir_archivo($data);
	
	
	 //echo " Enviado";
	
	
} else {
    //echo "move_uploaded_file Error";
}
		
		
		
	}
}
