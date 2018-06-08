<?php include 'inc/headnya.php'; ?>

	<body>
		<div class="body">
		<?php //include 'inc/headnya.php'; ?>
			<div role="main" class="main">
							<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">InsCinema Newsg</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h1>InsCinema News</h1>
							</div>
						</div>
					</div>
				</section>
				<div class="container">
					<div class="row pt-5 pb-4">

						<div class="col">

							<h1 class="mb-0">Latest News</h1>
							<div class="divider divider-primary divider-small mb-4">
								<hr class="mr-auto">
							</div>

							<div class="row mt-4">
								<div class="col">
<?php foreach ($news as $news_item): ?>
									<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mt-4">
										<span class="thumb-info-side-image-wrapper p-0 d-none d-md-block">
											<a title="" href="demo-law-firm-news-detail.html">
												<img src="../../img/news/<?php echo $news_item['img']; ?>" class="img-fluid" alt="" style="width: 195px;">
											</a>
										</span>
										<span class="thumb-info-caption">
											<span class="thumb-info-caption-text">
												<h2 class="mb-3 mt-1"><a title="" class="text-dark" href="#"> <?php echo $news_item['title']; ?> </a></h2>
												<span class="post-meta">
													<span><?php echo $news_item['news_date']; ?></span>
												</span>
												<p class="text-3 px-0 px-md-3"><?php echo $news_item['text']; ?></p>
												<a class="mt-3" href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
											</span>
										</span>
									</span>
<?php endforeach; ?>	

								</div>
							</div>

						</div>

					</div>

				</div>
			</div>
		</div>

		</div>

<?php include 'inc/vendornya.php'; ?>