<div class="g-pa-20">
	<div class="row g-mb-0">
		<div class="col-md-12">
			<button class="btn u-btn-bluegray" onclick="history.back(-1)">
				<i class="glyph-icon icon-arrow-left"></i> Regresar
			</button>
		</div>
		<div class="col-md-12 g-mb-0 g-mn-0--md">
			<div class="card border-0 rounded-0 g-mb-50">
				<!-- Proceso de cotización -->
				<div class="container g-pt-40 g-pb-70">
					<h3 class="g-mb-30">
						Revisión de documentos y desición
					</h3>
				  	<form class="js-validate js-step-form" data-progress-id="#stepFormProgress" data-steps-id="#stepFormSteps">
						<div class="g-mb-100">
							<!-- Titulo de los pasos -->
							<ul id="stepFormProgress" class="js-step-progress row justify-content-center list-inline text-center g-font-size-17 mb-0">
								<li class="col-2 list-inline-item g-mb-20 g-mb-0--sm">
									<span class="d-block u-icon-v2 u-icon-size--sm g-rounded-50x g-brd-primary g-color-primary g-color-white--parent-active g-bg-primary--active g-color-white--checked g-bg-primary--checked mx-auto mb-3">
										<i class="g-font-style-normal g-font-weight-700 g-hide-check">1</i>
										<i class="fa fa-check g-show-check"></i>
									</span>
									<h4 class="g-font-size-16 text-uppercase mb-0">Verificación datos</h4>
								</li>

								<li class="col-2 list-inline-item g-mb-20 g-mb-0--sm">
									<span class="d-block u-icon-v2 u-icon-size--sm g-rounded-50x g-brd-gray-light-v2 g-color-gray-dark-v5 g-brd-primary--active g-color-white--parent-active g-bg-primary--active g-color-white--checked g-bg-primary--checked mx-auto mb-3">
										<i class="g-font-style-normal g-font-weight-700 g-hide-check">2</i>
										<i class="fa fa-check g-show-check"></i>
									</span>
									<h4 class="g-font-size-16 text-uppercase mb-0">Condiciones internas</h4>
								</li>

								<li class="col-2 list-inline-item">
									<span class="d-block u-icon-v2 u-icon-size--sm g-rounded-50x g-brd-gray-light-v2 g-color-gray-dark-v5 g-brd-primary--active g-color-white--parent-active g-bg-primary--active g-color-white--checked g-bg-primary--checked mx-auto mb-3">
										<i class="g-font-style-normal g-font-weight-700 g-hide-check">3</i>
										<i class="fa fa-check g-show-check"></i>
									</span>
									<h4 class="g-font-size-16 text-uppercase mb-0">Desición</h4>
								</li>
								<li class="col-2 list-inline-item">
									<span class="d-block u-icon-v2 u-icon-size--sm g-rounded-50x g-brd-gray-light-v2 g-color-gray-dark-v5 g-brd-primary--active g-color-white--parent-active g-bg-primary--active g-color-white--checked g-bg-primary--checked mx-auto mb-3">
										<i class="g-font-style-normal g-font-weight-700 g-hide-check">4</i>
										<i class="fa fa-check g-show-check"></i>
									</span>
									<h4 class="g-font-size-16 text-uppercase mb-0">Verificación de pago</h4>
								</li>

							</ul>
							<!-- End Titulo de los pasos -->
						</div>

					    <div id="stepFormSteps">
							<!-- Verificación datos cliente -->
							<div id="step1" class="active">
								<div class="row">
									<div class="col-md-8 g-mb-30">
										<!-- Products Block -->
										<h3>
											Datos proporcionados por el cliente
										</h3>
										<div class="js-custom-scroll g-height-50vh--lg g-pa-15 g-pa-25--lg">
											<table class="text-left w-100">
												<thead class="h6 g-brd-bottom g-brd-gray-light-v3 g-color-black text-uppercase">
									
												</thead>

												<tbody>
													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															Datos fiscales
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_1" type="radio">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i> Cumple
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_1" type="radio">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i> No Cumple
																</span>
															</label>
														</td>
														<td class="g-width-250">
															<div class="form-group">
																<div class="u-input-group-v1">
																	<textarea id="message" class="form-control form-control-md rounded-0 g-resize-none" name="message" rows="2"></textarea>
																	
																</div>
															</div>
														</td>
													</tr>

													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															Esquema de Certificación
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_2" type="radio">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i> Cumple
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_2" type="radio">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i> No Cumple
																</span>
															</label>
														</td>
														<td class="g-width-250">
															<div class="form-group">
																<div class="u-input-group-v1">
																	<textarea id="message" class="form-control form-control-md rounded-0 g-resize-none" name="message" rows="2"></textarea>
																	<label for="message "><i class="hs-admin-pencil"></i> <span class="text-muted">Observación</span></label>
																</div>
															</div>
														</td>
													</tr>

													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															Datos de emplazamientos
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_3" type="radio">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i> Cumple
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_3" type="radio">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i> No Cumple
																</span>
															</label>
														</td>
														<td class="g-width-250">
															<div class="form-group">
																<div class="u-input-group-v1">
																	<textarea id="message" class="form-control form-control-md rounded-0 g-resize-none" name="message" rows="2"></textarea>
																	<label for="message "><i class="hs-admin-pencil"></i> <span class="text-muted">Observación</span></label>
																</div>
															</div>
														</td>
													</tr>

													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															Datos de centros de manipulación
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_4" type="radio">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i> Cumple
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_4" type="radio">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i> No Cumple
																</span>
															</label>
														</td>
														<td class="g-width-250">
															<div class="form-group">
																<div class="u-input-group-v1">
																	<textarea id="message" class="form-control form-control-md rounded-0 g-resize-none" name="message" rows="2"></textarea>
																	<label for="message "><i class="hs-admin-pencil"></i> <span class="text-muted">Observación</span></label>
																</div>
															</div>
														</td>
													</tr>

													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															Superficie
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_5" type="radio">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i> Cumple
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_5" type="radio">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i> No Cumple
																</span>
															</label>
														</td>
														<td class="g-width-250">
															<div class="form-group">
																<div class="u-input-group-v1">
																	<textarea id="message" class="form-control form-control-md rounded-0 g-resize-none" name="message" rows="2"></textarea>
																	<label for="message "><i class="hs-admin-pencil"></i> <span class="text-muted">Observación</span></label>
																</div>
															</div>
														</td>
													</tr>

													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															Periodo de cosecha
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_6" type="radio">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i> Cumple
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_6" type="radio">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i> No Cumple
																</span>
															</label>
														</td>
														<td class="g-width-250">
															<div class="form-group">
																<div class="u-input-group-v1">
																	<textarea id="message" class="form-control form-control-md rounded-0 g-resize-none" name="message" rows="2"></textarea>
																	<label for="message "><i class="hs-admin-pencil"></i> <span class="text-muted">Observación</span></label>
																</div>
															</div>
														</td>
													</tr>

													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															Compromisos con otros Organismos de Certificación
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_7" type="radio">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i> Cumple
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_7" type="radio">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i> No Cumple
																</span>
															</label>
														</td>
														<td class="g-width-250">
															<div class="form-group">
																<div class="u-input-group-v1">
																	<textarea id="message" class="form-control form-control-md rounded-0 g-resize-none" name="message" rows="2"></textarea>
																	<label for="message "><i class="hs-admin-pencil"></i> <span class="text-muted">Observación</span></label>
																</div>
															</div>
														</td>
													</tr>

													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															Firmado por el representante autorizado
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_8" type="radio">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i> Cumple
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_8" type="radio">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i> No Cumple
																</span>
															</label>
														</td>
														<td class="g-width-250">
															<div class="form-group">
																<div class="u-input-group-v1">
																	<textarea id="message" class="form-control form-control-md rounded-0 g-resize-none" name="message" rows="2"></textarea>
																	<label for="message "><i class="hs-admin-pencil"></i> <span class="text-muted">Observación</span></label>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<!-- End Products Block -->
									</div>

									<div class="col-md-4 g-mb-30">
										<!-- Summary -->
										<div class="g-bg-gray-light-v5 g-pa-20 g-pb-50 mb-4">
											<h4 class="h6 text-uppercase mb-3">Resumen</h4>

											<div class="d-flex justify-content-between mb-2">
												<span class="g-color-black">Fecha</span>
												<span class="g-color-black g-font-weight-300">
													<?= date('d/m/Y', time()) ?>
												</span>
											</div>
											<div class="d-flex justify-content-between mb-2">
												<span class="g-color-black">Cliente</span>
												<span class="g-color-black g-font-weight-300">
													Nombre del cliente
												</span>
											</div>
											<div class="d-flex justify-content-between">
												<span class="g-color-black">Esquemas</span>
												<span class="g-color-black g-font-weight-300">
													Global GAP, Hecho en México
												</span>
											</div>


										</div>
										<!-- End Summary -->

										<button class="btn btn-block u-btn-primary g-font-size-13 text-uppercase g-py-15 mb-4" type="button" data-next-step="#step2">
											Proceder a la siguiente etapa
										</button>


									</div>
								</div>
							</div>
							<!-- End Verificación datos cliente -->

							<!-- Verificación Condiciones internas -->
							<div id="step2">
								<div class="row">
									<div class="col-md-12">
										<button style="width:20%" class="btn btn-block u-btn-bluegray g-font-size-13 text-uppercase g-py-15 mb-45" type="button" data-next-step="#step1">
											<i class="icon-arrow-left"></i> Paso anterior
										</button>
									</div>

									<div class="col-md-8 g-mb-30">
										<h4>
											Una vez verificados los puntos anteriores, PAMFA deberá verificar las siguientes condiciones internas.
										</h4>
										<div class="js-custom-scroll g-height-50vh--lg g-pa-15 g-pa-25--lg">
											<table class="text-left">
												<thead class="h6 g-brd-bottom g-brd-gray-light-v3 g-color-black text-uppercase">
								                    <th class="g-font-weight-400 g-width-40 text-left g-pb-20">#</th>
								                    <th class="g-font-weight-400 g-pb-20">
								                    	Reactivo
								                    </th>
								                    <th class="text-center g-font-weight-400 g-pb-20">
								                    	Si
								                    </th>
								                    <th class=" text-center g-font-weight-400 g-pb-20">
								                    	No
								                    </th>
												</thead>

												<tbody>
													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															1
														</td>
														<td>
															¿Con la información proporcionada acerca del cliente y el producto es suficiente realizar el proceso de certificación?
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="2_1" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i>
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="2_1" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i>
																</span>
															</label>
														</td>
													</tr>
													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															2
														</td>
														<td>
															¿Están resuelto cualquier diferencia de entendimiento conocida entre PAMFA y el cliente, incluyendo el acuerdo con respecto a las normas u otros documentos normativos?
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn2_2" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i>
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn2_2" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i>
																</span>
															</label>
														</td>
													</tr>
													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															3
														</td>
														<td>
															¿Se define claramente el alcance de la certificación solicitada?
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn2_3" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i>
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn2_3" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i>
																</span>
															</label>
														</td>
													</tr>
													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															4
														</td>
														<td>
															¿PAMFA tiene la capacidad, competencia y los medios para realizar todas las actividades del proceso de certificación con respecto al alcance definido en la solicitud de servicio?
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn2_4" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i>
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn2_4" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i>
																</span>
															</label>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>

									<div class="col-md-4 g-mb-30">
										<!-- Resumen -->
										<div class="g-bg-gray-light-v5 g-pa-20 g-pb-50 mb-4">
											<h4 class="h6 text-uppercase mb-3">Resumen</h4>

											<div class="d-flex justify-content-between mb-2">
												<span class="g-color-black">Fecha</span>
												<span class="g-color-black g-font-weight-300">
													<?= date('d/m/Y', time()) ?>
												</span>
											</div>
											<div class="d-flex justify-content-between mb-2">
												<span class="g-color-black">Cliente</span>
												<span class="g-color-black g-font-weight-300">
													Nombre del cliente
												</span>
											</div>
											<div class="d-flex justify-content-between">
												<span class="g-color-black">Esquemas</span>
												<span class="g-color-black g-font-weight-300">
													Global GAP, Hecho en México
												</span>
											</div>

										</div>
										<!-- End Resumen -->
										<button class="btn btn-block u-btn-primary g-font-size-13 text-uppercase g-py-15 mb-45" type="button" data-next-step="#step3">
											Proceder a la desición
										</button>

									</div>
								</div>
							</div>
							<!-- End Verificación Condiciones internas -->

							<!-- Desición y cotización -->
							<div id="step3">
								<div class="row">
									<div class="col-md-12">
										<div class="float-left">
											<button class="btn btn-block u-btn-bluegray g-font-size-13 text-uppercase g-py-15 mb-45" type="button" data-next-step="#step2">
												<i class="icon-arrow-left"></i> Paso anterior
											</button>											
										</div>
										<div class="float-right">
											<button class="btn btn-block u-btn-primary g-font-size-13 text-uppercase g-py-15 mb-45" type="button" data-next-step="#step4">
												Verificación de pago <i class="icon-arrow-right"></i>
											</button>
										</div>
									</div>
		
									<div class="col-md-12">
										<h5>
											Basado en los puntos anteriores, por favor seleccione si se puede o no otorgar el servicio.
										</h5>
									</div>
									<div class="col-md-12 text-center g-mt-10 g-mb-10">
										<label class="u-check">
											<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_1" type="radio" onclick="desicionServicio('si')">
											<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
												<i class="fa fa-check"></i> Se puede otorgar el servicio.
											</span>
										</label>
										<label class="u-check">
											<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_1" type="radio" onclick="desicionServicio('no')">
											<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
												<i class="fa fa-close"></i> No se puede otorgar el servicio
											</span>
										</label>
									</div>

									<!-- Se puede otorgar el servicio -->
									<div id="otorgarServicio" class="col-md-12 g-mb-30" style="display:none">
										<div class="card border-0 rounded-0 ">
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
													<a href="#" class="btn u-btn-primary g-mr-10" onclick="procesoFinalizado()">
														<i class="hs-admin-check-box"></i> Aprobar envio
													</a>
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
											<div class="card-block u-info-v1-1 g-bg-white-gradient-v1--after g-pa-20">
												<div>
							            			<!-- Info cotización -->
							            			<div class="h1 text-left">
							            				Cotización <span class="g-color-green">#CTZ19</span>
							            				<span class="h2 float-right">Fecha de emisión: <?= date('d/m/Y', time())?></span>
							            			</div>
							            			<hr>
													<div class="row">
										                <!-- Info empresa -->
										                <div class="col-lg-4 text-left">
										                    <p class="h2">PAMFA A.C.</p>
										                    <address>
										                        Calle José Zamora N°48, Col. Emiliano Zapata,<br>
										                        Uruapan, Mich<br>
										                        CP: 60180 <br>
										                        <i class="icon-phone"></i> (452) 50 20 849 / 452 5251-772
										                    </address>
										                </div>
										                <!-- END Info empresa -->

										                <!-- Info cliente -->
										                <div class="col-lg-4 text-right">
										                    <p class="h2">Cliente</p>
										                    <address>
										                        Dirección<br>
										                        Ciudad<br>
										                        Codigo postal<br>
										                        <i class="icon-phone"></i> (000) 000-0000
										                    </address>
										                </div>
											            <!-- END Info cliente -->
														<!-- Total cotización -->
														<div class="h1 col-lg-4 text-right g-color-blue">
															<p class="text-muted h5">
																Total
															</p>
															$41,520.00
														</div>
														<!-- End Total cotización -->
											        </div>
							            			<!-- END Info cotización -->
													<hr>
													<div class="col-lg-12 g-mb-20">
														<b>
															El siguiente presupuesto tiene una vigencia de 30 días naturales posteriores a la fecha de emisión.
														</b>
													</div>
							            			<!-- Table -->
										            <div class="">
														<button type="button" class="btn u-btn-primary" name="button" onclick="addCargo()">
															<i class="hs-admin-plus"></i> Agregar cargo
														</button>
										                <table id="tablaCotizacion" class="table table-bordered table-hover">
										                    <thead>
										                        <tr>
										                            <th class="text-center" style="width: 50px;">#</th>
										                            <th>Concepto(esquema)</th>
										                            <th class="text-right" style="width: 120px;">Costo Unitario</th>
																								<th class="text-center" style="width: 100px;">Cantidad</th>
										                            <th class="text-right" style="width: 120px;">Total</th>
										                        </tr>
										                    </thead>
										                    <tbody>
																<?php
																for ($i=1; $i <= 3; $i++) {
																?>
																	<tr>
																		<td class="text-center">
																			<button type="button" class="btn u-btn-primary" name="button">
																				<i class="hs-admin-pencil"></i> <?= $i ?>
																			</button>
																		</td>
																		<td>
																			<p class="font-w600 push-10">Global GAP</p>
																			<div class="text-muted">
																				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
																			</div>
																		</td>
																		<td class="text-right">$ 25.000,00</td>
																		<td class="text-center">
																			<span class="u-label g-rounded-20 g-px-15 g-bg-primary g-mr-10 g-mb-15">1</span>
																		</td>
																		<td class="text-right">$ 25.000,00</td>
																	</tr>
																<?php
																}
																?>

																<tr>
																	<td colspan="4" class="font-w600 text-right">Subtotal</td>
																	<td class="text-right">$ 27.500,00</td>
																</tr>
																<tr>
																	<td colspan="4" class="font-w600 text-right">I.V.A</td>
																	<td class="text-right">16%</td>
																</tr>
																<tr class="active">
																	<td colspan="4" class="font-w700 text-uppercase text-right">Total</td>
																	<td class="font-w700 text-right">$ 33.000,00</td>
																</tr>
										                    </tbody>
										                </table>
										            </div>
										            <!-- END Table -->
													<hr>
													<b class="text-muted">Especificaciones</b>
													<ul class="text-muted text-justify">
														<li>
															La cotización incluye auditoria anunciada y no anunciada en caso que así lo requiera el esquema de certificación.
														</li>
														<li>
															Para orgánico incluye revisión de plan orgánico.
														</li>
														<li>
															No incluye viáticos de auditor.
														</li>
														<li>
															En caso de requerir factura se agregara el IVA (16%)
														</li>
														<li>
															Las condiciones de pago serán 100% al momento de aceptar la cotización.
														</li>
														<li>
															Esta cotización está sujeta a cambios si el alcance cambia al momento de realizar la auditoria.
														</li>
														<li>
															La cancelación del servicio programado tendrá una penalización de 20% del costo total.
														</li>
														<li>
															Esta cotización está realizada en MXN pero, los costos posteriores a 30 días pueden variar en realización a la fluctuación del dólar y/o euro de acuerdo al esquema.
														</li>
													</ul>
													<hr>
													<b class="text-muted">Nota</b>
													<ul class="text-muted text-justify">
														<li>
															La cuota anual cubre los gastos para el registro en la base de datos GlobalG.A.P.  El cliente debe informar a VERIFICACION Y CERTIFICACION PAMFA  sobre cualquier GGN, LGN o Numero CoC existente o caducado, y sobre cualquier actividad previa de verificación/inspección/auditoria o certificación/aprobación en su organización, incluyendo resultados. Su no comunicación redundará un costo extra  de 100 € (Euros), para un productor individual bajo la opción 1; y de 500 € (Euros), para un grupo de productores bajo la opción 2, sobre la tarifa de registro.
														</li>
														<li>
															“No tiene un costo adicional la emisión del certificado" y se emitirá cuando se haya dado cumplimiento con los requisitos de la certificación.
														</li>
														<li>
															SRRC - VERIFICACION Y CERTIFICACION PAMFA A.C. emitirá el dictamen de verificación e informe de evaluación de la conformidad, la dependencia  en este momento es quien decide sobre la certificación.
														</li>
													</ul>
													<hr>
													<b>DATOS BANCARIOS</b>
													<p>
														VERIFICACION Y CERTIFICACION PAMFA A.C.
														<br>
														BANCO: BANBAJIO
														<br>
														CUENTA: 19005552
														<br>
														CLABE: 03 05 28 90 00 1114 8626
														<br>
														REFERENCIA: ORGANISMO DE CERTIFICACIÓN.
													</p>

							            		<!-- Footer -->
							            		<!--<hr class="hidden-print">-->
							            		<!--<p class="text-muted text-center"><small>Thank you very much for doing business with us. We look forward to working with you again!</small></p>-->
							            		<!-- END Footer -->
							        			</div>
											</div>
											<!-- End Panel Body -->
										</div>
									</div>
									<!-- End Se puede otorgar el servicio -->


									<!-- No se puede otorgar -->
									<div id="rechazarServicio" class="col-md-12 g-mb-30" style="display:none">
										<div class="card border-0 rounded-0 ">
											<!-- Panel Header -->
											<div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
												<div class="row">
													<div class="col-md-12">
														<h3 class="h6 mb-0">
															<i class="icon-layers g-pos-rel g-top-1 g-mr-5"></i> Formato declinación de servicio
														</h3>
													</div>

												</div>

												<div class="dropdown g-mb-10 g-mb-0--md">
													<a href="#" class="btn u-btn-primary g-mr-10" onclick="procesoFinalizado()">
														<i class="hs-admin-check-box"></i> Aprobar envio
													</a>
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
											<div class="card-block u-info-v1-1 g-bg-white-gradient-v1--after g-pa-20">
												<div>
							            			<!-- Info cotización -->
							            			<div class="h2 text-left">
							            				Estimado usuario
							            			</div>
							            			<hr>
													<div class="row">
										                <div class="col-lg-12">
															Por este medio hacemos de su conocimiento que por políticas de VERIFICACIÓN Y CERTIFICACIÓN PAMFA A.C., y en estricto apego a lo señalado en el esquema de certificación: <span class="g-color-red">Nombre esquema 1, Nombre esquema 2</span>.
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
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" >
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
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" >
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
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" >
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
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" >
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
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" >
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
																		<textarea id="inputGroup-2_3" class="form-control form-control-md u-textarea-expandable g-brd-none g-brd-bottom g-brd-gray-light-v7 g-brd-gray-light-v3--focus rounded-0 g-resize-none g-overflow-hidden" rows="3" placeholder=""></textarea>
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
											</div>
											<!-- End Panel Body -->
										</div>
									</div>
									<!-- End No se puede otorgar -->


								</div>
							</div>
							<!-- End Desición y cotización -->

							<!-- Verificación del pago -->
							<div id="step4" class="">
								<div class="row">
									<div class="col-md-12">						
										<button style="width:20%" class="btn btn-block  u-btn-bluegray g-font-size-13 text-uppercase g-py-15  mb-45" type="button" data-next-step="#step3">
											<i class="icon-arrow-left"></i> Paso anterior
										</button>
									</div>
									<div class="col-md-12">
										<div class=" g-bg-gray-light-v5 g-pa-20 g-pb-20 mb-4">
											<h3>
												<span>Verificación del pago</span>
												<span class="float-right">Resumen</span>
											</h3>
										</div>
									</div>
					                <!-- Info cliente -->
					                <div class="col-lg-4">
					                    <p class="h2">Cliente</p>
					                    <p class="h4">Nombre del cliente</p>
					                    <address>
					                        Dirección
					                        <br>
					                        Ciudad
					                        <br>
					                        Codigo postal
					                        <br>
					                        <i class="icon-phone"></i> (000) 000-0000
					                        <br>
					                        <i class="icon-education-166 u-line-icon-pro"></i> ejemplo@gmail.com
					                    </address>
					                </div>
						            <!-- END Info cliente -->

					                <!-- Esquemas de certificación -->
					                <div class="col-lg-4">
					                    <p class="h2">Cotización</p>
					                    <p class="h5">
					                    	Emisión: <span class="g-color-red"><?= date('d/m/Y', time()) ?></span>
					                    </p>
					                    <p class="h5">
					                    	Total: <span class="g-color-blue">$41,520.00</span>
					                    </p>
					                	<hr class="g-pb-0 g-mb-0">
					                    <p class="h2">Esquemas</p>
					                    	<i class="et-icon-document"></i> Nombre esquema
					                    	<br>
					                    	<i class="et-icon-document"></i> Nombre esquema
					                    	<br>
					                    	<i class="et-icon-document"></i> Nombre esquema
					                    	<br>
					                    </p>
					                </div>
						            <!-- END Esquemas de certificación -->

					                <!-- Resumen cotización -->
					                <div class="col-lg-4">
					                    <p class="h2">Comprobante pago</p>

					                    <div class="row">
											<div class="col-sm-12">
							                    <p style="background: #e74c3c; color:white" class="g-pa-10">
							                    	<i class="hs-admin-close"></i> No disponible
							                    </p>

							                    <p style="background: #e67e22; color:white" class="g-pa-10">
							                    	<i class="icon-exclamation"></i> En espera
							                    </p>
											</div>

											<!-- Aprobación de comprobante -->
											<div class="col-sm-12 g-mb-10">
							                    <button class="btn u-btn-primary" style="width:100%">
							                    	<i class="hs-admin-download"></i> Descargar
							                    </button>	
											</div>
											<div class="col-sm-6">
												<label class="u-check" style="width:100%">
													<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn2_4" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1" onclick="aprobarCotizacion('si')">
													<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
														<i class="hs-admin-check"></i> Aprobar
													</span>
												</label>	
											</div>
											<div class="col-sm-6">
												<label class="u-check" style="width:100%">
													<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn2_4" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1" onclick="aprobarCotizacion('no')">
													<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
														<i class="hs-admin-close"></i> Rechazar
													</span>
												</label>	
											</div>
											<!-- End Aprobación de comprobante -->
					                    </div>
										

					                </div>
						            <!-- END Resumen cotización -->


								</div>
							</div>
							<!-- End Verificación del pago -->
					    </div>
				  	</form>
				</div>
				<!-- End Proceso de cotización -->


			</div>
		</div>
	</div>
