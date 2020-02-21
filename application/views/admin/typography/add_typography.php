<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row">
	<div class="col-sm-12">
		<!-- form start -->
		<?php echo form_open_multipart('admin_typography/add_typography_post'); ?>

		<div class="row">
			<div class="col-sm-12 form-header">
				<h1 class="form-title"><?php echo trans('add_typography'); ?></h1>
				<a href="<?php echo base_url(); ?>admin_typography/typographys" class="btn btn-sm btn-success btn-add-new pull-right">
					<i class="fa fa-bars"></i>
					<?php echo trans('typographys'); ?>
				</a>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="form-post">

					<div class="form-post-left">
						<?php $this->load->view("admin/includes/_form_add_typography_left"); ?>
					</div>

					<div class="form-post-right">

						<div class="row">

							<div class="col-sm-12">
								<?php $this->load->view('admin/includes/_typography_image_upload_box'); ?>
							</div>
							<div class="col-sm-12">
								<div class="box">
									<div class="box-header with-border">
										<div class="left">
											<h3 class="box-title"><?php echo trans('language'); ?></h3>
										</div>
									</div><!-- /.box-header -->

									<div class="box-body">
										<div class="form-group">
											<label><?php echo trans("language"); ?></label>
											<select name="lang_id" class="form-control" onchange="get_categories_by_lang(this.value);">
												<?php foreach ($languages as $language): ?>
													<option value="<?php echo $language->id; ?>" <?php echo ($site_lang->id == $language->id) ? 'selected' : ''; ?>><?php echo $language->name; ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-12">
								<?php $this->load->view('admin/includes/_typography_publish_box'); ?>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
		<?php echo form_close(); ?><!-- form end -->

	</div>
</div>

