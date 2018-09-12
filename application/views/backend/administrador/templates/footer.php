					</div>
					
					<!-- Footer -->
					<footer id="footer" class="u-footer--bottom-sticky g-bg-white g-color-gray-dark-v6 g-brd-top g-brd-gray-light-v7 g-pa-20">
						<div class="row align-items-center">
							<!-- Footer Nav -->
							<div class="col-md-4 g-mb-10 g-mb-0--md">
								<ul class="list-inline text-center text-md-left mb-0">
									<li class="list-inline-item">
										<a class="g-color-gray-dark-v6 g-color-lightblue-v3--hover" href="#!">FAQ</a>
									</li>
									<li class="list-inline-item">
										<span class="g-color-gray-dark-v6">|</span>
									</li>
									<li class="list-inline-item">
										<a class="g-color-gray-dark-v6 g-color-lightblue-v3--hover" href="#!">Soporte</a>
									</li>
									<li class="list-inline-item">
										<span class="g-color-gray-dark-v6">|</span>
									</li>
									<li class="list-inline-item">
										<a class="g-color-gray-dark-v6 g-color-lightblue-v3--hover" href="#!">Contactanos</a>
									</li>
								</ul>
							</div>
							<!-- End Footer Nav -->

							<!-- Footer Socials -->
							<div class="col-md-4 g-mb-10 g-mb-0--md">
								<ul class="list-inline g-font-size-16 text-center mb-0">
									<li class="list-inline-item g-mx-10">
										<a href="#!" class="g-color-facebook g-color-lightblue-v3--hover">
											<i class="fa fa-facebook-square"></i>
										</a>
									</li>
									<li class="list-inline-item g-mx-10">
										<a href="#!" class="g-color-slype g-color-lightblue-v3--hover">
											<i class="fa fa-skype"></i>
										</a>
									</li>
								</ul>
							</div>
							<!-- End Footer Socials -->

							<!-- Footer Copyrights -->
							<div class="col-md-4 text-center text-md-right">
								<small class="d-block g-font-size-default">&copy; 2018 PAMFA. Todos los derechos reservados.</small>
							</div>
							<!-- End Footer Copyrights -->
						</div>
					</footer>
				<!-- End Footer -->
				</div>
			</div>
		</main>



  <!-- JS Global Compulsory -->
  <script src="<?php echo base_url(); ?>admin/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>admin/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/vendor/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/bootstrap.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/vendor/cookiejs/jquery.cookie.js"></script>
  <!-- JS Plugins Init. -->
  <script src="<?php echo base_url(); ?>assets/vendor/appear.js"></script>
  <script src="<?php echo base_url(); ?>admin/assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="<?php echo base_url(); ?>admin/assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>admin/assets/vendor/datatables/media/js/dataTables.select.js"></script>

  <!-- JS Unify -->
  <script src="<?php echo base_url(); ?>assets/js/hs.core.js"></script>
  <script src="<?php echo base_url(); ?>admin/assets/js/components/hs.side-nav.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/helpers/hs.hamburgers.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/components/hs.dropdown.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/components/hs.scrollbar.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/helpers/hs.focus-state.js"></script>
  <script src="<?php echo base_url(); ?>admin/assets/js/components/hs.datatables.js"></script>

<!-- JS Implementing Plugins -->
<script  src="<?php echo base_url(); ?>assets/vendor/slick-carousel/slick/slick.js"></script>

<!-- JS Unify -->
<script  src="<?php echo base_url(); ?>assets/js/components/hs.carousel.js"></script>

  <!-- JS Custom -->
  <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
   <script  src="<?php echo base_url(); ?>assets/js/components/hs.modal-window.js"></script>




<script>
	/*$(document).ready(function(){
	  $('#ultimosPendientes').slick({
	  	arrows: false,
	  	dots: false,
	  	autoplay: true
	  });
	});*/
</script>


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

		// initialization of datatables
		$.HSCore.components.HSDatatables.init('.js-datatable');

		$.HSCore.components.HSModalWindow.init('[data-modal-target]');

    	// initialization of carousel
    	$.HSCore.components.HSCarousel.init('.js-carousel');

        $('.js-carousel').mouseover(function(){
        	$('.js-carousel').slick('slickPause');
        });

        $('.js-carousel').mouseleave(function(){
        	$('.js-carousel').slick('slickPlay');
        });

    });
  </script>

<!-- declaramos las graficas -->
<script>
var grafiva = document.getElementById("canvasGrafica");

    var myChart = new Chart(grafiva, {
        type: 'bar',
        data: {
            labels: ["IFA", "CoC", "Calidad Suprema", "SRRC", "Hecho en Mex", "Denominación de origen"],
            datasets: [{
                label: '# de Solicitudes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

	</body>

</html>