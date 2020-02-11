<?php $count = 0; ?>
<?php foreach ($posts as $item): ?>

	<?php if ($count != 0 && $count % 2 == 0): ?>
		<div class="col-sm-12 col-xs-12"></div>
	<?php endif; ?>

	<!-- post item -->
	<?php $this->load->view('partials/_post_item', ['item' => $item]); ?>
	<!-- /.post item -->

	<?php if ($count == 1): ?>

		<?php $this->load->view("partials/_ad_spaces", ["ad_space" => "index_top"]); ?>

		<!-- increment count -->
	<?php endif; ?>

	<?php $count++; ?>
<?php endforeach; ?>
