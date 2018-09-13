<style>
	.chart-container {
		position: relative;
		margin: auto;
		height: 400px;
		width: 400px;

	}
</style>
<!-- CSS Implementing Plugins -->
<link  rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/slick-carousel/slick/slick.css">


<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
	<div class="g-bg-lightblue-v10-opacity-0_5 g-pa-20">
<!------------------------------------------------------------------------>



		<div class="row">
			<div class="col-md-7">

				<div class="card g-brd-gray-light-v7 g-mb-10 g-pa-20">
					<h4>
						SOLICITUDES
					</h4>
					<!-- Nav tabs -->
					<ul class="nav text-center nav-justified u-nav-v2-2 g-mb-20" role="tablist" data-target="tab_solicitudes" data-tabs-mobile-type="slide-up-down" data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-lightgray g-mb-20">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#tab_solicitudes_pendientes" role="tab">
								<i class="hs-admin-alert d-block g-font-size-25 u-tab-line-icon-pro"></i>
								Pendientes
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tab_solicitud_en_proceso" role="tab">
								<i class="hs-admin-infinite d-block g-font-size-25 u-tab-line-icon-pro"></i>
								En proceso
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tab_grafica_solicitudes" role="tab">
								<i class="hs-admin-stats-up d-block g-font-size-25 u-tab-line-icon-pro"></i>
								Estadisticas
							</a>
						</li>

					</ul>
					<!-- End Nav tabs -->

					<!-- Tab panes -->
					<div id="tab_solicitudes" class="tab-content">

						<!-- listado solicitudes pendientes -->
						<div class="tab-pane fade show active" id="tab_solicitudes_pendientes" role="tabpanel">
							<div>
								<!--<header class="g-mb-20">
									<h2 class="g-font-weight-400 g-font-size-16 g-color-orange mb-0">
										SOLICITUDES PENDIENTES
									</h2>
								</header>-->
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
						</div>

						<!-- listado solicitudes en proceso -->
						<div class="tab-pane fade" id="tab_solicitud_en_proceso" role="tabpanel">
							<div>
								<!--<header class="g-mb-20">
									<h2 class="g-font-weight-400 g-font-size-16 g-color-blue mb-0">
										SOLICITUDES EN PROCESO
									</h2>
								</header>-->
								<!-- inicia tabla de solicitudes por revisar -->
								<div class="table-responsive g-mb-40">
									<table class="table table-striped">
										<thead>
											<tr>
												<th></th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													#1
												</td>
												<td>
<div class="progress rounded-0 g-mb-20">
  <div class="progress-bar u-progress-bar--xs" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
</div>


												</td>
											</tr>
										</tbody>
									</table>
								</div>
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
														<span class="u-icon-v1 g-color-blue" data-toggle="tooltip" title="En proceso">
															<i class="hs-admin-infinite"></i>
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
						</div>
						<div class="tab-pane fade" id="tab_grafica_solicitudes" role="tabpanel">
							<div class="chart-container">
								<canvas id="canvasGrafica"></canvas>
							</div>
						</div>

					</div>
					<!-- End Tab panes -->
				</div>
			</div>


			<div class="col-md-5">
				<div class="card g-brd-gray-light-v7 g-mb-10 g-pa-20">
					<div class="">
						<h4>
							ACCESOS PENDIENTES
						</h4>
			
						<div class="table-responsive g-mb-40">
							<table class="table table-striped g-font-size-12">
								<thead>
									<tr >
										<th>ID</th>
										<th>Representante</th>
										<th>Entidad</th>
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
											<td style="padding:0px;">
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
				</div>
			</div>

		</div>

           


