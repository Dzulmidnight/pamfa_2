<!-- MODAL COMPROBANTE PAGO -->
<div class="modal fade"  id="modal-pago" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<h3 class="modal-title" id="exampleModalLabel">Verificación de pago</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div class="row">
                <div class="col-lg-6 "><?php
                     foreach($consulta_sol_id as $fila){?>
                	 <p class="h4">Cliente</p>
                     <p class="h2"><?php echo $fila->nombreLegal;?></p>
                                                            <address>
                                                                <?php echo $fila->direccion.",".$fila->colonia.",".$fila->municipio;?><br>
                                                                <?php echo $fila->estado."," .$fila->nombre;?><br>
                                                                <?php echo $fila->cp;?><br>
                                                                <i class="icon-phone"></i> <?php echo $fila->telefono;?>
                                                            </address><?php }?>
                </div>
	            <!-- END Info cliente -->

                <!-- Esquemas de certificación -->
                <div class="col-lg-6">
                    <p class="h4">Cotización</p>
                    <p class="h5">
                    	Emisión: <span class="g-color-red"><?= date('d/m/Y', $consulta_pago->fecha) ?></span>
                    </p><? $s=0;
                     foreach($consulta_cotizacion as $filax)
                                                { $s=$s+($filax->costo*$filax->cantidad);
                                                                
                                                                
                                                                $iva=$s*0.16;
                                                                $t=$s+$iva;
                                                            }?>
                    <p class="h5" id="tot_p" name="tot_p">
                    	Total: <span class="g-color-blue"><?php echo "$ ".$t;?></span>
                    </p>
                	<hr class="g-pb-0 g-mb-0">
                	  <p class="h4">Esquemas</p>
                	  <p>
                        <?php
                	  	foreach($consulta_sol_id as $fila){



                                             if ($fila->global_ifa!=null) {
                                                    ?><strong>[ IFA ] </strong> <?
                                                }?>
                                                <?php if ($fila->global_coc!=null) {
                                                    ?>
                                                <strong>[ Coc ] </strong> 
                                                <?
                                                }?>
                                                <?php if ($fila->srrc!=null) {
                                                    ?>
                                                <strong>[ SRRC ] </strong>
                                                <?
                                                }?>
                                                <?php if ($fila->mcs!=null) {
                                                    ?>
                                                <strong>[ Méx. Calidad Sup. ] </strong>
                                                <?
                                                }?>
                                                <?php if ($fila->hecho_mexico!=null) {
                                                    ?>
                                                <strong>[ Hecho en Mex. ] </strong>
                                                <?
                                                }?>
                                                <?php if ($fila->den_origen!=null) {
                                                    ?>
                                                <strong>[ Denominación de Origen ] </strong>
                                                <?
                                                }
                                            }?>
                	  </p>
                </div>
	            <!-- END Esquemas de certificación -->

                <!-- Resumen cotización -->
                <div class="col-lg-12">
                    <?php if($consulta_pago->url_pago==NULL){?>
                    
                    <p class="g-pa-10" id="no_d" name="no_d"   style="background: #e74c3c; color:white;display: block;"  >
                                                    <i class="hs-admin-close"></i> No disponible
                                                </p>
                <?php }
                 if( $consulta_pago->estatus=="espera"){?>

                <p  class="g-pa-10" id="espera" name="espera" style="background: #e67e22; color:white;display: block;">
                        <i class="icon-exclamation"></i> En espera
                    </p>
                <?php }
                if( $consulta_pago->estatus=="rechazo"){?>

                <p  class="g-pa-10" id="rechazo" name="rechazo" style="background: red; color:white;display: block;">
                        <i class="icon-exclamation"></i> Rechazado
                    </p>
                <?php }
                if( $consulta_pago->estatus=="aprobada"){?>

                <p  class="g-pa-10" id="aprobada" name="aprobada" style="background: blue; color:white;display: block;">
                        <i class="icon-exclamation"></i> Aprobado
                    </p>
                <?php }?>


                </div>
            	<div class="col-sm-12">
            		<p class="h4">
            			Cargar comprobante
            		</p>
            		<div class="col-sm-12"><?php if($consulta_pago->url_pago==NULL){?>
                                            <input type="file" name="file1" id="file1" class="form-control">
                                            <input type="button" class="btn btn-info" value="Enviar" onClick="uploadFile(1)" id="aux">







                                                            <progress class="form-control" id="progressBar" value="0" max="100"  style="width:300px;"></progress>
                                                            <h3 id="status"></h3>
                                                            <?php $fechado=time();?>

                                                        <input id="fecha_do" name="fecha_do" type="hidden" value="<? echo $fechado;?>"/>
                                                    <?php } else {?><p class="h4">
                        Enviado
                    </p><?php }?>

                                                        </div>

		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!--<button type="button" class="btn btn-primary">Guardar cambios</button>-->
      </div>
    </div>
  </div>
</div>
<!-- END MODA COMPROBANTE PAGO -->
<script type="text/javascript">
    var base_url="<? echo base_url();?>";
    var idsolicitud="<? echo $ids;?>";
    //var norma="<? $norma;?>";


</script>
<script >


    <? echo '
  var valorname;
function _(el){
  return document.getElementById(el);
}
function uploadFile(al){
  var file = _("file1").files[0];
  //alert(file.name+" | "+file.size+" | "+file.type);
  //var b=11;
  var formdata = new FormData();
  formdata.append("file1", file);
  //formdata.append("a", al);
  //formdata.append("nombre",valorname);
   formdata.append("fecha",$("#fecha_do").val());


  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler, false);
  ajax.addEventListener("load", completeHandler, false);
  ajax.addEventListener("error", errorHandler, false);
  ajax.addEventListener("abort", abortHandler, false);
  ajax.open("POST", base_url+"backend/administrador/cotizaciones/cPago/subir_archivo/"+idsolicitud+"");

  ajax.send(formdata);

}
function progressHandler(event){

  //_("loaded_n_total").innerHTML = "Uploaded "+(event.loaded/1024)+" Kb of "+ event.total;
  if(event.loaded==event.total){
  //_("loaded_n_total").innerHTML = "Subiendo "+(event.loaded/1024)+" Kb ";
//
  }
  var percent = (event.loaded / event.total) * 100;
  _("progressBar").value = Math.round(percent);
  _("status").innerHTML ="Cargando "+ Math.round(percent)+"% ... Espere";


}
function completeHandler(event){
  _("status").innerHTML = event.target.responseText;
  _("progressBar").value = 0;

document.getElementById("espera").style.display = "block";
   document.getElementById("no_d").style.display = "none";
   document.getElementById("desc").style.display = "block";
   document.getElementById("desc").style.width = "100%";

   
   
    
    document.getElementById("desc").href =base_url+"pago_cotizacion/"+document.getElementById("fecha_do").value+document.getElementById("file1").files[0].name;

  
}
function errorHandler(event){
  _("status").innerHTML = "Falla en Envio";
}
function abortHandler(event){
  _("status").innerHTML = "Envio Abortado";
}';?>
</script>