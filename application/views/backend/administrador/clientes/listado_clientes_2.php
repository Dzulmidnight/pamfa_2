<div class="g-pa-20">
  <div class="row">
    <!-- inicia col-md-12 -->
    <div class="col-lg-12">

      <div class="row g-mb-0">
        <div class="col-md-12 g-mb-0 g-mn-0--md">
          <div class="card border-0 rounded-0 g-mb-50">
            <!-- Panel Header -->
            <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
              <h3 class="h6 mb-0">
                <i class="icon-layers g-pos-rel g-top-1 g-mr-5"></i> Listado de clientes
              </h3>
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
            <div class="js-scrollbar card-block u-info-v1-1 g-bg-white-gradient-v1--after g-height-600 g-pa-10">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="">
                      ID
                    </th>
                    <th class="g-first-child">
                      <div class="media">
                        <div class="d-flex align-self-center">Entidad</div>

                        <div class="d-flex align-self-center ml-auto">
                          <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                            <a class="g-color-gray-light-v6 g-color-lightblue-v3--hover g-text-underline--none--hover" href="#!">
                              <i class="hs-admin-angle-up"></i>
                            </a>
                            <a class="g-color-gray-light-v6 g-color-lightblue-v3--hover g-text-underline--none--hover" href="#!">
                              <i class="hs-admin-angle-down"></i>
                            </a>
                          </span>
                        </div>
                      </div>
                    </th>
                    <th>
                      <div class="media">
                        <div class="d-flex align-self-center">Representante</div>

                        <div class="d-flex align-self-center ml-auto">
                          <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                            <a class="g-color-gray-light-v6 g-color-lightblue-v3--hover g-text-underline--none--hover" href="#!">
                              <i class="hs-admin-angle-up"></i>
                            </a>
                            <a class="g-color-gray-light-v6 g-color-lightblue-v3--hover g-text-underline--none--hover" href="#!">
                              <i class="hs-admin-angle-down"></i>
                            </a>
                          </span>
                        </div>
                      </div>
                    </th>
                    <th>
                      <div class="media">
                        <div class="d-flex align-self-center">Estado</div>

                        <div class="d-flex align-self-center ml-auto">
                          <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                            <a class="g-color-gray-light-v6 g-color-lightblue-v3--hover g-text-underline--none--hover" href="#!">
                              <i class="hs-admin-angle-up"></i>
                            </a>
                            <a class="g-color-gray-light-v6 g-color-lightblue-v3--hover g-text-underline--none--hover" href="#!">
                              <i class="hs-admin-angle-down"></i>
                            </a>
                          </span>
                        </div>
                      </div>
                    </th>
                    <th>
                      <div class="media">
                        <div class="d-flex align-self-center">Email</div>

                        <div class="d-flex align-self-center ml-auto">
                          <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                            <a class="g-color-gray-light-v6 g-color-lightblue-v3--hover g-text-underline--none--hover" href="#!">
                              <i class="hs-admin-angle-up"></i>
                            </a>
                            <a class="g-color-gray-light-v6 g-color-lightblue-v3--hover g-text-underline--none--hover" href="#!">
                              <i class="hs-admin-angle-down"></i>
                            </a>
                          </span>
                        </div>
                      </div>
                    </th>
                    <th>
                      <div class="media">
                        <div class="d-flex align-self-center">Progreso</div>

                        <div class="d-flex align-self-center ml-auto">
                          <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                            <a class="g-color-gray-light-v6 g-color-lightblue-v3--hover g-text-underline--none--hover" href="#!">
                              <i class="hs-admin-angle-up"></i>
                            </a>
                            <a class="g-color-gray-light-v6 g-color-lightblue-v3--hover g-text-underline--none--hover" href="#!">
                              <i class="hs-admin-angle-down"></i>
                            </a>
                          </span>
                        </div>
                      </div>
                    </th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?
                  // Foreach
                  foreach($consulta_gral as $fila){
                    $id=$fila->id_cliente;
                  ?>
                  <!-- inicia TR información cliente -->
                  <tr class="g-bg-gray-light-v8--opacity-0_4--checked">
                    <!-- id del cliente -->
                    <td class="js-select text-left g-first-child">
                      <label class="form-check-inline u-check g-pl-45 mb-0 mr-0">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                        <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0 g-bg-lightblue-v3--checked g-brd-lightblue-v3--checked">
                          <i class="fa" data-check-icon="&#xf00c"></i>
                        </div>
                        <? echo '# '.$fila->id_cliente;?>
                      </label>
                    </td>

                    <!-- nombre de la entidad legal -->
                    <td class="js-select text-left g-first-child">
                      <a href="<?php echo base_url('backend/administrador/clientes/clientes/detalleCliente'); ?>">
                        <i class="fa fa-search"></i> <? echo $fila->nombreLegal;?>
                      </a>
                    </td>

                    <!-- nombre del representante legal -->
                    <td>
                      <div class="d-inline-block">
                        <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                                              <? if($fila->estatus==1){?>
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-green g-mr-8"></span>
                                                  <? }?>
                          <!-- 
                          EN ESPERA-->
                          <? if($fila->estatus==0){?>
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-yellow g-mr-8"></span>
                                                  <? }?>
                                                  <!--  <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-yellow g-mr-8"></span>
                          <!-- CANCELADO-->
                                                  <? if($fila->estatus==2){?>
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-red g-mr-8"></span>
                                                  <? }?>
                                                  <!--
                            <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-red g-mr-8"></span>
                          AUTORIZADO
                            <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-green g-mr-8"></span>
                          -->
                          <? echo $fila->nombreRepresentante;?>
                        </span>
                      </div>

                    </td>

                    <!-- nombre del estado -->
                    <td><? echo $fila->estado;?></td>

                    <!-- email del usuario -->
                    <td><? echo $fila->email;?></td>

                    <td>
                      <div class="progress g-height-6 g-rounded-3">
                      <div class="progress-bar g-bg-lightbrown g-rounded-3" role="progressbar" style="width: 35%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="text-right">
                      <div class="g-pos-rel g-top-3 d-inline-block">
                      <a id="dropDown3_1Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-lightblue-v3--hover" href="#!" aria-controls="dropDown3_1" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="<? echo"#dropDown3_1".$id;?>">
                          <i class="hs-admin-more-alt"></i>
                        </a>

                        <div id="<? echo"dropDown3_1".$id;?>" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white" aria-labelledby="dropDown3_1Invoker">
                          <ul class="list-unstyled g-nowrap mb-0">
                            <li>
                              <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" name="<? echo "activa".$id;?>" id="<? echo "activa".$id;?>" href="<?php echo base_url('backend/administrador/clientes/cCliente/estatus/activar/'.$id.' '); ?>">
                                <i class="hs-admin-check g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                Activar
                              </a>
                            </li>
                            <li>
                              <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" name="<? echo "rechazo".$id;?>" id="<? echo "rechazo".$id;?>" href="<?php echo base_url('backend/administrador/clientes/cCliente/estatus/rechazo/'.$id.' '); ?>">
                                <i class="hs-admin-close g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                Cancelar
                              </a>
                            </li>

                            <li>
                              <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                <i class="hs-admin-archive g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                Consultar
                              </a>
                            </li>
                            <li>
                              <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                <i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                Editar
                              </a>
                            </li>
                            <li>
                              <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" name="<? echo "elimina".$id;?>" id="<? echo "elimina".$id;?>" href="<?php echo base_url('backend/administrador/clientes/cCliente/estatus/baja/'.$id.' '); ?>">
                                <i class="hs-admin-trash g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                
                                                              Eliminar
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </td>
                  </tr>
                                  <? 
                                }
                                // End Foreach
                                ?>
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