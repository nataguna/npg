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
						<h2>Welcome</h2>
					
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

				<?php

				if(strlen($page=isset($_GET['page']))!=0) {
						$page=$_GET['page'];
						include("incstd/$page.php");
			    } else {
			            include 'incstd/profile.php';
			    }
		    	?>

				</section>
			</div>

		</section>


		<!-- Vendor -->
		<?php include 'incstd/vendornya.php'; ?>
		<!-- End Vendor -->
		<?php // include 'incstd/footernya.php'; ?>