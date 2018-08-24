<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
	<div class="g-pa-20">
		<div class="row">

			<div class="col-md-12">
				<div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
					<form class="js-validate" action="<? echo base_url();?>cCliente/generales" method="post">


						<header>
							<h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">FORMULARIO DE REGISTRO NUEVO AUDITOR / INSPECTOR</h2>
						</header>

						<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

						<div class="row">
							<div class="col-md-4">
								<div class="row g-mb-20">
									<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#username">Usuario *</label>
									</div>

									<div class="col-md-12 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<input id="username" name="username" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text"  required="required" data-msg="This field is mandatory"
										data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" value="" placeholder="Escribe aquí">
										</div>
									</div>
								</div>	
							</div>
							<div class="col-md-4">
								<div class="row g-mb-20">
									<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#password">Contraseña *</label>
									</div>

									<div class="col-md-12 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<input id="password" name="password" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
										data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" placeholder="Escribe aquí">
										</div>
									</div>
								</div>	
							</div>
							<!-- tipo de auditor (auditor / inspector) -->
							<div class="col-md-4">
								<p>
									Tipo
								</p>
								<select class="form-control" name="" id="">
									<option value="INSPECTOR">INSPECTOR</option>
									<option value="AUDITOR">AUDITOR</option>
								</select>
							</div>
						</div>

						<header>
							<h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">INFORMACIÓN GENERAL</h2>
						</header>

						<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

						<div class="row">
							<div class="col-md-12">
								<div class="row g-mb-20">
									<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#nombreLegal">Nombre</label>
									</div>

									<div class="col-md-12 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<textarea id="nombreLegal" name="nombreLegal" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Escribe aquí"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#nombreRepresentante">Apellido Paterno</label>
									</div>

									<div class="col-md-12 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<textarea id="nombreRepresentante" name="nombreRepresentante" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Escribe aquí"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#nombreRepresentante">Apellido Materno</label>
									</div>

									<div class="col-md-12 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<textarea id="nombreRepresentante" name="nombreRepresentante" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Escribe aquí"></textarea>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#email">Email *</label>
									</div>

									<div class="col-md-12 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<input id="email" name="email" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="email" value="" required="required" data-msg="This field is mandatory"
										data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" placeholder="ejemplo@gmail.com">
										</div>
									</div>
								</div>	
							</div>
							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#telefono">Teléfono *</label>
									</div>

									<div class="col-md-12 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<input id="telefono" name="telefono" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
										data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" placeholder="Escribe aquí">
										</div>
									</div>
								</div>	
							</div>
						</div>

						<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

						<div>
							<button class="btn btn-md btn-xl--md u-btn-lightblue-v3 g-width-160--md g-font-size-12 g-font-size-default--md g-mb-10" type="submit">Crear usuario</button>
							<button class="btn btn-md btn-xl--md u-btn-outline-gray-dark-v6 g-font-size-12 g-font-size-default--md g-mr-10 g-mb-10" type="reset">Cancelar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
<script type="text/javascript">
var baseurl="<?php echo base_url();?>";
</script>