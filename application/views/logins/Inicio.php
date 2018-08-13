<!DOCTYPE html>
<html lang="esp">

<head>
<!-- Title -->
<title>Inicio sesión | PAMFA</title>

<!-- Required Meta Tags Always Come First -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<!-- CSS Global Compulsory -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/bootstrap.min.css">
<!-- CSS Global Icons -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/icon-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/icon-line/css/simple-line-icons.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/icon-etlinefont/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/icon-line-pro/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/icon-hs/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/slick-carousel/slick/slick.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/hs-megamenu/src/hs.megamenu.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/hamburgers/hamburgers.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/animate.css">

<!-- CSS Unify -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/unify-core.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/unify-components.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/unify-globals.css">

<!-- CSS Customization -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
</head>

<style>


</style>

<body>
	<main>
		<!-- Promo Block -->
		<section class="container-fluid g-px-0">
			<div class="row no-gutters">

				<div class="col-md-6 order-md-2 g-bg-white">
					<div class="g-pa-15x">
						<div class="g-mb-50">
							<div class="col-sm-12">
								<img style="width: 100%" src="<?php echo base_url(); ?>assets/img/logo/logo_pamfa.png" alt="">
							</div>
							
							<p class="lead g-color-green">Inicio de sesión para usuarios con una cuenta PAMFA.</p>
						</div>

						<div class="row"><!-- inicia row -->
							<div class="col-lg-12 g-order-1 g-order-2--lg g-mb-60">
								<form>
									<!-- Pricing -->
									<label class="u-check d-block g-mb-20 ">
										<input id="cliente" class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" name="radGroup1_1" type="radio" value="cliente" onclick="cambiarColor(this)" checked>

										<div class="media d-block d-md-flex u-shadow-v25 g-bg-primary--checked ">
											<div class="d-md-flex align-self-center g-pa-30">
												<div class="w-100">
													<h3 class="g-line-height-1 g-font-weight-700 g-font-size-36 g-color-primary g-color-white--checked mb-0">CLIENTE</h3>
												</div>
											</div>

									
										</div>
									</label>
									<!-- End Pricing -->

									<!-- Pricing -->
									<label class="u-check d-block g-mb-20">
										<input id="auditor" class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" name="radGroup1_1" type="radio" value="auditor" onclick="cambiarColor(this)">

										<div class="media d-block d-md-flex u-shadow-v25 g-bg-primary--checked">
											<div class="d-flex align-self-center g-pa-30">
												<div class="w-100">
													<h3 class="g-line-height-1 g-font-weight-700 g-font-size-36 g-color-primary g-color-white--checked mb-0">AUDITOR</h3>
												</div>
											</div>

									
										</div>
									</label>
									<!-- End Pricing -->

									<!-- Pricing -->
									<label class="u-check d-block">
										<input id="administrador" class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" name="radGroup1_1" type="radio" value="administrador" onclick="cambiarColor(this)">

										<div class="media d-block d-md-flex u-shadow-v25 g-bg-primary--checked">
											<div class="d-flex align-self-center g-pa-30">
												<div class="w-100">
													<h3 class="g-line-height-1 g-font-weight-700 g-font-size-36 g-color-primary g-color-white--checked mb-0">ADMINISTRADOR</h3>
												</div>
											</div>

										</div>
									</label>
									<!-- End Pricing -->
								</form>
							</div>
						</div><!-- termina row -->
					</div>
				</div>

				<div id="iniciarSesion" class="col-md-6 g-bg-blue">
					<div class="g-pa-50">
						<!-- Form -->
						<form class="g-py-15">
							<h2 id="tipoUsuario" class="h3 g-color-white mb-4">CLIENTE</h2>
							<div class="mb-4">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text g-width-45 g-brd-right-none g-brd-white g-color-white"><i class="icon-finance-067 u-line-icon-pro"></i></span>
									</div>
									<input class="form-control g-color-black g-brd-left-none g-brd-white g-bg-transparent g-color-white g-placeholder-white g-pl-0 g-pr-15 g-py-13" type="email" placeholder="Usuario">
								</div>
							</div>

							<div class="g-mb-40">
								<div class="input-group rounded">
									<div class="input-group-prepend">
										<span class="input-group-text g-width-45 g-brd-right-none g-brd-white g-color-white"><i class="icon-communication-062 u-line-icon-pro"></i></span>
									</div>
									<input class="form-control g-color-black g-brd-left-none g-brd-white g-bg-transparent g-color-white g-placeholder-white g-pl-0 g-pr-15 g-py-13" type="tel" placeholder="Contraseña">
								</div>
							</div>

							<div class="g-mb-60">
								<button class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13" type="button">Ingresar</button>
							</div>
							
							<div id="seccionRegistrarse">
								<div class="text-center g-pos-rel pb-2 g-mb-60">
									<div class="d-inline-block w-100 g-height-1 g-bg-white"></div>
									<span class="u-icon-v2 u-icon-size--lg g-brd-white g-color-white g-bg-teal g-font-size-default rounded-circle text-uppercase g-absolute-centered g-pa-24">Ó</span>
								</div>


								<button id="" class="btn btn-block u-btn-twitter rounded text-uppercase g-py-13" type="button">
									<i class="et-icon-profile-male"></i>
									¿Aún no tienes una cuenta? Regístrate
								</button>								
							</div>

						</form>
						<!-- End Form -->
					</div>
				</div>
			</div>

		</section>
		<!-- End Promo Block -->

		<!-- Call To Action -->
		<section class="g-bg-primary g-color-white g-pa-30" style="background-image: url(<?php echo base_url(); ?>assets/img/bg/pattern5.png);">
			<div class="d-md-flex justify-content-md-center text-center">
				<div class="align-self-md-center">
					<p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md">We offer best in class service for your needs</p>
				</div>
				<div class="align-self-md-center">
					<a class="btn btn-lg u-btn-white text-uppercase g-font-weight-600 g-font-size-12" target="_blank" href="https://wrapbootstrap.com/theme/unify-responsive-website-template-WB0412697?ref=htmlstream">Purchase Now</a>
				</div>
			</div>
		</section>
		<!-- End Call To Action -->



		<!-- Copyright Footer -->
		<footer class="g-bg-gray-dark-v1 g-color-white-opacity-0_8 g-py-20">
			<div class="container">
			<div class="row">
			<div class="col-md-8 text-center text-md-left g-mb-10 g-mb-0--md">
			<div class="d-lg-flex">
			<small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">2018 &copy; All Rights Reserved.</small>
			<ul class="u-list-inline">
			<li class="list-inline-item">
			<a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Privacy Policy</a>
			</li>
			<li class="list-inline-item">
			<span>|</span>
			</li>
			<li class="list-inline-item">
			<a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Terms of Use</a>
			</li>
			<li class="list-inline-item">
			<span>|</span>
			</li>
			<li class="list-inline-item">
			<a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">License</a>
			</li>
			<li class="list-inline-item">
			<span>|</span>
			</li>
			<li class="list-inline-item">
			<a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Support</a>
			</li>
			</ul>
			</div>
			</div>

			<div class="col-md-4 align-self-center">
			<ul class="list-inline text-center text-md-right mb-0">
			<li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Facebook">
			<a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
			<i class="fa fa-facebook"></i>
			</a>
			</li>
			<li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Skype">
			<a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
			<i class="fa fa-skype"></i>
			</a>
			</li>
			<li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Linkedin">
			<a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
			<i class="fa fa-linkedin"></i>
			</a>
			</li>
			<li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Pinterest">
			<a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
			<i class="fa fa-pinterest"></i>
			</a>
			</li>
			<li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Twitter">
			<a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
			<i class="fa fa-twitter"></i>
			</a>
			</li>
			<li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Dribbble">
			<a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
			<i class="fa fa-dribbble"></i>
			</a>
			</li>
			</ul>
			</div>
			</div>
			</div>
		</footer>
		<!-- End Copyright Footer -->

	</main>

	<script>
		function cambiarColor(valor){
			var valor = valor.value;
			var seccion = document.getElementById('iniciarSesion');
			var tipoUsuario = document.getElementById('tipoUsuario');
			var seccionRegistrarse = document.getElementById('seccionRegistrarse');
			var nombreClase = document.getElementById('iniciarSesion').classList.item(1);
			console.log(nombreClase);

			switch(valor){
				case 'cliente':
					seccion.classList.remove(nombreClase);
					seccion.classList.add('g-bg-blue');
					tipoUsuario.innerHTML = 'CLIENTE';
					seccionRegistrarse.style.display = 'block';
				break;
				case 'auditor':
					seccion.classList.remove(nombreClase);
					seccion.classList.add('g-bg-deeporange');
					tipoUsuario.innerHTML = 'AUDITOR';
					seccionRegistrarse.style.display = 'none';
				break;
				case 'administrador':
					seccion.classList.remove(nombreClase);
					seccion.classList.add('g-bg-bluegray');
					tipoUsuario.innerHTML = 'ADMINISTRADOR';
					seccionRegistrarse.style.display = 'none';
				break;
				default:
			}
		}	
	</script>


	<!-- JS Global Compulsory -->
	<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/bootstrap.min.js"></script>


	<!-- JS Implementing Plugins -->
	<script src="<?php echo base_url(); ?>assets/vendor/appear.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/masonry/dist/masonry.pkgd.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/slick-carousel/slick/slick.js"></script>

	<!-- JS Unify -->
	<script src="<?php echo base_url(); ?>assets/js/hs.core.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/components/hs.header.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/helpers/hs.hamburgers.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/helpers/hs.height-calc.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/components/hs.onscroll-animation.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/components/hs.carousel.js"></script>

	<!-- JS Plugins Init. -->

</body>

</html>