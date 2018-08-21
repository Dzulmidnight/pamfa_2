<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
	<div class="g-pa-20">

		<div class="row">

			<div class="col-md-3 g-mb-30 g-mb-0--md">
				<div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
					
					<!-- Profile Completion -->
					<section class="g-mb-30 g-mb-50--md">
						<h4 class="media h6 g-font-weight-400 g-mb-15">
							<span class="d-flex align-self-center g-color-gray-dark-v6">Avance de solicitud</span>
							<span class="media-body align-self-center text-right g-color-gray-dark-v6">75%</span>
						</h4>

						<div class="progress g-height-4 g-rounded-2">
							<div class="progress-bar g-bg-lightblue-v4 g-rounded-3" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</section>
					<!-- End Profile Completion -->

					<!-- Profile Sidebar -->
					<section>
						<ul class="list-unstyled mb-0">
							<li class="g-brd-top g-brd-gray-light-v7 mb-0">
								<a class="d-flex align-items-center u-link-v5 g-parent g-py-15" href="<?php echo base_url('backend/cliente/usuario/perfiles/datos_generales'); ?>">
									<span class="g-font-size-18 g-color-gray-light-v6 g-color-lightred-v3--parent-hover g-color-lightred-v3--parent-active g-mr-15">
									<i class="hs-admin-user"></i>
									</span>
									<span class="g-color-gray-dark-v6 g-color-lightred-v3--parent-hover g-color-lightred-v3--parent-active">1.- DATOS DEL CLIENTE</span>
								</a>
							</li>


							<li class="g-brd-top g-brd-gray-light-v7 mb-0">
								<a class="d-flex align-items-center u-link-v5 g-parent g-py-15" href="<?php echo base_url('backend/cliente/usuario/perfiles/datos_fiscales'); ?>">
									<span class="g-font-size-18 g-color-gray-light-v6 g-color-lightred-v3--parent-hover g-color-lightred-v3--parent-active g-mr-15">
										<i class="hs-admin-wallet"></i>
									</span>
									<span class="g-color-gray-dark-v6 g-color-lightred-v3--parent-hover g-color-lightred-v3--parent-active">2.- DATOS DE FACTURACIÓN</span>
								</a>
							</li>

							<li class="g-brd-top g-brd-gray-light-v7 mb-0">
								<a class="d-flex align-items-center u-link-v5 g-parent g-py-15" href="<?php echo base_url('backend/cliente/usuario/perfiles/datos_fiscales'); ?>">
									<span class="g-font-size-18 g-color-gray-light-v6 g-color-lightred-v3--parent-hover g-color-lightred-v3--parent-active g-mr-15">
										<i class="hs-admin-wallet"></i>
									</span>
									<span class="g-color-gray-dark-v6 g-color-lightred-v3--parent-hover g-color-lightred-v3--parent-active">3.- PRODUCTOS POR CERTIFICAR</span>
								</a>
							</li>

							<li class="g-brd-top g-brd-gray-light-v7 mb-0">
								<a class="d-flex align-items-center u-link-v5 g-parent g-py-15" href="<?php echo base_url('backend/cliente/usuario/perfiles/datos_fiscales'); ?>">
									<span class="g-font-size-18 g-color-gray-light-v6 g-color-lightred-v3--parent-hover g-color-lightred-v3--parent-active g-mr-15">
										<i class="hs-admin-wallet"></i>
									</span>
									<span class="g-color-gray-dark-v6 g-color-lightred-v3--parent-hover g-color-lightred-v3--parent-active">4.- ESQUEMA DE CERTIFICACIÓN</span>
								</a>
							</li>

							<li class="g-brd-top g-brd-gray-light-v7 mb-0">
								<a class="d-flex align-items-center u-link-v5 g-parent g-py-15" href="<?php echo base_url('backend/cliente/usuario/perfiles/datos_fiscales'); ?>">
									<span class="g-font-size-18 g-color-gray-light-v6 g-color-lightred-v3--parent-hover g-color-lightred-v3--parent-active g-mr-15">
										<i class="hs-admin-wallet"></i>
									</span>
									<span class="g-color-gray-dark-v6 g-color-lightred-v3--parent-hover g-color-lightred-v3--parent-active">5.- PASO FINAL</span>
								</a>
							</li>

						</ul>
					</section>
					<!-- End Profile Sidebar -->
				</div>

			</div>
			
			<div class="col-md-9">

				<!-- inicia DATOS DEL CLIENTE -->
				<div id="datosCliente">
					<div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
						<form class="js-validate">

							<header>
								<h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">1.- DATOS DEL CLIENTE</h2>
							</header>
							<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

							<div class="row">
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Nombre de la entidad legal *</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<textarea id="inputGroup-1_3" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder=""></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Nombre del representante legal *</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<textarea id="inputGroup-1_3" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder=""></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Email *</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Teléfono *</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Fax</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
							</div>


							<header>
								<h3 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">DIRECCIÓN DE LA ENTIDAD LEGAL</h3>
							</header>

							<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

							<div class="row">
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">País *</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="row g-mx-minus-10">
												<div class="col-md align-self-center g-px-10 g-mb-20 g-mb-0--md">
													<div class="form-group u-select--v2 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
														<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
															<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
														</span>
														<select class="js-select u-select--v2-select w-100" required="required" style="display: none;">
															<option>Listado de paises</option>
															<option selected="selected">México</option>
														</select>
														<i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto g-mr-15"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Estado *</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Municipio *</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Colonia *</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Codigo Postal</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-12">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Dirección *</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<textarea id="inputGroup-1_3" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder=""></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>

						</form>
					</div>
					
				</div>
				<!-- Termina DATOS DEL CLIENTE -->

				<!-- Inicia DATOS DE FACTURACIÓN -->
				<div id="datos_facturacion">
					<div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
						<form class="js-validate">

							<header>
								<h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">2.- DATOS DE FACTURACIÓN</h2>
							</header>

							<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

							<div class="row">
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">R.F.C</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Razón social</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<textarea id="inputGroup-1_3" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder=""></textarea>
											</div>
										</div>
									</div>	
								</div>

								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Email</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>

								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Nombre de contacto</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Teléfono</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Forma de pago</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Cuenta de banco</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Ultimos 4 digitos de la tarjeta</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="inputGroup1_3" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" placeholder="XXXX" data-mask="9999-" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">

											</div>
										</div>


									</div>	
								</div>
								<div class="col-md-12">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Dirección fiscal</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<textarea id="inputGroup-1_3" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder=""></textarea>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Indicar el uso del CFDI</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<textarea id="inputGroup-1_3" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder=""></textarea>
											</div>
										</div>
									</div>
								</div>


							</div>


							<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

							<div>
								<button class="btn btn-md btn-xl--md u-btn-lightblue-v3 g-width-160--md g-font-size-12 g-font-size-default--md g-mb-10" type="submit">Guardar cambios</button>
								<button class="btn btn-md btn-xl--md u-btn-outline-gray-dark-v6 g-font-size-12 g-font-size-default--md g-mr-10 g-mb-10" type="reset">Cancelar</button>
							</div>
						</form>
					</div>
				</div>
				<!-- Termina DATOS DE FACTURACIÓN -->

				<!-- Inicia PRODUCTOS A CERTIFICAR -->
				<div id="productos_a_certificar">
					<div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
						<form class="js-validate">

							<header>
								<h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">3.- PRODUCTOS A CERTIFICAR</h2>
							</header>

							<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

							<div class="row">
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">R.F.C</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Razón social</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<textarea id="inputGroup-1_3" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder=""></textarea>
											</div>
										</div>
									</div>	
								</div>

								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Email</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>

								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Nombre de contacto</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Teléfono</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Forma de pago</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Cuenta de banco</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Ultimos 4 digitos de la tarjeta</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="inputGroup1_3" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" placeholder="XXXX" data-mask="9999-" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">

											</div>
										</div>


									</div>	
								</div>
								<div class="col-md-12">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Dirección fiscal</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<textarea id="inputGroup-1_3" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder=""></textarea>
											</div>
										</div>
									</div>
								</div>

							</div>


							<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

							<div>
								<button class="btn btn-md btn-xl--md u-btn-lightblue-v3 g-width-160--md g-font-size-12 g-font-size-default--md g-mb-10" type="submit">Guardar cambios</button>
								<button class="btn btn-md btn-xl--md u-btn-outline-gray-dark-v6 g-font-size-12 g-font-size-default--md g-mr-10 g-mb-10" type="reset">Cancelar</button>
							</div>
						</form>
					</div>
				</div>
				<!-- Termina PRODUCTOS A CERTIFICAR -->

				<!-- Inicia CERTIFICACIONES ANTERIORES -->
				<div id="certificaciones_anteriores">
					<div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
						<form class="js-validate">

							<header>
								<h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">4.- CERTIFICACIONES ANTERIORES</h2>
							</header>

							<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

							<div class="row">
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">R.F.C</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Razón social</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<textarea id="inputGroup-1_3" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder=""></textarea>
											</div>
										</div>
									</div>	
								</div>

								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Email</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>

								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Nombre de contacto</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Teléfono</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Forma de pago</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Cuenta de banco</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Ultimos 4 digitos de la tarjeta</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="inputGroup1_3" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" placeholder="XXXX" data-mask="9999-" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">

											</div>
										</div>


									</div>	
								</div>
								<div class="col-md-12">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Dirección fiscal</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<textarea id="inputGroup-1_3" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder=""></textarea>
											</div>
										</div>
									</div>
								</div>

							</div>


							<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

							<div>
								<button class="btn btn-md btn-xl--md u-btn-lightblue-v3 g-width-160--md g-font-size-12 g-font-size-default--md g-mb-10" type="submit">Guardar cambios</button>
								<button class="btn btn-md btn-xl--md u-btn-outline-gray-dark-v6 g-font-size-12 g-font-size-default--md g-mr-10 g-mb-10" type="reset">Cancelar</button>
							</div>
						</form>
					</div>
				</div>
				<!-- Termina CERTIFICACIONES ANTERIORES -->


				<!-- Inicia PRODUCTOS A CERTIFICAR -->
				<div id="datos_facturacion">
					<div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
						<form class="js-validate">

							<header>
								<h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">5.- ESQUEMAS DE CERTIFICACIÓN</h2>
							</header>

							<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

							<div class="row">
								<div class="col-md-12">
									<div class="btn-group justified-content">
										<label class="u-check g-pl-0">
											<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" checked="" type="checkbox">
											<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">GLOBALG.A.P. IFA V5.1</span>
										</label>
										<label class="u-check g-pl-0">
											<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
											<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">GLOBALG.A.P. CADENA DE CUSTODIA (CoC)</span>
										</label>
										<label class="u-check g-pl-0">
											<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
											<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">MÉXICO CALIDAD SUPREMA</span>
										</label>
									</div>
								</div>
								<div class="col-md-12">
										<label class="u-check g-pl-0">
											<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
											<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">SISTEMA DE REDUCCIÓN DE RIESGOS DE CONTAMINACIÓN (SRRC)</span>
										</label>
										<label class="u-check g-pl-0">
											<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
											<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">HECHO EN MÉXICO</span>
										</label>
										<label class="u-check g-pl-0">
											<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
											<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">Denominación de origen</span>
										</label>
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">R.F.C</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Razón social</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<textarea id="inputGroup-1_3" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder=""></textarea>
											</div>
										</div>
									</div>	
								</div>

								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Email</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>

								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Nombre de contacto</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Teléfono</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Forma de pago</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Cuenta de banco</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
											</div>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Ultimos 4 digitos de la tarjeta</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<input id="inputGroup1_3" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" placeholder="XXXX" data-mask="9999-" data-msg="This field is mandatory"
											data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">

											</div>
										</div>


									</div>	
								</div>
								<div class="col-md-12">
									<div class="row g-mb-20">
										<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
											<label class="mb-0" for="#firstName">Dirección fiscal</label>
										</div>

										<div class="col-md-9 align-self-center">
											<div class="form-group g-pos-rel mb-0">
												<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
													<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
												</span>
												<textarea id="inputGroup-1_3" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder=""></textarea>
											</div>
										</div>
									</div>
								</div>

							</div>


							<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

							<div>
								<button class="btn btn-md btn-xl--md u-btn-lightblue-v3 g-width-160--md g-font-size-12 g-font-size-default--md g-mb-10" type="submit">Guardar cambios</button>
								<button class="btn btn-md btn-xl--md u-btn-outline-gray-dark-v6 g-font-size-12 g-font-size-default--md g-mr-10 g-mb-10" type="reset">Cancelar</button>
							</div>
						</form>
					</div>
				</div>
				<!-- Termina PRODUCTOS A CERTIFICAR -->






			</div>

		</div>


