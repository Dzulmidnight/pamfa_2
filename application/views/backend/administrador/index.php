<!-- CSS Implementing Plugins -->
<link  rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/slick-carousel/slick/slick.css">

<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
	<div class="g-bg-lightblue-v10-opacity-0_5 g-pa-20">
<!------------------------------------------------------------------------>



		<div class="row">
			<div class="col-md-12">
			</div>
			<div class="col-md-6">
				<div class="card g-brd-gray-light-v7 g-mb-10">
					<div class="container">
						<div id="shortcode2" class="g-mb-40">
							<div class="shortcode-html">
								<div id="carouselPendientes" class="js-carousel g-pb-45" data-autoplay="true"  data-slides-show="1" data-slides-scroll="1" data-pagi-classes="u-carousel-indicators-v1 g-absolute-centered--x text-center g-bottom-20" data-responsive='[{
									"breakpoint": 576,
									"settings": {
										"slidesToShow": 1
									}
								}]'>
									<div class="js-slide">
										<!-- inicia tabla accesos pendientes -->
										<div class="g-pa-10">
											<header class="g-mb-20">
												<h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">ACCESOS PENDIENTES</h2>
											</header>
											<div class="table-responsive g-mb-40">
												<table class="table table-striped g-font-size-12">
													<thead>
														<tr >
															<th>ID</th>
															<th>Representante</th>
															<th>Entidad lega</th>
															<th>Estatus</th>
															<th>
																Acciones
															</th>
														</tr>
													</thead>
													<tbody >
														<?php 
														for ($i=0; $i < 5; $i++) { 
														?>
															<tr>
																<td>
																	<?= $i; ?>
																</td>
																<td>
																	<a style="padding:0px" href="#">
																		Yasser Martínez
																	</a>
																</td>
																<td style="padding:0px;padding-top: 10px;">
																	Inforganic Technologies
																</td>
																<td>
																	<span class="u-icon-v1 g-color-yellow" data-toggle="tooltip" title="Pendiente">
																		<i class="hs-admin-alert"></i>
																	</span>
																</td>
																<td>
																	<a href="#" style="display:inline-block" data-toggle="tooltip" title="Autorizar">
																		<span class="u-icon-v1 u-icon-size--sm g-bg-green--hover g-color-white--hover ">
																			<i class="fa fa-check g-color-green g-color-white--hover"></i>
																		</span>									
																	</a>
																	<a href="#" style="display:inline-block" data-toggle="tooltip" title="Rechazar">
																		<span class="u-icon-v1 u-icon-size--sm g-bg-red--hover g-color-white--hover ">
																			<i class="fa fa-close"></i>
																		</span>									
																	</a>
																</td>
															</tr>
														<?php
														}
														 ?>
													</tbody>
												</table>							
											</div>

											<a href="#">
												<i class="hs-admin-search"></i> Consultar todos los accesos
											</a>

										</div>
										<!-- termina tabla accesos pendientes -->
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
			</div>


			<!-- inicia sección solicitudes por revisar -->
			<div class="col-md-6">
				<div class="card g-brd-gray-light-v7 g-mb-30">

					<div class="container">
						<div id="shortcode2" class="g-mb-40">
							<div class="shortcode-html">
								<div id="carouselPendientes" class="js-carousel g-pb-45" data-autoplay="true"  data-slides-show="1" data-slides-scroll="1" data-pagi-classes="u-carousel-indicators-v1 g-absolute-centered--x text-center g-bottom-20" data-responsive='[{
									"breakpoint": 576,
									"settings": {
										"slidesToShow": 1
									}
								}]'>
									<div class="js-slide">
										<!-- inicia tabla accesos pendientes -->
											<div class="g-pa-10">
												<header class="g-mb-20">
													<h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">
														SOLICITUDES PENDIENTES
													</h2>
												</header>
												<!-- inicia tabla de solicitudes por revisar -->
												<div class="table-responsive g-mb-40">
													<table class="table table-striped g-font-size-12">
														<thead>
															<tr>
																<th>
																	ID
																</th>
																<th>
																	Fecha
																</th>
																<th>
																	Cliente
																</th>
																<th>
																	Esquema(s)
																</th>
																<th>
																	Estatus
																</th>
																<th>
																	Acciones
																</th>
															</tr>
														</thead>
														<tbody>
															<?php 
															for ($i=0; $i < 5; $i++) { 
															?>
																<tr>
																	<!-- id solicitud -->
																	<td>
																		<?= $i; ?>
																	</td>
																	<!-- fecha de envio de la solicitud -->
																	<td>
																		03/09/2018
																	</td>
																	<!-- nombre del cliente -->
																	<td class="g-pl-0 g-pr-0">
																		<a href="#">
																			Cliente de prueba
																		</a>
																	</td>
																	<!-- esquemas que estan solicitando -->
																	<td>
																		<a class="g-mb-0" href="#">Global Gap IFA</a>, <a class="g-mb-0" href="#">Global Gap CoC</a>, <a class="g-mb-0" href="#">SRRC</a>
																	</td>
																	<!-- estatus general de la solicitud -->
																	<td>
																		<span class="u-icon-v1 g-color-yellow" data-toggle="tooltip" title="Pendiente">
																			<i class="hs-admin-alert"></i>
																		</span>
																	</td>
																	<td style="padding-left:0px;padding-right:0px;">
																		<a href="#" style="display:inline-block" data-toggle="tooltip" title="Consultar solicitud">
																			<span class="u-icon-v1 u-icon-size--sm g-bg-blue--hover g-color-white--hover ">
																				<i class="fa fa-search g-color-blue g-color-white--hover"></i>
																			</span>									
																		</a>
																		<a href="#" style="display:inline-block" data-toggle="tooltip" title="Elimnar">
																			<span class="u-icon-v1 u-icon-size--sm g-bg-red--hover g-color-white--hover ">
																				<i class="fa fa-trash"></i>
																			</span>									
																		</a>
																	</td>
																</tr>
															<?php
															}
															 ?>
														</tbody>
													</table>							
												</div>

												<a href="#">
													<i class="hs-admin-search"></i> Consultar todas las solicitudes
												</a>
												<!-- termina tabla de solicitudes por revisar -->
											</div>
										<!-- termina tabla accesos pendientes -->
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>

           


