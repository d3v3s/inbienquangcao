<div class="box">
    <div class="box-header with-border">
        <div class="left">
            <h3 class="box-title"><?php echo trans('service_details'); ?></h3>
        </div>
    </div><!-- /.box-header -->

    <div class="box-body">
        <!-- include message block -->
        <?php $this->load->view('admin/includes/_messages'); ?>

        <input type="hidden" name="id" value="<?php echo html_escape($service->id); ?>">
        <input type="hidden" name="referrer" class="form-control" value="<?php echo  $this->agent->referrer(); ?>">

        <div class="form-group">
            <label class="control-label"><?php echo trans('title'); ?></label>
            <input type="text" class="form-control" name="title" placeholder="<?php echo trans('title'); ?>"
                   value="<?php echo html_escape($service->title); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?> required>
        </div>

		<div class="form-group">
            <label class="control-label"><?php echo trans('summary'); ?> & <?php echo trans("description"); ?> (<?php echo trans('meta_tag'); ?>)</label>
            <textarea class="form-control text-area" name="summary"
                      placeholder="<?php echo trans('summary'); ?> & <?php echo trans("description"); ?> (<?php echo trans('meta_tag'); ?>)" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>><?php echo html_escape($service->summary); ?></textarea>
        </div>

        <div class="form-group">
            <label class="control-label"><?php echo trans('content'); ?></label>
            <textarea id="ckEditor" class="form-control"
                      name="content" placeholder="<?php echo trans('content'); ?>"><?php echo html_escape($service->content); ?></textarea>
        </div>


    </div>
</div>

<?php $this->load->view("admin/includes/_file_manager_ckeditor"); ?>
