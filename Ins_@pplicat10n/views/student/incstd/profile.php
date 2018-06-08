<?php
//echo $record['username'];
if( !empty($record) ) {
	foreach ($record as $rec){
/*		echo $rec->id_user;
		echo "<br />";
		echo $rec->username;
		echo "<br />";
		echo $rec->nama_lengkap; */
	}
} 
?>
					<!-- start: page -->

					<div class="row">
						<div class="col-lg-4 col-xl-3 mb-4 mb-xl-0">

							<section class="card">
								<div class="card-body">
									<div class="thumb-info mb-3">
									<input name='id' value='<?php echo  $rec->id_user; ?>' type='image' src='<?php echo $rec->foto_loc; ?>' onclick='xpicture()' class="rounded img-fluid" />
									<script>
									function xpicture() {var myWindow = window.open("avatar", "_blank", "titlebar=no,fullscreen=yes,toolbar=no,scrollbars=yes,resizable=no,top=200,left=500,width=400,height=400");
									}
									</script>
									<form>
									<input type="file" name="avatar">
									</form>

<!--									<a href="upicture()">
								<img src="<?php //echo $rec->foto_loc; ?>" class="rounded img-fluid" alt="<?php //echo $rec->nama_lengkap ?>"></a>

									<script>
									function upicture() {
									    var myWindow = window.open("avatar", "_blank", "titlebar=no,fullscreen=yes,toolbar=no,scrollbars=yes,resizable=no,top=200,left=500,width=400,height=400");
									}
									</script>
-->
										<div class="thumb-info-title">
											<span class="thumb-info-inner">
											<?php if($rec->flag == "3"){ echo "Student"; } ?></span>
											<span class="thumb-info-type">Status</span>
										</div>
									</div>

									<div class="widget-toggle-expand mb-3">
										<div class="widget-header">
											<h3 class="mb-2"><strong><?php echo $rec->nama_lengkap; ?></strong></h3>
											<h5 class="mb-2">#User ID</h5>
										</div>
									</div>

									<hr class="dotted short">

									<h5 class="mb-2 mt-3">About</h5>
									<p class="text-2">[Short story]</p>

									<hr class="dotted short">

								</div>
							</section>

						</div>
					
						<div class="col-lg-8 col-xl-6">
							<!-- Awal tab -->
							<div class="tabs">
								<ul class="nav nav-tabs tabs-primary">
									<li class="nav-item active">
										<a class="nav-link" href="#pelatihan" data-toggle="tab">Courses</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#edit" data-toggle="tab">Discussion</a>
									</li>
								</ul>

								<!-- Awal tab content -->
								<div class="tab-content">
									<div id="pelatihan" class="tab-pane active">
										<div class="p-3">
											<h2 class="mb-3">Pelatihan Yang Diikuti</h2>
											<div class="owl-carousel owl-theme" data-plugin-carousel data-plugin-options='{ "dots": true, "autoplay": true, "autoplayTimeout": 3000, "loop": true, "margin": 10, "nav": false, "responsive": {"0":{"items":1 }, "600":{"items":3 }, "1000":{"items":3 } }  }'>
												<div class="item"><img class="img-thumbnail" src="img/projects/project-1.jpg" alt=""></div>

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
														<td><a href="tatakamera.html">Tata Kamera</a></td>
														<td>TND</td>
														<td><button type="button" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary">Active</button></td>
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
										<h2 class="mb-3">Discussion</h2>
										<div class="p-3">

											<h4 class="mb-3">Apa yang ingin kamu tanyakan?</h4>

											<section class="simple-compose-box mb-3">
												<form method="get" action="/">
													<textarea name="message-text" data-plugin-textarea-autosize placeholder="What's on your mind?" rows="1"></textarea>
												</form>
												<div class="compose-box-footer">
													<ul class="compose-btn">
														<li>
															<a href="#" class="btn btn-primary btn-xs">Post</a>
														</li>
													</ul>
												</div>
											</section>
												<p>Sebelum kamu bertanya, ada baiknya membaca diskusi yang telah berlangsung jika ada. Terima kasih.</p>

										<div class="post-block post-author clearfix">
											<h3 class="heading-primary"><i class="fa fa-user"></i>Teacher</h3>
											<div class="img-thumbnail d-block">
												<a href="dwinatoro-tino.php">
													<img src="img/mutiara/dwiantoro-tino.jpg" alt="">
												</a>
											</div>
											<p><strong class="name"><a href="#">John Doe</a></strong></p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. </p>
										</div>

										<div class="post-block post-comments clearfix">
											<h3 class="heading-primary"><i class="fa fa-comments"></i>Discussion (3)</h3>

											<ul class="comments">
												<li>
													<div class="comment">
														<div class="img-thumbnail d-none d-sm-block">
															<img class="avatar" alt="" src="img/avatars/avatar-2.jpg">
														</div>
														<div class="comment-block">
															<div class="comment-arrow"></div>
															<span class="comment-by">
																<strong>John Doe</strong>
																<span class="float-right">
																	<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
																</span>
															</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
															<span class="date float-right">November 12, 2017 at 1:38 pm</span>
														</div>
													</div>

													<ul class="comments reply">
														<li>
															<div class="comment">
																<div class="img-thumbnail d-none d-sm-block">
																	<img class="avatar" alt="" src="img/avatars/avatar-3.jpg">
																</div>
																<div class="comment-block">
																	<div class="comment-arrow"></div>
																	<span class="comment-by">
																		<strong>John Doe</strong>
																		<span class="float-right">
																			<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
																		</span>
																	</span>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
																	<span class="date float-right">November 12, 2017 at 1:38 pm</span>
																</div>
															</div>
														</li>
														<li>
															<div class="comment">
																<div class="img-thumbnail d-none d-sm-block">
																	<img class="avatar" alt="" src="img/avatars/avatar-4.jpg">
																</div>
																<div class="comment-block">
																	<div class="comment-arrow"></div>
																	<span class="comment-by">
																		<strong>John Doe</strong>
																		<span class="float-right">
																			<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
																		</span>
																	</span>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
																	<span class="date float-right">November 12, 2017 at 1:38 pm</span>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li>
													<div class="comment">
														<div class="img-thumbnail d-none d-sm-block">
															<img class="avatar" alt="" src="img/avatars/avatar.jpg">
														</div>
														<div class="comment-block">
															<div class="comment-arrow"></div>
															<span class="comment-by">
																<strong>John Doe</strong>
																<span class="float-right">
																	<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
																</span>
															</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
															<span class="date float-right">November 12, 2017 at 1:38 pm</span>
														</div>
													</div>
												</li>
												<li>
													<div class="comment">
														<div class="img-thumbnail d-none d-sm-block">
															<img class="avatar" alt="" src="img/avatars/avatar.jpg">
														</div>
														<div class="comment-block">
															<div class="comment-arrow"></div>
															<span class="comment-by">
																<strong>John Doe</strong>
																<span class="float-right">
																	<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
																</span>
															</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
															<span class="date float-right">November 12, 2017 at 1:38 pm</span>
														</div>
													</div>
												</li>
											</ul>

										</div>

										</div>

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