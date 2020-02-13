<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Sticky Navbar -->
<section class="slider border-bottom line tp-banner-fullscreen-container">
	<div class="tp-banner">
		<ul>
			<?php foreach ($banners as $item): ?>
				<li data-delay="7000" data-transition="fade" data-slotamount="7" data-masterspeed="2000">
					<img src="<?php echo base_url().$item->path_big; ?>" alt="" data-bgfit="cover" data-bgposition="center top"
						 data-bgrepeat="no-repeat" />
				</li>
			<?php endforeach; ?>
		</ul>
		<div class="tp-bannertimer"></div>
	</div>
</section>
<style type="text/css">
	.title-index{
		line-height: 1.5;
		font-size: 22px;
		font-weight: 600;
		margin: 0px;
		padding: 0px;
		text-transform: uppercase;
	}
	.tb-title-home-header{
		margin-bottom: 40px !important;
	}
	.tb-title-home-header::after {
		content: "";
		display: inline-block;
		background-color: #1CA57F;
		width: 76px;
		height: 6px;
		vertical-align: middle;
	}
</style>

<section id="fun-factor" class="page-section">
	<div class="container">
		<div class="row text-right fact-counter">
			<div class="col-sm-6 col-md-3 bottom-xs-pad-30 fun-icon">
				<!-- Icon -->
				<div class="count-number text-color" data-count="92">
					<span class="counter"></span>
				</div>
				<!-- Title -->
				<h3>Dự án</h3>
			</div>
			<div class="col-sm-6 col-md-3 bottom-xs-pad-30">
				<!-- Icon -->
				<div class="count-number text-color" data-count="83">
					<span class="counter"></span>
				</div>
				<!-- Title -->
				<h3>KHÁCH HÀNG</h3>
			</div>
			<div class="col-sm-6 col-md-3 bottom-xs-pad-30">
				<!-- Icon -->
				<div class="count-number text-color" data-count="67">
					<span class="counter"></span>
				</div>
				<!-- Title -->
				<h3>GIẢI THƯỞNG</h3>
			</div>
			<div class="col-sm-6 col-md-3 bottom-xs-pad-30">
				<!-- Icon -->
				<div class="count-number text-color" data-count="36">
					<span class="counter"></span>
				</div>
				<!-- Title -->
				<h3>Thành phố</h3>
			</div>
		</div>
	</div>
</section>
<section id="services" class="page-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="tb-title-home text-center">
					<div class="tb-title-home-header" >
						<h2 class="tb-headding-two title-index">Dịch Vụ Chúng Tôi Cung Cấp Đến Khách Hàng</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="owl-carousel navigation-1 text-left" data-pagination="false" data-items="4"
				 data-autoplay="true" data-navigation="true">
				<?php foreach ($services as $item): ?>
					<div class="col-sm-4 col-md-4 col-xs-12 service-item" data-animation="fadeInLeft">
						<div class="grid-item">
							<div class="grid">
								<img src="<?php echo base_url().$item->image_big; ?>" width="420" height="280" alt="<?php echo $item->title; ?>"
									 class="img-responsive" />
								<div class="figcaption">
									<a href="<?php echo base_url(); ?>chi-tiet-du-an/<?php echo $item->id; ?>"></a>
									<a >
										<i class="fa"><?php echo $item->title; ?></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
