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
									<i class="icon-layers g-pos-rel g-top-1 g-mr-5"></i> Progresos
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
				<div class="row g-mb-20">
					<div class="col-lg-6 g-mb-40 g-mb-0--lg">
						<!-- Ultimas solicitudes registradas -->
						<div class="card border-0">
							<!-- Panel Header -->
							<div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
								<h3 class="h6 mb-0">
									<i class="icon-layers g-pos-rel g-top-1 g-mr-5"></i> Solicitudes por revisar <span class="d-inline-block text-center g-min-width-35 g-bg-red g-font-size-12 g-color-white g-rounded-15 g-px-8 g-py-1"><?php echo $consulta_todo;?></span>
								</h3>
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
							<!-- End Panel Header -->

							<!-- Panel Body -->
							<div class="js-scrollbar card-block u-info-v1-1 g-bg-white-gradient-v1--after g-height-400 g-pa-0">


								<?php if (isset($consulta_full)) {?>
								<ul class="list-unstyled">
									<?php 
									foreach($consulta_full as $fila) { 
									?>
									<a href="#" id="solicitud<?= $i; ?>" onmouseover="resaltar(this.id, 'li')" onmouseout="normalizar(this.id, 'li')">
										<li class="media  g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-orange-left rounded g-pa-20 g-mb-10" >
											<div class="d-flex g-mt-2 g-mr-15">
												
												 <?php echo "#ID:".$fila->id_solicitud; ?>
											</div>
											<div class="media-body">
												<div class="d-flex justify-content-between">
													<h5 class="h6 g-font-weight-600 g-color-black"><?php echo $fila->nombreLegal; ?></h5>
													<span class="small text-nowrap g-color-blue"><?php echo date('d/m/Y',$fila->fecha_envio);?></span>
												</div>
												<p>
													 <?php echo "Pais: ".$fila->nombre.", ".$fila->estado; ?>
												</p>
												<p>
													<?php echo "Email: ".$fila->email.". Tel: ".$fila->telefono; ?> 
												</p>
												<?php if ($fila->global_ifa!=null) {
													?><span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">IFA</span><?
												}?>
												<?php if ($fila->global_coc!=null) {
													?>
												<span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">CoC</span>
												<?
												}?>
												<?php if ($fila->srrc!=null) {
													?>
												<span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">SRRC</span>
												<?
												}?>
												<?php if ($fila->mcs!=null) {
													?>
												<span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">Méx. Calidad Sup.</span>
												<?
												}?>
												<?php if ($fila->hecho_mexico!=null) {
													?>
												<span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">Hecho en Mex.</span>
												<?
												}?>
												<?php if ($fila->den_origen!=null) {
													?>
												<span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">Denominación de Origen</span>
												<?
												}?>
												

											</div>
										</li>
									</a>
									<?php
									}
									 ?>
										<li class="d-flex justify-content-start g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-10">
											<div class="m-auto">
												<a href="#">
													<i class="fa fa-search"></i> Consultar todos
												</a>
											</div>
										</li>
								</ul>
								<?php } else{?>
								<ul class="list-unstyled"><strong>Sin Pendientes</strong> 
								</ul><?php }?>
							</div>
							<!-- End Panel Body -->
						</div>
						<!-- End Clientes por autorizar -->
					</div>

					<div class="col-lg-6" name="pend" id="pend">
						<!-- Clientes por autorizar -->
						<div class="card border-0" >
							<div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15" >
								<?php $t=0;
										if (isset($consulta_gral)) {
									 foreach($consulta_gral as $f){
										$t++;

									}} ?>

								<h3 class="h6 mb-0">
									
									<i class="icon-directions g-pos-rel g-top-1 g-mr-5"></i> Accesos pendientes <span class="d-inline-block text-center g-min-width-35 g-bg-red g-font-size-12 g-color-white g-rounded-15 g-px-8 g-py-1"><?php echo $t;?></span>
								</h3>
									

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

							<div class="js-scrollbar card-block  u-info-v1-1 g-bg-white-gradient-v1--after g-height-400 g-pa-0 " >
								<?php if (isset($consulta_gral)) {?>
								<ul class="list-unstyled"><?php
									foreach($consulta_gral as $fila){
											$id=$fila->id_cliente;
											$a="activar";
											$r="rechazo";
										?>
										<li class="d-flex justify-content-start g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-10">
											<div class="g-mt-2">
												<span class="u-icon-v3 g-rounded-50x g-mr-15 g-mb-15 g-width-40 g-height-40">
													<i class="hs-admin-user u-line-icon-pro"></i>
												</span>
												<!--<img class="g-width-50 g-height-50 rounded-circle" src="<?php echo base_url(); ?>assets/img-temp/100x100/img17.jpg" alt="Image Description">-->
											</div>
											<div class="align-self-center g-px-10">
												<h5 class="h6 g-font-weight-600 g-color-black g-mb-3">
													<span class="g-mr-5"><? echo $fila->nombreLegal;?></span>
													<small class="g-font-size-12 g-color-blue">
														<i class="hs-admin-alarm-clock"></i> <?php echo date('d/m/Y',$fila->fechaAlta);?>
													</small>
												</h5>
												<p class="m-0"><? echo $fila->nombreRepresentante;?></p>
											</div>
											<!--<div class="align-self-center ml-auto">
												<span class="u-label u-label--sm g-bg-blue g-rounded-20 g-px-10">$25 / hr</span>
											</div>-->
											<div class="align-self-center ml-auto">
												<a onclick="pendientes(<?php echo '\''.$a.'\',\''.$id.'\''?>);" name="<?php echo "activa".$id;?>" id="<?php echo "activa".$id;?>" style="display:inline-block" data-toggle="tooltip" title="Autorizar acceso">
													<span class="u-icon-v1 u-icon-size--sm g-bg-green--hover g-color-white--hover ">
														<i class="fa fa-check g-color-green g-color-white--hover"></i>
													</span>									
												</a>
												<a name="<?php echo "rechazo".$id;?>" id="<? echo "rechazo".$id;?>" onclick="pendientes(<?php echo '\''.$r.'\',\''.$id.'\''?>);" style="display:inline-block" data-toggle="tooltip" title="Rechazar">
													<span class="u-icon-v1 u-icon-size--sm g-bg-red--hover g-color-white--hover ">
														<i class="fa fa-close"></i>
													</span>									
												</a>
											</div>
										</li>
									<?php
									}
									 ?>
										<li class="d-flex justify-content-start g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-10">
											<div class="m-auto">
												<a href="#">
													<i class="fa fa-search"></i> Consultar todos
												</a>
											</div>
										</li>

									<!--<li class="d-flex justify-content-start g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-10">
										<div class="g-mt-2">
											<img class="g-width-50 g-height-50 rounded-circle" src="<?php echo base_url(); ?>assets/img-temp/100x100/img5.jpg" alt="Image Description">
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
								<?php } else{?>
								<ul class="list-unstyled"><strong>Sin Pendientes</strong> 
								</ul><?php }?>
							</div>
						</div>
						<!-- End Clientes por autorizar -->
					</div>
				</div>
				<!-- End Panel Solicitudes y clientes -->

				<!-- Paneles Notificaciones y Actividades -->
				<div class="row g-mb-20">
					<div class="col-lg-6 g-mb-40 g-mb-0--lg">
						<!-- Panel de notificaciones -->
						<div class="card border-0">
							<div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
								<h3 class="h6 mb-0">
									<i class="icon-list g-pos-rel g-top-1 g-mr-5"></i> Notificaciones <span class="d-inline-block text-center g-min-width-35 g-bg-red g-font-size-12 g-color-white g-rounded-15 g-px-8 g-py-1">5</span>
								</h3>
								<div class="dropdown g-mb-10 g-mb-0--md">
									<span class="d-block g-color-primary--hover g-cursor-pointer g-mr-minus-5 g-pa-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="icon-options-vertical g-pos-rel g-top-1"></i>
									</span>
									<div class="dropdown-menu dropdown-menu-right rounded-0 g-mt-10">
										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-fire g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Reportes
										</a>
										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-settings g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Configuración de usuario
										</a>

										<div class="dropdown-divider"></div>

										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-plus g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Ver más
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
											<img class="g-width-40 g-height-40 g-rounded-50x" src="<?php echo base_url(); ?>assets/img-temp/100x100/img5.jpg" alt="Image Description">
										</div>
										<div class="media-body">
											<p class="m-0"><strong>Yasser Martínez</strong> ha cargado una nueva solicitud.</p>
											<span class="g-font-size-12 g-color-gray">Hace 2 horas</span>
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
											<img class="g-width-40 g-height-40 g-rounded-50x" src="<?php echo base_url(); ?>assets/img-temp/100x100/img14.jpg" alt="Image Description">
										</div>
										<div class="media-body">
											<p class="m-0"><strong>Nom adm.</strong> envio una cotización.</p>
											<span class="g-font-size-12">Hace 5 minutos</span>
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
											<img class="g-width-40 g-height-40 g-rounded-50x" src="<?php echo base_url(); ?>assets/img-temp/100x100/img4.jpg" alt="Image Description">
										</div>
										<div class="media-body">
											<p class="m-0"><strong>Nom. representante</strong> ha aceptado una cotización</p>
											<span class="g-font-size-12 g-color-gray">Hace 5 dias</span>
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
											<p class="m-0"><strong>Nom. representante</strong> ha cargado un comprobante de pago.</p>
											<span class="g-font-size-12 g-color-gray">Hace 2 horas</span>
										</div>
									</div>
								</div>
								<!-- End Alert Purple -->
							</div>
						</div>
						<!-- End Panel de notificaciones -->
					</div>

					<div class="col-lg-6">
						<!-- Panel actividades -->
						<div class="card border-0">
							<div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
								<h3 class="h6 mb-0">
									<i class="icon-directions g-pos-rel g-top-1 g-mr-5"></i> Actividades <span class="d-inline-block text-center g-min-width-35 g-bg-red g-font-size-12 g-color-white g-rounded-15 g-px-8 g-py-1">5</span>
								</h3>
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

							<div class="js-scrollbar card-block  u-info-v1-1 g-bg-white-gradient-v1--after g-height-300 g-pa-0">
							<?php 
							for ($i=0; $i < 5; $i++) { 
							?>
								<!-- Actividad -->
								<article class="media g-mb-20">
									<a class="d-flex mr-3" href="#!">
										<img class="rounded-circle g-width-40 g-height-40" src="<?php echo base_url(); ?>assets/img-temp/100x100/img1.jpg" alt="Image Description">
									</a>

									<div class="media-body">
										<h3 class="h6">
											<span class="g-color-black g-font-weight-600">Nom. entidad</span>
											<a class="g-color-gray-dark-v4 g-mr-5" href="#!"><i class="icon-user"></i> Nom. representante</a>
											<span class="small text-nowrap g-color-blue">dd/mm/yyyy</span>
											
										</h3>
										<p class="g-color-gray-dark-v4 g-mb-5">
											#ID:<?= $i; ?> Revisar solicitud
										</p>
										<a href="#!">Realizar actividad</a>
									</div>
								</article>
								<!-- End Actividad -->

								<hr class="g-brd-gray-light-v4 g-mt-15 g-mb-20">

								<!-- Actividad -->
								<article class="media g-mb-20">
									<a class="d-flex mr-3" href="#!">
										<img class="rounded-circle g-width-40 g-height-40" src="<?php echo base_url(); ?>assets/img-temp/100x100/img3.jpg" alt="Image Description">
									</a>

									<div class="media-body">
										<h3 class="h6">
											<span class="g-color-black g-font-weight-600">Nom. entidad</span>
											<a class="g-color-gray-dark-v4 g-mr-5" href="#!"><i class="icon-user"></i> Nom. representante</a>
											<span class="small text-nowrap g-color-blue">dd/mm/yyyy</span>
										</h3>
										<p class="g-color-gray-dark-v4 g-mb-5">
											#ID:<?= $i; ?>  Enviar cotización
										</p>
										<a href="#!">Realizar actividad</a>
									</div>
								</article>
								<!-- End Actividad -->
							<?php
							}
							 ?>

							</div>
						</div>
						<!-- End Panel actividades -->
					</div>
				</div>
				<!-- End Paneles Notificaciones y Actividades -->



			</div>
			<!-- End Profile Content -->
		</div>
	</div>

           
<!-- ejemplo de la grafica 

	<div class="chart-container">
		<canvas id="canvasGrafica"></canvas>
	</div>
-->
<script type="text/javascript">
	var base_url="<? echo base_url();?>";
	//var norma="<? $norma;?>";


</script>

<script type="text/javascript">
function pendientes(x,y){

var accion=x;
var id=y;

	

 $.ajax({  
                     url:base_url+"backend/administrador/clientes/cCliente/estatus2/"+accion+"/"+id+"", 


                     method:"POST",
                    //data:{idproducto:idproducto,anexo1:anexo1,anexo2:anexo2},
		            	success: function(data) {
 		            			
		            		$("#pend").load(base_url+'backend/administrador/clientes/cCliente/tabla');


		            	}
		});



}
</script>