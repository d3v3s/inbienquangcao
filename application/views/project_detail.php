<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="works" class="page-section">
	<div class="container">
		<div class="text-left" style="width: 100%">
			<!-- Heading -->
			<h2 class="title">Chi tiết dự án</h2>
		</div>
		<div class="row">
			<div class="col-md-4">
				<p>
					<b>Tên dự án:</b>
					<span><?php echo $project->title; ?></span></p>
				<p>
					<b>Khách hàng:</b>
					<span><?php echo $project->customer; ?></span></p>
				<p>
					<b>Kinh phí:</b>
					<span><?php echo $project->estimation; ?> VND</span></p>
				<p>
					<b>Thời gian thi công:</b>
					<span>4 ngày</span></p>
				<div class="icon-3 static-color-icons hover-color">
					<a href="#">
						<span class="pe-so-facebook"></span>
					</a>
					<a href="#">
						<span class="pe-so-twitter"></span>
					</a>
					<a href="#">
						<span class="pe-so-google-plus"></span>
					</a>
					<a href="#">
						<span class="pe-so-pinterest"></span>
					</a>
					<a href="#">
						<span class="pe-so-linkedin"></span>
					</a></div>
			</div>
			<div class="col-md-4">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla debitis
					vitae temporibus enim sed. Optio, reprehenderit, ex.</p>
				<ul class="list-style">
					<li>Photoshop 4</li>
					<li>Creative Design</li>
					<li>Layered Files</li>
					<li>PSD Attached</li>
				</ul>
			</div>
			<div class="col-md-4">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla debitis
					vitae temporibus enim sed. Optio, reprehenderit, ex.</p>
				<p>Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed. Optio, reprehenderit, ex.</p>
				<a href="#" class="btn btn-default">Contact Us</a>
			</div>
		</div>
	</div>
</section>
<!-- works -->
<section id="related-projects" class="page-section light-bg border-tb">
	<div class="container">
		<div class="col-md-12" style="text-align: center">
			<!-- Heading -->
			<h2 class="title">CÁC DỰ ÁN LIÊN QUAN</h2>
		</div>
		<div class="row">
			<div class="col-md-12 portfolio-grid text-center">
				<div class="owl-carousel pagination-1 light-switch" data-pagination="true" data-items="4"
					 data-autoplay="true" data-navigation="false">
					<div class="grids col-xs-12 col-sm-4 col-md-3">
						<div class="grid">
							<img src="<?php echo base_url(); ?>assets/img/sections/portfolio/thumb/2.jpg" width="400" height="273" alt="Recent Work"
								 class="img-responsive" />
							<div class="figcaption">
								<h4>Commercial</h4>
								<!-- Image Popup-->
								<a href="img/sections/portfolio/2.jpg" data-rel="prettyPhoto[portfolio]">
									<i class="fa fa-search"></i>
								</a>
								<a href="portfolio-single.html">
									<i class="fa fa-link"></i>
								</a></div>
						</div>
					</div>
					<div class="grids col-xs-12 col-sm-4 col-md-3">
						<div class="grid">
							<img src="<?php echo base_url(); ?>assets/img/sections/portfolio/thumb/3.jpg" width="400" height="273" alt="Recent Work"
								 class="img-responsive" />
							<div class="figcaption">
								<h4>Commercial</h4>
								<!-- Image Popup-->
								<a href="<?php echo base_url(); ?>assets/img/sections/portfolio/3.jpg" data-rel="prettyPhoto[portfolio]">
									<i class="fa fa-search"></i>
								</a>
								<a href="portfolio-single.html">
									<i class="fa fa-link"></i>
								</a></div>
						</div>
					</div>
					<div class="grids col-xs-12 col-sm-4 col-md-3">
						<div class="grid">
							<img src="<?php echo base_url(); ?>assets/img/sections/portfolio/thumb/4.jpg" width="400" height="273" alt="Recent Work"
								 class="img-responsive" />
							<div class="figcaption">
								<h4>Commercial</h4>
								<!-- Image Popup-->
								<a href="<?php echo base_url(); ?>assets/img/sections/portfolio/4.jpg" data-rel="prettyPhoto[portfolio]">
									<i class="fa fa-search"></i>
								</a>
								<a href="portfolio-single.html">
									<i class="fa fa-link"></i>
								</a></div>
						</div>
					</div>
					<div class="grids col-xs-12 col-sm-4 col-md-3">
						<div class="grid">
							<img src="<?php echo base_url(); ?>assets/img/sections/portfolio/thumb/5.jpg" width="400" height="273" alt="Recent Work"
								 class="img-responsive" />
							<div class="figcaption">
								<h4>Commercial</h4>
								<!-- Image Popup-->
								<a href="<?php echo base_url(); ?>assets/img/sections/portfolio/5.jpg" data-rel="prettyPhoto[portfolio]">
									<i class="fa fa-search"></i>
								</a>
								<a href="portfolio-single.html">
									<i class="fa fa-link"></i>
								</a></div>
						</div>
					</div>
					<div class="grids col-xs-12 col-sm-4 col-md-3">
						<div class="grid">
							<img src="<?php echo base_url(); ?>assets/img/sections/portfolio/thumb/6.jpg" width="400" height="273" alt="Recent Work"
								 class="img-responsive" />
							<div class="figcaption">
								<h4>Commercial</h4>
								<!-- Image Popup-->
								<a href="<?php echo base_url(); ?>assets/img/sections/portfolio/6.jpg" data-rel="prettyPhoto[portfolio]">
									<i class="fa fa-search"></i>
								</a>
								<a href="portfolio-single.html">
									<i class="fa fa-link"></i>
								</a></div>
						</div>
					</div>
					<div class="grids col-xs-12 col-sm-4 col-md-3">
						<div class="grid">
							<img src="<?php echo base_url(); ?>assets/img/sections/portfolio/thumb/8.jpg" width="400" height="273" alt="Recent Work"
								 class="img-responsive" />
							<div class="figcaption">
								<h4>Commercial</h4>
								<!-- Image Popup-->
								<a href="<?php echo base_url(); ?>assets/img/sections/portfolio/8.jpg" data-rel="prettyPhoto[portfolio]">
									<i class="fa fa-search"></i>
								</a>
								<a href="portfolio-single.html">
									<i class="fa fa-link"></i>
								</a></div>
						</div>
					</div>
					<div class="grids col-xs-12 col-sm-4 col-md-3">
						<div class="grid">
							<img src="<?php echo base_url(); ?>assets/img/sections/portfolio/thumb/8.jpg" width="400" height="273" alt="Recent Work"
								 class="img-responsive" />
							<div class="figcaption">
								<h4>Commercial</h4>
								<!-- Image Popup-->
								<a href="<?php echo base_url(); ?>assets/img/sections/portfolio/8.jpg" data-rel="prettyPhoto[portfolio]">
									<i class="fa fa-search"></i>
								</a>
								<a href="portfolio-single.html">
									<i class="fa fa-link"></i>
								</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
