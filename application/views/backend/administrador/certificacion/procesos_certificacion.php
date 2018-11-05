<div class="g-pa-20">
	<div class="row g-mb-0">
		<div class="col-md-12">
			<button class="btn u-btn-bluegray" onclick="history.back(-1)">
				<i class="glyph-icon icon-arrow-left"></i> Regresar
			</button>
		</div>
		<div class="col-md-12 g-mb-0 g-mn-0--md">
			<div class="card border-0 rounded-0 g-mb-50">
				<!-- Proceso de cotización -->
				<div class="container g-pt-40 g-pb-70">
					<h3 class="g-mb-30">
						Proceso de certificación: <span class="g-color-blue">Nombre del cliente</span>
					</h3>
					<a href="<?php echo base_url('backend/administrador/certificacion/ProcesosCertificacion'); ?>" >
						<div class="progress g-height-10 rounded-0 g-overflow-visible g-mb-20">
							<div class="progress-bar g-pos-rel" role="progressbar" style="width: 64%;background: #e6a821" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100">
								<div class="text-center u-progress__pointer-v1 g-font-size-11 g-color-white g-bg-lightbrown g-rounded-50x">64%</div>
							</div>
						</div>
					</a>

	                <!-- Detalle Proceso Certificación -->
	                <section class="g-mt-70">
	                    <!-- Section Content -->
	                    <div class="row">
	                        <div class="col-lg-8">
	                        	<?php 
	                        		if(isset($etapa_certificacion)){
	                        			echo $etapa_certificacion;
	                        		}
	                        	 ?>
	                        </div>

	                        <div class="col-lg-4">
	                            <!-- Lessons -->
	                            <div class="block block-rounded">
	                                <div class="block-content">
	                                    <!-- Etapas proceso de certificación -->
	                                    <table class="table table-borderless table-vcenter">
	                                        <tbody>
	                                            <tr class="active">
	                                                <th colspan="2">Etapas de certificación</th>
	                                                <th class="font-s12 text-right">
	                                                    <span class="text-muted">0.2 hours</span>
	                                                </th>
	                                            </tr>
	                                            <tr>
	                                                <td class="success text-center">
	                                                    <i class="fa fa-fw fa-check text-success"></i>
	                                                </td>
	                                                <td>
	                                                    <a href="<?php echo base_url('backend/administrador/certificacion/ProcesosCertificacion/index/1'); ?>" class="text-success">
	                                                    	1. Asignación de auditor / inspector
	                                                    </a>
	                                                </td>
	                                                <td class="text-right">
	                                                    <em class="font-s12 text-muted">12 min</em>
	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td class="danger text-center">
	                                                    <i class="fa fa-fw fa-unlock text-info"></i>
	                                                </td>
	                                                <td>
	                                                    <a href="<?php echo base_url('backend/administrador/certificacion/ProcesosCertificacion/index/2'); ?>" class="text-info">2. Plan de auditoria</a>
	                                                </td>
	                                                <td class="text-right">
	                                                    <em class="font-s12 text-muted">15 min</em>
	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td class="danger text-center">
	                                                    <i class="fa fa-fw fa-lock text-danger"></i>
	                                                </td>
	                                                <td>
	                                                    <a href="<?php echo base_url('backend/administrador/certificacion/ProcesosCertificacion/index/3'); ?>" >3. Revisión in situ / Documental</a>
	                                                </td>
	                                                <td class="text-right">
	                                                    <em class="font-s12 text-muted">15 min</em>
	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td class="danger text-center">
	                                                    <i class="fa fa-fw fa-lock text-danger"></i>
	                                                </td>
	                                                <td>
	                                                    <a href="<?php echo base_url('backend/administrador/certificacion/ProcesosCertificacion/index/4'); ?>">4. Reporte de auditoria y hallazgos detectados</a>
	                                                </td>
	                                                <td class="text-right">
	                                                    <em class="font-s12 text-muted">15 min</em>
	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td class="danger text-center">
	                                                    <i class="fa fa-fw fa-lock text-danger"></i>
	                                                </td>
	                                                <td>
	                                                    <a href="<?php echo base_url('backend/administrador/certificacion/ProcesosCertificacion/index/5'); ?>">5. Envió de acciones correctivas</a>
	                                                </td>
	                                                <td class="text-right">
	                                                    <em class="font-s12 text-muted">15 min</em>
	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td class="danger text-center">
	                                                    <i class="fa fa-fw fa-lock text-danger"></i>
	                                                </td>
	                                                <td>
	                                                    <a href="<?php echo base_url('backend/administrador/certificacion/ProcesosCertificacion/index/6'); ?>">6. Revisión de acciones correctivas</a>
	                                                </td>
	                                                <td class="text-right">
	                                                    <em class="font-s12 text-muted">15 min</em>
	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td class="danger text-center">
	                                                    <i class="fa fa-fw fa-lock text-danger"></i>
	                                                </td>
	                                                <td>
	                                                    <a href="<?php echo base_url('backend/administrador/certificacion/ProcesosCertificacion/index/7'); ?>">7. Cierre de acciones correctivas</a>
	                                                </td>
	                                                <td class="text-right">
	                                                    <em class="font-s12 text-muted">15 min</em>
	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td class="danger text-center">
	                                                    <i class="fa fa-fw fa-lock text-danger"></i>
	                                                </td>
	                                                <td>
	                                                    <a href="<?php echo base_url('backend/administrador/certificacion/ProcesosCertificacion/index/8'); ?>">8. Decisión de certificación</a>
	                                                </td>
	                                                <td class="text-right">
	                                                    <em class="font-s12 text-muted">15 min</em>
	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td class="danger text-center">
	                                                    <i class="fa fa-fw fa-lock text-danger"></i>
	                                                </td>
	                                                <td>
	                                                    <a href="<?php echo base_url('backend/administrador/certificacion/ProcesosCertificacion/index/9'); ?>">9. Emisión de certificado</a>
	                                                </td>
	                                                <td class="text-right">
	                                                    <em class="font-s12 text-muted">15 min</em>
	                                                </td>
	                                            </tr>


	                                        </tbody>
	                                    </table>
	                                    <!-- END Etapas proceso de certificación -->
	                                </div>
	                            </div>
	                            <!-- END Lessons -->
	                        </div>


	                    </div>
	                    <!-- END Section Content -->
	                </section>
	                <!-- END Detalle Proceso Certificación -->

				</div>
			</div>
		</div>
	</div>
</div>