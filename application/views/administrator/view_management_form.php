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
						<label for="varchar">Name Management <?php echo form_error('name_management') ?></label>
						<input type="text" class="form-control" name="name_management"
							id="name_management" placeholder="Name Management"
							value="<?php echo $name_management; ?>" />
					</div>
					<div class="form-group">
						<label for="description_management">Description Management <?php echo form_error('description_management') ?></label>
						<textarea class="form-control" rows="3"
							name="description_management" id="description_management"
							placeholder="Description Management"><?php echo $description_management; ?></textarea>
					</div>
					<div class="form-group">
						<label for="varchar">Photo Management <?php echo form_error('photo_management') ?></label>
						<input type="text" class="form-control" name="photo_management"
							id="photo_management" placeholder="Photo Management"
							value="<?php echo $photo_management; ?>" />
					</div>
					<input type="hidden" name="id_management"
						value="<?php echo $id_management; ?>" />
					<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
					<a href="<?php echo site_url('administrator/management') ?>"
						class="btn btn-default">Cancel</a>
				</div>
			</form>
		</div>
		<!-- /.box -->

	</section>
	<!-- /.content -->
</div>