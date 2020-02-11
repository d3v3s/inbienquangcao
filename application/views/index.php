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
<section id="services" class="page-section">
	<div class="container">
		<div class="row">
			<div class="owl-carousel navigation-1 opacity text-left" data-pagination="false" data-items="3"
				 data-autoplay="true" data-navigation="true">
				<div class="col-sm-4 col-md-4 col-xs-12" data-animation="fadeInLeft">
					<p class="text-center">
						<a href="img/sections/services/1.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
							<img src="<?php echo base_url(); ?>assets/img/sections/services/1.jpg" width="420" height="280" alt="" />
						</a>
					</p>
					<h3>
						<a href="#">General Contracting</a>
					</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
						deserunt a enim harum eaque fugit.</p>
					<a href="#" class="btn btn-default">Read More</a>
				</div>
				<div class="col-sm-4 col-md-4 col-xs-12" data-animation="fadeInUp">
					<p class="text-center">
						<a href="img/sections/services/2.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
							<img src="<?php echo base_url(); ?>assets/img/sections/services/2.jpg" width="420" height="280" alt="" />
						</a>
					</p>
					<h3>
						<a href="#">Construction Consultant</a>
					</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
						deserunt a enim harum eaque fugit.</p>
					<a href="#" class="btn btn-default">Read More</a>
				</div>
				<div class="col-sm-4 col-md-4 col-xs-12" data-animation="fadeInRight">
					<p class="text-center">
						<a href="img/sections/services/3.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
							<img src="<?php echo base_url(); ?>assets/img/sections/services/3.jpg" width="420" height="280" alt="" />
						</a>
					</p>
					<h3>
						<a href="#">House Renovation</a>
					</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
						deserunt a enim harum eaque fugit.</p>
					<a href="#" class="btn btn-default">Read More</a>
				</div>
				<div class="col-sm-4 col-md-4 col-xs-12">
					<p class="text-center">
						<a href="img/sections/services/4.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
							<img src="<?php echo base_url(); ?>assets/img/sections/services/4.jpg" width="420" height="280" alt="" />
						</a>
					</p>
					<h3>
						<a href="#">Metal Roofing</a>
					</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
						deserunt a enim harum eaque fugit.</p>
					<a href="#" class="btn btn-default">Read More</a>
				</div>
				<div class="col-sm-4 col-md-4 col-xs-12">
					<p class="text-center">
						<a href="img/sections/services/5.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
							<img src="<?php echo base_url(); ?>assets/img/sections/services/5.jpg" width="420" height="280" alt="" />
						</a>
					</p>
					<h3>
						<a href="#">Green House</a>
					</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
						deserunt a enim harum eaque fugit.</p>
					<a href="#" class="btn btn-default">Read More</a>
				</div>
				<div class="col-sm-4 col-md-4 col-xs-12">
					<p class="text-center">
						<a href="img/sections/services/6.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
							<img src="<?php echo base_url(); ?>assets/img/sections/services/6.jpg" width="420" height="280" alt="" />
						</a>
					</p>
					<h3>
						<a href="#">Tiling and Painting</a>
					</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
						deserunt a enim harum eaque fugit.</p>
					<a href="#" class="btn btn-default">Read More</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Services -->
