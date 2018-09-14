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

	<div class="g-pa-20">
		<div class="row">
			<!-- Profile Content -->
			<div class="col-lg-12">
				<!-- Overall Statistics -->
				<div class="row g-mb-0">

					<div class="col-md-4 g-mb-0 g-mb-0--md">
						<!-- Progreso ultimas solicitudes más avanzadas -->
						<div class="card border-0 rounded-0 g-mb-50">
							<!-- Panel Header -->
							<div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
								<h3 class="h6 mb-0">
									<i class="icon-layers g-pos-rel g-top-1 g-mr-5"></i> Ultimos progresos
								</h3>
								<div class="dropdown g-mb-10 g-mb-0--md">
									<span class="d-block g-color-primary--hover g-cursor-pointer g-mr-minus-5 g-pa-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="icon-options-vertical g-pos-rel g-top-1"></i>
									</span>
									<div class="dropdown-menu dropdown-menu-right rounded-0 g-mt-10">
										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-layers g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Procesos
										</a>
										<!--<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-wallet g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Wallets
										</a>-->
										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-fire g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Reportes
										</a>
										<!--<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-settings g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Users Setting
										</a>-->

										<div class="dropdown-divider"></div>

										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-plus g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Ver más
										</a>
									</div>
								</div>
							</div>
							<!-- End Panel Header -->

							<!-- Panel Body -->
							<div class="js-scrollbar card-block u-info-v1-1 g-bg-white-gradient-v1--after g-height-300 g-pa-0">
								<?php 
								for ($i=0; $i < 3; $i++) { 
								?>
									<!-- Descripción proceso solicitud -->
									<div class="g-mb-20">
										<h6 class="g-mb-10">Nom. entidad <span class="float-right g-ml-10">68%</span></h6>
										<div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-5">
											<div class="js-hr-progress-bar-indicator progress-bar g-bg-cyan u-progress-bar--xs" role="progressbar" style="width: 68%;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<!--<small class="g-font-size-12">11% more than last week</small>-->
									</div>
									<!-- End Descripción proceso solicitud -->

									<!-- Resumen proceso solicitud -->
									<div class="g-mb-20">
										<h6 class="g-mb-10">Nom. entidad <span class="float-right g-ml-10">93%</span></h6>
										<div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-5">
											<div class="js-hr-progress-bar-indicator progress-bar g-bg-primary u-progress-bar--xs" role="progressbar" style="width: 93%;" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<small class="g-font-size-12">17% more than last week</small>
									</div>
									<!-- End Resumen proceso solicitud -->

								<?php
								}
								 ?>
							</div>
							<!-- End Panel Body -->
						</div>
						<!-- End Progreso ultimas solicitudes más avanzadas -->
					</div>

					<!-- Panel general clientes registrados -->
					<div class="col-md-4 g-mb-0 g-mb-0--md">
						<div class="g-bg-cyan g-color-white g-pa-25">
							<header class="d-flex text-uppercase g-mb-40">
								<i class="icon-people align-self-center display-4 g-mr-20"></i>

								<div class="g-line-height-1">
									<h4 class="h5">Clientes registrados</h4>
									<div class="js-counter g-font-size-30" data-comma-separated="true">145</div>
								</div>
							</header>

							<div class="d-flex justify-content-between text-uppercase g-mb-25">
								<div class="g-line-height-1">
									<h5 class="h6 g-font-weight-600">Ultima semana</h5>
									<div class="js-counter g-font-size-16" data-comma-separated="true">3</div>
								</div>

								<div class="text-right g-line-height-1">
									<h5 class="h6 g-font-weight-600">Ultimo mes</h5>
									<div class="js-counter g-font-size-16" data-comma-separated="true">24</div>
								</div>
							</div>

							<h6 class="g-mb-10">Project Completeness <span class="float-right g-ml-10">72%</span></h6>
							<div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-10">
								<div class="js-hr-progress-bar-indicator progress-bar g-bg-white u-progress-bar--xs" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<small class="g-font-size-12">11% less than last month</small>
						</div>
					</div>

					<!-- Panel general solicitudes -->
					<div class="col-md-4 g-mb-0 g-mb-0--md">
						<div class="g-bg-purple g-color-white g-pa-25">
							<header class="d-flex text-uppercase g-mb-40">
								<i class="icon-layers align-self-center display-4 g-mr-20"></i>

								<div class="g-line-height-1">
									<h4 class="h5">Solicitudes registradas</h4>
									<div class="js-counter g-font-size-30" data-comma-separated="true">200</div>
								</div>
							</header>

							<div class="d-flex justify-content-between text-uppercase g-mb-25">
								<div class="g-line-height-1">
									<h5 class="h6 g-font-weight-600">Ultima semana</h5>
									<div class="js-counter g-font-size-16" data-comma-separated="true">20</div>
								</div>

								<div class="text-right g-line-height-1">
									<h5 class="h6 g-font-weight-600">Ultimo mes</h5>
									<div class="js-counter g-font-size-16" data-comma-separated="true">34</div>
								</div>
							</div>

							<h6 class="g-mb-10">Completadas <span class="float-right g-ml-10">89%</span></h6>
							<div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-10">
								<div class="js-hr-progress-bar-indicator progress-bar g-bg-white u-progress-bar--xs" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<small class="g-font-size-12">16% higher than last month</small>
						</div>
					</div>
				</div>
				<!-- End Overall Statistics -->

				<!-- Panel Solicitudes y clientes -->
				<div class="row g-mb-40">
					<div class="col-lg-6 g-mb-40 g-mb-0--lg">
						<!-- Ultimas solicitudes registradas -->
						<div class="card border-0">
							<!-- Panel Header -->
							<div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
								<h3 class="h6 mb-0">
									<i class="icon-layers g-pos-rel g-top-1 g-mr-5"></i> Ultimas solicitudes registradas
								</h3>
								<div class="dropdown g-mb-10 g-mb-0--md">
									<span class="d-block g-color-primary--hover g-cursor-pointer g-mr-minus-5 g-pa-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="icon-options-vertical g-pos-rel g-top-1"></i>
									</span>
									<div class="dropdown-menu dropdown-menu-right rounded-0 g-mt-10">
										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-layers g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Projects
										</a>
										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-wallet g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Wallets
										</a>
										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-fire g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Reports
										</a>
										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-settings g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Users Setting
										</a>

										<div class="dropdown-divider"></div>

										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-plus g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> View More
										</a>
									</div>
								</div>
							</div>
							<!-- End Panel Header -->

							<!-- Panel Body -->
							<div class="js-scrollbar card-block u-info-v1-1 g-bg-white-gradient-v1--after g-height-400 g-pa-0">
								<ul class="list-unstyled">
									<?php 
									for ($i=0; $i < 5; $i++) { 
									?>
										<li class="media g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-blue-left rounded g-pa-20 g-mb-10">
											<div class="d-flex g-mt-2 g-mr-15">
												<img class="g-width-40 g-height-40 rounded-circle" src="../../assets/img-temp/100x100/img1.jpg" alt="Image Description">
											</div>
											<div class="media-body">
												<div class="d-flex justify-content-between">
													<h5 class="h6 g-font-weight-600 g-color-black">Unify Template</h5>
													<span class="small text-nowrap g-color-blue">2 min ago</span>
												</div>
												<p>Curabitur hendrerit dolor sit amet consectetur. Adipiscing elitut leosit amet, consectetur eleifend.</p>
												<span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">HTML</span>
												<span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">AnhularJS</span>
												<span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">PHP</span>
											</div>
										</li>
									<?php
									}
									 ?>

									<li class="media g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-pink-left rounded g-pa-20 g-mb-10">
										<div class="d-flex g-mt-2 g-mr-15">
											<img class="g-width-40 g-height-40 rounded-circle" src="../../assets/img-temp/100x100/img5.jpg" alt="Image Description">
										</div>
										<div class="media-body">
											<div class="d-flex justify-content-between">
												<h5 class="h6 g-font-weight-600 g-color-black">UX/UI Design and Backend</h5>
												<span class="small text-nowrap g-color-pink">16 min ago</span>
											</div>
											<p>Hac consectetur habitasse platea dictumst, adipiscing elitut leosit amet, consectetur eleifend.</p>
											<span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">CSS</span>
											<span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-color-black g-rounded-20 g-px-10">JavaScript</span>
											<span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">Ruby</span>
											<span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">ASP.NET</span>
										</div>
									</li>

									<li class="media g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-black-left rounded g-pa-20 g-mb-10">
										<div class="d-flex g-mt-2 g-mr-15">
											<img class="g-width-40 g-height-40 rounded-circle" src="../../assets/img-temp/100x100/img4.jpg" alt="Image Description">
										</div>
										<div class="media-body">
											<div class="d-flex justify-content-between">
												<h5 class="h6 g-font-weight-600 g-color-black">React Native App</h5>
												<span class="small text-nowrap g-color-blue">2 min ago</span>
											</div>
											<p>Curabitur hendrerit dolor sit amet consectetur. Adipiscing elitut leosit amet, consectetur eleifend.</p>
											<span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">ReactJS</span>
											<span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">CSS</span>
											<span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">HTML</span>
										</div>
									</li>
								</ul>
							</div>
							<!-- End Panel Body -->
						</div>
						<!-- End Clientes por autorizar -->
					</div>

					<div class="col-lg-6">
						<!-- Clientes por autorizar -->
						<div class="card border-0">
							<div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
								<h3 class="h6 mb-0">
									<i class="icon-directions g-pos-rel g-top-1 g-mr-5"></i> Accesos pendientes
								</h3>

								<span class="d-flex align-self-center">
									<span class="d-inline-block text-center g-min-width-35 g-bg-red g-font-size-12 g-color-white g-rounded-15 g-px-8 g-py-1">5</span>
								</span>
								<div class="dropdown g-mb-10 g-mb-0--md">
									<span class="d-block g-color-primary--hover g-cursor-pointer g-mr-minus-5 g-pa-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="icon-options-vertical g-pos-rel g-top-1"></i>
									</span>
									<div class="dropdown-menu dropdown-menu-right rounded-0 g-mt-10">
										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-fire g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Reportes
										</a>

										<div class="dropdown-divider"></div>

										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-plus g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Ver más
										</a>
									</div>
								</div>
							</div>

							<div class="js-scrollbar card-block  u-info-v1-1 g-bg-white-gradient-v1--after g-height-400 g-pa-0">
								<ul class="list-unstyled">
									<?php 
									for ($i=0; $i < 5; $i++) { 
									?>
										<li class="d-flex justify-content-start g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-10">
											<div class="g-mt-2">
												<img class="g-width-50 g-height-50 rounded-circle" src="../../assets/img-temp/100x100/img17.jpg" alt="Image Description">
											</div>
											<div class="align-self-center g-px-10">
												<h5 class="h6 g-font-weight-600 g-color-black g-mb-3">
													<span class="g-mr-5">Nom clientes</span>
													<small class="g-font-size-12 g-color-blue">
														<i class="hs-admin-alarm-clock"></i> dd/mm/aaaa
													</small>
												</h5>
												<p class="m-0">Nom. entidad legal</p>
											</div>
											<!--<div class="align-self-center ml-auto">
												<span class="u-label u-label--sm g-bg-blue g-rounded-20 g-px-10">$25 / hr</span>
											</div>-->
											<div class="align-self-center ml-auto">
												<a href="#" style="display:inline-block" data-toggle="tooltip" title="Autorizar acceso">
													<span class="u-icon-v1 u-icon-size--sm g-bg-green--hover g-color-white--hover ">
														<i class="fa fa-check g-color-green g-color-white--hover"></i>
													</span>									
												</a>
												<a href="#" style="display:inline-block" data-toggle="tooltip" title="Rechazar">
													<span class="u-icon-v1 u-icon-size--sm g-bg-red--hover g-color-white--hover ">
														<i class="fa fa-close"></i>
													</span>									
												</a>
											</div>
										</li>
									<?php
									}
									 ?>

									<!--<li class="d-flex justify-content-start g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-10">
										<div class="g-mt-2">
											<img class="g-width-50 g-height-50 rounded-circle" src="../../assets/img-temp/100x100/img5.jpg" alt="Image Description">
										</div>
										<div class="align-self-center g-px-10">
											<h5 class="h6 g-font-weight-600 g-color-black g-mb-3">
												<span class="g-mr-5">Alberta Watson</span>
												<small class="g-font-size-12 g-color-pink">5k+ earned</small>
											</h5>
											<p class="m-0">Hac consectetur habitasse platea dictumst</p>
										</div>
										<div class="align-self-center ml-auto">
											<span class="u-label u-label--sm g-bg-pink g-rounded-20 g-px-10">$32 / hr</span>
										</div>
									</li>-->


								</ul>
							</div>
						</div>
						<!-- End Clientes por autorizar -->
					</div>
				</div>
				<!-- End Panel Solicitudes y clientes -->

				<!-- Projects & News Feeds Panels -->
				<div class="row g-mb-40">
					<div class="col-lg-6 g-mb-40 g-mb-0--lg">
						<!-- Notifications Panel -->
						<div class="card border-0">
							<div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
								<h3 class="h6 mb-0">
									<i class="icon-list g-pos-rel g-top-1 g-mr-5"></i> Notifications
								</h3>
								<div class="dropdown g-mb-10 g-mb-0--md">
									<span class="d-block g-color-primary--hover g-cursor-pointer g-mr-minus-5 g-pa-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="icon-options-vertical g-pos-rel g-top-1"></i>
									</span>
									<div class="dropdown-menu dropdown-menu-right rounded-0 g-mt-10">
										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-layers g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Projects
										</a>
										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-wallet g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Wallets
										</a>
										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-fire g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Reports
										</a>
										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-settings g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Users Setting
										</a>

										<div class="dropdown-divider"></div>

										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-plus g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> View More
										</a>
									</div>
								</div>
							</div>

							<div class="js-scrollbar card-block u-info-v1-1 g-bg-white-gradient-v1--after g-height-300 g-pa-0">
								<!-- Alert Success -->
								<div class="alert fade show g-bg-primary-opacity-0_1 g-color-primary rounded-0 g-mb-5" role="alert">
									<button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>

									<div class="media">
										<div class="d-flex g-mr-10">
											<img class="g-width-40 g-height-40 g-rounded-50x" src="../../assets/img-temp/100x100/img5.jpg" alt="Image Description">
										</div>
										<div class="media-body">
											<p class="m-0"><strong>Jasica Coolman</strong> saved your pin.</p>
											<span class="g-font-size-12 g-color-gray">2 hours ago</span>
										</div>
									</div>
								</div>
								<!-- End Alert Success -->

								<!-- Alert Cyan -->
								<div class="alert fade show g-bg-cyan-opacity-0_1 g-color-cyan rounded-0 g-mb-5" role="alert">
									<button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>

									<div class="media">
										<div class="d-flex g-mr-10">
											<img class="g-width-40 g-height-40 g-rounded-50x" src="../../assets/img-temp/100x100/img14.jpg" alt="Image Description">
										</div>
										<div class="media-body">
											<p class="m-0"><strong>Jack Watson</strong> sent you a message.</p>
											<span class="g-font-size-12">5 minutes ago</span>
										</div>
									</div>
								</div>
								<!-- End Alert Cyan -->

								<!-- Alert Orange -->
								<div class="alert fade show g-bg-orange-opacity-0_1 g-color-orange rounded-0 g-mb-5" role="alert">
									<button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>

									<div class="media">
										<div class="d-flex g-mr-10">
											<img class="g-width-40 g-height-40 g-rounded-50x" src="../../assets/img-temp/100x100/img4.jpg" alt="Image Description">
										</div>
										<div class="media-body">
											<p class="m-0"><strong>Nelly</strong> is offering free cofee..</p>
											<span class="g-font-size-12 g-color-gray">5 days ago</span>
										</div>
									</div>
								</div>
								<!-- End Alert Orange -->

								<!-- Alert Purple -->
								<div class="alert fade show g-bg-purple-opacity-0_1 g-color-purple rounded-0 g-mb-5" role="alert">
									<button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>

									<div class="media">
										<div class="d-flex g-mr-10">
											<span class="u-icon-v3 u-icon-size--sm g-bg-purple g-color-white g-rounded-50x">
												<i class="icon-wallet"></i>
											</span>
											</div>
										<div class="media-body">
											<p class="m-0"><strong>Pixeel Ltd</strong> received $270 for logo.</p>
											<span class="g-font-size-12 g-color-gray">2 hours ago</span>
										</div>
									</div>
								</div>
								<!-- End Alert Purple -->

								<!-- Alert Red -->
								<div class="alert fade show g-bg-red-opacity-0_1 g-color-lightred rounded-0 g-mb-5" role="alert">
									<button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>

									<div class="media">
										<div class="d-flex g-mr-10">
											<img class="g-width-40 g-height-40 g-rounded-50x" src="../../assets/img-temp/100x100/img17.jpg" alt="Image Description">
										</div>
										<div class="media-body">
											<p class="m-0"><strong>Edmon Low</strong> saved your pin.</p>
											<span class="g-font-size-12 g-color-gray">5 minutes ago</span>
										</div>
									</div>
								</div>
								<!-- End Alert Red -->

								<!-- Alert Gray Lighter 5 -->
								<div class="alert fade show g-bg-gray-light-v5 rounded-0 g-mb-5" role="alert">
									<button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>

									<div class="media">
										<div class="d-flex g-mr-10">
											<img class="g-width-40 g-height-40 g-rounded-50x" src="../../assets/img-temp/100x100/img1.jpg" alt="Image Description">
										</div>
										<div class="media-body">
											<p class="m-0"><strong>Htmlstream</strong> released a new update.</p>
											<span class="g-font-size-12 g-color-gray">2 hours ago</span>
										</div>
									</div>
								</div>
								<!-- End Alert Gray Lighter 5 -->
							</div>
						</div>
						<!-- End Notifications Panel -->
					</div>

					<div class="col-lg-6">
						<!-- News Feeds -->
						<div class="card border-0">
							<div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
								<h3 class="h6 mb-0">
									<i class="icon-directions g-pos-rel g-top-1 g-mr-5"></i> Activities
								</h3>
								<div class="dropdown g-mb-10 g-mb-0--md">
									<span class="d-block g-color-primary--hover g-cursor-pointer g-mr-minus-5 g-pa-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="icon-options-vertical g-pos-rel g-top-1"></i>
									</span>
									<div class="dropdown-menu dropdown-menu-right rounded-0 g-mt-10">
										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-layers g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Projects
										</a>
										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-wallet g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Wallets
										</a>
										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-fire g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Reports
										</a>
										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-settings g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Users Setting
										</a>

										<div class="dropdown-divider"></div>

										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-plus g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> View More
										</a>
									</div>
								</div>
							</div>

							<div class="js-scrollbar card-block  u-info-v1-1 g-bg-white-gradient-v1--after g-height-300 g-pa-0">
								<!-- Article -->
								<article class="media g-mb-20">
									<a class="d-flex mr-3" href="#!">
										<img class="rounded-circle g-width-40 g-height-40" src="../../assets/img-temp/100x100/img1.jpg" alt="Image Description">
									</a>

									<div class="media-body">
										<h3 class="h6">
											<span class="g-color-black g-font-weight-600">Htmlstream</span>
											<a class="g-color-gray-dark-v4 g-mr-5" href="#!">@Htmlstream</a>
											<span class="g-color-gray-dark-v4">26m</span>
										</h3>
										<p class="g-color-gray-dark-v4 g-mb-5">Sed ultrices velit vitae tortor posuere ultrices. Aliquam laoreet lorem et vulputate porta.</p>
										<a href="#!">https://goo.gl/Zjd6Bj</a>
									</div>
								</article>
								<!-- End Article -->

								<hr class="g-brd-gray-light-v4 g-mt-15 g-mb-20">

								<!-- Article -->
								<article class="media g-mb-20">
									<a class="d-flex mr-3" href="#!">
										<img class="rounded-circle g-width-40 g-height-40" src="../../assets/img-temp/100x100/img3.jpg" alt="Image Description">
									</a>

									<div class="media-body">
										<h3 class="h6">
											<span class="g-color-black g-font-weight-600">Pixeel</span>
											<a class="g-color-gray-dark-v4 g-mr-5" href="#!">@PixeelStudio</a>
											<span class="g-color-gray-dark-v4">3h</span>
										</h3>
										<p class="g-color-gray-dark-v4 g-mb-5">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
										<a href="#!">https://goo.gl/Zjd6Bj</a>
									</div>
								</article>
								<!-- End Article -->

								<hr class="g-brd-gray-light-v4 g-mt-15 g-mb-20">

								<!-- Article -->
								<article class="media g-mb-20">
									<a class="d-flex mr-3" href="#!">
										<img class="rounded-circle g-width-40 g-height-40" src="../../assets/img-temp/100x100/img2.jpg" alt="Image Description">
									</a>

									<div class="media-body">
										<h3 class="h6">
											<span class="g-color-black g-font-weight-600">Wrapbootstrap</span>
											<a class="g-color-gray-dark-v4 g-mr-5" href="#!">@Wrapbootstrap</a>
											<span class="g-color-gray-dark-v4">54m</span>
										</h3>
										<p class="g-color-gray-dark-v4 g-mb-5">Sed ultrices velit vitae tortor posuere ultrices. Aliquam laoreet lorem et vulputate porta.</p>
										<a href="#!">https://goo.gl/Zjd6Bj</a>
									</div>
								</article>
								<!-- End Article -->

								<hr class="g-brd-gray-light-v4 g-mt-15 g-mb-20">

								<!-- Article -->
								<article class="media g-mb-20">
									<a class="d-flex mr-3" href="#!">
										<img class="rounded-circle g-width-40 g-height-40" src="../../assets/img-temp/100x100/img4.jpg" alt="Image Description">
									</a>

									<div class="media-body">
										<h3 class="h6">
											<span class="g-color-black g-font-weight-600">Karina</span>
											<a class="g-color-gray-dark-v4 g-mr-5" href="#!">@Karina</a>
											<span class="g-color-gray-dark-v4">7h</span>
										</h3>
										<p class="g-color-gray-dark-v4 g-mb-5">Sed ultrices velit vitae tortor posuere ultrices. Aliquam laoreet lorem et vulputate porta.</p>
										<a href="#!">https://goo.gl/Zjd6Bj</a>
									</div>
								</article>
								<!-- End Article -->
							</div>
						</div>
						<!-- End News Feeds -->
					</div>
				</div>
				<!-- End Projects & News Feeds Panels -->

				<!-- User Contacts Panel -->
				<div class="card border-0 rounded-0 g-mb-50">
					<!-- Panel Header -->
					<div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
						<h3 class="h6 mb-0">
							<i class="icon-notebook g-pos-rel g-top-1 g-mr-5"></i> User Contacts
						</h3>
						<div class="dropdown g-mb-10 g-mb-0--md">
							<span class="d-block g-color-primary--hover g-cursor-pointer g-mr-minus-5 g-pa-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-options-vertical g-pos-rel g-top-1"></i>
							</span>
							<div class="dropdown-menu dropdown-menu-right rounded-0 g-mt-10">
								<a class="dropdown-item g-px-10" href="#!">
									<i class="icon-layers g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Projects
								</a>
								<a class="dropdown-item g-px-10" href="#!">
									<i class="icon-wallet g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Wallets
								</a>
								<a class="dropdown-item g-px-10" href="#!">
									<i class="icon-fire g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Reports
								</a>
								<a class="dropdown-item g-px-10" href="#!">
									<i class="icon-settings g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Users Setting
								</a>

								<div class="dropdown-divider"></div>

								<a class="dropdown-item g-px-10" href="#!">
									<i class="icon-plus g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> View More
								</a>
							</div>
						</div>
					</div>
					<!-- End Panel Header -->

					<!-- Panel Body -->
					<div class="card-block g-pa-0">
						<!-- User Contacts -->
						<div class="row">
							<div class="col-md-4 g-mb-30 g-mb-0--md">
								<!-- Figure -->
								<figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-cyan--hover g-transition-0_2 text-center">
									<div class="g-py-40 g-px-20">
										<!-- Figure Image -->
										<img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="../../assets/img-temp/125x125/img1.jpg" alt="Image Description">
										<!-- Figure Image -->

										<!-- Figure Info -->
										<h4 class="h5 g-mb-5">Mikel Andrews</h4>
										<div class="d-block">
											<span class="g-color-cyan g-font-size-default g-mr-3">
												<i class="icon-user"></i>
											</span>
											<em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Employee</em>
										</div>
										<!-- End Figure Info -->
									</div>

									<hr class="g-brd-gray-light-v4 g-my-0">

									<!-- Figure List -->
									<ul class="row list-inline g-py-20 g-ma-0">
										<li class="col g-brd-right g-brd-gray-light-v4">
											<a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
												<i class="icon-speech"></i>
											</a>
										</li>
										<li class="col g-brd-right g-brd-gray-light-v4">
											<a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
												<i class="icon-envelope-letter"></i>
											</a>
										</li>
										<li class="col">
											<a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
												<i class="icon-screen-smartphone"></i>
											</a>
										</li>
									</ul>
									<!-- End Figure List -->
								</figure>
								<!-- End Figure -->
							</div>

							<div class="col-md-4 g-mb-30 g-mb-0--md">
								<!-- Figure -->
								<figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-pink--hover g-transition-0_2 text-center">
									<div class="g-py-40 g-px-20">
										<!-- Figure Image -->
										<img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="../../assets/img-temp/125x125/img2.jpg" alt="Image Description">
										<!-- Figure Image -->

										<!-- Figure Info -->
										<h4 class="h5 g-mb-5">Natasha Kolnikova</h4>
										<div class="d-block">
											<span class="g-color-pink g-font-size-default g-mr-3">
												<i class="icon-user"></i>
											</span>
											<em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Family</em>
										</div>
										<!-- End Figure Info -->
									</div>

									<hr class="g-brd-gray-light-v4 g-my-0">

									<!-- Figure List -->
									<ul class="row list-inline g-py-20 g-ma-0">
										<li class="col g-brd-right g-brd-gray-light-v4">
											<a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
												<i class="icon-speech"></i>
											</a>
										</li>
										<li class="col g-brd-right g-brd-gray-light-v4">
											<a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
												<i class="icon-envelope-letter"></i>
											</a>
										</li>
										<li class="col">
											<a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
												<i class="icon-screen-smartphone"></i>
											</a>
										</li>
									</ul>
									<!-- End Figure List -->
								</figure>
								<!-- End Figure -->
							</div>

							<div class="col-md-4">
								<!-- Figure -->
								<figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-purple--hover g-transition-0_2 text-center">
									<div class="g-py-40 g-px-20">
										<!-- Figure Image -->
										<img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="../../assets/img-temp/125x125/img3.jpg" alt="Image Description">
										<!-- Figure Image -->

										<!-- Figure Info -->
										<h4 class="h5 g-mb-5">Frank Heller</h4>
										<div class="d-block">
											<span class="g-color-purple g-font-size-default g-mr-3">
												<i class="icon-user"></i>
											</span>
											<em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Friend</em>
										</div>
										<!-- End Figure Info -->
									</div>

									<hr class="g-brd-gray-light-v4 g-my-0">

									<!-- Figure List -->
									<ul class="row list-inline g-py-20 g-ma-0">
										<li class="col g-brd-right g-brd-gray-light-v4">
											<a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
												<i class="icon-speech"></i>
											</a>
										</li>
										<li class="col g-brd-right g-brd-gray-light-v4">
											<a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
												<i class="icon-envelope-letter"></i>
											</a>
										</li>
										<li class="col">
											<a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
													<i class="icon-screen-smartphone"></i>
											</a>
										</li>
									</ul>
									<!-- End Figure List -->
								</figure>
								<!-- End Figure -->
							</div>
						</div>
						<!-- End User Contacts -->
					</div>
					<!-- End Panel Body -->
				</div>
				<!-- End User Contacts Panel -->

				<!-- Product Table Panel -->
				<div class="card border-0">
					<div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
						<h3 class="h6 mb-0">
							<i class="icon-directions g-pos-rel g-top-1 g-mr-5"></i> Product Table
						</h3>
						<div class="dropdown g-mb-10 g-mb-0--md">
							<span class="d-block g-color-primary--hover g-cursor-pointer g-mr-minus-5 g-pa-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-options-vertical g-pos-rel g-top-1"></i>
							</span>
							<div class="dropdown-menu dropdown-menu-right rounded-0 g-mt-10">
								<a class="dropdown-item g-px-10" href="#!">
									<i class="icon-layers g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Projects
								</a>
								<a class="dropdown-item g-px-10" href="#!">
									<i class="icon-wallet g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Wallets
								</a>
								<a class="dropdown-item g-px-10" href="#!">
									<i class="icon-fire g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Reports
								</a>
								<a class="dropdown-item g-px-10" href="#!">
									<i class="icon-settings g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Users Setting
								</a>

								<div class="dropdown-divider"></div>

								<a class="dropdown-item g-px-10" href="#!">
									<i class="icon-plus g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> View More
								</a>
							</div>
						</div>
					</div>

					<div class="card-block g-pa-0">
						<!-- Product Table -->
						<div class="table-responsive">
							<table class="table table-bordered u-table--v2">
								<thead class="text-uppercase g-letter-spacing-1">
									<tr>
										<th class="g-font-weight-300 g-color-black">Product Name</th>
										<th class="g-font-weight-300 g-color-black g-min-width-200">Locations</th>
										<th class="g-font-weight-300 g-color-black">Status</th>
										<th class="g-font-weight-300 g-color-black">Contacts</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td class="align-middle text-nowrap">
											<h4 class="h6 g-mb-2">Lenovo Group</h4>
											<div class="js-rating g-font-size-12 g-color-primary" data-rating="3.5"></div>
										</td>
										<td class="align-middle">
											<div class="d-flex">
												<i class="icon-location-pin g-font-size-18 g-color-gray-dark-v5 g-pos-rel g-top-5 g-mr-7"></i>
												<span>389ZA2 DeClaudine, CA, USA</span>
											</div>
										</td>
										<td class="align-middle">
											<a class="btn btn-block u-btn-primary g-rounded-50 g-py-5" href="#!">
												<i class="fa fa-arrows-v g-mr-5"></i> Middle
											</a>
										</td>
										<td class="align-middle text-nowrap">
											<span class="d-block g-mb-5">
												<i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> +1 4768 97655
											</span>
											<span class="d-block">
												<i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> contact@lenovo.com
											</span>
										</td>
									</tr>

									<tr>
										<td class="align-middle text-nowrap">
											<h4 class="h6 g-mb-2">Samsung Electronics</h4>
											<div class="js-rating g-font-size-12 g-color-primary" data-rating="4.5"></div>
										</td>
										<td class="align-middle">
											<div class="d-flex">
												<i class="icon-location-pin g-font-size-18 g-color-gray-dark-v5 g-pos-rel g-top-5 g-mr-7"></i>
												<span>738AD Lorena Spur, London, UK</span>
											</div>
										</td>
										<td class="align-middle">
											<a class="btn btn-block u-btn-pink g-rounded-50 g-py-5" href="#!">
												<i class="fa fa-level-up g-mr-5"></i> High
											</a>
										</td>
										<td class="align-middle text-nowrap">
											<span class="d-block g-mb-5">
												<i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> +44 7689 7655
											</span>
											<span class="d-block">
												<i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> users@samsung.com
											</span>
										</td>
									</tr>

									<tr>
										<td class="align-middle text-nowrap">
											<h4 class="h6 g-mb-2">Sony Corp.</h4>
											<div class="js-rating g-font-size-12 g-color-primary" data-rating="2"></div>
										</td>
										<td class="align-middle">
											<div class="d-flex">
												<i class="icon-location-pin g-font-size-18 g-color-gray-dark-v5 g-pos-rel g-top-5 g-mr-7"></i>
												<span>044C1 Port Dickson, BC, Canada</span>
											</div>
										</td>
										<td class="align-middle">
											<a class="btn btn-block u-btn-cyan g-rounded-50 g-py-5" href="#!">
												<i class="fa fa-sort-amount-desc g-mr-5"></i> Deep
											</a>
										</td>
										<td class="align-middle text-nowrap">
											<span class="d-block g-mb-5">
												<i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> +1 0739 3644
											</span>
											<span class="d-block">
												<i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> clients@sony.com
											</span>
										</td>
									</tr>

									<tr>
										<td class="align-middle text-nowrap">
											<h4 class="h6 g-mb-2">Apple Inc.</h4>
											<div class="js-rating g-font-size-12 g-color-primary" data-rating="5"></div>
										</td>
										<td class="align-middle">
											<div class="d-flex">
												<i class="icon-location-pin g-font-size-18 g-color-gray-dark-v5 g-pos-rel g-top-5 g-mr-7"></i>
												<span>07W2 Donell Lodge, NY, USA</span>
											</div>
										</td>
										<td class="align-middle">
											<a class="btn btn-block u-btn-purple g-rounded-50 g-py-5" href="#!">
												<i class="fa fa-level-down g-mr-5"></i> Down
											</a>
										</td>
										<td class="align-middle text-nowrap">
											<span class="d-block g-mb-5">
												<i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> +1 6589-96451
											</span>
											<span class="d-block">
												<i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> mail@appple.com
											</span>
										</td>
									</tr>

									<tr>
										<td class="align-middle text-nowrap">
											<h4 class="h6 g-mb-2">Dell Corporation</h4>
											<div class="js-rating g-font-size-12 g-color-primary" data-rating="4"></div>
										</td>
										<td class="align-middle">
											<div class="d-flex">
												<i class="icon-location-pin g-font-size-18 g-color-gray-dark-v5 g-pos-rel g-top-5 g-mr-7"></i>
											<span>1A9WA4 Wanderben, Berlin, Germany</span>
											</div>
										</td>
										<td class="align-middle">
											<a class="btn btn-block u-btn-deeporange g-rounded-50 g-py-5" href="#!">
												<i class="fa fa-bolt g-mr-5"></i> Stabile
											</a>
										</td>
										<td class="align-middle text-nowrap">
											<span class="d-block g-mb-5">
												<i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> +49 3868 4792
											</span>
											<span class="d-block">
												<i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> clients@dell.com
											</span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- End Product Table -->
					</div>
				</div>
				<!-- End Product Table Panel -->
			</div>
			<!-- End Profile Content -->
		</div>
	</div>



	<div class="g-pa-20">
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
	</div>

           


