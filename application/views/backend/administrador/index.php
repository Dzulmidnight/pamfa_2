<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
	<div class="g-bg-lightblue-v10-opacity-0_5 g-pa-20">
<!------------------------------------------------------------------------>



		<div class="row">

			<div class="col-md-5">
				<div class="card g-brd-gray-light-v7 g-mb-30">
					<!-- inicia tabla accesos pendientes -->
					<div class="g-pa-20">

						<header class="g-mb-20">
							<h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">ACCESOS PENDIENTES</h2>
						</header>

						<table class="table table-striped font-size-12">
							<thead>
								<tr>
									<th>#</th>
									<th>Representante</th>
									<th>Entidad lega</th>
									<th>Estatus</th>
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
										<td>
											<?= $i; ?>
										</td>
										<td>
											<a href="#">
												Yasser Martínez
											</a>
										</td>
										<td>
											Oaxaca
										</td>
										<td>
											<span class="u-label u-label-warning g-color-white">Pendiente</span>
										</td>
										<td>
											<a href="#" style="display:inline-block" data-toggle="tooltip" title="Autorizar">
												<span class="u-icon-v1 g-bg-primary--hover g-color-white--hover g-mr-5 g-mb-5">
													<i class="fa fa-check"></i>
												</span>									
											</a>
											<a href="#" style="display:inline-block" data-toggle="tooltip" title="Rechazar">
												<span class="u-icon-v1 g-bg-red--hover g-color-white--hover g-mr-5 g-mb-5">
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

						<div class="table-responsive g-mb-40">
							<table class="table table-bordered table-condensed" style="font-size:12px;">
								<thead style="font-size:12px;">
									<tr>
										<th>#</th>
										<th>Representante</th>
										<th>Entidad legal</th>
										<th>Estado</th>
										<th>Estatus</th>
										<th>Acciones</th>
									</tr>
								</thead>
			
								<tbody>

									<tr>
										<td>1</td>
										<td>Stella Chandler</td>
										<td>Dropbox Inc.</td>
										<td>Michoacan</td>
										<td>
											<span class="u-label u-label-warning g-color-white">Pendiente</span>
										</td>
										<td>
											<div class="g-pos-rel g-top-3 d-inline-block">
												<a id="dropDown2Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-lightblue-v3--hover" href="#!" aria-controls="dropDown2" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown2">
													<i class="hs-admin-more-alt"></i>
												</a>

												<div id="dropDown2" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white" aria-labelledby="dropDown2Invoker">
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
											</div>
										</td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
					<!-- termina tabla accesos pendientes -->
				</div>
			</div>


			<!-- inicia sección solicitudes por revisar -->
			<div class="col-md-7">
				<div class="card g-brd-gray-light-v7 g-mb-30">
					<div class="g-pa-20">
						<header class="g-mb-20">
							<h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">Solicitudes por Revisar</h2>
						</header>
						<!-- inicia tabla de solicitudes por revisar -->
						<table class="table table-bordered g-font-size-12">
							<thead>
								<tr>
									<th>
										#ID
									</th>
									<th>
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
										<a href="#!" class="btn btn-xs u-btn-outline-blue g-mr-10 g-mb-15">#1 Consultar</a>
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
									<!-- botón de accioens -->
									<td>
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
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<!-- termina tabla de solicitudes por revisar -->
					</div>
				</div>
			</div>


		</div>

           


