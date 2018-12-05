<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
	<div class="g-pa-20">
		<div class="row">

			<?php
			/// cargamos la vista del submenu
			$this->load->view($menu); 
			 ?>

			<div class="col-md-9">
				<div class="card h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
					<form class="js-validate" action="<? echo base_url();?>backend/cliente/cCliente/generales" method="post">


						<header>
							<h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">DATOS DE ACCESO</h2>
						</header>

						<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

						<div class="row">
							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                        <?php
           				foreach($consulta_datos_gral as $fila){ 
           				?>
										<label class="mb-0" for="#username">Usuario *</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<input id="username" name="username" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text"  required="required" data-msg="This field is mandatory"
										data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" value="<? echo $fila->username;?> ">
										</div>
									</div>
								</div>	
							</div>
							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#password">Contraseña *</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<input id="password" name="password" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<? echo $fila->password;?> " required="required" data-msg="This field is mandatory"
										data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
										</div>
									</div>
								</div>	
							</div>
						</div>

						<header>
							<h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">INFORMACIÓN GENERAL</h2>
						</header>

						<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

						<div class="row">
							<div class="col-md-12">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#nombreLegal">Nombre de la entidad legal *</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<textarea id="nombreLegal" name="nombreLegal" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder=""><? echo $fila->nombreLegal;?> </textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#nombreRepresentante">Nombre del representante legal *</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<textarea id="nombreRepresentante" name="nombreRepresentante" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder=""><? echo $fila->nombreRepresentante;?> </textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#email">Email *</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<input id="email" name="email" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="email" value="<? echo $fila->email;?> " required="required" data-msg="This field is mandatory"
										data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
										</div>
									</div>
								</div>	
							</div>
							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#telefono">Teléfono *</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<input id="telefono" name="telefono" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<? echo $fila->telefono;?> " required="required" data-msg="This field is mandatory"
										data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
										</div>
									</div>
								</div>	
							</div>
							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#fax">Fax</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<input id="fax" name="fax" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<? echo $fila->fax;?> " required="required" data-msg="This field is mandatory"
										data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
										</div>
									</div>
								</div>	
							</div>
						</div>


						<header>
							<h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">DATOS DE LOCALIZACIÓN</h2>
						</header>

						<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

						<div class="row">
							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#pais">País *</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="row g-mx-minus-10">
											<div class="col-md align-self-center g-px-10 g-mb-20 g-mb-0--md">
												
                                                <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                                                    <select id="pais" name="pais" class="js-select u-select--v3-select u-sibling w-100" required="required" title="Selecciona" >
                                                    <?php foreach($pais as $fila2){?>
                                                    	<option <?php if ($fila->pais==$fila2->id_pais) {?> selected
                                                    		<?                                                   	} ?> value="<?php echo $fila2->id_pais;?>" ><?php echo $fila2->nombre;?></option>
                                                        <?php }?>
                                                    
                                                    </select>
                                                    
                                                    <div class="d-flex align-items-center g-absolute-centered--y g-right-0 g-color-gray-light-v6 g-color-lightblue-v9--sibling-opened g-mr-15">
                                                    <i class="hs-admin-angle-down"></i>
                                                    </div>
                                                </div>
                                                
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#estado">Estado *</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<textarea id="estado" name="estado" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder=""><? echo $fila->estado;?> </textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#municipio">Municipio *</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<input id="municipio" name="municipio" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<? echo $fila->municipio;?> " required="required" data-msg="This field is mandatory"
										data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
										</div>
									</div>
								</div>	
							</div>
							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#colonia">Colonia *</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<input id="colonia" name="colonia" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<? echo $fila->colonia;?> " required="required" data-msg="This field is mandatory"
										data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
										</div>
									</div>
								</div>	
							</div>
							<div class="col-md-6">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#cp">Codigo Postal</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<input id="cp" name="cp" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="<? echo $fila->cp;?> " required="required" data-msg="This field is mandatory"
										data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
										</div>
									</div>
								</div>	
							</div>
							<div class="col-md-12">
								<div class="row g-mb-20">
									<div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
										<label class="mb-0" for="#direccion">Dirección *</label>
									</div>

									<div class="col-md-9 align-self-center">
										<div class="form-group g-pos-rel mb-0">
											<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
												<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
											</span>
											<textarea id="direccion" name="direccion" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder=""><? echo $fila->municipio;?> </textarea>
										</div>
									</div>
								</div>
							</div>

						</div>


						<hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

						<div>
							<button class="btn btn-md btn-xl--md u-btn-lightblue-v3 g-width-160--md g-font-size-12 g-font-size-default--md g-mb-10" type="submit">Guardar cambios</button>
							<button class="btn btn-md btn-xl--md u-btn-outline-gray-dark-v6 g-font-size-12 g-font-size-default--md g-mr-10 g-mb-10" type="reset">Cancelar</button>
						</div>
                        <? 
                    	}
                    	// end foreach
                    	?>

                         <input id="idcliente" name="idcliente" type="hidden" value="<? echo $fila->id_cliente;?>"/>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
