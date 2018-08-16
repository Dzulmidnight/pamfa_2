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
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="<?php echo base_url('backend/cliente/usuario/perfiles'); ?>">
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
		<!-- App Views -->
		<li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
			<a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu4">
				<span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
					<i class="hs-admin-layers"></i>
				</span>
				<span class="media-body align-self-center">App Views</span>
				<span class="d-flex align-self-center u-side-nav--control-icon">
					<i class="hs-admin-angle-right"></i>
				</span>

				<span class="u-side-nav--has-sub-menu__indicator"></span>
			</a>

			<!-- App Views: Submenu-1 -->
			<ul id="subMenu4" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
				<!-- Profile Pages -->
				<li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu4Profiles">
						<span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
							<i class="fa fa-handshake-o"></i>
						</span>
						<span class="media-body align-self-center">Clientes</span>
						<span class="d-flex align-self-center u-side-nav--control-icon">
							<i class="hs-admin-angle-right"></i>
						</span>
					</a>

					<!-- Menu Leveles: Submenu-2 -->
					<ul id="subMenu4Profiles" class="u-side-nav--third-level-menu">
						<!-- Main -->
						<li class="u-side-nav--third-level-menu-item">
							<a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="../app-views/app-profile.html">Profile Information</a>
						</li>
						<!-- End Main -->

						<!-- Biography -->
						<li class="u-side-nav--third-level-menu-item">
							<a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="../app-views/app-profile-biography.html">Biography</a>
						</li>
						<!-- End Biography -->

						<!-- Interests -->
						<li class="u-side-nav--third-level-menu-item">
							<a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="../app-views/app-profile-interests.html">Interests</a>
						</li>
						<!-- End Interests -->

						<!-- Mobile -->
						<li class="u-side-nav--third-level-menu-item">
							<a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="../app-	views/app-profile-mobile.html">Mobile</a>
						</li>
						<!-- End Mobile -->

						<!-- Photos & Videos -->
						<li class="u-side-nav--third-level-menu-item">
							<a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="../app-views/app-profile-photos-and-videos.html">Photos &amp; Videos</a>
						</li>
						<!-- End Photos & Videos -->

						<!-- Payment Methods -->
						<li class="u-side-nav--third-level-menu-item">
							<a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="../app-views/app-profile-payment-methods.html">Payment Methods</a>
						</li>
						<!-- End Payment Methods -->

						<!-- Transactions -->
						<li class="u-side-nav--third-level-menu-item">
							<a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="../app-views/app-profile-transactions.html">Transactions</a>
						</li>
						<!-- End Transactions -->

						<!-- Security -->
						<li class="u-side-nav--third-level-menu-item">
							<a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="../app-views/app-profile-security.html">Security</a>
						</li>
						<!-- End Security -->

						<!-- Upgrade My Plan -->
						<li class="u-side-nav--third-level-menu-item">
							<a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="../app-views/app-profile-upgrade-plan.html">Upgrade My Plan</a>
						</li>
						<!-- End Upgrade My Plan -->

						<!-- Invited Friends -->
						<li class="u-side-nav--third-level-menu-item">
							<a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="../app-views/app-profile-invite.html">Invited Friends</a>
						</li>
						<!-- End Invited Friends -->

						<!-- Connected Accounts -->
						<li class="u-side-nav--third-level-menu-item">
							<a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="../app-views/app-profile-connected-accounts.html">Connected Accounts</a>
						</li>
						<!-- End Connected Accounts -->
					</ul>
					<!-- End Menu Leveles: Submenu-2 -->
				</li>
				<!-- End Profile Pages -->



				<!-- Chat -->
				<li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="../app-views/app-chat.html">
						<span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
							<i class="hs-admin-comments"></i>
						</span>
						<span class="media-body align-self-center">Chat</span>
					</a>
				</li>
				<!-- End Chat -->

				<!-- File Manager -->
				<li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="../app-views/app-file-manager.html">
						<span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
							<i class="hs-admin-folder"></i>
						</span>
						<span class="media-body align-self-center">File Manager</span>
						<span class="d-flex align-self-center">
							<span class="d-inline-block text-center g-min-width-35 g-bg-lightred-v2 g-font-size-12 g-color-white g-rounded-15 g-px-8 g-py-1">10</span>
						</span>
					</a>
				</li>
				<!-- End File Manager -->

				<!-- User Contacts -->
				<li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="../app-views/app-contacts.html">
						<span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
							<i class="hs-admin-id-badge"></i>
						</span>
						<span class="media-body align-self-center">User Contacts</span>
					</a>
				</li>
				<!-- End User Contacts -->
			</ul>
			<!-- End App Views: Submenu-1 -->
		</li>
		<!-- Termina opción clientes -->

		<!-- Inicia opción auditores -->
		<li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
			<a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu7">
				<span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
					<i class="hs-admin-pencil-alt"></i>
				</span>
				<span class="media-body align-self-center">Forms</span>
				<span class="d-flex align-self-center u-side-nav--control-icon">
					<i class="hs-admin-angle-right"></i>
				</span>

				<span class="u-side-nav--has-sub-menu__indicator"></span>
			</a>

			<!-- Forms: Submenu-1 -->
			<ul id="subMenu7" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
				<!-- Elements -->
				<li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu7Elements">
						<span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
							<i class="icon-graduation"></i>
						</span>
						<span class="media-body align-self-center">Auditores</span>
						<span class="d-flex align-self-center u-side-nav--control-icon">
							<i class="hs-admin-angle-right"></i>
						</span>
					</a>

					<!-- Menu Leveles: Submenu-2 -->
					<ul id="subMenu7Elements" class="u-side-nav--third-level-menu">


						<!-- Ratings -->
						<li class="u-side-nav--third-level-menu-item">
							<a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="../forms/forms-elemets-ratings.html">Ratings</a>
						</li>
						<!-- End Ratings -->

						<!-- Datepickers -->
						<li class="u-side-nav--third-level-menu-item">
							<a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="../forms/forms-elemets-datepickers.html">Datepickers</a>
						</li>
						<!-- End Datepickers -->

						<!-- Quantities -->
						<li class="u-side-nav--third-level-menu-item">
							<a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="../forms/forms-elemets-quantities.html">Quantities</a>
						</li>
						<!-- End Quantities -->
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
		<!-- Termina opción auditores -->


		<!-- Inicia opción clientes -->
		<li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
			<a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu8">
				<span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
					<i class="icon-communication-109 u-line-icon-pro"></i>
				</span>
				<span class="media-body align-self-center">Administradores</span>
				<span class="d-flex align-self-center u-side-nav--control-icon">
					<i class="hs-admin-angle-right"></i>
				</span>

				<span class="u-side-nav--has-sub-menu__indicator"></span>
			</a>

			<!-- Tables: Submenu-1 -->
			<ul id="subMenu8" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
				<!-- Basic Tables -->
				<li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="../tables/tables-basic.html">
						<span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
							<i class="hs-admin-layout-list-thumb"></i>
						</span>
						<span class="media-body align-self-center">Basic Tables</span>
					</a>
				</li>
				<!-- End Basic Tables -->

				<!-- Table Designs -->
				<li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
					<a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="../tables/tables-complex.html">
						<span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
							<i class="hs-admin-layout-media-overlay-alt-2"></i>
						</span>
						<span class="media-body align-self-center">Complex Tables</span>
					</a>
				</li>
				<!-- End Table Designs -->
			</ul>
			<!-- End Tables: Submenu-1 -->
		</li>
		<!-- Termina opción clientes -->





		<!-- Salir -->
		<li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
			<a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#">
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

