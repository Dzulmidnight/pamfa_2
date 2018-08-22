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

							<div id="datosCliente">
								<div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
									<form class="js-validate">

										<header>
											<h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">3.- CERTIFICACIONES CON LAS QUE CUENTA</h2>
										</header>
										<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

										<div class="row">
											<div class="col-md-12">
												<p>
													Seleccione los esquemas de certificación con los que cuenta o conto.
												</p>
											</div>
											<div class="col-md-6">
<div class="d-flex align-items-center justify-content-between">
    <p>Option 3</p>
    <div>
      <label class="u-check g-mr-15 mb-0">
        <input class="g-hidden-xs-up g-pos-abs g-top-10 g-left-10" type="checkbox" checked="">
        <div class="u-check-icon-checkbox-v3 g-bg-primary--checked rounded-0">
          <i class="fa fa-check g-absolute-centered g-color-white g-show-check"></i>
          <i class="fa fa-plus g-absolute-centered g-color-primary g-hide-check"></i>
        </div>
      </label>

      <label class="u-check g-mr-15 mb-0">
        <input class="g-hidden-xs-up g-pos-abs g-top-10 g-left-10" type="checkbox" checked="">
        <div class="u-check-icon-checkbox-v3 g-bg-primary--checked rounded-0">
          <i class="ti ti-check g-absolute-centered g-color-white g-show-check"></i>
          <i class="ti ti-plus g-absolute-centered g-color-primary g-hide-check"></i>
        </div>
      </label>

      <label class="u-check g-mr-15 mb-0">
        <input class="g-hidden-xs-up g-pos-abs g-top-10 g-left-10" type="checkbox" checked="">
        <div class="u-check-icon-checkbox-v3 g-bg-primary--checked rounded-0">
          <i class="ti ti-check g-absolute-centered g-color-white g-show-check"></i>
          <i class="ti ti-plus g-absolute-centered g-color-primary g-hide-check"></i>
        </div>
      </label>

      <label class="u-check mb-0">
        <input class="g-hidden-xs-up g-pos-abs g-top-10 g-left-10" type="checkbox">
        <div class="u-check-icon-checkbox-v3 g-bg-primary--checked rounded-0">
          <i class="ti ti-check g-absolute-centered g-color-white g-show-check"></i>
          <i class="ti ti-plus g-absolute-centered g-color-primary g-hide-check"></i>
        </div>
      </label>
    </div>
  </div>
											</div>
											<!-- Left Column -->
											<div class="col-md-6">
												<div class="form-group g-mb-10">
													<label class="u-check g-pl-25">
														<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" checked="" type="checkbox">
														<div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
															<i class="fa" data-check-icon="&#xf00c"></i>
														</div>
														GLOBALG.A.P
													</label>
												</div>

												<div class="form-group g-mb-10">
													<label class="u-check g-pl-25">
														<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
														<div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
															<i class="fa" data-check-icon="&#xf00c"></i>
														</div>
														Global Localization Number
													</label>
												</div>

												<div class="form-group g-mb-10 g-mb-0--md">
													<label class="u-check g-pl-25">
														<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
														<div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
															<i class="fa" data-check-icon="&#xf00c"></i>
														</div>
														GLOBALG.A.P CoC
													</label>
												</div>
											</div>
											<!-- End Left Column -->

											<!-- Right Column -->
											<div class="col-md-6">
												<div class="form-group g-mb-10">
													<label class="u-check g-pl-25">
														<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
														<div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
															<i class="fa" data-check-icon="&#xf00c"></i>
														</div>
														México Calidad Suprema
													</label>
												</div>

												<div class="form-group g-mb-10">
													<label class="u-check g-pl-25">
														<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
														<div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
															<i class="fa" data-check-icon="&#xf00c"></i>
														</div>
														PrimusGFS
													</label>
												</div>

												<div class="form-group g-mb-10 g-mb-0--md">
													<label class="u-check g-pl-25">
														<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
														<div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
															<i class="fa" data-check-icon="&#xf00c"></i>
														</div>
														Registro de SENASICA
													</label>
												</div>
											</div>
											<!-- End Right Column -->
										</div>
									</form>
								</div>
								
							</div>
				     	</div>
					</div>
					<!-- termina CERTIFICACIONES ANTERIORES -->

					<!-- inicia 5.- ESQUEMAS DE CERTIFICACIÓN -->
					<div class="tab">Login Info:
						<p><input placeholder="Username..." oninput="this.className = ''"></p>
						<p><input placeholder="Password..." oninput="this.className = ''"></p>
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