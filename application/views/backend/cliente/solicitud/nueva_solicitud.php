<style>
/* Style the form */
#regForm {
  /*background-color: #ffffff;
  margin: 100px auto;
  padding: 40px;
  width: 70%;*/
  min-width: 300px;
}

/* Style the input fields */
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none; 
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}

.subPregunta{
	color: #c0392b;
}	
</style>


<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
	<div class="g-pa-20">
		<div class="row">
			<div class="col-md-12">
			
				<!-- Circles which indicates the steps of the form: -->
				<div style="text-align:center;margin-top:40px;">
					<span class="step" onclick="nextPrev(1)"></span>
					<span class="step" onclick="nextPrev(1)"></span>
					<span class="step" onclick="nextPrev(1)"></span>
					<span class="step" onclick="nextPrev(1)"></span>
					<span class="step" onclick="nextPrev(1)"></span>
					<span class="step" onclick="nextPrev(1)"></span>
				</div>
				<form id="regForm" action="">

					<!-- One "tab" for each step in the form: -->
					<!-- inicia 1.- DATOS DEL CLIENTE -->
					<div class="tab">
				     	<div class="card g-brd-gray-light-v7 g-mb-30">

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
				     	</div>
					</div>
					<!-- termina DATOS DEL CLIENTE -->

					<!-- inicia 2.- DATOS DE FACTURACIÓN -->
					<div class="tab">
				    	<div class="card g-brd-gray-light-v7 g-mb-30">
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


										<!--<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

										<div>
											<button class="btn btn-md btn-xl--md u-btn-lightblue-v3 g-width-160--md g-font-size-12 g-font-size-default--md g-mb-10" type="submit">Guardar cambios</button>
											<button class="btn btn-md btn-xl--md u-btn-outline-gray-dark-v6 g-font-size-12 g-font-size-default--md g-mr-10 g-mb-10" type="reset">Cancelar</button>
										</div>-->
									</form>
								</div>
							</div>
				    	</div>
					</div>
					<!-- termina DATOS DE FACTURACIÓN -->

					<!-- inicia 3.- PRODUCTOS POR CERTIFICAR -->
					<div class="tab">
				     	<div class="card g-brd-gray-light-v7 g-mb-30">

							<div id="datosCliente">
								<div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
									<form class="js-validate">

										<header>
											<h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">3.- PRODUCTOS QUE DESEA CERTIFICAR</h2>
										</header>
										<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

										<div class="row">
											<div class="col-md-12">
												<button class="btn u-btn-blue g-mr-10 g-mb-15">
													<i class="fa fa-plus"></i> Agregar otro
												</button>
												<table class="table">
													<tr>
														<td>
															Nombre del producto
														</td>
														<td>
															<textarea id="inputGroup-1_3" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder=""></textarea>
														</td>
													</tr>
												</table>
											</div>
										</div>
									</form>
								</div>
								
							</div>
				     	</div>
					</div>
					<!-- termina PRODUCTOS POR CERTIFICAR -->

					<!-- inicia 4.- CERTIFICACIONES ANTERIORES -->
					<div class="tab">
				     	<div class="card g-brd-gray-light-v7 g-mb-30">

							<div id="certificaciones_anteriores">
								<div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
									<form class="js-validate">

										<header>
											<h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">3.- CERTIFICACIONES ANTERIORES</h2>
										</header>
										<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

										<!-- relacionados a GLOBALG.A.P -->
										<div class="row">

											<div class="col-md-12">
												<div class="mb-10">
													<h4 class="g-font-weight-500 g-font-size-14 g-font-size-22--md g-color-black g-mb-10">
														¿Ha estado certificado con GLOBALG.A.P anteriormente?
													</h4>

													<div id="radioCertificacionGlobaGAP" class="btn-group justified-content" style="width:40%">
														<label class="u-check">
															<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="certificacionGlobalGAP" type="radio" value="SI" onclick="validarRadios('certificacionGlobalGAP', 'numerosGlobalGAP')">
															<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">SI</span>
														</label>
														<label class="u-check">
															<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="certificacionGlobalGAP" type="radio" value="NO" onclick="validarRadios('certificacionGlobalGAP', 'numerosGlobalGAP')">
															<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">NO</span>

														</label>
													</div>
												</div>													
											</div>


											<div id="numerosGlobalGAP" class="col-md-12" style="margin-top:1em; display:none">
												<div class="row">
													<!-- numero globalgap -->
													<div class="col-md-4">
														<div class="form-group ">
															<label class="g-mb-10 subPregunta" for="inputGroup-1_1">
																Ingresar el Numero GLOBAL.G.A.P (GGN)
															</label>

															<div class="g-pos-rel">
																<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																	<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
																</span>
																<input id="inputGroup-1_1" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="GLOBALG.A.P NUMBER">
															</div>
														</div>
													</div>
													<!-- Numero CoC -->
													<div class="col-md-4">
														<div class="form-group ">
															<label class="g-mb-10 subPregunta" for="inputGroup-1_1">
																Ingresar el Número CoC
															</label>

															<div class="g-pos-rel">
																<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																	<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
																</span>
																<input id="inputGroup-1_1" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="GLOBALG.A.P NUMBER">
															</div>
														</div>
													</div>


													<!-- GLN (global localization number ) GS1 -->
													<div class="col-md-4">
														<p class="subPregunta">
															¿Cuenta con GLN (Global Localitzation Number) solicitado a GS1?
														</p>
														<div class="form-group g-mb-10">
															<label class="u-check g-pl-25">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="certificacionGLN" type="radio" onclick="validarRadios('certificacionGLN', 'divGLN')" value="SI">
																<div class="u-check-icon-font g-absolute-centered--y g-left-0">
																<i class="fa" data-check-icon="&#xf192" data-uncheck-icon="&#xf1db"></i>
																</div>
																SI
															</label>
														</div>
														<div id="divGLN" style="display:none">
															<!-- Text Input -->
															<div class="form-group u-has-success-v1-1 g-mb-20">
																<input id="inputGroup2_1" class="form-control form-control-md rounded-0" type="email" placeholder="Ingresa tu número GLN">
																<small class="form-control-feedback d-block g-bg-primary g-color-white g-font-size-12 g-px-14 g-py-3 mt-0">
																	Información requerida
																</small>
															</div>
															<!-- End Text Input -->
														</div>

														<div class="form-group g-mb-10">
															<label class="u-check g-pl-25">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="certificacionGLN" type="radio" onclick="validarRadios('certificacionGLN', 'divGLN')" value="NO">
																<div class="u-check-icon-font g-absolute-centered--y g-left-0">
																<i class="fa" data-check-icon="&#xf192" data-uncheck-icon="&#xf1db"></i>
																</div>
																NO
															</label>
														</div>
													</div>	
												</div>
											</div>

											<div class="col-md-12">
												<hr>
											</div>

											<!--<div class="col-md-12">
												<table class="table table-condensed">
													<tr>
														<td>
															¿Ha estado certificado con GLOBALG.A.P anteriormente?
														</td>
														<td></td>
													</tr>
													<tr>
														<td style=" vertical-align: text-top;"> 
															<label class="u-check g-mr-15 mb-0">
							
																<input id="globalgap" class="g-hidden-xs-up g-pos-abs g-top-10 g-left-10" type="checkbox">
																<div class="u-check-icon-checkbox-v3 g-bg-primary--checked rounded-0">
																	<i class="fa fa-check g-absolute-centered g-color-white g-show-check"></i>
																	<i class="fa fa-plus g-absolute-centered g-color-primary g-hide-check"></i>
																	
																</div>
															
															</label>
															<label for="globalgap">
																GLOBALG.A.P NUMBER (GNN)
															</label>
															
														</td>
														<td>
															<div class="form-group ">
																<label class="g-mb-10" for="inputGroup-1_1">
																	Ingresar el GGN proporcionado por GLOBAL.G.A.P
																</label>

																<div class="g-pos-rel">
																	<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																		<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
																	</span>
																	<input id="inputGroup-1_1" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="GLOBALG.A.P NUMBER">
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<label class="u-check g-mr-15 mb-0">
							
																<input class="g-hidden-xs-up g-pos-abs g-top-10 g-left-10" type="checkbox">
																<div class="u-check-icon-checkbox-v3 g-bg-primary--checked rounded-0">
																	<i class="fa fa-check g-absolute-centered g-color-white g-show-check"></i>
																	<i class="fa fa-plus g-absolute-centered g-color-primary g-hide-check"></i>
																</div>
															</label>
															GLOBALG.A.P CoC (C.o.C NUMBER)
														</td>
														<td>
															<div class="form-group g-mb-30">
																<label class="g-mb-10" for="inputGroup-1_1">
																	Ingresar el codigo proporcionado por GLOBALG.A.P
																</label>

																<div class="g-pos-rel">
																	<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																		<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
																	</span>
																	<input id="inputGroup-1_1" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Placeholder">
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<label class="u-check g-mr-15 mb-0">
							
																<input class="g-hidden-xs-up g-pos-abs g-top-10 g-left-10" type="checkbox">
																<div class="u-check-icon-checkbox-v3 g-bg-primary--checked rounded-0">
																	<i class="fa fa-check g-absolute-centered g-color-white g-show-check"></i>
																	<i class="fa fa-plus g-absolute-centered g-color-primary g-hide-check"></i>
																</div>
															</label>
															Global Localization Number (Si fue solicitado a GS1)
														</td>
														<td>
															<div class="form-group g-mb-30">
																<label class="g-mb-10" for="inputGroup-1_1">
																	Ingrese el codigo proporcionado
																</label>

																<div class="g-pos-rel">
																	<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																		<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
																	</span>
																	<input id="inputGroup-1_1" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Placeholder">
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<label class="u-check g-mr-15 mb-0">
							
																<input class="g-hidden-xs-up g-pos-abs g-top-10 g-left-10" type="checkbox">
																<div class="u-check-icon-checkbox-v3 g-bg-primary--checked rounded-0">
																	<i class="fa fa-check g-absolute-centered g-color-white g-show-check"></i>
																	<i class="fa fa-plus g-absolute-centered g-color-primary g-hide-check"></i>
																</div>
															</label>
															México Calidad Suprema
														</td>
														<td>
															<div class="form-group g-mb-30">
																<label class="g-mb-10" for="inputGroup-1_1"></label>

																<div class="g-pos-rel">
																	<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																		<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
																	</span>
																	<input id="inputGroup-1_1" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Placeholder">
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<label class="u-check g-mr-15 mb-0">
							
																<input class="g-hidden-xs-up g-pos-abs g-top-10 g-left-10" type="checkbox">
																<div class="u-check-icon-checkbox-v3 g-bg-primary--checked rounded-0">
																	<i class="fa fa-check g-absolute-centered g-color-white g-show-check"></i>
																	<i class="fa fa-plus g-absolute-centered g-color-primary g-hide-check"></i>
																</div>
															</label>
															Registro SENASICA
														</td>
														<td>
															<div class="form-group g-mb-30">
																<label class="g-mb-10" for="inputGroup-1_1"></label>

																<div class="g-pos-rel">
																	<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																		<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
																	</span>
																	<input id="inputGroup-1_1" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Placeholder">
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<label class="u-check g-mr-15 mb-0">
							
																<input class="g-hidden-xs-up g-pos-abs g-top-10 g-left-10" type="checkbox">
																<div class="u-check-icon-checkbox-v3 g-bg-primary--checked rounded-0">
																	<i class="fa fa-check g-absolute-centered g-color-white g-show-check"></i>
																	<i class="fa fa-plus g-absolute-centered g-color-primary g-hide-check"></i>
																</div>
															</label>
															PrimusGFS
														</td>
														<td>
															<div class="form-group g-mb-30">
																<label class="g-mb-10" for="inputGroup-1_1"></label>

																<div class="g-pos-rel">
																	<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																		<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
																	</span>
																	<input id="inputGroup-1_1" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Placeholder">
																</div>
															</div>
														</td>
													</tr>

												</table>
											</div>-->
										</div>

										<div class="row">
											<div class="col-md-4 g-mb-10">
												<div class="mb-10">
													<h4 class="g-font-weight-500 g-font-size-14 g-font-size-22--md g-color-black g-mb-10">
														¿Se encuentra registrado ante SENASICA?
													</h4>

													<div id="registroSenasica" class="btn-group justified-content">
														<label class="u-check">
															<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="certificacionSenasica" type="radio" value="SI" onclick="validarRadios('certificacionSenasica', 'divSenasica')">
															<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">SI</span>
														</label>
														<label class="u-check">
															<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="certificacionSenasica" type="radio" value="NO" onclick="validarRadios('certificacionSenasica', 'divSenasica')">
															<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">NO</span>

														</label>
													</div>
												</div>

													<div id="divSenasica" class="form-group" style="display:none">
														<!-- Text Input -->
														<div class="form-group u-has-success-v1-1 g-mb-20">
															<input id="inputGroup2_1" class="form-control form-control-md rounded-0" type="email" placeholder="Ingresa tu número de registro de SENASICA">
															<small class="form-control-feedback d-block g-bg-primary g-color-white g-font-size-12 g-px-14 g-py-3 mt-0">
																Información requerida
															</small>
														</div>
														<!-- End Text Input -->
													</div>

											</div>

											<div class="col-md-4 g-mb-10">
												<div class="mb-10">
													<h4 class="g-font-weight-500 g-font-size-14 g-font-size-22--md g-color-black g-mb-10">
														¿Cuenta con registro de México Calidad Suprema?
													</h4>

													<div id="radioMexCalidadSuprema" class="btn-group justified-content">
														<label class="u-check">
															<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioMexCalidadSuprema" type="radio" value="SI" onclick="validarRadios('radioMexCalidadSuprema', 'divMexCalidadSuprema')">
															<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">SI</span>
														</label>
														<label class="u-check">
															<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioMexCalidadSuprema" type="radio" value="NO" onclick="validarRadios('radioMexCalidadSuprema', 'divMexCalidadSuprema')">
															<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">NO</span>

														</label>
													</div>
												</div>

													<div id="divMexCalidadSuprema" class="form-group" style="display:none">
														<!-- Text Input -->
														<div class="form-group u-has-success-v1-1 g-mb-20">
															<input id="inputGroup2_1" class="form-control form-control-md rounded-0" type="email" placeholder="Registro de México Calidad Suprema">
															<small class="form-control-feedback d-block g-bg-primary g-color-white g-font-size-12 g-px-14 g-py-3 mt-0">
																Información requerida
															</small>
														</div>
														<!-- End Text Input -->
													</div>
											</div>

											<div class="col-md-4">
												<div class="mb-10">
													<h4 class="g-font-weight-500 g-font-size-14 g-font-size-22--md g-color-black g-mb-10">
														¿Ha estado certificado bajo el esquema PrimusGSF?
													</h4>

													<div id="radioCertificacionGlobaGAP" class="btn-group justified-content">
														<label class="u-check">
															<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="certificacionPrimus" type="radio" value="SI" onclick="validarRadios('certificacionPrimus', 'divPrimus')">
															<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">SI</span>
														</label>
														<label class="u-check">
															<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="certificacionPrimus" type="radio" value="NO" onclick="validarRadios('certificacionPrimus', 'divPrimus')">
															<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">NO</span>

														</label>
													</div>
												</div>

													<div id="divPrimus" class="form-group" style="display:none">
														<!-- Text Input -->
														<div class="form-group u-has-success-v1-1 g-mb-20">
															<input id="inputGroup2_1" class="form-control form-control-md rounded-0" type="email" placeholder="Ingresa tu número PrimusGSF">
															<small class="form-control-feedback d-block g-bg-primary g-color-white g-font-size-12 g-px-14 g-py-3 mt-0">
																Información requerida
															</small>
														</div>
														<!-- End Text Input -->
													</div>
											</div>
											<div class="col-md-12">
												<hr>
											</div>
											<div class="col-md-6">
												<!-- Input -->
												<div class="form-group g-mb-30">
													<label class="g-mb-10" for="inputGroup-1_1">Nombre del responsable de la aplicación de la norma de certificación en la entidad legal</label>

													<div class="g-pos-rel">
														<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
															<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
														</span>
														<input id="inputGroup-1_1" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Escribe aquí">
													</div>
												</div>
												<!-- End Input -->
											</div>
											<div class="col-md-6">
												<!-- Input -->
												<div class="form-group g-mb-30">
													<label class="g-mb-10" for="inputGroup-1_1">Nombre de la persona que realizó la autoevaluación interna en la entidad legal</label>

													<div class="g-pos-rel">
														<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
															<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
														</span>
														<input id="inputGroup-1_1" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Escribe aquí">
													</div>
												</div>
												<!-- End Input -->
											</div>

											<div class="col-md-12">
												<hr>
											</div>

										</div>
										
										<div class="row">

											<div class="col-md-12">
												<div class="mb-10">
													<h4 class="g-font-weight-500 g-font-size-14 g-font-size-22--md g-color-black g-mb-10">
														¿Ha estado certificado anteriormente con otro organismo de certificación?
													</h4>

													<div id="radioCertificacionGlobaGAP" class="btn-group justified-content" style="width:40%">
														<label class="u-check">
															<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="otroOrganismo" type="radio" value="SI" onclick="validarRadios('otroOrganismo', 'divOrganismoCertificacion')">
															<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">SI</span>
														</label>
														<label class="u-check">
															<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="otroOrganismo" type="radio" value="NO" onclick="validarRadios('otroOrganismo', 'divOrganismoCertificacion')">
															<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">NO</span>

														</label>
													</div>
												</div>													
											</div>
											<div id="divOrganismoCertificacion" class="col-md-12" style="display:none">
												<div class="row">
													<div class="col-sm-6">
														<!-- Input -->
														<div class="form-group g-mb-30">
															<label class="g-mb-10" for="inputGroup-1_1">
																Nombre del Organismo
															</label>

															<div class="g-pos-rel">
																<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																	<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
																</span>
																<input id="inputGroup-1_1" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Escribe aquí">
															</div>
														</div>
														<!-- End Input -->		
													</div>
													<div class="col-sm-6">
														<!-- Select Date Range -->
														<div class="form-group mb-0">
															<label class="g-mb-10">Periodo del certificado</label>
															<div class="row">
																<div class="col-xl-6 g-mb-40 g-mb-0--xl">
																	<div class="form-group mb-0 g-max-width-400">
																		<div id="datepickerWrapper" class="u-datepicker-right u-datepicker--v3 g-pos-rel w-100 g-cursor-pointer g-brd-around g-brd-gray-light-v7 g-rounded-4">
																			<input class="js-range-datepicker g-bg-transparent g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-pr-80 g-pl-15 g-py-9" type="text" placeholder="Desde" data-rp-wrapper="#datepickerWrapper" data-rp-date-format="d/m/Y">
																			<div class="d-flex align-items-center g-absolute-centered--y g-right-0 g-color-gray-light-v6 g-color-lightblue-v9--sibling-opened g-mr-15">
																				<i class="hs-admin-calendar g-font-size-18 g-mr-10"></i>
																				<i class="hs-admin-angle-down"></i>
																			</div>
																		</div>
																	</div>
																</div>

																<div class="col-xl-6">
																	<!-- Datepicker -->
																	<div class="form-group mb-0 g-max-width-400">
																		<div id="datepickerWrapper" class="u-datepicker-right u-datepicker--v3 g-pos-rel w-100 g-cursor-pointer g-brd-around g-brd-gray-light-v7 g-rounded-4">
																			<input class="js-range-datepicker g-bg-transparent g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-pr-80 g-pl-15 g-py-9" type="text" placeholder="Hasta" data-rp-wrapper="#datepickerWrapper" data-rp-date-format="d/m/Y">
																			<div class="d-flex align-items-center g-absolute-centered--y g-right-0 g-color-gray-light-v6 g-color-lightblue-v9--sibling-opened g-mr-15">
																				<i class="hs-admin-calendar g-font-size-18 g-mr-10"></i>
																				<i class="hs-admin-angle-down"></i>
																			</div>
																		</div>
																	</div>
																	<!-- End Datepicker -->
																</div>
															</div>
														</div>
														<!-- End Select Date Range -->

													</div>
												</div>
											</div>

										</div>

									</form>
								</div>
								
							</div>
				     	</div>
					</div>
					<!-- termina CERTIFICACIONES ANTERIORES -->

					<!-- inicia 5.- ESQUEMAS DE CERTIFICACIÓN -->
					<div class="tab">
				     	<div class="card g-brd-gray-light-v7 g-mb-30">

							<div id="datosCliente">
								<div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
									<form class="js-validate">

										<header>
											<h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">5.- ESQUEMAS DE CERTIFICACIÓN</h2>
										</header>
										<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

										<div class="row">
											<div class="col-md-12">
												<h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black">Favor de seleccionar el esquema de certificación que está solicitando</h3>
											</div>
											<div class="col-md-6">
												<!-- Toggles based on Checkboxes -->
												<div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md g-mb-30">

													<!-- Toggles Checkbox -->
													<div class="form-group">
														<label class="d-flex align-items-center justify-content-between">
															<span>GLOBALG.A.P IFA V5.1</span>
															<div class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="radGroup3_1" type="checkbox">
																<div class="u-check-icon-radio-v8">
																	<i class="fa" data-check-icon="&#xf00c"></i>
																</div>
															</div>
														</label>
													</div>
													<!-- End Toggles Checkbox -->

													<!-- Toggles Checkbox -->
													<div class="form-group">
														<label class="d-flex align-items-center justify-content-between">
															<span>GLOBALG.A.P CADENA DE CUSTODIA (CoC)</span>
															<div class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="radGroup3_1" type="checkbox">
																<div class="u-check-icon-radio-v8">
																	<i class="fa" data-check-icon="&#xf00c"></i>
																</div>
															</div>
														</label>
													</div>
													<!-- End Toggles Checkbox -->

													<!-- Toggles Checkbox -->
													<div class="form-group">
														<label class="d-flex align-items-center justify-content-between">
															<span>MÉXICO CALIDAD SUPREMA</span>
															<div class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="radGroup3_1" type="checkbox">
																<div class="u-check-icon-radio-v8">
																	<i class="fa" data-check-icon="&#xf00c"></i>
																</div>
															</div>
														</label>
													</div>
													<!-- End Toggles Checkbox -->
												</div>
												<!-- End Toggles based on Checkboxes -->
											</div>

											<div class="col-md-6">
												<!-- Toggles based on Checkboxes -->
												<div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md g-mb-30">

													<!-- Toggles Checkbox -->
													<div class="form-group">
														<label class="d-flex align-items-center justify-content-between">
															<span>SISTEMA DE REDUCCIÓN DE RIESGOS DE CONTAMINACIÓN (SRRC)</span>
															<div class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="radGroup3_1" type="checkbox">
																<div class="u-check-icon-radio-v8">
																	<i class="fa" data-check-icon="&#xf00c"></i>
																</div>
															</div>
														</label>
													</div>
													<!-- End Toggles Checkbox -->

													<!-- Toggles Checkbox -->
													<div class="form-group">
														<label class="d-flex align-items-center justify-content-between">
															<span>HECHO EN MÉXICO</span>
															<div class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="radGroup3_1" type="checkbox">
																<div class="u-check-icon-radio-v8">
																	<i class="fa" data-check-icon="&#xf00c"></i>
																</div>
															</div>
														</label>
													</div>
													<!-- End Toggles Checkbox -->

													<!-- Toggles Checkbox -->
													<div class="form-group">
														<label class="d-flex align-items-center justify-content-between">
															<span>DENOMINACIÓN DE ORIGEN</span>
															<div class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="radGroup3_1" type="checkbox">
																<div class="u-check-icon-radio-v8">
																	<i class="fa" data-check-icon="&#xf00c"></i>
																</div>
															</div>
														</label>
													</div>
													<!-- End Toggles Checkbox -->
												</div>
												<!-- End Toggles based on Checkboxes -->
											</div>

											<div class="col-md-12">
												<hr>
											</div>

											<!-- inicia mostrar global gap ifa -->
											<div id="divGlobalGapIfa" class="col-md-12">
												<div class="row">
													<div class="col-sm-12">
														<h4 style="font-size:14px;">GLOBALG.A.P IFA V5.1</h4>
													</div>
													<div class="col-sm-6">
														<table class="table table-bordered">
															<tr>
																<td colspan="3">
																	Opción 1: Productor individual
																</td>
															</tr>
															<tr class="text-justify">
																<td>
																	<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalIfa" checked="" type="radio">
																		<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																			<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																		</div>
																		Productor individual
																	</label>
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalIfa" checked="" type="radio">
																		<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																			<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																		</div>
																		Productor individual con explotaciones múltiples con sistema de Gestión de calidad
																	</label>
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalIfa" checked="" type="radio">
																		<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																			<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																		</div>
																		Productor individual con Explotaciones múltiples sin Sistema de Gestión de Calidad.
																	</label>
																</td>
															</tr>
														</table>
													</div>
													<div class="col-sm-6">
														<table class="table table-bordered">
															<tr>
																<td colspan="2">
																	<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalIfa" checked="" type="radio">
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
																			<label class="mb-0" for="#firstName">Número de productores a certificar</label>
																		</div>

																		<div class="col-md-12 align-self-center">
																			<div class="form-group g-pos-rel mb-0">
																				<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																					<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
																				</span>
																				<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
																			data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div class="row g-mb-20">
																		<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
																			<label class="mb-0" for="#firstName">Número de unidades de producción a certificar</label>
																		</div>

																		<div class="col-md-12 align-self-center">
																			<div class="form-group g-pos-rel mb-0">
																				<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																					<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
																				</span>
																				<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
																			data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
														</table>
													</div>
												</div>
											</div>
											<!-- termina mostrar global gap ifa -->

											<!-- inicia mostrar global gap coc -->
											<div id="divGlobalGapCoc" class="col-md-12">
												<div class="row">
													<div class="col-sm-12">
														<h4 style="font-size:14px;">GLOBALG.A.P CADENA DE CUSTODIA (CoC)</h4>
													</div>
													<div class="col-sm-6">
														<table class="table table-bordered">
															<tr>
																<td colspan="3">
																	<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalCoc" checked="" type="radio">
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
																			<label class="mb-0" for="#firstName">¿La empresa realiza el etiquetado?</label>
																		</div>

																		<div class="col-md-12 align-self-center">
																			<div class="form-group g-pos-rel mb-0">
																				<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																					<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
																				</span>
																				<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
																			data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div class="row g-mb-20">
																		<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
																			<label class="mb-0" for="#firstName">¿Cuenta con un sistema de trazabilidad?</label>
																		</div>

																		<div class="col-md-12 align-self-center">
																			<div class="form-group g-pos-rel mb-0">
																				<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																					<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
																				</span>
																				<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
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
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalCoc" checked="" type="radio">
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
																			<label class="mb-0" for="#firstName">
																				Cantidad estimada de producto certificado (Voluntario) en toneladas anual
																			</label>
																		</div>

																		<div class="col-md-12 align-self-center">
																			<div class="form-group g-pos-rel mb-0">
																				<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																					<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
																				</span>
																				<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
																			data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div class="row g-mb-20">
																		<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
																			<label class="mb-0" for="#firstName">
																				Número total de unidades de producción: ranchos, huertos o invernaderos
																			</label>
																		</div>

																		<div class="col-md-12 align-self-center">
																			<div class="form-group g-pos-rel mb-0">
																				<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																					<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
																				</span>
																				<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
																			data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div class="row g-mb-20">
																		<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
																			<label class="mb-0" for="#firstName">
																				Número de unidades de producción a certificar
																			</label>
																		</div>

																		<div class="col-md-12 align-self-center">
																			<div class="form-group g-pos-rel mb-0">
																				<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																					<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
																				</span>
																				<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
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
															<tr>
																<td>
																	Declaración sobre producción paralela (PP) y propiedad paralela (PO), seleccione SI o NO, se detallara la información en el anexo CER.RG.01
																</td>
																<td>
																	SI
																</td>
																<td>
																	NO
																</td>
															</tr>
															<tr>
																<td>
																	¿El producto se vende antes de la cosecha?
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalCoc" checked="" type="radio">
																		<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																			<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																		</div>
																		SI
																	</label>
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalCoc" checked="" type="radio">
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
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalCoc" checked="" type="radio">
																		<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																			<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																		</div>
																		SI
																	</label>
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalCoc" checked="" type="radio">
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
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalCoc" checked="" type="radio">
																		<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																			<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																		</div>
																		SI
																	</label>
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalCoc" checked="" type="radio">
																		<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																			<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																		</div>
																		NO
																	</label>
																</td>
															</tr>
														</table>
													</div>
												</div>
											</div>
											<!-- termina mostrar global gap coc -->

											<!-- inicia mostrar mexico calidad suprema -->
											<div id="divMexCalidadSuprema" class="col-md-12">
												<div class="row">
													<div class="col-sm-12">
														<h4 style="font-size:14px;">MÉXICO CALIDAD SUPREMA</h4>
													</div>
													<div class="col-sm-12">
														<table class="table table-bordered">
															<tr>
																<td colspan="6">
																	Alcance de la certificación
																</td>
															</tr>
															<!-- alcance de la certificación -->
															<tr>
																<td colspan="3">
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" checked="" type="checkbox">
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon="&#xf00c"></i>
																		</div>
																		Proceso
																	</label>
																</td>
																<td colspan="3">
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" checked="" type="checkbox">
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon="&#xf00c"></i>
																		</div>
																		Producto
																	</label>
																</td>
															</tr>
															<tr>
																<td colspan="6">
																	Pliego de condiciones
																</td>
															</tr>
															<!--pliego de condiciones -->
															<tr>
																<td colspan="2">
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" checked="" type="checkbox">
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon="&#xf00c"></i>
																		</div>
																		Aguacate
																	</label>
																</td>
																<td colspan="2">
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" checked="" type="checkbox">
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon="&#xf00c"></i>
																		</div>
																		Mango
																	</label>
																</td>
																<td colspan="2">
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" checked="" type="checkbox">
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon="&#xf00c"></i>
																		</div>
																		Limón Persa
																	</label>
																</td>
															</tr>
															<tr>
																<td colspan="2">
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" checked="" type="checkbox">
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon="&#xf00c"></i>
																		</div>
																		Limón Mexicano
																	</label>
																</td>
																<td colspan="2">
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" checked="" type="checkbox">
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon="&#xf00c"></i>
																		</div>
																		Banano Cavendish
																	</label>
																</td>
																<td colspan="2">
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" checked="" type="checkbox">
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon="&#xf00c"></i>
																		</div>
																		Platano Dominico
																	</label>
																</td>
															</tr>
														</table>
													</div>

													<!-- inicia listado de equipos de verificación -->
													<div class="col-sm-12">
														<table class="table table-bordered">
															<tr>
																<td colspan="3">
																	Enliste los equipos de medición utilizados para el pliego de condición solicitado
																</td>
															</tr>
															<tr>
																<td>
																	Equipo
																</td>
																<td>
																	Copia de los certificados de calibración
																</td>
																<td>
																	Copia de los registros de las verificaciones internas
																</td>
															</tr>
															<tr>
																<td>
																	<textarea id="inputGroup-1_3" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder=""></textarea>
																</td>
																<td>
																	<input class="form-control" type="file">
																</td>
																<td>
																	<input class="form-control" type="file">
																</td>
															</tr>
														</table>
													</div>
													<!-- termina listado de equipos de verficación -->
													<div class="col-sm-6">
														<p>
															¿Requiere la evaluación de requisitos adicionales solicitado por su cliente?
														</p>

														<div id="radioCertificacionGlobaGAP" class="btn-group justified-content" style="width:40%">
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="otroOrganismo" type="radio" value="SI" onclick="validarRadios('otroOrganismo', 'divOrganismoCertificacion')">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">SI</span>
															</label>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="otroOrganismo" type="radio" value="NO" onclick="validarRadios('otroOrganismo', 'divOrganismoCertificacion')">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">NO</span>

															</label>
														</div>
														<textarea id="inputGroup-1_3" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Nombre del documento"></textarea>

														<input class="form-control" type="file">
													</div>
													<div class="col-sm-6">
														<p>
															¿Tiene un acuerdo de muestreo con sus clientes?
														</p>

														<div id="radioCertificacionGlobaGAP" class="btn-group justified-content" style="width:40%">
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="otroOrganismo" type="radio" value="SI" onclick="validarRadios('otroOrganismo', 'divOrganismoCertificacion')">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">SI</span>
															</label>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="otroOrganismo" type="radio" value="NO" onclick="validarRadios('otroOrganismo', 'divOrganismoCertificacion')">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">NO</span>

															</label>
														</div>
														<p>
															Anexe copia de las especificaciones del muestreo
														</p>
														<input class="form-control" type="file">

														<p>
															PAMFA le indicara el muestreo a efectuarse en la cotización de servicio
														</p>
													</div>
													<div class="col-sm-12">
														<textarea id="inputGroup-1_3" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Describa la trazabilidad del lote"></textarea>
													</div>

												</div>
											</div>
											<!-- termina mostrar mexico calidad suprema -->

											<!-- inicia mostrar sistema de reducción de riesgos -->
											<div id="divSrrc" class="col-md-12">
												<div class="row">
													<div class="col-sm-12">
														<h4 style="font-size:14px;">SISTEMA DE REDUCCIÓN DE RIESGOS DE CONTAMINACIÓN (SRRC)</h4>
													</div>
													<div class="col-sm-12">
														<table class="table table-bordered">
															<tr>
																<td colspan="2">
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" checked="" type="checkbox">
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon="&#xf00c"></i>
																		</div>
																		Áreas integrales con aplicación de sistema completo
																	</label>
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" checked="" type="checkbox">
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
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" checked="" type="checkbox">
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon="&#xf00c"></i>
																		</div>
																		Sección campo
																	</label>
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" checked="" type="checkbox">
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon="&#xf00c"></i>
																		</div>
																		Sección empaque
																	</label>
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" checked="" type="checkbox">
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
														<div class="row g-mb-20">
															<div class="col-xs-12 align-self-center g-mb-5 g-mb-0--md">
																<label class="mb-0" for="#firstName">Número de unidades de producción / huertos o invernaderos</label>
															</div>

															<div class="col-xs-12 align-self-center">
																<div class="form-group g-pos-rel mb-0">
																	<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																		<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
																	</span>
																	<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
																data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" placeholder="Escribe aquí">
																</div>
															</div>
														</div>	
													</div>
													<div class="col-sm-6">
														<div class="row g-mb-20">
															<div class="col-xs-12 align-self-center g-mb-5 g-mb-0--md">
																<label class="mb-0" for="#firstName">Número de productores del área integral</label>
															</div>

															<div class="col-xs-12 align-self-center">
																<div class="form-group g-pos-rel mb-0">
																	<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																		<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
																	</span>
																	<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
																data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" placeholder="Escribe aquí">
																</div>
															</div>
														</div>
													</div>

													<div class="col-sm-12">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th colspan="3">
																		Información sobre comercialización de producto
																	</th>
																</tr>
																<tr>
																	<th>
																		Producto
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
																		<textarea id="inputGroup-1_3" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Nombre del producto"></textarea>
																	</td>
																	<td>
																		<textarea id="inputGroup-1_3" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="País(es) destino"></textarea>
																	</td>
																	<td>
																		<input id="firstName" name="firstName" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
																data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" placeholder="%">
																	</td>
																</tr>
															</tbody>
														</table>
													</div>

												</div>
											</div>
											<!-- termina mostrar sistema de reducción de riesgos -->

											<!-- inicia mostrar hecho en mexico -->
											<div id="divHechoMex" class="col-md-12">
												
											</div>
											<!-- termina mostrar hecho en mexico -->

											<!-- inicia mostrar denominación de origen -->
											<div id="divDenominacionOrigen" class="col-md-12">
												
											</div>
											<!-- termina mostrar denominación de origen -->
										</div>
									</form>
								</div>
								
							</div>
				     	</div>
					</div>
					<!-- termina ESQUEMAS DE CERTIFICACIÓN -->

					<!-- inicia 6.- PASO FINAL -->
					<div class="tab">Login Info:
						<p><input placeholder="Username..." oninput="this.className = ''"></p>
						<p><input placeholder="Password..." oninput="this.className = ''"></p>
					</div>
					<!-- termina PASO FINAL -->

					<div style="overflow:auto;">
						<div style="float:right;">
							<button class="btn btn-md u-btn-3d u-btn-indigo g-mr-10 g-mb-15" type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
						<button class="btn btn-md u-btn-3d u-btn-teal g-mr-10 g-mb-15" type="button" id="nextBtn" onclick="nextPrev(1)">Siguiente</button>
						</div>
					</div>



				</form>

			</div>
		</div>

