<script src="<?php echo base_url(); ?>admin/assets/vendor/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
<form class="js-validate" id="global_coc" name="global_coc">
												
												
												<div class="row">
													<div class="col-sm-12">
														<h4 class="nombreEsquema" style="font-size:14px;">
															<img src="<?php echo base_url(); ?>assets/img/esquemas_certificacion/esquema_global_gap.jpg" alt="">
															GLOBALG.A.P CADENA DE CUSTODIA (CoC)
														</h4>
													</div>
													<div class="col-md-12" style="margin-bottom:1em;">
														<p>
															Ingresa lo(s) producto(s) por certificar
														</p>

									                    <div class="u-tagsinput--v2--gray g-brd-around g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-6 g-py-5">
															<div class="form-group g-pos-rel mb-0">
																<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																	<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																</span>
																<input type="text"  data-role="tagsinput" placeholder="Ingresa los productos" id="productos_coc" name="productos_coc"  value="<?php if (isset($consulta_coc)) {echo $consulta_coc->productos;}?>">
															</div>
									                    </div>
													</div>
													<div class="col-sm-6">
														<table class="table table-bordered">
															<tr>
																<td colspan="3">
																	<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalCoc" type="radio" onclick="radioCoc()" value="explotacion_individual"  id="radioGlobalCoc1">
																		<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																			<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																		</div>
																		Opción 1, Explotación individual
																	</label>
																</td>
															</tr>
															<tr class="text-justify">
																<td>
																	<div class="row g-mb-20">
																		<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
																			<label class="pregunta mb-0" for="#realiza_etiquetado">¿La empresa realiza el etiquetado?</label>
																		</div>

																		<div class="col-md-12 align-self-center">
																			<div class="form-group g-pos-rel mb-0">
																				<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																					<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																				</span>
																				<input id="op1_preg1" name="op1_preg1" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<?php if (isset($consulta_coc)) {echo $consulta_coc->op1_preg1;}?>" required="required" data-msg="This field is mandatory"
																			data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div class="row g-mb-20">
																		<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
																			<label class="pregunta mb-0" for="#sistema_trazabilidad">¿Cuenta con un sistema de trazabilidad?</label>
																		</div>

																		<div class="col-md-12 align-self-center">
																			<div class="form-group g-pos-rel mb-0">
																				<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																					<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																				</span>
																				<input id="op1_preg2" name="op1_preg2" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<?php if (isset($consulta_coc)) {echo $consulta_coc->op1_preg2;}?>" required="required" data-msg="This field is mandatory"
																			data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
																			</div>
																		</div>
																	</div>
																</td>

															</tr>
														</table>
													</div>
													<div class="col-sm-6">
														<table class="table table-bordered">
															<tr>
																<td colspan="3">
																	<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalCoc" type="radio" onclick="radioCoc()" value="explotacion_multiple"  id="radioGlobalCoc2">
																		<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																			<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																		</div>
																		Opción 1, Explotación Multiple
																	</label>
																</td>
															</tr>
															<tr class="text-justify">
																<td>
																	<div class="row g-mb-20">
																		<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
																			<label class="pregunta mb-0" for="#cantidad_estimada_producto">
																				Cantidad estimada de producto certificado (Voluntario) en toneladas anual
																			</label>
																		</div>

																		<div class="col-md-12 align-self-center">
																			<div class="form-group g-pos-rel mb-0">
																				<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																					<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																				</span>
																				<input id="op2_preg1" name="op2_preg1" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<?php if (isset($consulta_coc)) { echo $consulta_coc->op2_preg1;}?>" required="required" data-msg="This field is mandatory"
																			data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div class="row g-mb-20">
																		<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
																			<label class="pregunta mb-0" for="#num_total_unidades">
																				Número total de unidades de producción: ranchos, huertos o invernaderos
																			</label>
																		</div>

																		<div class="col-md-12 align-self-center">
																			<div class="form-group g-pos-rel mb-0">
																				<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																					<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																				</span>
																				<input id="op2_preg2" name="op2_preg2" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<?php if (isset($consulta_coc)) {echo $consulta_coc->op2_preg2;}?>" required="required" data-msg="This field is mandatory"
																			data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div class="row g-mb-20">
																		<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
																			<label class="pregunta mb-0" for="#num_unidades_produccion_certificar">
																				Número de unidades de producción a certificar
																			</label>
																		</div>

																		<div class="col-md-12 align-self-center">
																			<div class="form-group g-pos-rel mb-0">
																				<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																					<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																				</span>
																				<input id="op2_preg3" name="op2_preg3" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<?php if (isset($consulta_coc)) { echo $consulta_coc->op2_preg3;}?>"required="required" data-msg="This field is mandatory"
																			data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
														</table>
													</div>

													<div class="col-md-12">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th colspan="3">
																		Declaración sobre producción paralela (PP) y propiedad paralela (PO), seleccione SI o NO, se detallara la información en el anexo CER.RG.01
																	</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		¿El producto se vende antes de la cosecha?
																	</td>
																	<td>
																		<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																			<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="coc_preg1" id="coc_preg1" type="radio" value="SI">
																			<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																				<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked" ></i>
																			</div>
																			SI
																		</label>
																	</td>
																	<td>
																		<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																			<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="coc_preg1" id="coc_preg1_2" type="radio" value="NO">
																			<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																				<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																			</div>
																			NO
																		</label>
																	</td>
																</tr>
																<tr>
																	<td>
																		¿La entidad legal realiza la producción de producto certificado y no certificado, es decir, producción paralela (PP)?
																	</td>
																	<td>
																		<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																			<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="coc_preg2" id="coc_preg2" type="radio" value="SI">
																			<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																				<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																			</div>
																			SI
																		</label>
																	</td>
																	<td>
																		<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																			<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="coc_preg2" id="coc_preg2_2" type="radio" value="NO">
																			<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																				<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																			</div>
																			NO
																		</label>
																	</td>
																</tr>
																<tr>
																	<td>
																		¿La entidad legal que produce el producto, compra el mismo produco a otros proveedores, es decir, propiedad paralela (PO)?
																	</td>
																	<td>
																		<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																			<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="coc_preg3" id="coc_preg3" type="radio" value="SI">
																			<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																				<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																			</div>
																			SI
																		</label>
																	</td>
																	<td>
																		<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																			<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="coc_preg3" id="coc_preg3_2" type="radio" value="NO">
																			<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																				<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																			</div>
																			NO
																		</label>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												
											</form>