<section id="who-we-are" class="page-section light-bg border-tb">
	<div class="container who-we-are">
		<div class="col-md-12">
			<div class="row">
				<div class="section-heading">
					<div class="section-title text-left">
						<!-- Title -->
						<h2 class="title">Who We Are</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<p class="description upper">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio
					ipsum. Suspendisse cursus malesuada facilisis.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus
					malesuada facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum.
					Suspendisse cursus malesuada facilisis. Suspendisse cursus malesuada facilisis. Nunc consectetur odio sed
					dolor tincidunt porttitor.</p>
				<div class="row">
					<div class="col-md-6">
						<ul class="arrow-style">
							<li>Lorem ipsum dolor sit amet.</li>
							<li>Consectetur adipiscing elit.</li>
							<li>Vestibulum nec odio ipsum.</li>
							<li>Vestibulum nec odio ipsum.</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="arrow-style">
							<li>Lorem ipsum dolor sit amet.</li>
							<li>Consectetur adipiscing elit.</li>
							<li>Vestibulum nec odio ipsum.</li>
							<li>Vestibulum nec odio ipsum.</li>
						</ul>
					</div>
				</div>
				<h3>
					<a href="#" class="hover">Download Our Brochure -
						<i class="icon-file-pdf red"></i></a>
				</h3>
			</div>
			<div class="col-md-4">
				<div class="item-box bottom-pad-10">
					<a>
						<i class="icon-star13 i-5x bg-color"></i>
						<h4>What We Do?</h4>
						<p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspendisse cursus
							malesuada facilisis.</p>
					</a>
					<a>
						<i class="icon-heart18 i-5x bg-color"></i>
						<h4>Why People Like Us?</h4>
						<p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspendisse cursus
							malesuada facilisis.</p>
					</a>
					<a>
						<i class="icon-gift6 i-5x bg-color"></i>
						<h4>What We Offer?</h4>
						<p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum.</p>
					</a></div>
			</div>
		</div>
	</div>
