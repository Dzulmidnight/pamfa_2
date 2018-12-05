<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
	<div class="g-pa-20">
		<div class="row">

			<?php
			/// cargamos la vista del submenu
			$this->load->view($menu); 
			 ?>

			<div class="col-md-9">
				<div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
					<form class="js-validate" action="<? echo base_url();?>cCliente/fiscal" method="post">

						<header>
							<h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">DATOS 	DE FACTURACIÓN</h2>
						</header>

						<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

						<div class="row">
							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                    <?php
           			foreach($consulta_fiscal as $fila){
               ?>
										<label class="mb-0" for="#rfc">R.F.C</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<input id="rfc" name="rfc" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<? echo $fila->rfc;?>" required="required" data-msg="This field is mandatory"
										data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
										</div>
									</div>
								</div>	
							</div>
							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#razonSocial">Razón social</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<textarea id="razonSocial" name="razonSocial" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="" ><? echo $fila->razonSocial;?></textarea>
										</div>
									</div>
								</div>	
							</div>

							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#emailFactura">Correo electrónico para envío de la factura</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<input id="emailFactura" name="emailFactura" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<? echo $fila->emailFactura;?>" required="required" data-msg="This field is mandatory"
										data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
										</div>
									</div>
								</div>	
							</div>

							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#nombreFactura">Nombre de contacto para la facturación</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<input id="nombreFactura" name="nombreFactura" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<? echo $fila->nombreFactura;?>" required="required" data-msg="This field is mandatory"
										data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
										</div>
									</div>
								</div>	
							</div>
							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#telFactura">Teléfono</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<input id="telFactura" name="telFactura" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<? echo $fila->telFactura;?>" required="required" data-msg="This field is mandatory"
										data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
										</div>
									</div>
								</div>	
							</div>
							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#formaPago">Forma de pago</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<input id="formaPago" name="formaPago" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<? echo $fila->formaPago;?>" required="required" data-msg="This field is mandatory"
										data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
										</div>
									</div>
								</div>	
							</div>
							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#banco">Ultimos 4 digitos del número de cuenta</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<input id="banco" name="banco" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text"  required="required" data-msg="This field is mandatory"
										data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" value="<? echo $fila->banco;?>">
										</div>
									</div>
								</div>	
							</div>
							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#digitosTarjeta">Ultimos 4 digitos de la tarjeta</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<input id="digitosTarjeta" name="digitosTarjeta" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" placeholder="XXXX" data-mask="9999-" data-msg="This field is mandatory"
										data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" value="<? echo $fila->digitosTarjeta;?>">

										</div>
									</div>


								</div>	
							</div>
							<div class="col-md-12">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#dirFiscal">Dirección en el R.F.C</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<textarea id="dirFiscal" name="dirFiscal" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder=""><? echo $fila->dirFiscal;?></textarea>
										</div>
									</div>
								</div>
							</div>


						</div>






						<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

						<div>
							<button class="btn btn-md btn-xl--md u-btn-lightblue-v3 g-width-160--md g-font-size-12 g-font-size-default--md g-mb-10" type="submit">Guardar cambios</button>
							<button class="btn btn-md btn-xl--md u-btn-outline-gray-dark-v6 g-font-size-12 g-font-size-default--md g-mr-10 g-mb-10" type="reset">Cancelar</button>
                               <?php
		   }
            ?>
						</div>
                        <input id="idcliente" name="idcliente" type="hidden" value="<? echo $fila->fk_id_cliente;?>"/>
					</form>
				</div>
			</div>
		</div>