<!-- Services -->
<section class="product-home" style="background-color: #FFFFFF !important; padding-bottom: 20px !important; padding-top: 20px !important">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="tb-title-home text-center">
					<div class="tb-title-home-header">
						<h2 class="tb-headding-two text-light title-index">Mẫu Chữ Thường Dùng Trong Quảng Cáo</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-lg-12">
				<div class="owl-carousel navigation-1 opacity text-left" data-pagination="false" data-items="4"
					 data-autoplay="true" data-navigation="true">
					<div class="col-sm-6 col-md-4 col-xs-12">
						<p class="text-center">
							<a href="<?php echo base_url(); ?>assets/img/sections/services/1.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
								<img s src="<?php echo base_url(); ?>assets/img/sections/services/1.jpg" width="420" height="280" alt="" />
							</a>
						</p>
						<h4>
							<a href="#">General Contracting</a>
						</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
							deserunt a enim harum eaque fugit.</p>
						<a href="#" class="read-more">Xem thêm</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="works" class="page-section" style="background-color: #F7F7F7 !important; padding-bottom: 20px !important; padding-top: 20px !important">
	<div class="row">
		<div class="col-lg-12">
			<div class="tb-title-home text-center">
				<div class="tb-title-home-header">
					<h2 class="tb-headding-two title-index">Các Dự Án Nổi Bật</h2>
				</div>
			</div>
			<div class="wrap-title d-flex justify-content-center mt-3">
				<div class="tb-dec-home text-center d-none d-sm-block">
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid white general-section">
		<div id="mix-container" class="portfolio-grid">
			<?php foreach ($projects as $item): ?>
				<div class="grids col-xs-12 col-sm-4 col-md-3 mix all commercial">
					<div class="grid">
						<img src="<?php echo base_url(); ?><?php echo $item->image_big; ?>" width="400" height="273" alt="<?php echo $item->title; ?>"
							 class="img-responsive" />
						<div class="figcaption">
							<a href="<?php echo base_url(); ?>chi-tiet-du-an/<?php echo $item->id; ?>">
								<i>Xem chi tiết</i>
							</a></div>
						<div class="caption-block">
							<h4><?php echo $item->title; ?></h4>
							<p><?php echo $item->summary; ?></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!-- works -->

<section id="team" class="page-section light-bg border-tb">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="tb-title-home text-center">
					<div class="tb-title-home-header" >
						<h2 class="tb-headding-two title-index">THÀNH VIÊN</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="owl-carousel navigation-1" data-pagination="false" data-items="5" data-autoplay="true"
				 data-navigation="true">
				<?php foreach ($members as $item): ?>
					<div class="col-sm-6 col-md-3 bottom-xs-pad-20">
						<div class="team-item dark-bg">
							<div class="image">
								<!-- Image -->
								<img src="<?php echo base_url().$item->avatar; ?>" alt="<?php echo $item->name; ?> <?php echo $item->position; ?>" title="<?php echo $item->name; ?>" width="270" height="270" />
							</div>
							<div class="description">
								<h4 class="name"><?php echo $item->name; ?></h4>
								<div class="role"><?php echo $item->position; ?></div>
								<p><?php echo $item->description ; ?></p>
							</div>
						</div>
					</div>
				<?php endforeach; ?>

			</div>
		</div>
	</div>
</section>

<section class="news-home" style="background-color: #F7F7F7 !important; padding-bottom: 20px !important; padding-top: 20px !important">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="tb-title-home text-center">
					<div class="tb-title-home-header" >
						<h2 class="tb-headding-two title-index">Tin tức mới</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-lg-12">
				<div class="owl-carousel navigation-1 opacity text-left" data-pagination="false" data-items="4"
					 data-autoplay="true" data-navigation="true">
					<?php foreach ($popular_posts as $item): ?>
						<div class="col-sm-4 col-md-4 col-xs-12">
							<p class="text-center">
								<a href="<?php echo base_url(); ?>assets/img/sections/services/1.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
									<img src="<?php echo base_url().$item->image_mid; ?>" width="420" height="280" alt="" />
								</a>
							</p>
							<h4>
								<a href="<?php echo base_url().'post/'.html_escape($item->title_slug); ?>"><?php echo $item->title; ?></a>
							</h4>
							<p><?php echo $item->summary; ?></p>
							<a href="<?php echo base_url().'post/'.html_escape($item->title_slug); ?>" class="read-more">Xem thêm</a>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="owl-dots disabled"></div>
			</div>
		</div>
	</div>
