<?php
class cExcel extends MY_Controller {

	
	function __construct(){
		parent:: __construct();
		//$this->load->model('mCert_anterior_sol');
		$this->load->model('mExcel');

$this->load->model('mSolicitud');	}
	public function index()
	{
		//$this->load->view('backend/cliente/usuario/datos_generales');
	}
	public function guardar($id)
	{
 		extract($_POST);
if (isset($_POST['action'])) {
$action=$_POST['action'];
}
 
if (isset($action)== "upload"){
//cargamos el fichero
$archivo = $_FILES['excel1']['name'];
$tipo = $_FILES['excel1']['type'];
$destino = "cop_".$archivo;//Le agregamos un prefijo para identificarlo el archivo cargado
if (copy($_FILES['excel1']['tmp_name'],$destino)) echo "Archivo Cargado Con Éxito";
else echo "Error Al Cargar el Archivo";
 
if (file_exists ("cop_".$archivo)){ 
/** Llamamos las clases necesarias PHPEcel */
require_once('assets/PHPExcel.php');
require_once('assets/PHPExcel/Reader/Excel2007.php'); 
// Cargando la hoja de excel
$objReader = new PHPExcel_Reader_Excel2007();
$objPHPExcel = $objReader->load("cop_".$archivo);
$objFecha = new PHPExcel_Shared_Date();       
// Asignamon la hoja de excel activa
$objPHPExcel->setActiveSheetIndex(0);
 
// Importante - conexión con la base de datos 
 
//$cn = mysql_connect ("localhost","root","root") or die ("ERROR EN LA CONEXION CON LA BD");
//$db = mysql_select_db ("excel",$cn) or die ("ERROR AL CONECTAR A LA BD");
 
// Rellenamos el arreglo con los datos  del archivo xlsx que ha sido subido
 
$columnas = $objPHPExcel->setActiveSheetIndex(0)->getHighestColumn();
$filas = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
 
//Creamos un array con todos los datos del Excel importado

for ($i=11;$i<=$filas;$i++){
	 
 $_DATOS_EXCEL[$i]['pregunta1'] = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['pregunta2'] = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['pregunta3']= $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['pregunta4']= $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['pregunta5'] = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['pregunta6'] = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['pregunta7'] = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['pregunta8'] = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['pregunta9']= $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['pregunta10']= $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['pregunta11'] = $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['pregunta12'] = $objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['pregunta13'] = $objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['pregunta14'] = $objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['pregunta15']= $objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['pregunta16']= $objPHPExcel->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['pregunta17'] = $objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['pregunta18'] = $objPHPExcel->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['pregunta19'] = $objPHPExcel->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();

 } 
 $errores=0;

 $dossier ="docs_solicitud/anexos/produccion/";
             $fichier = $_POST['fecha'].basename($_FILES['excel1']['name']);
            
             if(move_uploaded_file($_FILES['excel1']['tmp_name'], $dossier . $fichier)) //Si 
             {
$data['url']=$dossier.$fichier;
$data['tipo']=$_POST['tipo'];
//$data['tipo_p']=$_POST['tipo_p'];


 
 
$this->mExcel->guardar($_DATOS_EXCEL,$id,$data);
$this->mSolicitud->actualiza_anexo($data,$id);

}


 ///////////////////////////////////////////////////////////////////////// 

 //Borramos el archivo que esta en el servidor con el prefijo cop_
 unlink($destino);
 
 }
 //si por algun motivo no cargo el archivo cop_ 
 else{
 echo "Primero debes cargar el archivo con extencion .xlsx";
 }
 }
 ?>
<?php 
 if (isset($action)) {
$filas = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
 }
 if (isset($filas)) {
$columnas = $objPHPExcel->setActiveSheetIndex(0)->getHighestColumn();
 }
 if (isset($filas)) {
$filas = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
 }
 
	}
}