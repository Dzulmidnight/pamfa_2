<div class="g-pa-20">
	<div class="row">
		<!-- inicia col-md-12 -->
		<div class="col-lg-12">

			<div class="row g-mb-0">
				<div class="col-md-12 g-mb-0 g-mn-0--md">
					<div class="card border-0 rounded-0 g-mb-50">
						<!-- Panel Header -->
						<div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
							<div class="row">
								<div class="col-md-12">
									<h3 class="h6 mb-0">
										<i class="icon-layers g-pos-rel g-top-1 g-mr-5"></i> Solicitudes pendientes
									</h3>
								</div>
								<div class="col-md-12">
									<!-- Border Alert -->
									<div class="alert fade show g-brd-around g-brd-gray-light-v3 rounded-0" role="alert">
										<div class="media">
											<div class="d-flex g-mr-10">
												<span class="u-icon-v3 u-icon-size--sm g-bg-blue g-color-white g-rounded-50x">
													<i class="et-icon-lightbulb"></i>
												</span>
											</div>
											<div class="media-body">
												<p class="m-0 g-font-size-14">Se necesita cargar y enviar una cotización</p>
											</div>
										</div>
									</div>
									<!-- End Border Alert -->
								</div>
							</div>
							
							<div class="dropdown g-mb-10 g-mb-0--md">
								<span class="d-block g-color-primary--hover g-cursor-pointer g-mr-minus-5 g-pa-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="icon-options-vertical g-pos-rel g-top-1"></i>
								</span>
								<div class="dropdown-menu dropdown-menu-right rounded-0 g-mt-10">
									<a class="dropdown-item g-px-10" href="#!">
										<i class="fa fa-line-chart g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Estadisticas
									</a>
 									<div class="dropdown-divider"></div>
									<a class="dropdown-item g-px-10" href="#!">
										<i class="fa fa-file-pdf-o g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> PDF
									</a>
									<a class="dropdown-item g-px-10" href="#!">
										<i class="fa fa-file-excel-o g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Excel
									</a>
								</div>
							</div>
						</div>
						<!-- End Panel Header -->

						<!-- Panel body -->
						<div class="js-scrollbar card-block u-info-v1-1 g-bg-white-gradient-v1--after g-height-300 g-pa-10">
							<table class="table table-striped g-font-size-12">
								<thead>
									<tr>
										<th>
											#ID
										</th>
										<th>
											Fecha
										</th>
										<th>
											Cliente
										</th>
										<th>
											Esquema
										</th>
										<th>
											Observaciones
										</th>
										<th>
											Cotización
										</th>
										<th>
											Acciones
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<!-- id de la solicitud -->
										<td>
											<a href="#" class="btn btn-sm btn-info">
												#1 Consultar
											</a>
										</td>
										<!-- fecha en la que se envio la solicitud *** SE DEBE ORDENAR POR FECHAS MAYOR a menor -->
										<td>
											dd/mm/yyyy
										</td>
										<!-- nombre del cliente -->
										<td>
											<a href="#">
												<i class="icon-magnifier"></i> Nombre del cliente
											</a>
										</td>
										<!-- esquema que esta solicitando -->
										<td>
											<span class="u-label g-bg-primary g-rounded-20 g-px-15 g-mr-10 g-mb-15">Nom esquema</span>
											<span class="u-label g-bg-primary g-rounded-20 g-px-15 g-mr-10 g-mb-15">Nom esquema</span>
											<span class="u-label g-bg-primary g-rounded-20 g-px-15 g-mr-10 g-mb-15">Nom esquema</span>
										</td>
										<!-- observaciones realizadas -->
										<td>
											<a class="btn btn-sm u-btn-outline-blue g-mr-10 g-mb-15 nav-link" href="#!">
												<span class="float-right u-label u-label-num u-label--sm u-label-default g-color-white g-rounded-15 g-ml-5">4</span>
											    Observaciones
											</a>
										</td>
										
										<!-- botón para cargar la cotización -->
										<td>
											<!-- Large modal -->
											<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
												Cargar cotización
											</button>
											
											<!-- modal cotización -->
											<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
												<div class="modal-dialog modal-lg" role="document">
													<div class="modal-content">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos numquam, facilis impedit nesciunt dolor fuga eum iste vero quia optio nostrum non temporibus cupiditate perferendis, aliquam maiores iusto totam, omnis!
													</div>
												</div>
											</div>
											<!-- End modal cotización -->

										</td>
										<!-- acciones -->
										<td>
											<div class="g-pos-rel g-top-3 d-inline-block">
												<a id="dropDown2Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-lightblue-v3--hover" href="#!" aria-controls="dropDown2" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown2">
													<i class="hs-admin-more-alt"></i>
												</a>

												<div id="dropDown2" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white" aria-labelledby="dropDown2Invoker">
													<ul class="list-unstyled g-nowrap mb-0">
														<li>
															<a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
															<i class="icon-magnifier g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
															Consultar<br>solicitud
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
									<tr>
										<!-- id de la solicitud -->
										<td>
											<a href="#" class="btn btn-sm btn-info">
												#1 Consultar
											</a>
										</td>
										<!-- fecha en la que se envio la solicitud *** SE DEBE ORDENAR POR FECHAS MAYOR a menor -->
										<td>
											dd/mm/yyyy
										</td>
										<!-- nombre del cliente -->
										<td>
											<a href="#">
												<i class="icon-magnifier"></i> Nombre del cliente
											</a>
										</td>
										<!-- esquema que esta solicitando -->
										<td>
											<span class="u-label g-bg-primary g-rounded-20 g-px-15 g-mr-10 g-mb-15">Nom esquema</span>
											<span class="u-label g-bg-primary g-rounded-20 g-px-15 g-mr-10 g-mb-15">Nom esquema</span>
											<span class="u-label g-bg-primary g-rounded-20 g-px-15 g-mr-10 g-mb-15">Nom esquema</span>
										</td>
										<!-- observaciones realizadas -->
										<td>
											<a class="btn btn-sm u-btn-outline-blue g-mr-10 g-mb-15 nav-link" href="#!">
												<span class="float-right u-label u-label-num u-label--sm u-label-default g-color-white g-rounded-15 g-ml-5">4</span>
											    Observaciones
											</a>
										</td>
										
										<!-- botón para cargar la cotización -->
										<td>
											<!-- Large modal -->
											<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
												Cargar cotización
											</button>
											
											<!-- modal cotización -->
											<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
												<div class="modal-dialog modal-lg" role="document">
													<div class="modal-content">
														<div class="row">
															<div class="col-md-12">
																Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, iusto deleniti quae nam veniam numquam! Molestiae perferendis sit accusamus tempore maiores in reiciendis, nihil numquam quis, adipisci expedita quia error!
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- End modal cotización -->

										</td>
										<!-- acciones -->
										<td>
											<div class="g-pos-rel g-top-3 d-inline-block">
												<a id="dropDown2Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-lightblue-v3--hover" href="#!" aria-controls="dropDown2" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown2">
													<i class="hs-admin-more-alt"></i>
												</a>

												<div id="dropDown2" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white" aria-labelledby="dropDown2Invoker">
													<ul class="list-unstyled g-nowrap mb-0">
														<li>
															<a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
															<i class="icon-magnifier g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
															Consultar<br>solicitud
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
						<!-- End Panel body -->
					</div>
				</div>
			</div>

		</div>
		<!-- termina col-md-12 -->
	</div>
</div>