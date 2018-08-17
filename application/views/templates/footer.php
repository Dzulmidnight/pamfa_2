		<!-- Call To Action -->
		<section class="g-bg-gray-light-v5 g-pa-30">
			<div class="d-md-flex justify-content-md-center text-center">
				<div class="align-self-md-center">
					<p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md">¿Deseas conocer más sobre los servicios que ofrece PAMFA?</p>
				</div>
				<div class="align-self-md-center">
					<a class="btn btn-md u-btn-darkgray" href="http://www.pamfa.com.mx/">Saber más</a>
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
							<small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">2018 &copy; Todos los derechos reservados.</small>
							<ul class="u-list-inline">
								<li class="list-inline-item">
									<a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Politica de privacidad</a>
								</li>
								<li class="list-inline-item">
									<span>|</span>
								</li>
								<li class="list-inline-item">
									<a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Terminos de uso</a>
								</li>
								<li class="list-inline-item">
									<span>|</span>
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
					document.getElementById('inputOculto').value = 'cliente';
				break;
				case 'auditor':
					seccion.classList.remove(nombreClase);
					seccion.classList.add('g-bg-teal');
					tipoUsuario.innerHTML = 'AUDITOR';
					seccionRegistrarse.style.display = 'none';
					document.getElementById('inputOculto').value = 'auditor';
				break;
				case 'administrador':
					seccion.classList.remove(nombreClase);
					seccion.classList.add('g-bg-bluegray');
					tipoUsuario.innerHTML = 'ADMINISTRADOR';
					seccionRegistrarse.style.display = 'none';
					document.getElementById('inputOculto').value = 'administrador';
				break;
				default:

				break;
			}
		}
		function recuperarPassword(estado){
			var estado = estado;
			if(estado == 'recuperar'){
				document.getElementById('frmIngresar').style.display = 'none';
				document.getElementById('recuperarPassword').style.display = 'block';
			}else if(estado == 'cancelar'){
				document.getElementById('frmIngresar').style.display = 'block';
				document.getElementById('recuperarPassword').style.display = 'none';
			}else{
				document.getElementById('recuperarPassword').style.display = 'none';
			}

		}
		function mostrarFrmRegistro(estado){
			var estado = estado;
			console.log(estado);
			switch(estado){
				case 'mostrar':
					document.getElementById('frmNuevoRegistro').style.display = 'block';
					document.getElementById('recuperarPassword').style.display = 'none';
					document.getElementById('frmIngresar').style.display = 'none';
				break;
				case 'ocultar': 
					document.getElementById('frmNuevoRegistro').style.display = 'none';
					document.getElementById('frmNuevoRegistro').reset();
					document.getElementById('recuperarPassword').style.display = 'none';
					document.getElementById('frmIngresar').style.display = 'block';
				break;
			}

		}
		function mostrarPassword(id){
			var id = id;
			var tipo = document.getElementById(id).type;

			switch(tipo){
				case 'password':
					document.getElementById(id).type = 'text';
					tipo.type = 'text';
				break;
				case 'text':
					document.getElementById(id).type = 'password';
					tipo.type = 'password';
				break;

			}
		}
//ernest maya
		function validarInformacion(id){
			var id = id;
			var formulario = document.forms[id];
			var numElementos = formulario.elements.length;
			//console.log(formulario);
			//console.log(numElementos);

			for(var i = 0; i < numElementos; i++){
				//console.log(formulario[i].required);
				if(formulario[i].required){
					if(formulario[i].type == 'select-one'){
						indice = document.getElementById(formulario[i].id).selectedIndex;
						if( indice == null || indice == 0 ) {
							document.getElementById(formulario[i].id).focus();
						}
					}else{
						if(!formulario[i].value){
							document.getElementById(formulario[i].id).focus();
							//console.log('falta este: '+formulario[i].id);
							//console.log('tipo: '+formulario[i].type);
						}
					}
					//console.log(formulario[i].id);
					//console.log(formulario[i].value);
				}
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