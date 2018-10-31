<style>
#solicitudCertificacion input, #solicitudCertificacion textarea{
	border-color: #72c02c !important;
}


.tituloPrincipal{
	font-size: 18px;
	color: #e62154;
}
/* Style the form */
#regForm {
  /*background-color: #ffffff;
  margin: 100px auto;
  padding: 40px;
  width: 70%;*/
  min-width: 300px;
}
.temaEsquema{
	display: inline-block;
}
/* Style the input fields */
i{
	font-size: 20px;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}


/* Hide all steps by default: */
.tab {
  display: none;
}

/* Make circles that indicate the steps of the form: */
.contenedor {
  display: inline-block;
  margin: 0 2% 0 2%;
  text-align: center;

}
.step {
  height: 50px;
  width: 50px;
  margin: auto;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: block;
  opacity: 0.5;
}

/* Mark the active step: */
.step.active {
	color: #fff;
	background-color: #ff6348;
  	opacity: 1;
}

.stepHijo{
	display: flex;
   justify-content: center;
   align-items: center;
}
.stepHijo i{
	padding-top: 10px;
}
.stepTexto{
	width: 50px;
}

/* Mark the steps that are finished and valid: */
.step.finish {
	color: #ecf0f1;
 	background-color: #72c02c;
}

.pregunta{

}

.subPregunta{
	color: #c0392b;
}

.nombreEsquema{
	color: #72c02c;
	font-size: 18px;
	border-bottom: 3px solid #72c02c;
}
.nombreEsquema img{
	border: 3px solid #72c02c;
}

</style>
<!--
<a class='flotante btn u-btn-blue' href='#' data-modal-target="#modal1" data-modal-effect="fadein">
	<i class="et-icon-chat"></i> Observaciones
</a>-->

