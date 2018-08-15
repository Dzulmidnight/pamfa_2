		<div class="col-md-3 g-mb-30 g-mb-0--md">
			<div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
				
				<!-- Profile Completion -->
				<section class="g-mb-30 g-mb-50--md">
					<h4 class="media h6 g-font-weight-400 g-mb-15">
						<span class="d-flex align-self-center g-color-gray-dark-v6">Avance del perfil</span>
						<span class="media-body align-self-center text-right g-color-gray-dark-v6">75%</span>
					</h4>

					<div class="progress g-height-4 g-rounded-2">
						<div class="progress-bar g-bg-lightblue-v4 g-rounded-3" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</section>
				<!-- End Profile Completion -->

				<!-- Profile Sidebar -->
				<section>
					<ul class="list-unstyled mb-0">
						<li class="g-brd-top g-brd-gray-light-v7 mb-0">
							<a class="d-flex align-items-center u-link-v5 g-parent g-py-15 <?php if($seccion == 'datos_generales' || $seccion == ''){ echo 'active'; }?>" href="<?php echo base_url('backend/cliente/usuario/perfiles/datos_generales'); ?>">
								<span class="g-font-size-18 g-color-gray-light-v6 g-color-lightred-v3--parent-hover g-color-lightred-v3--parent-active g-mr-15">
								<i class="hs-admin-user"></i>
								</span>
								<span class="g-color-gray-dark-v6 g-color-lightred-v3--parent-hover g-color-lightred-v3--parent-active">Información general</span>
							</a>
						</li>


						<li class="g-brd-top g-brd-gray-light-v7 mb-0">
							<a class="d-flex align-items-center u-link-v5 g-parent g-py-15 <?php if($seccion == 'datos_fiscales'){ echo 'active'; }?>" href="<?php echo base_url('backend/cliente/usuario/perfiles/datos_fiscales'); ?>">
								<span class="g-font-size-18 g-color-gray-light-v6 g-color-lightred-v3--parent-hover g-color-lightred-v3--parent-active g-mr-15">
									<i class="hs-admin-wallet"></i>
								</span>
								<span class="g-color-gray-dark-v6 g-color-lightred-v3--parent-hover g-color-lightred-v3--parent-active">Datos fiscales</span>
							</a>
						</li>


					</ul>
				</section>
				<!-- End Profile Sidebar -->
			</div>

		</div>