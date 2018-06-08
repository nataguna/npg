<?php $this->load->view('inc_admin/headnya'); ?>

	<body>
		<section class="body">
			<!-- start: header -->
			<?php $this->load->view('inc_admin/headernya'); ?>
			<!-- end: header -->
			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php $this->load->view('inc_admin/sidebarnya'); ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>List Peserta Course</h2>
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="admin-home">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>InsCinema Courses</span></li>
								<li><span>Peserta Kursus</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">List Peserta E-Course</h2>
									</header>
									<div class="card-body">
										<table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama</th>
													<th>Email</th>
													<th>Telp/HP</th>
													<th>Pilihan</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											<?php
											$no=0;
											foreach ($course_regis_data as $course_regis)
											{
											?>
												<tr>
													<td width="80px"><?php echo ++$no ?></td>
													<td><?php echo $course_regis->nama ?></td>
													<td><?php echo $course_regis->email ?></td>
													<td><?php echo $course_regis->no_telp ?></td>
													<td><?php echo $course_regis->pilihan ?></td>
													<td style="text-align:center" width="200px">
														<?php 
														echo 'Read';//anchor(site_url('berita_portal/read/'.$uji_regis->id_berita),'Read'); 
														echo ' | '; 
														echo 'Update';//anchor(site_url('update_news/'.$uji_regis->id_berita),'Update'); 
														echo ' | '; 
														echo 'Delete';//anchor(site_url('delete_news/'.$uji_regis->id_berita),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
														?>
													</td>
												</tr>				
												<?php
											}
											?>
											</tbody>
										</table>
									</div>
								</section>
							</div>
						</div>
					<!-- end: page -->
				</section>
			</div>

		</section>

<?php $this->load->view('inc_admin/vendornya');?>