<div id="solicitudCertificacion">
	<div class="g-pa-20">
		<div class="row">

			<!-- Circles which indicates the steps of the form: -->

			<div class="col-md-12 visible-">
				<div class="text-center" style="margin-bottom:20px;">
					<span class="contenedor">
						<span class="step" onclick="nextPrev(-1)">
							<span class="stepHijo">
								<i class="icon-education-133 u-line-icon-pro"></i>
							</span>
						</span>
						<span class="stepTexto">
							Esquemas
						</span>
					</span>

					<span class="contenedor">
						<span class="step" onclick="nextPrev(1)">
							<span class="stepHijo">
								<i class="icon-education-007 u-line-icon-pro"></i>
							</span>
						</span>
						<span class="stepTexto">
							Datos cliente
						</span>
					</span>

					<span class="contenedor">
						<span class="step" onclick="nextPrev(1)">
							<span class="stepHijo">
								<i class="icon-finance-184 u-line-icon-pro"></i>
							</span>
						</span>
						<span class="stepTexto">
							Datos facturación
						</span>
					</span>

					<span class="contenedor">
						<span class="step" onclick="nextPrev(1)">
							<span class="stepHijo">
								<i class="icon-education-137 u-line-icon-pro"></i>
							</span>
						</span>
						<span class="stepTexto">
							Certificaciones anteriores
						</span>
					</span>

					<span class="contenedor">
						<span class="step" onclick="nextPrev(1)">
							<span class="stepHijo">
								<i class="icon-education-008 u-line-icon-pro"></i>
							</span>
						</span>
						<span class="stepTexto">
							Certificación
						</span>
					</span>

					<span class="contenedor">
						<span class="step" onclick="nextPrev(1)">
							<span class="stepHijo">
								<i class="icon-badge"></i>
							</span>
						</span>
						<span class="stepTexto">
							Paso final
						</span>
					</span>

				</div>
			</div>

			<div class="col-md-12">


					<!-- One "tab" for each step in the form: -->
					<!-- inicia 1.- SELECCIONAR EL ESQUEMA DE CERTIFICACIÓN -->
					<div class="tab">
				     	<div class="card g-brd-gray-light-v7 g-mb-10">
							<div id="esquema_certificacion">
								<div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">


										<div class="u-heading-v1-4 g-bg-main g-brd-primary g-mb-20">
											<h2 class="h3 u-heading-v1__title">ESQUEMA DE CERTIFICACIÓN</h2>
										</div>

										<div class="row">
											<div class="col-md-12">
												<h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black" style="margin-bottom:1em;">Seleccionar el esquema de certificación que está solicitando</h3>
											</div>
											<div  class="col-md-6">
													<!-- Toggles Checkbox -->
													<div class="form-group">

														<label id="divEsquema1" class="d-flex align-items-center justify-content-between" >
															<span>
																<img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>assets/img/esquemas_certificacion/esquema_global_gap.jpg" alt="">
																<p class="temaEsquema">GLOBALG.A.P IFA V5.1</p>
															</span>
															<div class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" id="check_globalgap_ifa" name="check_globalgap_ifa" type="checkbox" onclick="resaltarEsquema('check_globalgap_ifa','divEsquema1','img','cGlobal_ifa','GlobalGapIfa',<?php echo $ids;?>)">
																<div class="u-check-icon-radio-v8">
																	<i class="fa" data-check-icon=""></i>
																</div>
															</div>
														</label>
													</div>
													<!-- End Toggles Checkbox -->
											</div>
											<div  class="col-md-6">
													<!-- Toggles Checkbox -->
													<div class="form-group" >
														<label id="divEsquema2" class="d-flex align-items-center justify-content-between">
															<span>
																<img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>assets/img/esquemas_certificacion/esquema_global_gap.jpg" alt="">
																<p class="temaEsquema">GLOBALG.A.P CADENA DE CUSTODIA (CoC)</p>
															</span>
															<div class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" id="check_globalgap_coc" name="check_globalgap_coc" type="checkbox" onclick="resaltarEsquema('check_globalgap_coc','divEsquema2','img','cGlobal_coc','GlobalGapCoc',<?php echo $ids;?>)">
																<div class="u-check-icon-radio-v8">
																	<i class="fa" data-check-icon=""></i>
																</div>
															</div>
														</label>
													</div>
													<!-- End Toggles Checkbox -->
											</div>
											<div  class="col-md-6">
													<!-- Toggles Checkbox -->
													<div class="form-group">
														<label id="divEsquema3" class="d-flex align-items-center justify-content-between">
															<span>
																<img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>assets/img/esquemas_certificacion/esquema_mexico_calidad_suprema.jpg" alt="">
																<p class="temaEsquema">MÉXICO CALIDAD SUPREMA</p>
															</span>
															<div class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" id="check_mex_calidad_suprema" type="checkbox" onclick="

																resaltarEsquema('check_mex_calidad_suprema','divEsquema3','img','cMcs','MexCalidadSuprema',<?php echo $ids;?>)">
																<div class="u-check-icon-radio-v8">
																	<i class="fa" data-check-icon=""></i>
																</div>
															</div>
														</label>
													</div>
													<!-- End Toggles Checkbox -->
											</div>
											<div  class="col-md-6">
													<!-- Toggles Checkbox -->
													<div class="form-group">
														<label id="divEsquema4" class="d-flex align-items-center justify-content-between">
															<span>
																<img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>assets/img/esquemas_certificacion/esquema_senasica.jpg" alt="">
																<p class="temaEsquema">SISTEMA DE REDUCCIÓN DE RIESGOS DE CONTAMINACIÓN (SRRC)</p>
															</span>
															<div class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" id="check_srrc" type="checkbox" onclick="resaltarEsquema('check_srrc','divEsquema4','img','cSrrc','Srrc',<?php echo $ids;?>)">
																<div class="u-check-icon-radio-v8">
																	<i class="fa" data-check-icon=""></i>
																</div>
															</div>
														</label>
													</div>
													<!-- End Toggles Checkbox -->
											</div>
											<div  class="col-md-6">
													<!-- Toggles Checkbox -->
													<div class="form-group" >
														<label id="divEsquema5" class="d-flex align-items-center justify-content-between">
															<span>
																<img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>assets/img/esquemas_certificacion/esquema_hecho_en_mexico.jpg" alt="">
																<p class="temaEsquema">HECHO EN MÉXICO</p>
															</span>
															<div class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" id="check_hecho_en_mexico" name="check_hecho_en_mexico" type="checkbox" onclick="resaltarEsquema('check_hecho_en_mexico','divEsquema5','img','cMexico','HechoEnMexico',<?php echo $ids;?>)">


																<div class="u-check-icon-radio-v8">
																	<i class="fa" data-check-icon=""></i>
																</div>
															</div>
														</label>
													</div>
													<!-- End Toggles Checkbox -->
											</div>
											<div  class="col-md-6">
													<!-- Toggles Checkbox -->
													<div class="form-group">
														<label id="divEsquema6" class="d-flex align-items-center justify-content-between">
															<span style="height:85px;">
																<img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>assets/img/esquemas_certificacion/esquema_denominacion_origen.jpg" alt="">
																<p class="temaEsquema">DENOMINACIÓN DE ORIGEN</p>
															</span>
															<div class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" id="check_denominacion_origen" type="checkbox" onclick="resaltarEsquema('check_denominacion_origen','divEsquema6','img','cDen_origen','DenominacionOrigen',<?php echo $ids;?>)">
																<div class="u-check-icon-radio-v8">
																	<i class="fa" data-check-icon=""></i>
																</div>
															</div>
														</label>
													</div>
													<!-- End Toggles Checkbox -->
											</div>


										</div>

								</div>
							</div>
				     	</div>
					</div>
					<!-- termina SELECCIONAR EL ESQUEMA DE CERTIFICACIÓN -->

					<!-- inicia 2.- DATOS DEL CLIENTE -->
					<div class="tab">
				     	<div class="card g-brd-gray-light-v7 g-mb-10">
							<div id="datosCliente">
								<div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
									<form class="js-validate" id="gen" name="gen">
										 <?php
           foreach($consulta_datos_gral as $fila){
               ?>
										<div class="u-heading-v1-4 g-bg-main g-brd-primary g-mb-20">

										  <h2 class="h3 u-heading-v1__title">1.- DATOS DEL CLIENTE</h2>
										</div>

										<div class="row">
											<div class="col-md-6">

												<div class="row g-mb-20">
													<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
														<button type="button" class="btn btn-xs u-btn-orange" name="button" onclick="addObservacion('DATOS DEL CLIENTE','nombreLegal')">
															<i class="fa fa-close"></i>
														</button>
														<label class="pregunta mb-0" for="#nombreLegal">Nombre de la entidad legal *</label>
													</div>

													<div class="col-md-12 align-self-center">
														<div class="form-group g-pos-rel mb-0">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<textarea id="nombreLegal" name="nombreLegal" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Escribe aquí"><?php echo $fila->nombreLegal;?></textarea>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="row g-mb-20">
													<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
														<button type="button" class="btn btn-xs u-btn-orange" name="button" onclick="addObservacion('DATOS DEL CLIENTE','nombreRepresentante')">
															<i class="fa fa-close"></i>
														</button>
														<label class="pregunta mb-0" for="#nombreRepresentante">Nombre del representante legal *</label>
													</div>

													<div class="col-md-12 align-self-center">
														<div class="form-group g-pos-rel mb-0">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<textarea id="nombreRepresentante" name="nombreRepresentante" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Escribe aquí"><?php echo $fila->nombreRepresentante;?></textarea>
														</div>
													</div>
												</div>
											</div>

												<div class="col-md-12">

													<div class="row g-mb-20">
														<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
															<label class="pregunta mb-0" for="#email">Email *</label>
														</div>

														<div class="col-md-9 align-self-center">
															<div class="g-pos-rel">
																<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																	<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																</span>
																<input id="email" name="email" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="ejemplo@gmail.com" alue="<? echo $fila->email;?>"  required="required" >
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="row g-mb-20">
														<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
															<label class="pregunta mb-0" for="#telefono">Teléfono *</label>
														</div>

														<div class="col-md-9 align-self-center">
															<div class="g-pos-rel">
																<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																	<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																</span>
																<input id="telefono" name="telefono" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Escribe aqui" value="<? echo $fila->telefono;?>"  required="required" >
															</div>
														</div>
													</div>
												</div>


											<div class="col-md-6">
												<div class="row g-mb-20">
													<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
														<label class="pregunta mb-0" for="#fax">Fax</label>
													</div>

													<div class="col-md-9 align-self-center">
														<div class="g-pos-rel">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<input   class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Escribe aquí" value="<?php echo $fila->fax;?>" id="fax" name="fax">
														</div>
													</div>
												</div>
											</div>
										</div>


										<header>
											<h3 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">DIRECCIÓN DE LA ENTIDAD LEGAL</h3>
										</header>

										<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

										<div class="row">
											<div class="col-md-6">
												<div class="row g-mb-20">
													<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
														<label class="pregunta mb-0" for="#pais">País *</label>
													</div>

													<div class="col-md-9 align-self-center">
														<div class="row g-mx-minus-10">
															<div class="col-md align-self-center g-px-10 g-mb-20 g-mb-0--md">
																<div class="form-group u-select--v2 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
																	<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																		<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
																	</span>
																	<select class="js-select u-select--v2-select w-100" style="display: none;" name="pais" id="pais">
																		  <?php foreach($pais as $fila2){?>
                                                    	<option <?php if ($fila->pais==$fila2->id_pais) {?> selected
                                                    		<?                                                   	} ?> value="<?php echo $fila2->id_pais;?>" ><?php echo $fila2->nombre;?></option>
                                                        <?php }?>

																	</select>





																	<i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto g-mr-15"></i>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="row g-mb-20">
													<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
														<label class="pregunta mb-0" for="#estado">Estado *</label>
													</div>

													<div class="col-md-9 align-self-center">
														<div class="g-pos-rel">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<input  class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Escribe aquí" value="<? echo $fila->estado;?>"   id="estado" name="estado">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="row g-mb-20">
													<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
														<label class="pregunta mb-0" for="#municipio">Municipio *</label>
													</div>

													<div class="col-md-9 align-self-center">
														<div class="g-pos-rel">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<input  class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Escribe aquí" value="<? echo $fila->municipio;?>"  required="required" id="municipio" name="municipio">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="row g-mb-20">
													<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
														<label class="pregunta mb-0" for="#colonia">Colonia *</label>
													</div>

													<div class="col-md-9 align-self-center">
														<div class="g-pos-rel">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<input id="colonia" name="colonia" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Escribe aquí"  required="required" value="<? echo $fila->colonia;?>" >
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="row g-mb-20">
													<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
														<label class="pregunta mb-0" for="#cp">Codigo Postal</label>
													</div>

													<div class="col-md-9 align-self-center">
														<div class="g-pos-rel">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<input  class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Escribe aquí"  required="required" value="<? echo $fila->cp;?>" id="cp" name="cp">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="row g-mb-20">
													<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
														<label class="pregunta mb-0" for="#direccion">Dirección *</label>
													</div>

													<div class="col-md-9 align-self-center">
														<div class="form-group g-pos-rel mb-0">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<textarea  class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Escribe aquí" id="direccion" name="direccion"><? echo $fila->direccion;?></textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
										<input id="idcliente" name="idcliente" type="hidden" value="<? echo $fila->id_cliente;?>"/>
											<?php }?>
									</form>
								</div>

							</div>
				     	</div>
					</div>
					<!-- termina DATOS DEL CLIENTE -->

					<!------------------------- inicia 3.- DATOS DE FACTURACIÓN ---------------------->
					<div class="tab">
				    	<div class="card g-brd-gray-light-v7 g-mb-10">
							<div id="datos_facturacion">
								<div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
									<form class="js-validate" name="fis" id="fis">
										<?php foreach($consulta_fiscal as $fila){?>

										<div class="u-heading-v1-4 g-bg-main g-brd-primary g-mb-20">
										  <h2 class="h3 u-heading-v1__title">2.- DATOS DE FACTURACIÓN</h2>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="row g-mb-20">
													<div class="col-sm-12 align-self-center g-mb-5 g-mb-0--md">
														<button type="button" class="btn btn-xs u-btn-orange" name="button" onclick="addObservacion('DATOS DE FACTURACION','rfc')">
															<i class="fa fa-close"></i>
														</button>

														<label class="pregunta mb-0" for="#rfc">R.F.C *</label>
													</div>

													<div class="col-sm-12 align-self-center">
														<div class="form-group g-pos-rel mb-0">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<input id="rfc" name="rfc" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" vvalue="<? echo $fila->rfc;?>" required="required" data-msg="This field is mandatory"
														data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" placeholder="Escribe aquí">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="row g-mb-20">
													<div class="col-sm-12 align-self-center g-mb-5 g-mb-0--md">
														<button type="button" class="btn btn-xs u-btn-orange" name="button" onclick="addObservacion('DATOS DE FACTURACION','razonSocial')">
															<i class="fa fa-close"></i>
														</button>
														<label class="pregunta mb-0" for="#razonSocial">Razón social *</label>
													</div>

													<div class="col-sm-12 align-self-center">
														<div class="form-group g-pos-rel mb-0">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<textarea id="razonSocial" name="razonSocial"  class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Escribe aquí"><? echo $fila->razonSocial;?></textarea>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="row g-mb-20">
													<div class="col-sm-12 align-self-center g-mb-5 g-mb-0--md">
														<label class="pregunta mb-0" for="#emailFactura">Correo electrónico para envío de la factura</label>
													</div>

													<div class="col-sm-12 align-self-center">
														<div class="form-group g-pos-rel mb-0">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<input id="emailFactura" name="emailFactura" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<? echo $fila->emailFactura;?>" required="required" data-msg="This field is mandatory"
														data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" placeholder="ejemplo@gmail.com">
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="row g-mb-20">
													<div class="col-sm-12 align-self-center g-mb-5 g-mb-0--md">
														<label class="pregunta mb-0" for="#nombreFactura">Nombre de contacto para facturación</label>
													</div>

													<div class="col-sm-12 align-self-center">
														<div class="form-group g-pos-rel mb-0">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<input id="nombreFactura" name="nombreFactura" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<? echo $fila->nombreFactura;?>" required="required" data-msg="This field is mandatory"
														data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" placeholder="Escribe aquí">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="row g-mb-20">
													<div class="col-sm-12 align-self-center g-mb-5 g-mb-0--md">
														<label class="pregunta mb-0" for="#formaPago">Forma de pago</label>
													</div>

													<div class="col-sm-12 align-self-center">
															<div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
																<select class="js-select u-select--v3-select u-sibling w-100" required="required" title="Formas de pago" style="display: none;">
																	<option value="Efectivo" data-content='<span class="d-flex align-items-center w-100"><i style="color:green" class="icon-finance-130 u-line-icon-pro g-font-size-18 g-mr-15"></i><span>Efectivo</span></span>'>Efectivo
																	</option>
																	<option value="Transferencia" data-content='<span class="d-flex align-items-center w-100"><i style="color:green" class="icon-finance-139 u-line-icon-pro g-font-size-18 g-mr-15"></i><span>Transferencia</span></span>'>Transferencia
																	</option>
																	<option value="Cheque" data-content='<span class="d-flex align-items-center w-100"><i style="color:green" class="icon-finance-149 u-line-icon-pro g-font-size-18 g-mr-15"></i><span>Cheque</span></span>'>Cheque
																	</option>
																</select>

																<div class="d-flex align-items-center g-absolute-centered--y g-right-0 g-color-gray-light-v6 g-color-lightblue-v9--sibling-opened g-mr-15">
																	<i style="color:red" class="hs-admin-angle-down"></i>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="row g-mb-20">
													<div class="col-sm-12 align-self-center g-mb-5 g-mb-0--md">
														<label class="pregunta mb-0" for="#telFactura">Teléfono del contacto para facturación</label>
													</div>

													<div class="col-sm-12 align-self-center">
														<div class="form-group g-pos-rel mb-0">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<input id="telFactura" name="telFactura" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<? echo $fila->telFactura;?>" required="required" data-msg="This field is mandatory"
														data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" placeholder="Escribe aquí">
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="row g-mb-20">
													<div class="col-sm-12 align-self-center g-mb-5 g-mb-0--md">
														<label class="pregunta mb-0" for="#banco">Banco donde se realizó el pago</label>
													</div>

													<div class="col-sm-12 align-self-center">
														<div class="form-group g-pos-rel mb-0">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<input id="banco" name="banco" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<? echo $fila->banco;?>" required="required" data-msg="This field is mandatory"
														data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" placeholder="Escribe aquí">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="row g-mb-20">
													<div class="col-sm-12 align-self-center g-mb-5 g-mb-0--md">
														<label class="pregunta mb-0" for="#digitosTarjeta">Ultimos 4 digitos del número de cuenta de la cual se realiza el pago</label>
													</div>

													<div class="col-sm-12 align-self-center">
														<div class="form-group g-pos-rel mb-0">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<input id="digitosTarjeta" name="digitosTarjeta"  class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" placeholder="XXXX" data-mask="9999-" data-msg="This field is mandatory"
														data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" value="<? echo $fila->digitosTarjeta;?>">

														</div>
													</div>


												</div>
											</div>

											<div class="col-md-6">
												<div class="row g-mb-20">
													<div class="col-sm-12 align-self-center g-mb-5 g-mb-0--md">
														<label class="pregunta mb-0" for="#cdfi">Indicar el uso del CFDI</label>
													</div>

													<div class="col-sm-12 align-self-center">
														<div class="form-group g-pos-rel mb-0">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<textarea id="cdfi" name="cdfi" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Escribe aquí"><? echo $fila->cdfi;?></textarea>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-12">
												<div class="row g-mb-20">
													<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
														<label class="pregunta mb-0" for="#dirFiscal">Dirección en el R.F.C de la entidad legal</label>
													</div>

													<div class="col-md-12 align-self-center">
														<div class="form-group g-pos-rel mb-0">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<textarea id="dirFiscal" name="dirFiscal" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="calle, numero, CP, Ciudad, Municipio, Estado, Pais"><? echo $fila->dirFiscal;?></textarea>
														</div>
													</div>
												</div>
											</div>

										</div>


										<!--<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

										<div>
											<button class="btn btn-md btn-xl--md u-btn-lightblue-v3 g-width-160--md g-font-size-12 g-font-size-default--md g-mb-10" type="submit">Guardar cambios</button>
											<button class="btn btn-md btn-xl--md u-btn-outline-gray-dark-v6 g-font-size-12 g-font-size-default--md g-mr-10 g-mb-10" type="reset">Cancelar</button>
										</div>-->
										<input id="idcliente" name="idcliente" type="hidden" value="<? echo $fila->fk_id_cliente;?>"/>
									<? }?>
									</form>
								</div>
							</div>
				    	</div>
					</div>
					<!-- termina DATOS DE FACTURACIÓN -->


					<!------------------------ inicia 3.- CERTIFICACIONES ANTERIORES ------------------------>
					<div class="tab">
				     	<div class="card g-brd-gray-light-v7 g-mb-10">

							<div id="certificaciones_anteriores">
								<div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
									<form class="js-validate" id="certificacion" name="certificacion">

										<div class="u-heading-v1-4 g-bg-main g-brd-primary g-mb-20">
										  <h2 class="h3 u-heading-v1__title">3.- CERTIFICACIONES ANTERIORES</h2>
										</div>

										<!-- relacionados a GLOBALG.A.P -->
										<div class="row">

											<!-- inicia certificación GLOBALGAP -->
											<div class="col-md-12">
												<div class="mb-10">
													<h4 class="g-font-weight-500 g-font-size-14 g-font-size-22--md g-color-black g-mb-10">
														¿Ha estado certificado con GLOBALG.A.P anteriormente?
													</h4>

													<div id="radioCertificacionGlobaGAP" class="btn-group justified-content" style="width:40%">
														<label class="u-check">
															<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="certificacionGlobalGAP" id="certificacionGlobalGAP" type="radio" value="SI" onclick="validarRadios('certificacionGlobalGAP', 'numerosGlobalGAP')">
															<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">SI</span>
														</label>
														<label class="u-check">
															<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="certificacionGlobalGAP" name="certificacionGlobalGAP2" type="radio" value="NO" onclick="validarRadios('certificacionGlobalGAP', 'numerosGlobalGAP')">
															<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">NO</span>

														</label>
													</div>
												</div>
											</div>

											<!-- inicia sub preguntas GLOBALGAP -->
											<div id="numerosGlobalGAP" class="col-md-12" style="margin-top:1em; display:none">
												<div class="row">

													<!-- numero GLOBALGAP GGN -->
													<div class="col-md-4">
														<div class="form-group ">
															<label class="g-mb-10 subPregunta" for="preg1">
																Ingresar el Numero GLOBAL.G.A.P (GGN)
															</label>

															<div class="g-pos-rel">
																<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																	<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																</span>
																<input id="preg1" name="preg1" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="GLOBALG.A.P NUMBER" value="<?php echo $consulta_cert->preg1;?>">
															</div>
														</div>
													</div>
													<!-- numero GLOBALGAP CoC -->
													<div class="col-md-4">
														<div class="form-group ">
															<label class="g-mb-10 subPregunta" for="preg2">
																Ingresar el Número CoC
															</label>

															<div class="g-pos-rel">
																<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																	<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																</span>
																<input id="preg2" name="preg2" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="CoC Number" value="<?php echo $consulta_cert->preg2;?>">
															</div>
														</div>
													</div>


													<!-- GLN (global localization number ) GS1 -->
													<div class="col-md-4">
														<p class="subPregunta">
															¿Cuenta con GLN (Global Localitzation Number) solicitado a GS1?
														</p>
														<div class="form-group g-mb-10">
															<label class="u-check g-pl-25">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="certificacionGLN" id="certificacionGLN" type="radio" onclick="validarRadios('certificacionGLN', 'divGLN')" value="SI">
																<div class="u-check-icon-font g-absolute-centered--y g-left-0">
																<i class="fa" data-check-icon="" data-uncheck-icon=""></i>
																</div>
																SI
															</label>
														</div>
														<div id="divGLN" style="display:none">
															<!-- Text Input -->
															<div class="form-group u-has-success-v1-1 g-mb-20">
																<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																	<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																</span>
																<input id="preg3" name="preg3" class="form-control form-control-md rounded-0" type="text" placeholder="Ingresa tu número GLN" value="<?php echo $consulta_cert->preg3;?>">
																<small class="form-control-feedback d-block g-bg-primary g-color-white g-font-size-12 g-px-14 g-py-3 mt-0">
																	Información requerida
																</small>
															</div>
															<!-- End Text Input -->
														</div>

														<div class="form-group g-mb-10">
															<label class="u-check g-pl-25">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="certificacionGLN" id="certificacionGLN2" type="radio" onclick="validarRadios('certificacionGLN', 'divGLN')" value="NO">
																<div class="u-check-icon-font g-absolute-centered--y g-left-0">
																<i class="fa" data-check-icon="" data-uncheck-icon=""></i>
																</div>
																NO
															</label>
														</div>
													</div>
												</div>
											</div>
											<!-- terminan sub-preguntas GLOBALGAP -->

											<div class="col-md-12">
												<hr>
											</div>

										</div>

										<!-- inicia sección OTRAS CERTIFICACIONES -->
										<div class="row">

											<!-- inicia registro SENASICA -->
											<div class="col-md-4 g-mb-10">
												<div class="mb-10">
													<h4 class="g-font-weight-500 g-font-size-14 g-font-size-22--md g-color-black g-mb-10">
														¿Se encuentra registrado ante SENASICA?
													</h4>

													<div id="registroSenasica" class="btn-group justified-content">
														<label class="u-check">
															<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="certificacionSenasica" id="certificacionSenasica" type="radio" value="SI" onclick="validarRadios('certificacionSenasica', 'divSenasica')">
															<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">SI</span>
														</label>
														<label class="u-check">
															<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="certificacionSenasica" id="certificacionSenasica2" type="radio" onclick="validarRadios('certificacionSenasica', 'divSenasica')" value="<?php echo $consulta_cert->preg4;?>">
															<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">NO</span>

														</label>
													</div>
												</div>

													<div id="divSenasica" class="form-group" style="display:none">
														<!-- Text Input -->
														<div class="form-group u-has-success-v1-1 g-mb-20">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<input id="preg4" name="preg4" class="form-control form-control-md rounded-0" type="email" placeholder="Número de registro de SENASICA" value="<?php echo $consulta_cert->preg4;?>">
															<small class="form-control-feedback d-block g-bg-primary g-color-white g-font-size-12 g-px-14 g-py-3 mt-0">
																Información requerida
															</small>
														</div>
														<!-- End Text Input -->
													</div>

											</div>

											<!-- inicia registro MEXICO CALIDAD SUPREMA -->
											<div class="col-md-4 g-mb-10">
												<div class="mb-10">
													<h4 class="g-font-weight-500 g-font-size-14 g-font-size-22--md g-color-black g-mb-10">
														¿Cuenta con registro de México Calidad Suprema?
													</h4>

													<div id="radioMexCalidadSuprema" class="btn-group justified-content">
														<label class="u-check">
															<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioMexCalidadSuprema" type="radio" value="SI" onclick="validarRadios('radioMexCalidadSuprema', 'regMexCalidadSuprema')">
															<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">SI</span>
														</label>
														<label class="u-check">
															<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioMexCalidadSuprema" type="radio" value="NO" onclick="validarRadios('radioMexCalidadSuprema', 'regMexCalidadSuprema')" >
															<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">NO</span>

														</label>
													</div>
												</div>

													<div id="regMexCalidadSuprema" class="form-group" style="display:none">
														<!-- Text Input -->
														<div class="form-group u-has-success-v1-1 g-mb-20">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<input id="preg5" name="preg5" class="form-control form-control-md rounded-0" type="email" placeholder="Registro de México Calidad Suprema" value="<?php echo $consulta_cert->preg5;?>">
															<small class="form-control-feedback d-block g-bg-primary g-color-white g-font-size-12 g-px-14 g-py-3 mt-0">
																Información requerida
															</small>
														</div>
														<!-- End Text Input -->
													</div>
											</div>

											<!-- inicia registro PRIMUSGSF -->
											<div class="col-md-4">
												<div class="mb-10">
													<h4 class="g-font-weight-500 g-font-size-14 g-font-size-22--md g-color-black g-mb-10">
														¿Ha estado certificado bajo el esquema PrimusGSF?
													</h4>

													<div id="radioCertificacionGlobaGAP" class="btn-group justified-content">
														<label class="u-check">
															<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="certificacionPrimus" id="certificacionPrimus" type="radio" value="SI" onclick="validarRadios('certificacionPrimus', 'divPrimus')">
															<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">SI</span>
														</label>
														<label class="u-check">
															<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="certificacionPrimus" id="certificacionPrimus2"type="radio" value="NO" onclick="validarRadios('certificacionPrimus', 'divPrimus')">
															<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">NO</span>

														</label>
													</div>
												</div>

													<div id="divPrimus" class="form-group" style="display:none">
														<!-- Text Input -->
														<div class="form-group u-has-success-v1-1 g-mb-20">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<input id="preg6" name="preg6" class="form-control form-control-md rounded-0" type="email" placeholder="Número PrimusGSF" value="<?php echo $consulta_cert->preg6;?>">
															<small class="form-control-feedback d-block g-bg-primary g-color-white g-font-size-12 g-px-14 g-py-3 mt-0">
																Información requerida
															</small>
														</div>
														<!-- End Text Input -->
													</div>
											</div>

											<div class="col-md-12">
												<hr>
											</div>

											<!-- nombre responsable aplicación -->
											<div class="col-md-6">
												<!-- Input -->
												<div class="form-group g-mb-30">
													<label class="g-mb-10" for="preg7">Nombre del responsable de la aplicación de la norma de certificación en la entidad legal</label>

													<div class="g-pos-rel">
														<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
															<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
														</span>
														<input id="preg7" name="preg7" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Escribe aquí" value="<?= $consulta_cert->preg7 ?>">
													</div>
												</div>
												<!-- End Input -->
											</div>

											<!-- nombre responsable autoevaluación -->
											<div class="col-md-6">
												<!-- Input -->
												<div class="form-group g-mb-30">
													<label class="g-mb-10" for="preg8">Nombre de la persona que realizó la autoevaluación interna en la entidad legal</label>

													<div class="g-pos-rel">
														<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
															<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
														</span>
														<input id="preg8" name="preg8" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Escribe aquí" value="<?php echo $consulta_cert->preg8;?>">
													</div>
												</div>
												<!-- End Input -->
											</div>

											<div class="col-md-12">
												<hr>
											</div>

										</div>
										<!-- termina sección OTRAS CERTIFICACIONES -->

										<!-- inicia sección OTRO ORGANISMO DE CERTIFICACIÓN -->
										<div class="row">

											<!-- pregunta otro organismo de certificación -->
											<div class="col-md-12">
												<div class="mb-10">
													<h4 class="g-font-weight-500 g-font-size-14 g-font-size-22--md g-color-black g-mb-10">
														¿Ha estado certificado anteriormente con otro organismo de certificación?
													</h4>

													<div id="radioCertificacionGlobaGAP" class="btn-group justified-content" style="width:40%">
														<label class="u-check">
															<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="otroOrganismo" id="otroOrganismo" type="radio" value="SI" onclick="validarRadios('otroOrganismo', 'divOrganismoCertificacion')">
															<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">SI</span>
														</label>
														<label class="u-check">
															<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="otroOrganismo" id="otroOrganismo2" type="radio" value="NO" onclick="validarRadios('otroOrganismo', 'divOrganismoCertificacion')" >
															<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">NO</span>

														</label>
													</div>
												</div>
											</div>

											<!-- inicia registrar otro organismo de certificación -->
											<div id="divOrganismoCertificacion" class="col-md-12" style="display:none">
												<div class="row">

													<!-- nombre del organismo de certificación -->
													<div class="col-sm-6">
														<!-- Input -->
														<div class="form-group g-mb-30">
															<label class="g-mb-10 g-mt-20" for="inputGroup-1_1">
																Nombre del Organismo
															</label>

															<div class="g-pos-rel">
																<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																	<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																</span>
																<input  id="organismo" name="organismo" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Escribe aquí" value="<?php echo $consulta_cert->organismo;?>">
															</div>
														</div>
														<!-- End Input -->
													</div>

													<!-- periodo de la certificación -->
													<div class="col-sm-6">
														<!-- Select Date Range -->
														<div class="form-group mb-30">
															<label class="g-mb-10 g-mt-20">Periodo del certificado</label>
															<div class="row">
																<div class="col-xl-6 g-mb-40 g-mb-0--xl">
																	<div class="form-group mb-0 g-max-width-400">
																		<input type="date" id="fecha_inicio" class="form-control" name="fecha_inicio" value="<?php echo $consulta_cert->fecha_inicio;?>" placeholder="dd/mm/aaaa">
																	</div>
																</div>

																<div class="col-xl-6">
																	<!-- Datepicker -->
																	<div class="form-group mb-0 g-max-width-400">
																		<input type="date" class="form-control" id="fecha_fin" name="fecha_fin" placeholder="d/m/Y" value="<?php echo $consulta_cert->preg1;?>">

																	</div>
																	<!-- End Datepicker -->
																</div>
															</div>
														</div>
														<!-- End Select Date Range -->
													</div>
													<!-- termina periodo de la certificación -->

												</div>
											</div>

										</div>
										<!-- termina sección OTRO ORGANISMO DE CERTIFICACIÓN -->

									</form>
								</div>
							</div>
				     	</div>
					</div>
					<!-- termina CERTIFICACIONES ANTERIORES -->

					<!-- inicia 4.- ESQUEMAS DE CERTIFICACIÓN -->
					<div class="tab">
				     	<div class="card g-brd-gray-light-v7 g-mb-10">

							<div id="datosCliente">
								<div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">


										<div class="u-heading-v1-4 g-bg-main g-brd-primary g-mb-20">
										  <h2 class="h3 u-heading-v1__title">4.- ESQUEMA DE CERTIFICACIÓN</h2>
										</div>

										<div class="row">


											<!--------------- inicia sección global gap ifa -------------->

											<div id="divGlobalGapIfa" class="col-md-12" style="display: none"  >
												<form class="js-validate" id="global_ifa" name="global_ifa" >
													<div class="row">
														<div class="col-sm-12">
															<h4 class="nombreEsquema" style="font-size:14px;">
																<img src="<?php echo base_url(); ?>assets/img/esquemas_certificacion/esquema_global_gap.jpg" alt=""> GLOBALG.A.P IFA V5.1
															</h4>
														</div>

														<div class="col-sm-12">
															<div class="form-group g-mb-30">
																<label class="g-mb-10" for="inputGroup-1_1">
																	Ingresa los productos por certificar
																</label>

																<div class="g-pos-rel">
												                    <div class="u-tagsinput--v2--gray g-brd-around g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-6 g-py-5">
																		<div class="form-group g-pos-rel mb-0">
																			<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																				<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																			</span>
																			<input type="text" class="form-control" value="<?php if (isset($consulta_ifa)) { echo $consulta_ifa->productos;}?>" data-role="tagsinput" placeholder="Ingresa los productos" id="productos" name="productos">
																		</div>
												                    </div>
																</div>
															</div>
														</div>

														<div class="col-md-6">
															<table class="table table-bordered">
																<tr>
																	<td colspan="3">
																		Opción 1: Productor individual
																	</td>
																</tr>
																<tr class="text-justify">
																	<td>
																		<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																			<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalIfa"  id="radioGlobalIfa1" type="radio" value="productor_individual" onclick="grupoProductores()">
																			<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																				<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																			</div>
																			Productor individual
																		</label>
																	</td>
																	<td>
																		<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																			<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalIfa" id="radioGlobalIfa2"type="radio" value="productor_individual_con_sistema" onclick="grupoProductores()">
																			<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																				<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																			</div>
																			Productor individual con explotaciones múltiples con sistema de Gestión de calidad
																		</label>
																	</td>
																	<td>
																		<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																			<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalIfa" id="radioGlobalIfa3" type="radio" value="productor_individual_sin_sistema" onclick="grupoProductores()">
																			<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																				<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																			</div>
																			Productor individual con Explotaciones múltiples sin Sistema de Gestión de Calidad.
																		</label>
																	</td>
																</tr>
															</table>
														</div>
														<div class="col-md-6">
															<table class="table table-bordered">
																<tr>
																	<td colspan="2">
																		<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																			<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalIfa" id="radioGlobalIfa4" type="radio" onclick="grupoProductores()" value="grupo_productores">
																			<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																				<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																			</div>
																			Opcíon 2: Grupo de productores
																		</label>
																	</td>
																</tr>
																<tr class="text-justify">
																	<td>
																		<div class="row g-mb-20">
																			<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
																				<label class="pregunta mb-0" for="#num_productores">Número de productores a certificar</label>
																			</div>

																			<div class="col-md-12 align-self-center">
																				<div class="form-group g-pos-rel mb-0">
																					<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																						<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																					</span>
																					<input id="num_productores" name="num_productores" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="int"  required="required" data-msg="This field is mandatory"
																				data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" value="<?php if (isset($consulta_ifa)) {echo $consulta_ifa->num_productores;}?>">
																				</div>
																			</div>
																		</div>
																	</td>
																	<td>
																		<div class="row g-mb-20">
																			<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
																				<label class="pregunta mb-0" for="#num_unidades_produccion">Número de unidades de producción a certificar</label>
																			</div>

																			<div class="col-md-12 align-self-center">
																				<div class="form-group g-pos-rel mb-0">
																					<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																						<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																					</span>
																					<input id="num_unidades_produccion" name="num_unidades_produccion"  class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" required="required" data-msg="This field is mandatory"
																				data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" value="<?php if (isset($consulta_ifa)) { echo $consulta_ifa->num_unidades_prod;}?>">
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>
															</table>
														</div>
														<div class="col-sm-12">
															<div class="form-group g-mb-30">
																<label class="g-mb-10" for="inputGroup-1_1">
																	Número de unidades de manipulación de productos a certificar
																</label>

																<div class="g-pos-rel">
																	<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																		<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																	</span>
																	<input id="num_unidades_manipulacion" name="num_unidades_manipulacion" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Escribe aquí" value="<?php if (isset($consulta_ifa)) { echo $consulta_ifa->num_unidades_manip;}?>" >
																</div>
															</div>
														</div>
													</div>
												</form>
											</div>
											<!------------- termina sección global gap ifa -------------->

											<!-- inicia mostrar global gap coc -->
											<div id="divGlobalGapCoc" class="col-md-12" style="display: none" >
												<form class="js-validate" id="global_coc" name="global_coc">
													<div class="row">
														<div class="col-sm-12">
															<h4 class="nombreEsquema" style="font-size:14px;">
																<img src="<?php echo base_url(); ?>assets/img/esquemas_certificacion/esquema_global_gap.jpg" alt="">
																GLOBALG.A.P CADENA DE CUSTODIA (CoC)
															</h4>
														</div>
														<div class="col-md-12" style="margin-bottom:1em;">
															<p>
																Ingresa lo(s) producto(s) por certificar
															</p>

										                    <div class="u-tagsinput--v2--gray g-brd-around g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-6 g-py-5">
																<div class="form-group g-pos-rel mb-0">
																	<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																		<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																	</span>
																	<input type="text"  data-role="tagsinput" placeholder="Ingresa los productos" id="productos_coc" name="productos_coc"  value="<?php if (isset($consulta_coc)) {echo $consulta_coc->productos;}?>">
																</div>
										                    </div>
														</div>
														<div class="col-sm-6">
															<table class="table table-bordered">
																<tr>
																	<td colspan="3">
																		<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																			<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalCoc" type="radio" onclick="radioCoc()" value="explotacion_individual"  id="radioGlobalCoc1">
																			<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																				<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																			</div>
																			Opción 1, Explotación individual
																		</label>
																	</td>
																</tr>
																<tr class="text-justify">
																	<td>
																		<div class="row g-mb-20">
																			<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
																				<label class="pregunta mb-0" for="#realiza_etiquetado">¿La empresa realiza el etiquetado?</label>
																			</div>

																			<div class="col-md-12 align-self-center">
																				<div class="form-group g-pos-rel mb-0">
																					<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																						<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																					</span>
																					<input id="op1_preg1" name="op1_preg1" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<?php if (isset($consulta_coc)) {echo $consulta_coc->op1_preg1;}?>" required="required" data-msg="This field is mandatory"
																				data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
																				</div>
																			</div>
																		</div>
																	</td>
																	<td>
																		<div class="row g-mb-20">
																			<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
																				<label class="pregunta mb-0" for="#sistema_trazabilidad">¿Cuenta con un sistema de trazabilidad?</label>
																			</div>

																			<div class="col-md-12 align-self-center">
																				<div class="form-group g-pos-rel mb-0">
																					<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																						<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																					</span>
																					<input id="op1_preg2" name="op1_preg2" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<?php if (isset($consulta_coc)) {echo $consulta_coc->op1_preg2;}?>" required="required" data-msg="This field is mandatory"
																				data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
																				</div>
																			</div>
																		</div>
																	</td>

																</tr>
															</table>
														</div>
														<div class="col-sm-6">
															<table class="table table-bordered">
																<tr>
																	<td colspan="3">
																		<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																			<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radioGlobalCoc" type="radio" onclick="radioCoc()" value="explotacion_multiple"  id="radioGlobalCoc2">
																			<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																				<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																			</div>
																			Opción 1, Explotación Multiple
																		</label>
																	</td>
																</tr>
																<tr class="text-justify">
																	<td>
																		<div class="row g-mb-20">
																			<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
																				<label class="pregunta mb-0" for="#cantidad_estimada_producto">
																					Cantidad estimada de producto certificado (Voluntario) en toneladas anual
																				</label>
																			</div>

																			<div class="col-md-12 align-self-center">
																				<div class="form-group g-pos-rel mb-0">
																					<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																						<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																					</span>
																					<input id="op2_preg1" name="op2_preg1" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<?php if (isset($consulta_coc)) { echo $consulta_coc->op2_preg1;}?>" required="required" data-msg="This field is mandatory"
																				data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
																				</div>
																			</div>
																		</div>
																	</td>
																	<td>
																		<div class="row g-mb-20">
																			<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
																				<label class="pregunta mb-0" for="#num_total_unidades">
																					Número total de unidades de producción: ranchos, huertos o invernaderos
																				</label>
																			</div>

																			<div class="col-md-12 align-self-center">
																				<div class="form-group g-pos-rel mb-0">
																					<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																						<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																					</span>
																					<input id="op2_preg2" name="op2_preg2" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<?php if (isset($consulta_coc)) {echo $consulta_coc->op2_preg2;}?>" required="required" data-msg="This field is mandatory"
																				data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
																				</div>
																			</div>
																		</div>
																	</td>
																	<td>
																		<div class="row g-mb-20">
																			<div class="col-md-12 align-self-center g-mb-5 g-mb-0--md">
																				<label class="pregunta mb-0" for="#num_unidades_produccion_certificar">
																					Número de unidades de producción a certificar
																				</label>
																			</div>

																			<div class="col-md-12 align-self-center">
																				<div class="form-group g-pos-rel mb-0">
																					<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																						<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																					</span>
																					<input id="op2_preg3" name="op2_preg3" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<?php if (isset($consulta_coc)) { echo $consulta_coc->op2_preg3;}?>"required="required" data-msg="This field is mandatory"
																				data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>
															</table>
														</div>

														<div class="col-md-12">
															<table class="table table-bordered">
																<thead>
																	<tr>
																		<th colspan="3">
																			Declaración sobre producción paralela (PP) y propiedad paralela (PO), seleccione SI o NO, se detallara la información en el anexo CER.RG.01
																		</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			¿El producto se vende antes de la cosecha?
																		</td>
																		<td>
																			<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																				<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="coc_preg1" id="coc_preg1" type="radio" value="SI">
																				<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																					<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked" ></i>
																				</div>
																				SI
																			</label>
																		</td>
																		<td>
																			<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																				<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="coc_preg1" id="coc_preg1_2" type="radio" value="NO">
																				<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																					<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																				</div>
																				NO
																			</label>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			¿La entidad legal realiza la producción de producto certificado y no certificado, es decir, producción paralela (PP)?
																		</td>
																		<td>
																			<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																				<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="coc_preg2" id="coc_preg2" type="radio" value="SI">
																				<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																					<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																				</div>
																				SI
																			</label>
																		</td>
																		<td>
																			<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																				<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="coc_preg2" id="coc_preg2_2" type="radio" value="NO">
																				<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																					<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																				</div>
																				NO
																			</label>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			¿La entidad legal que produce el producto, compra el mismo produco a otros proveedores, es decir, propiedad paralela (PO)?
																		</td>
																		<td>
																			<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																				<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="coc_preg3" id="coc_preg3" type="radio" value="SI">
																				<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																					<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																				</div>
																				SI
																			</label>
																		</td>
																		<td>
																			<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
																				<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="coc_preg3" id="coc_preg3_2" type="radio" value="NO">
																				<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
																					<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
																				</div>
																				NO
																			</label>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</form>
											</div>

											<!-- termina mostrar global gap coc -->



											<!-- inicia mostrar mexico calidad suprema -->

											<div id="divMexCalidadSuprema" class="col-md-12" style="display: none"  >
												<form id="mcs">
												<div class="row">
													<div class="col-sm-12">
														<h4 class="nombreEsquema" style="font-size:14px;">
															<img src="<?php echo base_url(); ?>assets/img/esquemas_certificacion/esquema_mexico_calidad_suprema.jpg" alt="">
															MÉXICO CALIDAD SUPREMA
														</h4>
													</div>
													<?php
														$bmex=0;
												if(isset($consulta_mexcalsup)){$bmex=1;}?>
													<div class="col-md-6">
														<h4>
															Alcance de la certificación
														</h4>

														<select class="selectMultiple" name="alcance_certificacion" id="alcance_certificacion" multiple>
															<option <?php if($bmex==1 &&strpos($consulta_mexcalsup->alcance,'proceso')!==false){?>selected="selected"<? }?>value="proceso">Proceso</option>
															<option <?php if($bmex==1 &&strpos($consulta_mexcalsup->alcance,'producto')!==false){?>selected="selected"<? }?>value="producto">Producto</option>
														</select>
													</div>
													<div class="col-md-6">
														<h4>
															Pliego de condiciones
														</h4>
														<select class="selectMultiple" name="pliego_condiciones_mcs" id="pliego_condiciones_mcs" multiple>
															<option <?php if($bmex==1 &&strpos($consulta_mexcalsup->productos,'Aguacate')!==false){?>selected="selected"<? }?>value="Aguacate">Aguacate</option>
															<option <?php if($bmex==1 &&strpos($consulta_mexcalsup->productos,'Mexicano')!==false){?>selected="selected"<? }?> value="Mexicano">Limón Mexicano</option>
															<option <?php if($bmex==1 &&strpos($consulta_mexcalsup->productos,'Persa')!==false){?>selected="selected"<? }?> value="Persa">Limón Persa</option>
															<option <?php if($bmex==1 &&strpos($consulta_mexcalsup->productos,'Mango')!==false){?>selected="selected"<? }?> value="Mango">Mango</option>
															<option <?php if($bmex==1 &&strpos($consulta_mexcalsup->productos,'Cavendish')!==false){?>selected="selected"<? }?> value="Cavendish">Banano Cavendish</option>
															<option <?php if($bmex==1 &&strpos($consulta_mexcalsup->productos,'Dominico')!==false){?>selected="selected"<? }?> value="Dominico">Platano Dominico</option>
														</select>
													</div>

													<!-- inicia listado de equipos de verificación -->
													<div class="col-sm-12" style="margin-top:1.5em;">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th colspan="3">
																		Enliste los equipos de medición utilizados para el pliego de condición solicitado
																	</th>
																</tr>
																<tr>
																	<th>
																		 <? $n1=1;
		 																	$n2=2;?>
																		<button class="btn btn-sm btn-success" data-toggle="tooltip" title="Agregar otro equipo" type="button" onClick="uploadFile3()  ; " ><i class="fa fa-plus"></i></button> Equipo
																	</th>
																	<th>
																		Copia de los certificados de calibración
																	</th>
																	<th>
																		Copia de los registros de las verificaciones internas
																	</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		<div class="form-group g-pos-rel mb-0">
																			<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																				<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																			</span>
																			<textarea id="equipom" name="equipom" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Nombre del equipo"></textarea>
																		</div>
																	</td>
																	<td>
																		<input type="file" name="file5_mex" id="file5_mex" class="form-control">







                    										<progress class="form-control" id="progressBar5" value="0" max="100"  style="width:300px;"></progress>
                    										<h3 id="status5"></h3>
																	</td>
																	<td>
																		<input type="file" name="file6_mex" id="file6_mex" class="form-control">






                    										<progress class="form-control" id="progressBar5" value="0" max="100"  style="width:300px;"></progress>
                    										<h3 id="status5"></h3>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div id="tabla_mexcalsup" class="col-sm-12">
														<?  if (isset($consulta_productos)) {?>

<table id="pro" name="pro" >
							<thead >
								<tr>
									<th >
										Equipo
									</th>


									<th >
										Anexo1
									</th>
									<th >
										Anexo2
									</th>
								</tr>
							</thead>

							<!-- información de la tabla -->
							<tbody><?								# code...

foreach($consulta_productos as $fila)
					{
						//$id=$fila->id_producto_solicitud;?>
								<!-- inicia TR información cliente -->
								<tr >

									<td >

											<? echo $fila->equipo;?>

									</td>
									<td >

											<a id="aux2"  target="_blank"  class="btn btn-info" <?php if(isset($fila) && $fila->anexo1!=NULL)
														{?> href="<?php echo base_url().$fila->anexo1?>" style="display: block;" <? }?> style="display: none;">Ver </a>

									</td>
									<td >

											<a id="aux2"  target="_blank"  class="btn btn-info" <?php if(isset($fila) && $fila->anexo2!=NULL)
														{?> href="<?php echo base_url().$fila->anexo2?>" style="display: block;" <? }?> style="display: none;">Ver </a>

									</td>


									<td>
										<button class="btn u-btn-red g-mr-10 g-mb-15" type="button" onclick="quitar3(<?php echo '\''.$fila->id_mexcalsup_producto.'\',\''.$fila->anexo1.'\',\''.$fila->anexo2.'\'' ?> ) ;" >



													<i class="fa fa-minus" ></i> Eliminar<?php echo $fila->id_mexcalsup_producto;?>
												</button>
									</td>


								</tr>



                                  <? }}?>
							</tbody>
						</table>
													</div>
													<!-- termina listado de equipos de verficación -->
													<div class="col-sm-6">
														<p class="pregunta">
															¿Requiere la evaluación de requisitos adicionales solicitado por su cliente?
														</p>

														<div id="radioCertificacionGlobaGAP" class="btn-group justified-content">
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="requisitos_adicionales" id="requisitos_adicionales" type="radio" value="SI" onclick="validarRadios('requisitos_adicionales', 'divRequisitosAdicionales')">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">SI</span>
															</label>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="requisitos_adicionales" id="requisitos_adicionales2"type="radio" value="NO" onclick="validarRadios('requisitos_adicionales', 'divRequisitosAdicionales')">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">NO</span>

															</label>
														</div>
														<div id="divRequisitosAdicionales" style="display:none;margin-top:1em;">
															<p>
																Anexe solicitud o documentos de las especificaciones de su cliente.
															</p>
															<div class="form-group g-pos-rel mb-0">
																<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																	<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																</span>
																<textarea id="documento1" name="documento1" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Nombre del documento"></textarea>
															</div>

															<input type="file" name="file2" id="file2" class="form-control">
														 <br>
														 <input type="button " class="btn btn-info" value="Enviar" onClick="uploadFile2(2)" id="aux">
														<a id="aux_mex2"  target="_blank"  class="btn btn-info" <?php if(isset($consulta_mexcalsup) )
														{ if ($consulta_mexcalsup->anexo1!=NULL){?> href="<?php echo base_url().$consulta_mexcalsup->anexo1?>" style="display: block;" <? }}?> style="display: none;">Ver actual</a>




                    										<progress class="form-control" id="progressBar2" value="0" max="100"  style="width:300px;"></progress>
                    										<h3 id="status2"></h3>
														</div>
													</div>
													<div class="col-sm-6">
														<p class="pregunta">
															¿Tiene un acuerdo de muestreo con sus clientes?
														</p>

														<div id="radioCertificacionGlobaGAP" class="btn-group justified-content">
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="muestreo_clientes" id="muestreo_clientes" type="radio" value="SI" onclick="validarRadios('muestreo_clientes', 'divMuestreo')">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">SI</span>
															</label>
															<label class="u-check">
																<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="muestreo_clientes" id="muestreo_clientes2" type="radio" value="NO" onclick="validarRadios('muestreo_clientes', 'divMuestreo')">
																<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">NO</span>

															</label>
														</div>
														<div id="divMuestreo" style="display: none;">
															<p>
																Anexe copia de las especificaciones del muestreo
															</p>
															<input type="file" name="file3" id="file3" class="form-control">
														 <br>
														 <input type="button " class="btn btn-info" value="Enviar" onClick="uploadFile2(3)" id="aux">
														<a id="aux_mex3"  target="_blank"  class="btn btn-info" <?php if(isset($consulta_mexcalsup) )
														{ if ($consulta_mexcalsup->anexo2!=NULL){?> href="<?php echo base_url().$consulta_mexcalsup->anexo2?>" style="display: block;" <? }}?> style="display: none;">Ver actual</a>




                    										<progress class="form-control" id="progressBar3" value="0" max="100"  style="width:300px;"></progress>
                    										<h3 id="status3"></h3>

															<p>
																PAMFA le indicara el muestreo a efectuarse en la cotización de servicio
															</p>
														</div>

													</div>
													<div class="col-sm-12" style="margin-top:1em;margin-bottom:1em;">
														<p>
															Trazabilidad del lote
														</p>
														<div class="form-group g-pos-rel mb-0">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<textarea id="trazabilidad_mcs" name="trazabilidad_mcs" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Describa la trazabilidad del lote"><?php if($bmex==1 ){echo $consulta_mexcalsup->trazabilidad;}?></textarea>
														</div>
													</div>

												</div>
												<?php $fecha=time();?>

												<input id="fecha_mcs" name="fecha_mcs" type="hidden" value="<? echo $fecha;?>"/>
											</form>
											</div>

											<!-- termina mostrar mexico calidad suprema -->



											<!-- inicia mostrar sistema de reducción de riesgos -->

											<div id="divSrrc" class="col-md-12" style="display: none; margin-top: 1em;">

												<form class="js-validate" id="fsrrc" name="fsrrc">
												<div class="row">
													<div class="col-sm-12">
														<h4 class="nombreEsquema" style="font-size:14px;">
															<img src="<?php echo base_url(); ?>assets/img/esquemas_certificacion/esquema_senasica.jpg" alt="">
															SISTEMA DE REDUCCIÓN DE RIESGOS DE CONTAMINACIÓN (SRRC)
														</h4>
													</div>
													<div class="col-sm-12">
														<table class="table table-bordered">
															<tr>
																<td colspan="2">
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" id="area1" name="area1" value="1">
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon=""></i>
																		</div>
																		Áreas integrales con aplicación de sistema completo
																	</label>
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" id="area2" name="area2" value="1">
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon=""></i>
																		</div>
																		Áreas integrales con aplicación de BUMA
																	</label>
																</td>
															</tr>
															<tr>
																<td>
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" id="seccion1" name="seccion1" value="1">
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon=""></i>
																		</div>
																		Sección campo
																	</label>
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" id="seccion2" name="seccion2" value="1">
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon=""></i>
																		</div>
																		Sección empaque
																	</label>
																</td>
																<td>
																	<label class="form-check-inline u-check g-pl-25">
																		<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" id="seccion3" name="seccion3" value="1">
																		<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
																			<i class="fa" data-check-icon=""></i>
																		</div>
																		Cuadrilla de cosecha
																	</label>
																</td>
															</tr>
														</table>
													</div>

													<div class="col-sm-6">
														<p class="pregunta">
															Número de unidades de producción / huertos o invernaderos
														</p>
														<div class="form-group g-pos-rel mb-0">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
															</span>
															<input id="num_unidades" name="num_unidades" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<?php if (isset($consulta_srrc)) {echo $consulta_srrc->num_unidades;}?>" required="required" data-msg="This field is mandatory"
														data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" placeholder="Escribe aquí">
														</div>
													</div>
													<div class="col-sm-6">
														<p class="pregunta">
															Número de productores del área integral
														</p>
														<div class="form-group g-pos-rel mb-0">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
																<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
															</span>
															<input id="num_prod_integral" name="num_prod_integral" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<?php if (isset($consulta_srrc)) {echo $consulta_srrc->num_prod_integral;}?>" required="required" data-msg="This field is mandatory"
														data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" placeholder="Escribe aquí">
														</div>
													</div>
														</form>
													<div class="col-sm-12" style="margin-top:1em;" >
														<form class="js-validate" id="prod_srrc" name="prod_srrc">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th colspan="3">
																		Información sobre comercialización de producto
																	</th>
																</tr>
																<tr>
																	<th>
																		<button class="btn btn-sm btn-success" data-toggle="tooltip" title="Agregar otro producto" type="button" onclick="agregar2()"><i class="fa fa-plus"></i></button> Producto
																	</th>
																	<th>
																		Países destino
																	</th>
																	<th>
																		Porcentaje de venta
																	</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		<div class="form-group g-pos-rel mb-0">
																			<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																				<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																			</span>
																			<textarea id="producto_srrc" name="producto_srrc" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Nombre del producto"></textarea>
																		</div>
																	</td>
																	<td>
																		<div class="form-group g-pos-rel mb-0">
																			<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																				<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																			</span>
																			<textarea id="pais_srrc" name="pais_srrc" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Pais(es) destino"></textarea>
																		</div>
																	</td>
																	<td>
																		<div class="form-group g-pos-rel mb-0">
																			<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																				<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																			</span>
																			<input id="porcentaje" name="porcentaje" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="" required="required" data-msg="This field is mandatory"
																data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" placeholder="%">
																		</div>

																	</td>
																</tr>
															</tbody>

														</table>
													</form>
													</div>

												</div>

											</div>
											<div  id="tabla3" name="tabla3">
												<?  if (isset($consulta_srrc2)) {?>
													<table class="table table-striped" id="pro" name="pro">
														<thead>
															<tr>
																<th>Producto</th>
																<th>País</th>
																<th>Porcentaje</th>
															</tr>
														</thead>
														<tbody>
															<?php foreach($consulta_srrc2 as $fila): ?>
																<tr>
																	<td>
																		<? echo $fila->producto_srrc;?>

																	</td>
																	<td >
																		<? echo $fila->pais_srrc;?>
																	</td>
																	<td >
																		<? echo $fila->porcentaje;?>
																	</td>
																	<td>
																		<button class="btn u-btn-red g-mr-10 g-mb-15" type="button" onclick="<?php echo "quitar2(".$fila->id_producto_srrc.")"?>" >
																			<i class="fa fa-minus" ></i> Eliminar<?php echo $fila->id_producto_srrc;?>
																		</button>
																	</td>
																</tr>
															<?php endforeach; ?>
														</tbody>
													</table>
												<?php
												}
												 ?>
											</div>
											<!-- inicia mostrar hecho en mexico -->

											<div id="divHechoEnMexico" class="col-md-12" style="display: none;">
												<form class="js-validate" id="mexico" name="mexico">
													<div class="row">
														<div class="col-sm-12">
															<h4 class="nombreEsquema" style="font-size:14px;">
																<img src="<?php echo base_url(); ?>assets/img/esquemas_certificacion/esquema_hecho_en_mexico.jpg" alt="">
																HECHO EN MÉXICO
															</h4>
														</div>
														<div class="col-sm-12">
															<table class="table table-bordered">
																<thead>
																	<tr>
																		<th>
																			<button class="btn btn-sm btn-success" data-toggle="tooltip" title="Agregar otro producto" type="button" onclick="agregar()" >
																				<i class="fa fa-plus"></i> Agregar producto
																			</button>
																		</th>
																		<th style="width:70%">
																			Descripción del producto que ostentará el logotipo y, en su caso la forma en que los insumos o partes mexicanas se utilizan en el proceso productivo
																		</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			<div class="form-group g-pos-rel mb-0">
																				<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																					<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																				</span>
																				<textarea id="mex_producto" name="mex_producto" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Nombre del producto"></textarea>
																			</div>
																		</td>
																		<td>
																			<div class="form-group g-pos-rel mb-0">
																				<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																					<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																				</span>
																				<textarea id="descripcion" name="descripcion" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Descripción"></textarea>
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</form>
											</div>

											<div class="col-lg-12" id="tabla2" name="tabla2">
												<? if (isset($consulta_mex)) {?>
														<table class="table table-striped">
															<thead>
																<tr>
																	<th>Producto</th>
																	<th>Descripción</th>
																	<th>
																		...
																	</th>
																</tr>
															</thead>
															<tbody>
																<?php foreach($consulta_mex as $fila): ?>
																	<tr>
																		<td>
																			<? echo $fila->mex_producto;?>
																		</td>
																		<td>
																			<? echo $fila->descripcion;?>
																		</td>
																		<td>
																			<button class="btn u-btn-red g-mr-10 g-mb-15" type="button" onclick="<?php echo "quitar(".$fila->id_hecho_mexico.")"?>" >
																				<i class="fa fa-trash" ></i> Eliminar
																			</button>
																		</td>
																	</tr>
																<?php endforeach; ?>
															</tbody>
														</table>
												<?php }?>
											</div>
											<!-- termina mostrar hecho en mexico -->

											<!-- inicia mostrar denominación de origen -->
											<div id="divDenominacionOrigen" class="col-md-12" style="display: none;" >
												<form id="den_origen" name="den_origen">
													<div class="row">
														<div class="col-sm-12">
															<h4 class="nombreEsquema" style="font-size:14px;">
																<img src="<?php echo base_url(); ?>assets/img/esquemas_certificacion/esquema_denominacion_origen.jpg" alt="">
																DENOMINACIÓN DE ORIGEN
															</h4>
														</div>
														<div class="col-sm-12" style="margin-bottom:1em;">
															<b style="margin-bottom:1.5em;">
																Productos
															</b>
															<?php
																$bden=0;
																if(isset($consulta_den_origen)){
																	$bden=1;
																}
															?>
															<select class="selectMultiple" name="pliego_condiciones" id="pliego_condiciones" multiple>
																<option <?php if ($bden==1 &&strpos($consulta_den_origen->productos,'Chiapas')!==false){?>selected="selected"<? }?> value="Chiapas">Café Chiapas</option>
																<option <?php if ($bden==1 &&strpos($consulta_den_origen->productos,'Veracruz')!==false){?>selected="selected"<? }?> value="Veracruz">Café Veracruz</option>
																<option <?php if ($bden==1 &&strpos($consulta_den_origen->productos,'Charanda')!==false){?>selected="selected"<? }?> value="Charanda">Charanda</option>
																<option <?php if ($bden==1 &&strpos($consulta_den_origen->productos,'Ataulfo')!==false){?>selected="selected"<? }?> value="Ataulfo">Mango Ataulfo</option>
																<option <?php if ($bden==1 &&strpos($consulta_den_origen->productos,'Vainilla')!==false){?>selected="selected"<? }?> value="Vainilla">Vainilla de Papantla</option>
															</select>
														</div>

														<div class="col-sm-12" style="margin-top:1em;">
															<b>
																Descripción del producto que ostentará el logotipo y, en su caso la forma en que los insumos o partes mexicanas se utilizan en el proceso productivo.
															</b>
															<div class="form-group g-pos-rel mb-0">
																<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																	<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
																</span>
																<textarea id="descripcion_den"  name="descripcion_den" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Escribe aquí"><?php if ($bden==1) {echo $consulta_den_origen->descripcion;}?></textarea>
															</div>
														</div>
													</form>
													<form id="upload_form" enctype="multipart/form-data" method="post"  >
														<div class="col-sm-12" style="margin-top:1em;">
															<b>Anexo</b>
															<p>
																Constancia expedida por órgano competente que acredite que el establecimiento donde se realiza la actividad del solicitante, se encuentra dentro del territorio señalado en la declaración correspondiente (original o copia certificada).
															</p>
															<input type="file" name="file1" id="file1" class="form-control">
															<br>
															<input type="button " class="btn btn-info" value="Enviar" onClick="uploadFile(1)" id="aux">
															<a id="aux2"  target="_blank"  class="btn btn-info" <?php if(isset($consulta_den_origen) && $consulta_den_origen->anexo!=NULL)
															{?> href="<?php echo base_url().$consulta_den_origen->anexo?>" style="display: block;" <? }?> style="display: none;">Ver actual</a>
	                    									<progress class="form-control" id="progressBar" value="0" max="100"  style="width:300px;"></progress>
	                    									<h3 id="status"></h3>
														</div>

														<?php $fechado=time();?>

														<input id="fecha_do" name="fecha_do" type="hidden" value="<? echo $fechado;?>"/>
													</form>
												</div>
											</div>
											<!-- termina mostrar denominación de origen -->
										</div>

								</div>

							</div>
				     	</div>
					</div>
					<!-- termina ESQUEMAS DE CERTIFICACIÓN -->

					<!-- inicia 6.- PASO FINAL -->
					<div class="tab">
				     	<div class="card g-brd-gray-light-v7 g-mb-30">
							<div id="pasoFinal">
								<div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
									<form class="js-validate">

										<div class="u-heading-v1-4 g-bg-main g-brd-primary g-mb-20">
										  <h2 class="h3 u-heading-v1__title">6.- PASO FINAL</h2>
										</div>

										<div class="row">


											<div class="col-md-6">
										

											<h4 style="font-size: 16px;">
													<strong>Anexo producción</strong>
													Descargar y realizar el llenado del anexo CER.RG.01, posteriormente cargar el archivo
												</h4>
												<a id="ejemplo"  target="_blank"  class="btn btn-info"  href="<?php echo base_url()."docs_solicitud/anexos/produccion.xlsx"?>" style="display: block;" >Descargar original</a>
						<form name="importar" id="importar" enctype="multipart/form-data" >
						  <div class="col-xs-4">
						    <div class="form-group">
						      <input type="file" class="form-control" data-buttonText="Seleccione archivo" name="excel_file" id="excel_file">
						    </div>
						  </div>
						  <progress class="form-control" id="progressBar22" value="0" max="100"  style="width:300px;"></progress>
						  <div class="col-xs-1">
						   <button class="btn u-btn-red " type="button"  onClick="ex(1)"  >
													<i class="fa fa-minus" ></i> subir
												</button>
						  </div>
						  
                    										<h3 id="status22"></h3>
                    	<a id="aux22"  target="_blank"  class="btn btn-info" <?php if(isset($anexo_p)  && $anexo_p !=NULL)
														{?> href="<?php echo base_url().$anexo_p?>" style="display: block;" <? }else {?>style="display: none;"<?}?>>Ver actual</a>
																	
						  <input type="hidden" value="upload" name="action" id="action" />
						  <input type="hidden" value="usuarios" name="mod" id="mod">
						  <input type="hidden" value="masiva" name="acc" id="acc">
						  
						</form>
										
									</div>
									<div class="col-md-6">
										

											<h4 style="font-size: 16px;">
													<strong>Anexo producción</strong>
													Descargar y realizar el llenado del anexo CER.RG.01, posteriormente cargar el archivo
												</h4>
												<a id="ejemplo"  target="_blank"  class="btn btn-info"  href="<?php echo base_url()."docs_solicitud/anexos/manipulacion.xlsx"?>" style="display: block;" >Descargar original</a>
						<form name="importar" id="importar" enctype="multipart/form-data" >
						  <div class="col-xs-4">
						    <div class="form-group">
						      <input type="file" class="form-control" data-buttonText="Seleccione archivo" name="excel_file2" id="excel_file2">
						    </div>
						  </div>
						  <progress class="form-control" id="progressBar23" value="0" max="100"  style="width:300px;"></progress>
						  <div class="col-xs-1">
						   <button class="btn u-btn-red " type="button"  onClick="ex(2)"  >
													<i class="fa fa-minus" ></i> subir
												</button>
						  </div>
						  
                    										<h3 id="status23"></h3>
                    	<a id="aux23"  target="_blank"  class="btn btn-info" <?php if(isset($anexo_m)  && $anexo_m !=NULL)
														{?> href="<?php echo base_url().$anexo_m?>" style="display: block;" <? }else {?>style="display: none;"<?}?> >Ver actual</a>
																	
						  <input type="hidden" value="upload" name="action" id="action" />
						  <input type="hidden" value="usuarios" name="mod" id="mod">
						  <input type="hidden" value="masiva" name="acc" id="acc">
						  
						</form>
										
									</div>
											<div class="col-md-12">
												<h4 style="font-size: 16px;">
													Indicar el idioma en que se realizará la auditoría y el idioma que se utilizará en el informe de auditoría
												</h4>

												<div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0" style="width:50%">
													<select class="js-select u-select--v3-select u-sibling w-100" required="required" name="idiomas" id="idiomas" title="Idiomas" style="display: none;">
														<option <?php if (isset($idiomas) && $idiomas=='español'){?>selected="selected"<? }?> value="español" data-content='<span class="d-flex align-items-center w-100"><i style="color:green" class="fa fa-flag u-line-icon-pro g-font-size-18 g-mr-15"></i><span>Español</span></span>'> <img src="<?php echo base_url('assets/img/flags/Spain.png'); ?>" alt=""> Español
														</option>
														<option <?php if (isset($idiomas) &&$idiomas=='ingles'){?>selected="selected"<? }?> value="ingles" data-content='<span class="d-flex align-items-center w-100"><i style="color:green" class="fa fa-flag u-line-icon-pro g-font-size-18 g-mr-15"></i><span>Ingles</span></span>'> Ingles
														</option>
														<option <?php if (isset($idiomas) && $idiomas=='otro'){?>selected="selected"<? }?> value="otro" data-content='<span class="d-flex align-items-center w-100"><i style="color:green" class="fa fa-flag u-line-icon-pro g-font-size-18 g-mr-15"></i><span>Otro</span></span>'> Otro
														</option>
													</select>

													<div class="d-flex align-items-center g-absolute-centered--y g-right-0 g-color-gray-light-v6 g-color-lightblue-v9--sibling-opened g-mr-15">
														<i style="color:red" class="hs-admin-angle-down"></i>
													</div>
												</div>

											</div>

											<div class="col-md-12" style="margin-top:1em;">
												<p style="font-weight:bold;">
													USO DE DATOS
												</p>
											</div>
											<div class="col-md-6">
												<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
													<input  <?php if (isset($uso_datos) && $uso_datos=='si'){?> checked="true"<? }?> class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" value="si"  name="uso_datos" id="uso_datos" type="radio">
													<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
														<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
													</div>
													<b>SI</b> <span style="padding-left:10px;">El cliente permite el acceso de su nombre de la empresa y dirección al grupo de acceso de datos "Publica".</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="form-check-inline u-check g-pl-25 ml-0 g-mr-25">
													<input <?php if (isset($uso_datos) && $uso_datos=='no'){?> checked="true"<? }?> class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" value="no" name="uso_datos" name="uso_dato2" type="radio">
													<div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-18 g-height-18">
														<i class="g-absolute-centered d-block g-width-10 g-height-10 g-bg-primary--checked"></i>
													</div>
													<b>NO</b> <span style="padding-left:10px;">El cliente no está de acuerdo para conceder acceso de su nombre de la empresa y dirección al grupo de acceso de datos "Publica".</span>
												</label>
											</div>

										</div>
									</form>
								</div>
							</div>
				     	</div>

					</div>
					<!-- termina PASO FINAL -->

					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<button style="width:50%;float:left;" class="btn btn-xl u-btn-orange g-mr-10 g-mb-15" type="button" id="prevBtn" onclick="nextPrev(-1)">
									<i class="icon-arrow-left-circle"></i> Anterior
								</button>
							</div>
							<div class="col-md-6">
								<button style="width:50%;float:right" class="btn btn-xl u-btn-primary g-mr-10 g-mb-15" type="button" id="nextBtn" onclick="nextPrev(1)">
									Siguiente
								</button>
							</div>
						</div>
					</div>





			</div>
		</div>

