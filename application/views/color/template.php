<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8" />
<title>E-Commerce Front End Theme</title>
<meta
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
	name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<!-- ================== BEGIN BASE CSS STYLE ================== -->
<link
	href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
	rel="stylesheet" />
<link
	href="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/bootstrap/css/bootstrap.min.css"
	rel="stylesheet" />
<link
	href="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" />
<link
	href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/style.min.css"
	rel="stylesheet" />
<link
	href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/style-responsive.min.css"
	rel="stylesheet" />
<link
	href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/theme/default.css"
	id="theme" rel="stylesheet" />
<link
	href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/animate.min.css"
	rel="stylesheet" />
<!-- ================== END BASE CSS STYLE ================== -->

<!-- ================== BEGIN BASE JS ================== -->
<script
	src="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/pace/pace.min.js"></script>
<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- BEGIN #page-container -->
	<div id="page-container" class="fade">
		<!-- BEGIN #top-nav -->
		<div id="top-nav" class="top-nav">
			<!-- BEGIN container -->
			<div class="container">
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown dropdown-hover"><a href="#"
							data-toggle="dropdown"><img
								src="<?php echo base_url(); ?>template/<?php echo template(); ?>/img/english.png"
								class="flag-img" alt="" /> English <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><img
										src="<?php echo base_url(); ?>template/<?php echo template(); ?>/img/english.png"
										class="flag-img" alt="" /> English</a></li>
								<li><a href="#"><img
										src="<?php echo base_url(); ?>template/<?php echo template(); ?>/img/german.png"
										class="flag-img" alt="" /> German</a></li>
								<li><a href="#"><img
										src="<?php echo base_url(); ?>template/<?php echo template(); ?>/img/spanish.png"
										class="flag-img" alt="" /> Spanish</a></li>
								<li><a href="#"><img
										src="<?php echo base_url(); ?>template/<?php echo template(); ?>/img/french.png"
										class="flag-img" alt="" /> French</a></li>
								<li><a href="#"><img
										src="<?php echo base_url(); ?>template/<?php echo template(); ?>/img/chinese.png"
										class="flag-img" alt="" /> Chinese</a></li>
							</ul></li>
						<li><a href="#">Customer Care</a></li>
						<li><a href="#">Order Tracker</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Career</a></li>
						<li><a href="#">Our Forum</a></li>
						<li><a href="#">Newsletter</a></li>
						<li><a href="#"><i class="fa fa-facebook f-s-14"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter f-s-14"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram f-s-14"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble f-s-14"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus f-s-14"></i></a></li>
					</ul>
				</div>
			</div>
			<!-- END container -->
		</div>
		<!-- END #top-nav -->

		<!-- BEGIN #header -->
		<div id="header" class="header">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN header-container -->
				<div class="header-container">
					<!-- BEGIN navbar-header -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed"
							data-toggle="collapse" data-target="#navbar-collapse">
							<span class="icon-bar"></span> <span class="icon-bar"></span> <span
								class="icon-bar"></span>
						</button>
						<div class="header-logo">
							<a href="index.html"> <span class="brand"></span> <span>Color</span>Admin
								<small>e-commerce frontend theme</small>
							</a>
						</div>
					</div>
					<!-- END navbar-header -->
					<!-- BEGIN header-nav -->
					<div class="header-nav">
						<div class=" collapse navbar-collapse" id="navbar-collapse">
							<ul class="nav">
								<li class="active"><a href="index.html">Home</a></li>
								<li><a href="http://localhost:81/bkk_lte/jobs/">Jobs</a></li>
								<li><a href="index.html">Home</a></li>
								<li><a href="index.html">Home</a></li>
								<li><a href="index.html">Home</a></li>
								<li><a href="index.html">Home</a></li>
								<li><a href="index.html">Home</a></li>
							</ul>
						</div>
					</div>
					<!-- END header-nav -->
					<!-- BEGIN header-nav -->
					<div class="header-nav">
						<ul class="nav pull-right">

							<li><a href="my_account.html"> <img
									src="<?php echo base_url(); ?>template/<?php echo template(); ?>/img/user-1.jpg"
									class="user-img" alt="" /> <span
									class="hidden-md hidden-sm hidden-xs">Login / Register</span>
							</a></li>
						</ul>
					</div>
					<!-- END header-nav -->
				</div>
				<!-- END header-container -->
			</div>
			<!-- END container -->
		</div>
		<!-- END #header -->
<?php echo $contents; ?>
		

		<!-- BEGIN #footer-copyright -->
		<div id="footer-copyright" class="footer-copyright">
			<!-- BEGIN container -->
			<div class="container">
				<div class="payment-method">
					<img
						src="<?php echo base_url(); ?>template/<?php echo template(); ?>/img/payment_method.png"
						alt="" />
				</div>
				<div class="copyright">Copyright &copy; 2016 SeanTheme. All rights
					reserved.</div>
			</div>
			<!-- END container -->
		</div>
		<!-- END #footer-copyright -->
	</div>
	<!-- END #page-container -->

	<!-- begin theme-panel -->
	<div class="theme-panel">
		<a href="javascript:;" data-click="theme-panel-expand"
			class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
		<div class="theme-panel-content">
			<ul class="theme-list clearfix">
				<li><a href="javascript:;" class="bg-purple" data-theme="purple"
					data-click="theme-selector" data-toggle="tooltip"
					data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
				<li><a href="javascript:;" class="bg-blue" data-theme="blue"
					data-click="theme-selector" data-toggle="tooltip"
					data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
				<li class="active"><a href="javascript:;" class="bg-green"
					data-theme="default" data-click="theme-selector"
					data-toggle="tooltip" data-trigger="hover" data-container="body"
					data-title="Default">&nbsp;</a></li>
				<li><a href="javascript:;" class="bg-orange" data-theme="orange"
					data-click="theme-selector" data-toggle="tooltip"
					data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
				<li><a href="javascript:;" class="bg-red" data-theme="red"
					data-click="theme-selector" data-toggle="tooltip"
					data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
			</ul>
		</div>
	</div>
	<!-- end theme-panel -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script
		src="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script
		src="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script
		src="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/crossbrowserjs/html5shiv.js"></script>
		<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/crossbrowserjs/respond.min.js"></script>
		<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script
		src="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/jquery-cookie/jquery.cookie.js"></script>
	<script
		src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<script>
	    $(document).ready(function() {
	        App.init();
	        if ($.cookie && $.cookie('theme')) {
	    		if ($('.theme-list').length !== 0) {
	    			$('.theme-list [data-theme]').closest('li').removeClass('active');
	    			$('.theme-list [data-theme="' + $.cookie('theme') + '"]').closest(
	    					'li').addClass('active');
	    		}
	    		var cssFileSrc = '<?php echo base_url(); ?>template/<?php echo template(); ?>/css/theme/' + $.cookie('theme') + '.css';
	    		$('#theme').attr('href', cssFileSrc);
	    	}

	    	$('.theme-list [data-theme]').live(
	    			'click',
	    			function() {
	    				var cssFileSrc = '<?php echo base_url(); ?>template/<?php echo template(); ?>/css/theme/'
	    						+ $(this).attr('data-theme') + '.css';
	    				$('#theme').attr('href', cssFileSrc);
	    				$('.theme-list [data-theme]').not(this).closest('li')
	    						.removeClass('active');
	    				$(this).closest('li').addClass('active');
	    				$.cookie('theme', $(this).attr('data-theme'));
	    			});
	    });
	</script>
</body>
</html>
