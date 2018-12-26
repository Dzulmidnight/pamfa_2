<div class="g-pa-20">
	<div class="row g-mb-0">
		<div class="col-md-12">
			<button class="btn u-btn-bluegray" onclick="history.back(-1)">
				<i class="glyph-icon icon-arrow-left"></i> Regresar
			</button>
		</div>
		<div class="col-md-12 g-mb-0 g-mn-0--md">
			<div class="card border-0 rounded-0 g-mb-50">
				<div class="container g-pt-40 g-pb-70">
					<h3 class="">
						Detalle Acuerdo de servicio de certificación de producto
					</h3>

					<div class="row">
						<!-- Detalle contrato -->
						<div class="col-md-8">
							<div class="card border-0 rounded-0">
								<!-- Panel Header -->
								<div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
									<div class="row">
										<div class="col-md-12">
											<h3 class="h6 mb-0">
												<i class="icon-layers g-pos-rel g-top-1 g-mr-5"></i> Formato cotización
											</h3>
										</div>

									</div>

									<div class="dropdown g-mb-10 g-mb-0--md">
										<?php /*<button type="button" <?php if (isset($consulta_cont)) {?>disabled="" <?php }?> class="btn u-btn-primary g-mr-10" onclick="procesoFinalizado2()" name="envio_contrato" id="envio_contrato">
														<i class="hs-admin-check-box"></i> Aprobar envi
													</button>*/?>
										<a href="#" class="btn u-btn-bluegray g-mr-10">
											<i class="hs-admin-printer"></i> Imprimir
										</a>
										<a href="#" class="btn u-btn-bluegray">
											<i class="hs-admin-download"></i> Descargar
										</a>
										<!--<span class="d-block g-color-primary--hover g-cursor-pointer g-mr-minus-5 g-pa-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
										</div>-->
									</div>
								</div>
								<!-- End Panel Header -->
								<!-- End Panel Header -->
								<!-- Panel Body -->
								<?php foreach ($consulta_sol_id as $fila) {?>
								<div class="card-block u-info-v1-1 g-bg-white-gradient-v1--after g-pa-20 js-custom-scroll g-height-50vh--lg">
									<div>
				            			<!-- Info cotización -->
				            			<table class="table table-bordered table-condensed text-center" style="font-size:10px;padding:0px;">
											<tr>
												<th style="padding:0px;" rowspan="3">
													<img width="100px" src="<?php echo base_url('assets/img/logo/logo_pamfa_dashboard.png'); ?>" alt="">
												</th>
												<th rowspan="3">
													<b>Acuerdo de servicio de certificación de producto</b>
												</th>
												<th style="padding:0px;">
													Clave: CER.RG.04
												</th>
											</tr>
											<tr class="">
												<td style="padding:0px;">
													Versión: 05
												</td>
											</tr>
											<tr class="">
												<td style="padding:0px;">
													Fecha de emisión: <?= date('d/m/Y', $consulta_contrato->fecha) ?>
												</td>
											</tr>
				            			</table>
				            			
				            				

										<div class="row text-justify">
							                <!-- Fecha del contrato -->
							                <div class="col-lg-12">
							                    <p>
							                    	Fecha: <?= date('d/m/Y', $consulta_contrato->fecha) ?>
							                    </p>

							                    <p>
							                    	<u>Datos del cliente</u>
							                    </p>
							                    <p class="text-justify">
													Contrato de prestación de servicios de certificación de producto que en los términos establecidos por la ley, celebran por una parte VERIFICACIÓN Y CERTIFICACIÓN PAMFA A.C.  representada por la Ing. Marisela Farías López que en lo sucesivo se denominará para efectos de este contrato “El organismo de certificación” y por otra parte el cliente <span class="g-color-blue"><?php echo $fila->nombreLegal; ?></span> representada en este acto por <span class="g-color-blue"><?php echo $fila->nombreRepresentante; ?></span> a quien en lo sucesivo se denominará “el cliente”. 
							                    </p>
							                </div>
											
											<!-- Declaraciones parte 1 -->
							                <div class="col-lg-12">
							                	<h4>DECLARACIONES</h4>
							                	<ul>
							                		<li>
														El organismo de certificación” declara que VERIFICACIÓN Y CERTIFICACIÓN PAMFA A.C. es una empresa constituida legalmente el día 20 del mes de enero de 2015 según consta en la escritura pública número 12548 volumen CCCLVI otorgada ante el notario público Moisés Espinosa Ruiz, número 50 de la ciudad de Uruapan Michoacán. . Con registro Federal de Contribuyentes Numero VCP150120PT3, Con domicilio ubicado en la calle José Zamora, Numero 48, Colonia Emiliano Zapata de esta Ciudad.
							                		</li>
							                		<li>
														Que cuenta con las facultades suficientes y necesarias para celebrar este contrato, de conformidad al poder, que le fue conferido mediante escritura pública numero 12548 12548 volumen CCCLVI otorgada ante el notario público Moisés Espinosa Ruiz, número 50 de la ciudad de Uruapan Michoacán. 
							                		</li>
							                		<li>
														Que conforme a su objeto social se encuentra dedicada entre otras cosas a: <u>“PRESTAR LOS SERVICIOS RELACIONADOS CON LOS DIFERENTES SISTEMAS PRODUCTO EN ASPECTOS DE LA EVALUACION DE LA CONFORMIDAD DE NORMAS OFICIALES MEXICANAS Y NORMAS MEXICANAS, VERIFICACIÓN Y CERTIFICACIÓN Y TRATAMIENTOS FITOSANITARIOS, INOCUIDAD Y BUENAS PRÁCTICAS AGRÍCOLAS Y DE MANEJO, CONFORME A LO ESTABLECIDO EN LA NORMATIVIDAD VIGENTE DEL SECTOR AGROPECUARIO.”</u>. 
							                		</li>
							                		<li>
							                			<ul>
							                				<li>
							                					a)	Que es su deseo celebrar este Contrato con EL CONTRATANTE DEL SERVICIO en virtud de la capacidad técnica, profesional y económica, así como los conocimientos, la experiencia, el personal y los elementos materiales necesarios, por parte de esta última, para prestar a favor de <span class="g-color-blue"><?php echo $fila->nombreLegal; ?></span> los servicios objeto de este instrumento.
							                				</li>
							                				<li>
							                					b)	Declaran ambas partes, a través de sus representantes, que se reconocen mutuamente lo manifestado en las declaraciones precedentes y que es su voluntad celebrar el presente contrato remitiéndose al efecto a lo dispuesto en las siguientes:
							                				</li>
							                			</ul>
							                		</li>
							                		<li>
							                			“El organismo de certificación” declara que el objeto de este contrato es evaluar y certificar el producto bajo el esquema:

							                			<table class="table table-bordered">
							                				<tr>
							                					<td <?php if ($fila->global_ifa!=null){?>class="g-bg-green g-color-white" <?php }?>>
							                						GlobalG.A.P. IFA.
							                					</td>
							                					<td <?php if ($fila->global_coc!=null){?>class="g-bg-green g-color-white" <?php }?>>
							                						GlobalG.A.P. Cadena de Custodia.
							                					</td>
							                				</tr>
							                				<tr>
							                					<td <?php if ($fila->mcs!=null){?>class="g-bg-green g-color-white" <?php }?>>
							                						Pliego de condiciones "México Calidad Suprema".
							                					</td>
							                					<td <?php if ($fila->srrc!=null){?>class="g-bg-green g-color-white" <?php }?>>
							                						SRRC / SENASICA.
							                					</td>
							                				</tr>
							                				<tr>
							                					<td <?php if ($fila->hecho_mexico!=null){?>class="g-bg-green g-color-white" <?php }?>>
							                						Hecho en México.
							                					</td>
							                					<td <?php if ($fila->den_origen!=null){?>class="g-bg-green g-color-white" <?php }?>>
							                						Denominación de origen.
							                					</td>
							                				</tr>
							                			</table>
							                			<p>
							                				Específicamente en el siguiente alcance: <span class="g-color-blue"><table width="100"  class="table table-bordered"><?php if (isset($consulta_ifa)){?>

															<tr><td>Global IFA</td><td><?php if(strpos($consulta_ifa->opcion, "sin_sistema")!== false){ echo "Productor individual con Explotaciones múltiples sin Sistema de Gestión de Calidad.";}

																else if(strpos($consulta_ifa->opcion, "con_sistema")!== false){ echo "Productor individual con explotaciones múltiples con sistema de Gestión de calidad";}
																else{ echo "Productor individual";}?></td></tr><?php }
																if (isset($consulta_coc)){?>
														<tr><td>Global CoC</td><td><?php  $resultad = str_replace("explotacion_individual", "Explotación individual",  $consulta_coc->opcion);
														$resultad = str_replace("explotacion_multiple", "Explotación multiple",  $consulta_coc->opcion);
 															echo $resultad;?></td></tr><?php } 

 															if (isset($consulta_mcs)){?>

													<tr><td>México calidad suprema</td><td><?php echo ucwords($consulta_mcs->alcance);?></td></tr><?php } 

													if (isset($consulta_srrc2)){?>

												<tr><td>Sistema de reduccioón de riesgos de contaminación</td><td><?php if($consulta_srrc2->area1!=NULL){ echo "Áreas integrales con aplicación de sistema completo, ";}
												if($consulta_srrc2->area2!=NULL){ echo "Áreas integrales con aplicación de BUMA, ";}
													if($consulta_srrc2->seccion1!=NULL){ echo "Sección campo, ";}
														if($consulta_srrc2->seccion2!=NULL){ echo "Sección empaque, ";}
															if($consulta_srrc2->seccion3!=NULL){ echo "Sección empaque, ";}?></td></tr><?php }?>
											</table> </span>.
							                			</p>
							                		</li>
							                		<li>
							                			“El Cliente” declara ser una persona moral o física con los siguientes datos:
							                			<br><span class="g-color-blue"><?php
							                			$empresa="";
							                			$rep="";
							                			 foreach ($consulta_sol_id as $fila) {
							                			 	$empresa=$fila->nombreLegal;
							                			 	$rep=$fila->nombreRepresentante;




							                			 echo $fila->nombreLegal.", ".$fila->rfc.", ".$fila->direccion.", ".$fila->colonia.", ".$fila->municipio.", ".$fila->estado.", ".$fila->nombre.", C.P.".$fila->cp;}?></span> y que su representante autorizado tiene la capacidad para obligarla en los términos de este instrumento. 
							                		</li>
							                		<li>
							                			“El cliente” declara que solicitó los servicios de certificación de producto y acepta los términos en los que presta los servicios “El organismo de certificación”. 
							                		</li>
							                		<li>
							                			“El organismo de certificación” se obliga brindar los SERVICIOS con la calidad y el esmero y a cumplir con las Normas aplicables.
							                		</li>
							                		<li>
							                			VIII.	Las partes convienen en que “El organismo de certificación”  se obliga a pagar al auditor/inspector como contraprestación los honorarios estipulados en relación a los servicios prestados.
							                		</li>
							                		<li>
							                			Ambas partes declaran que para el caso de controversia o interpretación de este contrato, se someterán al fuero del Estado de Michoacán, México, renunciando desde ahora al fuero que en razón de sus domicilios presentes o futuros pudieran tener. 
							                		</li>
							                		<li>
							                			Ambas partes declaran que en el presente contrato no existe dolo o mala intención.
							                		</li>
							                	</ul>
							                </div>
											<!-- End Declaraciones parte 1 -->

							                <!-- Declaraciones parte 2 -->
							                <div class="col-lg-12">
							                	<h4>DECLARACIONES</h4>
							                	<ul>
							                		<li>
							                			I.	El objeto del presente contrato es la evaluación de la conformidad del producto (s) <span class="g-color-blue"><table width="100"  class="table table-bordered">
							                					<?php if (isset($consulta_ifa)){?>


							                					<tr><td><?php echo"global ifa";?>
							                					
							                				</td><td><?php  echo $consulta_ifa->productos;?>
							                					
							                				</td>
							                			</tr><?php }

							                			 if (isset($consulta_coc)) { ?>
							                			<tr><td><?php echo"global coc";?>
							                					
							                				</td><td><?php echo $consulta_coc->productos;?>
							                					
							                				</td></tr><?php }
							                				 if (isset($consulta_mcs)) { ?>
							                			<tr><td><?php echo"mcs";?>
							                					
							                				</td><td><?php  $resultado = str_replace("Persa", "Limón Persa", $consulta_mcs->productos);
							                				 $resultado2 = str_replace("Mexicano", "Limón Mexicano", $resultado);echo $resultado2;?>
							                					
							                				</td></tr><?php }

							                				 if (isset($consulta_srrc)){?>


							                					<tr><td><?php echo"srrc";?>
							                					
							                				</td><td><?php  foreach ($consulta_srrc as $fs) {
							                					# code...
							                				
																	echo $fs->producto_srrc.", ";}?>
							                					
							                				</td>
							                			</tr><?php }

							                				 if (isset($consulta_mex)){?>


							                					<tr><td><?php echo"srrc";?>
							                					
							                				</td><td><?php  foreach ($consulta_mex as $fm) {
							                					# code...
							                				
																	echo $fm->mex_producto.", ";}?>
							                					
							                				</td>
							                			</tr><?php }


							                				 if (isset($consulta_origen)){?>


							                					<tr><td><?php echo"origen";?>
							                					
							                				</td><td><?php  
							                					# code...
							                				
																	$resultado = str_replace("Chiapas", "Café Chiapas", $consulta_origen->productos);
							                				 $resultado2 = str_replace("Veracruz", "Café Veracruz", $resultado);echo $resultado2;?>
							                					
							                				</td>
							                			</tr><?php }?>

							                			</table></span> de la empresa denominada: <span class="g-color-blue"><?php echo $empresa;?></span> bajo los lineamientos de la normatividad <span class="g-color-blue"><table width="100"  class="table table-bordered"><?php if (isset($consulta_ifa)){?>

															<tr><td>Global IFA</td><td><?php if(strpos($consulta_ifa->opcion, "sin_sistema")!== false){ echo "Productor individual con Explotaciones múltiples sin Sistema de Gestión de Calidad.";}

																else if(strpos($consulta_ifa->opcion, "con_sistema")!== false){ echo "Productor individual con explotaciones múltiples con sistema de Gestión de calidad";}
																else{ echo "Productor individual";}?></td></tr><?php }
																if (isset($consulta_coc)){?>
														<tr><td>Global CoC</td><td><?php  $resultad = str_replace("explotacion_individual", "Explotación individual",  $consulta_coc->opcion);
														$resultad = str_replace("explotacion_multiple", "Explotación multiple",  $consulta_coc->opcion);
 															echo $resultad;?></td></tr><?php } 

 															if (isset($consulta_mcs)){?>

													<tr><td>México calidad suprema</td><td><?php echo ucwords($consulta_mcs->alcance);?></td></tr><?php } 

													if (isset($consulta_srrc2)){?>

												<tr><td>Sistema de reduccioón de riesgos de contaminación</td><td><?php if($consulta_srrc2->area1!=NULL){ echo "Áreas integrales con aplicación de sistema completo, ";}
												if($consulta_srrc2->area2!=NULL){ echo "Áreas integrales con aplicación de BUMA, ";}
													if($consulta_srrc2->seccion1!=NULL){ echo "Sección campo, ";}
														if($consulta_srrc2->seccion2!=NULL){ echo "Sección empaque, ";}
															if($consulta_srrc2->seccion3!=NULL){ echo "Sección empaque, ";}?></td></tr><?php }?>
											</table> </span>, que “El organismo de certificación” se compromete a prestarle a “el cliente”.  Las cláusulas de este contrato afectan a su vez a las evaluaciones no anunciadas y especiales (tanto extraordinarias como de modificación del alcance) en el presente ciclo de certificación. 
							                		</li>
							                		<li>
							                			II.	Las partes convienen que <span class="g-color-blue"><?php echo $rep;?></span> se obliga a pagar a “el organismo de certificación” la contraprestación estipulada en la cláusula tercera.
							                		</li>
							                		<li>
							                			III.	Por su parte, “el organismo de certificación” se obliga a expedir al cliente la factura correspondiente que contenga los requisitos fiscales exigidos por la legislación aplicable, como requisito previo al pago de la contraprestación.
							                		</li>
							                		<li>
							                			IV.	La cantidad que de común acuerdo pactan las partes a favor de “El organismo de certificación” y a cargo de “el cliente” por sus servicios de certificación de producto, de conformidad con el presupuesto de servicios, Anexo CER.RG.03
							                		</li>
							                	</ul>
							                	<p>
							                		Notas: Para GLOBALG.A.P.
							                	</p>
							                	<ul>
							                		<li>
							                			1.	La cuota anual cubre los gastos para el registro en la base de datos GlobalG.A.P.  En caso de existir un GGN o número CoC, el no comunicarlo a VERIFICACION Y CERTIFICACION PAMFA A.C., el reglamento general de GLOBALG.A.P. establece una sanción de 100 € (EUROS) para un auditor individual bajo la opción 1; y de 500€ (EUROS) para un grupo de productores bajo la opción 2, sobre la tarifa de registro.
							                		</li>
							                		<li>
							                			2.	La auditoría no anunciada se realizará bajo la Opción 1 al 10% del número total de productores certificados. En caso de ser necesaria esta auditoria se avisará con un plazo máximo de 48 horas de anticipación. 
							                		</li>
							                		<li>
							                			3.	En caso de que PAMFA determine necesaria otra visita a sitio para comprobar la resolución de no conformidades, se originará un cargo extra. 
							                		</li>
							                	</ul>
							                	<p>
							                		La información proporcionada por el representante autorizado es la declarada en la Solicitud de certificación de producto (CER.RG.01) y Anexo CER.RG.01
							                	</p>

							                	<ul>
							                		<li>
							                			V.	La duración del contrato será una mínima de un año para todos los esquemas de certificación excepto para SRRC (cultivos perennes e instalaciones, la cual es de 2 años) y máxima de 4 años para los esquemas de certificación GlobalG.A.P., PrimusGFS, México Calidad Suprema, SRRC/SENASICA, Hecho en México y Denominación de origen, transcurrido ese tiempo se renovará el contrato.  De acuerdo a lo convenido entre ambas partes. 
							                		</li>
							                		<li>
							                			VI.	La disolución del contrato podrá hacerse si existe previo acuerdo por escrito de “el cliente” y aceptado por “El organismo de certificación”. Los daños y prejuicios que pudieran causar las partes, serán a cargo de quien inicie la rescisión. 
							                		</li>
							                		<li>
							                			VII.	“El cliente” acepta recibir auditorias no anunciadas (ó de vigilancia) cuando así lo indique el esquema de certificación, si sale sorteado. De negarse por más de dos veces “El organismo de certificación” puede suspender el certificado del cliente. 
							                		</li>
							                		<li>
							                			VIII.	En caso de cancelación o suspensión del servicio, “el cliente” se obliga a cumplir lo establecido en las regulaciones aplicadas a cada uno de los esquemas de certificación.
							                		</li>
							                		<li>
							                			IX.	Ante una cancelación o suspensión “el cliente” de cambiar de organismo de certificación se obliga a informar al nuevo organismo de certificación de su estatus. El Organismo de Certificación que elija “el cliente” podrá pedir informes a “El organismo de certificación”  de la situación en la que se encuentra la no conformidad motivo de la suspensión o cancelación de la certificación.
							                		</li>
							                		<li>
							                			X.	“El cliente “se obliga a no ceder los derechos y obligaciones a terceras personas.
							                		</li>
							                		<li>
							                			XI.	“El cliente” se obliga a cumplir con los requisitos de los documentos normativos y Acuerdo de sublicencia y certificación de los esquemas de certificación: GlobalG.A.P., México Calidad Suprema, PrimusGFS,  Sistema de Reducción de Riesgos de Contaminación (SRRC), Hecho en México y Denominación de origen, según aplique, en la versión vigente. 
							                		</li>
							                		<li>
							                			XII.	 “El organismo de certificación” declara que cuando reciba un informe, ya sea de mal uso de la marca de conformidad o de un riesgo de peligro involucrado con el producto que ostentan la marca de conformidad y la validez del informe debe investigarse. Cuando se haya establecido que ocurrió un mal uso “El organismo de certificación” determinará el alcance del mal uso del producto y “el cliente” se obliga a implementar las acciones correctivas que “El organismo de certificación” le solicite.
							                		</li>
							                		<li>
							                			XIII.	“El organismo de certificación” declara que podrá ejercer las acciones legales necesarias cuando se haga mal uso de marca y/o comercializar un producto certificado peligroso.
							                		</li>
							                		<li>
							                			XIV.	“El cliente” se obliga a recibir auditorías extraordinarias en el caso de que se requiera por cierre de no conformidades o por auditorias no anunciadas cuando el esquema de certificación lo especifique.
							                		</li>
							                		<li>
							                			XV.	“El cliente” se obliga a informar a “El organismo de certificación” si se encuentra involucrado en una alerta sanitaria (producto peligroso) y/o alguna modificación al producto certificado.
							                		</li>
							                		<li>
							                			XVI.	Las quejas o apelaciones que “el cliente” haga deben ser relacionadas al alcance de la certificación.
							                		</li>
							                		<li>
							                			XVII.	Como parte de sus actividades “El organismo de certificación” mantiene actualizado en su página electrónica la base de datos de sus productos certificados. Si “el cliente” no estuviera de acuerdo en que “El organismo de certificación” publique sus datos, “el cliente” debe informar por escrito libre para que no se tengan en su base de datos.
							                		</li>
							                		<li>
							                			XVIII.	Durante una testificación al personal del Organismo de Certificación por la entidad de acreditación o por los dueños del esquema, “El cliente” tendrá durante la inspección al personal de la entidad de acreditación o de los dueños del esquema, sin que éstos (la entidad de acreditación o dueños del esquema) influyan sobre los resultados de la inspección. 
							                		</li>
							                		<li>
							                			XIX.	Las partes en este acto convienen en que EL PRESTADOR DEL SERVICIO no puede ceder o transferir, total o parcialmente, a terceros, las obligaciones o derechos que adquiere por virtud de este. Contrato, sin el consentimiento previo y por escrito del “cliente”.
							                		</li>
							                		<li>
							                			XX.	Para el caso específico de los SRRC/SENASICA, el Representante Legal es la única persona que podrá firmar el dictamen de verificación o en su defecto otra persona con poder notariado.
							                		</li>
							                		<li>
							                			XXI.	CONFIDENCIALIDAD

							                			<ul>
							                				<li>
							                					a)	Cada parte conviene en observar y mantener de manera confidencial toda la información, obtenida por cualquier medio o fuente derivada del presente contrato y que estuviere relacionada con el objeto social y actividades de las otras partes, sus clientes, proveedores y cualquier otra persona física o moral con la que las otras partes tuviere relaciones comerciales (a la que en lo sucesivo se le denominará la INFORMACION CONFIDENCIAL).
							                				</li>
							                				<li>
							                					b)	Por lo anterior, cualquiera de las partes que sea la receptora de la INFORMACION CONFIDENCIAL se obliga a darle el mismo tratamiento y nivel de confidencialidad con que maneja su propia información confidencial.
							                				</li>
							                				<li>
							                					c)	Asimismo, la parte receptora de la INFORMACION CONFIDENCIAL conviene en Limitar el acceso a la misma a sus empleados o representantes que en forma razonable tuvieren conocimiento de la INFORMACION CONFIDENCIAL, haciéndoles partícipes y obligados solidarios con aquella, respecto de sus obligaciones de conservar la confidencialidad aquí contraídas.
							                				</li>
							                				<li>
							                					d)	Además de lo anterior, las partes convienen en que cualquier persona que tuviere acceso a la INFORMACION CONFIDENCIAL a través de la receptora de la misma, deberá ser advertido por esta última de lo estipulado en este contrato, comprometiéndose la parte receptora a realizar esfuerzos razonables para que dichas personas observen y cumplan lo estipulado en esta cláusula. Ninguna información que fuere  otorgada  por escrito por una de las partes a la otra, podrá ser copiada o reproducida en forma alguna a no ser que existiera autorización previa y por escrito concedida por la parte otorgante, lo anterior con excepción de aquellas copias que la parte receptora pudiere requerir para cumplir con sus obligaciones  estipuladas en este instrumento.
							                				</li>
							                				<li>
							                					e)	Con independencia de lo anteriormente estipulado, la siguiente información no será considerada como confidencial para los efectos de lo estipulado en esta cláusula:

							                					<ul>
							                						<li>
							                							1.	Cualquier información que hubiere sido legítimamente conocida y obtenida por la parte receptora así como documentación que de la misma manera formara parte de sus archivos con anterioridad a la liberación de dicha información con motivo de la firma de este instrumento.
							                						</li>
							                						<li>
							                							2.	Cualquier información que regularmente fuere del conocimiento público.
							                						</li>
							                						<li>
							                							3.	Cualquier información que eventualmente fuere del dominio público y que hubiere sido legítimamente revelada , no derivado de alguna violación o incumplimiento de la parte receptora respecto de sus obligaciones adquiridas en este Contrato.
							                						</li>
							                						<li>
							                							4.	Asimismo, las partes convienen en este acto en que mantendrán la obligación de confidencialidad estipulada en esta cláusula en todo momento, durante y posterior a la vigencia de este contrato, a menos que reciba la autorización previa y por escrito de la parte respectiva.
							                						</li>
							                						<li>
							                							5.	Las partes convienen que en caso de violación o incumplimiento a las obligaciones estipuladas en esta cláusula, la parte que incumpla se obliga a pagar a la parte afectada los daños y perjuicios que llegare a ocasionarle, sin perjuicio de la responsabilidad penal en la que también pudiere incurrir.
							                						</li>
							                					</ul>
							                				</li>
							                			</ul>
							                		</li>
							                		<li>
							                			XXII.	“El cliente” se obliga a tomar  todas las medidas necesarias para:
							                			<ul>
							                				<li>
							                					a.	Realizar la auditoria y la vigilancia (si se requiere), incluyendo las disposiciones para examinar la documentación y los registros, y tener acceso al equipo, las ubicaciones, las áreas, el personal y los subcontratistas del cliente que sean pertinentes; 
							                				</li>
							                				<li>
							                					investigar las quejas;
							                				</li>
							                				<li>
							                					c.	 la participación de observadores, si es aplicable;
							                				</li>
							                			</ul>
							                		</li>
							                		<li>
							                			XXIII.	“El cliente” se obliga a no utilizar su certificación de producto de manera que ocasione mala reputación para “El organismo de certificación” y no hará ninguna declaración relacionada con su certificado de producto que “El organismo de certificación” pueda considerar engañosa o no autorizada. 
							                		</li>
							                		<li>
							                			XXIV.	inmediatamente después de suspender, retirar o finalizar la certificación, “el cliente” se obliga a dejar de utilizarla en todo el material publicitario que contenga alguna referencia a ella, y deberá emprender las acciones exigidas por el esquema de certificación (por ejemplo, la devolución de los documentos de la certificación y cualquier otra medida que se requiera.
							                		</li>
							                		<li>
							                			XXV.	Si “el cliente” suministra copias de los documentos de certificación a otros, se obliga a realizar la reproducción total de los documentos o según lo especifique el esquema de certificación de acuerdo a su alcance. 
							                		</li>
							                		<li>
							                			XXVI.	“El cliente” al hacer referencia a su certificación de productos en medios de comunicación tales como documentos, folletos o publicidad, “el cliente” se obliga a cumplir con los requisitos de “El organismo de certificación” y los especificados por el esquema de certificación de acuerdo a su alcance. 
							                		</li>
							                		<li>
							                			XXVII.	“El cliente” se obliga a cumplir con todos los requisitos que estipule el esquema de certificación con relación al uso de las marcas de conformidad y a la información relacionada con el producto.
							                		</li>
							                		<li>
							                			XXVIII.	“El cliente” se obliga a conservar registro de todas las quejas conocidas con respecto al cumplimiento de los requisitos del alcance de su certificación y a poner tales registros a disposición de “El organismo de certificación” cuando se le solicite. Y:

							                			<ul>
							                				<li>
							                					a.	tomar las acciones adecuadas con respecto a tales quejas y a las deficiencias que se encuentren en los productos que afectan a la conformidad con los requisitos de la certificación.
							                				</li>
							                				<li>
							                					b.	Documentar las acciones realizadas.
							                				</li>
							                			</ul>
							                		</li>
							                		<li>
							                			XXIX.	 “El cliente” se obliga a informar a “el organismo de certificación, sin retraso, acerca de los cambios que puedan afectar a su capacidad para cumplir con los requisitos del alcance de su certificación.
							                			<br>
							                			Los ejemplos de cambios pueden incluir:
							                			<ul>
							                				<li>
							                					-	La condición legal, comercial, de organización o de propiedad;
							                				</li>
							                				<li>
							                					-	organización y gestión (por ejemplo, directivos clave, personal que toma decisiones o personal técnico);
							                				</li>
							                				<li>
							                					-	modificaciones en el producto o en el método de producción;
							                				</li>
							                				<li>
							                					-	direcciones de contacto y sitios de producción;
							                				</li>
							                				<li>
							                					-	cambios importantes en el sistema de gestión de la calidad.
							                				</li>
							                			</ul>
							                		</li>
							                		<li>
							                			XXX.	 DOMICILIO PARA NOTIFICACIONES Y AVISOS.
							                		</li>
							                	</ul>
							                	<p>
							                		Las notificaciones y avisos que las partes deban darse con relación a este contrato, se harán por escrito y deberán ser enviadas por correo certificado con acuse de recibo, o por cualquier otro medio que asegure que el destinatario la reciba.
							                	</p>
							                	<p>
							                		Para tales efectos, las partes señalan como sus domicilios los siguientes:
							                	</p>
							                </div>
							                <div class="col-lg-12">
							                	<p>
							                		DEL CLIENTE
							                	</p>
							                    <address>
							                        Calle José Zamora N°48, Col. Emiliano Zapata,<br>
							                        Uruapan, Mich<br>
							                        CP: 60180 <br>
							                        <i class="icon-phone"></i> (452) 50 20 849 / 452 5251-772
							                    </address>
							                </div>
							                <div class="col-lg-12">
							                	<p>
							                		DEL ORGANISMO DE CERTIFICACIÓN
							                	</p>
							                    <address>
							                        Calle José Zamora N°48, Col. Emiliano Zapata,<br>
							                        Uruapan, Mich<br>
							                        CP: 60180 <br>
							                        <i class="icon-phone"></i> (452) 50 20 849 / 452 5251-772
							                    </address>
							                </div>

							                <div class="col-lg-12">
												Leído y enterado de las partes del contrato se firma por duplicado a los <span class="g-color-blue"><?= date('d', time()).' dias' ?></span> del mes de <span class="g-color-blue"><?= date('F',time()) ?></span> del año <span class="g-color-blue"><?= date('Y', time()) ?></span> en Uruapan, Michoacán, México.  
							                </div>
							                <!-- End Declaraciones parte 2 -->
								        </div>
				            			<!-- END Info cotización -->
										
				        			</div>
								</div>
							<?php }?>
								<!-- End Panel Body -->
							</div>
						</div>
						<!-- End Detalle contrato -->
						<?php
					                $fech=time();
					                	$estat="";
					                	//$url="";

					                 if(isset($consulta_contrato)){
					                	$fech=$consulta_contrato->fecha;
					                	$estat=$consulta_contrato->estatus_cliente;
					                	//$url=$consulta_contrato->url;

					                }?>
		
						<!-- Resumen -->
						<div class="col-md-4">
							<div class="g-bg-gray-light-v5 g-pa-20 g-pb-50 mb-4">
								<h4 class="h6 text-uppercase mb-3">Resumen</h4>

								<div class="d-flex justify-content-between mb-2">
									<span class="g-color-black">Fecha</span>
									<span class="g-color-black g-font-weight-300">
										<?echo date('d/m/Y', $fech) ;?>
									</span>
								</div>
								<div class="d-flex justify-content-between mb-2">
									<span class="g-color-black">Cliente</span>
									<span class="g-color-black g-font-weight-300">
										<?echo  $empresa; ?>
									</span>
								</div>
								<div class="d-flex justify-content-between mb-2">
									<span class="g-color-black">Esquemas:    </span>
									<span class="g-color-black g-font-weight-300">
										<?php if ($fila->global_ifa!=null) {
													?><strong>[ IFA ] </strong> <?
												}?>
												<?php if ($fila->global_coc!=null) {
													?>
												<strong>[ Coc ] </strong> 
												<?
												}?>
												<?php if ($fila->srrc!=null) {
													?>
												<strong>[ SRRC ] </strong>
												<?
												}?>
												<?php if ($fila->mcs!=null) {
													?>
												<strong>[ Méx. Calidad Sup. ] </strong>
												<?
												}?>
												<?php if ($fila->hecho_mexico!=null) {
													?>
												<strong>[ Hecho en Mex. ] </strong>
												<?
												}?>
												<?php if ($fila->den_origen!=null) {
													?>
												<strong>[ Denominación de Origen ] </strong>
												<?
												}?>

									</span>
								</div>
								 <?php 
								 $tot=0;

								 foreach ($consulta_cotizacion as $fila2) {
								 	$tot=$tot+$fila2->sub_total;

								 }

								 $tot=$tot*1.16;?>
								<div class="d-flex justify-content-between">
									<span class="g-color-black">Cotización</span>
									<span class="g-color-black g-font-weight-300">
										<?php echo "$ ".$tot;?>
									</span>
								</div>

								<!-- Estatus del contrato -->
								
								<div class="g-mt-20">
				                    <h6>Estatus del Acuerdo</h6>

				                    <div class="row">
										<div class="col-sm-12">
						                   <p class="g-pa-10" id="no_d" name="no_d"  <?php if ($estat==null){?> style="background: #e74c3c; color:white;display: block;" <?php }else {?> style="background: #e74c3c; color:white;display: none;" <?}?>>
							                    	<i class="hs-admin-close"></i> No disponible
							                    </p>
												

						                    <p  class="g-pa-10" id="espera" name="espera" <?php if ($estat==0 && $estat!=null){?> style="background: #e67e22; color:white;display: block;" <?php }else {?>style="background: #e67e22; color:white;display: none;"<?}?>>
							                    	<i class="icon-exclamation"></i> En espera
							                    </p>

							                    <p  class="g-pa-10" id="aprobado" name="aprobado" <?php if ($estat==1){?> style="background: #72c02c; color:white;display: block;" <?php }else {?>style="background: #72c02c; color:white;display: none;"<?}?>>
							                    	<i class="icon-exclamation"></i> Aprobado
							                    </p>
							                    <p  class="g-pa-10" id="rechazado" name="rechazado" <?php if ($estat==2){?> style="background:red; color:white;display: block;" <?php }else {?>style="background: #72c02c; color:white;display: none;"<?}?>>
							                    	<i class="icon-exclamation"></i> Rechazado
							                    </p>

						                    

										</div>

										<!-- Aprobación de comprobante -->
										<? /* <div class="col-sm-12 g-mb-10">
						                    <button class="btn u-btn-primary" style="width:100%">
						                    	<i class="hs-admin-download"></i> Descargar Comprobante
						                    </button>	
										</div>*/?>
										<div class="col-sm-6">
											<label class="u-check" style="width:100%">
												<input <?php if ($estat==1 || $estat==2){?> disabled="" <?php } ?>class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn2_4" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1" onclick="aprobarCotizacion('si')">
												<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
													<i class="hs-admin-check"></i> Aprobar
												</span>
											</label>	
										</div>
										<div class="col-sm-6">
											<label class="u-check" style="width:100%">
												<input <?php if ($estat==1 || $estat==2){?> disabled=""  <?php } ?>  class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn2_4" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1" onclick="aprobarCotizacion2('no')">
												<span  class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
													<i class="hs-admin-close"></i> Rechazar
												</span>
											</label>	
										</div>
										<!-- End Aprobación de comprobante -->
				                    </div>
								</div>
								<!-- End Estatus del contrato -->

							</div>
						</div>
						<!-- End Resumen -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	var base_url="<? echo base_url();?>";
	var idsolicitud="<? echo $ids;?>";
	//var norma="<? $norma;?>";