<!-- script validación de preguntas -->
<script type="text/javascript">
	var base_url="<? echo base_url();?>";
	var idsolicitud="<? echo $ids;?>";
	//var norma="<? $norma;?>";


</script>

<script>
	function resaltarEsquema(id,div,elemento,c,d,ids){
		var id = id;
		var div = div;
		var elemento = elemento;
		var c=c;
		var d=d;
		var ids=ids;
		console.log("este div"+d);

if (id=='check_hecho_en_mexico') {
var valor = $('#'+id).prop('checked');
		if(valor){
			document.getElementById('div'+d).style.display = 'block';
	$.ajax({
                     url:base_url+"backend/administrador/solicitud/Solicitudes/ingresa_norma/"+ids+"/"+c+"/1",

                     method:"POST",

		            	success: function() {

		            		 //activo.innerHTML = "";
		            		document.getElementById("mex_producto").value = "";
		            			document.getElementById("descripcion").value = "";

		            	$("#tabla2").load(base_url+'backend/administrador/solicitud/normas/cMexico/tabla/'+ids+'');	                       }
		});
}else{

				$.ajax({
                     url:base_url+"backend/administrador/solicitud/Solicitudes/ingresa_norma/"+ids+"/"+c+"/ ",

                     method:"POST",
                    //data:dataString,
		            	success: function() {

		                       }
					});
            	$.ajax({
                    url:base_url+"backend/administrador/solicitud/normas/"+c+"/eliminar/"+ids+"",

                     method:"POST",
                    //data:dataString,
		            	success: function() {
		            		document.getElementById('divHechoEnMexico').style.display = 'none';
		            		document.getElementById('tabla2').style.display = 'none';
		                       }
					});


			document.getElementById(div).setAttribute(
				"style", "none");
			document.getElementById(div).getElementsByTagName(elemento)[0].style = "none";
			document.getElementById(div).getElementsByTagName(elemento)[0].style = "none";
}
}
else{

		var valor = $('#'+id).prop('checked');
		if(valor){

			document.getElementById(div).getElementsByTagName(elemento)[0].setAttribute(
				//"style", "font-weight: bold; color: #27ae60"
				"style", "border: 2px solid #27ae60;transition: border 0.5s ease;"
				);
			//
			 $.ajax({

		            	success: function() {

		            		$("#div"+d).load(base_url+"backend/administrador/solicitud/normas/"+c+"/div/"+ids+"");


		            	}
		});
			 document.getElementById('div'+d).style.display = 'block';
			if (d=='Srrc') {
		            		document.getElementById('tabla3').style.display = 'block';

		            		}


			 $.ajax({
                     url:base_url+"backend/administrador/solicitud/Solicitudes/ingresa_norma/"+ids+"/"+c+"/1",

                     method:"POST",
                    //data:dataString,
		            	success: function() {

		                       }
		});
        	  $.ajax({
                    url:base_url+"backend/administrador/solicitud/normas/"+c+"/guardar/"+ids+"",

                     method:"POST",
                    //data:dataString,
		            	success: function() {

		                       }
		});

        	  	if (id=='check_hecho_en_mexico' ) {

        	$.ajax({

		            	success: function() {
		            		$("#div"+d).load(base_url+'backend/administrador/solicitud/normas/'+c+'/div/'+ids+'');

		                       }
		});

        }
        	if (id=='check_srrc') {

        	$.ajax({

		            	success: function() {

		            		$("#tabla3").load(base_url+'backend/administrador/solicitud/normas/cProducto_srrc/div/'+ids+'');
		            		$("#divSrrc").load(base_url+'backend/administrador/solicitud/normas/cSrrc/div/'+ids+'');

		                       }
		});

        }
		}else{

			//$('#global_ifa')[0].reset();
			 $.ajax({
                     url:base_url+"backend/administrador/solicitud/Solicitudes/ingresa_norma/"+ids+"/"+c+"/ ",

                     method:"POST",
                    //data:dataString,
		            	success: function() {

		                       }
		});
            $.ajax({
                    url:base_url+"backend/administrador/solicitud/normas/"+c+"/eliminar/"+ids+"",

                     method:"POST",
                    //data:dataString,
		            	success: function() {
		            		//$('#num_productores').val("");
		            		//$('#global_ifa')[0].reset();
		            		document.getElementById('global_ifa').reset();
		            		//document.global_ifa.reset();
		            		document.getElementById('div'+d).style.display = 'none';
		            		if (d=='Srrc') {
		            		document.getElementById('tabla3').style.display = 'none';

		            		}
		                       }
		});


			document.getElementById(div).setAttribute(
				"style", "none");
			document.getElementById(div).getElementsByTagName(elemento)[0].style = "none";
			document.getElementById(div).getElementsByTagName(elemento)[0].style = "none";
		}


	}
}
</script>
<script type="text/javascript">

	<?php if(isset($norma_ifa) || isset($norma_coc) || isset($norma_mex) || isset($norma_srrc) || isset($norma_origen)  || isset($norma_mexcalsup))
	{
		if ((isset($norma_ifa)) && $norma_ifa!=NULL&& $norma_ifa==='ifa'){?>
	var val= "ifa";

var ck= "<?php echo $consulta_ifa->opcion;?>";


<?}

 if((isset($norma_coc)) && $norma_coc!=NULL && $norma_coc==='coc'){?>
	var val2= "coc";
var ck2= "<?php echo $consulta_coc->opcion;?>";

var p1= "<?php echo $consulta_coc->preg1?>";
	var p2= "<?php echo $consulta_coc->preg2?>";
	var p3= "<?php echo $consulta_coc->preg3?>";

<? }

if((isset($norma_mex)) && $norma_mex!=NULL && $norma_mex==='mexico'){?>
	var val3="mexico";


<? }

if((isset($norma_srrc)) && $norma_srrc!=NULL && $norma_srrc==='srrc'){?>
	var val4="srrc";

var a1= "<?php echo $consulta_srrc->area1?>";
	var a2= "<?php echo $consulta_srrc->area2?>";
	var s1= "<?php echo $consulta_srrc->seccion1?>";
	var s2= "<?php echo $consulta_srrc->seccion2?>";
	var s3= "<?php echo $consulta_srrc->seccion3?>";

<? }
if((isset($norma_origen)) && $norma_origen!=NULL && $norma_origen==='origen'){?>
	var val5="origen";

<? }
if((isset($norma_mexcalsup)) && $norma_mexcalsup!=NULL && $norma_mexcalsup==='mexcalsup'){?>
	var val6="mcs";

var m1= "<?php echo $consulta_mexcalsup->anexo1?>";
	var m2= "<?php echo  $consulta_mexcalsup->anexo2?>";


<? }
}

