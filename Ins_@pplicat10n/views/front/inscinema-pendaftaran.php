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
									<li class="active">Pendaftaran</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h1>LOGIN / REGISTER</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col">

							<div class="featured-boxes">
								<div class="row">
									<div class="col-md-6">
										<div class="featured-box featured-box-primary text-left mt-5">
											<div class="box-content">
												<h4 class="heading-primary text-uppercase mb-3">I'm a Returning Customer</h4>
												<form action="/" id="frmSignIn" method="post">
													<div class="form-row">
														<div class="form-group col">
															<label>Username or E-mail Address</label>
															<input type="text" value="" class="form-control form-control-lg">
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<a class="float-right" href="#">(Lost Password?)</a>
															<label>Password</label>
															<input type="password" value="" class="form-control form-control-lg">
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col-lg-6">
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="checkbox" id="rememberme" name="rememberme"> Remember Me
																</label>
															</div>
														</div>
														<div class="form-group col-lg-6">
															<input type="submit" value="Login" class="btn btn-primary float-right mb-5" data-loading-text="Loading...">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="featured-box featured-box-primary text-left mt-5">
											<div class="box-content">
												<h4 class="heading-primary text-uppercase mb-3">Register An Account</h4>
												<form action="/" id="frmSignUp" method="post">
													<div class="form-row">
														<div class="form-group col">
															<label>E-mail Address</label>
															<input type="text" value="" class="form-control form-control-lg">
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label>No. Handphone</label>
															<input type="text" value="" class="form-control form-control-lg">
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col-lg-6">
															<label>Password</label>
															<input type="password" value="" class="form-control form-control-lg">
														</div>
														<div class="form-group col-lg-6">
															<label>Re-enter Password</label>
															<input type="password" value="" class="form-control form-control-lg">
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<input type="submit" value="Register" class="btn btn-primary float-right mb-5" data-loading-text="Loading...">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>



				</div>
			</div>



			
			<!-- -->
			<!-- AKHIR dari MAIN -->
			
			<?php include 'inc/footernya.php'; ?>
 
		</div>

<?php include 'inc/vendornya.php'; ?>
		