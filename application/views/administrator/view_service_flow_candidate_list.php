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
				<?php echo anchor(site_url('administrator/service_flow_candidate_create'),'Create', 'class="btn btn-success"'); ?>

				<form action="<?php echo site_url('administrator/service_flow_candidate'); ?>"
					class="form-inline pull-right" method="get">
					<div class="input-group">
						<input type="text" class="form-control" name="q"
							value="<?php echo $q; ?>"> <span class="input-group-btn">
                            <?php
                            if ($q != '') {
                                ?>
                                    <a
							href="<?php echo site_url('administrator/service_flow_candidate'); ?>"
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
							<th>Name Service Flow Candidate</th>
							<th>Description Service Flow Candidate</th>
							<th>Icon Flow Candidate</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
    foreach ($service_flow_candidate_data as $service_flow_candidate) {
        ?>
                <tr>
							<td width="80px"><?php echo ++$start ?></td>
							<td><?php echo $service_flow_candidate->name_service_flow_candidate ?></td>
							<td><?php echo $service_flow_candidate->description_service_flow_candidate ?></td>
							<td><?php echo $service_flow_candidate->icon_flow_candidate ?></td>
							<td style="text-align: center" width="200px">
				<?php
				echo anchor(site_url('administrator/service_flow_candidate_update/' . $service_flow_candidate->id_service_flow_candidate), 'Update');
        echo ' | ';
        echo anchor(site_url('administrator/service_flow_candidate_delete/' . $service_flow_candidate->id_service_flow_candidate), 'Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
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