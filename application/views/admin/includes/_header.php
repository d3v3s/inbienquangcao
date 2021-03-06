<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo html_escape($title); ?> - <?php echo trans("admin"); ?> <?php echo html_escape($settings->application_name); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png"/>

	<!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/AdminLTE.min.css">
    <!-- AdminLTE Skins -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/_all-skins.min.css">
    <!-- Datatables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet"
          href="<?php echo base_url(); ?>assets/admin/plugins/datatables/jquery.dataTables_themeroller.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/iCheck/flat/flat.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/iCheck/flat/red.css">
    <!-- File Manager -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/file-manager/file-manager.min.css">
    <!-- Tags Input -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/tagsinput/jquery.tagsinput.min.css">
    <!-- Datetimepicker css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
    <!-- Bootstrap Toggle  css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/bootstrap-toggle.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/custom.min.css">
    <?php if ($site_lang->text_direction == "rtl"): ?>
        <!-- RTL -->
        <link href="<?php echo base_url(); ?>assets/admin/css/rtl.min.css" rel="stylesheet"/>
    <?php endif; ?>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        var csfr_token_name = '<?php echo $this->security->get_csrf_token_name(); ?>';
        var csfr_cookie_name = '<?php echo $this->config->item('csrf_cookie_name'); ?>';
        var base_url = '<?php echo base_url(); ?>';
    </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>admin" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b> </b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">
                <b>&nbsp;<?php echo trans("admin_panel"); ?></b>
            </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <a class="btn btn-sm btn-success pull-left btn-site-prev" target="_blank"
                   href="<?php echo base_url(); ?>"><i
                            class="fa fa-eye"></i> <?php echo trans("view_site"); ?></a>
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<?php if (!empty (user()->avatar)): ?>
								<img src="<?php echo base_url().html_escape(user()->avatar); ?>" alt="User Image" class="user-image">
							<?php else: ?>
								<img src="<?php echo base_url(); ?>assets/admin/img/user.jpg" class="user-image" alt="User Image">
							<?php endif; ?>
                            <span class="hidden-xs"><?php echo html_escape(user()->username); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
								<?php if (!empty (user()->avatar)): ?>
									<img src="<?php echo base_url().html_escape(user()->avatar); ?>" alt="User Image" class="img-circle">
								<?php else: ?>
									<img src="<?php echo base_url(); ?>assets/admin/img/user.jpg" class="img-circle" alt="User Image">
								<?php endif; ?>
                                <p>
                                    <?php echo html_escape(user()->username); ?>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body"></li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="<?php echo base_url(); ?>logout"
                                       onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">
                                        <i class="fa fa-sign-out"></i>&nbsp;
                                        <?php echo html_escape(trans("logout")); ?>
                                    </a>

                                    <?php echo form_open('logout', array('id' => 'logout-form', 'class' => 'hidden')); ?>
                                    <?php echo form_close(); ?>

                                </div>

								<div class="pull-left">
									<a href="<?php echo base_url(); ?>admin/update_profile/<?php echo user()->id; ?>"
									   class="btn btn-default btn-flat">
										<i class="fa fa-user"></i>&nbsp;
										<?php echo html_escape(trans("profile")); ?>
									</a>
								</div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
					<?php if (!empty (user()->avatar)): ?>
						<img src="<?php echo base_url().html_escape(user()->avatar); ?>" alt="User Image" class="img-circle">
					<?php else: ?>
						<img src="<?php echo base_url(); ?>assets/admin/img/user.jpg" class="img-circle" alt="User Image">
					<?php endif; ?>
                </div>
                <div class="pull-left info">
                    <p><?php echo html_escape(user()->username); ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> <?php echo trans("online"); ?></a>
                </div>
            </div>


            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header"><?php echo trans("main_nav"); ?></li>
                <li>
                    <a href="<?php echo base_url(); ?>admin">
                        <i class="fa fa-home"></i>
                        <span><?php echo trans("home"); ?></span>
                    </a>
                </li>

                <?php if (is_admin()): ?>
<!--                    <li>-->
<!--                        <a href="--><?php //echo base_url(); ?><!--admin/layout_options">-->
<!--                            <i class="fa fa-paint-brush" aria-hidden="true"></i> <span>--><?php //echo trans("layout_options"); ?><!--</span>-->
<!--                        </a>-->
<!--                    </li>-->