<!-- script validación de preguntas -->
<script>
	function validarRadios(nombre,div){
		var nombre = nombre;
		var div = div;

		console.log(nombre);
		console.log(div);

		var valor = $('input[name="'+nombre+'"]:checked').val();

		if(valor == 'SI'){
			document.getElementById(div).style.display = 'block';
		}else{
			document.getElementById(div).style.display = 'none';
		}
		console.log(valor);
	}
</script>

<!-- script FORM-WIZARD -->
<script>
	var currentTab = 0; // Current tab is set to be the first tab (0)
	showTab(currentTab); // Display the current tab

	function showTab(n) {
		// This function will display the specified tab of the form ...
		var x = document.getElementsByClassName("tab");
		x[n].style.display = "block";
		// ... and fix the Previous/Next buttons:
		if (n == 0) {
			document.getElementById("prevBtn").style.display = "none";
		} else {
			document.getElementById("prevBtn").style.display = "inline";
		}
		if (n == (x.length - 1)) {
			document.getElementById("nextBtn").innerHTML = "Submit";
		} else {
			document.getElementById("nextBtn").innerHTML = "Siguiente";
		}
		// ... and run a function that displays the correct step indicator:
		fixStepIndicator(n)
	}

	function nextPrev(n) {
		// This function will figure out which tab to display
		var x = document.getElementsByClassName("tab");
		// Exit the function if any field in the current tab is invalid:
		if (n == 1 && !validateForm()) return false;
		// Hide the current tab:
		x[currentTab].style.display = "none";
		// Increase or decrease the current tab by 1:
		currentTab = currentTab + n;
		// if you have reached the end of the form... :
		if (currentTab >= x.length) {
			//...the form gets submitted:
			document.getElementById("regForm").submit();
			return false;
		}
		// Otherwise, display the correct tab:
		showTab(currentTab);
	}

	function validateForm() {
	// This function deals with validation of the form fields
	var x, y, i, valid = true;
		/*x = document.getElementsByClassName("tab");
		y = x[currentTab].getElementsByTagName("input");
		// A loop that checks every input field in the current tab:
		for (i = 0; i < y.length; i++) {
		// If a field is empty...
		if (y[i].value == "") {
		// add an "invalid" class to the field:
		y[i].className += " invalid";
		// and set the current valid status to false:
		valid = false;
		}
		}*/
		// If the valid status is true, mark the step as finished and valid:
		if (valid) {
			document.getElementsByClassName("step")[currentTab].className += " finish";
		}
		return valid; // return the valid status
	}

	function fixStepIndicator(n) {
		// This function removes the "active" class of all steps...
		var i, x = document.getElementsByClassName("step");
		for (i = 0; i < x.length; i++) {
			x[i].className = x[i].className.replace(" active", "");
		}
		//... and adds the "active" class to the current step:
		x[n].className += " active";
	}

</script>