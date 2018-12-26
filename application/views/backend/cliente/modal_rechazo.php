
<!-- MODAL RECHAZAR SERVICIO -->
<div class="modal fade"   id="modal-rechaz" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Decisión</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div class="row">
			<!-- Area de observaciones. -->
			<div class="col-lg-12">
				<!-- No se puede otorgar -->
							<div>
		            			<!-- Info cotización -->
		            			<div class="h4 text-left">
		            				Estimado usuario
		            			</div>
		            			<hr>
								<div class="row">
					                <div class="col-lg-12">
										Por este medio hacemos de su conocimiento que por políticas de VERIFICACIÓN Y CERTIFICACIÓN PAMFA A.C., y en estricto apego a lo señalado en el esquema de certificación: <span class="g-color-red"><?php 
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
												}
											}?>
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
				<!-- End No se puede otorgar -->
			</div>
			<!-- End Area de observaciones. -->
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!--<button type="button" class="btn btn-primary">Guardar cambios</button>-->
      </div>
    </div>
  </div>
</div>
<!-- END MODAL RECHAZAR SERVICIO -->