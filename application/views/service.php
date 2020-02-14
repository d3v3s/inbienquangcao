<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('partials/_breadcrumb'); ?>
<section id="services" class="page-section">
	<div class="container">
		<div class="row">
			<?php foreach ($services as $item): ?>
				<div class="col-sm-6 col-md-4 col-xs-12">
					<div class="grid-item">
						<div class="grid">
							<p class="text-center">
								<a href="<?php echo base_url().$item->image_big; ?>"" class="opacity" data-rel="prettyPhoto[portfolio]">
								<img src="<?php echo base_url().$item->image_big; ?>" width="420" height="280" alt="<?php echo $item->title; ?>" title="<?php echo $item->title; ?>" />
								</a>
							</p>
							<div class="figcaption">
								<a href="<?php echo base_url(); ?>chi-tiet-dich-vu/<?php echo $item->slug; ?>">
									<i class="fa"><?php echo $item->title; ?></i>
								</a>
							</div>
						</div>
					</div>

				</div>
			<?php endforeach; ?>

		</div>
		<hr class="tb-margin-30" />
	</div>
</section>
