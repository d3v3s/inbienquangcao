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
<!-- about-us -->
<section id="services" class="page-section transparent">
	<div class="container text-center">
		<div class="section-title">
			<h2 class="title">Dịch Vụ Chúng Tôi Cung Cấp Đến Khách Hàng</h2>
		</div>
		<div class="row">
			<div class="owl-carousel navigation-1 opacity text-left" data-pagination="false" data-items="3"
				 data-autoplay="true" data-navigation="true">
				<?php foreach ($services as $item): ?>
					<div class="col-sm-6 col-md-4 col-xs-12">
						<p class="text-center">
							<a href="<?php echo base_url().$item->image_big; ?>" class="opacity" data-rel="prettyPhoto[portfolio]">
								<img src="<?php echo base_url().$item->image_big; ?>" width="420" height="280" alt="<?php echo $item->title; ?>" title="<?php echo $item->title; ?>"/>
							</a>
						</p>
						<h3>
							<a href="<?php echo base_url(); ?>chi-tiet-dich-vu/<?php echo $item->slug; ?>"><?php echo $item->title; ?></a>
						</h3>
						<p><?php echo $item->summary; ?></p>
						<a href="<?php echo base_url(); ?>chi-tiet-du-an/<?php echo $item->slug; ?>" class="read-more">Xem thêm</a>
					</div>
				<?php endforeach; ?>



			</div>
		</div>
	</div>
</section>
<!-- Services -->
<section id="who-we-are" class="page-section border-tb">
	<div class="container who-we-are">
		<div class="row">
			<div class="col-md-8">
				<div class="section-title text-left">
					<!-- Title -->
					<h2 class="title">CHÚNG TÔi LÀ AI?</h2>
				</div>
				<p class="description upper">Lời đầu tiên xin gửi tới Quý Khách hàng lời chào trân trọng cùng lời chúc sức khỏe và thành công.</p>
				<p>Công ty chúng tôi là đơn vị chuyên sản xuất và cung ứng các sản phẩm biển hiệu, biển quảng cáo các loại với công nghệ hiện đại nhập khẩu từ Đài Loan, Hàn Quốc. Chúng tôi đã và là đối tác cung cấp các sản phẩm. dịch vụ quảng cáo cho nhiều công ty, đối tác Công ty cổ phần xi măng cẩm Phả, Tập đoàn Viettel.</p>
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
			</div>
			<script>

				function readMore(moreId, moreBtn, dotId) {
					var dots = document.getElementById(dotId);
					var moreText = document.getElementById(moreId);
					var btnText = document.getElementById(moreBtn);

					if (dots.style.display === "none") {
						dots.style.display = "inline";
						btnText.innerHTML = "Xem thêm";
						moreText.style.display = "none";
					} else {
						dots.style.display = "none";
						btnText.innerHTML = "Đóng";
						moreText.style.display = "inline";
					}
				}
			</script>
			<div class="col-md-4">
				<div class="item-box bottom-pad-10">
					<a>
						<i class="icon-star13 i-5x bg-color"></i>
						<h4>CHÚNG TA LÀM GÌ?</h4>
						<p>Trải qua hơn 13 năm, nỗ lực không ngừng. Chúng tôi tự hào là đơn vị có kinh nghiệm trong lĩnh vực Thi công biển, bảng quảng cáo
							<span id="dotOne">...</span>
							<span id="moreOne">Cùng rất nhiều chất liệu khác nhau để mang đến những sản phẩm chất lương, tinh tế và đẹp mắt. Bên cạnh đó, giá cả từng sản phẩm của Chúng tôi phù hợp với từng quy mô, lĩnh vực kinh doanh và nhu cầu của quý khách hàng. Với tiêu chí “NÓI KHÔNG VỚI SẢN PHẨM KÉM CHẤT LƯỢNG” Luôn được đặt lên hàng đầu..
							<a class="readMore" id="moreBtnOne" onclick="readMore('moreOne', 'moreBtnOne', 'dotOne')">Xem thêm</a>
							</span>
						</p>


					</a>
					<a>
						<i class="icon-heart18 i-5x bg-color"></i>
						<h4>TẠI SAO MỌI NGƯỜI THÍCH CHÚNG TÔI?</h4>
						<p>Trên chặng đường đã qua, Chúng tôi không ngừng mở rộng quy mô phát triển và củng cố hệ thống cơ sở vật chất. Bên cạnh đó, chúng tôi
							<span id="dotTwo">...</span>
							<span id="moreTwo">hội tụ đội ngũ nhân viên trẻ nhiệt huyết, sáng tạo. Đến nay, trở thành doanh nghiệp hàng đầu trong lĩnh vực dịch vụ quảng cáo.
							Chúng tôi đã và đang là đối tác tin cậy, thường xuyên của nhiều tập đoàn, thương hiệu hàng đầu Việt Nam như: Tập đoàn Viettel, Công ty Xi măng Cẩm Phả, Đài truyền hình VTV, Tập đoàn Vingroup… Và rất nhiều đối tác khác.<a class="readMore" id="moreBtnTwo" onclick="readMore('moreTwo', 'moreBtnTwo', 'dotTwo')">Xem thêm</a>
							</span>
						</p>

					</a>
					<a>
						<i class="icon-gift6 i-5x bg-color"></i>
						<h4>CHÚNG TÔI CUNG CẤP GÌ?</h4>
						<p>Tập trung hoạt động trong lĩnh vực kinh doanh các sản phẩm Biển Hiệu, Biển Quảng Cáo với công nghệ sản xuất hiện đại, tiên tiến
							<span id="dotThree">...</span>
							<span id="moreThree">Hệ thống máy móc được nhập khẩu được nhập khẩu từ nhiều quốc gia trên thế giới. Chúng tôi không ngừng cập nhật hệ thống trang thiết bị hiện đại, máy móc, kỹ thuật tiên tiến. Nhằm mang đến những sản phẩm tốt nhất, chất lượng cao nhất đến với quý khách hàng.
							<a class="readMore" id="moreBtnThree" onclick="readMore('moreThree', 'moreBtnThree', 'dotThree')">Xem thêm</a>
							</span>
						</p>
					</a></div>
			</div>
		</div>
	</div>
