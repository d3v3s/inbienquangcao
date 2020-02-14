<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from zozothemes.com/html/metal/demo-light/index-onepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Aug 2015 13:30:46 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo html_escape($title); ?> - <?php echo html_escape($settings->site_title); ?></title>
	<meta name="description" content="<?php echo html_escape($description); ?>"/>
	<meta name="keywords" content="<?php echo html_escape($keywords); ?>"/>
	<meta name="author" content="Codingest"/>
	<meta name="robots" content="all"/>
	<meta name="revisit-after" content="1 Days"/>
	<meta property="og:locale" content="en_US"/>
	<meta property="og:site_name" content="<?php echo $settings->application_name; ?>"/>
	<?php if (isset($page_type)): ?>
		<meta property="og:type" content="<?php echo $og_type; ?>"/>
		<meta property="og:title" content="<?php echo html_escape($post->title); ?>"/>
		<meta property="og:description" content="<?php echo html_escape($post->summary); ?>"/>
		<meta property="og:url" content="<?php echo $og_url; ?>"/>
		<meta property="og:image" content="<?php echo $og_image; ?>"/>
		<meta property="og:image:width" content="750"/>
		<meta property="og:image:height" content="415"/>
		<meta name="twitter:card" content=summary/>
		<meta name="twitter:title" content="<?php echo html_escape($post->title); ?>"/>
		<meta name="twitter:description" content="<?php echo html_escape($post->summary); ?>"/>
		<meta name="twitter:image" content="<?php echo $og_image; ?>"/>
		<?php foreach ($og_tags as $tag): ?>
			<meta property="article:tag" content="<?php echo $tag->tag; ?>"/>
		<?php endforeach; ?>
	<?php else: ?>
		<meta property="og:type" content=website/>
		<meta property="og:title" content="<?php echo html_escape($title); ?> - <?php echo html_escape($settings->site_title); ?>"/>
		<meta property="og:description" content="<?php echo html_escape($description); ?>"/>
		<meta property="og:url" content="<?php echo base_url(); ?>"/>
		<meta name="twitter:card" content=summary/>
		<meta name="twitter:title" content="<?php echo html_escape($title); ?> - <?php echo html_escape($settings->site_title); ?>"/>
		<meta name="twitter:description" content="<?php echo html_escape($description); ?>"/>
	<?php endif; ?>
	<link rel="canonical" href="<?php echo base_url(); ?>"/>
	<?php if ($general_settings->multilingual_system == 1):
		foreach ($languages as $language):
			if ($language->id == $site_lang->id):?>
				<link rel="alternate" href="<?php echo base_url(); ?>" hreflang="<?php echo $language->language_code ?>"/>
			<?php else: ?>
				<link rel="alternate" href="<?php echo base_url() . $language->short_form . "/"; ?>" hreflang="<?php echo $language->language_code ?>"/>
			<?php endif; endforeach; endif; ?>
	<?php if (empty($general_settings->favicon_path)): ?>
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png"/>
	<?php else: ?>
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url() . html_escape($general_settings->favicon_path); ?>"/>
	<?php endif; ?>
	<!-- Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo:300,400,500,700,400italic,700italic" />
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css" />
	<!-- Font Awesome Icons -->
	<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/hover-dropdown-menu.css" rel="stylesheet" />
	<!-- Icomoon Icons -->
	<link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" />
	<!-- Revolution Slider -->
	<link href="<?php echo base_url(); ?>assets/css/revolution-slider.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/rs-plugin/css/settings.css" rel="stylesheet" />
	<!-- Animations -->
	<link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet" />
	<!-- Owl Carousel Slider -->
	<link href="<?php echo base_url(); ?>assets/css/owl/owl.carousel.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/owl/owl.theme.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/owl/owl.transitions.css" rel="stylesheet" />
	<!-- PrettyPhoto Popup -->
	<link href="<?php echo base_url(); ?>assets/css/prettyPhoto.css" rel="stylesheet" />
	<!-- Custom Style -->
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" />
	<!-- Color Scheme -->
	<link href="<?php echo base_url(); ?>assets/css/color.css" rel="stylesheet" />
</head>
<body>

