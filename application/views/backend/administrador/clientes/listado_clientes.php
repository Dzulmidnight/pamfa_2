<div class="g-pa-20">
	<div class="row">
		<div class="col-lg-12">
			<div class="row g-mb-0">
				<div class="col-md-12 g-mb-0 g-mb-0--d">
					<div class="card border-0 rounded-0 g-mb-50">
						<div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
							<h3 class="h6 mb-0">
								<i class="icon-people g-pos-rel g-top-1 g-mr-5"></i> CLIENTES
							</h3>							
						</div>

						<div class="card-block u-info-v1-1 g-bg-white-gradient-v1--after g-height-300 g-pa-10">
							<div class="table-responsive">
								<table class="table table-striped table-condensed g-font-size-12">
									<thead>
										<tr>
											<th>
												ID
											</th>
											<th>
												Estatus
											</th>
											<th>Entidad</th>
											<th>Representante</th>
											<th>Dirección</th>
											<th>Email</th>
											<th colspan="2">Telefono</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($consulta_gral as $fila) {
											# code...
										?>
										<tr>
											<!-- ID -->
											<td>
												#1
											</td>
											<!-- Estatus -->
											<td>
												<span class="u-label u-label-success g-mr-10 g-mb-15">Activo</span>
											</td>
											<!-- Entidad -->
											<td>
												<a href="<?php echo base_url('backend/administrador/clientes/clientes/detalleCliente/'.$fila->id_cliente); ?>">
													<i class="fa fa-search"></i> <?php echo $fila->nombreLegal; ?>
												</a>
											</td>
											<!-- Representante -->
											<td>
												<?php echo $fila->nombreRepresentante; ?>
											</td>

											<!-- Dirección -->
											<td>
												<?php echo $fila->direccion.", ".$fila->colonia.", ".$fila->municipio.", ".$fila->estado.", ".$fila->nombre; ?>
											</td>
											<!-- Email -->
											<td>
												<?php echo $fila->email; ?>
											</td>
											<!-- Telefono -->
											<td>
												<?php echo $fila->telefono; ?>
											</td>
											<!-- Acciones -->
											<td class="text-right">
												<!-- acciones -->
												<div class="g-pos-rel g-top- d-inline-block">
												<a id="dropDown3_1Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-lightblue-v3--hover" href="#!" aria-controls="dropDown3_1" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown3_1">
														<i class="hs-admin-more-alt"></i>
													</a>

													<div id="dropDown3_1" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white" aria-labelledby="dropDown3_1Invoker">
														<ul class="list-unstyled g-nowrap mb-0">
															<li>
																<a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" name="" href="#">
																	<i class="hs-admin-check g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
																	Activar
																</a>
															</li>
															<li>
																<a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" name="" href="#">
																	<i class="hs-admin-close g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
																	Cancelar
																</a>
															</li>

															<li>
																<a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
																	<i class="hs-admin-archive g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
																	Consultar
																</a>
															</li>
															<li>
																<a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
																	<i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
																	Editar
																</a>
															</li>
															<li>
																<a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" name="" href="#">
																	<i class="hs-admin-trash g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
																	
		                                                            Eliminar
																</a>
															</li>
														</ul>
													</div>
												</div>
												<!-- End acciones -->
											</td>
										</tr>
									<?php }?>
									</tbody>
								</table>
							</div>
						</div>
	
					</div>				
				</div>
			</div>
		</div>
	</div>
</div>