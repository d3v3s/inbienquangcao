<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<footer id="footer">
	<div class="footer-widget">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3 widget bottom-xs-pad-20">
					<div class="fb-page"
						 data-href="https://www.facebook.com/InAnQuangCao"
						 data-width="250"
						 data-hide-cover="false"
						 data-show-facepile="false"></div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 widget bottom-xs-pad-20">
					<div class="widget-title">
						<h3 class="title">Địa chỉ</h3>
					</div>
					<p>
						<strong>Văn phòng:</strong> <?php echo html_escape($settings->contact_address); ?>
					</p>
					<p>
						<strong>Email liên hệ:</strong> <a class="text-color" href="mailto:<?php echo html_escape($settings->contact_email); ?>">
							<?php echo html_escape($settings->contact_email); ?>
						</a>
					</p>
					<p>
						<strong>Gọi cho chúng tôi:</strong> +<a href="tel:<?php echo html_escape($settings->contact_phone); ?>"><?php echo html_escape($settings->contact_phone); ?></a>
					</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 widget">
					<div class="widget-title">
						<!-- Title -->
						<h3 class="title">Giờ mở cửa</h3>
					</div>
					<nav>
						<ul>
							<!-- List Items -->
							<li>
								<a href="#">Thứ 2-thứ 6: 8h đến 17h</a>
							</li>
							<li>
								<a href="#">Thứ 7 / Chủ nhật: nghỉ</a>
							</li>
						</ul>
						<!-- Count -->
						<div class="footer-count">
							<p class="count-number" data-count="3550">total projects :
								<span class="counter"></span></p>
						</div>
						<div class="footer-count">
							<p class="count-number" data-count="2550">happy clients :
								<span class="counter"></span></p>
						</div>
					</nav>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 widget newsletter bottom-xs-pad-20">
					<div class="widget-title">
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
							<i class="fa fa-linkedin"></i>
						</a></div>
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
				<div class="col-xs-12 col-sm-6 col-md-6">Copyright &copy; <script> document.write(new Date().getFullYear()) </script> Quảng cáo Tân Thái Dương.
					<br />
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
<!-- footer -->
</div>
<!-- page -->

