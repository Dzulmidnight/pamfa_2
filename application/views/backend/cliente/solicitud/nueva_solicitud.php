<style>
	.bwizard-steps {
		display: inline-block;
		margin: 0; padding: 0;
		background: #fff }
		.bwizard-steps .active {
			color: #fff;
			background: #007ACC }
		.bwizard-steps .active:after {
			border-left-color: #007ACC }
		.bwizard-steps .active a {
			color: #fff;
			cursor: default }
		.bwizard-steps .label {
			position: relative;
			top: -1px;
			margin: 0 5px 0 0; padding: 1px 5px 2px }
		.bwizard-steps .active .label {
			background-color: #333;}
		.bwizard-steps li {
			display: inline-block; position: relative;
			margin-right: 5px;
			padding: 12px 17px 10px 30px;
			*display: inline;
			*padding-left: 17px;
			background: #efefef;
			line-height: 18px;
			list-style: none;
			zoom: 1; }
		.bwizard-steps li:first-child {
			padding-left: 12px;
			-moz-border-radius: 4px 0 0 4px;
			-webkit-border-radius: 4px 0 0 4px;
			border-radius: 4px 0 0 4px; }
		.bwizard-steps li:first-child:before {
			border: none }
		.bwizard-steps li:last-child {
			margin-right: 0;
			-moz-border-radius: 0 4px 4px 0;
			-webkit-border-radius: 0 4px 4px 0;
			border-radius: 0 4px 4px 0; }
		.bwizard-steps li:last-child:after {
			border: none }
		.bwizard-steps li:before {
			position: absolute;
			left: 0; top: 0;
			height: 0; width: 0;
			border-bottom: 20px inset transparent;
			border-left: 20px solid #fff;
			border-top: 20px inset transparent;
			content: "" }
		.bwizard-steps li:after {
			position: absolute;
			right: -20px; top: 0;
			height: 0; width: 0;
			border-bottom: 20px inset transparent;
			border-left: 20px solid #efefef;
			border-top: 20px inset transparent;
			content: "";
			z-index: 2; }
		.bwizard-steps a {
			color: #333 }
		.bwizard-steps a:hover {
			text-decoration: none }
	.bwizard-steps.clickable li:not(.active) {
		cursor: pointer }
	.bwizard-steps.clickable li:hover:not(.active) {
		background: #ccc }
	.bwizard-steps.clickable li:hover:not(.active):after {
		border-left-color: #ccc }
	.bwizard-steps.clickable li:hover:not(.active) a {
		color: #08c }
	@media (max-width: 480px) {
		/* badges only on small screens */
		.bwizard-steps li:after,
		.bwizard-steps li:before {
			border: none }
		.bwizard-steps li,
		.bwizard-steps li.active,
		.bwizard-steps li:first-child,
		.bwizard-steps li:last-child {
			margin-right: 0;
			padding: 0;
			background-color: transparent }
	}
</style>

<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
	<div class="g-pa-20">

		<div class="row">
			<div class="col-md-12">
				<div id="rootwizard">
					<ul>
					  	<li><a href="#tab1" data-toggle="tab"><span class="label">1</span> Datos del cliente</a></li>
						<li><a href="#tab2" data-toggle="tab"><span class="label">2</span> datos de facturación</a></li>
						<li><a href="#tab3" data-toggle="tab"><span class="label">3</span> productos por certificar</a></li>
						<li><a href="#tab4" data-toggle="tab"><span class="label">4</span> Forth</a></li>
						<li><a href="#tab5" data-toggle="tab"><span class="label">5</span> Fifth</a></li>
						<li><a href="#tab6" data-toggle="tab"><span class="label">6</span> Sixth</a></li>
						<li><a href="#tab7" data-toggle="tab"><span class="label">7</span> Seventh</a></li>
					</ul>
					<div class="tab-content">
					    <div class="tab-pane" id="tab1">
					      1
					    </div>
					    <div class="tab-pane" id="tab2">
					      2
					    </div>
						<div class="tab-pane" id="tab3">
							3
					    </div>
						<div class="tab-pane" id="tab4">
							4
					    </div>
						<div class="tab-pane" id="tab5">
							5
					    </div>
						<div class="tab-pane" id="tab6">
							6
					    </div>
						<div class="tab-pane" id="tab7">
							7
					    </div>
						<ul class="pager wizard">
							<li class="previous first" style="display:none;"><a href="#">First</a></li>
							<li class="previous"><a href="#">Previous</a></li>
							<li class="next last" style="display:none;"><a href="#">Last</a></li>
						  	<li class="next"><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>




