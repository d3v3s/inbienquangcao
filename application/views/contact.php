<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('partials/_breadcrumb'); ?>
<section id="contact-us" class="page-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<h5 class="title">
							<i class="icon-address text-color"></i>Địa chỉ</h5>
						<?php if ($settings->contact_address): ?>
							<address>
								<?php echo html_escape($settings->contact_address); ?>
							</address>
						<?php endif; ?>
					</div>
					<div class="col-sm-6 col-md-6">
						<h5 class="title">
							<i class="icon-contacts text-color"></i>Thông tin liên hệ</h5>
						<?php if ($settings->contact_phone): ?>
							<div>Phone : <?php echo html_escape($settings->contact_phone); ?></div>
						<?php endif; ?>
						<?php if ($settings->contact_email): ?>
							<div>Email :
								<a href="mailto:<?php echo html_escape($settings->contact_email); ?>"><?php echo html_escape($settings->contact_email); ?></a>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<hr />
				<?php echo $settings->contact_text; ?>,
			</div>
			<div class="col-md-6 col-md-6">
				<h3 class="title"><?php echo trans("leave_message"); ?></h3>
				<p class="form-message"></p>
				<div class="contact-form">
					<?php $this->load->view('partials/_messages'); ?>
					<!-- Form Begins -->
					<?php echo form_open('home/contact_post'); ?>
					<div class="form-group">
						<input type="text" class="form-control form-input" name="name"
							   placeholder="<?php echo trans("name"); ?>" maxlength="199" minlength="1"
							   pattern=".*\S+.*" value="<?php echo old('name'); ?>" required <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
					</div>
					<div class="form-group">
						<input type="email" class="form-control form-input" name="email" maxlength="199"
							   placeholder="<?php echo trans("email"); ?>"
							   value="<?php echo old('email'); ?>" required <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
					</div>
					<div class="form-group">
                                    <textarea class="form-control form-input form-textarea" name="message"
											  placeholder="<?php echo trans("message"); ?>" maxlength="4970"
											  minlength="5"
											  required <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>><?php echo old('message'); ?></textarea>
					</div>
					<?php if ($recaptcha_status): ?>
						<div class="recaptcha-cnt m-b-15">
							<?php
							echo $recaptcha_widget;
							echo $recaptcha_script;
							?>
						</div>
					<?php endif; ?>
					<div class="form-group">
						<button class="btn btn-default" type="submit">
							<?php echo html_escape(trans("submit")); ?><i class="icon-paper-plane"></i>
						</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
