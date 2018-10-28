<div class="g-pa-20">
	<div class="row">
		<div class="col-lg-12">

		</div>
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
									<?php foreach($consulta_solicitudes as $fila){?>
									<tr>
										<!-- id de la solicitud -->
										<td>
											<a  class="btn btn-sm btn-info" href="<?php echo base_url('backend/administrador/solicitud/solicitudes/nueva_solicitud/'.$fila->id_solicitud.'/'.$fila->fk_id_cliente.''); ?>">
												<?php echo "# ". $fila->id_solicitud." Consultar"?>
											</a>
										</td>
										<!-- fecha en la que se envio la solicitud *** SE DEBE ORDENAR POR FECHAS MAYOR a menor -->
										<td>
											<?php echo date('d/m/Y',$fila->fecha);?>
										</td>
										<!-- nombre del cliente -->
										<td>
											<a href="#">
												<i class="icon-magnifier"></i> <?php echo  $fila->nombreLegal ?>
											</a>
										</td>
										<!-- esquema que esta solicitando -->
										<td>
											
												<?php if ($fila->global_ifa!=null) {
													?><span class="u-label g-bg-primary g-rounded-20 g-px-15 g-mr-10 g-mb-15">IFA</span><?
												}?>
												<?php if ($fila->global_coc!=null) {
													?>
												<span class="u-label g-bg-primary g-rounded-20 g-px-15 g-mr-10 g-mb-15">CoC</span>
												<?
												}?>
												<?php if ($fila->srrc!=null) {
													?>
												<span class="u-label g-bg-primary g-rounded-20 g-px-15 g-mr-10 g-mb-15">SRRC</span>
												<?
												}?>
												<?php if ($fila->mcs!=null) {
													?>
												<span class="u-label g-bg-primary g-rounded-20 g-px-15 g-mr-10 g-mb-15">Méx. Calidad Sup.</span>
												<?
												}?>
												<?php if ($fila->hecho_mexico!=null) {
													?>
												<span class="u-label g-bg-primary g-rounded-20 g-px-15 g-mr-10 g-mb-15">Hecho en Mex.</span>
												<?
												}?>
												<?php if ($fila->den_origen!=null) {
													?>
												<span class="u-label g-bg-primary g-rounded-20 g-px-15 g-mr-10 g-mb-15">Denominación de Origen</span>
												<?
												}?>

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
											<a href="<?php echo base_url('backend/administrador/cotizaciones/main'); ?>" class="btn btn-primary">
												Cargar cotización
											</a>
											<!--<button type="button" class="btn btn-primary" data-modal-target="#modal1" data-modal-effect="fadein">
												Cargar cotización
											</button>-->

											<!-- Modal Cotización -->
											<!--<div id="modal1" class="text-left g-max-width-800 g-bg-white g-overflow-y-auto g-pa-20" style="display: none;">
												<button type="button" class="close" onclick="Custombox.modal.close();">
													<i class="hs-icon hs-icon-close"></i>
												</button>
												<h4 class="g-mb-20">
													<div class="text-left">
														Cotización Nº: <?= '<span class="g-color-green">CTZ'.$fila->id_solicitud.'</span>' ?>
													</div>
												</h4>
												
												<div class="row">
													<div class="col-md-6">
														<div class="form-group g-mb-30">
															<label class="g-mb-10" for="inputGroup-1_3">Fecha</label>

															<div class="g-pos-rel">
																<input id="inputGroup-1_3" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="date" placeholder="dd/mm/aaaa">
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group g-mb-30">
															<label class="g-mb-10" for="inputGroup-1_3">Cliente</label>

															<div class="g-pos-rel">
																<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																	<i class="hs-admin-pencil g-absolute-centered g-font-size-16 g-color-gray-light-v6"></i>
																</span>
																<input id="inputGroup-1_3" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Cliente" value="<?= $fila->nombreLegal ?>">
															</div>
														</div>
													</div>

												</div>
												<p>
													
												</p>
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
												specimen book.</p>
												<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
												recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
											</div>-->
											<!-- End Modal Cotización -->

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
															<a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="<?php echo base_url('backend/administrador/solicitud/solicitudes/nueva_solicitud/'.$fila->id_solicitud.'/'.$fila->fk_id_cliente.''); ?>">
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
									
									<?php }?>
										
									
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