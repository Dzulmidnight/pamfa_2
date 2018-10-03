<table id="pro" name="pro" >
							<thead >
								<tr>
									<th >
										Producto
									</th>
								
								
									<th >
										Descripción
									</th>	
								</tr>
							</thead>
							
							<!-- información de la tabla -->
							<tbody><? if (isset($consulta_mex)) {
								# code...
							
foreach($consulta_mex as $fila)
					{
						//$id=$fila->id_producto_solicitud;?>
								<!-- inicia TR información cliente -->
								<tr >
									
									<td >
										
											<? echo $fila->mex_producto;?>
										
									</td>
									<td >
										
											<? echo $fila->descripcion;?>
										
									</td>

									
									<td>
										<button class="btn u-btn-red g-mr-10 g-mb-15" type="button" onclick="<?php echo "quitar(".$fila->id_hecho_mexico.")"?>" >
													<i class="fa fa-minus" ></i> Eliminar<?php echo $fila->id_hecho_mexico;?>
												</button>
									</td>
									
									
								</tr>
                              
								
									
                                  <? }}?>
							</tbody>
						</table>