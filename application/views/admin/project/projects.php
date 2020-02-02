<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="box">
    <div class="box-header with-border">
        <div class="left">
            <h3 class="box-title"><?php echo $title; ?></h3>
        </div>
        <div class="right">
            <a href="<?php echo base_url(); ?>admin_project/add_project" class="btn btn-sm btn-success btn-add-new pull-right">
                <i class="fa fa-plus"></i>
                <?php echo trans('add_project'); ?>
            </a>
        </div>
    </div><!-- /.box-header -->

    <div class="box-body">
        <div class="row">
            <!-- include message block -->
            <div class="col-sm-12">
                <?php $this->load->view('admin/includes/_messages'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" role="grid">
                        <?php $this->load->view('admin/includes/_filter_projects'); ?>
                        <thead>
                        <tr role="row">
                            <th width="20"><input type="checkbox" class="checkbox-table" id="checkAll"></th>
                            <th width="20"><?php echo trans('id'); ?></th>
                            <th><?php echo trans('project'); ?></th>
                            <th><?php echo trans('language'); ?></th>
                            <th><?php echo trans('author'); ?></th>
                            <th></th>
                            <?php if ($list_type == "slider_projects"): ?>
                                <th><?php echo trans('slider_order'); ?></th>
                            <?php endif; ?>
                            <th><?php echo trans('date'); ?></th>
                            <th class="max-width-120"><?php echo trans('options'); ?></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($projects as $item): ?>
                            <tr>
                                <td><input type="checkbox" name="checkbox-table" class="checkbox-table" value="<?php echo $item->id; ?>"></td>
                                <td><?php echo html_escape($item->id); ?></td>
                                <td class="td-project">
                                    <img src="<?php echo base_url().$item->image_small; ?>" alt="" class="img-responsive"/>
                                    <?php echo html_escape($item->title); ?>
                                </td>
                                <td>
                                    <?php
                                    $lang = get_language($item->lang_id);
                                    if (!empty($lang)) {
                                        echo html_escape($lang->name);
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php $author = get_user($item->user_id);
                                    if (!empty($author)): ?>
                                        <a href="<?php echo base_url(); ?>profile/<?php echo html_escape($author->slug); ?>" target="_blank">
                                            <strong><?php echo html_escape($author->username); ?></strong>
                                        </a>
                                    <?php endif; ?>
                                </td>
                                <td class="td-project-sp">
                                    <?php if ($item->visibility == 1): ?>
                                        <label class="label label-success label-table"><i class="fa fa-eye"></i></label>
                                    <?php else: ?>
                                        <label class="label label-danger label-table"><i class="fa fa-eye"></i></label>
                                    <?php endif; ?>

                                    <?php if ($item->is_slider): ?>
                                        <label class="label bg-olive label-table"><?php echo trans('slider'); ?></label>
                                    <?php endif; ?>

                                    <?php if ($item->is_picked ): ?>
                                        <label class="label bg-aqua label-table"><?php echo trans('our_picks'); ?></label>
                                    <?php endif; ?>

                                    <?php if ($item->need_auth): ?>
                                        <label class="label label-warning label-table"><?php echo trans('only_registered'); ?></label>
                                    <?php endif; ?>

                                </td>
                                <?php if ($list_type == "slider_projects"): ?>
                                    <td>
                                        <?php echo form_open('admin_project/home_slider_projects_order_project'); ?>
                                        <div class="slider-order">
                                            <div class="slider-order-left">
                                                <input type="hidden" name="id"
                                                       value="<?php echo html_escape($item->id); ?>">
                                                <input type="number" name="slider_order" class="form-control"
                                                       value="<?php echo html_escape($item->slider_order); ?>" min="1" max="99999">
                                            </div>
                                            <div class="slider-order-right">
                                                <button type="submit" class="btn btn-sm btn-success"><i
                                                            class="fa fa-check"></i></button>
                                            </div>
                                        </div>
                                        <?php echo form_close(); ?>
                                    </td>
                                <?php endif; ?>
                                <td><?php echo $item->created_at; ?></td>

                                <td>
                                    <!-- form delete user -->
                                    <?php echo form_open('admin_project/project_options_project'); ?>

                                    <input type="hidden" name="id" value="<?php echo html_escape($item->id); ?>">

                                    <div class="dropdown">
                                        <button class="btn bg-purple dropdown-toggle btn-select-option"
                                                type="button"
                                                data-toggle="dropdown"><?php echo trans('select_option'); ?>
                                            <span class="caret"></span>
                                        </button>

                                        <ul class="dropdown-menu pull-right options-list">
                                            <li>
                                                <a href="<?php echo base_url(); ?>admin_project/update_project/<?php echo html_escape($item->id); ?>">
                                                    <i class="fa fa-edit i-edit"></i><?php echo trans('edit'); ?></a>
                                            </li>
                                            <li>
                                                <a class="p0">
                                                    <button type="submit" name="option" value="delete"
                                                            class="btn-list-button"
                                                            onclick="return confirm('<?php echo trans("confirm_project"); ?>');">
                                                        <i class="fa fa-trash i-delete"></i><?php echo trans('delete'); ?>
                                                    </button>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <?php echo form_close(); ?><!-- form end -->

                                </td>
                            </tr>
                        <?php endforeach; ?>

                        </tbody>
                    </table>

                    <div class="col-sm-12 table-ft">
                        <div class="row">

                            <div class="pull-right">
                                <?php echo $this->pagination->create_links(); ?>
                            </div>

                            <?php if (count($projects) > 0): ?>
                                <div class="pull-left">
                                    <button class="btn btn-sm btn-danger btn-table-delete" onclick="delete_selected_projects('<?php echo trans("confirm_projects"); ?>');"><?php echo trans('delete'); ?></button>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- /.box-body -->
</div>
