<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?php echo $title;?>
		</h1>
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="box box-primary">
			<form action="<?php echo $action; ?>" method="post">
				<div class="box-body">
					<div class="form-group">
						<label for="varchar">Name Company <?php echo form_error('name_company') ?></label>
						<input type="text" class="form-control" name="name_company"
							id="name_company" placeholder="Name Company"
							value="<?php echo $name_company; ?>" />
					</div>
					<div class="form-group">
						<label for="address_company">Address Company <?php echo form_error('address_company') ?></label>
						<textarea class="form-control" rows="3" name="address_company"
							id="address_company" placeholder="Address Company"><?php echo $address_company; ?></textarea>
					</div>
					<div class="form-group">
						<label for="varchar">Email Company <?php echo form_error('email_company') ?></label>
						<input type="text" class="form-control" name="email_company"
							id="email_company" placeholder="Email Company"
							value="<?php echo $email_company; ?>" />
					</div>
					<div class="form-group">
						<label for="varchar">Telepohone Company <?php echo form_error('telepohone_company') ?></label>
						<input type="text" class="form-control" name="telepohone_company"
							id="telepohone_company" placeholder="Telepohone Company"
							value="<?php echo $telepohone_company; ?>" />
					</div>
					<div class="form-group">
						<label for="varchar">Pic Company <?php echo form_error('pic_company') ?></label>
						<input type="text" class="form-control" name="pic_company"
							id="pic_company" placeholder="Pic Company"
							value="<?php echo $pic_company; ?>" />
					</div>
					<input type="hidden" name="id_company"
						value="<?php echo $id_company; ?>" />
					<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
					<a href="<?php echo site_url('administrator/company') ?>" class="btn btn-default">Cancel</a>
				</div>
			</form>
		</div>
		<!-- /.box -->

	</section>
	<!-- /.content -->
</div>