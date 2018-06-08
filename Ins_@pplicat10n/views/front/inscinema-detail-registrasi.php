<?php 
// InsCinema by PT Mutiara Training
// Power by dwiantoro.com
//---------------------------------
?>


<?php $this->load->view('inc/headnya'); ?>

<!-- Admin Extension Specific Page Vendor CSS -->

		<link rel="stylesheet" href="admin-vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
		<!--<link rel="stylesheet" href="admin/vendor/jquery-ui/jquery-ui.css" />
		<link rel="stylesheet" href="admin/vendor/jquery-ui/jquery-ui.theme.css" />
		<link rel="stylesheet" href="admin/vendor/select2/css/select2.css" />
		<link rel="stylesheet" href="admin/vendor/select2-bootstrap-theme/select2-bootstrap.css" />
		<link rel="stylesheet" href="admin/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="admin/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />
		<link rel="stylesheet" href="admin/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
		<link rel="stylesheet" href="admin/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="admin/vendor/dropzone/basic.css" />
		<link rel="stylesheet" href="admin/vendor/dropzone/dropzone.css" />
		<link rel="stylesheet" href="admin/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />
		<link rel="stylesheet" href="admin/vendor/summernote/summernote.css" />
		<link rel="stylesheet" href="admin/vendor/summernote/summernote-bs4.css" />
		<link rel="stylesheet" href="admin/vendor/codemirror/lib/codemirror.css" />
		<link rel="stylesheet" href="admin/vendor/codemirror/theme/monokai.css" />-->

		<!-- Admin Extension CSS -->
		<link rel="stylesheet" href="admin-css/theme-admin-extension.css">

		<!-- Admin Extension Skin CSS -->
		<link rel="stylesheet" href="admin-css/skins/extension.css">

	<body>
		<div class="body">

			<?php $this->load->view('inc/headernya'); ?>

			<!-- Mulai dari MAIN -->
			<!-- -->

			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Sign Up</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h1>Registration</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col">
							<section class="card card-admin">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>
					
									<h2 class="card-title">Form Detail Registration</h2>
								</header>
								<div class="card-body">
									<form action="add-member" class="form-horizontal form-bordered" method="post">
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="inputPlaceholder">Nama Lengkap</label>
											<div class="col-lg-6">
												<input type="text" name="username" class="form-control" placeholder="placeholder" id="inputPlaceholder">
												<span class="text-danger"><?php echo form_error('username');?></span>
											</div>
										</div>
					
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Jenis Kelamin</label>
											<div class="col-lg-6">
												<div class="radio">
													<label>
														<input type="radio" name="jns_kel" id="optionsRadios1" value="L" checked="">
														Laki-laki
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" name="jns_kel" id="optionsRadios2" value="P">
														Perempuan
													</label>
												</div>
					
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="inputPassword">Confirm Password</label>
											<div class="col-lg-6">
												<input type="password" name="conf_pass" class="form-control" placeholder="" id="inputPassword">
												<span class="text-danger"><?php echo form_error('conf_pass');?></span>
											</div>
										</div>
										
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2">Default Datepicker</label>
											<div class="col-lg-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</span>
													<input type="text" data-plugin-datepicker class="form-control">
												</div>
											</div>
										</div>
										
										<div class="form-row">
											<div class="col-lg-12">
												<input type="submit" value="Submit" class="btn btn-primary float-right mb-3" data-loading-text="Loading...">
											</div>
										</div>
									</form>
								</div>
							</section>
						</div>
					</div>
					
				</div>

			</div>



			
			<!-- -->
			<!-- AKHIR dari MAIN -->
			
			<?php $this->load->view('inc/footernya'); ?>
 
		</div>

<?php $this->load->view('inc/vendornya'); ?>

<!-- Admin Extension Specific Page Vendor -->
		<script src="admin-vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script>
			// Bootstrap Datepicker No Conflict
			if (typeof($.fn.datepicker) != 'undefined') {
				$.fn.bootstrapDP = $.fn.datepicker.noConflict();
			}
		</script>
		<!--<script src="admin/vendor/jquery-placeholder/jquery-placeholder.js"></script>
		<script src="admin/vendor/jquery-ui/jquery-ui.js"></script>
		<script src="admin/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
		<script src="admin/vendor/select2/js/select2.js"></script>
		<script src="admin/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="admin/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
		<script src="admin/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
		<script src="admin/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="admin/vendor/bootstrap-timepicker/bootstrap-timepicker.js"></script>
		<script src="admin/vendor/fuelux/js/spinner.js"></script>
		<script src="admin/vendor/dropzone/dropzone.js"></script>
		<script src="admin/vendor/bootstrap-markdown/js/markdown.js"></script>
		<script src="admin/vendor/bootstrap-markdown/js/to-markdown.js"></script>
		<script src="admin/vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>
		<script src="admin/vendor/codemirror/lib/codemirror.js"></script>
		<script src="admin/vendor/codemirror/addon/selection/active-line.js"></script>
		<script src="admin/vendor/codemirror/addon/edit/matchbrackets.js"></script>
		<script src="admin/vendor/codemirror/mode/javascript/javascript.js"></script>
		<script src="admin/vendor/codemirror/mode/xml/xml.js"></script>
		<script src="admin/vendor/codemirror/mode/htmlmixed/htmlmixed.js"></script>
		<script src="admin/vendor/codemirror/mode/css/css.js"></script>
		<script src="admin/vendor/summernote/summernote.js"></script>
		<script src="admin/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
		<script src="admin/vendor/ios7-switch/ios7-switch.js"></script>-->

		<!-- Admin Extension -->
		<script src="admin-js/theme.admin.extension.js"></script>

		<!-- Admin Extension Examples -->
		<script src="admin-js/examples/examples.advanced.form.js"></script>
		