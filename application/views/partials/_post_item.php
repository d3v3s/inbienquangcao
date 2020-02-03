<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $post_category = get_post_category($item); ?>
<div class="col-sm-6 col-md-6 col-xs-12">
	<div class="post-item">
		<div class="post-image">
			<img src="<?php echo base_url(); ?><?php echo $item->image_big; ?>" width="600" height="400" alt="" title="" />
		</div>
		<h2 class="post-title">
			<a href="<?php echo base_url().'post/'.$item->title_slug; ?>"><?php echo $item->title; ?></a>
		</h2>
		<div class="post-content">
			<?php echo $item->summary; ?>
		</div>
		<div class="post-meta">
			<span>
				<a class="author" href="<?php echo lang_base_url(); ?>profile/<?php echo html_escape($item->user_slug); ?>">
					<i class="fa fa-user"></i><?php echo html_escape($item->username); ?>
				</a>
			</span>
			<?php if ($general_settings->show_pageviews == 1) : ?>
				<span>
				<i class="fa fa-eye"></i>&nbsp;
                <?php echo $item->hit; ?>
			</span>
			<?php endif; ?>
			<span class="pull-right">
				<i class="fa fa-calendar"></i>&nbsp;
				<?php echo helper_date_format($item->created_at); ?>
			</span>
		</div>
	</div>
</div>
