<div class="g-pa-20">
		<div class="row g-mb-0">
			<div class="col-md-12">
				<button class="btn u-btn-bluegray" onclick="history.back(-1)">
					<i class="glyph-icon icon-arrow-left"></i> Regresar
				</button>
			</div>
			<div class="col-md-12 g-mb-0 g-mn-0--md">
				<div class="card border-0 rounded-0 g-mb-50">
					<!-- Panel Header -->
					<!-- Panel Header -->
					<div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
						<div class="row">
							<div class="col-md-12">
								<h3 class="h6 mb-0">
									<i class="icon-layers g-pos-rel g-top-1 g-mr-5"></i> Formato cotización
								</h3>
							</div>

						</div>

						<div class="dropdown g-mb-10 g-mb-0--md">
							<a href="#" class="btn u-btn-bluegray g-mr-10">
								<i class="hs-admin-printer"></i> Imprimir
							</a>
							<a href="#" class="btn u-btn-bluegray">
								<i class="hs-admin-download"></i> Descargar
							</a>
							<!--<span class="d-block g-color-primary--hover g-cursor-pointer g-mr-minus-5 g-pa-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-options-vertical g-pos-rel g-top-1"></i>
							</span>
							<div class="dropdown-menu dropdown-menu-right rounded-0 g-mt-10">
								<a class="dropdown-item g-px-10" href="#!">
									<i class="fa fa-line-chart g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Estadisticas
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item g-px-10" href="#!">
									<i class="fa fa-file-pdf-o g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> PDF
								</a>
								<a class="dropdown-item g-px-10" href="#!">
									<i class="fa fa-file-excel-o g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Excel
								</a>
							</div>-->
						</div>
					</div>
					<!-- End Panel Header -->
					<!-- End Panel Header -->
					<!-- Panel Body -->
					<div class="card-block u-info-v1-1 g-bg-white-gradient-v1--after g-pa-20">
						<div>
	            			<!-- Info cotización -->
	            			<div class="h1 text-left">Cotización <span class="g-color-green">#CTZ19</span> </div>
	            			<hr>
							<div class="row">
				                <!-- Info empresa -->
				                <div class="col-lg-4 text-left">
				                    <p class="h2">PAMFA A.C.</p>
				                    <address>
				                        Calle José Zamora N°48, Col. Emiliano Zapata,<br>
				                        Uruapan, Mich<br>
				                        CP: 60180 <br>
				                        <i class="icon-phone"></i> (452) 50 20 849 / 452 5251-772
				                    </address>
				                </div>
				                <!-- END Info empresa -->

				                <!-- Info cliente -->
				                <div class="col-lg-4 text-right">
				                    <p class="h2">Cliente</p>
				                    <address>
				                        Dirección<br>
				                        Ciudad<br>
				                        Codigo postal<br>
				                        <i class="icon-phone"></i> (000) 000-0000
				                    </address>
				                </div>
					                <!-- END Info cliente -->
									<!-- Total cotización -->
									<div class="h1 col-lg-4 text-right g-color-blue">
										<p class="text-muted h5">
											Total
										</p>
										$41,520.00
									</div>
									<!-- End Total cotización -->
					        </div>
	            			<!-- END Info cotización -->
							<hr>
							<div class="col-lg-12 g-mb-20">
								<b>
									El siguiente presupuesto tiene una vigencia de 30 días naturales posteriores a la fecha de emisión.
								</b>
							</div>
	            			<!-- Table -->
				            <div class="">
								<button type="button" class="btn u-btn-primary" name="button" onclick="addCargo()">
									<i class="hs-admin-plus"></i> Agregar cargo
								</button>
				                <table id="tablaCotizacion" class="table table-bordered table-hover">
				                    <thead>
				                        <tr>
				                            <th class="text-center" style="width: 50px;">#</th>
				                            <th>Concepto(esquema)</th>
				                            <th class="text-right" style="width: 120px;">Costo Unitario</th>
																		<th class="text-center" style="width: 100px;">Cantidad</th>
				                            <th class="text-right" style="width: 120px;">Total</th>
				                        </tr>
				                    </thead>
				                    <tbody>
										<?php
										for ($i=1; $i <= 3; $i++) {
										?>
											<tr>
												<td class="text-center">
													<button type="button" class="btn u-btn-primary" name="button">
														<i class="hs-admin-pencil"></i> <?= $i ?>
													</button>
												</td>
												<td>
													<p class="font-w600 push-10">Global GAP</p>
													<div class="text-muted">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
													</div>
												</td>
												<td class="text-right">$ 25.000,00</td>
												<td class="text-center">
													<span class="u-label g-rounded-20 g-px-15 g-bg-primary g-mr-10 g-mb-15">1</span>
												</td>
												<td class="text-right">$ 25.000,00</td>
											</tr>
										<?php
										}
										?>

										<tr>
											<td colspan="4" class="font-w600 text-right">Subtotal</td>
											<td class="text-right">$ 27.500,00</td>
										</tr>
										<tr>
											<td colspan="4" class="font-w600 text-right">I.V.A</td>
											<td class="text-right">16%</td>
										</tr>
										<tr class="active">
											<td colspan="4" class="font-w700 text-uppercase text-right">Total</td>
											<td class="font-w700 text-right">$ 33.000,00</td>
										</tr>
				                    </tbody>
				                </table>
				            </div>
				            <!-- END Table -->
							<hr>
							<b class="text-muted">Especificaciones</b>
							<ul class="text-muted text-justify">
								<li>
									La cotización incluye auditoria anunciada y no anunciada en caso que así lo requiera el esquema de certificación.
								</li>
								<li>
									Para orgánico incluye revisión de plan orgánico.
								</li>
								<li>
									No incluye viáticos de auditor.
								</li>
								<li>
									En caso de requerir factura se agregara el IVA (16%)
								</li>
								<li>
									Las condiciones de pago serán 100% al momento de aceptar la cotización.
								</li>
								<li>
									Esta cotización está sujeta a cambios si el alcance cambia al momento de realizar la auditoria.
								</li>
								<li>
									La cancelación del servicio programado tendrá una penalización de 20% del costo total.
								</li>
								<li>
									Esta cotización está realizada en MXN pero, los costos posteriores a 30 días pueden variar en realización a la fluctuación del dólar y/o euro de acuerdo al esquema.
								</li>
							</ul>

	            		<!-- Footer -->
	            		<!--<hr class="hidden-print">-->
	            		<!--<p class="text-muted text-center"><small>Thank you very much for doing business with us. We look forward to working with you again!</small></p>-->
	            		<!-- END Footer -->
	        			</div>
					</div>
					<!-- End Panel Body -->
				</div>
			</div>

		</div>
