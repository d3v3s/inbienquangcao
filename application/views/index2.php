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

<!-- Services -->
<section id="services" class="page-section" style="background-color: #FFFFFF !important; padding-bottom: 20px !important; padding-top: 20px !important">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="tb-title-home text-center">
					<div class="tb-title-home-header">
						<h2 class="tb-headding-two text-light title-index">Dịch Vụ Chúng Tôi Cung Cấp Đến Khách Hàng</h2>
					</div>
				</div>
			</div>F
		</div>
		<div class="row mt-4">
			<div class="col-lg-12">
				<div class="owl-carousel navigation-1 opacity text-left" data-pagination="false" data-items="4"
					 data-autoplay="true" data-navigation="true">
					<?php foreach ($services as $item): ?>
						<div class="col-sm-6 col-md-4 col-xs-12">
							<p class="text-center">
								<a href="">
									<img s src="<?php echo base_url().$item->image_big; ?>" width="420" height="280" alt="" />
								</a>
							</p>
							<h4>
								<a href="#"><?php echo $item->title; ?></a>
							</h4>
							<p><?php echo $item->summary; ?></p>
							<a href="<?php echo base_url(); ?>du-an/<?php echo $item->slug; ?>" class="read-more">Xem thêm</a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="works" class="page-section">
	<div class="container">
		<div class="mixed-grid pad general-section">
			<div class="filter-menu">
				<ul class="nav black works-filters text-center" id="filters">
					<li class="filter active" data-filter=".all">Show All</li>
					<li class="filter" data-filter=".commercial">Commercial</li>
					<li class="filter" data-filter=".education">Education</li>
					<li class="filter" data-filter=".healthcare">Healthcare</li>
					<li class="filter" data-filter=".residential">Residential</li>
				</ul>
			</div>
			<div class="clearfix"></div>
			<div class="masonry-grid grid-col-3 black">
				<div class="grid-sizer"></div>
				<!-- Item 1 -->
				<div class="grid-item all commercial">
					<div class="grid">
						<img src="<?php echo base_url(); ?>assets/img/sections/portfolio/thumb/1.jpg" width="400" height="273" alt="Recent Work"
							 class="img-responsive" />
						<div class="figcaption">
							<h4>Healthcare</h4>
							<!-- Image Popup-->
							<a href="img/sections/portfolio/1.jpg" data-rel="prettyPhoto[portfolio]">
								<i class="fa fa-search"></i>
							</a>
							<a href="portfolio-single.html">
								<i class="fa fa-link"></i>
							</a></div>
					</div>
				</div>
				<!-- Item 1 Ends-->
				<!-- Item 2 -->
				<div class="grid-item all commercial healthcare">
					<div class="grid">
						<img src="<?php echo base_url(); ?>assets/img/sections/portfolio/thumb/2.jpg" width="400" height="273" alt="Recent Work"
							 class="img-responsive" />
						<div class="figcaption">
							<h4>Healthcare</h4>
							<!-- Image Popup-->
							<a href="img/sections/portfolio/2.jpg" data-rel="prettyPhoto[portfolio]">
								<i class="fa fa-search"></i>
							</a>
							<a href="portfolio-single.html">
								<i class="fa fa-link"></i>
							</a></div>
					</div>
				</div>
				<!-- Item 2 Ends-->
				<!-- Item 3 -->
				<div class="grid-item all education">
					<div class="grid">
						<img src="<?php echo base_url(); ?>assets/img/sections/portfolio/thumb/3.jpg" width="400" height="273" alt="Recent Work"
							 class="img-responsive" />
						<div class="figcaption">
							<h4>Healthcare</h4>
							<!-- Image Popup-->
							<a href="img/sections/portfolio/3.jpg" data-rel="prettyPhoto[portfolio]">
								<i class="fa fa-search"></i>
							</a>
							<a href="portfolio-single.html">
								<i class="fa fa-link"></i>
							</a></div>
					</div>
				</div>
				<!-- Item 3 Ends-->
				<!-- Item 4 -->
				<div class="grid-item all education residential">
					<div class="grid">
						<img src="<?php echo base_url(); ?>assets/img/sections/portfolio/thumb/4.jpg" width="400" height="273" alt="Recent Work"
							 class="img-responsive" />
						<div class="figcaption">
							<h4>Healthcare</h4>
							<!-- Image Popup-->
							<a href="img/sections/portfolio/4.jpg" data-rel="prettyPhoto[portfolio]">
								<i class="fa fa-search"></i>
							</a>
							<a href="portfolio-single.html">
								<i class="fa fa-link"></i>
							</a></div>
					</div>
				</div>
				<!-- Item 4 Ends-->
				<!-- Item 5 -->
				<div class="grid-item all commercial">
					<div class="grid">
						<img src="<?php echo base_url(); ?>assets/img/sections/portfolio/thumb/5.jpg" width="400" height="273" alt="Recent Work"
							 class="img-responsive" />
						<div class="figcaption">
							<h4>Healthcare</h4>
							<!-- Image Popup-->
							<a href="img/sections/portfolio/5.jpg" data-rel="prettyPhoto[portfolio]">
								<i class="fa fa-search"></i>
							</a>
							<a href="portfolio-single.html">
								<i class="fa fa-link"></i>
							</a></div>
					</div>
				</div>
				<!-- Item 5 Ends-->
				<!-- Item 6 -->
				<div class="grid-item all healthcare commercial">
					<div class="grid">
						<img src="<?php echo base_url(); ?>assets/img/sections/portfolio/thumb/6.jpg" width="400" height="273" alt="Recent Work"
							 class="img-responsive" />
						<div class="figcaption">
							<h4>Healthcare</h4>
							<!-- Image Popup-->
							<a href="img/sections/portfolio/6.jpg" data-rel="prettyPhoto[portfolio]">
								<i class="fa fa-search"></i>
							</a>
							<a href="portfolio-single.html">
								<i class="fa fa-link"></i>
							</a></div>
					</div>
				</div>
				<!-- Item 6 Ends-->
				<!-- Item 7 -->
				<div class="grid-item all healthcare commercial residential">
					<div class="grid">
						<img src="<?php echo base_url(); ?>assets/img/sections/portfolio/thumb/7.jpg" width="400" height="273" alt="Recent Work"
							 class="img-responsive" />
						<div class="figcaption">
							<h4>Healthcare</h4>
							<!-- Image Popup-->
							<a href="img/sections/portfolio/7.jpg" data-rel="prettyPhoto[portfolio]">
								<i class="fa fa-search"></i>
							</a>
							<a href="portfolio-single.html">
								<i class="fa fa-link"></i>
							</a></div>
					</div>
				</div>
				<!-- Item 7 Ends-->
				<!-- Item 8 -->
				<div class="grid-item all commercial healthcare education">
					<div class="grid">
						<img src="<?php echo base_url(); ?>assets/img/sections/portfolio/thumb/8.jpg" width="400" height="273" alt="Recent Work"
							 class="img-responsive" />
						<div class="figcaption">
							<h4>Healthcare</h4>
							<!-- Image Popup-->
							<a href="img/sections/portfolio/8.jpg" data-rel="prettyPhoto[portfolio]">
								<i class="fa fa-search"></i>
							</a>
							<a href="portfolio-single.html">
								<i class="fa fa-link"></i>
							</a></div>
					</div>
				</div>
				<!-- Item 8 Ends-->
				<!-- Item 9 -->
				<div class="grid-item all commercial residential">
					<div class="grid">
						<img src="<?php echo base_url(); ?>assets/img/sections/portfolio/thumb/9.jpg" width="400" height="273" alt="Recent Work"
							 class="img-responsive" />
						<div class="figcaption">
							<h4>Healthcare</h4>
							<!-- Image Popup-->
							<a href="img/sections/portfolio/9.jpg" data-rel="prettyPhoto[portfolio]">
								<i class="fa fa-search"></i>
							</a>
							<a href="portfolio-single.html">
								<i class="fa fa-link"></i>
							</a></div>
					</div>
				</div>
				<!-- Item 9 Ends-->
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
							<a href="<?php echo base_url(); ?>du-an/<?php echo $item->id; ?>">
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
<section id="typographys" class="page-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="tb-title-home text-center">
					<div class="tb-title-home-header" >
						<h2 class="tb-headding-two title-index">Mẫu Chữ Thường Dùng Trong Quảng Cáo</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="owl-carousel navigation-1 text-left" data-pagination="false" data-items="4"
				 data-autoplay="true" data-navigation="true">
				<?php foreach ($typographys as $item): ?>
					<div class="col-sm-4 col-md-4 col-xs-12 service-item" data-animation="fadeInLeft">
						<div class="grid-item">
							<div class="grid">
								<img src="<?php echo base_url().$item->image_big; ?>" width="420" height="280" alt="<?php echo $item->title; ?>"
									 class="img-responsive" />
								<div class="figcaption">
									<a href="<?php echo base_url(); ?>du-an/<?php echo $item->id; ?>">
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
<section class="page-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="tb-title-home text-center">
					<div class="tb-title-home-header" >
						<h4>uy tín là số 1</h4>
						<h2 class="tb-headding-two title-index">Mẫu Chữ Thường Dùng Trong Quảng Cáo</h2>
					</div>
				</div>
				<div class="wrap-title d-flex justify-content-center mt-3">
					<div class="tb-dec-home text-center d-none d-sm-block">
						<p style="color: #797f84 !important;">Chúng tôi luôn nổ lực tối ưu quy trình làm việc để tối đa lợi ích cho khách hàng và đạt hiệu quả cao, tránh những rủi ro phát sinh.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-md-3">
				<div class="wrap-work-step ">
					<div class="tb-work-image position-relative d-inline-block">
						<img alt="step one" data-src="https://quangcaotaybac.vn/wp-content/themes/qctaybac/image/doi-ngu-nhan-su.jpg" class=" lazyloaded" src="https://quangcaotaybac.vn/wp-content/themes/qctaybac/image/doi-ngu-nhan-su.jpg"><noscript><img src="https://quangcaotaybac.vn/wp-content/themes/qctaybac/image/doi-ngu-nhan-su.jpg" alt="step one"></noscript>
						<div class="work-step-one position-absolute">
							<span>01</span>
						</div>
					</div>
					<div class="tb-work-content text-center mt-4">
						<div class="tb-work-content-title">
							<h5>Đội Ngũ Nhân Sự</h5>
						</div>
						<div class="tb-work-content-dec mt-2">
							Với hơn 36 nhân viên kinh ngiệm thi công thực tế  trên 12 năm
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="wrap-work-step mt-4 mt-lg-0">
					<div class="tb-work-image position-relative d-inline-block">
						<img alt="step one" data-src="https://quangcaotaybac.vn/wp-content/themes/qctaybac/image/he-thong-may-moc.jpg" class=" lazyloaded" src="https://quangcaotaybac.vn/wp-content/themes/qctaybac/image/he-thong-may-moc.jpg"><noscript><img src="https://quangcaotaybac.vn/wp-content/themes/qctaybac/image/he-thong-may-moc.jpg" alt="step one"></noscript>
						<div class="work-step-one position-absolute">
							<span>02</span>
						</div>
					</div>
					<div class="tb-work-content text-center mt-4">
						<div class="tb-work-content-title">
							<h5>Hệ Thống Máy Móc</h5>
						</div>
						<div class="tb-work-content-dec mt-2">
							Sử dụng 100% máy móc trong sản xuất đảm bảo độ tinh xảo của sản phẩm tới từng milimet
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="wrap-work-step mt-4 mt-lg-0">
					<div class="tb-work-image position-relative d-inline-block">
						<img alt="step one" data-src="https://quangcaotaybac.vn/wp-content/themes/qctaybac/image/quang-cao-tay-bac-uy-tin-chat-luong.jpg" class=" lazyloaded" src="https://quangcaotaybac.vn/wp-content/themes/qctaybac/image/quang-cao-tay-bac-uy-tin-chat-luong.jpg"><noscript><img src="https://quangcaotaybac.vn/wp-content/themes/qctaybac/image/quang-cao-tay-bac-uy-tin-chat-luong.jpg" alt="step one"></noscript>
						<div class="work-step-one position-absolute">
							<span>03</span>
						</div>
					</div>
					<div class="tb-work-content text-center mt-4">
						<div class="tb-work-content-title">
							<h5>Uy Tín</h5>
						</div>
						<div class="tb-work-content-dec mt-2">
							Đảm bảo tiến độ và chất lượng cho từng công trình, chế độ bảo hành số 1 trên thị trường
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="wrap-work-step mt-4 mt-lg-0">
					<div class="tb-work-image position-relative d-inline-block">
						<img alt="step one" data-src="https://quangcaotaybac.vn/wp-content/themes/qctaybac/image/step-4.jpg" class=" ls-is-cached lazyloaded" src="https://quangcaotaybac.vn/wp-content/themes/qctaybac/image/step-4.jpg"><noscript><img src="https://quangcaotaybac.vn/wp-content/themes/qctaybac/image/step-4.jpg" alt="step one"></noscript>
						<div class="work-step-one position-absolute">
							<span>04</span>
						</div>
					</div>
					<div class="tb-work-content text-center mt-4">
						<div class="tb-work-content-title">
							<h5>Giá Thành Hợp Lý</h5>
						</div>
						<div class="tb-work-content-dec mt-2">
							Sản xuất trực tiếp không qua trung gian, tối ưu lợi nhuận cho khách hàng là tiêu chí của Chúng tôi
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

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