</section>
<section id="testimonials" class="page-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="tb-title-home text-center">
					<div class="tb-title-home-header" >
						<h2 class="tb-headding-two title-index">Nhận xét của khách hàng</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 testimonials">
				<div class="owl-carousel pagination-2 text-center color-switch" data-pagination="true" data-autoplay="true"
					 data-navigation="false" data-singleitem="true">
					<div class="item">
						<div class="quote">
							<p>&quot;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
								intereste. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
								intereste.&quot;</p>
						</div>
						<div class="client-details text-center left-align">
							<div class="client-image">
								<!-- Image -->
								<img class="img-circle" src="<?php echo base_url(); ?>assets/img/sections/testimonials/1.jpg" width="80" height="80"
									 alt="" />
							</div>
							<div class="client-details">
								<!-- Name -->
								<strong class="text-color">John Doe</strong>
								<!-- Company -->

								<span>Designer, zozothemes</span></div>
						</div>
					</div>
					<div class="item">
						<div class="quote">
							<p>&quot;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
								intereste. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
								intereste.&quot;</p>
						</div>
						<div class="client-details text-center left-align">
							<div class="client-image">
								<!-- Image -->
								<img class="img-circle" src="<?php echo base_url(); ?>assets/img/sections/testimonials/1.jpg" width="80" height="80"
									 alt="" />
							</div>
							<div class="client-details">
								<!-- Name -->
								<strong class="text-color">John Doe</strong>
								<!-- Company -->

								<span>Designer, zozothemes</span></div>
						</div>
					</div>
					<div class="item">
						<div class="quote">
							<p>&quot;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
								intereste. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
								intereste.&quot;</p>
						</div>
						<div class="client-details text-center left-align">
							<div class="client-image">
								<!-- Image -->
								<img class="img-circle" src="<?php echo base_url(); ?>assets/img/sections/testimonials/1.jpg" width="80" height="80"
									 alt="" />
							</div>
							<div class="client-details">
								<!-- Name -->
								<strong class="text-color">John Doe</strong>
								<!-- Company -->

								<span>Designer, zozothemes</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- testimonials -->
<!--<section id="clients" class="page-section tb-pad-20 light-bg border-tb">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="col-md-12 text-center">-->
<!--				<div class="owl-carousel" data-pagination="false" data-items="6" data-autoplay="true"-->
<!--					 data-navigation="false">-->
<!--					<a href="#">-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/1.png" width="170" height="90" alt="" />-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/11.png" width="170" height="90" alt="" /></a>-->
<!--					<a href="#">-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/2.png" width="170" height="90" alt="" />-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/22.png" width="170" height="90" alt="" /></a>-->
<!--					<a href="#">-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/1.png" width="170" height="90" alt="" />-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/11.png" width="170" height="90" alt="" /></a>-->
<!--					<a href="#">-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/2.png" width="170" height="90" alt="" />-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/22.png" width="170" height="90" alt="" /></a>-->
<!--					<a href="#">-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/1.png" width="170" height="90" alt="" />-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/11.png" width="170" height="90" alt="" /></a>-->
<!--					<a href="#">-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/2.png" width="170" height="90" alt="" />-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/22.png" width="170" height="90" alt="" /></a>-->
<!--					<a href="#">-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/1.png" width="170" height="90" alt="" />-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/11.png" width="170" height="90" alt="" /></a>-->
<!--					<a href="#">-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/2.png" width="170" height="90" alt="" />-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/22.png" width="170" height="90" alt="" /></a></div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</section>-->
<!-- clients -->
<div id="get-quote" class="bg-color black text-center">
	<div class="container">
		<div class="row get-a-quote">
			<div class="col-md-12">Nhận báo giá miễn phí / Cần giúp đỡ ?
				<a class="black" href="<?php echo lang_base_url().'lien-he'; ?>">Liên hệ với chúng tôi</a></div>
		</div>
		<div class="move-top bg-color page-scroll">
			<a href="#page">
				<i class="glyphicon glyphicon-arrow-up"></i>
			</a>
		</div>
	</div>
</div>
