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
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="<?php echo base_url('backend/auditor/main'); ?>">
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

		<!-- Layouts Settings -->
		<li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item u-side-nav-opened has-active">
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
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="<?php echo base_url('backend/auditor/usuario/perfiles'); ?>">
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
		<!-- End Layouts Settings -->

		<!-- Salir -->
		<li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
			<a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="<?php echo base_url('CLogin/salir'); ?>">
				<span class="d-flex align-self-center g-font-size-18 g-mr-18">
					<i class="icon-logout"></i>
				</span>
               
				<span class="media-body align-self-center" >Salir</span>
             
                
			</a>
		</li>
		<!-- End Salir -->

	</ul>
</div>
<!-- End Sidebar Nav -->