</section>
<!-- who-we-are -->
<section id="works" class="page-section">
	<div class="container general-section">
		<div class="section-heading">
			<div class="text-left">
				<!-- Title -->
				<h2 class="title">Dự án</h2>
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
							<!-- Image Popup-->
							<a href="<?php echo base_url().$item->image_big; ?>" data-rel="prettyPhoto[portfolio]">
								<i class="fa fa-search"></i>
							</a>
							<a href="<?php echo base_url(); ?>chi-tiet-du-an/<?php echo $item->id; ?>">
								<i class="fa fa-link"></i>
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
		<div class="section-heading">
			<div class="text-left">
				<!-- Title -->
				<h2 class="title">Thành viên</h2>
			</div>
		</div>
		<div class="row text-center">
			<div class="owl-carousel navigation-1" data-pagination="false" data-items="4" data-autoplay="true"
				 data-navigation="true">
				<div class="col-sm-6 col-md-3 bottom-xs-pad-20">
					<div class="team-item dark-bg">
						<div class="image">
							<!-- Image -->
							<img src="<?php echo base_url(); ?>assets/img/sections/team/1.jpg" alt="" title="" width="270" height="270" />
						</div>
						<div class="description">
							<!-- Name -->
							<h4 class="name">Phillip Parisis</h4>
							<!-- Designation -->
							<div class="role">Project Manager</div>
							<!-- Text -->
							<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
								intereste.</p>
						</div>
						<div class="social-icon">
							<!-- Social Icons -->
							<a href="#">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#">
								<i class="fa fa-google"></i>
							</a>
							<a href="#">
								<i class="fa fa-pinterest"></i>
							</a></div>
					</div>
				</div>
				<!-- .employee  -->
				<div class="col-sm-6 col-md-3 bottom-xs-pad-20">
					<div class="team-item dark-bg">
						<div class="image">
							<!-- Image -->
							<img src="<?php echo base_url(); ?>assets/img/sections/team/2.jpg" alt="" title="" width="270" height="270" />
						</div>
						<div class="description">
							<!-- Name -->
							<h4 class="name">Simo Kruyt</h4>
							<!-- Designation -->
							<div class="role">Construction Manager</div>
							<!-- Text -->
							<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
								intereste.</p>
						</div>
						<div class="social-icon">
							<!-- Social Icons -->
							<a href="#">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#">
								<i class="fa fa-google"></i>
							</a>
							<a href="#">
								<i class="fa fa-pinterest"></i>
							</a></div>
					</div>
				</div>
				<!-- .employee -->
				<div class="col-sm-6 col-md-3 bottom-xs-pad-20">
					<div class="team-item dark-bg">
						<div class="image">
							<!-- Image -->
							<img src="<?php echo base_url(); ?>assets/img/sections/team/3.jpg" alt="" title="" width="270" height="270" />
						</div>
						<div class="description">
							<!-- Name -->
							<h4 class="name">Jorge Canaveral</h4>
							<!-- Designation -->
							<div class="role">Architect</div>
							<!-- Text -->
							<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
								intereste.</p>
						</div>
						<div class="social-icon">
							<!-- Social Icons -->
							<a href="#">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#">
								<i class="fa fa-google"></i>
							</a>
							<a href="#">
								<i class="fa fa-pinterest"></i>
							</a></div>
					</div>
				</div>
				<!-- .employee -->
				<div class="col-sm-6 col-md-3 bottom-xs-pad-20">
					<div class="team-item dark-bg">
						<div class="image">
							<!-- Image -->
							<img src="<?php echo base_url(); ?>assets/img/sections/team/4.jpg" alt="" title="" width="270" height="270" />
						</div>
						<div class="description">
							<!-- Name -->
							<h4 class="name">Aimee Devlin</h4>
							<!-- Designation -->
							<div class="role">Sales Manager</div>
							<!-- Text -->
							<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
								intereste.</p>
						</div>
						<div class="social-icon">
							<!-- Social Icons -->
							<a href="#">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#">
								<i class="fa fa-google"></i>
							</a>
							<a href="#">
								<i class="fa fa-pinterest"></i>
							</a></div>
					</div>
				</div>
				<!-- .employee -->
				<div class="col-sm-6 col-md-3 bottom-xs-pad-20">
					<div class="team-item dark-bg">
						<div class="image">
							<!-- Image -->
							<img src="<?php echo base_url(); ?>assets/img/sections/team/5.jpg" alt="" title="" width="270" height="270" />
						</div>
						<div class="description">
							<!-- Name -->
							<h4 class="name">Phillip Parisis</h4>
							<!-- Designation -->
							<div class="role">Resource Head</div>
							<!-- Text -->
							<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
								intereste.</p>
						</div>
						<div class="social-icon">
							<!-- Social Icons -->
							<a href="#">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#">
								<i class="fa fa-google"></i>
							</a>
							<a href="#">
								<i class="fa fa-pinterest"></i>
							</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- team -->
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
<!-- fun-factor -->
<section id="latest-news" class="page-section light-bg border-tb">
	<div class="container">
		<div class="section-heading">
			<div class="text-left">
				<!-- Title -->
				<h2 class="title">Tin tức mới </h2>
			</div>
		</div>
		<div class="row">
			<div class="owl-carousel navigation-1 opacity text-left" data-pagination="false" data-items="3"
				 data-autoplay="true" data-navigation="true">
				<?php foreach ($popular_posts as $item): ?>
					<div class="col-sm-4 col-md-4 col-xs-12">
						<p class="text-center">
							<a href="img/sections/services/1.jpg" class="opacity" data-rel="prettyPhoto[portfolio]">
								<img src="<?php echo base_url().$item->image_mid; ?>" width="420" height="280" alt="" />
							</a>
						</p>
						<h3>
							<a href="<?php echo base_url().'post/'.html_escape($item->title_slug); ?>"><?php echo $item->title; ?></a>
						</h3>
						<p><?php echo $item->summary; ?></p>
						<a href="<?php echo base_url().'post/'.html_escape($item->title_slug); ?>" class="read-more">Xem thêm</a>
					</div>
				<?php endforeach; ?>

			</div>
		</div>
	</div>
</section>
<!-- news -->
<section id="testimonials" class="page-section">
	<div class="container">
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
<section id="clients" class="page-section tb-pad-20 light-bg border-tb">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="owl-carousel" data-pagination="false" data-items="6" data-autoplay="true"
					 data-navigation="false">
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/1.png" width="170" height="90" alt="" />
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/11.png" width="170" height="90" alt="" /></a>
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/2.png" width="170" height="90" alt="" />
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/22.png" width="170" height="90" alt="" /></a>
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/1.png" width="170" height="90" alt="" />
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/11.png" width="170" height="90" alt="" /></a>
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/2.png" width="170" height="90" alt="" />
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/22.png" width="170" height="90" alt="" /></a>
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/1.png" width="170" height="90" alt="" />
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/11.png" width="170" height="90" alt="" /></a>
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/2.png" width="170" height="90" alt="" />
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/22.png" width="170" height="90" alt="" /></a>
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/1.png" width="170" height="90" alt="" />
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/11.png" width="170" height="90" alt="" /></a>
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/2.png" width="170" height="90" alt="" />
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/22.png" width="170" height="90" alt="" /></a></div>
			</div>
		</div>
	</div>
</section>
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
