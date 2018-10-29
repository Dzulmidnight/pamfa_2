<!-- Modal observaciones -->
<div id="modal1" class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20" style="display: none;">
	<button type="button" class="close" onclick="Custombox.modal.close();">
		<i class="hs-icon hs-icon-close"></i>
	</button>
	<h4 class="g-mb-20">Observaciones</h4>
	<hr>
	<div class="row">
		<!-- Area de observaciones. -->
		<div class="col-lg-12">
			<!-- Chat. Message Area. Messages. -->
			<div class="js-custom-scroll g-height-50vh--lg g-pa-15 g-pa-25--lg">
				<section class="g-mb-30">
					<div class="media g-mb-12">
						<!-- Cuerpo observación. -->
						<div class="media-body">
							<div class="d-inline-block g-width-170 g-width-auto--sm g-bg-lightblue-v6 g-font-size-12 g-font-size-default--lg g-color-gray-dark-v6 g-rounded-10 g-pa-10-15">
								<p class="mb-0">Conversations can be a tricky business. Sometimes, decoding what is said with what is meant is difficult</p>
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
						<button type="button" class="btn btn-sm u-btn-primary" name="button">
							<i class="fa hs-admin-check"></i>
						</button>
						<button type="button" class="btn btn-sm u-btn-bluegray" name="button">
							<i class="fa hs-admin-close"></i>
						</button>
					</div>
					<!-- Fecha de observación -->
					<em class="d-flex align-self-center align-items-center justify-content-end g-font-style-normal g-color-gray-light-v1 g-mr-50">

						<i class="hs-admin-time icon-clock g-mr-5"></i>
						<small>11:49 PM</small>

						<i class="hs-admin-check g-font-size-10 g-color-lightblue-v3 g-ml-12"></i>
						<i class="hs-admin-check g-font-size-10 g-color-lightblue-v3"></i>
					</em>
					<!-- End Fecha de observación -->
				</section>

			</div>
			<!-- End Chat. Message Area. Messages. -->

			<footer class="g-bg-gray-light-v8 g-px-15 g-px-30--lg g-py-10 g-py-25--lg">
				<form action="#!">
					<div class="media align-items-top">
						<div class="d-flex">
							<label class="u-file-attach-v2 g-line-height-1 g-color-gray-dark-v6 mb-0">
								<input id="fileAttachment" name="file-attachment" type="file">
								<i class="hs-admin-clip g-font-size-18"></i>
							</label>
						</div>

						<div class="media-body g-ml-25">
							<textarea class="form-control u-textarea-expandable g-resize-none g-bg-transparent g-brd-none w-100 p-0 g-mt-minus-3" placeholder="Escribe tu observación"></textarea>
						</div>

						<div class="d-flex ml-auto">
							<button class="btn btn-link d-flex align-self-top align-items-top u-link-v5 g-color-lightblue-v3 g-color-lightblue-v4--hover p-0 g-ml-15">
								<i class="hs-admin-arrow-top-right g-font-size-18 g-line-height-1_4"></i>
								<span class="g-hidden-sm-down g-font-weight-300 g-font-size-12 g-font-size-default--md g-ml-4 g-ml-8--md">Agregar</span>
							</button>
						</div>
					</div>
				</form>
			</footer>
		</div>
		<!-- End Area de observaciones. -->
	</div>

</div>
<!-- End Modal observaciones -->
