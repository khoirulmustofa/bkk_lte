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
						<label for="varchar">Name About Us <?php echo form_error('name_about_us') ?></label>
						<input type="text" class="form-control" name="name_about_us"
							id="name_about_us" placeholder="Name About Us"
							value="<?php echo $name_about_us; ?>" />
					</div>
					<div class="form-group">
						<label for="description_about_us">Description About Us <?php echo form_error('description_about_us') ?></label>
						<textarea class="form-control" rows="3"
							name="description_about_us" id="description_about_us"
							placeholder="Description About Us"><?php echo $description_about_us; ?></textarea>
					</div>
					<input type="hidden" name="id_about_us"
						value="<?php echo $id_about_us; ?>" />
					<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
					<a href="<?php echo site_url('administrator/about_us') ?>"
						class="btn btn-default">Cancel</a>
				</div>
			</form>
		</div>
		<!-- /.box -->

	</section>
	<!-- /.content -->
</div>