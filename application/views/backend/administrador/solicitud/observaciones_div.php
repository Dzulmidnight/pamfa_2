	
							<? $sec=""; 

							//$nombre = $_REQUEST['spanSeccion'];
							//echo $sp;
							if (isset($observaciones)) {
								
								foreach($observaciones as $fila)
					{
							foreach($seccion as $fila2)
							{
								//echo $fila2->id_seccion."---".$fila->seccion;

								if ($fila2->id_seccion==$fila->seccion) {
									$sec=$fila2->descripcion;
									break;
								}
							}

						?>
							<section class="g-mb-30">
								<div class="media g-mb-12">
									<!-- Cuerpo observación. -->
									<div class="media-body">
										<div class="d-inline-block g-width-170 g-width-auto--sm g-bg-lightblue-v6 g-font-size-12 g-font-size-default--lg g-color-gray-dark-v6 g-rounded-10 g-pa-10-15">
											<p class="mb-0"><strong><?php echo $sec;?></strong></p>
											<p class="mb-0"><?php echo $fila->observacion;?></p>
										</div>
									</div>
									<!-- End Cuerpo observación. -->

									<!-- Avatar. -->
									<div class="d-flex align-self-end g-ml-12">
										<img class="rounded-circle g-width-36 g-height-36" src="<?php echo base_url(); ?>assets/img-temp/200x200/img7.jpg" alt="Image Description">
									</div>
									<!-- End Avatar. -->
								</div>
								<div class="float-left">
									<?php if ($fila->estatus==0){?>
									<button type="button" onclick="<?php echo "actualiza_ob(".$fila->id_observacion.")"?>" class="btn btn-sm u-btn-primary" name="button" >
										<i class="fa hs-admin-check" ></i>
									</button>
									<button   type="button" onclick="<?php echo "quitar_ob(".$fila->id_observacion.")"?>" class="btn btn-sm u-btn-bluegray" name="button"  >
										<i class="fa hs-admin-close"></i>
									</button>
									<i class="hs-admin-time icon-clock g-mr-5"></i>
									<small><?php echo date('d/m/Y',$fila->fecha);?></small>

									<i class="hs-admin-check g-font-size-10 g-color-lightblue-v3 g-ml-12"></i>
									<?}?>
								</div>
								<!-- Fecha de observación -->
								<em class="d-flex align-self-center align-items-center justify-content-end g-font-style-normal g-color-gray-light-v1 g-mr-50">

									<i class="hs-admin-time icon-clock g-mr-5"></i>
									<small><?php echo date('d/m/Y',$fila->fecha_rev);?></small>

									<i class="hs-admin-check g-font-size-10 g-color-lightblue-v3 g-ml-12"></i>
									<i class="hs-admin-check g-font-size-10 g-color-lightblue-v3"></i>
								</em>
								<!-- End Fecha de observación -->
							</section>
							<?php }}?>