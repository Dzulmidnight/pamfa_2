<?  if (isset($consulta_srrc)) {?>

<table id="pro" name="pro" >
							<thead >
								<tr>
									<th >
										Producto
									</th>
								
								
									<th >
										País
									</th>	
									<th >
										Porcentaje
									</th>	
								</tr>
							</thead>
							
							<!-- información de la tabla -->
							<tbody><?								# code...
							
foreach($consulta_srrc as $fila)
					{
						//$id=$fila->id_producto_solicitud;?>
								<!-- inicia TR información cliente -->
								<tr >
									
									<td >
										
											<? echo $fila->producto_srrc;?>
										
									</td>
									<td >
										
											<? echo $fila->pais_srrc;?>
										
									</td>
									<td >
										
											<? echo $fila->porcentaje;?>
										
									</td>

									
									<td>
										<button class="btn u-btn-red g-mr-10 g-mb-15" type="button" onclick="<?php echo "quitar2(".$fila->id_producto_srrc.")"?>" >
													<i class="fa fa-minus" ></i> Eliminar<?php echo $fila->id_producto_srrc;?>
												</button>
									</td>
									
									
								</tr>
                              
								
									
                                  <? }}?>
							</tbody>
						</table>