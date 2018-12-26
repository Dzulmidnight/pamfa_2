<div class="g-pa-20">
  <div class="row">
    <div class="col-lg-12">
      <a href="#!" onclick="window.history.back();" class="btn btn-md u-btn-outline-yellow g-mr-10 g-mb-15">
        <i class="hs-admin-angle-left"></i> Regresar
      </a>
    </div>
    <div class="col-lg-12">
      <div class="row g-mb-0">
        <!-- Profle Content -->
          <div class="col-lg-12">
            <div class="card border-0 rounded-0 g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-40">
              <!-- Nav tabs -->
              <ul class="nav nav-justified u-nav-v1-1 u-nav-primary g-brd-bottom--md g-brd-bottom-2 g-brd-primary g-mb-20" role="tablist" data-target="nav-1-1-default-hor-left-underline" data-tabs-mobile-type="slide-up-down" data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-primary g-mb-20">
                <li class="nav-item">
                  <a class="nav-link g-py-10 active" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--1" role="tab">Editar Perfil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link g-py-10" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--2" role="tab">Seguridad</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link g-py-10" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--3" role="tab">Datos de facturación</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link g-py-10" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--4" role="tab">Notificaciones</a>
                </li>
              </ul>
              <!-- End Nav tabs -->

              <!-- Tab panes -->
              <div id="nav-1-1-default-hor-left-underline" class="tab-content">
                <!-- EDITAR PERFIL -->
                <div class="tab-pane fade show active" id="nav-1-1-default-hor-left-underline--1" role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">
                  
                  <!-- información del representante -->
                  <h2 class="h4 g-font-weight-300">Información del representante legal</h2>
                    <?php
           foreach($consulta_datos_gral as $fila){
               ?>
                  <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30"  name="gene" id="gene">
                     <input  name="idcliente" type="hidden" value="<? echo $fila->id_cliente;?>"/>
                    <div class="form-group row g-mb-25">
                      <label for="example-text-input" class="col-2 col-form-label">Nombre del representante</label>
                      <div class="col-10">
                        <div class="input-group g-brd-primary--focus">
                          <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" name="nombreRepresentante" id="nombreRepresentante" type="text" placeholder="" value="<?php echo $fila->nombreRepresentante;?>">
                          <div class="input-group-append">
                            <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-pencil"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row g-mb-25">
                      <label for="example-search-input" class="col-2 col-form-label">ID</label>
                      <div class="col-10">
                        <div class="input-group g-brd-primary--focus">
                          <input disabled="" class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="text" placeholder="" value="<?php echo $fila->id_cliente;?>">
                          <div class="input-group-append">
                            <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-pencil"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row g-mb-25">
                      <label for="example-email-input" class="col-2 col-form-label">Nombre legal</label>
                      <div class="col-10">
                        <div class="input-group g-brd-primary--focus">
                          <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" name="nombreLegal" id="nombreLegal" type="text" placeholder=""  value="<?php echo $fila->nombreLegal;?>">
                          <div class="input-group-append">
                            <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-pencil"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row g-mb-25">
                      <label for="example-url-input" class="col-2 col-form-label">Email</label>
                      <div class="col-10">
                        <div class="input-group g-brd-primary--focus">
                          <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="text" name="email" id="email" placeholder="" value="<?php echo $fila->email;?>">
                          <div class="input-group-append">
                            <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-pencil"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row g-mb-25">
                      <label for="example-tel-input" class="col-2 col-form-label">Teléfono</label>
                      <div class="col-10">
                        <div class="input-group g-brd-primary--focus">
                          <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" name="telefono" id="telefono" type="text" placeholder="" value="<?php echo $fila->telefono;?>">
                          <div class="input-group-append">
                            <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-pencil"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row g-mb-25">
                      <label for="example-password-input" class="col-2 col-form-label">Fax</label>
                      <div class="col-10">
                        <div class="input-group g-brd-primary--focus">
                          <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="text" name="fax" id="fax" placeholder="" value="<?php echo $fila->fax;?>">
                          <div class="input-group-append">
                            <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-pencil"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>

                  <!-- end información del representante -->
  
                  <!-- dirección entidad legal -->
                  <h2 class="h4 g-font-weight-300">
                    Dirección de la entidad legal
                  </h2>

                    <div class="form-group row g-mb-25">
                      <label for="example-text-input" class="col-2 col-form-label">País</label>
                      <div class="col-10">
                        <div class="input-group g-brd-primary--focus">
                          <select class="form-control" name="pais" id="pais" required>                  
                  <?php foreach($pais as $fila2){?>
                    <option <?php if($fila2->id_pais==$fila->pais){?> selected="" <? }?>value="<?php echo $fila2->id_pais;?>" ><?php echo $fila2->nombre;?></option>
                  <?php }?>
                </select>
                          <div class="input-group-append">
                            <span class="form-control"><i class="icon-pencil"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row g-mb-25">
                      <label for="example-search-input" class="col-2 col-form-label">Estado</label>
                      <div class="col-10">
                        <div class="input-group g-brd-primary--focus">
                          <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" name="estado" id="estado" type="text" placeholder="" value="<?php echo $fila->estado;?>">
                          <div class="input-group-append">
                            <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-pencil"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row g-mb-25">
                      <label for="example-email-input" class="col-2 col-form-label">Municipio</label>
                      <div class="col-10">
                        <div class="input-group g-brd-primary--focus">
                          <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" name="municipio" id="municipio" type="text" placeholder="" value="<?php echo $fila->municipio;?>">
                          <div class="input-group-append">
                            <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-pencil"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row g-mb-25">
                      <label for="example-url-input" class="col-2 col-form-label">Colonia</label>
                      <div class="col-10">
                        <div class="input-group g-brd-primary--focus">
                          <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" name="colonia" id="colonia" type="text" placeholder=""value="<?php echo $fila->colonia;?>">
                          <div class="input-group-append">
                            <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-pencil"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row g-mb-25">
                      <label for="example-tel-input" class="col-2 col-form-label">Código Postal</label>
                      <div class="col-10">
                        <div class="input-group g-brd-primary--focus">
                          <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" name="cp" id="cp" type="text" placeholder="" value="<?php echo $fila->cp;?>">
                          <div class="input-group-append">
                            <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-pencil"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row g-mb-25">
                      <label for="example-password-input" class="col-2 col-form-label">Dirección</label>
                      <div class="col-10">
                        <div class="input-group g-brd-primary--focus">
                          <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="text" name="direccion" id="direccion" placeholder="" value="<?php echo $fila->direccion;?>">
                          <div class="input-group-append">
                            <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-pencil"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                 
                  <!-- end direccion entidad legal -->

                  <div class="text-sm-right">
                    
                    <button class="btn u-btn-primary rounded-0 g-py-12 g-px-25" type="button" onclick="generales()">Guardar cambios</button>
                  </div>
                   </form>
                <?php }?>
                </div>
                <!-- End EDITAR PERFIL -->

                <!-- CONFIGURACIÓN DE SEGURIDAD -->
                <div class="tab-pane fade" id="nav-1-1-default-hor-left-underline--2" role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">
                  <h2 class="h4 g-font-weight-300">Configuración de seguridad</h2>
                  
                  <form name="contra" id="contra">
                    <!-- Contraseña actual -->
                    <div class="form-group row g-mb-25">
                      <label class="col-sm-2 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-left g-mb-10">Contraseña actual</label>
                      <div class="col-sm-9">
                        <div class="input-group g-brd-primary--focus">
                          <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="text" name="password" id="password" placeholder="Contraseña actual" value="<?php echo $fila->password;?>" >
                          <div class="input-group-append">
                            <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-lock"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row g-mb-25">
                      <label class="col-sm-2 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-left g-mb-10">Nueva contraseña</label>
                      <div class="col-sm-9">
                        <div class="input-group g-brd-primary--focus">
                          <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" name="n_pass" id="n_pass" type="password" placeholder="Nueva contraseña">
                          <div class="input-group-append">
                            <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-lock"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row g-mb-25">
                      <label class="col-sm-2 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-left g-mb-10">Verificar contraseña</label>
                      <div class="col-sm-9">
                        <div class="input-group g-brd-primary--focus">
                          <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" name="verificar_p" id="verificar_p" type="password" placeholder="Ingrese nuevamente la contraseña">
                          <div class="input-group-append">
                            <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-lock"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row g-mb-25">
                      <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">Password reset</label>
                      <div class="col-sm-9">
                        <label class="form-check-inline u-check g-pl-25">
                          <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                          <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                            <i class="fa" data-check-icon="&#xf00c"></i>
                          </div>
                          Requerir información personal para recuperar la contraseña
                        </label>
                        <small class="d-block text-muted">Cuando tu seleccionas esta casilla deberar ingresar un correo de respaldo donde se enviara la nueva contraseña.</small>
                      </div>
                    </div>

                   

                    <hr class="g-brd-gray-light-v4 g-my-25">

                    <div class="text-sm-right">
                      <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#!">Cancelar</a>
                      <button class="btn u-btn-primary rounded-0 g-py-12 g-px-25" type="button" onclick="pass()">Guardar cambios</button>
                    </div>
                     <input name="idcliente" type="hidden" value="<? echo $fila->id_cliente;?>"/>
                   
                  </form>
                </div>
                <!-- END CONFIGURACIÓN DE SEGURIDAD -->

                <!-- OPCIONES DE PAGO -->
                <div class="tab-pane fade" id="nav-1-1-default-hor-left-underline--3" role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">
                  <h2 class="h4 g-font-weight-300">Administrar datos de facturación</h2>
                  <p class="g-mb-25">A continuación se encuentran los detalles de la opciones de pago.</p>

                  <form name="fis" id="fis">
                     <input  name="idcliente" type="hidden" value="<? echo $fila->id_cliente;?>"/>
                   
                    <!-- Aministración datos de facturación -->
                    <div class="row">
                      <!-- Efectivo -->
                      <div class="col-md-4">
                        <?php
           foreach($consulta_datos_fiscal as $fila2){
               ?>
                        <label class="u-check w-100 g-mb-25">
                          <strong class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Efectivo</strong>
                          <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" type="radio" value="efectivo" name="formaPago" id="formaPago1"<?php if($fila2->formaPago=="efectivo"){?>checked=""<?php }?>>

                          <div class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
                            <div class="media g-pa-12">
                              <div class="media-body align-self-center g-color-blue">
                                <i class="fa icon-finance-210 u-line-icon-pro g-font-size-30 align-self-center mx-auto"></i>
                              </div>

                              <div class="d-flex align-self-center g-width-20 g-ml-15">
                                <div class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20"><i></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </label>
                      </div>
                      <!-- End Efectivo -->

                      <!-- Transferencia -->
                      <div class="col-md-4">
                        <label class="u-check w-100 g-mb-25">
                          <strong class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Transferencia</strong>
                          <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" type="radio" value="transferencia" name="formaPago" id="formaPago2" <?php if($fila2->formaPago=="transferencia"){?>checked=""<?php }?>>

                          <div class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
                            <div class="media g-pa-12">
                              <div class="media-body align-self-center g-color-lightred">
                                <i class="fa fa-cc-mastercard g-font-size-30 align-self-center mx-auto"></i>
                              </div>

                              <div class="d-flex align-self-center g-width-20 g-ml-15">
                                <div class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20"><i></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </label>
                      </div>
                      <!-- End Transferencia -->

                      <!-- Cheque -->
                      <div class="col-md-4">
                        <label class="u-check w-100 g-mb-25">
                          <strong class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Cheque</strong>
                          <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" type="radio" value="cheque" name="formaPago" id="formaPago3" <?php if($fila2->formaPago=="cheque"){?>checked=""<?php }?>>

                          <div class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
                            <div class="media g-pa-12">
                              <div class="media-body align-self-center g-color-orange">
                                <i class="fa icon-finance-139 u-line-icon-pro u-line-icon-pro g-font-size-30 align-self-center mx-auto"></i>
                              </div>

                              <div class="d-flex align-self-center g-width-20 g-ml-15">
                                <div class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20"><i></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </label>
                      </div>
                      <!-- End Cheque -->

                    </div>
                    <!-- End Aministración datos de facturación -->

                    <!-- Datos de la cuenta -->
                    <div class="row">
                      <!-- Nombre del banco -->
                      <div class="col-md-6">
                        <div class="form-group g-mb-20">
                          <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="banco">Nombre del banco</label>
                          <div class="input-group g-brd-primary--focus">
                            <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" name="banco" id="banco" type="text" placeholder="Banco" value="<?php echo $fila2->banco;?>">
                            <div class="input-group-append">
                              <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-user"></i></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Nombre del banco -->

                      <!-- Numero de cuenta -->
                      <div class="col-md-6">
                        <div class="form-group g-mb-20">
                          <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="digitosTarjeta">Ultimos 4 digitos del número de cuenta.</label>
                          <div class="input-group g-brd-primary--focus">
                            <input id="inputGroup1_3" class="form-control form-control-md g-brd-right-none rounded-0 g-py-13" name="digitosTarjeta" id="digitosTarjeta" type="text" placeholder="XXXX" data-mask="9999" value="<?php echo $fila2->digitosTarjeta;?>" >
                            <div class="input-group-append">
                              <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-credit-card"></i></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Numero de cuenta -->
                    </div>
                    <!-- End Datos de la cuenta -->

                    <!-- RFC y razon social -->
                    <div class="row">
                      <!-- R.F.C -->
                      <div class="col-md-6">
                        <div class="form-group g-mb-20">
                          <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="rfc">R.F.C</label>
                          <div class="input-group g-brd-primary--focus">
                            <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="text" name="rfc" id="rfc" placeholder="R.F.C." value="<?php echo $fila2->rfc;?>">
                            <div class="input-group-append">
                              <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-user"></i></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Razón social -->
                      <div class="col-md-6">
                        <div class="form-group g-mb-20">
                          <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="razonSocial">Razón social</label>
                          <div class="input-group g-brd-primary--focus">
                            <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="text" name="razonSocial" id="razonSocial" placeholder="Razón social" value="<?php echo $fila2->razonSocial;?>">
                            <div class="input-group-append">
                              <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-user"></i></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End RFC y razon social -->

                    <!-- Información contacto facturación -->
                    <div class="row">
                      <!-- Nombre contacto facturación -->
                      <div class="col-md-6">
                        <div class="form-group g-mb-20">
                          <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="nombreFactura">Nombre de contacto para la facturación</label>
                          <div class="input-group g-brd-primary--focus">
                            <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" name="nombreFactura" id="nombreFactura" type="text" placeholder="Nombre completo" value="<?php echo $fila2->nombreFactura;?>">
                            <div class="input-group-append">
                              <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-user"></i></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Email envio de factura -->
                      <div class="col-md-6">
                        <div class="form-group g-mb-20">
                          <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="emailFactura">Correo electrónico para envío de la factura</label>
                          <div class="input-group g-brd-primary--focus">
                            <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" name="emailFactura" id="emailFactura" type="text" placeholder="Email" value="<?php echo $fila2->emailFactura;?>">
                            <div class="input-group-append">
                              <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-envelope"></i></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Información contacto facturación -->

                    <!-- Información para facturación -->
                    <div class="row">
                      <!-- Uso de CFDI -->
                      <div class="col-md-6">
                        <div class="form-group g-mb-20">
                          <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="cdfi">Uso del CFDI</label>
                          <div class="input-group g-brd-primary--focus">
                            <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" name="cdfi" id="cdfi" type="text" placeholder="CFDI" value="<?php echo $fila2->cdfi;?>">
                            <div class="input-group-append">
                              <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-pencil"></i></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Dirección del R.F.C -->
                      <div class="col-md-6">
                        <div class="form-group g-mb-20">
                          <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Dirección en el R.F.C</label>
                          <div class="input-group g-brd-primary--focus">
                            <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="text" name="dirFiscal" id="dirFiscal" placeholder="Dirección fiscal" value="<?php echo $fila2->dirFiscal;?>">
                            <div class="input-group-append">
                              <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-pencil"></i></span>
                            </div>
                          </div>
                        </div>
                      </div>
                       <? }?>
                    </div>
                    <!-- End Información para facturación -->

                    <hr class="g-brd-gray-light-v4 g-my-25">

                    <div class="text-sm-right">
                     <? /* <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#!">Cancelar</a>*/?>
                      <button class="btn u-btn-primary rounded-0 g-py-12 g-px-25" type="button" onclick="fiscales()">Guardar cambios</button>
                    </div>
                  </form>

                </div>
                <!-- END OPCIONES DE PAGO -->

                <!-- Configuración de notificaciones -->
                <div class="tab-pane fade" id="nav-1-1-default-hor-left-underline--4" role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">
                  <h2 class="h4 g-font-weight-300">Administrador de notificaciones</h2>
                  <p class="g-mb-25">A continuación se muestran las notificaciones que se pueden administrar.</p>

                  <form>
                    <!-- Notificación por email -->
                    <div class="form-group">
                      <label class="d-flex align-items-center justify-content-between">
                        <span>Notificaciones por Email</span>
                        <div class="u-check">
                          <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="emailNotification" type="checkbox" checked>
                          <div class="u-check-icon-radio-v7">
                            <i class="d-inline-block"></i>
                          </div>
                        </div>
                      </label>
                    </div>
                    <!-- End Notificación por email -->

                    <hr class="g-brd-gray-light-v4 g-my-20">

                    <!-- Notificación de etapas -->
                    <div class="form-group">
                      <label class="d-flex align-items-center justify-content-between">
                        <span>
                          Enviar email cuando se actualice una etapa de solicitud.
                        </span>
                        <div class="u-check">
                          <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="commentNotification" type="checkbox">
                          <div class="u-check-icon-radio-v7">
                            <i class="d-inline-block"></i>
                          </div>
                        </div>
                      </label>
                    </div>
                    <!-- End Notificación de etapas -->

                    <hr class="g-brd-gray-light-v4 g-my-25">

                    <div class="text-sm-right">
                      <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#!">Cancelar</a>
                      <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="#!">Guardar cambios</a>
                    </div>
                  </form>
                </div>
                <!-- End Configuración de notificaciones -->
              </div>
              <!-- End Tab panes -->              
            </div>

          </div>
        <!-- End Profle Content -->
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  var base_url="<? echo base_url();?>";
 


