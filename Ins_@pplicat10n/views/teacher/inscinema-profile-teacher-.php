<?php include 'incstd/headnya.php'; ?>

		<section class="body">

			<!-- start: header -->
			<?php include 'incstd/headernya.php'; ?>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
			<?php include 'incstd/sidebarnya.php'; ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Welcome <?php echo $this->session->userdata('nama'); ?></h2>
					
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
										<img src="asset/img/istudents.jpg" class="rounded img-fluid" alt="John Doe">
										<div class="thumb-info-title">
											<span class="thumb-info-inner">Student Name</span>
											<span class="thumb-info-type">Status</span>
										</div>
									</div>

									<div class="widget-toggle-expand mb-3">
										<div class="widget-header">
											<h3 class="mb-2"><strong>Student Name</strong></h3>
											<h5 class="mb-2">User ID</h5>
										</div>
									</div>

									<hr class="dotted short">

									<h5 class="mb-2 mt-3">About</h5>
									<p class="text-2">[Short story]</p>

									<hr class="dotted short">

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
							</section> 
-->
						</div>
					
						<div class="col-lg-8 col-xl-6">
							<!-- Awal tab -->
							<div class="tabs">
								<ul class="nav nav-tabs tabs-primary">
									<li class="nav-item active">
										<a class="nav-link" href="#pelatihan" data-toggle="tab">Courses</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#edit" data-toggle="tab">Edit Profile</a>
									</li>
								</ul>

								<!-- Awal tab content -->
								<div class="tab-content">
									<div id="pelatihan" class="tab-pane active">
										<div class="p-3">
											<h2 class="mb-3">Pelatihan Yang Diikuti</h2>
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
														<td><a href="student/course/course101">Membangun StartUp Ep.1</a></td>
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

										</div>

									</div>

									<div id="edit" class="tab-pane">
										<h2 class="mb-3">Data Personal:</h2>
										<form class="p-3">
											<hr class="dotted tall">
											<?php include('incstd/table-form.php') ?>

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
								<!-- Akhir tab content --> 
							</div>
							<!-- Akhir tab -->

						</div>
					</div>
					<!-- end: page -->
				</section>
			</div>
		</section>


		<!-- Vendor -->
		<?php include 'incstd/vendornya.php'; ?>
		<!-- End Vendor -->