<script src="<?php echo base_url(); ?>selectMultiple/multiple-select.js"></script>

	    <script>
	        $('.selectMultiple').multipleSelect({
	        	placeholder: 'Selecciona la(s) opcion(es)',
	        	width: '100%',
	        	selectAll: false,
	        	allSelected: 'Se han seleccionado todos'
	        });
	    </script>
<form id="mcs">
												<div class="row">
													<div class="col-sm-12">
														<h4 class="nombreEsquema" style="font-size:14px;">
															<img src="<?php echo base_url(); ?>assets/img/esquemas_certificacion/esquema_mexico_calidad_suprema.jpg" alt="">
															MÉXICO CALIDAD SUPREMA
														</h4>
													</div>
													<div class="col-md-6">
														<h4>
															Alcance de la certificación
														</h4>
														<?php
														$bmex=0;
												if(isset($consulta_mexcalsup)){$bmex=1;}?>
														<select class="selectMultiple" name="alcance_certificacion" id="alcance_certificacion" multiple>
															<option <?php if($bmex==1 &&strpos($consulta_mexcalsup->alcance,'proceso')!==false){?>selected="selected"<? }?>value="proceso">Proceso</option>
															<option <?php if($bmex==1 &&strpos($consulta_mexcalsup->alcance,'producto')!==false){?>selected="selected"<? }?>value="producto">Producto</option>
														</select>
													</div>
													<div class="col-md-6">
														<h4>
															Pliego de condiciones
														</h4>
														<select class="selectMultiple" name="pliego_condiciones_mcs" id="pliego_condiciones_mcs" multiple>
															<option <?php if($bmex==1 &&strpos($consulta_mexcalsup->productos,'Aguacate')!==false){?>selected="selected"<? }?>value="Aguacate">Aguacate</option>
															<option <?php if($bmex==1 &&strpos($consulta_mexcalsup->productos,'Mexicano')!==false){?>selected="selected"<? }?> value="Mexicano">Limón Mexicano</option>
															<option <?php if($bmex==1 &&strpos($consulta_mexcalsup->productos,'Persa')!==false){?>selected="selected"<? }?> value="Persa">Limón Persa</option>
															<option <?php if($bmex==1 &&strpos($consulta_mexcalsup->productos,'Mango')!==false){?>selected="selected"<? }?> value="Mango">Mango</option>
															<option <?php if($bmex==1 &&strpos($consulta_mexcalsup->productos,'Cavendish')!==false){?>selected="selected"<? }?> value="Cavendish">Banano Cavendish</option>
															<option <?php if($bmex==1 &&strpos($consulta_mexcalsup->productos,'Dominico')!==false){?>selected="selected"<? }?> value="Dominico">Platano Dominico</option>
														</select>
													</div>
														
													<!-- inicia listado de equipos de verificación -->
													<div class="col-sm-12" style="margin-top:1.5em;">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th colspan="3">
																		Enliste los equipos de medición utilizados para el pliego de condición solicitado
																	</th>
																</tr>
																<tr>
																	<th>
																		 <? $n1=1;
		 																	$n2=2;?>
																		<button class="btn btn-sm btn-success" data-toggle="tooltip" title="Agregar otro equipo" type="button" onClick="uploadFile3()  ; " ><i class="fa fa-plus"></i></button> Equipo
																	</th>
																	<th>
																		Copia de los certificados de calibración
																	</th>
																	<th>
																		Copia de los registros de las verificaciones internas
																	</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		<div class="form-group g-pos-rel mb-0">
																			<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																				<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																			</span>
																			<textarea id="equipom" name="equipom" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Nombre del equipo"></textarea>
																		</div>
																	</td>
																	
																		<td>
																		<input type="file" name="file5_mex" id="file5_mex" class="form-control">
														 
														
														


															
															
                    										<progress class="form-control" id="progressBar5" value="0" max="100"  style="width:300px;"></progress>
                    										<h3 id="status5"></h3>
																	</td>
																	<td>
																		<input type="file" name="file6_mex" id="file6_mex" class="form-control">
														
														


															
															
                    										<progress class="form-control" id="progressBar5" value="0" max="100"  style="width:300px;"></progress>
                    										<h3 id="status5"></h3>
																	</td>
																</tr>																
															</tbody>
														</table>
													</div>
													<div id="tabla_mexcalsup" class="col-sm-12">
														
													</div>
													<!-- termina listado de equipos de verficación -->
													<div class="col-sm-6">
														<p class="pregunta">
															¿Requiere la evaluación de requisitos adicionales solicitado por su cliente?
														</p>

														<div id="radioCertificacionGlobaGAP" class="btn-group justified-content">
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="requisitos_adicionales" id="requisitos_adicionales" type="radio" value="SI" onclick="validarRadios('requisitos_adicionales', 'divRequisitosAdicionales')">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">SI</span>
															</label>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="requisitos_adicionales" id="requisitos_adicionales2" type="radio" value="NO" onclick="validarRadios('requisitos_adicionales', 'divRequisitosAdicionales')">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">NO</span>

															</label>
														</div>
														<div id="divRequisitosAdicionales" style="display:none;margin-top:1em;">
															<p>
																Anexe solicitud o documentos de las especificaciones de su cliente.
															</p>
															<div class="form-group g-pos-rel mb-0">
																<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																	<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																</span>
																<textarea id="documento1" name="documento1" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Nombre del documento"></textarea>
															</div>

															<input type="file" name="file2" id="file2" class="form-control">
														 <br>
														 <input type="button " class="btn btn-info" value="Enviar" onClick="uploadFile2(2)" id="aux">
														<a id="aux_mex2"  target="_blank"  class="btn btn-info" <?php if(isset($consulta_mexcalsup) && $consulta_mexcalsup->anexo1!=NULL)
														{?> href="<?php echo base_url().$consulta_den_origen->anexo1?>" style="display: block;" <? }?> style="display: none;">Ver actual</a>


															
															
                    										<progress class="form-control" id="progressBar2" value="0" max="100"  style="width:300px;"></progress>
                    										<h3 id="status2"></h3>
														</div>
													</div>
													<div class="col-sm-6">
														<p class="pregunta">
															¿Tiene un acuerdo de muestreo con sus clientes?
														</p>

														<div id="radioCertificacionGlobaGAP" class="btn-group justified-content">
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="muestreo_clientes" id="muestreo_clientes2" type="radio" value="SI" onclick="validarRadios('muestreo_clientes', 'divMuestreo')">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">SI</span>
															</label>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="muestreo_clientes" type="radio" value="NO" onclick="validarRadios('muestreo_clientes', 'divMuestreo')">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">NO</span>

															</label>
														</div>
														<div id="divMuestreo" style="display: none;">
															<p>
																Anexe copia de las especificaciones del muestreo
															</p>
															<input type="file" name="file3" id="file3" class="form-control">
														 <br>
														 <input type="button " class="btn btn-info" value="Enviar" onClick="uploadFile2(3)" id="aux">
														<a id="aux_mex3"  target="_blank"  class="btn btn-info" <?php if(isset($consulta_mexcalsup) && $consulta_mexcalsup->anexo2!=NULL)
														{?> href="<?php echo base_url().$consulta_den_origen->anexo2?>" style="display: block;" <? }?> style="display: none;">Ver actual</a>


															
															
                    										<progress class="form-control" id="progressBar3" value="0" max="100"  style="width:300px;"></progress>
                    										<h3 id="status3"></h3>

															<p>
																PAMFA le indicara el muestreo a efectuarse en la cotización de servicio
															</p>
														</div>

													</div>
													<div class="col-sm-12" style="margin-top:1em;margin-bottom:1em;">
														<p>
															Trazabilidad del lote
														</p>
														<div class="form-group g-pos-rel mb-0">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<textarea id="trazabilidad_mcs" name="trazabilidad_mcs" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Describa la trazabilidad del lote"></textarea>
														</div>
													</div>

												</div>
												<?php $fecha=time();?>
												
												<input id="fecha_mcs" name="fecha_mcs" type="hidden" value="<? echo $fecha;?>"/>
											</form>