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
						<label for="varchar">Name Service Flow Company <?php echo form_error('name_service_flow_company') ?></label>
						<input type="text" class="form-control"
							name="name_service_flow_company" id="name_service_flow_company"
							placeholder="Name Service Flow Company"
							value="<?php echo $name_service_flow_company; ?>" />
					</div>
					<div class="form-group">
						<label for="description_flow_company">Description Flow Company <?php echo form_error('description_flow_company') ?></label>
						<textarea class="form-control" rows="3"
							name="description_flow_company" id="description_flow_company"
							placeholder="Description Flow Company"><?php echo $description_flow_company; ?></textarea>
					</div>
					<div class="form-group">
						<label for="varchar">Icon Flow Company <?php echo form_error('icon_flow_company') ?></label>
						<input type="text" class="form-control" name="icon_flow_company"
							id="icon_flow_company" placeholder="Icon Flow Company"
							value="<?php echo $icon_flow_company; ?>" />
					</div>
					<input type="hidden" name="id_service_flow_company"
						value="<?php echo $id_service_flow_company; ?>" />
					<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
					<a
						href="<?php echo site_url('administrator/service_flow_company') ?>"
						class="btn btn-default">Cancel</a>
				</div>
			</form>
		</div>
		<!-- /.box -->

	</section>
	<!-- /.content -->
</div>