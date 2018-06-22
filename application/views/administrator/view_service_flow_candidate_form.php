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
            <label for="varchar">Name Service Flow Candidate <?php echo form_error('name_service_flow_candidate') ?></label>
            <input type="text" class="form-control" name="name_service_flow_candidate" id="name_service_flow_candidate" placeholder="Name Service Flow Candidate" value="<?php echo $name_service_flow_candidate; ?>" />
        </div>
	    <div class="form-group">
            <label for="description_service_flow_candidate">Description Service Flow Candidate <?php echo form_error('description_service_flow_candidate') ?></label>
            <textarea class="form-control" rows="3" name="description_service_flow_candidate" id="description_service_flow_candidate" placeholder="Description Service Flow Candidate"><?php echo $description_service_flow_candidate; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Icon Flow Candidate <?php echo form_error('icon_flow_candidate') ?></label>
            <input type="text" class="form-control" name="icon_flow_candidate" id="icon_flow_candidate" placeholder="Icon Flow Candidate" value="<?php echo $icon_flow_candidate; ?>" />
        </div>
	    <input type="hidden" name="id_service_flow_candidate" value="<?php echo $id_service_flow_candidate; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('administrator/service_flow_candidate') ?>" class="btn btn-default">Cancel</a>
				</div>
			</form>
		</div>
		<!-- /.box -->

	</section>
	<!-- /.content -->
</div>