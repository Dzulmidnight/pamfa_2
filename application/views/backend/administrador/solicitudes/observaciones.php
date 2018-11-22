<!-- Modal Observaciones -->

	


<div class="modal fade" data-backdrop="static" data-keyboard="false"  id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Observaciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<div class="row">
					<!-- Area de observaciones. -->
					<div class="col-lg-12">
						<!-- Chat. Message Area. Messages. -->
						<div class="js-custom-scroll g-height-50vh--lg g-pa-15 g-pa-25--lg" >

							<div id="obs_total" name="obs_total">
								
								
							
								
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
							</div>

						</div>
						<!-- End Chat. Message Area. Messages. -->

		
							
						<footer class="g-bg-gray-light-v8 g-px-15 g-px-30--lg g-py-10 g-py-25--lg">
							
							<?php if ($this->uri->segment(4)=="solicitudes") {
	# code...
?>	
							<p>Sección: <span id="sp"></span></p>
							<p> <span id="norma"></span></p>

							


				
								
							<form action="#!" name="obser" id="obser">
								<div class="media align-items-top">
									<div class="d-flex">
										<label class="u-file-attach-v2 g-line-height-1 g-color-gray-dark-v6 mb-0">
											<input id="fileAttachment" name="file-attachment" type="file">
											<i class="hs-admin-clip g-font-size-18"></i>
										</label>
									</div>

									<div class="media-body g-ml-25">
										<textarea id="descripcion_observacion" name="descripcion_observacion"  class="form-control u-textarea-expandable g-resize-none g-bg-transparent g-brd-none w-100 p-0 g-mt-minus-3" placeholder="Escribe tu observación"></textarea>
									</div>

									<div class="d-flex ml-auto">
										<button type="button" onclick="guardar_ob()" class="btn btn-link d-flex align-self-top align-items-top u-link-v5 g-color-lightblue-v3 g-color-lightblue-v4--hover p-0 g-ml-15" >
											<i class="hs-admin-arrow-top-right g-font-size-18 g-line-height-1_4"></i>
											<span class="g-hidden-sm-down g-font-weight-300 g-font-size-12 g-font-size-default--md g-ml-4 g-ml-8--md" >Agregar</span>
										</button>
									</div>
								</div>
								<!-- Sección y pregunta de la observación -->
								<input type="hidden" class="form-control" id="seccion_observacion" name="seccion_observacion" value="">

								<input type="hidden" class="form-control" id="idnorma" name="idnorma" value="">
								<input type="text" readonly=""  class="form-control" id="id_pregunta_observacion" name="id_pregunta_observacion" value="">
							</form>
							<? }?>
						</footer>
					
					</div>
					<!-- End Area de observaciones. -->
				</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!--<button type="button" class="btn btn-primary">Guardar cambios</button>-->
      </div>
    </div>
  </div>
</div>

<?php if ($this->uri->segment(4)=="solicitudespendientes") {
	# code...
?>
		<!-- JS Global Compulsory -->
		<script src="<?php echo base_url(); ?>admin/assets/vendor/jquery/jquery.min.js"></script>
		
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/bootstrap.min.js"></script>

		

		<!-- JS Unify -->
		<script src="<?php echo base_url(); ?>assets/js/hs.core.js"></script>
		
		<script src="<?php echo base_url(); ?>assets/js/components/hs.scrollbar.js"></script>
		
  		
		<!-- JS Unify -->
		
		
		<script src="<?php echo base_url(); ?>assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
		<?php }?>
<!-- End Modal Observaciones -->
<script type="text/javascript">
	var base_url="<? echo base_url();?>";
	var idsolicitud="<? echo $ids;?>";
	//var norma="<? $norma;?>";


</script>
<script type="text/javascript">
function guardar_ob(){



	var dataString = $('#obser').serialize();
	//var activo = document.activeElement.producto;


   // if(dataString.length>9){

 $.ajax({
                     url:base_url+"backend/administrador/solicitud/cObservacion/guardar/"+idsolicitud,

                     method:"POST",
                    data:dataString,
		            	success: function(data) {

		            		
		            		document.getElementById("descripcion_observacion").value = "";
		            			
		            	$("#obs_total").load(base_url+'backend/administrador/solicitud/cObservacion/tabla/'+idsolicitud+'');	                      
		            	 }
		});



//}




}
</script>

<script type="text/javascript">
function quitar_ob(x){

var idobs=x;



 $.ajax({
                     url:base_url+"backend/administrador/solicitud/cObservacion/eliminar",

                     method:"POST",
                    data:{idobs:idobs},
		            	success: function(data) {

		            		$("#obs_total").load(base_url+'backend/administrador/solicitud/cObservacion/tabla/'+idsolicitud+'');


		            	}
		});



}
</script>

<script type="text/javascript">
function actualiza_ob(x){

var idobs=x;



 $.ajax({
                     url:base_url+"backend/administrador/solicitud/cObservacion/actualizar",

                     method:"POST",
                    data:{idobs:idobs},
		            	success: function(data) {
		            		

		            		$("#obs_total").load(base_url+'backend/administrador/solicitud/cObservacion/tabla/'+idsolicitud+'');
		            		$("#ob").html(data);

		            		$(".modal-backdrop").remove();


		            	}
		});



}
</script>
<script type="text/javascript">
$.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
					dropdownHideOnScroll: false,
					dropdownType: 'css-animation',
					dropdownAnimationIn: 'fadeIn',
					dropdownAnimationOut: 'fadeOut'
				});

				// initialization of custom scrollbar
				$.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));
				</script>