<!--                    <li>-->
<!--                        <a href="--><?php //echo base_url(); ?><!--admin/navigation">-->
<!--                            <i class="fa fa-th"></i>-->
<!--                            <span>--><?php //echo trans("navigation"); ?><!--</span>-->
<!--                        </a>-->
<!--                    </li>-->

<!--                    <li class="treeview">-->
<!--                        <a href="#">-->
<!--                            <i class="fa fa-leaf"></i> <span>--><?php //echo trans("pages"); ?><!--</span> <i class="fa fa-angle-left pull-right"></i>-->
<!--                        </a>-->
<!--                        <ul class="treeview-menu">-->
<!--                            <li class="active">-->
<!--                                <a href="--><?php //echo base_url(); ?><!--page/add_page">-->
<!--                                    <i class="fa fa-circle-o"></i> --><?php //echo trans("add_page"); ?>
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="--><?php //echo base_url(); ?><!--page/pages"><i class="fa fa-circle-o"></i> --><?php //echo trans("pages"); ?>
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-bars"></i> <span><?php echo trans("posts"); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo base_url(); ?>admin_post/add_post"> <i class="fa fa-circle-o"></i> <?php echo trans("add_post"); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin_post/posts"><i class="fa fa-circle-o"></i> <?php echo trans("posts"); ?></a>
                            </li>
<!--                            <li>-->
<!--                                <a href="--><?php //echo base_url(); ?><!--admin_post/slider_posts"><i class="fa fa-circle-o"></i> --><?php //echo trans("slider_posts"); ?><!--</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="--><?php //echo base_url(); ?><!--admin_post/our_picks"><i class="fa fa-circle-o"></i> --><?php //echo trans("our_picks"); ?><!--</a>-->
<!--                            </li>-->
                            <li>
                                <a href="<?php echo base_url(); ?>admin_post/pending_posts"><i class="fa fa-circle-o"></i> <?php echo trans("pending_posts"); ?></a>
                            </li>
                        </ul>
                    </li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-asterisk"></i> <span><?php echo trans("projects"); ?></span> <i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li class="active">
								<a href="<?php echo base_url(); ?>admin_project/add_project"> <i class="fa fa-circle-o"></i> <?php echo trans("add_project"); ?></a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>admin_project/projects"><i class="fa fa-circle-o"></i> <?php echo trans("projects"); ?></a>
							</li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-american-sign-language-interpreting"></i> <span><?php echo trans("services"); ?></span> <i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li class="active">
								<a href="<?php echo base_url(); ?>admin_service/add_service"> <i class="fa fa-circle-o"></i> <?php echo trans("add_service"); ?></a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>admin_service/services"><i class="fa fa-circle-o"></i> <?php echo trans("services"); ?></a>
							</li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-font"></i> <span><?php echo trans("typography"); ?></span> <i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li class="active">
								<a href="<?php echo base_url(); ?>admin_typography/add_typography"> <i class="fa fa-circle-o"></i> <?php echo trans("add_typography"); ?></a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>admin_typography/typographys"><i class="fa fa-circle-o"></i> <?php echo trans("typography"); ?></a>
							</li>
						</ul>
					</li>
<!--                    <li>-->
<!--                        <a href="--><?php //echo base_url(); ?><!--admin_post/drafts">-->
<!--                            <i class="fa fa-file-text-o" aria-hidden="true"></i> <span>--><?php //echo trans("drafts"); ?><!--</span>-->
<!--                        </a>-->
<!--                    </li>-->

<!--                    <li class="treeview">-->
<!--                        <a href="#">-->
<!--                            <i class="fa fa-folder-open"></i> <span>--><?php //echo trans("categories"); ?><!--</span> <i class="fa fa-angle-left pull-right"></i>-->
<!--                        </a>-->
<!--                        <ul class="treeview-menu">-->
<!--                            <li class="active">-->
<!--                                <a href="--><?php //echo base_url(); ?><!--admin_category/categories">-->
<!--                                    <i class="fa fa-circle-o"></i> --><?php //echo trans("categories"); ?>
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="--><?php //echo base_url(); ?><!--admin_category/subcategories">-->
<!--                                    <i class="fa fa-circle-o"></i> --><?php //echo trans("subcategories"); ?>
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->