<div id="arcontactus" class="arcontactus-widget arcontactus-message left lg active">
	<div class="callback-countdown-block" style="color: #008749">
		<div class="callback-countdown-block-close">
			<svg width="12" height="13" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g id="Canvas" transform="translate(-4087 108)">
					<g id="Vector">
						<use xlink:href="#path0_fill" transform="translate(4087 -108)" fill="currentColor"></use>
					</g>
				</g>
				<defs>
					<path id="path0_fill" d="M 14 1.41L 12.59 0L 7 5.59L 1.41 0L 0 1.41L 5.59 7L 0 12.59L 1.41 14L 7 8.41L 12.59 14L 14 12.59L 8.41 7L 14 1.41Z"></path>
				</defs>
			</svg>
		</div>
		<div class="callback-countdown-block-phone">
			<p>Please enter your phone number
				<br>and we call you back soon</p>
			<form action="https://quangcaotaybac.vn/wp-admin/admin-ajax.php" method="POST">
				<div class="callback-countdown-block-form-group">
					<input name="action" type="hidden" value="arcontactus_request_callback">
					<input name="gtoken" class="ar-g-token" type="hidden" value="">
					<input name="phone" class="arcontactus-message-callback-phone" required="required" type="tel" value="" placeholder="+XXX-XX-XXX-XX-XX">
					<input id="arcontactus-message-callback-phone-submit" type="submit" style="background-color: #008749" value="Waiting for call">
				</div>
			</form>
		</div>
		<div class="callback-countdown-block-timer">
			<p>We are calling you to phone</p>
			<div class="callback-countdown-block-timer_timer"></div>
		</div>
		<div class="callback-countdown-block-sorry">
			<p>Thank you.
				<br>We are call you back soon.</p>
		</div>
	</div>
	<div class="arcontactus-message-button" style="background-color: #008749">
		<div class="static hide">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
				<path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path>
			</svg>
			<p>Call me</p>
		</div>
		<div class="callback-state" style="color: #008749">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
				<path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path>
			</svg>
		</div>
		<div class="icons">
			<div class="icons-line" style="transform: translate(-194px, 0px);"><span style="color: #008749"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M424.7 299.8c2.9-14 4.7-28.9 4.7-43.8 0-113.5-91.9-205.3-205.3-205.3-14.9 0-29.7 1.7-43.8 4.7C161.3 40.7 137.7 32 112 32 50.2 32 0 82.2 0 144c0 25.7 8.7 49.3 23.3 68.2-2.9 14-4.7 28.9-4.7 43.8 0 113.5 91.9 205.3 205.3 205.3 14.9 0 29.7-1.7 43.8-4.7 19 14.6 42.6 23.3 68.2 23.3 61.8 0 112-50.2 112-112 .1-25.6-8.6-49.2-23.2-68.1zm-194.6 91.5c-65.6 0-120.5-29.2-120.5-65 0-16 9-30.6 29.5-30.6 31.2 0 34.1 44.9 88.1 44.9 25.7 0 42.3-11.4 42.3-26.3 0-18.7-16-21.6-42-28-62.5-15.4-117.8-22-117.8-87.2 0-59.2 58.6-81.1 109.1-81.1 55.1 0 110.8 21.9 110.8 55.4 0 16.9-11.4 31.8-30.3 31.8-28.3 0-29.2-33.5-75-33.5-25.7 0-42 7-42 22.5 0 19.8 20.8 21.8 69.1 33 41.4 9.3 90.7 26.8 90.7 77.6 0 59.1-57.1 86.5-112 86.5z"></path></svg></span><span style="color: #008749"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"></path></svg></span><span style="color: #008749"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.1 436.6"><path fill="currentColor" class="st0" d="M82.6 380.9c-1.8-.8-3.1-1.7-1-3.5 1.3-1 2.7-1.9 4.1-2.8 13.1-8.5 25.4-17.8 33.5-31.5 6.8-11.4 5.7-18.1-2.8-26.5C69 269.2 48.2 212.5 58.6 145.5 64.5 107.7 81.8 75 107 46.6c15.2-17.2 33.3-31.1 53.1-42.7 1.2-.7 2.9-.9 3.1-2.7-.4-1-1.1-.7-1.7-.7-33.7 0-67.4-.7-101 .2C28.3 1.7.5 26.6.6 62.3c.2 104.3 0 208.6 0 313 0 32.4 24.7 59.5 57 60.7 27.3 1.1 54.6.2 82 .1 2 .1 4 .2 6 .2H290c36 0 72 .2 108 0 33.4 0 60.5-27 60.5-60.3v-.6-58.5c0-1.4.5-2.9-.4-4.4-1.8.1-2.5 1.6-3.5 2.6-19.4 19.5-42.3 35.2-67.4 46.3-61.5 27.1-124.1 29-187.6 7.2-5.5-2-11.5-2.2-17.2-.8-8.4 2.1-16.7 4.6-25 7.1-24.4 7.6-49.3 11-74.8 6zm72.5-168.5c1.7-2.2 2.6-3.5 3.6-4.8 13.1-16.6 26.2-33.2 39.3-49.9 3.8-4.8 7.6-9.7 10-15.5 2.8-6.6-.2-12.8-7-15.2-3-.9-6.2-1.3-9.4-1.1-17.8-.1-35.7-.1-53.5 0-2.5 0-5 .3-7.4.9-5.6 1.4-9 7.1-7.6 12.8 1 3.8 4 6.8 7.8 7.7 2.4.6 4.9.9 7.4.8 10.8.1 21.7 0 32.5.1 1.2 0 2.7-.8 3.6 1-.9 1.2-1.8 2.4-2.7 3.5-15.5 19.6-30.9 39.3-46.4 58.9-3.8 4.9-5.8 10.3-3 16.3s8.5 7.1 14.3 7.5c4.6.3 9.3.1 14 .1 16.2 0 32.3.1 48.5-.1 8.6-.1 13.2-5.3 12.3-13.3-.7-6.3-5-9.6-13-9.7-14.1-.1-28.2 0-43.3 0zm116-52.6c-12.5-10.9-26.3-11.6-39.8-3.6-16.4 9.6-22.4 25.3-20.4 43.5 1.9 17 9.3 30.9 27.1 36.6 11.1 3.6 21.4 2.3 30.5-5.1 2.4-1.9 3.1-1.5 4.8.6 3.3 4.2 9 5.8 14 3.9 5-1.5 8.3-6.1 8.3-11.3.1-20 .2-40 0-60-.1-8-7.6-13.1-15.4-11.5-4.3.9-6.7 3.8-9.1 6.9zm69.3 37.1c-.4 25 20.3 43.9 46.3 41.3 23.9-2.4 39.4-20.3 38.6-45.6-.8-25-19.4-42.1-44.9-41.3-23.9.7-40.8 19.9-40 45.6zm-8.8-19.9c0-15.7.1-31.3 0-47 0-8-5.1-13-12.7-12.9-7.4.1-12.3 5.1-12.4 12.8-.1 4.7 0 9.3 0 14v79.5c0 6.2 3.8 11.6 8.8 12.9 6.9 1.9 14-2.2 15.8-9.1.3-1.2.5-2.4.4-3.7.2-15.5.1-31 .1-46.5z"></path></svg></span><span style="color: #008749"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg></span></div>
		</div>
		<div class="arcontactus-close">
			<svg width="12" height="13" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g id="Canvas" transform="translate(-4087 108)">
					<g id="Vector">
						<use xlink:href="#path0_fill" transform="translate(4087 -108)" fill="currentColor"></use>
					</g>
				</g>
				<defs>
					<path id="path0_fill" d="M 14 1.41L 12.59 0L 7 5.59L 1.41 0L 0 1.41L 5.59 7L 0 12.59L 1.41 14L 7 8.41L 12.59 14L 14 12.59L 8.41 7L 14 1.41Z"></path>
				</defs>
			</svg>
		</div>
		<div class="pulsation" style="background-color: #008749"></div>
		<div class="pulsation" style="background-color: #008749"></div>
	</div>
	<div class="arcontactus-prompt">
		<div class="arcontactus-prompt-close" style="color: #008749">
			<svg width="12" height="13" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g id="Canvas" transform="translate(-4087 108)">
					<g id="Vector">
						<use xlink:href="#path0_fill" transform="translate(4087 -108)" fill="currentColor"></use>
					</g>
				</g>
				<defs>
					<path id="path0_fill" d="M 14 1.41L 12.59 0L 7 5.59L 1.41 0L 0 1.41L 5.59 7L 0 12.59L 1.41 14L 7 8.41L 12.59 14L 14 12.59L 8.41 7L 14 1.41Z"></path>
				</defs>
			</svg>
		</div>
		<div class="arcontactus-prompt-inner"></div>
	</div>
	<!--/noindex-->
