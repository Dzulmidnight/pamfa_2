<div class="g-pa-20">
	<div class="row">
		<div class="col-lg-12">

		</div>
		<!-- inicia col-md-12 -->
		<div class="col-lg-12">

			<div class="row g-mb-0">
				<div class="col-md-12 g-mb-0 g-mn-0--md">
					<div class="card border-0 rounded-0 g-mb-50 g-pa-10">
						<!-- Panel Header -->
						<div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
							<div class="row">
								<div class="col-md-12">
									<h3 class="h6 mb-0">
										<i class="icon-layers g-pos-rel g-top-1 g-mr-5"></i> Solicitudes en Proceso
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
						<table class="table table-striped g-font-size-12">
							<thead>
								<tr>
									<th>
										#ID Solicitud
									</th>
									<th>
										Cliente
									</th>
									<th>
										Esquema(s)
									</th>
									<th>
										Progreso
									</th>
									<th>
										<a href="#" data-toggle="tooltip" title="Etapa actual">
											<i class="icon-exclamation"></i> Etapa
										</a>
									</th>
									<th>
										...
									</th>
								</tr>
							</thead>
							<tbody>
								
									<?php foreach($consulta_solicitudes4 as $fila){
										
										
									?>
										<tr>
											<td>
												<a  class="btn btn-sm btn-info" href="<?php echo base_url('backend/administrador/solicitud/solicitudes/nueva_solicitud/'.$fila->id_solicitud.'/'.$fila->fk_id_cliente.''); ?>">
												<?php echo "# ". $fila->id_solicitud." Consultar"?>
											</a>
												<br>
												<span class="text-muted">
													<i class="icon-clock"><?php echo date('d/m/Y',$fila->fecha);?>
												</span>
											</td>

											<td>
												<a href="#">
													<i class="icon-magnifier"></i> <?php echo  $fila->nombreLegal ?>
												</a>
											</td>
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


											<!-- Barra de progreso -->
											<td style="width: 20%" data-toggle="tooltip" title="Detalle del proceso">
												<a href="<?php echo base_url('backend/administrador/certificacion/ProcesosCertificacion'); ?>" >
													<div class="progress g-height-10 rounded-0 g-overflow-visible g-mb-20">
														<div class="progress-bar g-pos-rel" role="progressbar" style="width: 64%;background: #e6a821" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100">
															<div class="text-center u-progress__pointer-v1 g-font-size-11 g-color-white g-bg-lightbrown g-rounded-50x">64%</div>
														</div>
													</div>
												</a>
											</td>

											<td>
												<i class="fa fa-gear"></i> Etapa 5
											</td>
											
											<!-- acciones -->
											<td>
												<div class="g-pos-rel g-top-3 d-inline-block">
													<a id="dropDown2Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-lightblue-v3--hover" href="#!" aria-controls="dropDown2" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown1">
														<i class="hs-admin-more-alt"></i>
													</a>

													<div id="dropDown1" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white" aria-labelledby="dropDown2Invoker">
														<ul class="list-unstyled g-nowrap mb-0">
															<li>
																<a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#">
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
									<?php
									}
								 ?>
							</tbody>
						</table>
						<!-- End Panel body -->
					</div>
				</div>
			</div>

		</div>
		<!-- termina col-md-12 -->
	</div>
</div>
