<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
	<div class="g-bg-lightblue-v10-opacity-0_5 g-pa-20">
<!------------------------------------------------------------------------>



		<div class="row">

			<div class="col-md-6">
				<div class="card g-brd-gray-light-v7 g-mb-10">
					<!-- inicia tabla accesos pendientes -->
					<div class="g-pa-10">

						<header class="g-mb-20">
							<h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">ACCESOS PENDIENTES</h2>
						</header>

						<table class="table table-condensed table-striped g-font-size-12">
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
											<a style="padding:0px;width: 100%" href="#">
												Yasser Martínez
											</a>
										</td>
										<td style="padding:0px;padding-top: 10px;">
											Inforganic Technologies
										</td>
										<td>
											<span class="u-icon-v1 g-color-yellow" data-toggle="tooltip" title="Pendiente">
												<i class="fa fa-history"></i>
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
					<!-- termina tabla accesos pendientes -->
				</div>
			</div>


			<!-- inicia sección solicitudes por revisar -->
			<div class="col-md-6">
				<div class="card g-brd-gray-light-v7 g-mb-30">
					<div class="g-pa-10">
						<header class="g-mb-20">
							<h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">
								SOLICITUDES PENDIENTES
							</h2>
						</header>
						<!-- inicia tabla de solicitudes por revisar -->
						<table class="table table-bordered g-font-size-12">
							<thead>
								<tr>
									<th>
										ID
									</th>
									<th style="font-size: 12px;">
										Fecha solicitud
									</th>
									<th>
										Cliente
									</th>
									<th>
										Esquema Solicitado
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
								<tr>
									<!-- id solicitud -->
									<td>
										1
									</td>
									<!-- fecha de envio de la solicitud -->
									<td>
										03/09/2018
									</td>
									<!-- nombre del cliente -->
									<td>
										Cliente de prueba
									</td>
									<!-- esquemas que estan solicitando -->
									<td>
										<a href="#">Global Gap IFA</a>, <a href="#">Global Gap CoC</a>, <a href="#">SRRC</a>, <a href="#">México Calidad Suprema</a>, <a href="#">Hecho en México</a>, <a href="#">Denominación de Origen</a>
									</td>
									<!-- estatus general de la solicitud -->
									<td>
										<span class="u-label u-label-warning g-color-white">Pendiente</span>
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
									<!-- botón de accioens -->
									<!--<td>
										<div class="g-pos-rel g-top-3 d-inline-block">
											<!-- se debe cambiar el ID para vincular las acciones ej: accionesSolicitud1 - n -->
											<!-- se debe cambiar el aria-controls , data-dropdown-target para vincular el DIV ej: #dropDownSolicitud 1 -n -->
											<a id="accionesSolicitud1" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-lightblue-v3--hover" href="#!" aria-controls="dropDownSolicitud1" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDownSolicitud1">
												<i class="hs-admin-more-alt"></i>
											</a>

											<div id="dropDownSolicitud1" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white" aria-labelledby="accionesSolicitud1">
												<ul class="list-unstyled g-nowrap mb-0">
													<li>
														<a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
														<i class="hs-admin-check g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
														Autorizar
														</a>
													</li>

													<li>
														<a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
														<i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
														Editar
														</a>
													</li>
													<li>
														<a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
														<i class="hs-admin-archive g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
														Archivar
														</a>
													</li>
													<li>
														<a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
														<i class="hs-admin-trash g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
														Eliminar
														</a>
													</li>
												</ul>
											</div>
										<!--</div>
									</td>-->
								</tr>
							</tbody>
						</table>
						<!-- termina tabla de solicitudes por revisar -->
					</div>
				</div>
			</div>


		</div>

           


