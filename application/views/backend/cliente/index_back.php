<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
<div class="g-bg-lightblue-v10-opacity-0_5 g-pa-20">
	<div class="row">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magnam nam, asperiores magni odit commodi aliquam obcaecati. Iusto nobis sed accusantium hic expedita. Distinctio, fugit, hic. Aliquid rem labore, mollitia.
	</div>
<?php //include("header.php");?>
<!-- FORMULARIO PARA ESTE EJERCICIO -->
<div class="container">

	<h2>Cargar e importar archivo excel a MySQL</h2>
	<form name="importa" method="post" action="" enctype="multipart/form-data" >
		<div class="col-xs-4">
			<div class="form-group">
				<input type="file" class="filestyle" data-buttonText="Seleccione archivo" name="excel">
			</div>
		</div>
		<div class="col-xs-2">
			<input class="btn btn-default btn-file" type='submit' name='enviar'  value="Importar"  />
		</div>
		<input type="hidden" value="upload" name="action" />
		<input type="hidden" value="usuarios" name="mod">
		<input type="hidden" value="masiva" name="acc">
	</form>
 
<!-- PROCESO DE CARGA Y PROCESAMIENTO DEL EXCEL-->
<?php 
extract($_POST);
if (isset($_POST['action'])) {
$action=$_POST['action'];
}
 
if (isset($action)== "upload"){
//cargamos el fichero
$archivo = $_FILES['excel']['name'];
$tipo = $_FILES['excel']['type'];
$destino = "cop_".$archivo;//Le agregamos un prefijo para identificarlo el archivo cargado
if (copy($_FILES['excel']['tmp_name'],$destino)) echo "Archivo Cargado Con Éxito";
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
for ($i=2;$i<=$filas;$i++){
 $_DATOS_EXCEL[$i]['nombres'] = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['apellidos'] = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['genero']= $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['carrera']= $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['edad'] = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['email'] = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
 $_DATOS_EXCEL[$i]['activo'] = 1;
 } 
 $errores=0;
 
 
/*foreach($_DATOS_EXCEL as $campo => $valor){
 $sql = "INSERT INTO excel  (nombres,apellidos,genero,carrera,edad,email)  VALUES ('";
 foreach ($valor as $campo2 => $valor2){
 $campo2 == "activo" ? $sql.= $valor2."');" : $sql.= $valor2."','";
 }*/
 
 //$result = mysql_query($sql);
 //if (!$result){ echo "Error al insertar registro ".$campo;$errores+=1;}
 //} 


foreach($_DATOS_EXCEL as $campo => $valor){


	 $campos=array(
		'nombres'=>$valor['nombres'],
		'apellidos'=>$valor['apellidos'],
		'genero'=>$valor['genero']);
		
		$this->db->insert('excel',$campos);
 //$sql = "INSERT INTO excel  (nombres,apellidos,genero,carrera,edad,email)  VALUES ('";
 
 
 //$result = mysql_query($sql);
 //if (!$result){ echo "Error al insertar registro ".$campo;$errores+=1;}
 } 

 ///////////////////////////////////////////////////////////////////////// 
echo "<hr> <div class='col-xs-12'>
    	<div class='form-group'>";
       echo "<strong><center>ARCHIVO IMPORTADO CON EXITO, EN TOTAL $campo REGISTROS Y $errores ERRORES</center></strong>";
echo "</div>
</div>  ";
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
 
//echo 'getHighestColumn() =  [' . $columnas . ']<br/>';
//echo 'getHighestRow() =  [' . $filas . ']<br/>';

 echo '</div>';
//include ("footer.php");
?>