</script>
<script type="text/javascript">
function generales(){



  var dataString = $('#gene').serialize();
  

 $.ajax({
                     url:base_url+"backend/administrador/clientes/cCliente/generales_sol",

                     method:"POST",
                    data:dataString,
                  success: function(data) {
                    swal({
      title: "Información guardada",
      text: "",
      icon: "success",
    })
      }
    });

}
</script>
<script type="text/javascript">
function fiscales(){
  
  
  var dataString = $('#fis').serialize();
 $.ajax({
                     url:base_url+"backend/administrador/clientes/cCliente/fiscal_sol",

                     method:"POST",
                    data:dataString,
                  success: function(data) {
                    swal({
      title: "Información guardada",
      text: "",
      icon: "success",
    })
    }
    });

}
</script>
<script type="text/javascript">
function pass(){
  
  var a=$('#n_pass').val();
  var b=$('#verificar_p').val()
if(a === b) {
   


  var dataString = $('#contra').serialize();
 $.ajax({
                     url:base_url+"backend/administrador/clientes/cCliente/password",

                     method:"POST",
                    data:dataString,
                  success: function(data) {
                    swal({
      title: "Información guardada",
      text: "",
      icon: "success",
    })
                    document.getElementById("password").value = a;
                     document.getElementById("n_pass").value = "";
                      document.getElementById("verificar_p").value = "";
    }
    });
}else{

    swal({
      title: "Datos incorrectos",
      text: "Verfique su información e intentelo de nuevo",
      icon: "warning",
     
      dangerMode: true,
    })
}

}
</script>