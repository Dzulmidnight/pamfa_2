<form class="js-validate" id="global_ifa" name="global_ifa" >
												<div class="row">
													<div class="col-sm-12">
															
														<h4 class="nombreEsquema" style="font-size:14px;">
															<img src="<?php echo base_url(); ?>assets/img/esquemas_certificacion/esquema_global_gap.jpg" alt=""> GLOBALG.A.P IFA V5.1
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
																<input type="text" value="<?php if (isset($consulta_ifa)) { echo $consulta_ifa->productos;}?>" data-role="tagsinput" placeholder="Ingresa los productos" id="productos" name="productos">
															</div>
									                    </div>
													</div>

													<div class="col-md-6">
														<table class="table table-bordered">
															<tr>
																<td colspan="3">
																	Opción 1: Productor individual
																</td>
															</tr>
															<tr class="text-justify">
																<td>
																	<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalIfa"  id="radioGlobalIfa1" type="radio" value="productor_individual" onclick="grupoProductores()">
																		<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																			<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																		</div>
																		Productor individual
																	</label>
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalIfa" id="radioGlobalIfa2"type="radio" value="productor_individual_con_sistema" onclick="grupoProductores()">
																		<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																			<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																		</div>
																		Productor individual con explotaciones múltiples con sistema de Gestión de calidad
																	</label>
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalIfa" id="radioGlobalIfa3" type="radio" value="productor_individual_sin_sistema" onclick="grupoProductores()">
																		<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																			<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																		</div>
																		Productor individual con Explotaciones múltiples sin Sistema de Gestión de Calidad.
																	</label>
																</td>
															</tr>
														</table>
													</div>
													<div class="col-md-6">
														<table class="table table-bordered">
															<tr>
																<td colspan="2">
																	<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalIfa" id="radioGlobalIfa4" type="radio" onclick="grupoProductores()" value="grupo_productores">
																		<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																			<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																		</div>
																		Opcíon 2: Grupo de productores
																	</label>
																</td>
															</tr>
															<tr class="text-justify">
																<td>
																	<div class="row g-mb-20">
																		<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
																			<label class="pregunta mb-0" for="#num_productores">Número de productores a certificar</label>
																		</div>

																		<div class="col-md-12 align-self-center">
																			<div class="form-group g-pos-rel mb-0">
																				<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																					<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																				</span>
																				<input id="num_productores" name="num_productores" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="int"  required="required" data-msg="This field is mandatory"
																			data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" value="">
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div class="row g-mb-20">
																		<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
																			<label class="pregunta mb-0" for="#num_unidades_produccion">Número de unidades de producción a certificar</label>
																		</div>

																		<div class="col-md-12 align-self-center">
																			<div class="form-group g-pos-rel mb-0">
																				<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																					<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																				</span>
																				<input id="num_unidades_produccion" name="num_unidades_produccion"  class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" required="required" data-msg="This field is mandatory"
																			data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" value="">
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
														</table>
													</div>
													<div class="col-sm-12">
														<div class="form-group g-mb-30">
															<label class="g-mb-10" for="inputGroup-1_1">
																Número de unidades de manipulación de productos a certificar
															</label>

															<div class="g-pos-rel">
																<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																	<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																</span>
																<input id="num_unidades_manipulacion" name="num_unidades_manipulacion" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Escribe aquí" value="">
															</div>
														</div>
													</div>
												
												</div>
												