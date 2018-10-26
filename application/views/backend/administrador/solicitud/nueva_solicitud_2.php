<style>
	.bwizard-steps {
		display: inline-block;
		margin: 0; padding: 0;
		background: #fff }
		.bwizard-steps .active {
			color: #fff;
			background: #e64b3b }
		.bwizard-steps .active:after {
			border-left-color: #e64b3b }
		.bwizard-steps .active a {
			color: #fff;
			cursor: default }
		.bwizard-steps .label {
			position: relative;
			top: -1px;
			margin: 0 5px 0 0; padding: 1px 5px 2px }
		.bwizard-steps .active .label {
			background-color: #585f69;}
		.bwizard-steps li {
			display: inline-block; position: relative;
			margin-right: 5px;
			padding: 12px 17px 10px 30px;
			*display: inline;
			*padding-left: 17px;
			background: #efefef;
			line-height: 18px;
			list-style: none;
			zoom: 1; }
		.bwizard-steps li:first-child {
			padding-left: 12px;
			-moz-border-radius: 4px 0 0 4px;
			-webkit-border-radius: 4px 0 0 4px;
			border-radius: 4px 0 0 4px; }
		.bwizard-steps li:first-child:before {
			border: none }
		.bwizard-steps li:last-child {
			margin-right: 0;
			-moz-border-radius: 0 4px 4px 0;
			-webkit-border-radius: 0 4px 4px 0;
			border-radius: 0 4px 4px 0; }
		.bwizard-steps li:last-child:after {
			border: none }
		.bwizard-steps li:before {
			position: absolute;
			left: 0; top: 0;
			height: 0; width: 0;
			border-bottom: 20px inset transparent;
			border-left: 20px solid #fff;
			border-top: 20px inset transparent;
			content: "" }
		.bwizard-steps li:after {
			position: absolute;
			right: -20px; top: 0;
			height: 0; width: 0;
			border-bottom: 20px inset transparent;
			border-left: 20px solid #efefef;
			border-top: 20px inset transparent;
			content: "";
			z-index: 2; }
		.bwizard-steps a {
			color: #333 }
		.bwizard-steps a:hover {
			text-decoration: none }
	.bwizard-steps.clickable li:not(.active) {
		cursor: pointer }
	.bwizard-steps.clickable li:hover:not(.active) {
		background: #ccc }
	.bwizard-steps.clickable li:hover:not(.active):after {
		border-left-color: #ccc }
	.bwizard-steps.clickable li:hover:not(.active) a {
		color: #08c }
	@media (max-width: 480px) {
		/* badges only on small screens */
		.bwizard-steps li:after,
		.bwizard-steps li:before {
			border: none }
		.bwizard-steps li,
		.bwizard-steps li.active,
		.bwizard-steps li:first-child,
		.bwizard-steps li:last-child {
			margin-right: 0;
			padding: 0;
			background-color: transparent }
	}
</style>

<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
	<div class="g-pa-20">

		<div class="row">
			<div class="col-md-12">
				<div id="rootwizard">
					<ul>
					  	<li>
					  		<a href="#tab1" data-toggle="tab">
					  			SECCIÓN <span class="label">1</span>
					  		</a>
					  	</li>
						<li>
							<a href="#tab2" data-toggle="tab">
								SECCIÓN <span class="label">2</span>
							</a>
						</li>
						<li>
							<a href="#tab3" data-toggle="tab">
								SECCIÓN <span class="label">3</span>
							</a>
						</li>
						<li>
							<a href="#tab4" data-toggle="tab">
								SECCIÓN <span class="label">4</span>
							</a>
						</li>
						<li>
							<a href="#tab5" data-toggle="tab">
								SECCIÓN <span class="label">5</span>
							</a>
						</li>
						<li>
							<a href="#tab6" data-toggle="tab">
								SECCIÓN <span class="label">6</span>
							</a>
						</li>
						<li>
							<a href="#tab7" data-toggle="tab">
								SECCIÓN <span class="label">7</span>
							</a>
						</li>
					</ul>
					<div class="tab-content" style="margin-top:2em;">
						<!-- inicia DATOS DEL CLIENTE -->
					    <div class="tab-pane" id="tab1">
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

					    <!-- inicia DATOS DE FACTURACIÓN -->
					    <div class="tab-pane" id="tab2">
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
					    <!-- termina DATOS DE FACTURACIÓN -->

					    <!-- inicia PRODUCTOS A CERTIFICAR -->
						<div class="tab-pane" id="tab3">
							3
					    </div>
					    <!-- termina PRODUCTOS A CERTIFICAR -->

					    <!-- inicia CERTIFICACIONES ANTERIORES -->
						<div class="tab-pane" id="tab4">
							4
					    </div>
					    <!-- termina CERTIFICACIONES ANTERIORES -->
						<div class="tab-pane" id="tab5">
							5
					    </div>
						<div class="tab-pane" id="tab6">
							6
					    </div>
						<div class="tab-pane" id="tab7">
							7
					    </div>


						<!-- End Pagination #01 -->
						<nav aria-label="Page Navigation">
							<ul class="pager wizard">

								<li class="list-inline-item g-hidden-sm-down previous first" style="display:none;">
									<a class="u-pagination-v1__item u-pagination-v1-1 g-pa-12-19" href="#!">First</a>
								</li>


								<li class="list-inline-item previous">
									<a class="u-pagination-v1__item u-pagination-v1-1 u-pagination-v1__item--disabled g-pa-12-21" href="#!" aria-label="Previous">
										<span aria-hidden="true">
											<i class="fa fa-angle-left"></i>
										</span>
										<span class="sr-only">Previous</span>
									</a>
								</li>
								<li class="list-inline-item g-hidden-sm-down next last" style="display:none;">
									<a class="u-pagination-v1__item u-pagination-v1-1 g-pa-12-19" href="#!">Last</a>
								</li>

								<li class="list-inline-item next">
									<a class="u-pagination-v1__item u-pagination-v1-1 g-pa-12-21" href="#!" aria-label="Next">
										<span aria-hidden="true">
											<i class="fa fa-angle-right"></i>
										</span>
										<span class="sr-only">Next</span>
									</a>
								</li>
							</ul>
						</nav>


					</div>
				</div>
			</div>
		</div>




