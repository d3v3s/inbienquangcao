<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="page-header page-title-left page-title-pattern">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo lang_base_url(); ?>"><?php echo trans("home"); ?></a>
					</li>
					<li class="active">
						<?php echo html_escape(trans("tag")); ?>
						: <?php echo html_escape($tag->tag); ?>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Section: main -->
<section class="page-section">
	<div class="container">
		<div class="row">


			<div class="page-content">
				<div class="col-xs-12 col-sm-12 col-md-8">

					<div class="content">
						<h1 class="page-title"> <?php echo html_escape(trans("tag")); ?>
							: <?php echo html_escape($tag->tag); ?></h1>

						<!-- posts -->
						<div class="col-xs-12 col-sm-12 posts <?php echo ($layout == "layout_3" || $layout == "layout_6") ? 'p-0 posts-boxed' : ''; ?>">
							<div class="row">
								<?php $count = 0; ?>

								<?php foreach ($posts as $item): ?>

									<?php if ($count != 0 && $count % 2 == 0): ?>
										<div class="col-sm-12 col-xs-12"></div>
									<?php endif; ?>

									<!-- post item -->
									<?php $this->load->view('partials/_post_item', ['item' => $item]); ?>
									<!-- /.post item -->

									<?php if ($count == 1): ?>

										<?php $this->load->view("partials/_ad_spaces", ["ad_space" => "tag_top"]); ?>

										<!-- increment count -->
									<?php endif; ?>

									<?php $count++; ?>
								<?php endforeach; ?>
							</div>

						</div><!-- /.posts -->

						<div class="col-xs-12 col-sm-12 col-xs-12">
							<div class="row">
								<?php $this->load->view("partials/_ad_spaces", ["ad_space" => "tag_bottom"]); ?>
							</div>
						</div>

						<!-- Pagination -->
						<div class="col-xs-12 col-sm-12 col-xs-12">
							<div class="row">
								<?php echo $this->pagination->create_links(); ?>
							</div>
						</div>

					</div>

				</div>


				<div class="sidebar col-sm-12 col-md-3">
					<div class="widget">
						<div class="widget-title">
							<h3 class="title">Bài viết gần đây</h3>
						</div>
						<ul class="latest-posts">
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
					<div class="widget">
						<div class="widget-title">
							<h3 class="title">Tags</h3>
						</div>
						<ul class="tags">
							<?php foreach ($tags as $item): ?>
								<?php $this->load->view('partials/post_tag_item', ['item' => $item]); ?>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
