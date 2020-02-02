<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- /.Section: main -->
<div class="page-header page-title-left page-title-pattern">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="title"><?php echo html_escape($page->title); ?></h1>
				<h5><?php echo html_escape($page->page_description); ?></h5>

				<!--Check breadcrumb active-->
				<?php if ($page->breadcrumb_active == 1): ?>
					<ul class="breadcrumb">
						<li>
							<a href="<?php echo lang_base_url(); ?>"><?php echo trans("home"); ?></a>
						</li>
						<li class="active"><?php echo html_escape($page->title); ?></li>
					</ul>
				<?php else: ?>
				<?php endif; ?>

			</div>
		</div>
	</div>
</div>
