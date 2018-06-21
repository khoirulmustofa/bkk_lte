<?php
if (isset($page) && $page == 'jobs') {
    ?>
<!-- bootstrap datepicker -->
<script
	src="<?php echo base_url('template/admin_lte/'); ?>plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- CK Editor -->
<script
	src="<?php echo base_url('template/admin_lte/'); ?>plugins/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
	//Date picker
	    $('#date_upload').datepicker({
	      autoclose: true,
	      format: 'yyyy-mm-dd'
	    });
	    $('#date_close').datepicker({
		      autoclose: true,
		      format: 'yyyy-mm-dd'
		    });
	    CKEDITOR.replace('description_jobs');
	    CKEDITOR.replace('general_requirement_jobs');
	    CKEDITOR.replace('language_requirement_jobs');
	    CKEDITOR.replace('benefits_jobs');
	    CKEDITOR.replace('salary_jobs');
	    CKEDITOR.replace('work_location_jobs');
	    CKEDITOR.replace('working_hours_jobs');
	  });
   </script>


<?php
} else if (isset($page) && $page == 'company') {
    ?>
<!-- CK Editor -->
<script
	src="<?php echo base_url('template/admin_lte/'); ?>plugins/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
	
	  CKEDITOR.replace('address_company');
	  });
  
  
  </script>


<?php
}