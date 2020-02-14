<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="page-header page-title-left page-title-pattern">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="title"><?php echo $project->title; ?></h3>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url(); ?>">Trang chủ</a>
					</li>
					<li>
						<a href="<?php echo base_url().'du-an'; ?>">Dự án</a>
					</li>
					<li>
						<a href="<?php echo base_url().'chi-tiet-du-an/'.$project->id; ?>">Chi tiết dự án</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
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
				<div style="float: right">
					<div class="fb-like"data-href="<?php echo base_url().'chi-tiet-du-an/'.$project->id; ?>" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
				</div>
			</div>
			<div class="fb-comments" data-href="<?php echo base_url().'chi-tiet-du-an/'.$project->id; ?>" data-width="100%" data-numposts="5"></div>

		</div>
	</div>
</section>
