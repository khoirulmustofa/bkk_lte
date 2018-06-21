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
			<div class="box-header with-border">
				<?php echo anchor(site_url('administrator/jobs_create'),'Create', 'class="btn btn-success"'); ?>

				<form action="<?php echo site_url('administrator/jobs'); ?>"
					class="form-inline pull-right" method="get">
					<div class="input-group">
						<input type="text" class="form-control" name="q"
							value="<?php echo $q; ?>"> <span class="input-group-btn">
                            <?php
                            if ($q != '') {
                                ?>
                                    <a
							href="<?php echo site_url('administrator/jobs'); ?>"
							class="btn btn-default">Reset</a>
                                    <?php
                            }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
						</span>
					</div>
				</form>
				<?php
    
    if ($this->session->userdata('message') != '') {
        ?>
 <hr>
				<div class="alert alert-info alert-dismissible">
					<button type="button" class="close" data-dismiss="alert"
						aria-hidden="true">×</button>
					<h4>
						<i class="icon fa fa-info"></i> Message!
					</h4>
                <?php echo $this->session->userdata('message');?>
              </div>
				
				<?php }?>
				
			</div>

			<div class="box-body table-responsive no-padding">

				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Jobs</th>
							<th>Salary Jobs</th>
							<th>Work Location Jobs</th>
							<th>Id Company</th>
							<th>Id Employee</th>
							<th>Date Upload</th>
							<th>Date Close</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
    foreach ($jobs_data as $jobs) {
        ?>
                <tr>
							<td width="80px"><?php echo ++$start ?></td>
							<td><?php echo $jobs->nama_jobs ?></td>
							<td><?php echo $jobs->salary_jobs ?></td>
							<td><?php echo $jobs->work_location_jobs ?></td>
							<td><?php echo $jobs->id_company ?></td>
							<td><?php echo $jobs->id_employee ?></td>
							<td><?php echo $jobs->date_upload ?></td>
							<td><?php echo $jobs->date_close ?></td>
							<td style="text-align: center" width="200px">
				<?php
        echo anchor(site_url('administrator/jobs_update/' . $jobs->id_jobs), 'Update');
        echo ' | ';
        echo anchor(site_url('administrator/jobs_delete/' . $jobs->id_jobs), 'Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
        ?>
			</td>
						</tr>
                <?php
    }
    ?>
					</tbody>
				</table>
			</div>
			<!-- /.box-body -->
			<div class="box-footer clearfix">
				Total Record : <?php echo $total_rows ?>
              <?php echo $pagination ?>
            </div>
			<!-- /.box-footer-->
		</div>
		<!-- /.box -->

	</section>
	<!-- /.content -->
</div>