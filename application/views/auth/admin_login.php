<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo html_escape($title); ?> - <?php echo trans("admin"); ?>&nbsp;<?php echo html_escape($settings->site_title); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<?php if (empty($general_settings->favicon_path)): ?>
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png"/>
	<?php else: ?>
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url() . html_escape($general_settings->favicon_path); ?>"/>
	<?php endif; ?>
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/AdminLTE.min.css">
    <!-- AdminLTE Skins -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/_all-skins.min.css">

    <!-- Custom css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/custom.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="<?php echo base_url(); ?>admin/login"><b><?php echo trans("admin_panel"); ?></a>
    </div>
    <div class="login-box-body">
        <h4 class="login-box-msg"><?php echo trans("login"); ?></h4>

        <?php $this->load->view('partials/_messages'); ?>

		<?php echo form_open('auth/login_post'); ?>
		<input type="hidden" name="redirect_url" value="<?php echo lang_base_url().'admin'; ?>">
		<div class="form-group has-feedback">
			<input type="text" name="username" class="form-control"
				   placeholder="<?php echo html_escape(trans("username")); ?>"
				   required <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
			<span class="glyphicon glyphicon-user form-control-feedback"></span>
		</div>

		<div class="form-group has-feedback">
			<input type="password" name="password" class="form-control"
				   placeholder="<?php echo html_escape(trans("password")); ?>"
				   required <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
			<span class=" glyphicon glyphicon-lock form-control-feedback"></span>
		</div>

		<div class="row">
<!--			<div class="col-sm-8 col-xs-12 col-login">-->
<!--				<a href="--><?php //echo lang_base_url(); ?><!--reset-password" class="link-forget">-->
<!--					--><?php //echo html_escape(trans("forgot_password")); ?>
<!--				</a>-->
<!--			</div>-->
			<div class="col-sm-4 col-xs-12 col-login">
				<button type="submit" class="btn btn-primary btn-action pull-right">
					<?php echo html_escape(trans("login")); ?>
				</button>
			</div>
		</div>
		<?php echo form_close(); ?>
    </div>
</div>
</body>
</html>
