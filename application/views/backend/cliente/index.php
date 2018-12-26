<div class="g-pa-20">
	<div class="row">


		<!-- inicia col-md-12 -->
		<div class="col-lg-12">

			<div class="row g-mb-0">
				<div class="col-md-12 g-mb-0 g-mn-0--md">
					<div class="card border-0 rounded-0 g-mb-50">
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

						<div class="js-scrollbar card-block u-info-v1-1 g-bg-white-gradient-v1--after  g-pa-10">
							<table class="table table-striped g-font-size-12">
								<thead>
									<tr>
										<th>
											#ID
										</th>
										<th>
											Fecha
										</th>
										<th>
											Esquema
										</th>
										<th>
											Observaciones
										</th>
										<th>
											Cotización
										</th>
										<th>
											Pago
										</th>
										<th>
											Contrato
										</th>
										<th>
											...
										</th>
									</tr>
								</thead>
								<tbody>

									    <?php 
           									foreach($consulta_todo_c as $fila){
           										$total=0;
										if (isset($consulta_totales)) {
											foreach($consulta_totales as $fila_ob){

												if($fila_ob->fk_id_solicitud==$fila->id_solicitud){
													$total=$fila_ob->tot;
												}
											}
											# code...
										}
										$cotiz=0;
										$rechazo_cliente="";
											$pago=0;
										if (isset($consulta_pago)) {
											foreach($consulta_pago as $fila_pag){

												if($fila_pag->fk_id_solicitud==$fila->id_solicitud){
													if($fila_pag->url_cotizacion!=NULL)
													{
													$cotiz=1;
													}
													if($fila_pag->estatus=="aprobada")
													{
													$pago=1;
													}
													
													$rechazo_cliente=$fila_pag->estatus_cliente;
													
												}
											}
											# code...
										}
										$rechazo=0;
										
									
										if (isset($consulta_rechazo)) {
											foreach($consulta_rechazo as $fila_r){

												if($fila_r->fk_id_solicitud==$fila->id_solicitud){
													
													$rechazo=1;

												}

											}
											# code...
										}
										$contrato="";
										if (isset($consulta_contrato)) {
											foreach($consulta_contrato as $fila_c){

												if($fila_c->fk_id_solicitud==$fila->id_solicitud){
													
													$contrato=$fila_c->estatus_cliente;

												}

											}
											# code...
										}
										
              							 ?>
									<tr>
										<td>
											<a  class="btn btn-sm btn-info" href="<?php echo base_url('backend/cliente/solicitud/solicitudes_review/nueva_solicitud/'.$fila->id_solicitud); ?>">
												<?php echo $fila->id_solicitud." Consultar";?>
											</a>
										</td>
										<td>
											<?= date('d/m/Y', $fila->fecha); ?>
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
										<td>
											<a class="btn btn-sm u-btn-outline-blue g-mr-10 g-mb-15 nav-link"  onclick="llamar_modal3(<?php echo $fila->id_solicitud;?>)">
												<span class="float-right u-label u-label-num u-label--sm u-label-default g-color-white g-rounded-15 g-ml-5"><?php echo $total;?></span>
											    Observaciones
											</a>
										</td>
										<td>
											<!-- mostrar cuando aun hay observaciones -->
											<?php if ($total>0 ) {?>
											<a style="width:100px" href="#" class="disabled btn btn-secondary">
												<i class="fa fa-lock"></i>
											</a>
											<?php }?>
											<!-- mostrar cuando no hay observaciones pero aún no cargar cotización -->
											<?php if ($total==0 && $rechazo==0) {?>
											<a  href="#" class="btn u-btn-bluegray" data-toggle="tooltip" title="En proceso de decisión">
												<i class="fa fa-clock-o"></i> En proceso
											</a>
										<?php }?>

											<!-- mostrar cuando no se puede otorgar el servicio -->
											<?php if ($rechazo==1) {?>
											<a  class="btn btn-primary" onclick="llamar_modal(<?php echo $fila->id_solicitud;?>)">
												<i class="fa fa-close"></i> No se puede otorgar el servicio
											</a>
										<?php }?>

											<!-- mostrar cuando se carga la cotización -->
											<?php $a="aceptada"; $b="rechazada"; 
											if ($cotiz==1 && $rechazo==0 && $total==0) {?>
											<a href="<?php echo base_url('backend/cliente/solicitud/cotizacion/ver/').$fila->id_solicitud; ?>" class="btn u-btn-orange">
												<i class="et-icon-search"></i> Consultar
											</a>

											<button class="btn u-btn-primary" onclick="estatus_cliente(<?php echo '\''.  $fila->id_solicitud.'\',\''.$a.'\'' ?> ) ; " <?php if ($rechazo_cliente=="rechazada") {?>  style="display: none" <?php }?>>
												
												<?php if ($rechazo_cliente==NULL) {?><i class="fa fa-check"></i> Aceptar<?php } if ($rechazo_cliente=="aceptada") {?> <i class="fa fa-check"></i>Aceptada<?php } ?>
											

											</button>
											
											
											<button class="btn btn-primary" onclick="estatus_cliente(<?php echo '\''.  $fila->id_solicitud.'\',\''.$b.'\'' ?> ) ; " <?php if ($rechazo_cliente=="aceptada") {?> style="display: none" <?php }?>>
												<?php if ($rechazo_cliente==NULL) {?><i class="fa fa-close"></i> Rechazar<?php } if ($rechazo_cliente=="rechazada") {?><i class="fa fa-close"></i> Rechazada<?php } ?>
											</button>
										<?php }?>
										

										</td>
										<td>
											<?php if ($rechazo==1 || $rechazo_cliente=="rechazada" || $rechazo_cliente==null) {?>
											<a style="width:100px" href="#" class="disabled btn btn-secondary">
												<i class="fa fa-lock"></i>
											</a>
										<?php } else if($pago==1){?>

											<button class="btn u-btn-primary" onclick="llamar_modal2(<?php echo $fila->id_solicitud;?>)">
												<span data-toggle="tooltip" title="Cargar pago">
													<i class="fa fa-clock-o"></i> Aprobado
												</span>
											</button>
										<?php } else {?>
											<button class="btn u-btn-orange" onclick="llamar_modal2(<?php echo $fila->id_solicitud;?>)">
												<span data-toggle="tooltip" title="Cargar pago">
													<i class="fa fa-clock-o"></i> Pendiente
												</span>
											</button>
											<?}?>
										</td>

										<td>
											<?php if ($pago==1 && $contrato==null) {?>	
											<a href="<?php echo base_url('backend/cliente/solicitud/Contrato/detalleContrato/').$fila->id_solicitud; ?>" class="btn u-btn-orange">
												<i class="et-icon-search"></i> Consultar
											</a>										
										<?php }else if ($pago==1 && $contrato==2) {?>	
											<a href="<?php echo base_url('backend/cliente/solicitud/Contrato/detalleContrato/').$fila->id_solicitud; ?>" class="btn u-btn-orange">
												<i class="et-icon-search"></i> Rechazado
											</a>

											<?php } else if ($pago==1 && $contrato==1) {?>	
											<a href="<?php echo base_url('backend/cliente/solicitud/Contrato/detalleContrato/').$fila->id_solicitud; ?>" class="btn u-btn-orange">
												<i class="et-icon-search"></i> Aprobado
											</a>
											<?php } else{?>
											<a style="width:100px" href="#" class="disabled btn btn-secondary">
												<i class="fa fa-lock"></i>
											</a>

											
										<?php }?>
										</td>

										<td>
											<div class="g-pos-rel g-top-3 d-inline-block">
												<a id="dropDown2Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-lightblue-v3--hover" href="#!" aria-controls="dropDown2" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown">
													<i class="hs-admin-more-alt"></i>
												</a>

												<div id="dropDown" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white" aria-labelledby="dropDown2Invoker">
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
								<?php } ?>
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

