<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php 
    $method = $this->router->fetch_method();
    if(($method == "index") || ($method == "about_us") || ($method == "contact_us")){
    ?>
    
        <title><?php echo static_meta_tile?></title>
        <meta name="description" content="<?php echo static_meta_description?>">
        <meta name="keywords" content="<?php echo static_meta_keywords?>">
    
    <?php } else{ ?>
        <title><?php echo $data['meta_title']?></title>
        <meta name="description" content="<?php echo $data['meta_description']?>">
        <meta name="keywords" content="<?php echo $data['meta_keywords']?>">
    <?php } ?>
    <meta name="author" content="apsos.in"> 
	<!-- ==============================================
	Favicons
	=============================================== -->
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/Logo/logo1.png">
	<link rel="apple-touch-icon" href="<?php echo base_url()?>assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url()?>assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url()?>assets/images/apple-touch-icon-114x114.png">
	<!-- ==============================================
	CSS
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/owl.theme.default.min.css">
	<!-- ==============================================
	Google Fonts
	=============================================== -->
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700,900' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/custom.css" />
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/modernizr.min.js"></script>
</head>