<div id="page" class="one-page">
	<!-- Page Loader -->
	<div id="pageloader">
		<div class="loader-item fa fa-spin text-color"></div>
	</div>
	<!-- Top Bar -->
	<div id="top-bar" class="top-bar-section top-bar-bg-light">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- Top Contact -->
					<div class="top-contact link-hover-black">
						<a href="#">
							<i class="fa fa-phone"></i>+ <?php echo html_escape($settings->contact_phone); ?></a>
						<a href="#">
							<i class="fa fa-envelope"></i><?php echo html_escape($settings->contact_email); ?></a></div>
					<!-- Top Social Icon -->
					<div class="top-social-icon icons-hover-black">
						<a href="#">
							<i class="fa fa-facebook"></i>
						</a>
						<a href="#">
							<i class="fa fa-twitter"></i>
						</a>
						<a href="#">
							<i class="fa fa-youtube"></i>
						</a>
						<a href="#">
							<i class="fa fa-linkedin"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Top Bar -->
	<!-- Sticky Navbar -->
	<header id="sticker" class="sticky-navigation">
		<!-- Sticky Menu -->
		<div class="sticky-menu relative">
			<!-- navbar -->
			<div class="navbar navbar-default navbar-bg-light" role="navigation">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="navbar-header">
								<!-- Button For Responsive toggle -->
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span></button>
								<!-- Logo -->
								<a class="navbar-brand" href="<?php echo lang_base_url(); ?>">
									<img class="site_logo img-responsive" alt="Trang chủ Tân Thái Dương" src="<?php echo base_url(); ?><?php echo html_escape($general_settings->logo_path); ?>" />
								</a>
							</div>
							<!-- Navbar Collapse -->
							<div class="navbar-collapse collapse">
								<!-- nav -->
								<ul class="nav navbar-nav">
									<li>
										<a class="<?php echo ($request_uri == '') ? 'active' : '' ?>" href="<?php echo lang_base_url(); ?>">Trang chủ</a>
									</li>
									<li>
										<a class="<?php echo ($request_uri == 'gioi-thieu') ? 'active' : '' ?>" href="<?php echo lang_base_url().'gioi-thieu'; ?>">Giới thiệu</a>
									</li>
									<li>
										<a class="<?php echo ($request_uri == 'du-an') ? 'active' : '' ?>" href="<?php echo lang_base_url().'du-an'; ?>">Dự án</a>
									</li>
									<li>
										<a class="<?php echo ($request_uri == 'dich-vu') ? 'active' : '' ?>" href="<?php echo lang_base_url().'dich-vu'; ?>">Dịch vụ</a>
									</li>
									<li>
										<a class="<?php echo ($request_uri == 'mau-chu') ? 'active' : '' ?>" href="<?php echo lang_base_url().'mau-chu'; ?>">Mẫu chữ</a>
									</li>
									<li>
										<a class="<?php echo ($request_uri == 'tin-tuc') ? 'active' : '' ?>" href="<?php echo lang_base_url().'tin-tuc'; ?>">Tin tức</a>
									</li>
									<!--									<li>-->
									<!--										<a href="--><?php //echo lang_base_url().'hinh-anh'; ?><!--">Hình ảnh</a>-->
									<!--									</li>-->
									<li>
										<a class="<?php echo ($request_uri == 'lien-he') ? 'active' : '' ?>" href="<?php echo lang_base_url().'lien-he'; ?>">Liên hệ </a>
									</li>
									<li class="hidden-767">
										<a href="#" class="header-search">
                                                <span>
                                                    <i class="fa fa-search"></i>
                                                </span>
										</a>
									</li>
								</ul>
								<!-- Right nav -->
								<!-- Header Search Content -->
								<div class="bg-white hide-show-content no-display header-search-content">
									<form action="<?php echo  lang_base_url().'search'; ?>" role="search" class="navbar-form vertically-absolute-middle" method="get">
										<div class="form-group">
											<input type="text" placeholder="Tìm kiếm"
												   class="form-control" id="s" name="s" value="" />
										</div>
									</form>
									<button class="close">
										<i class="fa fa-times"></i>
									</button>
								</div>
								<!-- Header Search Content -->
							</div>
							<!-- /.navbar-collapse -->
						</div>
						<!-- /.col-md-12 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</div>
			<!-- navbar -->
		</div>
		<!-- Sticky Menu -->
	</header>
