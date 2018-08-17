<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
	<div class="g-pa-20">
		<div class="row">

			<?php
			/// cargamos la vista del submenu
			$this->load->view($menu); 
			 ?>

			<div class="col-md-9">
				<div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
					<form class="js-validate">

						<header>
							<h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">DATOS DE ACCESO</h2>
						</header>

						<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

						<div class="row">
							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#username">Usuario *</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<input id="username" name="username" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
										data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
										</div>
									</div>
								</div>	
							</div>
							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#password">Contraseña *</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<input id="password" name="password" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
										data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
										</div>
									</div>
								</div>	
							</div>
						</div>

						<header>
							<h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">INFORMACIÓN GENERAL</h2>
						</header>

						<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

						<div class="row">
							<div class="col-md-12">
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
							<div class="col-md-12">
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
							<h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">DATOS DE LOCALIZACIÓN</h2>
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
											<textarea id="inputGroup-1_3" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder=""></textarea>
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




						<!--<div class="row g-mb-20">
							<div class="col-md-3 align-self-center"></div>

							<div class="col-md-9 align-self-center">
								<a class="btn btn-link d-flex align-self-center align-items-center u-link-v5 g-color-lightblue-v3 g-color-lightblue-v4--hover  g-brd-none p-0" href="#!">
									<i class="hs-admin-plus g-font-size-17"></i>
									<span class="g-font-weight-300 g-ml-10">Add Phone Number</span>
								</a>
							</div>
						</div>

						<div class="row g-mb-20">
							<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
								<label class="mb-0">Your Language</label>
							</div>

							<div class="col-md-9 align-self-center">
								<div class="row g-mx-minus-10">
									<div class="col-auto align-self-center g-width-270 g-px-10">
										<div class="form-group u-select--v2 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<select name="language" class="js-select u-select--v2-select w-100" required="required" style="display: none;">
												<option data-content='<span class="d-flex align-items-center"><img class="g-width-20 g-height-20 rounded-circle g-mr-8" src="<?php echo base_url(); ?>admin/assets/img/langs/us.png" alt="Image Description"><span class="g-line-height-1 g-color-black">English</span></span>'>English</option>
												<option data-content='<span class="d-flex align-items-center"><img class="g-width-20 g-height-20 rounded-circle g-mr-8" src="<?php echo base_url(); ?>admin/assets/img/langs/de.png" alt="Image Description"><span class="g-line-height-1 g-color-black">Deutsche</span></span>'>Deutsche</option>
												<option data-content='<span class="d-flex align-items-center"><img class="g-width-20 g-height-20 rounded-circle g-mr-8" src="<?php echo base_url(); ?>admin/assets/img/langs/ru.png" alt="Image Description"><span class="g-line-height-1 g-color-black">Русский</span></span>'>Русский</option>
											</select>
											<i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto g-mr-15"></i>
										</div>
									</div>
								</div>
							</div>
						</div>-->





						<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

						<div>
							<button class="btn btn-md btn-xl--md u-btn-lightblue-v3 g-width-160--md g-font-size-12 g-font-size-default--md g-mb-10" type="submit">Guardar cambios</button>
							<button class="btn btn-md btn-xl--md u-btn-outline-gray-dark-v6 g-font-size-12 g-font-size-default--md g-mr-10 g-mb-10" type="reset">Cancelar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>