</div>
<script>
	function desicionServicio(desicion){
		if(desicion == 'si'){
			document.getElementById('otorgarServicio').style.display = 'block';
			document.getElementById('rechazarServicio').style.display = 'none';
		}else{
			document.getElementById('otorgarServicio').style.display = 'none';
			document.getElementById('rechazarServicio').style.display = 'block';
		}
	}

	function addCargo() {
		var tabla = document.getElementById("tablaCotizacion");
		var numFilas = tabla.rows.length;
		var filaActual = numFilas - 3;

		var row = tabla.insertRow(filaActual);
		var celda1 = row.insertCell(0);
    var celda2 = row.insertCell(1);
		var celda3 = row.insertCell(2);
		var celda4 = row.insertCell(3);
		var celda5 = row.insertCell(4);

		celda1.innerHTML = "<button type='button' onclick='guardarFila("+filaActual+")' class='btn u-btn-blue'><i class='hs-admin-save'></i></button><button type='button' onclick='eliminarFila(this)' class='btn u-btn-red'><i class='hs-admin-close'></i></button>";

		celda2.innerHTML = "<input class='form-control' type='text' name='' value='Concepto'>";
		celda2.innerHTML += "<textarea class='form-control' name='name' placeholder='Detalles del concepto'></textarea>";

		celda3.innerHTML = "<input class='form-control' type='number' id='costo_unitario"+filaActual+"' min='0' step='0.01' placeholder='Costo unitario'>";
		celda4.innerHTML = "<input class='form-control' type='number' id='cantidad"+filaActual+"' min='0' placeholder='Cantidad'>";
		celda5.innerHTML = "<div class='text-right'>$<span id='total_final"+filaActual+"'></span></div>";
	}

	function eliminarFila(fila){
		var index = fila.parentNode.parentNode.rowIndex;
		document.getElementById("tablaCotizacion").deleteRow(index);
	}
	function guardarFila(fila){
		var costo = document.getElementById('costo_unitario'+fila).value;
		var cantidad = document.getElementById('cantidad'+fila).value;

		var total = costo * cantidad;

		document.getElementById('total_final'+fila).innerHTML = Intl.NumberFormat().format(total);
	}

	function procesoFinalizado(){
		swal({
			title: "Proceso finalizado",
			text: "",
			icon: "success",
		})
		.then((value) => {
			window.location.href = "<?php echo base_url('backend/administrador/solicitudes/solicitudesPendientes'); ?>";
		})

	}
	function aprobarCotizacion(desicion){
		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this imaginary file!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				swal("Poof! Your imaginary file has been deleted!", {
				  icon: "success",
				});
			} else {
				swal("Your imaginary file is safe!");
			}
		});
	}

</script>