</section>
<!-- who-we-are -->
<section id="works" class="page-section transparent">
	<div class="container-fluid item-pad general-section">
		<div class="section-title">
			<!-- Heading -->
			<h2 class="title">Các Dự Án Nổi Bật</h2>
		</div>
		<div id="options" class="filter-menu">
			<ul class="option-set nav nav-pills">
				<li class="filter active" data-filter="all">Show All</li>
				<li class="filter" data-filter=".commercial">Commercial</li>
				<li class="filter" data-filter=".education">Education</li>
				<li class="filter" data-filter=".healthcare">Healthcare</li>
				<li class="filter" data-filter=".residential">Residential</li>
			</ul>
		</div>
		<!-- filter -->
		<div id="mix-container" class="portfolio-grid">
			<!-- Item 1 -->
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
			<!-- Item 1 Ends-->
		</div>
		<!-- Mix Container -->
	</div>
</section>
<section id="typographys" class="page-section">
	<div class="container text-center">
		<div class="section-title">
			<h2 class="title">Mẫu Chữ Thường Dùng Trong Quảng Cáo</h2>
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
									<a href="<?php echo base_url(); ?>chi-tiet-du-an/<?php echo $item->id; ?>">
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
<!-- works -->
<section id="team" class="page-section light-bg border-tb">
	<div class="container text-center">
		<div class="section-title">
			<h2 class="title">Đội chúng tôi</h2>
		</div>
		<div class="row">
			<div class="owl-carousel navigation-1" data-pagination="false" data-items="4" data-autoplay="true"
				 data-navigation="true">
				<?php foreach ($members as $item): ?>
					<div class="col-sm-6 col-md-3 bottom-xs-pad-20">
						<div class="team-item dark-bg">
							<div class="image">
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
<!-- team -->
<section id="fun-factor" class="page-section transparent">
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
				<h3>Khách hàng</h3>
			</div>
			<div class="col-sm-6 col-md-3 bottom-xs-pad-30">
				<!-- Icon -->
				<div class="count-number text-color" data-count="67">
					<span class="counter"></span>
				</div>
				<!-- Title -->
				<h3>Giải thưởng</h3>
			</div>
			<div class="col-sm-6 col-md-3 bottom-xs-pad-30">
				<!-- Icon -->
				<div class="count-number text-color" data-count="36">
					<span class="counter"></span>
				</div>
				<!-- Title -->
				<h3>Tỉnh thành</h3>
			</div>
		</div>
	</div>
