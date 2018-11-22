<table  width="100%" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3"  align="center" style="color: #CCC"><img style="width:75px;" class="img-responsive" src="<?php echo base_url(); ?>assets/img/logo/pamfa.jpg" alt=""></td>
        <td colspan="3" align="center">Revisión de solicitud y decisión de atención de solicitud. </td>
        <td align="center" style="color: #CCC"> <table width="100%"  border="1" cellspacing="0" >
          <tr>
            <td align="center">Clave: CER.RG.02</td>
          </tr>
          <tr>
            <td align="center">Versión: 03</td>
          </tr>
          <tr>
            <td align="center">Fecha de emisión:  14 marzo de 2017 </td>
          </tr>

		  
        </table></td>
       
      </tr>
      
        </table>
        <br><br><br>

												<div align="center">
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
										            <div class="" align="center">
										                <table id="tablaCotizacion" class="table table-bordered table-hover" align="center">
															<tr>
																<td>
																	Falta información del solicitante.
																</td>
																<td></td>
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
																<td></td>
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
																<td></td>
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
																<td></td>
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
																<td></td>
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
																<td></td>
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
											<!-- JS Global Compulsory -->
		