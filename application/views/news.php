<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('partials/_breadcrumb'); ?>
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
							<?php echo $this->pagination->create_links_client(); ?>
						</div>
					</div>
				</div>
			</div>
			<!-- pagination -->
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
</section>
