<script src="<?php echo base_url(); ?>admin/assets/vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>admin/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<div class="g-pa-20">
	<div class="row g-mb-0">
		<div class="col-md-12">
			<button class="btn u-btn-bluegray" onclick="history.back(-1)">
				<i class="glyph-icon icon-arrow-left"></i> Regresar
			</button>
		</div>
		<div class="col-md-12 g-mb-0 g-mn-0--md">
			<div class="card border-0 rounded-0 g-mb-50">
				<!-- Proceso de cotización -->
				<div class="container g-pt-40 g-pb-70">
					<h3 class="g-mb-30">
						Revisión de documentos y desición
					</h3>
				  	<form class="js-validate js-step-form" data-progress-id="#stepFormProgress" data-steps-id="#stepFormSteps">
						<div class="g-mb-100">
							<!-- Titulo de los pasos -->
							<ul id="stepFormProgress" class="js-step-progress row justify-content-center list-inline text-center g-font-size-17 mb-0">
								<li class="col-2 list-inline-item g-mb-20 g-mb-0--sm">
									<span class="d-block u-icon-v2 u-icon-size--sm g-rounded-50x g-brd-primary g-color-primary g-color-white--parent-active g-bg-primary--active g-color-white--checked g-bg-primary--checked mx-auto mb-3">
										 <?php if (!isset($consulta_verificacion)) {?> 
										 <i class="g-font-style-normal g-font-weight-700 g-hide-check">1</i>
										<i class="fa fa-check g-show-check"></i> 
											
										<?php } else {?><i class="fa fa-check "></i> <?}?>
										
									</span>
									<h4 class="g-font-size-16 text-uppercase mb-0">Verificación datos</h4>
								</li>

								<li class="col-2 list-inline-item g-mb-20 g-mb-0--sm">
									<span class="d-block u-icon-v2 u-icon-size--sm g-rounded-50x g-brd-gray-light-v2 g-color-gray-dark-v5 g-brd-primary--active g-color-white--parent-active g-bg-primary--active g-color-white--checked g-bg-primary--checked mx-auto mb-3">
										<?php if (!isset($consulta_condicion)) {?> 
										 <i class="g-font-style-normal g-font-weight-700 g-hide-check">2</i>
										<i class="fa fa-check g-show-check"></i>
 											
										<?php } else {?><i class="fa fa-check "></i> <?}?>
									</span>
									<h4 class="g-font-size-16 text-uppercase mb-0">Condiciones internas</h4>
								</li>

								<li class="col-2 list-inline-item">
									<span class="d-block u-icon-v2 u-icon-size--sm g-rounded-50x g-brd-gray-light-v2 g-color-gray-dark-v5 g-brd-primary--active g-color-white--parent-active g-bg-primary--active g-color-white--checked g-bg-primary--checked mx-auto mb-3">
										<?php if (!isset($consulta_cotizacion) && !isset($consulta_rechazo)) {?> 
										 <i class="g-font-style-normal g-font-weight-700 g-hide-check">3</i>
										<i class="fa fa-check g-show-check"></i> 
											
										<?php } else {?><i class="fa fa-check "></i> <?}?>
									</span>
									<h4 class="g-font-size-16 text-uppercase mb-0">Desición</h4>
								</li>
								<li class="col-2 list-inline-item">
									<span class="d-block u-icon-v2 u-icon-size--sm g-rounded-50x g-brd-gray-light-v2 g-color-gray-dark-v5 g-brd-primary--active g-color-white--parent-active g-bg-primary--active g-color-white--checked g-bg-primary--checked mx-auto mb-3">
										<?php if (!isset($consulta_pago) || $consulta_pago->estatus=="no") {?> 
										 <i class="g-font-style-normal g-font-weight-700 g-hide-check">4</i>
										<i class="fa fa-check g-show-check"></i> 
											
										<?php } else {?><i class="fa fa-check "></i> <?}?>
									</span>
									<h4 class="g-font-size-16 text-uppercase mb-0">Verificación de pago</h4>
								</li>

							</ul>
							<!-- End Titulo de los pasos -->
						</div>

					    <div id="stepFormSteps">
							<!-- Verificación datos cliente -->
							<div id="step1" class="active">
								<div class="row">
									<div class="col-md-8 g-mb-30">
										<!-- Products Block -->
										<h3>
											Datos proporcionados por el cliente
										</h3>
										<div class="js-custom-scroll g-height-50vh--lg g-pa-15 g-pa-25--lg">
											<form id="verificacion" name="verificacion">
											<table class="text-left w-100">
												<thead class="h6 g-brd-bottom g-brd-gray-light-v3 g-color-black text-uppercase">
									
												</thead>

												<tbody>
													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															Datos fiscales
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(1)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="pregunta1" id="pregunta1" type="radio" value="cumple"
																<?php if (isset($consulta_verificacion) &&$consulta_verificacion->pregunta1=="cumple"){ ?>
																	checked=""
																<?php }?> >
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i> Cumple
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(1)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="pregunta1" id="p1" type="radio" value="no_cumple" <?php if (isset($consulta_verificacion) &&$consulta_verificacion->pregunta1=="no_cumple"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i> No Cumple
																</span>
															</label>
														</td>
														<td class="g-width-250">
															<div class="form-group">
																<div class="u-input-group-v1">
																	<textarea id="observacion1" name="observacion1" class="form-control form-control-md rounded-0 g-resize-none" name="message" rows="2"><?php if (isset($consulta_verificacion) ){echo $consulta_verificacion->observacion1;}?></textarea>
																	
																</div>
															</div>
														</td>
													</tr>

													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															Esquema de Certificación
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(1)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="pregunta2" id="pregunta2" type="radio" value="cumple" <?php if (isset($consulta_verificacion) && $consulta_verificacion->pregunta2=="cumple"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i> Cumple
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(1)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="pregunta2" id="p2" type="radio" value="no_cumple" <?php if (isset($consulta_verificacion) && $consulta_verificacion->pregunta2=="no_cumple"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i> No Cumple
																</span>
															</label>
														</td>
														<td class="g-width-250">
															<div class="form-group">
																<div class="u-input-group-v1">
																	<textarea id="observacion2" name="observacion2" class="form-control form-control-md rounded-0 g-resize-none" name="message" rows="2"><?php if (isset($consulta_verificacion) ){echo $consulta_verificacion->observacion2;}?></textarea>
																	
																</div>
															</div>
														</td>
													</tr>

													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															Datos de emplazamientos
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(1)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="pregunta3" id="pregunta3" type="radio" value="cumple"<?php if (isset($consulta_verificacion) && $consulta_verificacion->pregunta3=="cumple"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i> Cumple
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(1)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="pregunta3" id="p3" type="radio" value="no_cumple"<?php if (isset($consulta_verificacion) && $consulta_verificacion->pregunta3=="no_cumple"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i> No Cumple
																</span>
															</label>
														</td>
														<td class="g-width-250">
															<div class="form-group">
																<div class="u-input-group-v1">
																	<textarea id="observacion3" name="observacion3" class="form-control form-control-md rounded-0 g-resize-none" name="message" rows="2"><?php if (isset($consulta_verificacion) ){echo $consulta_verificacion->observacion3;}?></textarea>
																	
																</div>
															</div>
														</td>
													</tr>

													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															Datos de centros de manipulación
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(1)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="pregunta4" id="pregunta4" type="radio" value="cumple"<?php if (isset($consulta_verificacion) && $consulta_verificacion->pregunta4=="cumple"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i> Cumple
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(1)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="pregunta4" id="4" type="radio" value="no_cumple"<?php if (isset($consulta_verificacion) && $consulta_verificacion->pregunta4=="no_cumple"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i> No Cumple
																</span>
															</label>
														</td>
														<td class="g-width-250">
															<div class="form-group">
																<div class="u-input-group-v1">
																	<textarea id="observacion4" name="observacion4" class="form-control form-control-md rounded-0 g-resize-none" name="message" rows="2"><?php if (isset($consulta_verificacion) ){echo $consulta_verificacion->observacion4;}?></textarea>
																	
																</div>
															</div>
														</td>
													</tr>

													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															Superficie
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(1)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="pregunta5" id="pregunta5" type="radio" value="cumple"<?php if (isset($consulta_verificacion) && $consulta_verificacion->pregunta5=="cumple"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i> Cumple
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(1)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="pregunta5" id="p5" type="radio" value="no_cumple"<?php if (isset($consulta_verificacion) && $consulta_verificacion->pregunta5=="no_cumple"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i> No Cumple
																</span>
															</label>
														</td>
														<td class="g-width-250">
															<div class="form-group">
																<div class="u-input-group-v1">
																	<textarea id="observacion5" name="observacion5" class="form-control form-control-md rounded-0 g-resize-none" name="message" rows="2"><?php if (isset($consulta_verificacion) ){echo $consulta_verificacion->observacion5;}?></textarea>
																	
																</div>
															</div>
														</td>
													</tr>

													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															Periodo de cosecha
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(1)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="pregunta6" id="pregunta6" type="radio" value="cumple" <?php if (isset($consulta_verificacion) && $consulta_verificacion->pregunta6=="cumple"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i> Cumple
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(1)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="pregunta6" id="p6" type="radio" value="no_cumple" <?php if (isset($consulta_verificacion) && $consulta_verificacion->pregunta6=="no_cumple"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i> No Cumple
																</span>
															</label>
														</td>
														<td class="g-width-250">
															<div class="form-group">
																<div class="u-input-group-v1">
																	<textarea id="observacion6" name="observacion6" class="form-control form-control-md rounded-0 g-resize-none" name="message" rows="2"><?php if (isset($consulta_verificacion) ){echo $consulta_verificacion->observacion6;}?></textarea>
																	
																</div>
															</div>
														</td>
													</tr>

													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															Compromisos con otros Organismos de Certificación
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(1)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="pregunta7" id="pregunta7" type="radio" value="cumple" <?php if (isset($consulta_verificacion) && $consulta_verificacion->pregunta7=="cumple"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i> Cumple
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(1)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="pregunta7" id="p7" type="radio" value="no_cumple" <?php if (isset($consulta_verificacion) && $consulta_verificacion->pregunta7=="no_cumple"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i> No Cumple
																</span>
															</label>
														</td>
														<td class="g-width-250">
															<div class="form-group">
																<div class="u-input-group-v1">
																	<textarea id="observacion7" name="observacion7" class="form-control form-control-md rounded-0 g-resize-none" name="message" rows="2"><?php if (isset($consulta_verificacion) ){echo $consulta_verificacion->observacion7;}?></textarea>
																	
																</div>
															</div>
														</td>
													</tr>

													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															Firmado por el representante autorizado
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(1)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="pregunta8" id="pregunta8" type="radio" value="cumple" <?php if (isset($consulta_verificacion) && $consulta_verificacion->pregunta8=="cumple"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i> Cumple
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(1)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="pregunta8" id="p8" type="radio" value="no_cumple" <?php if (isset($consulta_verificacion) && $consulta_verificacion->pregunta8=="no_cumple"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i> No Cumple
																</span>
															</label>
														</td>
														<td class="g-width-250">
															<div class="form-group">
																<div class="u-input-group-v1">
																	<textarea id="observacion8" name="observacion8" class="form-control form-control-md rounded-0 g-resize-none" name="message" rows="2"><?php if (isset($consulta_verificacion) ){echo $consulta_verificacion->observacion8;}?></textarea>
																	
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
											</form>
										</div>
										<!-- End Products Block -->
									</div><?php
										 //foreach($consulta_cliente as $fila2){
										 	 foreach($consulta_sol_id as $fila){

               ?>
									<div class="col-md-4 g-mb-30">
										<!-- Summary -->
										<div class="g-bg-gray-light-v5 g-pa-20 g-pb-50 mb-4">
											<h4 class="h6 text-uppercase mb-3">Resumen</h4>

											<div class="d-flex justify-content-between mb-2">
												<span class="g-color-black">Fecha</span>
												<span class="g-color-black g-font-weight-300"><?php if (isset($consulta_verificacion) && $consulta_verificacion->fecha!=NULL){ 
																	echo date('d/m/Y',$consulta_verificacion->fecha);
																 }else{
													echo  date('d/m/Y', time()); }?>
												</span>
											</div>
											<div class="d-flex justify-content-between mb-2">
												<span class="g-color-black">Cliente</span>
												<span class="g-color-black g-font-weight-300">
													<?php echo $fila->nombreLegal;?>
												</span>
											</div>
											<div class="d-flex justify-content-between">
												<span class="g-color-black">Esquemas:              </span>
												<span class="g-color-black g-font-weight-300">
													<?php if ($fila->global_ifa!=null) {
													?><strong>[ IFA ] </strong> <?
												}?>
												<?php if ($fila->global_coc!=null) {
													?>
												<strong>[ Coc ] </strong> 
												<?
												}?>
												<?php if ($fila->srrc!=null) {
													?>
												<strong>[ SRRC ] </strong>
												<?
												}?>
												<?php if ($fila->mcs!=null) {
													?>
												<strong>[ Méx. Calidad Sup. ] </strong>
												<?
												}?>
												<?php if ($fila->hecho_mexico!=null) {
													?>
												<strong>[ Hecho en Mex. ] </strong>
												<?
												}?>
												<?php if ($fila->den_origen!=null) {
													?>
												<strong>[ Denominación de Origen ] </strong>
												<?
												}?>

												</span>
											</div>


										</div>
									<?php } //} ?>
										<!-- End Summary -->

										<button   <?php if (!isset($consulta_verificacion)) {?> disabled="" 
											
										<?php } ?>class="btn btn-block u-btn-primary g-font-size-13 text-uppercase g-py-15 mb-4" type="button" data-next-step="#step2" onclick="cambiar()" id="e1" name="e1">
											Proceder a la siguiente etap
										</button>


									</div>
								</div>
							</div>
							<!-- End Verificación datos cliente -->

							<!-- Verificación Condiciones internas -->
							<div id="step2">
								<div class="row">
									<div class="col-md-12">
										<button style="width:20%" class="btn btn-block u-btn-bluegray g-font-size-13 text-uppercase g-py-15 mb-45" type="button" data-next-step="#step1">
											<i class="icon-arrow-left"></i> Paso anterior
										</button>
									</div>

									<div class="col-md-8 g-mb-30">
										<h4>
											Una vez verificados los puntos anteriores, PAMFA deberá verificar las siguientes condiciones internas.
										</h4>
										<div class="js-custom-scroll g-height-50vh--lg g-pa-15 g-pa-25--lg">
											<table class="text-left">
												<thead class="h6 g-brd-bottom g-brd-gray-light-v3 g-color-black text-uppercase">
								                    <th class="g-font-weight-400 g-width-40 text-left g-pb-20">#</th>
								                    <th class="g-font-weight-400 g-pb-20">
								                    	Reactivo
								                    </th>
								                    <th class="text-center g-font-weight-400 g-pb-20">
								                    	Si
								                    </th>
								                    <th class=" text-center g-font-weight-400 g-pb-20">
								                    	No
								                    </th>
												</thead>
													<form id="condicion" name="condicion"
												<tbody>
													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															1
														</td>
														<td>
															¿Con la información proporcionada acerca del cliente y el producto es suficiente realizar el proceso de certificación?
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(2)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="preg1_c" id="preg1_c" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1" value="si" <?php if (isset($consulta_condicion) && $consulta_condicion->preg1=="si"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i>
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(2)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="preg1_c" id="pr1_c" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1" value="no"  <?php if (isset($consulta_condicion) && $consulta_condicion->preg1=="no"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i>
																</span>
															</label>
														</td>
													</tr>
													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															2
														</td>
														<td>
															¿Están resuelto cualquier diferencia de entendimiento conocida entre PAMFA y el cliente, incluyendo el acuerdo con respecto a las normas u otros documentos normativos?
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(2)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="preg2_c" id="preg2_c" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1" value="si"  <?php if (isset($consulta_condicion) && $consulta_condicion->preg2=="si"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i>
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(2)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="preg2_c" id="pr2_c" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1" value="no"  <?php if (isset($consulta_condicion) && $consulta_condicion->preg2=="no"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i>
																</span>
															</label>
														</td>
													</tr>
													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															3
														</td>
														<td>
															¿Se define claramente el alcance de la certificación solicitada?
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(2)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="preg3_c" id="preg3_c" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1"value="si"  <?php if (isset($consulta_condicion) && $consulta_condicion->preg3=="si"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i>
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(2)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="preg3_c" id="pr3_c" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1" value="no"  <?php if (isset($consulta_condicion) && $consulta_condicion->preg3=="no"){ ?>
																	checked=""
																<?php }?>>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i>
																</span>
															</label>
														</td>
													</tr>
													<tr class="g-brd-bottom g-brd-gray-light-v3">
														<td>
															4
														</td>
														<td>
															¿PAMFA tiene la capacidad, competencia y los medios para realizar todas las actividades del proceso de certificación con respecto al alcance definido en la solicitud de servicio?
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(2)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="preg4_c" id="preg4_c" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1" value="si"  <?php if (isset($consulta_condicion) && $consulta_condicion->preg4=="si"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-check"></i>
																</span>
															</label>
														</td>
														<td>
															<label class="u-check">
																<input onclick="v_check(2)" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="preg4_c" id="pr4_c" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1" value="no"  <?php if (isset($consulta_condicion) && $consulta_condicion->preg4=="no"){ ?>
																	checked=""
																<?php }?>>
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
																	<i class="hs-admin-close"></i>
																</span>
															</label>
														</td>
													</tr>
													></form>
												</tbody>
											</table>
										</div>
									</div><?php

									 //foreach($consulta_cliente as $fila2){
										 	 foreach($consulta_sol_id as $fila){

               ?>
									<div class="col-md-4 g-mb-30">
										<!-- Summary -->
										<div class="g-bg-gray-light-v5 g-pa-20 g-pb-50 mb-4">
											<h4 class="h6 text-uppercase mb-3">Resumen</h4>

											<div class="d-flex justify-content-between mb-2">
												<span class="g-color-black">Fecha</span>
												<span class="g-color-black g-font-weight-300"><?php if (isset($consulta_verificacion) && $consulta_verificacion->fecha!=NULL){ 
																	echo date('d/m/Y',$consulta_verificacion->fecha);
																 }else{
													echo  date('d/m/Y', time()); }?>
												</span>
											</div>
											<div class="d-flex justify-content-between mb-2">
												<span class="g-color-black">Cliente</span>
												<span class="g-color-black g-font-weight-300">
													<?php echo $fila->nombreLegal;?>
												</span>
											</div>
											<div class="d-flex justify-content-between">
												<span class="g-color-black">Esquemas:              </span>
												<span class="g-color-black g-font-weight-300">
													<?php if ($fila->global_ifa!=null) {
													?><strong>[ IFA ] </strong> <?
												}?>
												<?php if ($fila->global_coc!=null) {
													?>
												<strong>[ Coc ] </strong> 
												<?
												}?>
												<?php if ($fila->srrc!=null) {
													?>
												<strong>[ SRRC ] </strong>
												<?
												}?>
												<?php if ($fila->mcs!=null) {
													?>
												<strong>[ Méx. Calidad Sup. ] </strong>
												<?
												}?>
												<?php if ($fila->hecho_mexico!=null) {
													?>
												<strong>[ Hecho en Mex. ] </strong>
												<?
												}?>
												<?php if ($fila->den_origen!=null) {
													?>
												<strong>[ Denominación de Origen ] </strong>
												<?
												}?>

												</span>
											</div>


										</div>
									<?php } //} ?>
										<!-- End Resumen -->
										<button <?php if (!isset($consulta_condicion)) {?> disabled="" 
											
										<?php } ?>class="btn btn-block u-btn-primary g-font-size-13 text-uppercase g-py-15 mb-45" type="button" data-next-step="#step3" onclick="cambiar2()" id="e2" name="e2">
											Proceder a la desición
										</button>

									</div>
								</div>
							</div>
							<!-- End Verificación Condiciones internas -->

							<!-- Desición y cotización -->
							<div id="step3">
								<div class="row">
									<div class="col-md-12">
										<div class="float-left">
											<button class="btn btn-block u-btn-bluegray g-font-size-13 text-uppercase g-py-15 mb-45" type="button" data-next-step="#step2">
												<i class="icon-arrow-left"></i> Paso anterior
											</button>											
										</div>
										<div class="float-right">
											<button <?php if (!isset($consulta_pago)) {?> disabled=""
											
										<?php } ?> class="btn btn-block u-btn-primary g-font-size-13 text-uppercase g-py-15 mb-45"  data-next-step="#step4" name="pag" id="pag" type="button">
												Verificación de pag <i class="icon-arrow-right"></i>
											</button>
										</div>
									</div>
		
									<div class="col-md-12">
										<h5>
											Basado en los puntos anteriores, por favor seleccione si se puede o no otorgar el servicio.
										</h5>
									</div>
									<div class="col-md-12 text-center g-mt-10 g-mb-10">
										<label class="u-check">
											<input  class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0"  type="radio" onclick="desicionServicio('si')" <?php if (isset($consulta_pago)) {?> checked=""
											
										<?php } ?>>
											<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
												<i class="fa fa-check"></i> Se puede otorgar el servicio.
											</span>
										</label>
										<label class="u-check">
											<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0"  type="radio" onclick="desicionServicio('no')" <?php if (isset($consulta_rechazo)) {?> checked=""
											
										<?php } if (isset($consulta_cotizacion)) {?>disabled="" <?php } ?>name="r" id="r">
											<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
												<i class="fa fa-close"></i> No se puede otorgar el servicio
											</span>
										</label>
									</div>

									<!-- Se puede otorgar el servicio -->

									<div id="otorgarServicio" class="col-md-12 g-mb-30" style="display:none">
										<div class="card border-0 rounded-0 ">
											<!-- Panel Header -->
											<div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
												<div class="row">
													<div class="col-md-12">
														<h3 class="h6 mb-0">
															<i class="icon-layers g-pos-rel g-top-1 g-mr-5"></i> Formato cotización
														</h3>
													</div>

												</div>

												<div class="dropdown g-mb-10 g-mb-0--md">
													<button type="button" <?php if (isset($consulta_pago)) {?>disabled="" <?php }else {?>disabled="" <?php }?> class="btn u-btn-primary g-mr-10" onclick="procesoFinalizado2()" name="envio_cotizacion" id="envio_cotizacion">
														<i class="hs-admin-check-box"></i> Aprobar envi
													</button>
													<a href="#" class="btn u-btn-bluegray g-mr-10">
														<i class="hs-admin-printer"></i> Imprimir
													</a>
													<a <?php if (isset($consulta_pago)) {?> target="_blank" href="<?php echo base_url().$consulta_pago->url_cotizacion; ?>" <?php }?>  class="btn u-btn-bluegray">
														<i class="hs-admin-download"></i> Descargar
													</a>
													
												</div>
											</div>
											<?php $fp=time();?>

												<input id="fpago" name="fpago" type="hidden" value="<? echo $fp;?>"/>
											<!-- End Panel Header -->
											<!-- End Panel Header -->
											<!-- Panel Body -->
											<?php 
											$s=0;
											if (isset($consulta_cotizacion)) {

												 foreach($consulta_cotizacion as $filax)
										 	 	{ $s=$s+($filax->costo*$filax->cantidad);
																
																
																$iva=$s*0.16;
																$t=$s+$iva;
															}?>
												<div class="card-block u-info-v1-1 g-bg-white-gradient-v1--after g-pa-20">
													<div>
							            			<!-- Info cotización -->
							            				<div class="h1 text-left">
							            				Cotización <span class="g-color-green">#CTZ19</span>
							            				<span class="h2 float-right">Fecha de emisión: <? date('d/m/Y', time())?></span>
							            				</div>
							            			<hr>
														<div class="row">
										                <!-- Info empresa -->
										                <div class="col-lg-4 text-left">
										                    <p class="h2">PAMFA A.C.</p>
										                    <address>
										                        Calle José Zamora N°48, Col. Emiliano Zapata,<br>
										                        Uruapan, Mich<br>
										                        CP: 60180 <br>
										                        <i class="icon-phone"></i> (452) 50 20 849 / 452 5251-772
										                    </address>
										                </div>
										                <!-- END Info empresa -->

										                <!-- Info cliente -->
										                <?php

									 //foreach($consulta_cliente as $fila2){
										 	 foreach($consulta_sol_id as $fila){

               ?>
										                <div class="col-lg-4 text-right">
										                    <p class="h2"><?php echo $fila->nombreLegal;?></p>
										                    <address>
										                        <?php echo $fila->direccion.",".$fila->colonia.",".$fila->municipio;?><br>
										                        <?php echo $fila->estado."," .$fila->nombre;?><br>
										                        <?php echo $fila->cp;?><br>
										                        <i class="icon-phone"></i> <?php echo $fila->telefono;?>
										                    </address>
										                </div>
										            <?php }?>
											            <!-- END Info cliente -->
														<!-- Total cotización -->
														<div class="h1 col-lg-4 text-right g-color-blue">
															<p class="text-muted h5">
																Total
															</p>
															<span  name="tot_g"  id="tot_g"><?echo $t;?></span>


														</div>
														<!-- End Total cotización -->
											        </div>
							            			<!-- END Info cotización -->
													<hr>
													<div class="col-lg-12 g-mb-20">
														<b>
															El siguiente presupuesto tiene una vigencia de 30 días naturales posteriores a la fecha de emisión.
														</b>
													</div>
							            			<!-- Table -->
										            <div class="" id="cot" name="cot">
										            	
										            	
														
														
														
										                <table id="tablaCotizacion" name="tablaCotizacion" class="table table-bordered table-hover">
										                    <thead>
										                        <tr>
										                            <th class="text-center" style="width: 50px;">#</th>
										                            <th>Concepto(esquema)</th>
										                            <th class="text-right" style="width: 120px;">Costo Unitario</th>
																								<th class="text-center" style="width: 100px;">Cantidad</th>
										                            <th class="text-right" style="width: 120px;">Total</th>
										                        </tr>
										                    </thead>
										                    <tbody>

	
										                <?php $sub=0;
										                

										 	 foreach($consulta_cotizacion as $filaz)
										 	 	{?>


																
																	<tr >
																		<td class="text-center">
																			
																		</td>
																		<td>
																			<input class='form-control' type="text" readonly="" value="<?php echo $filaz->concepto;?>">
																			<div class="text-muted">
																				<textarea class="form-control"><?php echo $filaz->descripcion;?>.</textarea>
																				
																			</div>
																		</td>
																		<td class="text-right"><input type="number"  value="<?php echo $filaz->costo;?>" class="form-control" ></td>
																		<td class="text-center" >
																			<span class="u-label g-rounded-20 g-px-15 g-bg-primary g-mr-10 g-mb-15"><input type="number"   value="<?php echo $filaz->cantidad;?>"></span>
																		</td>
																		<td class="text-right">$ <input  type="number"   class="form-control" readonly="" value="<?php echo $filaz->costo*$filaz->cantidad;?>"></td>
																	</tr>
																<?php
																$sub=$sub+($filaz->costo*$filaz->cantidad);
																}
																?>

																<tr>
																	<td colspan="4" class="font-w600 text-right">Subtotal</td>
																	<td class="text-right"><span  name="sub_t"  id="sub_t"><?php echo $sub?></span></td>
																</tr>
																<?php
																$iva=$sub*0.16;
																?>
																<tr>
																	<td colspan="4" class="font-w600 text-right">I.V.A</td>
																	<td class="text-right">16%</td>
																</tr>
																<tr class="active">
																	<td colspan="4" class="font-w700 text-uppercase text-right">Total</td>
																	<td class="font-w700 text-right"><span  name="tot"  id="tot"><?php echo $sub+$iva;?></span></td>
																</tr>
							
										                   
										                   

										                
										                 </tbody>
			
										                </table>
										                 </form>
										               
										            </div>
										            <!-- END Table -->
													<hr>
													<b class="text-muted">Especificaciones</b>
													<ul class="text-muted text-justify">
														<li>
															La cotización incluye auditoria anunciada y no anunciada en caso que así lo requiera el esquema de certificación.
														</li>
														<li>
															Para orgánico incluye revisión de plan orgánico.
														</li>
														<li>
															No incluye viáticos de auditor.
														</li>
														<li>
															En caso de requerir factura se agregara el IVA (16%)
														</li>
														<li>
															Las condiciones de pago serán 100% al momento de aceptar la cotización.
														</li>
														<li>
															Esta cotización está sujeta a cambios si el alcance cambia al momento de realizar la auditoria.
														</li>
														<li>
															La cancelación del servicio programado tendrá una penalización de 20% del costo total.
														</li>
														<li>
															Esta cotización está realizada en MXN pero, los costos posteriores a 30 días pueden variar en realización a la fluctuación del dólar y/o euro de acuerdo al esquema.
														</li>
													</ul>
													<hr>
													<b class="text-muted">Nota</b>
													<ul class="text-muted text-justify">
														<li>
															La cuota anual cubre los gastos para el registro en la base de datos GlobalG.A.P.  El cliente debe informar a VERIFICACION Y CERTIFICACION PAMFA  sobre cualquier GGN, LGN o Numero CoC existente o caducado, y sobre cualquier actividad previa de verificación/inspección/auditoria o certificación/aprobación en su organización, incluyendo resultados. Su no comunicación redundará un costo extra  de 100 € (Euros), para un productor individual bajo la opción 1; y de 500 € (Euros), para un grupo de productores bajo la opción 2, sobre la tarifa de registro.
														</li>
														<li>
															“No tiene un costo adicional la emisión del certificado" y se emitirá cuando se haya dado cumplimiento con los requisitos de la certificación.
														</li>
														<li>
															SRRC - VERIFICACION Y CERTIFICACION PAMFA A.C. emitirá el dictamen de verificación e informe de evaluación de la conformidad, la dependencia  en este momento es quien decide sobre la certificación.
														</li>
													</ul>
													<hr>
													<b>DATOS BANCARIOS</b>
													<p>
														VERIFICACION Y CERTIFICACION PAMFA A.C.
														<br>
														BANCO: BANBAJIO
														<br>
														CUENTA: 19005552
														<br>
														CLABE: 03 05 28 90 00 1114 8626
														<br>
														REFERENCIA: ORGANISMO DE CERTIFICACIÓN.
													</p>

							            		<!-- Footer -->
							            		<!--<hr class="hidden-print">-->
							            		<!--<p class="text-muted text-center"><small>Thank you very much for doing business with us. We look forward to working with you again!</small></p>-->
							            		<!-- END Footer -->
							        			</div>
											</div>
										
											<!-- End Panel Body -->
									
								<?php }
											else {?>
												<div class="card-block u-info-v1-1 g-bg-white-gradient-v1--after g-pa-20">
												<div>
							            			<!-- Info cotización -->
							            			<div class="h1 text-left">
							            				Cotización <span class="g-color-green">#CTZ19</span>
							            				<span class="h2 float-right">Fecha de emisión: <?= date('d/m/Y', time())?></span>
							            			</div>
							            			<hr>
													<div class="row">
										                <!-- Info empresa -->
										                <div class="col-lg-4 text-left">
										                    <p class="h2">PAMFA A.C.</p>
										                    <address>
										                        Calle José Zamora N°48, Col. Emiliano Zapata,<br>
										                        Uruapan, Mich<br>
										                        CP: 60180 <br>
										                        <i class="icon-phone"></i> (452) 50 20 849 / 452 5251-772
										                    </address>
										                </div>
										                <!-- END Info empresa -->

										                <!-- Info cliente -->
										                <?php

									 //foreach($consulta_cliente as $fila2){
										 	 foreach($consulta_sol_id as $fila){

               ?>
										                <div class="col-lg-4 text-right">
										                    <p class="h2"><?php echo $fila->nombreLegal;?></p>
										                    <address>
										                        <?php echo $fila->direccion.",".$fila->colonia.",".$fila->municipio;?><br>
										                        <?php echo $fila->estado."," .$fila->nombre;?><br>
										                        <?php echo $fila->cp;?><br>
										                        <i class="icon-phone"></i> <?php echo $fila->telefono;?>
										                    </address>
										                </div>
										            <?php }?>
											            <!-- END Info cliente -->
														<!-- Total cotización -->
														<div class="h1 col-lg-4 text-right g-color-blue">
															<p class="text-muted h5">
																Total
															</p>
															<span  name="tot_g"  id="tot_g"></span>


														</div>
														<!-- End Total cotización -->
											        </div>
							            			<!-- END Info cotización -->
													<hr>
													<div class="col-lg-12 g-mb-20">
														<b>
															El siguiente presupuesto tiene una vigencia de 30 días naturales posteriores a la fecha de emisión.
														</b>
													</div>
							            			<!-- Table -->
										            <div class="" id="cot" name="cot">
										            	
										            	<div id="xx" name="xx">
										            		<input type="hidden"  value="<?php echo $indice;?>"id="auxi" name="auxi" >
										            		</div>
										            
										           
														<button type="button" class="btn u-btn-primary" name="button" onclick="addCargo()">

															<i class="hs-admin-plus"></i> Agregar cargo
														</button>
														
														
														
										                <table id="tablaCotizacion" name="tablaCotizacion" class="table table-bordered table-hover">
										                    <thead>
										                        <tr>
										                            <th class="text-center" style="width: 50px;">#</th>
										                            <th>Concepto(esquema)</th>
										                            <th class="text-right" style="width: 120px;">Costo Unitario</th>
																								<th class="text-center" style="width: 100px;">Cantidad</th>
										                            <th class="text-right" style="width: 120px;">Total</th>
										                        </tr>
										                    </thead>
										                    <tbody>

	
										                <?php
										                


							            			

							            			 	 
							            			
										 	 foreach($consulta_sol_id as $fila){
										 	 	
										
							            			 $esq=6;
	
																for ($i=0; $i < $esq; $i++) {
															
																 if (($fila->global_ifa!=null && $i==0)||  ($fila->global_coc!=null && $i==1) || ($fila->srrc!=null && $i==2)||($fila->mcs!=null && $i==3)||($fila->hecho_mexico!=null && $i==4)||($fila->den_origen!=null && $i==5)){?>


																
																	<tr >
																		<td class="text-center">
																			<button type="button" class="btn u-btn-primary" name="button">
																				<i class="hs-admin-pencil"></i> <?= $i ?>
																			</button>
																		</td>
																		<td>
																			<input class='form-control' type="text" id="<?php echo"concepto".$i;?>" name="<?php echo"concepto".$i;?>"readonly="" <?php if ($fila->global_ifa!=null && $i==0) {?>value="Global IFA"<?
													
												}if ($fila->global_coc!=null && $i==1) {?>value="Global CoC"<?
												
												} if ($fila->srrc!=null && $i==2) {?>value="SRRC"<?
													
												}if ($fila->mcs!=null && $i==3) {?>value="Méx. Cal. Sup"<?
													
												}if ($fila->hecho_mexico!=null && $i==4) {?>value="Hecho en Méx."<?
													
												}if ($fila->den_origen!=null && $i==5) {?>value="Den. Origen"<?
													
												}?>>
																			<div class="text-muted">
																				<textarea class="form-control" id="<?php echo"descripcion".$i;?>" name="<?php echo"descripcion".$i;?>">texto.</textarea>
																				
																			</div>
																		</td>
																		<td class="text-right"><input type="number" name="<?php echo"costo".$i;?>"  id="<?php echo"costo".$i;?>"  value="1" class="form-control" onblur="pre_suma(<?php echo '\''. $i.'\',\''.$esq.'\'' ?> ) ; "></td>
																		<td class="text-center" >
																			<span class="u-label g-rounded-20 g-px-15 g-bg-primary g-mr-10 g-mb-15"><input type="number" name="<?php echo"cantidad".$i;?>"  id="<?php echo"cantidad".$i;?>"  value="1" onblur="pre_suma(<?php echo '\''. $i.'\',\''.$esq.'\'' ?> ) ; "></span>
																		</td>
																		<td class="text-right">$ <input  type="number" name="<?php echo"pre_total".$i;?>"  id="<?php echo"pre_total".$i;?>"   class="form-control" readonly="" value=""></td>
																	</tr>
																<?php
																}}}
																?>

																<tr>
																	<td colspan="4" class="font-w600 text-right">Subtotal</td>
																	<td class="text-right"><span  name="sub_t"  id="sub_t"></span></td>
																</tr>
																<tr>
																	<td colspan="4" class="font-w600 text-right">I.V.A</td>
																	<td class="text-right">16%</td>
																</tr>
																<tr class="active">
																	<td colspan="4" class="font-w700 text-uppercase text-right">Total</td>
																	<td class="font-w700 text-right"><span  name="tot"  id="tot"></span></td>
																</tr>
							
										                   
										                   

										                
										                 </tbody>
			
										                </table>
										                 </form>
										               
										            </div>
										            <!-- END Table -->
													<hr>
													<b class="text-muted">Especificaciones</b>
													<ul class="text-muted text-justify">
														<li>
															La cotización incluye auditoria anunciada y no anunciada en caso que así lo requiera el esquema de certificación.
														</li>
														<li>
															Para orgánico incluye revisión de plan orgánico.
														</li>
														<li>
															No incluye viáticos de auditor.
														</li>
														<li>
															En caso de requerir factura se agregara el IVA (16%)
														</li>
														<li>
															Las condiciones de pago serán 100% al momento de aceptar la cotización.
														</li>
														<li>
															Esta cotización está sujeta a cambios si el alcance cambia al momento de realizar la auditoria.
														</li>
														<li>
															La cancelación del servicio programado tendrá una penalización de 20% del costo total.
														</li>
														<li>
															Esta cotización está realizada en MXN pero, los costos posteriores a 30 días pueden variar en realización a la fluctuación del dólar y/o euro de acuerdo al esquema.
														</li>
													</ul>
													<hr>
													<b class="text-muted">Nota</b>
													<ul class="text-muted text-justify">
														<li>
															La cuota anual cubre los gastos para el registro en la base de datos GlobalG.A.P.  El cliente debe informar a VERIFICACION Y CERTIFICACION PAMFA  sobre cualquier GGN, LGN o Numero CoC existente o caducado, y sobre cualquier actividad previa de verificación/inspección/auditoria o certificación/aprobación en su organización, incluyendo resultados. Su no comunicación redundará un costo extra  de 100 € (Euros), para un productor individual bajo la opción 1; y de 500 € (Euros), para un grupo de productores bajo la opción 2, sobre la tarifa de registro.
														</li>
														<li>
															“No tiene un costo adicional la emisión del certificado" y se emitirá cuando se haya dado cumplimiento con los requisitos de la certificación.
														</li>
														<li>
															SRRC - VERIFICACION Y CERTIFICACION PAMFA A.C. emitirá el dictamen de verificación e informe de evaluación de la conformidad, la dependencia  en este momento es quien decide sobre la certificación.
														</li>
													</ul>
													<hr>
													<b>DATOS BANCARIOS</b>
													<p>
														VERIFICACION Y CERTIFICACION PAMFA A.C.
														<br>
														BANCO: BANBAJIO
														<br>
														CUENTA: 19005552
														<br>
														CLABE: 03 05 28 90 00 1114 8626
														<br>
														REFERENCIA: ORGANISMO DE CERTIFICACIÓN.
													</p>

							            		<!-- Footer -->
							            		<!--<hr class="hidden-print">-->
							            		<!--<p class="text-muted text-center"><small>Thank you very much for doing business with us. We look forward to working with you again!</small></p>-->
							            		<!-- END Footer -->
							        			</div>
											</div>
										
											<!-- End Panel Body -->
											<?php }?>
										</div>

									</div>
								
											


									<!-- End Se puede otorgar el servicio -->


									<!-- No se puede otorgar -->
									<div id="rechazarServicio" class="col-md-12 g-mb-30" style="display:none">
										<div class="card border-0 rounded-0 ">
											<!-- Panel Header -->
											<div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
												<div class="row">
													<div class="col-md-12">
														<h3 class="h6 mb-0">
															<i class="icon-layers g-pos-rel g-top-1 g-mr-5"></i> Formato declinación de servicio
														</h3>
													</div>

												</div>
												

												<div class="dropdown g-mb-10 g-mb-0--md">
													<button type="button" <?php if (isset($consulta_rechazo)) {?>disabled="" <?php }?>  class="btn u-btn-primary g-mr-10" onclick="procesoFinalizado()" id="envio_rechazo" name="envio_rechazo">
														<i class="hs-admin-check-box"></i> Aprobar envio
													</button>
													<a href="#" class="btn u-btn-bluegray g-mr-10">
														<i class="hs-admin-printer"></i> Imprimir
													</a>
													<a href="#" class="btn u-btn-bluegray">
														<i class="hs-admin-download"></i> Descargar
													</a>
													<!--<span class="d-block g-color-primary--hover g-cursor-pointer g-mr-minus-5 g-pa-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
													</div>-->
												</div>
											</div>
											<!-- End Panel Header -->
											<!-- End Panel Header -->
											<!-- Panel Body -->
											<div class="card-block u-info-v1-1 g-bg-white-gradient-v1--after g-pa-20">
												<div>
							            			<!-- Info cotización -->
							            			<div class="h2 text-left">
							            				Estimado usuario
							            			</div>
							            			<hr>
													<div class="row">
										                <div class="col-lg-12">
															Por este medio hacemos de su conocimiento que por políticas de VERIFICACIÓN Y CERTIFICACIÓN PAMFA A.C., y en estricto apego a lo señalado en el esquema de certificación: <span class="g-color-red">
																<?php

									 //foreach($consulta_cliente as $fila2){
										 	 foreach($consulta_sol_id as $fila){
												 if ($fila->global_ifa!=null) {
													?><strong>[ IFA ] </strong> <?
												}?>
												<?php if ($fila->global_coc!=null) {
													?>
												<strong>[ Coc ] </strong> 
												<?
												}?>
												<?php if ($fila->srrc!=null) {
													?>
												<strong>[ SRRC ] </strong>
												<?
												}?>
												<?php if ($fila->mcs!=null) {
													?>
												<strong>[ Méx. Calidad Sup. ] </strong>
												<?
												}?>
												<?php if ($fila->hecho_mexico!=null) {
													?>
												<strong>[ Hecho en Mex. ] </strong>
												<?
												}?>
												<?php if ($fila->den_origen!=null) {
													?>
												<strong>[ Denominación de Origen ] </strong>
												<?
												}}?>
</span>.
															<br>
															No podemos otorgar el servicio de certificación que nos ha solicitado. 

										                </div>
											        </div>
							            			<!-- END Info cotización -->
													<hr>
													<div class="col-lg-12 g-mb-20">
														<b>
															A continuación se indica la razón.
														</b>
													</div>
							            			<!-- Table -->
										            <div class="">
										                <table id="tablaCotizacion" class="table table-bordered table-hover">
															<tr>
																<td>
																	Falta información del solicitante.
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" name="razon1" id="razon1" value="si" <?php if (isset($consulta_rechazo)&&$consulta_rechazo->razon1=="si"){?>checked=""<?

																			
																		}?>>
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon=""></i>
																		</div>
																	</label>
																</td>
															</tr>
															<tr>
																<td>
																	Compromisos con otro Organismo de Certificación
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" name="razon2" id="razon2" value="si"  <?php if (isset($consulta_rechazo)&&$consulta_rechazo->razon2=="si"){?>checked=""<?

																			
																		}?>>
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon=""></i>
																		</div>
																	</label>
																</td>
															</tr>

															<tr>
																<td>
																	Falsedad de información.
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" name="razon3" id="razon3" value="si" <?php if (isset($consulta_rechazo)&&$consulta_rechazo->razon3=="si"){?>checked=""<?

																			
																		}?>>
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon=""></i>
																		</div>
																	</label>
																</td>
															</tr>

															<tr>
																<td>
																	No existe respuesta del representante autorizado.
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" name="razon4" id="razon4" value="si" <?php if (isset($consulta_rechazo)&&$consulta_rechazo->razon4=="si"){?>checked=""<?

																			
																		}?>>
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon=""></i>
																		</div>
																	</label>
																</td>
															</tr>

															<tr>
																<td>
																	No tenemos el alcance para otorgar el servicio.
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" name="razon5" id="razon5" value="si" <?php if (isset($consulta_rechazo)&&$consulta_rechazo->razon5=="si"){?>checked=""<?

																			
																		}?>>
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon=""></i>
																		</div>
																	</label>
																</td>
															</tr>

															<tr>
																<td>
																	Otro, indique:
																</td>
																<td>
																	<div class="g-pos-rel">
																		<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																			<i class="hs-admin-pencil g-absolute-centered g-font-size-16 g-color-gray-light-v6"></i>
																		</span>
																		<textarea id="razon6" name="razon6" class="form-control form-control-md u-textarea-expandable g-brd-none g-brd-bottom g-brd-gray-light-v7 g-brd-gray-light-v3--focus rounded-0 g-resize-none g-overflow-hidden" rows="3" placeholder=""><?php if (isset($consulta_rechazo)){ echo $consulta_rechazo->razon6;}?>
																			
																		</textarea>
																	</div>
																</td>
															</tr>
										                </table>
										            </div>
										            <!-- END Table -->
													<hr>
													<p class=" text-justify">
														Si está interesado en los servicios de certificación que ofrece VERIFICACIÓN Y CERTIFICACIÓN PAMFA A.C., contacte nuevamente a nuestro personal.
													</p>

							            		<!-- Footer -->
							            		<!--<hr class="hidden-print">-->
							            		<!--<p class="text-muted text-center"><small>Thank you very much for doing business with us. We look forward to working with you again!</small></p>-->
							            		<!-- END Footer -->
							        			</div>
											</div>
											
											<!-- End Panel Body -->
										</div>
									</div>
									<!-- End No se puede otorgar -->


								</div>
							</div>
							<!-- End Desición y cotización -->

							<!-- Verificación del pago -->
							<div id="step4" >
								<div class="row">
									<div class="col-md-12">						
										<button style="width:20%" class="btn btn-block  u-btn-bluegray g-font-size-13 text-uppercase g-py-15  mb-45" type="button" data-next-step="#step3">
											<i class="icon-arrow-left"></i> Paso anterior
										</button>
									</div>
									<div class="col-md-12">
										<div class=" g-bg-gray-light-v5 g-pa-20 g-pb-20 mb-4">
											<h3>
												<span>Verificación del pago</span>
												<span class="float-right">Resumen</span>
											</h3>
										</div>
									</div>
					               
					                 <?php

									 //foreach($consulta_cliente as $fila2){
										 	 foreach($consulta_sol_id as $fila){

               ?>
										                <div class="col-lg-4 ">
										                	 <p class="h2">Cliente</p>
										                    <p class="h4"><?php echo $fila->nombreLegal;?></p>
										                    <address>
										                        <?php echo $fila->direccion.",".$fila->colonia.",".$fila->municipio;?><br>
										                        <?php echo $fila->estado."," .$fila->nombre;?><br>
										                        <?php echo $fila->cp;?><br>
										                        <i class="icon-phone"></i> <?php echo $fila->telefono;?>
										                         <br>
					                        <i class="icon-education-166 u-line-icon-pro"></i> ejemplo@gmail.com
										                    </address>
										                </div>
										            <?php }?>
						            <!-- END Info cliente -->

					                <!-- Esquemas de certificación -->
					                <?php
					                $fech=time();
					                	$estat="";
					                	$url="";

					                 if(isset($consulta_pago)){
					                	$fech=$consulta_pago->fecha;
					                	$estat=$consulta_pago->estatus;
					                	$url=$consulta_pago->url_pago;

					                }?>

					                <div class="col-lg-4">
					                    <p class="h2">Cotización</p>
					                    <p class="h5">
					                    	Emisión: <span class="g-color-red"><?= date('d/m/Y', $fech) ?></span>
					                    </p>
					                    <p class="h5" id="tot_p" name="tot_p">
					                    	Total: <span class="g-color-blue"><?php if (isset($consulta_cotizacion)) {
												
															
														 echo $t;}?></span>
					                    </p>
					                	<hr class="g-pb-0 g-mb-0">
					                	  <p class="h2">Esquemas</p><?php 
					                	 foreach($consulta_sol_id as $fila){
												 if ($fila->global_ifa!=null) {
													?><i class="et-icon-document"></i><strong>[ IFA ] </strong><br> <?
												}?>
												<?php if ($fila->global_coc!=null) {
													?>
												<i class="et-icon-document"></i><strong>[ Coc ] </strong><br>
												<?
												}?>
												<?php if ($fila->srrc!=null) {
													?>
												<i class="et-icon-document"></i><strong>[ SRRC ] </strong><br>
												<?
												}?>
												<?php if ($fila->mcs!=null) {
													?>
												<i class="et-icon-document"></i><strong>[ Méx. Calidad Sup. ] </strong><br>
												<?
												}?>
												<?php if ($fila->hecho_mexico!=null) {
													?>
												<i class="et-icon-document"></i><strong>[ Hecho en Mex.  ] </strong><br>
												<?
												}?>
												<?php if ($fila->den_origen!=null) {
													?>
												<i class="et-icon-document"></i><strong>[ Denominación de Origen ]  </strong><br>
												<?
												}}?>




					                  
					                    	
					                    </p>
					                </div>
						            <!-- END Esquemas de certificación -->

					                <!-- Resumen cotización -->
					                <div class="col-lg-4">
					                    <p class="h2">Comprobante pago</p>

					                    <div class="row">
					                    	<div class="col-sm-12">
					                    	<input type="file" name="file1" id="file1" class="form-control">
					                    	<input type="button " class="btn btn-info" value="Enviar" onClick="uploadFile(1)" id="aux">







                    										<progress class="form-control" id="progressBar" value="0" max="100"  style="width:300px;"></progress>
                    										<h3 id="status"></h3>
                    										<?php $fechado=time();?>

														<input id="fecha_do" name="fecha_do" type="hidden" value="<? echo $fechado;?>"/>

                    									</div>
											<div class="col-sm-12">
												
													<p class="g-pa-10" id="no_d" name="no_d"  <?php if ($estat=='no'){?> style="background: #e74c3c; color:white;display: block;" <?php }else {?> style="background: #e74c3c; color:white;display: none;" <?}?>>
							                    	<i class="hs-admin-close"></i> No disponible
							                    </p>
												

							                    <p  class="g-pa-10" id="espera" name="espera" <?php if ($estat=='espera'){?> style="background: #e67e22; color:white;display: block;" <?php }else {?>style="background: #e67e22; color:white;display: none;"<?}?>>
							                    	<i class="icon-exclamation"></i> En espera
							                    </p>
							               
											</div>

											<!-- Aprobación de comprobante -->
											<div class="col-sm-12 g-mb-10">

							                    <a type="button" target="_blank" name="desc" id="desc" class="btn u-btn-primary" <?php if ($estat=='espera') {?> href="<?php echo base_url().$url?>"  style="display: block; width:100%;" <? }else {?> style="display: none;<?php }?>">
							                    	<i class="hs-admin-download"></i> Descargar
							                    </a>	



							                   
											</div>
											<div class="col-sm-6">
												<label class="u-check" style="width:100%">
													<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn2_4" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1" onclick="aprobarCotizacion('si')">
													<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
														<i class="hs-admin-check"></i> Aprobar
													</span>
												</label>	
											</div>
											<div class="col-sm-6">
												<label class="u-check" style="width:100%">
													<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn2_4" type="radio" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1" onclick="aprobarCotizacion2('no')">
													<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">
														<i class="hs-admin-close"></i> Rechazar
													</span>
												</label>	
											</div>
											<!-- End Aprobación de comprobante -->
					                    </div>
										

					                </div>
					            
						            <!-- END Resumen cotización -->


								</div>
							</div>
							<!-- End Verificación del pago -->
					    </div>
				  	</form>
				</div>
				<!-- End Proceso de cotización -->


			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	var base_url="<? echo base_url();?>";
	var idsolicitud="<? echo $id;?>";
	//var norma="<? $norma;?>";


</script>
<script>
	function desicionServicio(desicion){
		if(desicion == 'si'){
			document.getElementById('otorgarServicio').style.display = 'block';
			document.getElementById('rechazarServicio').style.display = 'none';
		}else{
			
			document.getElementById('otorgarServicio').style.display = 'none';
			document.getElementById('rechazarServicio').style.display = 'block';
		}
	}

	function addCargo() {
		var tabla = document.getElementById("tablaCotizacion");
		var numFilas = tabla.rows.length;
		var filaActual = numFilas - 3;
		var concepto =$('#auxi').val();
		 
		 var indice = concepto;
		 
		

		var row = tabla.insertRow(filaActual);
		var celda1 = row.insertCell(0);
    var celda2 = row.insertCell(1);
		var celda3 = row.insertCell(2);
		var celda4 = row.insertCell(3);
		var celda5 = row.insertCell(4);


		celda1.innerHTML = "<button type='button' onclick='pre_suma("+indice+","+indice+")' class='btn u-btn-blue'><i class='hs-admin-save'></i></button><button type='button' onclick='eliminarFila(this,"+indice+")' class='btn u-btn-red'><i class='hs-admin-close'></i></button>";

		celda2.innerHTML = "<input class='form-control' type='text' name='concepto"+indice+"' id='concepto"+indice+"' value='Concepto'>";
		celda2.innerHTML += "<textarea class='form-control' name='descripcion"+indice+"' id='descripcion"+indice+"' placeholder='Detalles del concepto'></textarea>";

		celda3.innerHTML = "<input class='form-control' type='number' id='costo"+indice+"' name='costo"+indice+"' min='0' step='0.01' placeholder='Costo unitario'>";
		celda4.innerHTML = "<input class='form-control' type='number' id='cantidad"+indice+"' name='cantidad6"+indice+"' min='0' placeholder='Cantidad' >";
		celda5.innerHTML = "<input readonly='' class='form-control' type='number' id='pre_total"+indice+"' name='pre_total"+indice+"' min='0' >";
		var numF = (tabla.rows.length)-4;

		
		var t1=0;
			
			
		for (var i = 0; i <=indice ; i++) {

			if (document.getElementById('pre_total'+i))
			{
		
			
			 var con=document.getElementById("pre_total"+i).value;
			 
			if (con!=='') 
			{
				t1=t1+1;
					}
			
			}	
		}
		
		if (numF==t1) {
			document.getElementById("envio_cotizacion").disabled=false;

		}
		else{
			document.getElementById("envio_cotizacion").disabled=true;
		}





		document.getElementById("auxi").value = parseInt(indice)+1;
 		
	}

	function eliminarFila(fila,indice){
		var index = fila.parentNode.parentNode.rowIndex;
		document.getElementById("tablaCotizacion").deleteRow(index);

		var tabla = document.getElementById("tablaCotizacion");

		var indice=indice;

		var numF = (tabla.rows.length)-4;

		
		var t1=0;
			
			
		for (var i = 0; i <indice ; i++) {

			if (document.getElementById('pre_total'+i))
			{
		
			
			 var con=document.getElementById("pre_total"+i).value;
			 //alert(con);
			if (con!=='') 
			{
				t1=t1+1;
					}
			
			}	
		}

		if (numF==t1) {
			document.getElementById("envio_cotizacion").disabled=false;

		}
		else{
			document.getElementById("envio_cotizacion").disabled=true;
		}


		




		document.getElementById("auxi").value = parseInt(indice)-1;


		$.ajax({
	type:"POST",
	
	 url:base_url+"backend/administrador/cotizaciones/cCotizacion/eliminar/"+idsolicitud,
	 data:{indice:indice},
	 dataType: 'text',
			cache: false,
        	contentType: false,
        	processData: false,
	success: function(data){
		//$("#xx").load(base_url+'backend/administrador/cotizaciones/cCotizacion/tabla/'+c2+'');	
	}
});

	}
	

	function procesoFinalizado(){

		
var op1=1;
var formdata3 = new FormData();

formdata3.append('razon1',$('input[name=razon1]:checked').val());
formdata3.append('razon2',$('input[name=razon2]:checked').val());
formdata3.append('razon3',$('input[name=razon3]:checked').val());
formdata3.append('razon4',$('input[name=razon4]:checked').val());
formdata3.append('razon5',$('input[name=razon5]:checked').val());
formdata3.append('razon6',$('#razon6').val());



 $.ajax({
 	type:'POST',
                     url:base_url+"backend/administrador/cotizaciones/cRechazo_servicio/guardar/"+idsolicitud,
                     data: formdata3,
			dataType: 'text',
			cache: false,
        	contentType: false,
        	processData: false,
		            	success: function(data) {
		            		
		                       }
		});

$.ajax({
 	
                     url:base_url+"backend/administrador/cotizaciones/cCorreo/enviar/"+idsolicitud,
                      method:"POST",
                      data:{op1:op1},
                     
		            	success: function(data) {
		            	
		            		
		                       }
		});

		swal({
			title: "Proceso finalizado",
			text: "",
			icon: "success",
		})
		.then((value) => {
			window.location.href = "<?php echo base_url('backend/administrador/solicitudes/solicitudesPendientes'); ?>";
		})

		

	}


	function procesoFinalizado2(){

		var fpago = $('#fpago').val();

		



 $.ajax({
 	
                     url:base_url+"backend/administrador/cotizaciones/cPago/guardar1/"+idsolicitud,
                      method:"POST",
                       data:{fpago:fpago},
                      
                     
		            	success: function(data) {
		            		
		            		
		                       }
		});
 var op1=2;

$.ajax({
 	
                     url:base_url+"backend/administrador/cotizaciones/cCorreo/enviar/"+idsolicitud,
                      method:"POST",
                      data:{op1:op1},
                    
		            	success: function(data) {
		            		
		            		
		                       }
		});



		swal({
			title: "Notifcacion enviada",
			text: "",
			icon: "success",
		})
		 document.getElementById("envio_cotizacion").disabled=true;
		 document.getElementById("r").disabled=true;
		 document.getElementById("pag").disabled=false;

	}
	function aprobarCotizacion(desicion){

		var estatus="aprobada";
		swal({
			title: "Aprobar Pago",
			text: "Despues de revisar el pago realizado por el cliente se aprueba?",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				swal("Pago aprobado Cotización terminada", {
				  icon: "success",
				});
				
				$.ajax({
 	type:'POST',
                     url:base_url+"backend/administrador/cotizaciones/cPago/aprobar/",
                     data: {idsolicitud:idsolicitud,estatus:estatus},
						
		            	success: function(data) {
		            		
		                       }
		});


			} else {
				swal("volver a revisar!");
			}
		});
	}
function aprobarCotizacion2(desicion){

	var estatus="rechazo";
swal({
			title: "Rechazar Pago",
			text: "Indique las razones del rechazo",
			icon: "warning",
			buttons: true,
			dangerMode: true,
  			content: "input",
})
.then((value) => {
  //swal(`You typed: ${value}`);
   if (value) {
  var text=value;
  $.ajax({
 	type:'POST',
                     url:base_url+"backend/administrador/cotizaciones/cPago/aprobar/",
                     data: {idsolicitud:idsolicitud,estatus:estatus,text:text},
			
		            	success: function(data) {
		            		
		                       }
		});
}
});

	}
</script>

<script type="text/javascript">
function cambiar(){

var formdata3 = new FormData();

formdata3.append('pregunta1',$('input[name=pregunta1]:checked').val());
formdata3.append('pregunta2',$('input[name=pregunta2]:checked').val());
formdata3.append('pregunta3',$('input[name=pregunta3]:checked').val());
formdata3.append('pregunta4',$('input[name=pregunta4]:checked').val());
formdata3.append('pregunta5',$('input[name=pregunta5]:checked').val());
formdata3.append('pregunta6',$('input[name=pregunta6]:checked').val());
formdata3.append('pregunta7',$('input[name=pregunta7]:checked').val());
formdata3.append('pregunta8',$('input[name=pregunta8]:checked').val());

formdata3.append('observacion1',$('#observacion1').val());
formdata3.append('observacion2',$('#observacion2').val());
formdata3.append('observacion3',$('#observacion3').val());
formdata3.append('observacion4',$('#observacion4').val());
formdata3.append('observacion5',$('#observacion5').val());
formdata3.append('observacion6',$('#observacion6').val());
formdata3.append('observacion7',$('#observacion7').val());
formdata3.append('observacion8',$('#observacion8').val());


	

    


 $.ajax({
 	type:'POST',
                     url:base_url+"backend/administrador/cotizaciones/cVerificacion/guardar/"+idsolicitud,
                     data: formdata3,
			dataType: 'text',
			cache: false,
        	contentType: false,
        	processData: false,
		            	success: function(data) {
		            		
		                       }
		});

}
</script>
<script type="text/javascript">
function cambiar2(){

var formdata3 = new FormData();

formdata3.append('preg1',$('input[name=preg1_c]:checked').val());
formdata3.append('preg2',$('input[name=preg2_c]:checked').val());
formdata3.append('preg3',$('input[name=preg3_c]:checked').val());
formdata3.append('preg4',$('input[name=preg4_c]:checked').val());

 $.ajax({
 	type:'POST',
                     url:base_url+"backend/administrador/cotizaciones/cCondicion/guardar/"+idsolicitud,
                     data: formdata3,
			dataType: 'text',
			cache: false,
        	contentType: false,
        	processData: false,
		            	success: function(data) {
		            		
		                       }
		});

}
</script>

<script type="text/javascript">
function pre_suma(id,c){

var costo = $('#costo'+id).val();
var cantidad = $('#cantidad'+id).val();
document.getElementById("pre_total"+id).value = costo*cantidad;
if(id<6){
c2=parseInt($('#auxi').val());
}else{
c2=parseInt($('#auxi').val())+1;
}
var t=0;
for (var i = 0; i < c2; i++) {

	
	if (!document.getElementById('pre_total'+i)){
		//alert("hola");
	}
		else{
	
	t=parseInt( t)+parseInt($('#pre_total'+i).val());
	
}

}

//document.getElementById("sub_total").value = t;
document.getElementById("sub_t").innerHTML = "$ "+t;


var iva=t*0.16;
var total=parseInt(t)+parseInt(iva);
document.getElementById("tot").innerHTML = "$ "+total;
document.getElementById("tot_g").innerHTML = "$ "+new Intl.NumberFormat('es-MX').format(total);
document.getElementById("tot_p").innerHTML = "Total: $ "+new Intl.NumberFormat('es-MX').format(total);




var concepto =$('#concepto'+id).val();
var descripcion =$('#descripcion'+id).val();
var cantidad=$('#cantidad'+id).val();
var costo=$('#costo'+id).val();
var pre_total=$('#pre_total'+id).val();
var indice=id;




$.ajax({
	type:"POST",
	data:{idsolicitud:idsolicitud,concepto:concepto,descripcion:descripcion,cantidad:cantidad,costo,pre_total:pre_total,indice:indice},
	url:base_url+"backend/administrador/cotizaciones/cCotizacion/guardar/",
	success: function(data){
		//$("#xx").load(base_url+'backend/administrador/cotizaciones/cCotizacion/tabla/'+c2+'');	
	}
});


var tabla = document.getElementById("tablaCotizacion");
		var numFilas = (tabla.rows.length)-4;

		
		var t1=0;
			
			
		for (var i = 0; i <=c ; i++) {

			if (document.getElementById('pre_total'+i))
			{
		
			
			 var con=document.getElementById("pre_total"+i).value;
			 
			if (con!=="") 
			{
				t1=t1+1;
					}
			
			}	
		}
		
		
		if (numFilas==t1) {
			document.getElementById("envio_cotizacion").disabled=false;

		}
		else{
			document.getElementById("envio_cotizacion").disabled=true;
		}
			
		
 
}
</script>
<script >


	<? echo '
  var valorname;
function _(el){
  return document.getElementById(el);
}
function uploadFile(al){
  var file = _("file1").files[0];
  //alert(file.name+" | "+file.size+" | "+file.type);
  //var b=11;
  var formdata = new FormData();
  formdata.append("file1", file);
  //formdata.append("a", al);
  //formdata.append("nombre",valorname);
   formdata.append("fecha",$("#fecha_do").val());


  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler, false);
  ajax.addEventListener("load", completeHandler, false);
  ajax.addEventListener("error", errorHandler, false);
  ajax.addEventListener("abort", abortHandler, false);
  ajax.open("POST", base_url+"backend/administrador/cotizaciones/cPago/subir_archivo/"+idsolicitud+"");

  ajax.send(formdata);

}
function progressHandler(event){

  //_("loaded_n_total").innerHTML = "Uploaded "+(event.loaded/1024)+" Kb of "+ event.total;
  if(event.loaded==event.total){
  //_("loaded_n_total").innerHTML = "Subiendo "+(event.loaded/1024)+" Kb ";
//
  }
  var percent = (event.loaded / event.total) * 100;
  _("progressBar").value = Math.round(percent);
  _("status").innerHTML ="Cargando "+ Math.round(percent)+"% ... Espere";


}
function completeHandler(event){
  _("status").innerHTML = event.target.responseText;
  _("progressBar").value = 0;

document.getElementById("espera").style.display = "block";
   document.getElementById("no_d").style.display = "none";
   document.getElementById("desc").style.display = "block";
   document.getElementById("desc").style.width = "100%";

   
   
	
	document.getElementById("desc").href =base_url+"pago_cotizacion/"+document.getElementById("fecha_do").value+document.getElementById("file1").files[0].name;

  
}
function errorHandler(event){
  _("status").innerHTML = "Falla en Envio";
}
function abortHandler(event){
  _("status").innerHTML = "Envio Abortado";
}';?>
</script>
<script>
	function v_check(x){


		if (x==1) {
		var t1=0;
			var t2=0;
			var totall=0;
		for (var i = 1; i <9 ; i++) {
			var con =   $('input[name=pregunta'+i+']:checked').val(); 
			var con2 =   $('input[name=p'+i+']:checked').val(); 

			if (con!==undefined) {
				t1=t1+1;
				
			}
			if (con2!==undefined) {
				
				t2=t2+1;
			}
		
			
		}
		totall=parseInt(t1)+parseInt(t2);
		if (totall==8) {
			 document.getElementById("e1").disabled=false;


		}
	
		}
		if (x==2) {
		var t1=0;
			var t2=0;
			var totall=0;
		for (var i = 1; i <5 ; i++) {
			var con =   $('input[name=preg'+i+'_c]:checked').val(); 
			var con2 =   $('input[name=pr'+i+'_c]:checked').val(); 

			if (con!==undefined) {
				t1=t1+1;
				
			}
			if (con2!==undefined) {
				
				t2=t2+1;
			}
		
			
		}
		totall=parseInt(t1)+parseInt(t2);
		
		if (totall==4) {
			 document.getElementById("e2").disabled=false;


		}
	
		}
		

		 
			}
</script>