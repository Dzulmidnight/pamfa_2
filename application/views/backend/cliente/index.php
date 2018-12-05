<div class="g-pa-20">
	<div class="row">

		<!-- inicia col-md-12 -->
		<div class="col-lg-12">

			<div class="row g-mb-0">
				<div class="col-md-12 g-mb-0 g-mn-0--md">
					<div class="card border-0 rounded-0 g-mb-50">
						<!-- Panel Header -->
						<div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
							<div class="row">
								<div class="col-md-12">
									<h3 class="h6 mb-0">
										<i class="icon-layers g-pos-rel g-top-1 g-mr-5"></i> Solicitudes en Proceso
									</h3>
								</div>

							</div>

							<div class="dropdown g-mb-10 g-mb-0--md">
								<span class="d-block g-color-primary--hover g-cursor-pointer g-mr-minus-5 g-pa-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="icon-options-vertical g-pos-rel g-top-1"></i>
								</span>
								<div class="dropdown-menu dropdown-menu-right rounded-0 g-mt-10">
									<a class="dropdown-item g-px-10" href="#!">
										<i class="fa fa-line-chart g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Estadisticas
									</a>
 									<div class="dropdown-divider"></div>
									<a class="dropdown-item g-px-10" href="#!">
										<i class="fa fa-file-pdf-o g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> PDF
									</a>
									<a class="dropdown-item g-px-10" href="#!">
										<i class="fa fa-file-excel-o g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Excel
									</a>
								</div>
							</div>
						</div>
						<!-- End Panel Header -->

						<!-- Panel body -->

						<div class="js-scrollbar card-block u-info-v1-1 g-bg-white-gradient-v1--after g-height-300 g-pa-10">
							<table class="table table-striped g-font-size-12">
								<thead>
									<tr>
										<th>
											#ID
										</th>
										<th>
											Fecha
										</th>
										<th>
											Esquema
										</th>
										<th>
											Observaciones
										</th>
										<th>
											Cotización
										</th>
										<th>
											Pago
										</th>
										<th>
											Contrato
										</th>
										<th>
											...
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<a  class="btn btn-sm btn-info" href="#">
												<?php echo "# 1 Consultar"?>
											</a>
										</td>
										<td>
											<?= date('d/m/Y', time()); ?>
										</td>
										<td>
											<span class="u-label g-bg-primary g-rounded-20 g-px-15 g-mr-10 g-mb-15">IFA</span>
										</td>
										<td>
											<a class="btn btn-sm u-btn-outline-blue g-mr-10 g-mb-15 nav-link"  onclick="llamar_modal()">
												<span class="float-right u-label u-label-num u-label--sm u-label-default g-color-white g-rounded-15 g-ml-5">0</span>
											    Observaciones
											</a>
										</td>
										<td>
											<!-- mostrar cuando aun hay observaciones -->
											<a style="width:100px" href="#" class="disabled btn btn-secondary">
												<i class="fa fa-lock"></i>
											</a>
											
											<!-- mostrar cuando no hay observaciones pero aún no cargar cotización -->
											<a  href="#" class="btn u-btn-bluegray" data-toggle="tooltip" title="En proceso de decisión">
												<i class="fa fa-clock-o"></i> En proceso
											</a>

											<!-- mostrar cuando no se puede otorgar el servicio -->
											<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-rechazo">
												<i class="fa fa-close"></i> No se puede otorgar el servicio
											</a>

											<!-- mostrar cuando se carga la cotización -->
											<a href="<?php echo base_url('backend/cliente/solicitud/cotizacion'); ?>" class="btn u-btn-orange">
												<i class="et-icon-search"></i> Consultar
											</a>
											<button class="btn u-btn-primary">
												<i class="fa fa-check"></i> Aceptada
											</button>
											<button class="btn btn-primary">
												<i class="fa fa-close"></i> Rechazada
											</button>

										</td>
										<td>
											<a style="width:100px" href="#" class="disabled btn btn-secondary">
												<i class="fa fa-lock"></i>
											</a>

											<button class="btn u-btn-orange" data-toggle="modal" data-target="#modal-pago">
												<span data-toggle="tooltip" title="Cargar pago">
													<i class="fa fa-clock-o"></i> Pendiente
												</span>
											</button>
										</td>

										<td>
											<a style="width:100px" href="#" class="disabled btn btn-secondary">
												<i class="fa fa-lock"></i>
											</a>

											<a href="<?php echo base_url('backend/cliente/solicitud/contrato'); ?>" class="btn u-btn-orange">
												<i class="et-icon-search"></i> Consultar
											</a>
										</td>

										<td>
											<div class="g-pos-rel g-top-3 d-inline-block">
												<a id="dropDown2Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-lightblue-v3--hover" href="#!" aria-controls="dropDown2" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown">
													<i class="hs-admin-more-alt"></i>
												</a>

												<div id="dropDown" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white" aria-labelledby="dropDown2Invoker">
													<ul class="list-unstyled g-nowrap mb-0">
														<li>
															<a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#">
															<i class="icon-magnifier g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
															Consultar<br>solicitud
															</a>
														</li>
														<li>
															<a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
															<i class="hs-admin-archive g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
															Archivar
															</a>
														</li>
														<li>
															<a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
															<i class="hs-admin-trash g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
															Eliminar
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- End Panel body -->
					</div>
				</div>
			</div>

		</div>
		<!-- termina col-md-12 -->
	</div>
