<!-- Sidebar Nav -->
<div id="sideNav" class="col-auto u-sidebar-navigation-v1 u-sidebar-navigation--light">
	<ul id="sideNavMenu" class="u-sidebar-navigation-v1-menu u-side-nav--top-level-menu g-min-height-100vh mb-0">
		<!-- Dashboards -->
		<li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
			<a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu1">
				<span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
					<i class="hs-admin-server"></i>
				</span>
				<span class="media-body align-self-center">Dashboard</span>
				<span class="d-flex align-self-center u-side-nav--control-icon">
					<i class="hs-admin-angle-right"></i>
				</span>
				<span class="u-side-nav--has-sub-menu__indicator"></span>
			</a>

			<!-- Dashboards: Submenu-1 -->
			<ul id="subMenu1" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
				<!-- Dashboards v1 -->
				<li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="<?php echo base_url('backend/cliente/main'); ?>">
						<span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
							<i class="hs-admin-infinite"></i>
						</span>
						<span class="media-body align-self-center">Inicio</span>
					</a>
				</li>
				<!-- End Dashboards v1 -->
			</ul>
			<!-- End Dashboards: Submenu-1 -->
		</li>
		<!-- End Dashboards -->

		<!-- Inicia opción solicitudes -->
		<li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item" >
			<a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu7" >
				<span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
					<i class="fa fa-handshake-o"></i>
				</span>
				<span class="media-body align-self-center">
					Solicitudes
					<i class="fa fa-exclamation-triangle g-color-lightred-v2" style="color:red"></i>
				</span>
				<span class="d-flex align-self-center u-side-nav--control-icon">
					<i class="hs-admin-angle-right"></i>
				</span>
				
				<!-- se muestra en caso de que se tengan solicitudes pendientes -->
				<!--<span class="d-flex align-self-center">

				</span>
