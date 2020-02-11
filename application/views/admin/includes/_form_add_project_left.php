<div class="box">
    <div class="box-header with-border">
        <div class="left">
            <h3 class="box-title"><?php echo trans('project_details'); ?></h3>
        </div>
    </div><!-- /.box-header -->

    <div class="box-body">
        <!-- include message block -->
        <?php $this->load->view('admin/includes/_messages'); ?>

        <div class="form-group">
            <label class="control-label"><?php echo trans('title'); ?></label>
            <input type="text" class="form-control" name="title" placeholder="<?php echo trans('title'); ?>"
                   value="<?php echo old('title'); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?> required>
        </div>

		<div class="form-group">
			<label class="control-label"> Khách hàng</label>
			<input type="text" class="form-control" name="customer"
				   placeholder="Khách hàng" value="<?php echo old('customer'); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
		</div>

		<div class="form-group">
			<label class="control-label">Kinh phí</label>
			<input type="number" class="form-control" name="estimation"
				   placeholder="Kinh phí" value="<?php echo old('estimation'); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
		</div>

		<div class="form-group">
			<label class="control-label"><?php echo trans('keywords'); ?> (<?php echo trans('meta_tag'); ?>)</label>
			<input type="text" class="form-control" name="keywords"
				   placeholder="<?php echo trans('keywords'); ?> (<?php echo trans('meta_tag'); ?>)" value="<?php echo old('keywords'); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
		</div>

        <div class="form-group">
            <label class="control-label"><?php echo trans('summary'); ?> & <?php echo trans("description"); ?></label>
            <textarea class="form-control text-area"
                      name="summary" placeholder="<?php echo trans('summary'); ?> & <?php echo trans("description"); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>><?php echo old('summary'); ?></textarea>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="control-label"><?php echo trans('content'); ?></label>
                    <textarea id="ckEditor" class="form-control"
                              name="content" placeholder="Content" required><?php echo old('content'); ?></textarea>
                </div>
            </div>
        </div>


    </div>

</div>

<?php $this->load->view("admin/includes/_file_manager_ckeditor"); ?>