</div>

<!-- MODAL RECHAZAR SERVICIO -->
<div class="modal fade" data-backdrop="static" data-keyboard="false"  id="modal-rechazo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Decisión</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div class="row">
			<!-- Area de observaciones. -->
			<div class="col-lg-12">
				<!-- No se puede otorgar -->
							<div>
		            			<!-- Info cotización -->
		            			<div class="h4 text-left">
		            				Estimado usuario
		            			</div>
		            			<hr>
								<div class="row">
					                <div class="col-lg-12">
										Por este medio hacemos de su conocimiento que por políticas de VERIFICACIÓN Y CERTIFICACIÓN PAMFA A.C., y en estricto apego a lo señalado en el esquema de certificación: <span class="g-color-red">Nombre esquema</span>.
										<br>
										No podemos otorgar el servicio de certificación que nos ha solicitado. 

					                </div>
						        </div>
		            			<!-- END Info cotización -->
								<hr>
								<div class="col-lg-12 g-mb-20">
									<b>
										A continuación se indica la razón.
									</b>
								</div>
		            			<!-- Table -->
					            <div class="">
					                <table id="tablaCotizacion" class="table table-bordered table-hover">
										<tr>
											<td>
												Falta información del solicitante.
											</td>
											<td>
												<label class="form-check-inline u-check g-pl-25">
													<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" name="razon1" id="razon1" value="si" <?php if (isset($consulta_rechazo)&&$consulta_rechazo->razon1=="si"){?>checked=""<?

														
													}?>>
													<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
														<i class="fa" data-check-icon=""></i>
													</div>
												</label>
											</td>
										</tr>
										<tr>
											<td>
												Compromisos con otro Organismo de Certificación
											</td>
											<td>
												<label class="form-check-inline u-check g-pl-25">
													<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" name="razon2" id="razon2" value="si"  <?php if (isset($consulta_rechazo)&&$consulta_rechazo->razon2=="si"){?>checked=""<?

														
													}?>>
													<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
														<i class="fa" data-check-icon=""></i>
													</div>
												</label>
											</td>
										</tr>

										<tr>
											<td>
												Falsedad de información.
											</td>
											<td>
												<label class="form-check-inline u-check g-pl-25">
													<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" name="razon3" id="razon3" value="si" <?php if (isset($consulta_rechazo)&&$consulta_rechazo->razon3=="si"){?>checked=""<?

														
													}?>>
													<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
														<i class="fa" data-check-icon=""></i>
													</div>
												</label>
											</td>
										</tr>

										<tr>
											<td>
												No existe respuesta del representante autorizado.
											</td>
											<td>
												<label class="form-check-inline u-check g-pl-25">
													<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" name="razon4" id="razon4" value="si" <?php if (isset($consulta_rechazo)&&$consulta_rechazo->razon4=="si"){?>checked=""<?

														
													}?>>
													<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
														<i class="fa" data-check-icon=""></i>
													</div>
												</label>
											</td>
										</tr>

										<tr>
											<td>
												No tenemos el alcance para otorgar el servicio.
											</td>
											<td>
												<label class="form-check-inline u-check g-pl-25">
													<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" name="razon5" id="razon5" value="si" <?php if (isset($consulta_rechazo)&&$consulta_rechazo->razon5=="si"){?>checked=""<?

														
													}?>>
													<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
														<i class="fa" data-check-icon=""></i>
													</div>
												</label>
											</td>
										</tr>

										<tr>
											<td>
												Otro, indique:
											</td>
											<td>
												<div class="g-pos-rel">
													<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
														<i class="hs-admin-pencil g-absolute-centered g-font-size-16 g-color-gray-light-v6"></i>
													</span>
													<textarea id="razon6" name="razon6" class="form-control form-control-md u-textarea-expandable g-brd-none g-brd-bottom g-brd-gray-light-v7 g-brd-gray-light-v3--focus rounded-0 g-resize-none g-overflow-hidden" rows="3" placeholder=""><?php if (isset($consulta_rechazo)){ echo $consulta_rechazo->razon6;}?>
														
													</textarea>
												</div>
											</td>
										</tr>
					                </table>
					            </div>
					            <!-- END Table -->
								<hr>
								<p class=" text-justify">
									Si está interesado en los servicios de certificación que ofrece VERIFICACIÓN Y CERTIFICACIÓN PAMFA A.C., contacte nuevamente a nuestro personal.
								</p>

		            		<!-- Footer -->
		            		<!--<hr class="hidden-print">-->
		            		<!--<p class="text-muted text-center"><small>Thank you very much for doing business with us. We look forward to working with you again!</small></p>-->
		            		<!-- END Footer -->
		        			</div>
				<!-- End No se puede otorgar -->
			</div>
			<!-- End Area de observaciones. -->
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!--<button type="button" class="btn btn-primary">Guardar cambios</button>-->
      </div>
    </div>
  </div>
