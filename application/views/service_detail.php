<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="page-header page-title-left page-title-pattern">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="title text-center"><?php echo $service->title; ?></h3>
			</div>
		</div>
	</div>
</div>

<section id="services" class="page-section service-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-9 col-md-push-3">
				<div class="row">
					<div class="col-md-12">
						<?php echo $service->content; ?>
					</div>
				</div>
				<hr class="top-margin-0" />
				<div class="col-md-12">
					<div style="float: right">
						<div class="fb-like"data-href="<?php echo base_url().'du-an/'.$service->id; ?>" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
					</div>
				</div>
				<div class="fb-comments" data-href="<?php echo base_url().'du-an/'.$service->id; ?>" data-width="100%" data-numposts="5"></div>
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
				<div class="widget list-border">
					<div class="widget-title">
						<h3 class="title">Các dịch vụ khác</h3>
					</div>
					<div id="MainMenu">
						<div class="list-group panel">
							<?php foreach ($services as $item): ?>
								<a href="<?php echo base_url().'du-an/'.$item->slug; ?>" target="_blank" class="list-group-item"><?php echo $item->title; ?></a>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

