<?php
class cDen_origen extends CI_Controller {

	
	function __construct(){
		parent:: __construct();
		$this->load->model('mDen_origen');
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
			
		$this->mDen_origen->guardar($id);
			
			
	}
	
	public function actualizar()
	{
		$data=$_POST;
		//$fechaM=time();
		$data2['sol']= $this->mSolicitud->consulta();

		
			$id=$data2['sol']->id_solicitud;
			if($id==""){
		
			}else{
					$this->mDen_origen->actualizar($data,$id);
				}
			
	}
	public function eliminar()
	{
		
		$data2['sol']= $this->mSolicitud->consulta();

		
			$id=$data2['sol']->id_solicitud;
			if($id==""){
		
			}else{
					$this->mDen_origen->eliminar($id);
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
		//$norma=$data2['sol']->global_coc;
		//echo json_encode($norma);
		$data['consulta_den_origen'] = $this->mDen_origen->consulta_origen($idsol);
		$this->load->view('backend/cliente/solicitud/normas/den_origen',$data);	
		//$this->load->view('backend/cliente/solicitud/nueva_solicitud',$data);
	}
	public function subir_archivo()
	{
		
		//$docs=$this->load->database('docs',true);

		$fecha=time();
$uploaddir = "".$fecha;
//$uploadfile = $uploaddir . basename($_FILES['archivo']['name']);
$name=basename($_FILES["file1"]["name"]);

$fileName = $uploaddir.$name; // The file name
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Por favor seleccione un archivo.";
    exit();
}

 $dossier ="docs_solicitud/den_origen/";
             $fichier = basename($_FILES['file1']['name']);
             if(move_uploaded_file($_FILES['file1']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
             {

//if(move_uploaded_file($fileTmpLoc,base_url()."$fileName")){
   $data=$_POST;
   $data['url']=$dossier.$fichier;
		//$fechaM=time();
		$this->mDen_origen->subir_archivo($data);
	
	
	 //echo " Enviado";
	
	
} else {
    //echo "move_uploaded_file Error";
}
		
		
		
	}
	
}