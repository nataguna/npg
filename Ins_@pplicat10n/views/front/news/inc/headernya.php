			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 57, 'stickySetTop': '-55px', 'stickyChangeLogo': true}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="home.html">
											<img alt="Inscinema" width="227" height="54" data-sticky-width="168" data-sticky-height="40" data-sticky-top="33" src="../../img/logo_inscinema.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row pt-3">
									<nav class="header-nav-top">
										<ul class="nav nav-pills">
											<?php if ($this->session->userdata('username') == '') { ?>
											<li class="nav-item d-none d-sm-block">
												<a class="nav-link" href="contactus.html"><i class="fa fa-angle-right"></i> Contact Us</a>
											</li>
											<li class="nav-item">
												<span class="ws-nowrap"><i class="fa fa-phone"></i> +62 (21) 4786-0888</span>
											</li>
											<?php } else { ?>
											<li class="nav-item d-none d-sm-block">
												<a class="nav-link" href=""><i class="fa fa-angle-right"></i> Username</a>
											</li>
											<li class="nav-item">
												<span class="ws-nowrap"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username'); ?></span>
											</li>
											<?php } ?>											
										</ul>
									</nav>
									<div class="header-search d-none d-md-block">
										<form id="searchForm" action="page-search-results.html" method="get">
											<div class="input-group">
												<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
												<span class="input-group-btn">
													<button class="btn btn-light" type="submit"><i class="fa fa-search"></i></button>
												</span>
											</div>
										</form>
									</div>
								</div>
								<div class="header-row">
									<div class="header-nav">
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="">
														<a class="nav-link" href="home.html">
															Home
														</a>
													</li>
													<li class="">
														<a class="nav-link" href="aboutus.html">
															About Us
														</a>
													</li>
													<li class="">
														<a class="nav-link" href="../../teachers.html">
															Teachers
														</a>
													</li>
													<!--
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="#">
															Our Teams
														</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" href="inscinema-teacher.php">Teachers</a></li>
															<li><a class="dropdown-item" href="inscinema-management.php">Managements</a></li>
														</ul>
													</li>
													-->
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="#">
															Online Learning
														</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" href="onlinelearning.html">Tentang Online Cources (eLearning)</a></li>
															<li><a class="dropdown-item" href="tatacarapendaftaran.html">Tatacara Pendaftaran</a></li>
															<li><a class="dropdown-item" href="pendaftaran.html">Pendaftaran Kursus eLearning</a></li>
															<li><a class="dropdown-item" href="jadwalkursus.html">Jadwal Kursus eLearning</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="#">
															Uji Kompetensi
														</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" href="contactus.html">Tentang Uji Kompetensi</a></li>
															<li><a class="dropdown-item" href="contact-us-advanced.php">Tatacara Uji Kompetensi</a></li>
															<li><a class="dropdown-item" href="contact-us-advanced.php">Pendaftaran Uji Kompetensi</a></li>
															<li><a class="dropdown-item" href="contact-us-advanced.php">Jadwal Uji Kompetensi</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="#">
															News & Gallery
														</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" href="front/news">InsCinema News</a></li>
															<li><a class="dropdown-item" href="contact-us-advanced.php">Galeri InsCinema</a></li>
															<li><a class="dropdown-item" href="contact-us-advanced.php">Announcement</a></li>
														</ul>
													</li>
													<?php if ($this->session->userdata('username') != '') { ?>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="#">
															<i class="fa fa-user"></i> User
														</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" href="logout">Logout</a></li>															
														</ul>
													</li>
													<?php } else { ?>
													<li class="dropdown dropdown-mega dropdown-mega-signin signin" id="headerAccount">
														<a class="dropdown-item dropdown-toggle" href="#">
															<i class="fa fa-user"></i> Sign In
														</a>
														<ul class="dropdown-menu">
															<li>
																<div class="dropdown-mega-content">
																	<div class="row">
																		<div class="col">

																			<div class="signin-form">

																				<span class="dropdown-mega-sub-title">Sign In</span>

																				<form action="login" id="frmSignIn" method="post">
																					<div class="form-row">
																						<div class="form-group col">
																							<label>Username or E-mail Address</label>
																							<input type="text" id="username" name="username" class="form-control form-control-lg" tabindex="1">
																						</div>
																					</div>
																					<div class="form-row">
																						<div class="form-group col">
																							<a class="float-right mt-0 p-0" id="headerRecover" href="#">(Lost Password?)</a>
																							<label>Password</label>
																							<input type="password" id="password" name="password" class="form-control form-control-lg" tabindex="2">
																						</div>
																					</div>
																					<div class="form-row">
																						<div class="form-group col-lg-6 pl-0">
																							<span class="remember-box form-check">
																								<label class="form-check-label" for="rememberme">
																									<input class="form-check-input mr-2" type="checkbox" id="rememberme" name="rememberme">Remember Me
																								</label>
																							</span>
																						</div>
																						<div class="form-group col-lg-6 pr-0">
																							<input type="submit" value="Login" class="btn btn-primary float-right mb-3" data-loading-text="Loading...">
																						</div>
																					</div>
																				</form>

																				<p class="sign-up-info">Don't have an account yet? <a href="#" id="headerSignUp" class="p-0 m-0 ml-1">Sign Up</a></p>

																			</div>

																			<div class="signup-form">
																				<span class="dropdown-mega-sub-title">Create Account</span>

																				<form action="add-member" id="frmSignUp" method="post">
																					<div class="form-row">
																						<div class="form-group col">
																							<label>E-mail Address</label>
																							<input type="text" name="username" class="form-control form-control-lg">
																						</div>
																					</div>
																					<div class="form-row">
																						<div class="form-group col-lg-6">
																							<label>Password</label>
																							<input type="password" name="password" class="form-control form-control-lg">
																						</div>
																						<div class="form-group col-lg-6">
																							<label>Re-enter Password</label>
																							<input type="password" name="conf_pass" class="form-control form-control-lg">
																						</div>
																					</div>
																					<div class="form-row">
																						<div class="col-lg-12">
																							<input type="submit" value="Create Account" class="btn btn-primary float-right mb-3" data-loading-text="Loading...">
																						</div>
																					</div>
																				</form>

																				<p class="log-in-info">Already have an account? <a href="#" id="headerSignIn" class="p-0 m-0 ml-1">Log In</a></p>
																			</div>

																			<div class="recover-form">
																				<span class="dropdown-mega-sub-title">Reset My Password</span>
																				<p>Complete the form below to receive an email with the authorization code needed to reset your password.</p>

																				<form action="/" id="frmResetPassword" method="post">
																					<div class="form-row">
																						<div class="form-group col">
																							<label>E-mail Address</label>
																							<input type="text" value="" class="form-control form-control-lg">
																						</div>
																					</div>
																					<div class="form-row">
																						<div class="form-group col">
																							<input type="submit" value="Submit" class="btn btn-primary float-right mb-3" data-loading-text="Loading...">
																						</div>
																					</div>
																				</form>

																				<p class="log-in-info">Already have an account? <a href="#" id="headerRecoverCancel" class="p-0 m-0 ml-1">Log In</a></p>
																			</div>

																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<?php } ?>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fa fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
