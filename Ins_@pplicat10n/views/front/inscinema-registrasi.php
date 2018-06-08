<?php 
// InsCinema by PT Mutiara Training
// Power by dwiantoro.com
//---------------------------------
?>


<?php include 'inc/headnya.php'; ?>

	<body>
		<div class="body">

			<?php include 'inc/headernya.php'; ?>

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
					
									<h2 class="card-title">Form Registration</h2>
								</header>
								<div class="card-body">
									<form action="add-member" class="form-horizontal form-bordered" method="post">
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="inputPlaceholder">Email</label>
											<div class="col-lg-6">
												<input type="text" name="username" class="form-control" placeholder="E-mail" id="inputPlaceholder">
												<span class="text-danger"><?php echo form_error('username');?></span>
											</div>
										</div>
					
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="inputPassword">Password</label>
											<div class="col-lg-6">
												<input type="password" name="password" class="form-control" placeholder="Password" id="inputPassword">
												<span class="text-danger"><?php echo form_error('password');?></span>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="inputPassword">Confirm Password</label>
											<div class="col-lg-6">
												<input type="password" name="conf_pass" class="form-control" placeholder="Re-enter Password" id="inputPassword">
												<span class="text-danger"><?php echo form_error('conf_pass');?></span>
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
			
			<?php include 'inc/footernya.php'; ?>
 
		</div>

<?php include 'inc/vendornya.php'; ?>
		