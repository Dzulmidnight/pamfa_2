
<!-- Promo Block -->
<section class="container-fluid g-px-0">
	<div class="row no-gutters">

		<div class="col-md-6 order-md-2 g-bg-white">
			<div class="g-pa-15x">
				<div class="g-mb-50">
					<div class="col-sm-12">
						<img style="width: 100%" src="<?php echo base_url(); ?>assets/img/logo/logo_pamfa.png" alt="">
					</div>
					
					<p class="lead g-color-green">Inicio de sesión para usuarios con una cuenta PAMFA.</p>
				</div>

				<div class="row"><!-- inicia row -->
					<div class="col-lg-12 g-order-1 g-order-2--lg g-mb-60">
						<form>
							<!-- Pricing -->
							<label class="u-check d-block g-mb-20 ">
								<input id="cliente" class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" name="radGroup1_1" type="radio" value="cliente" onclick="cambiarColor(this)" checked>

								<div class="media d-block d-md-flex u-shadow-v25 g-bg-primary--checked ">
									<div class="d-md-flex align-self-center g-pa-30">
										<div class="w-100">
											<h3 class="g-line-height-1 g-font-weight-700 g-font-size-36 g-color-primary g-color-white--checked mb-0">CLIENTE</h3>
										</div>
									</div>

							
								</div>
							</label>
							<!-- End Pricing -->

							<!-- Pricing -->
							<label class="u-check d-block g-mb-20">
								<input id="auditor" class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" name="radGroup1_1" type="radio" value="auditor" onclick="cambiarColor(this)" onchange="mostrarFrmRegistro('ocultar')">

								<div class="media d-block d-md-flex u-shadow-v25 g-bg-primary--checked">
									<div class="d-flex align-self-center g-pa-30">
										<div class="w-100">
											<h3 class="g-line-height-1 g-font-weight-700 g-font-size-36 g-color-primary g-color-white--checked mb-0">AUDITOR</h3>
										</div>
									</div>

							
								</div>
							</label>
							<!-- End Pricing -->

							<!-- Pricing -->
							<label class="u-check d-block">
								<input id="administrador" class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" name="radGroup1_1" type="radio" value="administrador" onclick="cambiarColor(this)" onchange="mostrarFrmRegistro('ocultar')">

								<div class="media d-block d-md-flex u-shadow-v25 g-bg-primary--checked">
									<div class="d-flex align-self-center g-pa-30">
										<div class="w-100">
											<h3 class="g-line-height-1 g-font-weight-700 g-font-size-36 g-color-primary g-color-white--checked mb-0">ADMINISTRADOR</h3>
										</div>
									</div>

								</div>
							</label>
							<!-- End Pricing -->
						</form>
					</div>
				</div><!-- termina row -->
			</div>
		</div>

		<div id="iniciarSesion" class="col-md-6 g-bg-blue">
			<div class="g-pa-50">
				<!-- Form -->
				<form  id="frmIngresar" class="g-py-15">
					<h2 id="tipoUsuario" class="h3 g-color-white mb-4">CLIENTE</h2>
					<div class="mb-4">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text g-width-45 g-brd-right-none g-brd-white g-color-white"><i class="icon-finance-067 u-line-icon-pro"></i></span>
							</div>
							<input class="form-control g-color-black g-brd-left-none g-brd-white g-bg-transparent g-color-white g-placeholder-white g-pl-0 g-pr-15 g-py-13" type="email" placeholder="Usuario">
						</div>
					</div>

					<div class="g-mb-40">
						<div class="input-group rounded">
							<div class="input-group-prepend">
								<span class="input-group-text g-width-45 g-brd-right-none g-brd-white g-color-white"><i class="icon-communication-062 u-line-icon-pro"></i></span>
							</div>
							<input class="form-control g-color-black g-brd-left-none g-brd-white g-bg-transparent g-color-white g-placeholder-white g-pl-0 g-pr-15 g-py-13" type="tel" placeholder="Contraseña">
						</div>
						<p class="text-right">
							<a href="#" class="text-dark" onclick="recuperarPassword('recuperar')">Olvidaste tu contraseña?</a>
						</p>
					</div>

					<div class="g-mb-60">
						<a href="<?php echo base_url('backend/cliente/main/'); ?>" class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13">
							Ingresar
						</a>
					</div>
					
					<div id="seccionRegistrarse">
						<div class="text-center g-pos-rel pb-2 g-mb-60">
							<div class="d-inline-block w-100 g-height-1 g-bg-white"></div>
							<span class="u-icon-v2 u-icon-size--lg g-brd-white g-color-white g-bg-teal g-font-size-default rounded-circle text-uppercase g-absolute-centered g-pa-24">Ó</span>
						</div>


						<button class="btn btn-block u-btn-bluegray rounded text-uppercase g-py-13" type="button" onclick="mostrarFrmRegistro('mostrar')">
							¿Aún no tienes una cuenta? Regístrate
						</button>								
					</div>

				</form>
				<!-- End Form -->

				<!-- Form recuperar contraseña-->
				<form id="recuperarPassword" class="g-py-15" style="display:none">
					<h2 id="tipoUsuario" class="h3 g-color-white mb-4">CLIENTE</h2>
					<div class="mb-4">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text g-width-45 g-brd-right-none g-brd-white g-color-white"><i class="icon-communication-025 u-line-icon-pro"></i></span>
							</div>
							<input class="form-control g-color-black g-brd-left-none g-brd-white g-bg-transparent g-color-white g-placeholder-white g-pl-0 g-pr-15 g-py-13" type="email" placeholder="ejemplo@gmail.com">
						</div>
					</div>

					<div class="g-mb-60">
						<div class="row">
							<div class="col-md-8">
								<button class="btn btn-md btn-block u-btn-lightred rounded text-uppercase g-py-13" type="button">Recuperar contraseña</button>		
							</div>
							<div class="col-md-4">
								<button class="btn btn-md btn-block u-btn-darkgray rounded text-uppercase g-py-13" type="button" onclick="recuperarPassword('cancelar')">Cancelar</button>
							</div>
						</div>
						
					</div>
					
					<div id="seccionRegistrarse">
						<div class="text-center g-pos-rel pb-2 g-mb-60">
							<div class="d-inline-block w-100 g-height-1 g-bg-white"></div>
							<span class="u-icon-v2 u-icon-size--lg g-brd-white g-color-white g-bg-teal g-font-size-default rounded-circle text-uppercase g-absolute-centered g-pa-24">Ó</span>
						</div>


						<button class="btn btn-block u-btn-bluegray rounded text-uppercase g-py-13" type="button" onclick="mostrarFrmRegistro('mostrar')">
							¿Aún no tienes una cuenta? Regístrate
						</button>								
					</div>

				</form>
				<!-- End Form -->

				<!-- Form nuevo registro -->
				<form id="frmNuevoRegistro" class="g-py-15 g-bg-white g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" style="display:none">
					<h2 id="tipoUsuario" class="h3 g-color-blue mb-4">REGISTRARSE COMO NUEVO CLIENTE</h2>
					<div class="row">
						<!-- INFORMACIÓN DEL USUARIO -->
						<div class="col-sm-6">
							<div class="form-group g-mb-20">
								<label class="g-mb-10" for="usuario">Usuario *</label>
								<input id="usuario" class="form-control form-control-md rounded-0" type="email" placeholder="Nombre de usuario" required>
								<small class="form-text text-muted g-font-size-default g-mt-10">Usuario que usara para ingresar a su cuenta.</small>
							</div>							
						</div>
						<div class="col-sm-6">
							<div class="form-group g-mb-20">
								<label class="g-mb-10" for="password">Contraseña *</label>
								<div class="input-group g-brd-primary--focus">
									<input id="password" class="form-control form-control-md rounded-0" type="password" placeholder="Ingresa tu contraseña" required>
									<div class="input-group-append">
										
											<span class="input-group-text rounded-0 g-bg-white g-color-gray-light-v1" data-toggle="tooltip" title="Mostrar / Ocultar contraseña">
												<button class="btn u-btn-default" type="button" onclick="mostrarPassword('password');">
													<i class="icon-eye"></i>
												</button>
											</span>	
							
									</div>
								</div>
								<small class="form-text text-muted g-font-size-default g-mt-10">8 caracteres como mínimo</small>
							</div>
						</div>
						<div class="col-sm-6">
							<!-- -->
							<div class="form-group g-mb-20">
								<label class="g-mb-10" for="nombre_entidad">Nombre de la entidad legal *</label>
								<textarea id="nombre_entidad" class="form-control form-control-md u-textarea-expandable rounded-0" rows="3" placeholder="Nombre de la entidad legal *" required></textarea>
							</div>
						</div>
						<div class="col-sm-6">
							<!-- -->
							<div class="form-group g-mb-20">
								<label class="g-mb-10" for="representante_legal">Nombre del representante lega *</label>
								<textarea id="representante_legal" class="form-control form-control-md u-textarea-expandable rounded-0" rows="3" placeholder="Nombre del representante legal *" required></textarea>
							</div>
						</div>


						<!------------------ INFORMACIÓN DE CONTACTO -------------------->
						<div class="col-sm-12">
							<h4 style="border-bottom: 3px solid #2c3e50;">DATOS DE CONTACTO</h4>
						</div>
						<div class="col-sm-6">
							<div class="form-group g-mb-20">
								<label class="g-mb-10" for="email">Email *</label>
								<input id="email" class="form-control form-control-md rounded-0" type="email" placeholder="ejemplo@gmail.com" required>
							</div>
						</div>
						<div class="col-sm-6">
							<!-- -->
							<div class="form-group g-mb-20">
								<label class="g-mb-10" for="telefono">Teléfono *</label>
								<input id="telefono" class="form-control form-control-md rounded-0" type="email" placeholder="Ingresa el teléfono de contacto" required>
							</div>
						</div>
						<div class="col-sm-6">
							<!-- -->
							<div class="form-group g-mb-20">
								<label class="g-mb-10" for="fax">Fax</label>
								<input id="fax" class="form-control form-control-md rounded-0" type="email" placeholder="Fax">
							</div>	
						</div>

						<!------------------ INFORMACIÓN SOBRE LA LOCALIZACIÓN -------------------->
						<div class="col-sm-12">
							<h4 style="border-bottom: 3px solid #2c3e50;">DATOS DE LOCALIZACIÓN</h4>
						</div>
						<div class="col-sm-6">
							<div class="form-group g-mb-20">
								<label class="g-mb-10" for="pais">País *</label>
								<select class="form-control form-control-md rounded-0" name="" id="pais" required>
									<option value="">Listado de Paises</option>
									<option value="" selected>México</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<!-- -->
							<div class="form-group g-mb-20">
								<label class="g-mb-10" for="estado">Estado *</label>
								<input id="estado" class="form-control form-control-md rounded-0" type="email" placeholder="Ingresa el estado" required>
							</div>
						</div>
						<div class="col-sm-4">
							<!-- -->
							<div class="form-group g-mb-20">
								<label class="g-mb-10" for="municipio">Municipio *</label>
								<input id="municipio" class="form-control form-control-md rounded-0" type="email" placeholder="Ingresa el municipio" required>
							</div>
						</div>
						<div class="col-sm-4">
							<!-- -->
							<div class="form-group g-mb-20">
								<label class="g-mb-10" for="colonia">Colonia</label>
								<input id="colonia" class="form-control form-control-md rounded-0" type="email" placeholder="Ingresa la colonia">
							</div>
						</div>
						<div class="col-sm-4">
							<!-- -->
							<div class="form-group g-mb-20">
								<label class="g-mb-10" for="codigo_postal">C.P.</label>
								<input id="codigo_postal" class="form-control form-control-md rounded-0" type="email" placeholder="Ingresa el codigo postal">
							</div>
						</div>
						<div class="col-sm-12">
							<!-- -->
							<div class="form-group g-mb-20">
								<label class="g-mb-10" for="direccion">Dirección *</label>
								<textarea id="direccion" class="form-control form-control-md u-textarea-expandable rounded-0" rows="3" placeholder="Ingresa datos como Calle, Num. Int, Num. Ext" required></textarea>
							</div>
						</div>

						<div class="col-sm-8">
							<button type="button" class="btn btn-lg u-btn-primary g-mr-10 g-mb-15" onclick="validarInformacion('frmNuevoRegistro');">
								<i class="fa fa-check-circle g-mr-5"></i>
								Enviar información
							</button>
						</div>
						<div class="col-sm-4">
							<button type="button" class="btn btn-lg u-btn-bluegray g-mr-10 g-mb-15" onclick="mostrarFrmRegistro('ocultar');">
								<i class="icon-close g-mr-5"></i>
								Cancelar
							</button>
						</div>
					</div>
				</form>
				<!-- End Form nuevo registro -->

			</div>
		</div>


	</div>

</section>
<!-- End Promo Block -->