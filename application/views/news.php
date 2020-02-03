<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('partials/_breadcrumb'); ?>
<!-- printf posts -->

<section class="page-section">
	<div class="container">
		<div class="col-sm-12 col-md-9">
			<div class="row" id="post-result">
				<?php $this->load->view('partials/_posts'); ?>
				<!-- post -->
			</div>

			<div class="row">
				<div class="col-md-12">

					<div class="col-xs-12 col-sm-12 col-xs-12">
						<div class="row">
							<?php echo $this->pagination->create_links(); ?>
						</div>
					</div>
				</div>
			</div>
			<!-- pagination -->
		</div>
		<div class="sidebar col-sm-12 col-md-3">
			<div class="widget">
				<div class="widget-title">
					<h3 class="title">Recent Posts</h3>
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
					<h3 class="title">Hình ảnh</h3>
				</div>
				<input type="hidden" id="per_page" value="">
				<div class="owl-carousel navigation-4" data-pagination="false" data-items="1" data-autoplay="true"
					 data-navigation="true">
					<img src="<?php echo base_url(); ?>assets/img/sections/blog/1.jpg" width="270" height="270" alt="" />
					<img src="<?php echo base_url(); ?>assets/img/sections/blog/1.jpg" width="270" height="270" alt="" /></div>
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
</section>