else  {?>
	var val= "1";

var ck= "11";
var val2= "1";

var ck2= "11";
<? }?>
</script>
<script type="text/javascript">



if( (typeof val !== 'undefined')&& (val==="ifa")){




	var c=document.getElementById('check_globalgap_ifa');
			c.checked=true;


	if (ck=="productor_individual" || ck=="productor_individual_sin_sistema" ||ck=="productor_individual_con_sistema" )
		{

				if (ck=="productor_individual" )
				{

				var c4=document.getElementById('radioGlobalIfa1');
				c4.checked=true;
				}
				if(ck=="productor_individual_sin_sistema" )
				{
				var c4=document.getElementById('radioGlobalIfa2');
				c4.checked=true;

				}
				if(ck=="productor_individual_con_sistema")
				{
				var c4=document.getElementById('radioGlobalIfa3');
				c4.checked=true;

				}
			document.getElementById('num_productores').disabled = true;
			document.getElementById('num_unidades_produccion').disabled = true;

		}


		if(ck=="grupo_productores")
		{

				var c4=document.getElementById('radioGlobalIfa4');
				c4.checked=true;
				document.getElementById('num_productores').disabled = false;
				document.getElementById('num_unidades_produccion').disabled = false;

		}
				document.getElementById('divGlobalGapIfa').style.display = 'block';

	}

	if((typeof val2 !== 'undefined')&& (val2==="coc")){


	var c=document.getElementById('check_globalgap_coc');
				c.checked=true;

	if (ck2=="explotacion_individual" )
				{

				var c4=document.getElementById('radioGlobalCoc1');
				c4.checked=true;
				}
				if(ck2=="explotacion_multiple" )
				{
				var c4=document.getElementById('radioGlobalCoc2');
				c4.checked=true;

				}

		if (p1==='SI'){
		var c4=document.getElementById('coc_preg1');
		c4.checked=true;

		}
		if (p1==='NO'){
			var c4=document.getElementById('coc_preg1_2');
		c4.checked=true;
		}
		if (p2==='SI'){
		var c4=document.getElementById('coc_preg2');
		c4.checked=true;

		}
		if (p2==='NO'){
			var c4=document.getElementById('coc_preg2_2');
		c4.checked=true;
		}
		if (p3==='SI'){
		var c4=document.getElementById('coc_preg3');
		c4.checked=true;

		}
		if (p3==='NO'){
			var c4=document.getElementById('coc_preg3_2');
		c4.checked=true;
		}

				document.getElementById('divGlobalGapCoc').style.display = 'block';



	}

	if((typeof val3 !== 'undefined')&& (val3==="mexico")){
		var c=document.getElementById('check_hecho_en_mexico');
				c.checked=true;
				document.getElementById('divHechoEnMexico').style.display = 'block';


	}
	if((typeof val4 !== 'undefined')&& (val4==="srrc")){
		var c=document.getElementById('check_srrc');
				c.checked=true;
				document.getElementById('divSrrc').style.display = 'block';
				document.getElementById('tabla3').style.display = 'block';

				if (a1!=""){
			var t1=document.getElementById('area1');
		t1.checked=true;
		}
		if (a2!=""){
			var t2=document.getElementById('area2');
		t2.checked=true;
		}
		if (s1!=""){
			var t3=document.getElementById('seccion1');
		t3.checked=true;
		}
		if (s2!=""){
			var t4=document.getElementById('seccion2');
		t4.checked=true;
		}
		if (s3!=""){
			var t5=document.getElementById('seccion3');
		t5.checked=true;
		}

	}
	if((typeof val5 !== 'undefined')&& (val5==="origen")){
		var c=document.getElementById('check_denominacion_origen');
				c.checked=true;
				document.getElementById('divDenominacionOrigen').style.display = 'block';


	}
