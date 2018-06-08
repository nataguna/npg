<?php include 'inc_std/headnya.php'; ?>

		<section class="body">

			<!-- start: header -->
			<?php include 'inc_std/headernya.php'; ?>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php include 'inc_std/sidebarnya.php'; ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Welcome (#tutorname)</h2>
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="front">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Pages</span></li>
								<li><span>User Profile</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->

					<div class="row">
						<div class="col-lg-4 col-xl-3 mb-4 mb-xl-0">

							<section class="card">
								<div class="card-body">
									<div class="thumb-info mb-3">
										<img src="assetstd/img/istudents.jpg" class="rounded img-fluid" alt="Tutor Photo">
										<div class="thumb-info-title">
											<span class="thumb-info-inner">#User Name</span>
											<span class="thumb-info-type">Tutor</span>
										</div>
									</div>

									<div class="widget-toggle-expand mb-3">
										<div class="widget-header">
											<h3 class="mb-2"><strong>#Tutor Name</strong></h3>
											<h5 class="mb-2">#ID number</h5>
										</div>
									</div>

									<hr class="dotted short">

									<h5 class="mb-2 mt-3">About</h5>
									<p class="text-2">[Short story]</p>

									<hr class="dotted short">

								<!--	<div class="social-icons-list">
										<a rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
										<a rel="tooltip" data-placement="bottom" href="http://www.twitter.com" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
										<a rel="tooltip" data-placement="bottom" href="http://www.linkedin.com" data-original-title="Linkedin"><i class="fa fa-instagram"></i><span>Linkedin</span></a>
									</div>-->

								</div>
							</section>

								<!--
							<section class="card">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Popular Posts</h2>
								</header>
								<div class="card-body">
									<ul class="simple-post-list">
										<li>
											<div class="post-image">
												<div class="img-thumbnail">
													<a href="#">
														<img src="img/post-thumb-1.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="post-info">
												<a href="#">Nullam Vitae Nibh Un Odiosters</a>
												<div class="post-meta">
													 Jan 10, 2017
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<div class="img-thumbnail">
													<a href="#">
														<img src="img/post-thumb-2.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="post-info">
												<a href="#">Vitae Nibh Un Odiosters</a>
												<div class="post-meta">
													 Jan 10, 2017
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<div class="img-thumbnail">
													<a href="#">
														<img src="img/post-thumb-3.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="post-info">
												<a href="#">Odiosters Nullam Vitae</a>
												<div class="post-meta">
													 Jan 10, 2017
												</div>
											</div>
										</li>
									</ul>
								</div>
							</section> -->

						</div>
						<div class="col-lg-8 col-xl-6">

							<div class="tabs">
								<ul class="nav nav-tabs tabs-primary">
									<li class="nav-item active">
										<a class="nav-link" href="#pelatihan" data-toggle="tab">Courses</a>
									</li>
								<!--	<li class="nav-item">
										<a class="nav-link" href="#overview" data-toggle="tab">Overview</a>
									</li> -->
									<li class="nav-item">
										<a class="nav-link" href="#edit" data-toggle="tab">Edit Profile</a>
									</li>
								</ul>

								<div class="tab-content">

									<div id="pelatihan" class="tab-pane active">

										<div class="p-3">
											<h2 class="mb-3">Pelatihan</h2>
											<div class="owl-carousel owl-theme" data-plugin-carousel data-plugin-options='{ "dots": true, "autoplay": true, "autoplayTimeout": 3000, "loop": true, "margin": 10, "nav": false, "responsive": {"0":{"items":1 }, "600":{"items":3 }, "1000":{"items":3 } }  }'>
												<div class="item"><img class="img-thumbnail" src="img/projects/project-1.jpg" alt=""></div>
												<div class="item"><img class="img-thumbnail" src="img/projects/project-2.jpg" alt=""></div>
												<div class="item"><img class="img-thumbnail" src="img/projects/project-3.jpg" alt=""></div>
												<div class="item"><img class="img-thumbnail" src="img/projects/project-4.jpg" alt=""></div>
												<div class="item"><img class="img-thumbnail" src="img/projects/project-5.jpg" alt=""></div>
												<div class="item"><img class="img-thumbnail" src="img/projects/project-6.jpg" alt=""></div>
												<div class="item"><img class="img-thumbnail" src="img/projects/project-7.jpg" alt=""></div>
												<div class="item"><img class="img-thumbnail" src="img/projects/project-1.jpg" alt=""></div>
												<div class="item"><img class="img-thumbnail" src="img/projects/project-2.jpg" alt=""></div>
												<div class="item"><img class="img-thumbnail" src="img/projects/project-3.jpg" alt=""></div>
												<div class="item"><img class="img-thumbnail" src="img/projects/project-4.jpg" alt=""></div>
												<div class="item"><img class="img-thumbnail" src="img/projects/project-5.jpg" alt=""></div>
												<div class="item"><img class="img-thumbnail" src="img/projects/project-6.jpg" alt=""></div>
												<div class="item"><img class="img-thumbnail" src="img/projects/project-7.jpg" alt=""></div>
											 </div>
											<table class="table table-responsive-md table-hover mb-0">
												<thead>
													<tr>
														<th>#</th>
														<th>Subject</th>
														<th>Teacher</th>
														<th>Status</th>
													</tr>
												</thead>

												<!-- Diambil dari database -->
												



												<!-- End list pelatihan yang diambil -->

												<tbody>
													<tr>
														<td>1</td>
														<td>Membangun StartUp Ep.1</td>
														<td>TND</td>
														<td><button type="button" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary">Active</button></td>
													</tr>
													<tr>
														<td>2</td>
														<td>Network Andministrator</td>
														<td>TND</td>
														<td><button type="button" class="mb-1 mt-1 mr-1 btn btn-xs btn-success">Finish</button></td>
													</tr>
													<tr>
														<td>3</td>
														<td>Design Grafis</td>
														<td>TND</td>
														<td><button type="button" class="mb-1 mt-1 mr-1 btn btn-xs btn-danger">Fail</button></td>
													</tr>
												</tbody>
											</table>
											<!--	
											<h4 class="mb-3">Uji Kompetensi Yang Diikuti</h4>
											<ol class="tm-items">
														<li>
															<div class="tm-box">
																<p class="text-muted mb-0">#Judul Uji kompetensi</p>
																<p>
																	[Uji kompetensi dilakukan secara online]</br>
																	[Dilaksanakan tanggal  <span class="text-primary">#20 Juli 2018</span> ]
																</p>
															</div>
														</li>
											</ol>
											-->

										</div>

									</div>

									<div id="overview" class="tab-pane">

										<div class="p-3">

											<h4 class="mb-3">Update Status</h4>

											<section class="simple-compose-box mb-3">
												<form method="get" action="/">
													<textarea name="message-text" data-plugin-textarea-autosize placeholder="What's on your mind?" rows="1"></textarea>
												</form>
												<div class="compose-box-footer">
													<ul class="compose-toolbar">
														<li>
															<a href="#"><i class="fa fa-camera"></i></a>
														</li>
														<li>
															<a href="#"><i class="fa fa-map-marker"></i></a>
														</li>
													</ul>
													<ul class="compose-btn">
														<li>
															<a href="#" class="btn btn-primary btn-xs">Post</a>
														</li>
													</ul>
												</div>
											</section>

											<h4 class="mb-3 pt-4">Timeline</h4>

											<div class="timeline timeline-simple mt-3 mb-3">
												<div class="tm-body">
													<div class="tm-title">
														<h5 class="m-0 pt-2 pb-2 text-uppercase">November 2017</h5>
													</div>
													<ol class="tm-items">
														<li>
															<div class="tm-box">
																<p class="text-muted mb-0">7 months ago.</p>
																<p>
																	It's awesome when we find a good solution for our projects, Porto Admin is <span class="text-primary">#awesome</span>
																</p>
															</div>
														</li>
														<li>
															<div class="tm-box">
																<p class="text-muted mb-0">7 months ago.</p>
																<p>
																	What is your biggest developer pain point?
																</p>
															</div>
														</li>
														<li>
															<div class="tm-box">
																<p class="text-muted mb-0">7 months ago.</p>
																<p>
																	Checkout! How cool is that!
																</p>
																<div class="thumbnail-gallery">
																	<a class="img-thumbnail lightbox" href="img/projects/project-4.jpg" data-plugin-options='{ "type":"image" }'>
																		<img class="img-fluid" width="215" src="img/projects/project-4.jpg">
																		<span class="zoom">
																			<i class="fa fa-search"></i>
																		</span>
																	</a>
																</div>
															</div>
														</li>
													</ol>
												</div>
											</div>
										</div>

									</div>

									<div id="edit" class="tab-pane">

										<form class="p-3">
											<h4 class="mb-3">Personal Information</h4>
											<div class="form-group">
												<label for="inputAddress">Address</label>
												<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
											</div>
											<div class="form-group">
												<label for="inputAddress2">Address 2</label>
												<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
											</div>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="inputCity">City</label>
													<input type="text" class="form-control" id="inputCity">
												</div>
												<div class="form-group col-md-4">
													<label for="inputState">State</label>
													<select id="inputState" class="form-control">
														<option selected>Choose...</option>
														<option>...</option>
													</select>
												</div>
												<div class="form-group col-md-2">
													<label for="inputZip">Zip</label>
													<input type="text" class="form-control" id="inputZip">
												</div>
											</div>

											<hr class="dotted tall">

											<h4 class="mb-3">Change Password</h4>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="inputPassword4">New Password</label>
													<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
												</div>
												<div class="form-group col-md-6">
													<label for="inputPassword4">Re New Password</label>
													<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
												</div>
											</div>

											<div class="form-row">
												<div class="col-md-12 text-right mt-3">
													<button class="btn btn-primary modal-confirm">Save</button>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3">

							<h4 class="mb-3 mt-0">Messages</h4>
							<!--
							<ul class="simple-card-list mb-3">
								<li class="primary">
									<h3>488</h3>
									<p class="text-light">Nullam quris ris.</p>
								</li>
								<li class="primary">
									<h3>$ 189,000.00</h3>
									<p class="text-light">Nullam quris ris.</p>
								</li>
								<li class="primary">
									<h3>16</h3>
									<p class="text-light">Nullam quris ris.</p>
								</li>
							</ul>

							<h4 class="mb-3 mt-4 pt-2">User Online</h4>
							<ul class="simple-bullet-list mb-3">
								<li class="red">
									<span class="title">Porto Template</span>
									<span class="description truncate">Lorem ipsom dolor sit.</span>
								</li>
								<li class="green">
									<span class="title">Tucson HTML5 Template</span>
									<span class="description truncate">Lorem ipsom dolor sit amet</span>
								</li>
								<li class="blue">
									<span class="title">Porto HTML5 Template</span>
									<span class="description truncate">Lorem ipsom dolor sit.</span>
								</li>
								<li class="orange">
									<span class="title">Tucson Template</span>
									<span class="description truncate">Lorem ipsom dolor sit.</span>
								</li>
							</ul>
							-->
							<h4 class="mb-3 mt-4 pt-2">Online</h4>
							<!--
							<ul class="simple-user-list mb-3">
								<li>
									<figure class="image rounded">
										<img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle">
									</figure>
									<span class="title">Joseph Doe Junior</span>
									<span class="message">Lorem ipsum dolor sit.</span>
								</li>
								<li>
									<figure class="image rounded">
										<img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle">
									</figure>
									<span class="title">Joseph Junior</span>
									<span class="message">Lorem ipsum dolor sit.</span>
								</li>
								<li>
									<figure class="image rounded">
										<img src="img/!sample-user.jpg" alt="Joe Junior" class="rounded-circle">
									</figure>
									<span class="title">Joe Junior</span>
									<span class="message">Lorem ipsum dolor sit.</span>
								</li>
								<li>
									<figure class="image rounded">
										<img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle">
									</figure>
									<span class="title">Joseph Doe Junior</span>
									<span class="message">Lorem ipsum dolor sit.</span>
								</li>
							</ul>-->
						</div> 

					</div>
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close d-md-none">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark"></div>
			
								<ul>
									<li>
										<time datetime="2017-04-19T00:00+00:00">04/19/2017</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>

		</section>

		<!-- Vendor -->
		<?php include 'inc_std/vendornya.php'; ?>
		<!-- End Vendor -->