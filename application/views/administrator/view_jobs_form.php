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
						<label for="varchar">Nama Jobs <?php echo form_error('nama_jobs') ?></label>
						<input type="text" class="form-control" name="nama_jobs"
							id="nama_jobs" placeholder="Nama Jobs"
							value="<?php echo $nama_jobs; ?>" />
					</div>
					<div class="form-group">
						<label for="description_jobs">Description Jobs <?php echo form_error('description_jobs') ?></label>
						<textarea class="form-control" rows="3" name="description_jobs"
							id="description_jobs" placeholder="Description Jobs"><?php echo $description_jobs; ?></textarea>
					</div>
					<div class="form-group">
						<label for="general_requirement_jobs">General Requirement Jobs <?php echo form_error('general_requirement_jobs') ?></label>
						<textarea class="form-control" rows="3"
							name="general_requirement_jobs" id="general_requirement_jobs"
							placeholder="General Requirement Jobs"><?php echo $general_requirement_jobs; ?></textarea>
					</div>
					<div class="form-group">
						<label for="language_requirement_jobs">Language Requirement Jobs <?php echo form_error('language_requirement_jobs') ?></label>
						<textarea class="form-control" rows="3"
							name="language_requirement_jobs" id="language_requirement_jobs"
							placeholder="Language Requirement Jobs"><?php echo $language_requirement_jobs; ?></textarea>
					</div>
					<div class="form-group">
						<label for="benefits_jobs">Benefits Jobs <?php echo form_error('benefits_jobs') ?></label>
						<textarea class="form-control" rows="3" name="benefits_jobs"
							id="benefits_jobs" placeholder="Benefits Jobs"><?php echo $benefits_jobs; ?></textarea>
					</div>
					<div class="form-group">
						<label for="salary_jobs">Salary Jobs <?php echo form_error('salary_jobs') ?></label>
						<textarea class="form-control" rows="3" name="salary_jobs"
							id="salary_jobs" placeholder="Salary Jobs"><?php echo $salary_jobs; ?></textarea>
					</div>
					<div class="form-group">
						<label for="work_location_jobs">Work Location Jobs <?php echo form_error('work_location_jobs') ?></label>
						<textarea class="form-control" rows="3" name="work_location_jobs"
							id="work_location_jobs" placeholder="Work Location Jobs"><?php echo $work_location_jobs; ?></textarea>
					</div>
					<div class="form-group">
						<label for="working_hours_jobs">Working Hours Jobs <?php echo form_error('working_hours_jobs') ?></label>
						<textarea class="form-control" rows="3" name="working_hours_jobs"
							id="working_hours_jobs" placeholder="Working Hours Jobs"><?php echo $working_hours_jobs; ?></textarea>
					</div>
					<div class="form-group">
						<label for="int">Id Company <?php echo form_error('id_company') ?></label>
						<?php echo cmb_dinamis('id_company', 'company', 'name_company', 'id_company', $id_company,'Select Company'); ?>
					</div>
					<div class="form-group">
						<label for="int">Id Employee <?php echo form_error('id_employee') ?></label>
						<input type="text" class="form-control" name="id_employee"
							id="id_employee" placeholder="Id Employee"
							value="<?php echo $id_employee; ?>" />
					</div>
					<div class="form-group">
						<label for="date">Date Upload <?php echo form_error('date_upload') ?></label>
						<input type="text" class="form-control" name="date_upload"
							id="date_upload" placeholder="Date Upload"
							value="<?php echo $date_upload; ?>" />
					</div>
					<div class="form-group">
						<label for="date">Date Close <?php echo form_error('date_close') ?></label>
						<input type="text" class="form-control" name="date_close"
							id="date_close" placeholder="Date Close"
							value="<?php echo $date_close; ?>" />
					</div>
					<input type="hidden" name="id_jobs" value="<?php echo $id_jobs; ?>" />
					<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
					<a href="<?php echo site_url('jobs') ?>" class="btn btn-default">Cancel</a>
				</div>
			</form>
		</div>
		<!-- /.box -->

	</section>
	<!-- /.content -->
</div>