if((typeof val6 !== 'undefined')&& (val6==="mcs")){
		var c=document.getElementById('check_mex_calidad_suprema');
				c.checked=true;
				document.getElementById('divMexCalidadSuprema').style.display = 'block';
				document.getElementById('tabla_mexcalsup').style.display = 'block';

				if (m1!=""){
			var t1=document.getElementById('requisitos_adicionales');
		t1.checked=true;
		}
		else{ var t1=document.getElementById('requisitos_adicionales2');
		t1.checked=true;}
		if (m2!=""){
			var t2=document.getElementById('muestreo_clientes');
		t2.checked=true;
		}
		else{
			var t2=document.getElementById('muestreo_clientes2');
		t2.checked=true;
		}


	}

</script>
<script type="text/javascript">

	var chek1= "<?php echo $consulta_cert->preg1?>";
	var chek2= "<?php echo $consulta_cert->preg2?>";
	var chek3= "<?php echo $consulta_cert->preg3?>";
	var chek4= "<?php echo $consulta_cert->preg4?>";
	var chek5= "<?php echo $consulta_cert->preg5?>";
	var chek6= "<?php echo $consulta_cert->preg6?>";
	var chek7= "<?php echo $consulta_cert->organismo?>";

	if (chek1!=="" || chek2!=="" || chek3!=="")
	{

		validarRadios(chek1,'certificacionGlobalGAP','numerosGlobalGAP');

			validarRadios(chek3,'certificacionGLN','divGLN');



	}
	validarRadios(chek4,'certificacionSenasica', 'divSenasica');

			validarRadios(chek5,'radioMexCalidadSuprema', 'regMexCalidadSuprema');
			validarRadios(chek6,'certificacionPrimus', 'divPrimus');

			validarRadios(chek7,'otroOrganismo', 'divOrganismoCertificacion')




