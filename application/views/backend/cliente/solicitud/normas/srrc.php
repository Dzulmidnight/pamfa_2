<form class="js-validate" id="fsrrc" name="fsrrc">
												<div class="row">
													<div class="col-sm-12">
														<h4 class="nombreEsquema" style="font-size:14px;">
															<img src="<?php echo base_url(); ?>assets/img/esquemas_certificacion/esquema_senasica.jpg" alt="">
															SISTEMA DE REDUCCIÓN DE RIESGOS DE CONTAMINACIÓN (SRRC)
														</h4>
													</div>
													<div class="col-sm-12">
														<table class="table table-bordered">
															<tr>
																<td colspan="2">
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" id="area1" name="area1" value="1">
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon="&#xf00c"></i>
																		</div>
																		Áreas integrales con aplicación de sistema completo
																	</label>
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" id="area2" name="area2" value="1">
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon="&#xf00c"></i>
																		</div>
																		Áreas integrales con aplicación de BUMA
																	</label>
																</td>
															</tr>
															<tr>
																<td>
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" id="seccion1" name="seccion1" value="1">
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon="&#xf00c"></i>
																		</div>
																		Sección campo
																	</label>
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" id="seccion2" name="seccion2" value="1">
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon="&#xf00c"></i>
																		</div>
																		Sección empaque
																	</label>
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" id="seccion3" name="seccion3" value="1">
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon="&#xf00c"></i>
																		</div>
																		Cuadrilla de cosecha
																	</label>
																</td>
															</tr>
														</table>
													</div>

													<div class="col-sm-6">
														<p class="pregunta">
															Número de unidades de producción / huertos o invernaderos
														</p>
														<div class="form-group g-pos-rel mb-0">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
															</span>
															<input id="num_unidades" name="num_unidades" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<?php if (isset($consulta_srrc)) {echo $consulta_srrc->num_unidades;}?>" required="required" data-msg="This field is mandatory"
														data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" placeholder="Escribe aquí">
														</div>
													</div>
													<div class="col-sm-6">
														<p class="pregunta">
															Número de productores del área integral
														</p>
														<div class="form-group g-pos-rel mb-0">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
															</span>
															<input id="num_prod_integral" name="num_prod_integral" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<?php if (isset($consulta_srrc)) {echo $consulta_srrc->num_prod_integral;}?>" required="required" data-msg="This field is mandatory"
														data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" placeholder="Escribe aquí">
														</div>
													</div>
														</form>
													<div class="col-sm-12" style="margin-top:1em;" >
														<form class="js-validate" id="prod_srrc" name="prod_srrc">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th colspan="3">
																		Información sobre comercialización de producto
																	</th>
																</tr>
																<tr>
																	<th>
																		<button class="btn btn-sm btn-success" data-toggle="tooltip" title="Agregar otro producto" type="button" onclick="agregar2()"><i class="fa fa-plus"></i></button> Producto
																	</th>
																	<th>
																		Países destino
																	</th>
																	<th>
																		Porcentaje de venta
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
																			<textarea id="producto_srrc" name="producto_srrc" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Nombre del producto"></textarea>
																		</div>
																	</td>
																	<td>
																		<div class="form-group g-pos-rel mb-0">
																			<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																				<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																			</span>
																			<textarea id="pais_srrc" name="pais_srrc" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Pais(es) destino"></textarea>
																		</div>
																	</td>
																	<td>
																		<div class="form-group g-pos-rel mb-0">
																			<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																				<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																			</span>
																			<input id="porcentaje" name="porcentaje" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
																data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" placeholder="%">
																		</div>

																	</td>
																</tr>
															</tbody>

														</table>
													</form>
													</div>
														
												</div>
												
											</div>
											<div  id="tabla3" name="tabla3">
												

												<?  if (isset($consulta_srrc2)) {?>

										<table id="pro" name="pro" >
																	<thead >
																		<tr>
																			<th >
																				Producto
																			</th>
																		
																		
																			<th >
																				País
																			</th>	
																			<th >
																				Porcentaje
																			</th>	
																		</tr>
																	</thead>
																	
																	<!-- información de la tabla -->
																	<tbody><?								# code...
																	
										foreach($consulta_srrc2 as $fila)
															{
																//$id=$fila->id_producto_solicitud;?>
																		<!-- inicia TR información cliente -->
																		<tr >
																			
																			<td >
																				
																					<? echo $fila->producto_srrc;?>
																				
																			</td>
																			<td >
																				
																					<? echo $fila->pais_srrc;?>
																				
																			</td>
																			<td >
																				
																					<? echo $fila->porcentaje;?>
																				
																			</td>

																			
																			<td>
																				<button class="btn u-btn-red g-mr-10 g-mb-15" type="button" onclick="<?php echo "quitar2(".$fila->id_producto_srrc.")"?>" >
																							<i class="fa fa-minus" ></i> Eliminar<?php echo $fila->id_producto_srrc;?>
																						</button>
																			</td>
																			
																			
																		</tr>
										                              
																		
																			
										                                  <? }}?>
																	</tbody>
																</table>