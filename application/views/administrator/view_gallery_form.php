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
						<label for="varchar">Name Gallery <?php echo form_error('name_gallery') ?></label>
						<input type="text" class="form-control" name="name_gallery"
							id="name_gallery" placeholder="Name Gallery"
							value="<?php echo $name_gallery; ?>" />
					</div>
					<div class="form-group">
						<label for="description_gallery">Description Gallery <?php echo form_error('description_gallery') ?></label>
						<textarea class="form-control" rows="3" name="description_gallery"
							id="description_gallery" placeholder="Description Gallery"><?php echo $description_gallery; ?></textarea>
					</div>
					<div class="form-group">
						<label for="varchar">Path Gallery <?php echo form_error('path_gallery') ?></label>
						<input type="text" class="form-control" name="path_gallery"
							id="path_gallery" placeholder="Path Gallery"
							value="<?php echo $path_gallery; ?>" />
					</div>
					<input type="hidden" name="id_gallery"
						value="<?php echo $id_gallery; ?>" />
					<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
					<a href="<?php echo site_url('administrator/gallery') ?>" class="btn btn-default">Cancel</a>
				</div>
			</form>
		</div>
		<!-- /.box -->

	</section>
	<!-- /.content -->
</div>