function validarRadios(ck,nombre,div){
		var nombre = nombre;
		var div = div;



		if (ck!==""){
		var c4=document.getElementById(nombre);
		c4.checked=true;
		document.getElementById(div).style.display = 'block';


		}
		else{

			var c4=document.getElementById(nombre+"2");
		c4.checked=true;
		}



	}


</script>

<script type="text/javascript">
	function radioCoc(){
		var valor = $('input[name="radioGlobalCoc"]:checked').val();

		console.log(valor);
		if(valor == 'explotacion_individual'){
			document.getElementById('op1_preg1').disabled = false;
			document.getElementById('op1_preg2').disabled = false;

			document.getElementById('op2_preg1').disabled = true;
			document.getElementById('op2_preg2').disabled = true;
			document.getElementById('op2_preg3').disabled = true;
		}else if(valor == 'explotacion_multiple'){
			document.getElementById('op2_preg1').disabled = false;
			document.getElementById('op2_preg2').disabled = false;
			document.getElementById('op2_preg3').disabled = false;

			document.getElementById('op1_preg1').disabled = true;
			document.getElementById('op1_preg2').disabled = true;
		}
	}

	function grupoProductores(){
		var valor = $('input[name="radioGlobalIfa"]:checked').val();

		console.log(valor);
		if(valor == 'grupo_productores'){
			document.getElementById('num_productores').disabled = false;
			document.getElementById('num_unidades_produccion').disabled = false;
		}else{
			document.getElementById('num_productores').disabled = true;
			document.getElementById('num_unidades_produccion').disabled = true;
		}
	}

	function validarCheck(id,div2){
		var id = id;
		var div2 = div2;

		console.log(id);
		console.log(div2);


		var valor = $('#'+id).prop('checked');

		console.log(valor);
		if(valor){
			document.getElementById(div2).style.display = 'block';
		}else{
			document.getElementById(div2).style.display = 'none';
		}


	}

	function validarRadios(nombre,div){
		var nombre = nombre;
		var div = div;

		console.log(nombre);
		console.log(div);

		var valor = $('input[name="'+nombre+'"]:checked').val();

		if(valor == 'SI'){
			document.getElementById(div).style.display = 'block';
		}else{
			document.getElementById(div).style.display = 'none';
		}
		console.log(valor);
	}