</section>
<!-- fun-factor -->
<section id="latest-news" class="page-section light-bg border-tb">
	<div class="container">
		<div class="section-title">
			<h2 class="title">TIN TỨC</h2>
		</div>
		<div class="row">
			<div class="owl-carousel navigation-1 opacity text-left" data-pagination="false" data-items="3"
				 data-autoplay="true" data-navigation="true">


				<?php foreach ($popular_posts as $item): ?>
					<div class="col-sm-6 col-md-4 col-xs-12">
						<p class="text-center">
							<a href="<?php echo base_url().$item->image_big; ?>" class="opacity" data-rel="prettyPhoto[portfolio]">
								<img src="<?php echo base_url().$item->image_big; ?>" width="420" height="280" alt="" />
							</a>
						</p>
						<h3>
							<a href="<?php echo base_url().'post/'.html_escape($item->title_slug); ?>"><?php echo $item->title; ?></a>
						</h3>
						<p><?php echo $item->summary; ?></p>
						<a href="<?php echo base_url().'post/'.html_escape($item->title_slug); ?>" class="read-more">Xam thêm</a>
						<div class="right-post-meta">
                            <span class="meta-like">
                            <i class="icon-heart"></i> 5</span>
							<span class="meta-comment">
                            <i class="icon-comment"></i> 12</span></div>
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
<section class="page-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="tb-title-home text-center">
					<div class="tb-title-home-header" >
						<h2 class="tb-headding-two title-index">Uy tín là số 1</h2>
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
					</div>
					<div class="tb-work-content text-center mt-4" style="margin-top: 20px">
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
					</div>
					<div class="tb-work-content text-center mt-4" style="margin-top: 20px">
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
					</div>
					<div class="tb-work-content text-center mt-4" style="margin-top: 20px">
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
					</div>
					<div class="tb-work-content text-center mt-4" style="margin-top: 20px">
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
<!-- testimonials -->
<section id="clients" class="page-section tb-pad-20 light-bg border-tb">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="owl-carousel" data-pagination="false" data-items="6" data-autoplay="true"
					 data-navigation="false">
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/1.png" width="170" height="90" alt="" />
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/11.png" width="170" height="90" alt="" />
					</a>
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/2.png" width="170" height="90" alt="" />
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/22.png" width="170" height="90" alt="" />
					</a>
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/3.png" width="170" height="90" alt="" />
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/11.png" width="170" height="90" alt="" />
					</a>
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/4.png" width="170" height="90" alt="" />
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/22.png" width="170" height="90" alt="" />
					</a>
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/5.png" width="170" height="90" alt="" />
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/11.png" width="170" height="90" alt="" />
					</a>
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/6.png" width="170" height="90" alt="" />
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/22.png" width="170" height="90" alt="" />
					</a>
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/1.png" width="170" height="90" alt="" />
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/11.png" width="170" height="90" alt="" />
					</a>
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/2.png" width="170" height="90" alt="" />
						<img src="<?php echo base_url(); ?>assets/img/sections/clients/22.png" width="170" height="90" alt="" />
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- clients -->
<section id="contact-us" class="page-section light-bg border-tb">
	<div class="container">
		<div class="row">
			<?php $this->load->view('partials/_messages'); ?>
			<div class="col-md-4 opacity">
				<img src="<?php echo base_url(); ?>assets/img/sections/about/tan_thai_duong.jpg" width="500" height="250" alt="" />
			</div>
			<div class="col-md-4">
				<p class="form-message"></p>
				<div class="contact-form">
					<!-- Form Begins -->
					<?php echo form_open('home/contact_post'); ?>
						<!-- Field 1 -->
						<div class="input-text form-group">
							<input type="text" class="form-control form-input" name="name"
								   placeholder="<?php echo trans("name"); ?>" maxlength="199" minlength="1" required <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
						</div>
						<!-- Field 2 -->
						<div class="input-email form-group">
							<input type="email" class="form-control form-input" name="email" maxlength="199"
								   placeholder="<?php echo trans("email"); ?>" required <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
						</div>
						<!-- Field 3 -->
						<div class="input-email form-group">
							<input type="text" name="contact_phone" class="input-phone form-control" placeholder="Số điện thoại" />
						</div>
						<!-- Field 4 -->
						<div class="textarea-message form-group">
                                    <textarea class="form-control form-input form-textarea" name="message"
											  placeholder="<?php echo trans("message"); ?>" maxlength="4970"
											  minlength="5"
											  required <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>></textarea>
						</div>
						<!-- Button -->
						<button class="btn btn-default btn-block" type="submit">
							<?php echo html_escape(trans("submit")); ?><i class="icon-paper-plane"></i>
						</button>
					</form>
					<!-- Form Ends -->
				</div>
			</div>
			<div class="col-md-4">
				<div class="map-section">
					<div class="map-canvas" data-zoom="12" data-lat="-35.2835" data-lng="149.128" data-type="roadmap"
						 data-title="Austin"
						 data-content="Hanoi, VietNam"
                            style="height: 350px;">
					</div>
				</div>
			</div>
			<!-- map -->
		</div>
	</div>
</section>
<!-- contact-section -->
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
