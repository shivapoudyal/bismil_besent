<head>
<title>APSOS Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo base_url()?>admin_assets/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url()?>admin_assets/css/cdn.css">
<link rel="stylesheet" href="<?php echo base_url()?>admin_assets/css/custom_validation.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo base_url()?>admin_assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url()?>admin_assets/css/font.css" type="text/css"/>
<link href="<?php echo base_url()?>admin_assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="<?php echo base_url()?>admin_assets/js/jquery2.0.3.min.js"></script>
<script src="<?php echo base_url()?>admin_assets/js/modernizr.js"></script>
<script src="<?php echo base_url()?>admin_assets/js/jquery.cookie.js"></script>
<script src="<?php echo base_url()?>admin_assets/js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
                
                <!-- tables -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>admin_assets/css/table-style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>admin_assets/css/basictable.css" />
<script type="text/javascript" src="<?php echo base_url()?>admin_assets/js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
<!-- charts -->
<script src="<?php echo base_url()?>admin_assets/js/raphael-min.js"></script>
<script src="<?php echo base_url()?>admin_assets/js/morris.js"></script>
<link rel="<?php echo base_url()?>admin_assets/stylesheet" href="css/morris.css">
<!-- //charts -->
<!--skycons-icons-->
<script src="<?php echo base_url()?>admin_assets/js/skycons.js"></script>
<!--//skycons-icons-->
</head>