</script>
<script>
	function aprobarCotizacion(desicion){

		var estatus=1;
		
		swal({
			title: "Aprobar contrato",
			text: "Se ha revisado la información y se aprueba",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				swal("Aprobado", {
				  icon: "success",
				});

				$.ajax({
 					 	type:'POST',
                     url:base_url+"backend/cliente/solicitud/Contrato/actualizar/",
                      
                      data:{idsolicitud:idsolicitud,estatus:estatus},
                      
                     
		            	success: function(data) {
		            		alert(data);
		            	
		            		
		                       }
		});
			} 
		});
	}
</script>
<script>
	function aprobarCotizacion2(desicion){

	var estatus=2;

swal({
			title: "Rechazar contrato",
			text: "Indique las razones del rechazo",
			icon: "warning",
			buttons: true,
			dangerMode: true,
  			content: "input",
})
.then((value) => {
  if (value) {
  var text=value;
  $.ajax({
 	
    type:'POST',
                    url:base_url+"backend/cliente/solicitud/Contrato/actualizar/",
                     data: {idsolicitud:idsolicitud,estatus:estatus,text:text},
			
		            	success: function(data) {
		            		
		                       }

		});
}
});

	}
</script>

<script type="text/javascript">
	
	function procesoFinalizado2(){

		
var op1=3;
alert(base_url+"backend/administrador/cotizaciones/cCorreo/enviar/"+idsolicitud);

 $.ajax({
 	type:'POST',
                     url:base_url+"backend/administrador/contratos/Main_contratos/guardar/"+idsolicitud,
                     
		            	success: function(data) {
		            		
		                       }
		});

$.ajax({
 	
                     url:base_url+"backend/administrador/cotizaciones/cCorreo/enviar/"+idsolicitud,
                      method:"POST",
                      data:{op1:op1},
                      dataType: 'text',
			cache: false,
        	contentType: false,
        	processData: false,
                     
		            	success: function(data) {
		            	
		            		
		                       }
		});

		swal({
			title: "Contrato enviado",
			text: "Espere respuesta del cliente",
			icon: "success",
		})
		.then((value) => {
			//window.location.href = "<?php echo base_url('backend/administrador/solicitudes/solicitudesPendientes'); ?>";
			document.getElementById("envio_contrato").disabled=true;
		})

		

	}

</script>