</script>

<!-- script FORM-WIZARD -->
<script>
	var currentTab = 0; // Current tab is set to be the first tab (0)
	showTab(currentTab); // Display the current tab

	function showTab(n) {
		// This function will display the specified tab of the form ...
		var x = document.getElementsByClassName("tab");

		x[n].style.display = "block";
		// ... and fix the Previous/Next buttons:
		if (n == 0) {
			document.getElementById("prevBtn").style.display = "none";
		} else {
			document.getElementById("prevBtn").style.display = "inline";
		}
		if (n == (x.length-1 )) {
			document.getElementById("nextBtn").innerHTML = "Finalizar solicitud <i class='icon-check'></i>";
		} else {
			document.getElementById("nextBtn").innerHTML = "Siguiente <i class='icon-arrow-right-circle'></i>";
		}
		// ... and run a function that displays the correct step indicator:
		fixStepIndicator(n)
		if(n>0){cambiar(n);}
	}

	function nextPrev(n) {
		// This function will figure out which tab to display
		var x = document.getElementsByClassName("tab");
		// Exit the function if any field in the current tab is invalid:
		if (n == 1 && !validateForm()) return false;
		// Hide the current tab:
		x[currentTab].style.display = "none";
		// Increase or decrease the current tab by 1:
		currentTab = currentTab + n;
		// if you have reached the end of the form... :
		if (currentTab >= x.length) {
			//...the form gets submitted:
			//document.getElementById("regForm").submit();
			var formdata3 = new FormData();

formdata3.append('uso_datos',$('input[name=uso_datos]:checked').val());
formdata3.append('idiomas',$('#idiomas').val());


		$.ajax({
			type:'POST',
			url:base_url+"backend/administrador/solicitud/solicitudes/actualizar_final/"+idsolicitud,
			data: formdata3,
			dataType: 'text',
			cache: false,
        	contentType: false,
        	processData: false,
			success:function(data){
					location.href =base_url+"backend/administrador/main";
		                       }

		});
			return false;
		}
		// Otherwise, display the correct tab:
		showTab(currentTab);
	}

	function validateForm() {
	// This function deals with validation of the form fields
	var x, y, i, valid = true;
		/*x = document.getElementsByClassName("tab");
		y = x[currentTab].getElementsByTagName("input");
		// A loop that checks every input field in the current tab:
		for (i = 0; i < y.length; i++) {
		// If a field is empty...
		if (y[i].value == "") {
		// add an "invalid" class to the field:
		y[i].className += " invalid";
		// and set the current valid status to false:
		valid = false;
		}
		}*/
		// If the valid status is true, mark the step as finished and valid:
		if (valid) {
			document.getElementsByClassName("step")[currentTab].className += " finish";
		}
		return valid; // return the valid status
	}

	function fixStepIndicator(n) {
		// This function removes the "active" class of all steps...
		var i, x = document.getElementsByClassName("step");
		for (i = 0; i < x.length; i++) {
			x[i].className = x[i].className.replace(" active", "");
		}
		//... and adds the "active" class to the current step:
		x[n].className += " active";
	}

</script>

<script type="text/javascript">
function cambiar(n){

	if(n==2){

    var dataString = $('#gen').serialize();


 $.ajax({
                     url:base_url+"backend/administrador/clientes/cCliente/generales_sol/",
                     method:"POST",
                    data:dataString,
		            	success: function(data) {

		                       }
		});
}
else if(n==3){

    var dataString = $('#fis').serialize();


 $.ajax({
                     url:base_url+"backend/administrador/clientes/cCliente/fiscal_sol",
                     method:"POST",
                    data:dataString,
		            	success: function(data) {

		                       }
		});
}

else if(n==4){



    var dataString = $('#certificacion').serialize();

    //alert(dataString);
    if(dataString.length>9){

 $.ajax({
                     url:base_url+"backend/administrador/solicitud/cCert_anterior_sol/guardar_c/"+idsolicitud,

                     method:"POST",
                    data:dataString,
		            	success: function(dataString) {
		            		                       }
		});

}
}
else if(n==5){

if($('#check_globalgap_ifa').prop('checked') ) {




var formdata = new FormData($('#global_ifa')[0]);

formdata.append('opcion',$('input[name=radioGlobalIfa]:checked').val());
formdata.append('productos',$('#productos').val());
formdata.append('num_productores',$('#num_productores').val());
formdata.append('num_unidades_prod',$('#num_unidades_produccion').val());
formdata.append('num_unidades_manip',$('#num_unidades_manipulacion').val());



		$.ajax({
			type:'POST',
			url:base_url+"backend/administrador/solicitud/normas/cGlobal_ifa/actualizar/"+idsolicitud,
			data: formdata,
			dataType: 'text',
			cache: false,
        	contentType: false,
        	processData: false,
			success:function(data){

		                       }

		});

}



if($('#check_globalgap_coc').prop('checked') ) {




var formdata2 = new FormData($('#global_coc')[0]);

formdata2.append('opcion',$('input[name=radioGlobalCoc]:checked').val());
formdata2.append('productos',$('#productos_coc').val());
formdata2.append('op1_preg1',$('#op1_preg1').val());
formdata2.append('op1_preg2',$('#op1_preg2').val());
formdata2.append('op2_preg1',$('#op2_preg1').val());
formdata2.append('op2_preg2',$('#op2_preg2').val());
formdata2.append('op2_preg3',$('#op2_preg3').val());

formdata2.append('coc_preg1',$('input[name=coc_preg1]:checked').val());
formdata2.append('coc_preg2',$('input[name=coc_preg2]:checked').val());
formdata2.append('coc_preg3',$('input[name=coc_preg3]:checked').val());




		$.ajax({
			type:'POST',
			url:base_url+"backend/administrador/solicitud/normas/cGlobal_coc/actualizar/"+idsolicitud,
			data: formdata2,
			dataType: 'text',
			cache: false,
        	contentType: false,
        	processData: false,

			success:function(data){
		                       }
		});

}



if($('#check_srrc').prop('checked') ) {


     var dataString = $('#fsrrc').serialize();




 $.ajax({
                     url:base_url+"backend/administrador/solicitud/normas/cSrrc/actualizar/"+idsolicitud,

                     method:"POST",
                    data:dataString,
		            	success: function(data) {

		                       }
		});

}

if($('#check_denominacion_origen').prop('checked') ) {

var valor="";
	 var porNombre13=document.getElementById("pliego_condiciones");
            for(var i=0;i<porNombre13.length;i++)
              {
                if(porNombre13[i].selected){
               valor=porNombre13[i].value+', '+valor;}
              }
			 var tam=valor.length-2;
			 var valr=valor.substr(0,tam)
	 pliegos=valr;


var d=$('#descripcion_den').val()

    var formdata = new FormData($('#den_origen')[0]);

formdata.append('pliego_condiciones',pliegos);
formdata.append('descripcion_den',$('#descripcion_den').val());




 $.ajax({
                     url:base_url+"backend/administrador/solicitud/normas/cDen_origen/actualizar/"+idsolicitud,

                     method:"POST",
                     data: formdata,
			dataType: 'text',
			cache: false,
        	contentType: false,
        	processData: false,

		            	success: function(data) {

		                       }
		});

}
if($('#check_mex_calidad_suprema').prop('checked') ) {

var valor="";
	 var porNombre13=document.getElementById("pliego_condiciones_mcs");
            for(var i=0;i<porNombre13.length;i++)
              {
                if(porNombre13[i].selected){
               valor=porNombre13[i].value+', '+valor;}
              }
			 var tam=valor.length-2;
			 var valr=valor.substr(0,tam)
	 pliegos=valr;


var valor="";
	 var porNombre13=document.getElementById("alcance_certificacion");
            for(var i=0;i<porNombre13.length;i++)
              {
                if(porNombre13[i].selected){
               valor=porNombre13[i].value+', '+valor;}
              }
			 var tam=valor.length-2;
			 var valr=valor.substr(0,tam)
	 alcance=valr;




    var formdata = new FormData($('#mcs')[0]);

formdata.append('pliego_condiciones_mcs',pliegos);
formdata.append('alcance_certificacion',$('#alcance_certificacion').val());
formdata.append('trazabilidad',$('#trazabilidad_mcs').val());




 $.ajax({
                     url:base_url+"backend/administrador/solicitud/normas/cMcs/actualizar/"+idsolicitud,

                     method:"POST",
                     data: formdata,
			dataType: 'text',
			cache: false,
        	contentType: false,
        	processData: false,

		            	success: function(data) {

		                       }
		});

}

}

/////////final


}


