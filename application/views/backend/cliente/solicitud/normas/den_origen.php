<script src="<?php echo base_url(); ?>selectMultiple/multiple-select.js"></script>

	    <script>
	        $('.selectMultiple').multipleSelect({
	        	placeholder: 'Selecciona la(s) opcion(es)',
	        	width: '100%',
	        	selectAll: false,
	        	allSelected: 'Se han seleccionado todos'
	        });
	    </script>
<form id="den_origen" name="den_origen">
												<div class="row">
													<div class="col-sm-12">
														<h4 class="nombreEsquema" style="font-size:14px;">
															<img src="<?php echo base_url(); ?>assets/img/esquemas_certificacion/esquema_denominacion_origen.jpg" alt="">
															DENOMINACIÓN DE ORIGEN
														</h4>
													</div>
													<div class="col-sm-12" style="margin-bottom:1em;">
														<b style="margin-bottom:1.5em;">
															Productos
														</b>

														<select class="selectMultiple" name="pliego_condiciones" id="pliego_condiciones" multiple>
															<option <?php if(strpos($consulta_den_origen->productos,'Chiapas')===true){?>selected="selected"<?php }?>value="Chiapas">Café Chiapas</option>
															<option <?php if(strpos($consulta_den_origen->productos,'Veracruz')===true){?>selected="selected"<?php }?>value="Veracruz">Café Veracruz</option>
															<option <?php if(strpos($consulta_den_origen->productos,'Charanda')===true){?>selected="selected"<?php }?>value="Charanda">Charanda</option>
															
															<option <?php if(strpos($consulta_den_origen->productos,'Ataulfo')===true){?>selected="selected"<?php }?>value="Ataulfo">Mango Ataulfo</option>
															
															
															<option <?php if(strpos($consulta_den_origen->productos,'Vainilla')===true){?>selected="selected"<?php }?>value="Vainilla">Vainilla de Papantla</option>
														</select>

													</div>

													<div class="col-sm-12" style="margin-top:1em;">
														<b>
															Descripción del producto que ostentará el logotipo y, en su caso la forma en que los insumos o partes mexicanas se utilizan en el proceso productivo.
														</b>
														<div class="form-group g-pos-rel mb-0">
															<span class="g-pos-abs g-top-0 g-right-0 d-block g-width-50 h-100">
																<i class="icon-pencil g-absolute-centered g-font-size-16 g-color-red"></i>
															</span>
															<textarea id="descripcion_den" name="descripcion_den" class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-resize-none g-overflow-hidden" rows="3" placeholder="Escribe aquí"><?php if (isset($consulta_den_origen)) {echo $consulta_den_origen->descripcion;}?></textarea>
														</div>
													</div>
													</form>
												<form id="upload_form" enctype="multipart/form-data" method="post"  >
													<div class="col-sm-12" style="margin-top:1em;">
														<b>Anexo</b>
														<p>
															Constancia expedida por órgano competente que acredite que el establecimiento donde se realiza la actividad del solicitante, se encuentra dentro del territorio señalado en la declaración correspondiente (original o copia certificada).
														</p>
														<input type="file" name="file1" id="file1" class="form-control">
														 <br>
														 <input type="button " class="btn btn-info" value="Enviar" onClick="uploadFile(1)" id="aux">
														<a id="aux2"  target="_blank"  class="btn btn-info" <?php if(isset($consulta_den_origen) && $consulta_den_origen->anexo!=NULL)
														{?> href="<?php echo base_url().$consulta_den_origen->anexo?>" style="display: block;" <? }?> style="display: none;">Ver actual</a>


															
															
                    										<progress class="form-control" id="progressBar" value="0" max="100"  style="width:300px;"></progress>
                    										<h3 id="status"></h3>
													</div>
												</div>
											</form>
											