</div>
<!-- END MODAL RECHAZAR SERVICIO -->

<!-- MODAL COMPROBANTE PAGO -->
<div class="modal fade" data-backdrop="static" data-keyboard="false"  id="modal-pago" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<h3 class="modal-title" id="exampleModalLabel">Verificación de pago</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div class="row">
                <div class="col-lg-6 ">
                	 <p class="h4">Cliente</p>
                    <p class="h4">Nombre legal</p>
                    <address>
                        dirección
                        dirección
                        codigo postal
                        <i class="icon-phone"></i> telefono
                         <br>
    					<i class="icon-education-166 u-line-icon-pro"></i> ejemplo@gmail.com
                    </address>
                </div>
	            <!-- END Info cliente -->

                <!-- Esquemas de certificación -->
                <div class="col-lg-6">
                    <p class="h4">Cotización</p>
                    <p class="h5">
                    	Emisión: <span class="g-color-red"><?= date('d/m/Y', time()) ?></span>
                    </p>
                    <p class="h5" id="tot_p" name="tot_p">
                    	Total: <span class="g-color-blue">$ 500.00</span>
                    </p>
                	<hr class="g-pb-0 g-mb-0">
                	  <p class="h4">Esquemas</p>
                	  <p>
                	  	Nombre esquema
                	  </p>
                </div>
	            <!-- END Esquemas de certificación -->

                <!-- Resumen cotización -->
                <div class="col-lg-12">
                    <p  class="g-pa-10" id="espera" name="espera" style="background: #e67e22; color:white;display: block;">
                    	<i class="icon-exclamation"></i> En espera
                    </p>
                </div>
            	<div class="col-sm-12">
            		<p class="h4">
            			Cargar comprobante
            		</p>
            		<input type="file" name="file1" id="file1" class="form-control">
            		<br>
            		<input type="button " class="btn btn-info" value="Enviar" onClick="uploadFile(1)" id="aux">
				</div>

		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!--<button type="button" class="btn btn-primary">Guardar cambios</button>-->
      </div>
    </div>
  </div>
</div>
<!-- END MODA COMPROBANTE PAGO -->



<div class="g-pa-20">
	<div class="row">
		<!-- Profile Content -->
		<div class="col-lg-12">
			<!-- Overall Statistics -->
			<div class="row g-mb-0">
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

			</div>
			<!-- End Overall Statistics -->
		</div>
		<!-- End Profile Content -->
	</div>
</div>

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

//include ("footer.php");
?>