</script>

<script type="text/javascript">
function agregar(){
	var dataString = $('#mexico').serialize();

 $.ajax({
                     url:base_url+"backend/administrador/solicitud/normas/cMexico/guardar/"+idsolicitud,

                     method:"POST",
                    data:dataString,
		            	success: function(data) {

		            		 //activo.innerHTML = "";
		            		//$("input[name$='mex_producto']").val("");

		            		document.getElementById("mex_producto").value = "";
		            			document.getElementById("descripcion").value = "";
		            	$("#tabla2").load(base_url+'backend/administrador/solicitud/normas/cMexico/tabla/'+idsolicitud+'');	                       }
		});

}
</script>

<script type="text/javascript">
function quitar(x){

var idproducto=x;


 $.ajax({
                     url:base_url+"backend/administrador/solicitud/normas/cMexico/eliminar/",

                     method:"POST",
                    data:{idproducto:idproducto},
		            	success: function(data) {

		            		$("#tabla2").load(base_url+'backend/administrador/solicitud/normas/cMexico/tabla/'+idsolicitud+'');	                       }
		});



}
</script>

<?/* --------productos srrc---------*/?>
<script type="text/javascript">
function agregar2(){



	var dataString = $('#prod_srrc').serialize();
	//var activo = document.activeElement.producto;


   // if(dataString.length>9){

 $.ajax({
                     url:base_url+"backend/administrador/solicitud/normas/cProducto_srrc/guardar/"+idsolicitud,

                     method:"POST",
                    data:dataString,
		            	success: function(data) {

		            		 //activo.innerHTML = "";
		            		//$("input[name$='mex_producto']").val("");
		            		document.getElementById("producto_srrc").value = "";
		            			document.getElementById("pais_srrc").value = "";
		            			document.getElementById("porcentaje").value = "";
		            	$("#tabla3").load(base_url+'backend/administrador/solicitud/normas/cProducto_srrc/tabla/'+idsolicitud+'');	                       }
		});



//}



}
</script>

<script type="text/javascript">
function quitar2(x){

var idproducto=x;


 $.ajax({
                     url:base_url+"backend/administrador/solicitud/normas/cProducto_srrc/eliminar/"+idsolicitud,

                     method:"POST",
                    data:{idproducto:idproducto},
		            	success: function(data) {

		            		$("#tabla3").load(base_url+'backend/administrador/solicitud/normas/cProducto_srrc/tabla/'+idsolicitud+'');


		            	}
		});



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
  ajax.open("POST", base_url+"backend/administrador/solicitud/normas/cDen_origen/subir_archivo/"+idsolicitud+"");

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
   document.getElementById("aux2").style.display = "block";
	//document.getElementById("aux2").value = document.getElementById("file1").files[0].name;
	document.getElementById("aux2").href =base_url+"docs_solicitud/den_origen/"+document.getElementById("fecha_do").value+document.getElementById("file1").files[0].name;

  // document.getElementById("aux2").value = "Ver actual";
  //location.reload(true);
}
function errorHandler(event){
  _("status").innerHTML = "Falla en Envio";
}
function abortHandler(event){
  _("status").innerHTML = "Envio Abortado";
}';?>
</script>

<script >


	<? echo '
  var valorname;
function _(el){
  return document.getElementById(el);
}
function uploadFile2(al){

if( al== 2){
var cont=2;
}
if( al== 3){
var cont=3;
}


  var file = _("file"+cont).files[0];
   var formdata = new FormData();
  formdata.append("file"+cont, file);
  formdata.append("documento1",$("#documento1").val());
   formdata.append("fecha",$("#fecha_mcs").val());


  if( al== 3){
var ajax = new XMLHttpRequest();

  ajax.upload.addEventListener("progress", progressHandler3, false);
  ajax.addEventListener("load", completeHandler3, false);
  ajax.addEventListener("error", errorHandler3, false);
  ajax.addEventListener("abort", abortHandler3, false);
  ajax.open("POST", base_url+"backend/administrador/solicitud/normas/cMcs/subir_archivo/"+idsolicitud+"");
  ajax.send(formdata);
  }
   if( al== 2){
var ajax = new XMLHttpRequest();

  ajax.upload.addEventListener("progress", progressHandler2, false);
  ajax.addEventListener("load", completeHandler2, false);
  ajax.addEventListener("error", errorHandler2, false);
  ajax.addEventListener("abort", abortHandler2, false);
  ajax.open("POST", base_url+"backend/administrador/solicitud/normas/cMcs/subir_archivo/"+idsolicitud+"");
  ajax.send(formdata);
  }


}
function progressHandler2(event){

 if(event.loaded==event.total){

  }
  var percent = (event.loaded / event.total) * 100;
  _("progressBar2").value = Math.round(percent);
  _("status2").innerHTML ="Cargando "+ Math.round(percent)+"% ... Espere";


}
function completeHandler2(event){
  _("status2").innerHTML = event.target.responseText;
  _("progressBar2").value = 0;
   document.getElementById("aux_mex2").style.display = "block";

	document.getElementById("aux_mex2").href =base_url+"docs_solicitud/mexcalsup/"+document.getElementById("fecha_mcs").value+document.getElementById("file2").files[0].name;



}
function errorHandler2(event){
  _("status2").innerHTML = "Falla en Envio";
}
function abortHandler2(event){
  _("status2").innerHTML = "Envio Abortado";
}';?>
</script>

<script >


	<? echo '


function progressHandler3(event){

 if(event.loaded==event.total){

  }
  var percent = (event.loaded / event.total) * 100;
  _("progressBar3").value = Math.round(percent);
  _("status3").innerHTML ="Cargando "+ Math.round(percent)+"% ... Espere";


}
function completeHandler3(event){
  _("status3").innerHTML = event.target.responseText;
  _("progressBar3").value = 0;
   document.getElementById("aux_mex3").style.display = "block";


	document.getElementById("aux_mex3").href =base_url+"docs_solicitud/mexcalsup/"+document.getElementById("fecha_mcs").value+document.getElementById("file3").files[0].name;





}
function errorHandler3(event){
  _("status3").innerHTML = "Falla en Envio";
}
function abortHandler3(event){
  _("status3").innerHTML = "Envio Abortado";
}';?>
</script>


<? //////////cargar  listra anexos mexcalsup
?>
 <script>
<? echo '
  var valorname;
function _(el){
	return document.getElementById(el);
}
function uploadFile3(){
	var equipo=document.getElementById("equipom").value;

	var file = _("file5_mex").files[0];

	var file2 = _("file6_mex").files[0];
	var formdata = new FormData();
	formdata.append("file5", file);

	formdata.append("file6", file2);
	formdata.append("equipo",equipo);
	formdata.append("fecha",$("#fecha_mcs").val());


	//formdata.append("e",equipo);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler5, false);
	ajax.addEventListener("load", completeHandler5, false);
	ajax.addEventListener("error", errorHandler5, false);
	ajax.addEventListener("abort", abortHandler5, false);
	ajax.open("POST", base_url+"backend/administrador/solicitud/normas/cMcs/subir_archivo2/"+idsolicitud+"");


	ajax.send(formdata);

}function progressHandler5(event){



	if(event.loaded==event.total){

	}
	var percent = (event.loaded / event.total) * 100;

	_("status5").innerHTML ="Cargando "+ Math.round(percent)+"% ... Espere";
}
function completeHandler5(event){

	 //var ruta = $("#rutax").val();
	_("status5").innerHTML = event.target.responseText;

	 //document.getElementById("upload_formx").reset();
	// $("#tabla_ajax_mex").load(ruta);
	$("#tabla_mexcalsup").load(base_url+"backend/administrador/solicitud/normas/cMcs/tabla/"+idsolicitud+"");

}
function errorHandler5(event){
	_("status5").innerHTML = "Falla en Envio";
}
function abortHandler5(event){
	_("status5").innerHTML = "Envio Abortado";
}';?>
</script>

<script type="text/javascript">
function quitar3(x,y,z){

var idproducto=x;
var anexo1=y;
var anexo2=z;


 $.ajax({
                     url:base_url+"backend/administrador/solicitud/normas/cMcs/eliminar_equipo",

                     method:"POST",
                    data:{idproducto:idproducto,anexo1:anexo1,anexo2:anexo2},
		            	success: function(data) {

		            		$("#tabla_mexcalsup").load(base_url+'backend/administrador/solicitud/normas/cMcs/tabla/'+idsolicitud+'');


		            	}
		});



}
</script>


<script >
	

	<? echo '
  var valorname;
function _(el){
  return document.getElementById(el);
}
function ex(al){

	if( al== 1){
  var file = _("excel_file").files[0];
}
if( al== 2){
  var file = _("excel_file2").files[0];
}
  //alert(file.name+" | "+file.size+" | "+file.type);
  //var b=11;
  var formdata = new FormData();
  formdata.append("excel1", file);
  
   
    formdata.append("action",$("#action").val());
     formdata.append("mod",$("#mod").val());
     formdata.append("acc",$("#acc").val());
       formdata.append("fecha",$("#fecha_anexos").val());
       formdata.append("tipo",al);
     

   

if( al== 1){
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler22, false);
  ajax.addEventListener("load", completeHandler22, false);
  ajax.addEventListener("error", errorHandler22, false);
  ajax.addEventListener("abort", abortHandler22, false);
  ajax.open("POST", base_url+"backend/cliente/solicitud/cExcel/guardar");
  
  ajax.send(formdata);
  }
  if( al== 2){
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler23, false);
  ajax.addEventListener("load", completeHandler23, false);
  ajax.addEventListener("error", errorHandler23, false);
  ajax.addEventListener("abort", abortHandler23, false);
  ajax.open("POST", base_url+"backend/administrador/solicitud/cExcel/guardar/"+idsolicitud);
  
  ajax.send(formdata);
  }
}
function progressHandler22(event){
  
  //_("loaded_n_total").innerHTML = "Uploaded "+(event.loaded/1024)+" Kb of "+ event.total;
  if(event.loaded==event.total){
  //_("loaded_n_total").innerHTML = "Subiendo "+(event.loaded/1024)+" Kb ";
//
  }
  var percent = (event.loaded / event.total) * 100;
  _("progressBar22").value = Math.round(percent);
  _("status22").innerHTML ="Cargando "+ Math.round(percent)+"% ... Espere";
 

}
function completeHandler22(event){
  _("status22").innerHTML = event.target.responseText;
  _("progressBar22").value = 0;
   document.getElementById("aux22").style.display = "block";
	//document.getElementById("aux22").value = document.getElementById("file1").files[0].name;
	document.getElementById("aux22").href =base_url+"docs_solicitud/anexos/produccion/"+document.getElementById("fecha_anexos").value+document.getElementById("excel_file").files[0].name;
				
   //document.getElementById("aux22").value = "Ver actual";
  //location.reload(true);
}
function errorHandler22(event){
  _("status22").innerHTML = "Falla en Envio";
}
function abortHandler22(event){
  _("status22").innerHTML = "Envio Abortado";
}

function progressHandler23(event){
  
  //_("loaded_n_total").innerHTML = "Uploaded "+(event.loaded/1024)+" Kb of "+ event.total;
  if(event.loaded==event.total){
  //_("loaded_n_total").innerHTML = "Subiendo "+(event.loaded/1024)+" Kb ";
//
  }
  var percent = (event.loaded / event.total) * 100;
  _("progressBar23").value = Math.round(percent);
  _("status23").innerHTML ="Cargando "+ Math.round(percent)+"% ... Espere";
 

}
function completeHandler23(event){
  _("status23").innerHTML = event.target.responseText;
  _("progressBar23").value = 0;
   document.getElementById("aux23").style.display = "block";
	//document.getElementById("aux23").value = document.getElementById("file1").files[0].name;
	document.getElementById("aux23").href =base_url+"docs_solicitud/anexos/produccion/"+document.getElementById("fecha_anexos").value+document.getElementById("excel_file2").files[0].name;
				
   //document.getElementById("aux23").value = "Ver actual";
  //location.reload(true);
}
function errorHandler23(event){
  _("status23").innerHTML = "Falla en Envio";
}
function abortHandler23(event){
  _("status23").innerHTML = "Envio Abortado";
}

';?>
</script>
