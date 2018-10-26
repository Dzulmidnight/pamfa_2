<style>
	.chart-container {
		position: relative;
		margin: auto;
		height: 400px;
		width: 400px;

	}
</style>
<!-- CSS Implementing Plugins -->
<link  rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/slick-carousel/slick/slick.css">

<div class="card border-0" >
							<div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15" >
								<?php $t=0;
										if (isset($consulta_gral)) {
									 foreach($consulta_gral as $f){
										$t++;

									}} ?>

								<h3 class="h6 mb-0">
									
									<i class="icon-directions g-pos-rel g-top-1 g-mr-5"></i> Accesos pendientes <span class="d-inline-block text-center g-min-width-35 g-bg-red g-font-size-12 g-color-white g-rounded-15 g-px-8 g-py-1"><?php echo $t;?></span>
								</h3>

								<div class="dropdown g-mb-10 g-mb-0--md">
									<span class="d-block g-color-primary--hover g-cursor-pointer g-mr-minus-5 g-pa-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="icon-options-vertical g-pos-rel g-top-1"></i>
									</span>
									<div class="dropdown-menu dropdown-menu-right rounded-0 g-mt-10">
										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-fire g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Reportes
										</a>

										<div class="dropdown-divider"></div>

										<a class="dropdown-item g-px-10" href="#!">
											<i class="icon-plus g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Ver más
										</a>
									</div>
								</div>
							</div>	
							


<div class="js-scrollbar card-block  u-info-v1-1 g-bg-white-gradient-v1--after g-height-400 g-pa-0 " >
<?php if (isset($consulta_gral)) {?>
								<ul class="list-unstyled"><?php
									foreach($consulta_gral as $fila){
											$id=$fila->id_cliente;
											$a="activar";
											$r="rechazo";
										?>
										<li class="d-flex justify-content-start g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-10">
											<div class="g-mt-2">
												<span class="u-icon-v3 g-rounded-50x g-mr-15 g-mb-15 g-width-40 g-height-40">
													<i class="hs-admin-user u-line-icon-pro"></i>
												</span>
												<!--<img class="g-width-50 g-height-50 rounded-circle" src="<?php echo base_url(); ?>assets/img-temp/100x100/img17.jpg" alt="Image Description">-->
											</div>
											<div class="align-self-center g-px-10">
												<h5 class="h6 g-font-weight-600 g-color-black g-mb-3">
													<span class="g-mr-5"><? echo $fila->nombreLegal;?></span>
													<small class="g-font-size-12 g-color-blue">
														<i class="hs-admin-alarm-clock"></i> <?php echo date('d/m/Y',$fila->fechaAlta);?>
													</small>
												</h5>
												<p class="m-0"><? echo $fila->nombreRepresentante;?></p>
											</div>
											<!--<div class="align-self-center ml-auto">
												<span class="u-label u-label--sm g-bg-blue g-rounded-20 g-px-10">$25 / hr</span>
											</div>-->
											<div class="align-self-center ml-auto">
												<a name="<? echo "activa".$id;?>" id="<? echo "activa".$id;?>" onclick="pendientes(<?php echo '\''.$a.'\',\''.$id.'\''?>);" style="display:inline-block" data-toggle="tooltip" title="Autorizar acceso">
													<span class="u-icon-v1 u-icon-size--sm g-bg-green--hover g-color-white--hover ">
														<i class="fa fa-check g-color-green g-color-white--hover"></i>
													</span>									
												</a>
												<a name="<? echo "rechazo".$id;?>" id="<? echo "rechazo".$id;?>" onclick="pendientes(<?php echo '\''.$r.'\',\''.$id.'\''?>);" style="display:inline-block" data-toggle="tooltip" title="Rechazar">
													<span class="u-icon-v1 u-icon-size--sm g-bg-red--hover g-color-white--hover ">
														<i class="fa fa-close"></i>
													</span>									
												</a>
											</div>
										</li>
									<?php
									}
									 ?>
										<li class="d-flex justify-content-start g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-10">
											<div class="m-auto">
												<a href="#">
													<i class="fa fa-search"></i> Consultar todos
												</a>
											</div>
										</li>


								</ul>
								<?php } else{?>
								<ul class="list-unstyled"><strong>Sin Pendientes</strong> 
								</ul><?php }?>