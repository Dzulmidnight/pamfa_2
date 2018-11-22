<table  width="100%" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3"  align="center" style="color: #CCC"><img style="width:75px;" class="img-responsive" src="<?php echo base_url(); ?>assets/img/logo/pamfa.jpg" alt=""></td>
        <td colspan="3" align="center">Cotización de servicio. </td>
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

<?php 
											$s=0;
											if (isset($consulta_cotizacion)) {

												 foreach($consulta_cotizacion as $filax)
										 	 	{ $s=$s+($filax->costo*$filax->cantidad);
																
																
																$iva=$s*0.16;
																$t=$s+$iva;
															}?>
												<div class="card-block u-info-v1-1 g-bg-white-gradient-v1--after g-pa-20" >
												<div >
							            			<!-- Info cotización -->
							            			<div class="h1 text-left">
							            				Cotización <span class="g-color-green"><?php echo "#CTZ".$consulta_pago->fk_id_solicitud;?></span>
							            				<span class="h2 float-right">Fecha de emisión: <?= date('d/m/Y', $consulta_pago->fecha)?></span>
							            			</div>
							            			<hr>
													<div class="row" class="col-lg-12">
										                <!-- Info empresa -->
										                <div class="col-lg-4 text-left" class="col-lg-5">
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
										                <div class="col-lg-4 text-right" class="col-lg-5">
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
														<div class="h1 col-lg-4 text-right g-color-blue" class="col-lg-2">
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
										            	
										            	
														
														
														<form id="cotiza" name="cotiza">
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
										</div>

									</div>
									<?php }?>