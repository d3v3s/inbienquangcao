<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="box">
	<div class="box-header with-border">
		<div class="left">
			<h3 class="box-title"><?php echo $title; ?></h3>
		</div>
		<div class="right">
			<a href="<?php echo base_url(); ?>admin_service/add_service" class="btn btn-sm btn-success btn-add-new pull-right">
				<i class="fa fa-plus"></i>
				<?php echo trans('add_service'); ?>
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
						<?php $this->load->view('admin/includes/_filter_services'); ?>
						<thead>
						<tr role="row">
							<th width="20"><input type="checkbox" class="checkbox-table" id="checkAll"></th>
							<th width="20"><?php echo trans('id'); ?></th>
							<th>Tên dịch vụ</th>
							<th><?php echo trans('author'); ?></th>
							<th><?php echo trans('status'); ?></th>
							<th><?php echo trans('date'); ?></th>
							<th class="max-width-120"><?php echo trans('options'); ?></th>
						</tr>
						</thead>
						<tbody>

						<?php foreach ($services as $item): ?>
							<tr>
								<td><input type="checkbox" name="checkbox-table" class="checkbox-table" value="<?php echo $item->id; ?>"></td>
								<td><?php echo html_escape($item->id); ?></td>
								<td class="td-service">
									<img style="max-height: 100px !important; max-width: 150px !important;" src="<?php echo base_url(); ?><?php echo $item->image_big; ?>" alt="" class="img-responsive"/>
									<?php echo html_escape($item->title); ?>
								</td>
								<td>
									<?php $author = get_user($item->user_id);
									if (!empty($author)): ?>
										<a href="<?php echo base_url(); ?>admin/update_profile/<?php echo html_escape($author->id); ?>" target="_blank">
											<strong><?php echo html_escape($author->username); ?></strong>
										</a>
									<?php endif; ?>
								</td>
								<td><?php echo $item->status; ?></td>
								<td><?php echo $item->created_at; ?></td>
								<td>
									<?php echo form_open('admin_service/service_options_post'); ?>
									<input type="hidden" name="id" value="<?php echo html_escape($item->id); ?>">
									<div class="dropdown">
										<button class="btn bg-purple dropdown-toggle btn-select-option"
												type="button"
												data-toggle="dropdown"><?php echo trans('select_option'); ?>
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu pull-right options-list">
											<li>
												<a href="<?php echo base_url(); ?>admin_service/update_service/<?php echo html_escape($item->id); ?>">
													<i class="fa fa-edit i-edit"></i><?php echo trans('edit'); ?></a>
											</li>
											<li>
												<a class="p0">
													<button type="submit" name="option" value="delete"
															class="btn-list-button"
															onclick="return confirm('<?php echo trans("confirm_service"); ?>');">
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

							<?php if (count($services) > 0): ?>
								<div class="pull-left">
									<button class="btn btn-sm btn-danger btn-table-delete" onclick="delete_selected_services('<?php echo trans("confirm_services"); ?>');"><?php echo trans('delete'); ?></button>
								</div>
							<?php endif; ?>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div><!-- /.box-body -->
</div>
