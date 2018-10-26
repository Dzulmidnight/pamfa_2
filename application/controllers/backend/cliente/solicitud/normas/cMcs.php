<?php
class cMcs extends CI_Controller {

	
	function __construct(){
		parent:: __construct();
		$this->load->model('mMcs');
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
			
		$this->mMcs->guardar($id);
			
			
	}
	
	public function actualizar()
	{
		$data=$_POST;
		//$fechaM=time();
		$data2['sol']= $this->mSolicitud->consulta();

		
			$id=$data2['sol']->id_solicitud;
			if($id==""){
		
			}else{
					$this->mMcs->actualizar($data,$id);
				}
			
	}
	public function eliminar()
	{
		$data2['sol']= $this->mSolicitud->consulta();

		
			$id=$data2['sol']->id_solicitud;
			if($id==""){
		
			}else{

				$consulta_prod=$this->mMcs->consulta_productos($id);
				foreach($consulta_prod as $fila){

				if (file_exists($fila->anexo1)) {
    				echo "El fichero  existe";
    
    				unlink($fila->anexo1);
					} 
					if (file_exists($fila->anexo2)) {
    				echo "El fichero  existe";
    
    				unlink($fila->anexo2);
					} 

				}
					$this->mMcs->eliminar($id);
					$this->mMcs->eliminar_todo($id);
				}
			
	}
	public function eliminar_equipo()
	{
		$data=$_POST;
		$f=$data['anexo1'];
		$f2=$data['anexo2'];
		echo "archivo".base_url().$data['anexo1'];

		if (file_exists($f)) {
    echo "El fichero  existe";
     //echo "<script type='text/javascript'>console.log('entra');</script>";
    unlink($data['anexo1']);
} 
if (file_exists($f2)) {
    echo "El fichero  existe";
     //echo "<script type='text/javascript'>console.log('entra');</script>";
    unlink($data['anexo2']);
} 
					$this->mMcs->eliminar_equipo($data);
				
			
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
		$data['consulta_mexcalsup'] = $this->mMcs->consulta_mexcalsup($idsol);
		$this->load->view('backend/cliente/solicitud/normas/mexcalsup',$data);	
		//$this->load->view('backend/cliente/solicitud/nueva_solicitud',$data);
	}
	public function subir_archivo()
	{
		
		$data=$_POST;
		



if(isset($_FILES["file2"]))

{
$_FILES["file2"]=$_FILES["file2"];
 $data['anexo']=2;
 $fileTmpLoc = $_FILES["file2"]["tmp_name"]; // File in the PHP tmp folder
}

if(isset($_FILES["file3"]))

{
$_FILES["file2"]=$_FILES["file3"];
$data['anexo']=3;
$fileTmpLoc = $_FILES["file3"]["tmp_name"]; // File in the PHP tmp folder
}



if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Por favor seleccione un archivo.";
    exit();
}

 $dossier ="docs_solicitud/mexcalsup/";
             $fichier = $_POST['fecha'].basename($_FILES['file2']['name']);
            
             if(move_uploaded_file($_FILES['file2']['tmp_name'], $dossier . $fichier)) //Si 
             {

   
   $data['url']=$dossier.$fichier;
		//$fechaM=time();
   $data2['sol']= $this->mSolicitud->consulta();

		
			$id=$data2['sol']->id_solicitud;
		$this->mMcs->subir_archivo($data,$id);
	
	
	 //echo " Enviado";
	
	
} else {
    //echo "move_uploaded_file Error";
}
		
		
		
	}
	

	public function subir_archivo2()
	{
		
		$dos=0;
		
		if(isset($_FILES["file5"])&& isset($_FILES["file6"]))
			{
				$dos=1;
				$dossier ="docs_solicitud/mexcalsup/";
             $fichier = $_POST['fecha'].basename($_FILES['file5']['name']);
             //$dossier2 ="docs_solicitud/mexcalsup/";
             $fichier2 = $_POST['fecha'].basename($_FILES['file6']['name']);
            $b=0;
             if(move_uploaded_file($_FILES['file5']['tmp_name'], $dossier . $fichier)) //Si 
             {

    			$b=1;
	
			} else 
			{
   			 echo "aca";
			}

				if( move_uploaded_file($_FILES['file6']['tmp_name'], $dossier . $fichier2 )) //Si 
             {

    			$b=2;
	
			} else 
			{
   			 echo "aaa";
			}
			if($b==2){
				$data=$_POST;
   				$data['url']=$dossier.$fichier;
   				$data['url2']=$dossier.$fichier2;
		//$fechaM=time();
   				$data2['sol']= $this->mSolicitud->consulta();
    				//$data['anexo']= 2;
		
					$id=$data2['sol']->id_solicitud;
					
				$this->mMcs->subir_archivo3($data,$id);
			}
			}
////////////////////uno por uno
			if(isset($_FILES["file5"])&& $_FILES["file5"]["tmp_name"]!=NULL && $dos==0)
			{
				
				
				$fileTmpLoc = $_FILES["file5"]["tmp_name"]; // File in the PHP tmp folder

					if (!$fileTmpLoc) 
					{ // if file not chosen
   					 echo "ERROR: Por favor seleccione un archivo.";
    				exit();
					}
			$dossier ="docs_solicitud/mexcalsup/";
             $fichier = $_POST['fecha'].basename($_FILES['file5']['name']);
            
             if(move_uploaded_file($_FILES['file5']['tmp_name'], $dossier . $fichier)) //Si 
             {

    			$data=$_POST;
   				$data['url']=$dossier.$fichier;
		//$fechaM=time();
   				$data2['sol']= $this->mSolicitud->consulta();
    				$data['anexo']= 2;
		
					$id=$data2['sol']->id_solicitud;
					
				$this->mMcs->subir_archivo2($data,$id);
	
			} else 
			{
   			 echo "move_uploaded_file Error";
			}

}
if(isset($_FILES["file6"])&& $_FILES["file6"]["tmp_name"]!=NULL && $dos==0)
			{
				
				$fileTmpLoc = $_FILES["file6"]["tmp_name"]; // File in the PHP tmp folder
			

					if (!$fileTmpLoc) 
					{ // if file not chosen
   					 echo "ERROR: Por favor seleccione un archivo.";
    				exit();
					}
			$dossier ="docs_solicitud/mexcalsup/";
             $fichier =$_POST['fecha'].basename($_FILES['file6']['name']);
            
             if(move_uploaded_file($_FILES['file6']['tmp_name'], $dossier . $fichier)) //Si 
             {

    			$data=$_POST;
   				$data['url']=$dossier.$fichier;
		//$fechaM=time();
   				$data2['sol']= $this->mSolicitud->consulta();
    				$data['anexo']= 3;
		
					$id=$data2['sol']->id_solicitud;
					
				$this->mMcs->subir_archivo2($data,$id);
	
			} else 
			{
   			 echo "move_uploaded_file Error";
			}

}

}

Public function tabla()
	{
		$data2['sol']= $this->mSolicitud->consulta();

		
			$idsol=$data2['sol']->id_solicitud;
		
		$data['consulta_productos'] = $this->mMcs->consulta_productos($idsol);
		$this->load->view('backend/cliente/solicitud/normas/producto_mexcalsup',$data);	
		//$this->load->view('backend/cliente/solicitud/nueva_solicitud',$data);
	}

}