</div>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/c49bc.css" media="all">

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=564841624086506&autoLogAppEvents=1"></script>
<!-- Scripts -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- Menu jQuery plugin -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/hover-dropdown-menu.js"></script>
<!-- Menu jQuery Bootstrap Addon -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/s/jquery.hover-dropdown-menu-addon.js"></script>
<!-- Scroll Top Menu -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
<!-- Sticky Menu -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.sticky.js"></script>
<!-- Bootstrap Validation -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrapValidator.min.js"></script>
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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.contactus.min.js"></script>
<script type="text/javascript" >
	function arCuGetCookie(cookieName){if(document.cookie.length>0){c_start=document.cookie.indexOf(cookieName+"=");if(c_start!=-1){c_start=c_start+cookieName.length+1;c_end=document.cookie.indexOf(";",c_start);if(c_end==-1){c_end=document.cookie.length}
		return unescape(document.cookie.substring(c_start,c_end))}}
		return 0};function arCuCreateCookie(name,value,days){var expires;if(days){var date=new Date();date.setTime(date.getTime()+(days*24*60*60*1000));expires="; expires="+date.toGMTString()}else{expires=""}
		document.cookie=name+"="+value+expires+"; path=/"};function arCuShowMessage(index){if(arCuPromptClosed){return!1}
		if(typeof arCuMessages[index]!=='undefined'){jQuery('#arcontactus').contactUs('showPromptTyping');_arCuTimeOut=setTimeout(function(){if(arCuPromptClosed){return!1}
			jQuery('#arcontactus').contactUs('showPrompt',{content:arCuMessages[index]});index ++;_arCuTimeOut=setTimeout(function(){if(arCuPromptClosed){return!1}
				arCuShowMessage(index)},arCuMessageTime)},arCuTypingTime)}else{if(arCuCloseLastMessage){jQuery('#arcontactus').contactUs('hidePrompt')}
			if(arCuLoop){arCuShowMessage(0)}}};function arCuShowMessages(){setTimeout(function(){clearTimeout(_arCuTimeOut);arCuShowMessage(0)},arCuDelayFirst)}

