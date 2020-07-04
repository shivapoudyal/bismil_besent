<div class="navbar navbar-main navbar-fixed-top">
		<div class="container">
			<div class="row bg-white">
				<div class="topbar">
					<div class="col-sm-7 col-md-7">
						<div class="info">
							<div class="info-item">
                                                            <span class="fa fa-phone"></span> <a href="tel:+91 7678929880">+91 7678929880</a> 
                                                                <span class="fa fa-phone" style="margin-left: 10px"></span>  <a href="tel:+91 9953589905">+91 9953589905</a>
							</div>
                                                    
                                                                                                          
							<div class="info-item">
								<!--<span class="fa fa-clock-o"></span> Mon-Sat: 9.00-18.00-->
								<span class="fa fa-clock-o"></span> 24*7
							</div>
							<div class="info-item">
								<span class="fa fa-envelope-o"></span> <a href="mailto:info@pestco.com" title="">info@apsos.in</a>
							</div>
						</div>
					</div>
					<div class="col-sm-5 col-md-5">
						<div class="request-quote pull-right" data-toggle="modal" data-target="#enquiryForm" style="cursor:pointer">
                                                    <span>REQUEST A QUOTE</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container container-nav">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url()?>">
					<img src="<?php echo base_url()?>assets/Logo/logo1.png" alt="" />
				</a>
			</div>
			<nav class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url()?>">HOME</a></li>
					<li><a href="<?php echo base_url('about-us')?>">ABOUT US</a></li>
					<li><a href="">SERVICES</a></li>
					<li><a href="">BLOG</a></li>
					<li><a href="<?php echo base_url('contact-us')?>">CONTACT</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PAGES <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="">PEST CONTROL</a></li>
						<li><a href="">FAQ</a></li>
						<li><a href="">TESTIMONIALS</a></li>
						<li><a href="">OUR TEAM</a></li>
						<li><a href="">BLOG</a></li>
						<li><a href="">BLOG DETAIL</a></li>
						<li><a href="">404</a></li>
					  </ul>
					</li>
				</ul>
			</nav>
		</div>
    </div>

<?php include "enquiryPopup.php" ?>

<style>
    .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	left:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=+917678929880&text=Hello Apso," class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
