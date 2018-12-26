
				</div>
				<!-- End DIV MAESTRO -->
			</div>
			<!-- End DIV ROW NO-GUTTERS -->
		</main>
		<!-- End MAIN -->

		<!-- JS Propios -->
		<script src="<?php echo base_url(); ?>assets/js/propias/funciones.js"></script>

		<!-- JS Global Compulsory -->
		<script src="<?php echo base_url(); ?>admin/assets/vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>admin/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>

		<script src="<?php echo base_url(); ?>assets/vendor/popper.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/bootstrap.min.js"></script>

		<script src="<?php echo base_url(); ?>assets/vendor/cookiejs/jquery.cookie.js"></script>
		<!-- JS Plugins Init. -->
		<script src="<?php echo base_url(); ?>assets/vendor/appear.js"></script>
		<script src="<?php echo base_url(); ?>admin/assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
		<script src="<?php echo base_url(); ?>admin/assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>admin/assets/vendor/datatables/media/js/dataTables.select.js"></script>


		<!-- JS Unify -->
		<script src="<?php echo base_url(); ?>assets/js/hs.core.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/components/hs.header.js"></script>
		<script  src="<?php echo base_url(); ?>assets/js/components/hs.carousel.js"></script>
		<script  src="<?php echo base_url(); ?>assets/js/components/hs.tabs.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/components/hs.counter.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/components/hs.progress-bar.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/components/hs.rating.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/components/hs.scrollbar.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/components/hs.go-to.js"></script>
  		<script src="<?php echo base_url(); ?>admin/assets/js/components/hs.range-datepicker.js"></script>
  		<script src="<?php echo base_url(); ?>admin/assets/js/components/hs.datepicker.js"></script>
		<!-- JS Unify -->
		<script src="<?php echo base_url(); ?>admin/assets/js/components/hs.side-nav.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/helpers/hs.hamburgers.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/components/hs.dropdown.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/helpers/hs.focus-state.js"></script>
		<script  src="<?php echo base_url(); ?>assets/js/components/hs.chart.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/components/hs.chart-pie.js"></script>
		<script src="<?php echo base_url(); ?>admin/assets/js/components/hs.datatables.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/components/hs.step-form.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/components/hs.validation.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/components/hs.go-to.js"></script>

		<!-- JS Implementing Plugins -->
		<script  src="<?php echo base_url(); ?>assets/vendor/jquery.peity.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/circles/circles.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
		<script  src="<?php echo base_url(); ?>assets/vendor/slick-carousel/slick/slick.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
		<!-- JS Custom -->
		<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
		<script  src="<?php echo base_url(); ?>admin/assets/vendor/custombox/custombox.min.js"></script>
		<script  src="<?php echo base_url(); ?>admin/assets/js/components/hs.modal-window.js"></script>

<?/*solicitud admin*/?>
  <script src="<?php echo base_url(); ?>admin/assets/vendor/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
<script src="<?php echo base_url(); ?>selectMultiple/multiple-select.js"></script>

	    <script>
	        $('.selectMultiple').multipleSelect({
	        	placeholder: 'Selecciona la(s) opcion(es)',
	        	width: '100%',
	        	selectAll: false,
	        	allSelected: 'Se han seleccionado todos'
	        });
	    </script>

		  <!-- JS Plugins Init. -->
		  <script>
		    $(document).on('ready', function () {
		        // initialization of go to
		        $.HSCore.components.HSGoTo.init('.js-go-to');

				// initialization of custom select
				$('.js-select').selectpicker();

				// initialization of range datepicker
				$.HSCore.components.HSRangeDatepicker.init('#rangeDatepicker, #rangeDatepicker2, #rangeDatepicker3');

				// initialization of datepicker
				$.HSCore.components.HSDatepicker.init('#datepicker', {
					dayNamesMin: [
						'DO',
						'LU',
						'MA',
						'MI',
						'JU',
						'VI',
						'SA'
					]
				});

				// initialization of sidebar navigation component
				$.HSCore.components.HSSideNav.init('.js-side-nav');

				// initialization of hamburger
				$.HSCore.helpers.HSHamburgers.init('.hamburger');

				// initialization of chart pies
				var items = $.HSCore.components.HSChartPie.init('.js-pie');

				// initialization of peity charts
				$.HSCore.components.HSChart.peity.init($('.js-peity-chart'));

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

		        // initialization of counters
		        var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');


				$('.js-select').on('shown.bs.select', function (e) {
					$(this).addClass('opened');
				});

				$('.js-select').on('hidden.bs.select', function (e) {
					$(this).removeClass('opened');
				});

				$.HSCore.components.HSStepForm.init('.js-step-form');

				// initialization of range datepicker
				/*$.HSCore.components.HSRangeDatepicker.init('.js-range-datepicker');
				// initialization of HSScrollBar component
					$.HSCore.components.HSScrollBar.init( $('.js-scrollbar') );

				});*/
			});

			$(window).on('load', function () {
				// initialization of header
				$.HSCore.components.HSHeader.init($('#js-header'));
				$.HSCore.helpers.HSHamburgers.init('.hamburger');

				// initialization of HSMegaMenu component
				$('.js-mega-menu').HSMegaMenu({
					event: 'hover',
					pageContainer: $('.container'),
					breakpoint: 991
				});

				// initialization of horizontal progress bars
				setTimeout(function () { // important in this case
					var horizontalProgressBars = $.HSCore.components.HSProgressBar.init('.js-hr-progress-bar', {
						direction: 'horizontal',
						indicatorSelector: '.js-hr-progress-bar-indicator'
					});
				}, 1);
			});

			$(window).on('resize', function () {
				setTimeout(function () {
					$.HSCore.components.HSTabs.init('[role="tablist"]');
				}, 200);
			});

		</script>
		<!-- declaramos las graficas -->
		<script>
		//var grafica = document.getElementById("canvasGrafica");

		var data = {
			labels: ["IFA", "CoC", "Calidad Suprema", "SRRC", "Hecho en Mex", "Denominación"],
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

		};

		var options = {
			responsive: true,
			maintainAspectRatio: false,
		  	scales: {
			    yAxes: [{
					stacked: true,
					gridLines: {
						display: true,
						color: "rgba(255,99,132,0.2)"
					}
			    }],
				xAxes: [{
					gridLines: {
						display: false
					}
				}]
			}
		};

		Chart.Bar('canvasGrafica', {
			type: 'horizontalBar',
			options: options,
			data: data
		});

		</script>
		<style>
			.flotante {
				z-index: 1;
				display:scroll;
				position:fixed;
				bottom:320px;
				right:0px;
			}
		</style>

		
									<script>  
								
			function addObservacion(seccion,d,id){
				

				console.log('SECCIÓN: '+seccion+' ID: '+id+"dfkgo");
				
				

				$('#modal1').modal('show');
				
								
								
			}
			
</script>
<script>  
								
			function addObservacion2(seccion,d,idnorma,norma,id){
				
				console.log('SECCIÓN: '+seccion+' ID: '+id);
				
				document.getElementById('seccion_observacion').value = seccion;
				document.getElementById('id_pregunta_observacion').value = id;
				//document.getElementById('spanSeccion').innerHTML = seccion;
				
				document.getElementById('idnorma').value = idnorma;
				//document.getElementById('spanSeccion').innerHTML = seccion;
				document.getElementById("sp").innerHTML = d;
				document.getElementById("norma").innerHTML = "Norma: "+norma;
				$('#modal1').modal('show');
				
								
								
			}
			
</script>









	</body>

</html>
