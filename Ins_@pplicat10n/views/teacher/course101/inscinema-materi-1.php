<?php include 'confignya/headnya1.php'; ?>

		<section class="body">

			<!-- start: header -->
			<?php include 'confignya/headernya.php'; ?>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php include 'confignya/sidebarnya.php'; ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Media Gallery</h2>
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Pages</span></li>
								<li><span>Media Gallery</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<section class="content-with-menu content-with-menu-has-toolbar media-gallery">
						<div class="content-with-menu-container">
							<div class="inner-menu-toggle">
								<a href="#" class="inner-menu-expand" data-open="inner-menu">
									Show Bar <i class="fa fa-chevron-right"></i>
								</a>
							</div>
							
							<menu id="content-menu" class="inner-menu" role="menu">
								<div class="nano">
									<div class="nano-content">
							
										<div class="inner-menu-toggle-inside">
											<a href="#" class="inner-menu-collapse">
												<i class="fa fa-chevron-up visible-xs-inline"></i><i class="fa fa-chevron-left hidden-xs-inline"></i> Hide Bar
											</a>
											<a href="#" class="inner-menu-expand" data-open="inner-menu">
												Show Bar <i class="fa fa-chevron-down"></i>
											</a>
										</div>
							
										<div class="inner-menu-content">
														
											<div class="sidebar-widget m-0">
												<div class="widget-header clearfix">
													<h6 class="title float-left mt-1">Subject</h6>
												</div>
												<div class="widget-content">
													<ul class="mg-folders">
														<li>
															<a href="#" class="menu-item"><i class="fa fa-video-camera"></i> Materi Bahasan Ke-1</a>
															<div class="item-options">
																<a href="#">
																	<i class="fa fa-edit"></i>
																</a>
																<a href="#" class="text-danger">
																	<i class="fa fa-times"></i>
																</a>
															</div>
														</li>
														<li>
															<a href="#" class="menu-item"><i class="fa fa-video-camera"></i> Materi 2</a>
															<div class="item-options">
																<a href="#">
																	<i class="fa fa-edit"></i>
																</a>
																<a href="#" class="text-danger">
																	<i class="fa fa-times"></i>
																</a>
															</div>
														</li>
														<li>
															<a href="#" class="menu-item"><i class="fa fa-file-text"></i> Materi 3</a>
															<div class="item-options">
																<a href="#">
																	<i class="fa fa-edit"></i>
																</a>
																<a href="#" class="text-danger">
																	<i class="fa fa-times"></i>
																</a>
															</div>
														</li>
														<li>
															<a href="#" class="menu-item"><i class="fa fa-volume-up"></i> Materi 4</a>
															<div class="item-options">
																<a href="#">
																	<i class="fa fa-edit"></i>
																</a>
																<a href="#" class="text-danger">
																	<i class="fa fa-times"></i>
																</a>
															</div>
														</li>
														<li>
															<a href="#" class="menu-item"><i class="fa fa-warning"></i> Quiz</a>
															<div class="item-options">
																<a href="#">
																	<i class="fa fa-edit"></i>
																</a>
																<a href="#" class="text-danger">
																	<i class="fa fa-times"></i>
																</a>
															</div>
														</li>
														<li>
															<a href="#" class="menu-item"><i class="fa fa-folder"></i> Photos</a>
															<div class="item-options">
																<a href="#">
																	<i class="fa fa-edit"></i>
																</a>
																<a href="#" class="text-danger">
																	<i class="fa fa-times"></i>
																</a>
															</div>
														</li>
														<li>
															<a href="#" class="menu-item"><i class="fa fa-folder"></i> Projects</a>
															<div class="item-options">
																<a href="#">
																	<i class="fa fa-edit"></i>
																</a>
																<a href="#" class="text-danger">
																	<i class="fa fa-times"></i>
																</a>
															</div>
														</li>
													</ul>
												</div>
											</div>
							
											<hr class="separator" />
							
											<div class="sidebar-widget m-0">
												<div class="widget-header">
													<h6 class="title">Labels</h6>
													<span class="widget-toggle">+</span>
												</div>
												<div class="widget-content">
													<ul class="mg-tags">
														<li><a href="#">Design</a></li>
														<li><a href="#">Projects</a></li>
														<li><a href="#">Photos</a></li>
														<li><a href="#">Websites</a></li>
														<li><a href="#">Documentation</a></li>
														<li><a href="#">Download</a></li>
														<li><a href="#">Images</a></li>
														<li><a href="#">Vacation</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</menu>
							<div class="inner-body mg-main">
							
								<div class="inner-toolbar clearfix">
									<ul>
										<li>
											<a href="#" id="mgSelectAll"><i class="fa fa-check-square mr-1"></i> <span data-all-text="Select All" data-none-text="Select None">Select All</span></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-pencil mr-1"></i> Edit</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-trash-o mr-1"></i> Delete</a>
										</li>
										<li class="right" data-sort-source data-sort-id="media-gallery">
											<ul class="nav nav-pills nav-pills-primary">
												<li class="nav-item">
													<label>Filter:</label>
												</li>
												<li class="nav-item active">
													<a class="nav-link" data-option-value="*" href="#all">All</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-option-value=".document" href="#document">Documents</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-option-value=".image" href="#image">Images</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-option-value=".video" href="#video">Videos</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>

								<!-- ISI Video/Konten -->
					<div class="row">
						<div class="col">
							<section class="card">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Materi Bahasan</h2>
									<p class="card-subtitle">Ikuti materi yang ada dalam video ini sampai selesai. Jika Anda belum paham silahkan ulangi kembali dan pastikan Anda memahami isi materi tersebut. Materi akan tersedia selama Anda masih dalam batas waktu pelatihan dan dapat diulang-ulang sebanyak Anda mau. Terima kasih.</p>
								</header>
								<div class="card-body">
									<div class="row">
										<div class="col-lg-9">
											<!--
											<h5 class="font-weight-semibold text-dark text-uppercase">16:9 aspect ratio</h5>
											-->
											<div class="embed-responsive embed-responsive-16by9">
												<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/arr03akFf9U"></iframe>
											</div>
										</div>
										<!--
										<div class="col-lg-4">
											<h5 class="font-weight-semibold text-dark text-uppercase">4:3 aspect ratio</h5>
											<div class="embed-responsive embed-responsive-4by3">
												<iframe class="embed-responsive-item" src="//www.youtube.com/embed/iQN06bfOnxo"></iframe>
											</div>
										</div>
										-->
									</div>
								</div>
							</section>
						</div>
					</div>
								
								
								<!-- Akhir Isi Video/Konten -->
							</div>
						</div>
					</section>
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
		<?php include 'confignya/vendornya.php'; ?>
		<!-- End Vendor -->