<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="page-header page-title-left page-title-pattern">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="title"><?php echo $post->title; ?></h3>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url(); ?>">Trang chủ</a>
					</li>
					<li>
						<a href="<?php echo base_url().'tin-tuc'; ?>">Tin tức</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<section class="page-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-9">
				<div class="row">
					<div class="col-sm-12">
						<div class="post-content">
							<?php echo $post->content; ?>
						</div>
						<div class="post-meta">
							<!-- Author  -->
							<span class="author">
                                <i class="fa fa-user"></i><?php echo $post->username; ?></span>
							<!-- Meta Date -->

							<span class="time pull-right">
                                <i class="fa fa-calendar"></i><?php echo helper_date_format($post->created_at); ?></span>

						</div>
					</div>
				</div>
				<hr />
			</div>
			<div class="sidebar col-sm-12 col-md-3">
				<div class="widget">
					<div class="widget-title">
						<h3 class="title">Bài viết gần đây</h3>
					</div>
					<ul class="latest-posts">
						<!--List  popular posts-->
						<?php foreach ($popular_posts as $item): ?>
							<li>
								<div class="post-thumb">
									<img class="img-rounded" src="<?php echo base_url().$item->image_small; ?>"
										 alt="<?php echo html_escape($item->title); ?>" title="<?php echo $item->title; ?>" width="84" height="84" />
								</div>
								<div class="post-details">
									<div class="description">
										<a href="<?php echo base_url() . 'post/' . html_escape($item->title_slug); ?>">
											<?php echo $item->title; ?>
										</a>
									</div>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