</script>
<script type="text/javascript">
	var zaloWidgetInterval;
	var arCuMessages = ["Xin ch\u00e0o!", "Em c\u00f3 th\u1ec3 gi\u00fap g\u00ec cho anh\/ch\u1ecb?"];
	var arCuLoop = false;;
	var arCuCloseLastMessage = false;
	var arCuDelayFirst = 2000;
	var arCuTypingTime = 2000;
	var arCuMessageTime = 4000;
	var arcItems = [];
	var _arCuTimeOut = null;
	var arCuPromptClosed = false;
	var arCuClosedCookie = 0;
	window.addEventListener('load', function() {
		arCuClosedCookie = arCuGetCookie('arcu-closed');
		jQuery('#arcontactus').on('arcontactus.init', function() {
			if (arCuClosedCookie) {
				return false;
			}
			arCuShowMessages();
		});
		jQuery('#arcontactus').on('arcontactus.openMenu', function() {
			clearTimeout(_arCuTimeOut);
			arCuPromptClosed = true;
			jQuery('#contact').contactUs('hidePrompt');
			arCuCreateCookie('arcu-closed', 1, 0);
		});
		jQuery('#arcontactus').on('arcontactus.hidePrompt', function() {
			clearTimeout(_arCuTimeOut);
			arCuPromptClosed = true;
			arCuCreateCookie('arcu-closed', 1, 0);
		});

		var arcItem = {};
		arcItem.id = 'msg-item-1';
		arcItem.class = 'msg-item-facebook-messenger';
		arcItem.title = "Chat Messenger";
		arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"></path></svg>';
		arcItem.href = 'https://m.me/106181070965479';
		arcItem.color = '#0077FF';
		arcItems.push(arcItem);
		var arcItem = {};
		arcItem.id = 'msg-item-9';
		arcItem.class = 'msg-item-zalo';
		arcItem.title = "Chat Zalo";
		arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.1 436.6"><path fill="currentColor" class="st0" d="M82.6 380.9c-1.8-.8-3.1-1.7-1-3.5 1.3-1 2.7-1.9 4.1-2.8 13.1-8.5 25.4-17.8 33.5-31.5 6.8-11.4 5.7-18.1-2.8-26.5C69 269.2 48.2 212.5 58.6 145.5 64.5 107.7 81.8 75 107 46.6c15.2-17.2 33.3-31.1 53.1-42.7 1.2-.7 2.9-.9 3.1-2.7-.4-1-1.1-.7-1.7-.7-33.7 0-67.4-.7-101 .2C28.3 1.7.5 26.6.6 62.3c.2 104.3 0 208.6 0 313 0 32.4 24.7 59.5 57 60.7 27.3 1.1 54.6.2 82 .1 2 .1 4 .2 6 .2H290c36 0 72 .2 108 0 33.4 0 60.5-27 60.5-60.3v-.6-58.5c0-1.4.5-2.9-.4-4.4-1.8.1-2.5 1.6-3.5 2.6-19.4 19.5-42.3 35.2-67.4 46.3-61.5 27.1-124.1 29-187.6 7.2-5.5-2-11.5-2.2-17.2-.8-8.4 2.1-16.7 4.6-25 7.1-24.4 7.6-49.3 11-74.8 6zm72.5-168.5c1.7-2.2 2.6-3.5 3.6-4.8 13.1-16.6 26.2-33.2 39.3-49.9 3.8-4.8 7.6-9.7 10-15.5 2.8-6.6-.2-12.8-7-15.2-3-.9-6.2-1.3-9.4-1.1-17.8-.1-35.7-.1-53.5 0-2.5 0-5 .3-7.4.9-5.6 1.4-9 7.1-7.6 12.8 1 3.8 4 6.8 7.8 7.7 2.4.6 4.9.9 7.4.8 10.8.1 21.7 0 32.5.1 1.2 0 2.7-.8 3.6 1-.9 1.2-1.8 2.4-2.7 3.5-15.5 19.6-30.9 39.3-46.4 58.9-3.8 4.9-5.8 10.3-3 16.3s8.5 7.1 14.3 7.5c4.6.3 9.3.1 14 .1 16.2 0 32.3.1 48.5-.1 8.6-.1 13.2-5.3 12.3-13.3-.7-6.3-5-9.6-13-9.7-14.1-.1-28.2 0-43.3 0zm116-52.6c-12.5-10.9-26.3-11.6-39.8-3.6-16.4 9.6-22.4 25.3-20.4 43.5 1.9 17 9.3 30.9 27.1 36.6 11.1 3.6 21.4 2.3 30.5-5.1 2.4-1.9 3.1-1.5 4.8.6 3.3 4.2 9 5.8 14 3.9 5-1.5 8.3-6.1 8.3-11.3.1-20 .2-40 0-60-.1-8-7.6-13.1-15.4-11.5-4.3.9-6.7 3.8-9.1 6.9zm69.3 37.1c-.4 25 20.3 43.9 46.3 41.3 23.9-2.4 39.4-20.3 38.6-45.6-.8-25-19.4-42.1-44.9-41.3-23.9.7-40.8 19.9-40 45.6zm-8.8-19.9c0-15.7.1-31.3 0-47 0-8-5.1-13-12.7-12.9-7.4.1-12.3 5.1-12.4 12.8-.1 4.7 0 9.3 0 14v79.5c0 6.2 3.8 11.6 8.8 12.9 6.9 1.9 14-2.2 15.8-9.1.3-1.2.5-2.4.4-3.7.2-15.5.1-31 .1-46.5z"/></svg>';
		arcItem.href = 'https://zalo.me/0969600981';
		arcItem.color = '#018FE5';
		arcItems.push(arcItem);
		var arcItem = {};
		arcItem.id = 'msg-item-8';
		arcItem.class = 'msg-item-phone';
		arcItem.title = "Gọi cho chúng tôi";
		arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';
		arcItem.href = 'tel:0969 600 981';
		arcItem.color = '#FF0000';
		arcItems.push(arcItem);
		jQuery('#arcontactus').contactUs({
			drag: false,
			mode: 'regular',
			countdown: 0,
			theme: '#46A67F',
			items: arcItems,
		});
	});
</script>
<!-- Scripts -->
</body>
</html>
