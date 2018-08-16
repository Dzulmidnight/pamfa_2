<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
	<div class="g-bg-lightblue-v10-opacity-0_5 g-pa-20">
<!------------------------------------------------------------------------>



		<div class="row">
			<div class="col-md-7">
				<div class="card g-brd-gray-light-v7 g-mb-30">
					<!-- inicia tabla accesos pendientes -->
					<div class="g-pa-20">

						<header class="g-mb-20">
							<h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">Accesos pendientes</h2>
						</header>

						<div class="table-responsive g-mb-40">
							<table class="table u-table--v3 g-color-black">
								<thead>
									<tr>
										<th>#</th>
										<th>Representante</th>
										<th>Entidad legal</th>
										<th>Estado</th>
										<th>Estatus</th>
										<th>Acciones</th>
									</tr>
								</thead>
			
								<tbody>

									<tr>
										<td>1</td>
										<td>Stella Chandler</td>
										<td>Dropbox Inc.</td>
										<td>Sales Manager</td>
										<td>
											<span class="u-tags-v1 text-center g-width-110 g-brd-around g-brd-lightbrown g-bg-lightbrown g-font-weight-400 g-color-white g-rounded-50 g-py-4 g-px-15">Pendiente</span>
										</td>
										<td>
											<div class="g-pos-rel g-top-3 d-inline-block">
												<a id="dropDown2Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-lightblue-v3--hover" href="#!" aria-controls="dropDown2" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown2">
													<i class="hs-admin-more-alt"></i>
												</a>

												<div id="dropDown2" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white" aria-labelledby="dropDown2Invoker">
													<ul class="list-unstyled g-nowrap mb-0">
														<li>
															<a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
															<i class="hs-admin-check g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
															Autorizar
															</a>
														</li>

														<li>
															<a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
															<i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
															Editar
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

								</tbody>
							</table>
						</div>
					</div>
					<!-- termina tabla accesos pendientes -->
				</div>
			</div>


		</div>

           
<!-- JS Global Compulsory -->
<script src="<?php echo base_url(); ?>admin/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>admin/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>

<!-- JS Custom -->
<script src="<?php echo base_url(); ?>admin/assets/js/custom.js"></script>

<!-- JS Plugins Init. -->
<script>
	$(document).on('ready', function () {
		// initialization of custom select
		$('.js-select').selectpicker();

		// initialization of sidebar navigation component
		$.HSCore.components.HSSideNav.init('.js-side-nav');

		// initialization of hamburger
		$.HSCore.helpers.HSHamburgers.init('.hamburger');

		// initialization of HSDropdown component
		$.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
			dropdownHideOnScroll: false,
			dropdownType: 'css-animation',
			dropdownAnimationIn: 'fadeIn',
			dropdownAnimationOut: 'fadeOut'
		});

		// initialization of custom scrollbar
		$.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));

		// initialization of editable table
		$('.js-editable-table tr').editable({
			keyboard: true,
			dblclick: true,
			button: true,
			buttonSelector: '.js-edit',
			maintainWidth: true,
			edit: function (values) {
				$('.js-edit i', this).removeClass('hs-admin-pencil').addClass('hs-admin-check g-color-lightblue-v3');
			},
			save: function (values) {
				$('.js-edit i', this).removeClass('hs-admin-check g-color-lightblue-v3').addClass('hs-admin-pencil');
			}
		});
	});
</script>

