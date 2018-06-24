<div id="page-header"
	class="section-container page-header-container bg-black">
	<!-- BEGIN page-header-cover -->
	<div class="page-header-cover">
		<img
			src="<?php echo base_url(); ?>template/<?php echo template(); ?>/img/apple-cover.jpg"
			alt="" />
	</div>
	<!-- END page-header-cover -->
	<!-- BEGIN container -->
	<div class="container">
		<h1 class="page-header">
			<b>Apple</b> Product
		</h1>
	</div>
	<!-- END container -->
</div>
<div id="search-results" class="section-container bg-silver">
	<!-- BEGIN container -->
	<div class="container">
		<!-- BEGIN search-container -->
		<div class="search-container">
			<!-- BEGIN search-content -->
			<div class="search-content">
				<div class="search-toolbar">
					<!-- BEGIN row -->
					<div class="row">
						<div class="col-md-12">
							<h4>Total Record : <?php echo $total_rows ?></h4>
						</div>
						<!-- END col-6 -->
						
					</div>
					<!-- END row -->
				</div>
				<!-- BEGIN search-item-container -->
				<div class="search-item-container">
					<!-- BEGIN item-row -->
					<div class="item-row">
					<?php
    foreach ($jobs_data as $jobs) {
        ?>
						<div class="panel panel-inverse" data-sortable-id="ui-general-2">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                
                            </div>
                            <h4 class="panel-title"><?php echo $jobs->nama_jobs ?></h4>
                        </div>
                        <div class="panel-body">
							<dl class="dl-horizontal">
								<dt>Description</dt>
								<dd><?php echo $jobs->description_jobs ?></dd>
								<dt>Working Location</dt>
								<dd><?php echo $jobs->work_location_jobs ?></dd>
								<dt>Vacancy Close</dt>
								<dd><?php echo tgl_indo($jobs->date_close)?></dd>
								
							</dl>
							<a href="javascript:;" class="btn btn-primary m-r-5">Default Button</a>
							
                        </div>
                        
                    </div>
						<?php
    }
    ?>
					
					</div>
					<!-- END item-row -->
				</div>
				<!-- END search-item-container -->
				<!-- BEGIN pagination -->
				<div class="text-center">
				<?php echo $pagination ?>
					
				</div>

				<!-- END pagination -->
			</div>
			<!-- END search-content -->
			<!-- BEGIN search-sidebar -->
			<div class="search-sidebar">
				<h4 class="title">Filter By</h4>
				<form action="<?php echo site_url('jobs/index'); ?>" method="GET"
					name="filter_form">
					<div class="form-group">
						<label class="control-label">Keywords</label> <input type="text"
							class="form-control input-sm" name="q" value="<?php echo $q; ?>"
							placeholder="Enter Keywords" />
					</div>

					<div class="m-b-30">
					<?php
    if ($q != '') {
        ?>
                                    <a
							href="<?php echo site_url('jobs'); ?>"
							class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i>Reset</a>
                                    <?php
    }
    ?>
						<button type="submit" class="btn btn-sm btn-inverse">
							<i class="fa fa-search"></i> Filter
						</button>
					</div>
				</form>

			</div>
			<!-- END search-sidebar -->
		</div>
		<!-- END search-container -->
	</div>
	<!-- END container -->
</div>