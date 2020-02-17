<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="page-header page-title-left page-title-pattern">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="title text-center"><?php echo $project->title; ?></h3>
			</div>
		</div>
	</div>
</div>

<section id="services" class="page-section service-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-9 col-md-push-3">
				<div class="row">
					<div class="col-md-12 content-block">
						<div class="text-center">
							<div class="owl-carousel navigation-4" data-pagination="false" data-items="1"
								 data-singleitem="true" data-autoplay="true" data-navigation="true">
								<?php $additional_images = get_project_additional_images($project->id); ?>
								<?php if (!empty($additional_images)): ?>
									<?php foreach ($additional_images as $image): ?>
										<a href="<?php echo base_url() . $image->image_path; ?>" class="opacity" data-rel="prettyPhoto[portfolio]">
											<img src="<?php echo base_url() . $image->image_path; ?>" width="1000" height="500" alt="" />
										</a>
									<?php endforeach; ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p>
							<b style="font-size: 18px; font-weight: bold">Tên dự án:</b>
							<span><?php echo $project->title; ?></span></p>
						<p>
							<b style="font-size: 18px; font-weight: bold">Khách hàng:</b>
							<span><?php echo $project->customer; ?></span></p>
						<p>
							<b style="font-size: 18px; font-weight: bold">Kinh phí:</b>
							<span><?php echo number_format($project->estimation).' VND'; ?> </span></p>
						<p>
							<b style="font-size: 18px; font-weight: bold">Thời gian thi công:</b>
							<span>4 ngày</span></p>
					</div>
					<div class="col-md-7">
						<?php echo $project->content; ?>
					</div>
				</div>
				<hr class="top-margin-0" />
				<div class="col-md-12">
					<div style="float: right">
						<div class="fb-like"data-href="<?php echo base_url().'du-an/'.$project->id; ?>" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
					</div>
				</div>
				<div class="fb-comments" data-href="<?php echo base_url().'du-an/'.$project->id; ?>" data-width="100%" data-numposts="5"></div>
			</div>
			<div class="sidebar col-sm-12 col-md-3 col-md-pull-9">
				<div class="widget list-border">
					<div class="widget-title">
						<h3 class="title">Tư vấn online</h3>
					</div>
					<div id="MainMenu">
						<div class="list-group panel">
							<a href="https://zalo.me/0968858111" target="_blank" class="list-group-item">Chat Zalo</a>
							<a href="https://zalo.me/0968858111" target="_blank" class="list-group-item">Chat Facebook</a>
						</div>
					</div>
				</div>
<!--				<div class="widget">-->
<!--					<div class="widget">-->
<!--						<div class="widget-title">-->
<!--							<h3 class="title">Tags</h3>-->
<!--						</div>-->
<!--						<ul class="tags">-->
<!--							--><?php //foreach ($tags as $item): ?>
<!--								--><?php //$this->load->view('partials/post_tag_item', ['item' => $item]); ?>
<!--							--><?php //endforeach; ?>
<!--						</ul>-->
<!--					</div>-->
<!--				</div>-->
			</div>
		</div>
	</div>
</section>