<!--                    <li class="treeview">-->
<!--                        <a href="#">-->
<!--                            <i class="fa fa-list"></i> <span>--><?php //echo trans("polls"); ?><!--</span> <i class="fa fa-angle-left pull-right"></i>-->
<!--                        </a>-->
<!--                        <ul class="treeview-menu">-->
<!--                            <li class="active">-->
<!--                                <a href="--><?php //echo base_url(); ?><!--poll/add_poll">-->
<!--                                    <i class="fa fa-circle-o"></i> --><?php //echo trans("add_poll"); ?>
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="active">-->
<!--                                <a href="--><?php //echo base_url(); ?><!--poll/polls">-->
<!--                                    <i class="fa fa-circle-o"></i> --><?php //echo trans("polls"); ?>
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li class="treeview">-->
<!--                        <a href="#">-->
<!--                            <i class="fa fa-image"></i> <span>--><?php //echo trans("gallery"); ?><!--</span>-->
<!--                            <i class="fa fa-angle-left pull-right"></i>-->
<!--                        </a>-->
<!--                        <ul class="treeview-menu">-->
<!--                            <li>-->
<!--                                <a href="--><?php //echo base_url(); ?><!--admin_category/gallery_categories">-->
<!--                                    <i class="fa fa-circle-o"></i> --><?php //echo trans("categories"); ?>
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="--><?php //echo base_url(); ?><!--gallery/photo_gallery">-->
<!--                                    <i class="fa fa-circle-o"></i> --><?php //echo trans("images"); ?>
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
					<li class="treeview">
						<a href="#">
							<i class="fa fa-image"></i> <span><?php echo trans("banner"); ?></span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li>
								<a href="<?php echo base_url(); ?>admin_category/gallery_categories">
									<i class="fa fa-circle-o"></i> <?php echo trans("categories"); ?>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>banner/photo_banner">
									<i class="fa fa-circle-o"></i> <?php echo trans("images"); ?>
								</a>
							</li>
						</ul>
					</li>

                    <li>
                        <a href="<?php echo base_url(); ?>admin/comments">
                            <i class="fa fa-comments"></i>
                            <span><?php echo trans("comments"); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/contact_messages">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            <span><?php echo trans("contact_messages"); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/newsletter">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span><?php echo trans("newsletter"); ?></span>
                        </a>
                    </li>
<!--                    <li>-->
<!--                        <a href="--><?php //echo base_url(); ?><!--admin/ad_spaces?type=index_top">-->
<!--                            <i class="fa fa-dollar" aria-hidden="true"></i>-->
<!--                            <span>--><?php //echo trans("ad_spaces"); ?><!--</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="--><?php //echo base_url(); ?><!--admin/update_profile/--><?php //echo user()->id; ?><!--">-->
<!--                            <i class="fa fa-user" aria-hidden="true"></i>-->
<!--                            <span>--><?php //echo trans("update_profile"); ?><!--</span>-->
<!--                        </a>-->
<!--                    </li>-->
                    <li>
                        <a href="<?php echo base_url(); ?>admin/users"><i class="fa fa-users"></i>
                            <span><?php echo trans("users"); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/font_options"><i class="fa fa-font" aria-hidden="true"></i>
                            <span><?php echo trans("font_options"); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/seo_tools"><i class="fa fa-wrench"></i>
                            <span><?php echo trans("seo_tools"); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/email_settings">
                            <i class="fa fa-cog"></i>
                            <span><?php echo trans("email_settings"); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>language/languages">
                            <i class="fa fa-language"></i>
                            <span><?php echo trans("language_settings"); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/settings">
                            <i class="fa fa-cogs"></i>
                            <span><?php echo trans("settings"); ?></span>
                        </a>
                    </li>
                <?php else: ?>
                    <li>
                        <a href="<?php echo base_url(); ?>admin_post/add_post">
                            <i class="fa fa-file"></i> <?php echo trans("add_post"); ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin_post/posts"><i class="fa fa-bars"></i> <?php echo trans("posts"); ?>
                        </a>
                    </li>
<!--                    <li>-->
<!--                        <a href="--><?php //echo base_url(); ?><!--admin_post/pending_posts">-->
<!--							<i class="fa fa-low-vision"></i>-->
<!--							--><?php //echo trans("pending_posts"); ?>
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="--><?php //echo base_url(); ?><!--admin_post/drafts">-->
<!--                            <i class="fa fa-file-text-o" aria-hidden="true"></i> <span>--><?php //echo trans("drafts"); ?><!--</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="--><?php //echo base_url(); ?><!--admin/update_profile/--><?php //echo user()->id; ?><!--">-->
<!--                            <i class="fa fa-user" aria-hidden="true"></i>-->
<!--                            <span>--><?php //echo trans("update_profile"); ?><!--</span>-->
<!--                        </a>-->
<!--                    </li>-->
                <?php endif; ?>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