</div>

<script>
	function addCargo() {
		var tabla = document.getElementById("tablaCotizacion");
		var numFilas = tabla.rows.length;
		var filaActual = numFilas - 3;

		var row = tabla.insertRow(filaActual);
		var celda1 = row.insertCell(0);
    var celda2 = row.insertCell(1);
		var celda3 = row.insertCell(2);
		var celda4 = row.insertCell(3);
		var celda5 = row.insertCell(4);

		celda1.innerHTML = "<button onclick='guardarFila("+filaActual+")' class='btn u-btn-blue'><i class='hs-admin-save'></i></button><button onclick='eliminarFila(this)' class='btn u-btn-red'><i class='hs-admin-close'></i></button>";

		celda2.innerHTML = "<input class='form-control' type='text' name='' value='Concepto'>";
		celda2.innerHTML += "<textarea class='form-control' name='name' placeholder='Detalles del concepto'></textarea>";

		celda3.innerHTML = "<input class='form-control' type='number' id='costo_unitario"+filaActual+"' min='0' step='0.01' placeholder='Costo unitario'>";
		celda4.innerHTML = "<input class='form-control' type='number' id='cantidad"+filaActual+"' min='0' placeholder='Cantidad'>";
		celda5.innerHTML = "<div class='text-right'>$<span id='total_final"+filaActual+"'></span></div>";

	}

	function eliminarFila(fila){
		var index = fila.parentNode.parentNode.rowIndex;
		document.getElementById("tablaCotizacion").deleteRow(index);
	}
	function guardarFila(fila){
		var costo = document.getElementById('costo_unitario'+fila).value;
		var cantidad = document.getElementById('cantidad'+fila).value;

		var total = costo * cantidad;

		document.getElementById('total_final'+fila).innerHTML = Intl.NumberFormat().format(total);


	}

</script>