-->
				<span class="u-side-nav--has-sub-menu__indicator"></span>
			</a>

			<ul id="subMenu7" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">

				<!--<li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="<?php echo base_url('backend/administrador/solicitudes/concentradoGeneral'); ?>">
						<span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
							<i class="hs-admin-layout-list-thumb"></i>
						</span>
						<span class="media-body align-self-center">General</span>
						
					</a>
				</li>-->
				<li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="<?php echo base_url('backend/administrador/solicitudes/solicitudesPendientes'); ?>">
						<span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
							<i class="hs-admin-layout-list-thumb"></i>
						</span>
						<span class="media-body align-self-center">Solicitudes Pendientes</span>

						<!-- se muestra el numero de solicitudes pendientes -->
						<span class="d-flex align-self-center">
							<span class="d-inline-block text-center g-min-width-35 g-bg-red g-font-size-12 g-color-white g-rounded-15 g-px-8 g-py-1">5</span>
						</span>

					</a>
				</li>
				<li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="<?php echo base_url('backend/administrador/solicitudes/solicitudes_en_proceso'); ?>">
						<span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
							<i class="hs-admin-layout-list-thumb"></i>
						</span>
						<span class="media-body align-self-center">Solicitudes en Proceso</span>
					</a>
				</li>

			</ul>

		</li>
		<!-- Termina opción solicitudes -->

		<!-- Inicia opción usuario -->
		<li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
			<a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu2">
				<span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
					<i class="et-icon-profile-male"></i>
				</span>
				<span class="media-body align-self-center">Usuario</span>
				<span class="d-flex align-self-center u-side-nav--control-icon">
					<i class="hs-admin-angle-right"></i>
				</span>
				<span class="u-side-nav--has-sub-menu__indicator"></span>
			</a>

			<!-- Layouts Settings: Submenu-1 -->
			<ul id="subMenu2" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0" style="display: block;">
				<!-- Header Static -->
				<li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="<?php echo base_url('backend/administrador/usuario/perfiles'); ?>">
						<span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
							<i class="hs-admin-settings"></i>
						</span>
						<span class="media-body align-self-center">Perfil</span>
					</a>
				</li>
				<!-- End Header Static -->

			</ul>
			<!-- End Layouts Settings: Submenu-1 -->
		</li>
		<!-- Termina opcion usuario -->


		<!-- Inicia opción clientes -->
		<li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
			<a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu3">
				<span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
					<i class="fa fa-handshake-o"></i>
				</span>
				<span class="media-body align-self-center">Clientes</span>
				<span class="d-flex align-self-center u-side-nav--control-icon">
					<i class="hs-admin-angle-right"></i>
				</span>

				<span class="u-side-nav--has-sub-menu__indicator"></span>
			</a>

			<ul id="subMenu3" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">

				<li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="<?php echo base_url('backend/administrador/clientes/clientes'); ?>">
						<span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
							<i class="hs-admin-layout-list-thumb"></i>
						</span>
						<span class="media-body align-self-center">Listado clientes</span>
					</a>
				</li>
				<li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="<?php echo base_url('backend/administrador/clientes/clientes/representantes'); ?>">
						<span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
							<i class="hs-admin-layout-list-thumb"></i>
						</span>
						<span class="media-body align-self-center">Representantes</span>
					</a>
				</li>

			</ul>

		</li>
		<!-- Termina opción clientes -->

		<!-- Inicia opción auditores -->
		<li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
			<a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu4">
				<span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
					<i class="icon-graduation"></i>
				</span>
				<span class="media-body align-self-center">Auditores</span>
				<span class="d-flex align-self-center u-side-nav--control-icon">
					<i class="hs-admin-angle-right"></i>
				</span>

				<span class="u-side-nav--has-sub-menu__indicator"></span>
			</a>

			<!-- auditores: Submenu-1 -->
			<ul id="subMenu4" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
				<li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="<?php echo base_url('backend/administrador/auditores/auditores/nuevo'); ?>">
						<span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
							<i class="hs-admin-layout-list-thumb"></i>
						</span>
						<span class="media-body align-self-center">Crear auditor / inspector</span>
					</a>
				</li>
				<li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="<?php echo base_url('backend/administrador/auditores/auditores'); ?>">
						<span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
							<i class="hs-admin-layout-list-thumb"></i>
						</span>
						<span class="media-body align-self-center">Listado auditores / inspectores</span>
					</a>
				</li>
			</ul>
			<!-- End auditores: Submenu-1 -->
		</li>
		<!-- Termina opción auditores -->


		<!-- Inicia opción administradores -->
		<li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
			<a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu5">
				<span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
					<i class="icon-communication-109 u-line-icon-pro"></i>
				</span>
				<span class="media-body align-self-center">Administradores</span>
				<span class="d-flex align-self-center u-side-nav--control-icon">
					<i class="hs-admin-angle-right"></i>
				</span>

				<span class="u-side-nav--has-sub-menu__indicator"></span>
			</a>

			<!-- administradores: Submenu-1 -->
			<ul id="subMenu5" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
				<li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="../tables/tables-basic.html">
						<span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
							<i class="hs-admin-layout-list-thumb"></i>
						</span>
						<span class="media-body align-self-center">Listado administradores</span>
					</a>
				</li>

			</ul>
			<!-- End administradores: Submenu-1 -->
		</li>
		<!-- Termina opción administradores -->

		<!-- Inicia opción Configuración -->
		<li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
			<a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu6">
				<span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
					<i class="hs-admin-pencil-alt"></i>
				</span>
				<span class="media-body align-self-center">Configuración</span>
				<span class="d-flex align-self-center u-side-nav--control-icon">
					<i class="hs-admin-angle-right"></i>
				</span>

				<span class="u-side-nav--has-sub-menu__indicator"></span>
			</a>

			<!-- Forms: Submenu-1 -->
			<ul id="subMenu6" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
				<!-- Elements -->
				<li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu6Elements">
						<span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
							<i class="hs-admin-list"></i>
						</span>
						<span class="media-body align-self-center">Catalogos</span>
						<span class="d-flex align-self-center u-side-nav--control-icon">
							<i class="hs-admin-angle-right"></i>
						</span>
					</a>

					<!-- Menu Leveles: Submenu-2 -->
					<ul id="subMenu6Elements" class="u-side-nav--third-level-menu">
						<!-- Text Inputs -->
						<li class="u-side-nav--third-level-menu-item">
							<a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="<?php echo base_url('backend/administrador/configuracion/catalogoproductos'); ?>">Productos</a>
						</li>
						<!-- End Text Inputs -->

						<!-- Textareas -->
						<li class="u-side-nav--third-level-menu-item">
							<a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="../forms/forms-elemets-textareas.html">Alcances</a>
						</li>
						<!-- End Textareas -->
					</ul>
					<!-- End Menu Leveles: Submenu-2 -->
				</li>
				<!-- End Elements -->

				<!-- Layouts -->
				<!--     <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
				<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!">
				<span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
				<i class="hs-admin-layout-media-overlay"></i>
				</span>
				<span class="media-body align-self-center">Layouts</span>
				</a>
				</li> -->
				<!-- End Layouts -->

				<!-- Validation -->
				<li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu7Validation">
						<span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
							<i class="hs-admin-list"></i>
						</span>
						<span class="media-body align-self-center">Validation</span>
						<span class="d-flex align-self-center u-side-nav--control-icon">
							<i class="hs-admin-angle-right"></i>
						</span>
					</a>

					<!-- Validation: Submneu -->
					<ul id="subMenu7Validation" class="u-side-nav--third-level-menu">
						<!-- States -->
						<li class="u-side-nav--third-level-menu-item">
							<a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="../forms/forms-validation-states.html">States</a>
						</li>
						<!-- End States -->
					</ul>
					<!-- Validation: Submneu -->
				</li>
				<!-- End Validation -->
			</ul>
			<!-- End Forms: Submenu-1 -->
		</li>
		<!-- Termina opción Configuración -->

		<!-- Salir -->
		<li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
			<a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="<?php echo base_url('CLogin/salir'); ?>">
				<span class="d-flex align-self-center g-font-size-18 g-mr-18">
					<i class="icon-logout"></i>
				</span>
				<span class="media-body align-self-center">Salir</span>
			</a>
		</li>
		<!-- End Salir -->

	</ul>
</div>
<!-- End Sidebar Nav -->

<!-- inicia DIV MAESTRO -->
<!-- fondo gris
	<div class="g-bg-lightblue-v10-opacity-0_5 g-ml-45 g-ml-0--lg g-pb-65--md">
-->
<!-- fondo blanco
	<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
-->
<div class="g-bg-lightblue-v10-opacity-0_5 col g-ml-45 g-ml-0--lg g-pb-65--md">