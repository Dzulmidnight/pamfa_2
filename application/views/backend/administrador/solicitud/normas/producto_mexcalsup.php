<?  if (isset($consulta_productos)) {?>

<table id="pro" name="pro" >
							<thead >
								<tr>
									<th >
										Equipo
									</th>
								
								
									<th >
										Anexo1
									</th>	
									<th >
										Anexo2
									</th>	
								</tr>
							</thead>
							
							<!-- información de la tabla -->
							<tbody><?								# code...
							
foreach($consulta_productos as $fila)
					{
						//$id=$fila->id_producto_solicitud;?>
								<!-- inicia TR información cliente -->
								<tr >
									
									<td >
										
											<? echo $fila->equipo;?>
										
									</td>
									<td >
										
											<a id="aux2"  target="_blank"  class="btn btn-info" <?php if(isset($fila) && $fila->anexo1!=NULL)
														{?> href="<?php echo base_url().$fila->anexo1?>" style="display: block;" <? }?> style="display: none;">Ver </a>
										
									</td>
									<td >
										
											<a id="aux2"  target="_blank"  class="btn btn-info" <?php if(isset($fila) && $fila->anexo2!=NULL)
														{?> href="<?php echo base_url().$fila->anexo2?>" style="display: block;" <? }?> style="display: none;">Ver </a>
										
									</td>

									
									<td>
										<button class="btn u-btn-red g-mr-10 g-mb-15" type="button" onclick="quitar3(<?php echo '\''.$fila->id_mexcalsup_producto.'\',\''.$fila->anexo1.'\',\''.$fila->anexo2.'\'' ?> ) ;" >
													<i class="fa fa-minus" ></i> Eliminar<?php echo $fila->id_mexcalsup_producto;?>
												</button>
									</td>
									
									
								</tr>
                              
								
									
                                  <? }}?>
							</tbody>
						</table>