<div id="x" >
  </div>
  <div id="y" >
  </div>
  <div id="z" >
  </div>
<script type="text/javascript">var base_url="<? echo base_url();?>";
</script>
<script type="text/javascript">
function estatus_cliente(x,y){


var estatus=y;
var idsolicitud=x;



 	
                    
			
 $.ajax({
 	type:'POST',
                     url:base_url+"backend/cliente/cCliente/cotiz_cliente",

                   
                    data:{idsolicitud:idsolicitud,estatus:estatus},
                  
		            	success: function(data) {
		            		
		                       }
		});



}
</script>
<script type="text/javascript">
	function llamar_modal(id)
	{
		$.ajax({
			type:"post",
			url: "<?php echo base_url('backend/cliente/cCliente/obser/'); ?>",
			data:{id:id},
			success:function(data){
				//alert(data);
				$('#x').html(data);
				$('#modal-rechaz').modal();
			}

		});
	}


</script>
<script type="text/javascript">
	function llamar_modal2(id)
	{
		$.ajax({
			type:"post",
			url: "<?php echo base_url('backend/cliente/cCliente/pag/'); ?>",
			data:{id:id},
			success:function(data){
				
				$('#y').html(data);
				$('#modal-pago').modal();
			}

		});
	}


</script>
<script type="text/javascript">
	function llamar_modal3(id)
	{
		$.ajax({
			type:"post",
			url: "<?php echo base_url('backend/cliente/cCliente/obser2/'); ?>",
			data:{id:id},
			success:function(data){
				
				$('#z').html(data);
				$('#modal1').modal();
			}

		});
	}


</script>







