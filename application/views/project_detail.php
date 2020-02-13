<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="works" class="page-section">
	<div class="container">
		<div class="text-left" style="width: 100%">
			<!-- Heading -->
			<h2 class="title">Chi tiết dự án</h2>
		</div>
		<div class="row">
			<div class="col-md-5">
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
			</div>
			<div class="col-md-7">
				<?php echo $project->content; ?>
			</div>
			<div class="col-md-12">
				<div style="float: left">
					<div class="fb-like"data-href="<?php echo base_url().'chi-tiet-du-an/'.$project->id; ?>" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
				</div>
			</div>
			<div class="fb-comments col-md-12" data-href="<?php echo base_url().'chi-tiet-du-an/'.$project->id; ?>" data-width="" data-numposts="5"></div>

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
