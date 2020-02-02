<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Start Footer Section -->
	<footer id="footer">
	<div class="footer-widget">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3 widget bottom-xs-pad-20">
					<div class="widget-title">
						<!-- Title -->
						<h3 class="title">Địa chỉ</h3>
					</div>
					<!-- Address -->
					<p>
						<strong>Văn phòng:</strong> <?php echo html_escape($settings->contact_address); ?>
					</p>
					<!-- Email -->
					<a class="text-color" href="mailto:<?php echo html_escape($settings->contact_email); ?>">
						<?php echo html_escape($settings->contact_email); ?>
					</a>
					<!-- Phone -->
					<p>
						<strong>Call Us:</strong> +<?php echo html_escape($settings->contact_phone); ?>
					</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 widget bottom-xs-pad-20">
					<div class="widget-title">
						<!-- Title -->
						<h3 class="title">Dịch vụ</h3>
					</div>
					<nav>
						<ul>
							<!-- List Items -->
							<li>
								<a href="#">General Contracting</a>
							</li>
							<li>
								<a href="#">Construction Consultant</a>
							</li>
							<li>
								<a href="#">House Renovation</a>
							</li>
							<li>
								<a href="#">Metal Roofing</a>
							</li>
							<li>
								<a href="#">Green House</a>
							</li>
							<li>
								<a href="#">Tiling and Painting</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 widget">
					<div class="widget-title">
						<!-- Title -->
						<h3 class="title">Giờ làm việc</h3>
					</div>
					<nav>
						<ul>
							<!-- List Items -->
							<li>
								<a href="#">Thứ 2-Thứ 7: 8h sáng đến 5h chiều</a>
							</li>
							<li>
								<a href="#">Chủ nhật: nghỉ</a>
							</li>
						</ul>
						<!-- Count -->
						<div class="footer-count">
							<p class="count-number" data-count="3550">Dự án hoàn thành:
								<span class="counter"></span></p>
						</div>
						<div class="footer-count">
							<p class="count-number" data-count="2550">Khách Hàng Lựa Chọn:
								<span class="counter"></span></p>
						</div>
						<div class="footer-count">
							<p class="count-number" data-count="50">Nhân viên:
								<span class="counter"></span></p>
						</div>
					</nav>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 widget newsletter bottom-xs-pad-20">
					<div class="widget-title">
						<!-- Title -->
						<h3 class="title">Đăng kí nhận tin</h3>
					</div>
					<div>
						<!-- Text -->
						<p><?php echo html_escape(trans("newsletter_exp")); ?></p>
						<p class="form-message1"></p>
						<div class="clearfix"></div>
						<!-- Form -->

						<?php echo form_open('home/add_to_newsletter'); ?>
						<div class="input-text form-group has-feedback">
							<input class="form-control" type="email" value="" name="email"
								   id="newsletter_email" maxlength="199"
								   placeholder="<?php echo html_escape(trans("email")); ?>"
								   required <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>/>
							<button class="submit bg-color" type="submit">
								<span class="glyphicon glyphicon-arrow-right"></span>
							</button>
						</div>
						<?php echo form_close(); ?>
					</div>
					<!-- Social Links -->
					<div class="social-icon gray-bg icons-circle i-3x">
						<!--if facebook url exists-->
						<?php if (!empty($settings->facebook_url)) : ?>
							<a target="_blank" title="Facebook" href="<?php echo html_escape($settings->facebook_url); ?>">
								<i class="fa fa-facebook"></i>
							</a>
						<?php endif; ?>
						<!--if twitter url exists-->
						<?php if (!empty($settings->twitter_url)) : ?>
							<a target="_blank title="Twitter"" href="<?php echo html_escape($settings->twitter_url); ?>">
								<i class="fa fa-twitter"></i>
							</a>
						<?php endif; ?>
						<!--if youtube url exists-->
						<?php if (!empty($settings->youtube_url)) : ?>
							<a target="_blank" title="Youtube" href="<?php echo html_escape($settings->youtube_url); ?>">
								<i class="fa fa-youtube"></i>
							</a>
						<?php endif; ?>
					</div>
				</div>
				<!-- .newsletter -->
			</div>
		</div>
	</div>
	<!-- footer-top -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<!-- Copyrights -->
				<div class="col-xs-12 col-sm-6 col-md-6">Copyright &copy; zozothemes.com., 2015
					<br />
					<!-- Terms Link -->
					<a href="#">Terms of Use</a> /
					<a href="#">Privacy Policy</a></div>
				<div class="col-xs-12 text-center visible-xs-block page-scroll gray-bg icons-circle i-3x">
					<!-- Goto Top -->
					<a href="#page">
						<i class="glyphicon glyphicon-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- footer-bottom -->
</footer>
</div>
<!-- End Footer Section -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- Menu jQuery plugin -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/hover-dropdown-menu.js"></script>
<!-- Menu jQuery Bootstrap Addon -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.hover-dropdown-menu-addon.js"></script>
<!-- Scroll Top Menu -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
<!-- Sticky Menu -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.sticky.js"></script>
<!-- Bootstrap Validation -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.prettyPhoto.js"></script>

<!-- Revolution Slider -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/revolution-custom.js"></script>
<!-- Portfolio Filter -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.mixitup.min.js"></script>
<!-- Animations -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.appear.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/effect.js"></script>
<!-- Owl Carousel Slider -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
<!-- Pretty Photo Popup -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.prettyPhoto.js"></script>
<!-- Parallax BG -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.parallax-1.1.3.js"></script>
<!-- Fun Factor / Counter -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.countTo.js"></script>
<!-- Twitter Feed -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/tweet/carousel.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/tweet/scripts.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/tweet/tweetie.min.js"></script>
<!-- Background Video -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.mb.YTPlayer.js"></script>
<!-- Custom Js Code -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/isotope.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>

<?php if (isset($page_type)):
    echo $general_settings->facebook_comment;
endif; ?>
</body>
</html>
