<?php 
$method = $this->router->fetch_method();

$classIndex = "";
$classAboutus = "";
$classContactus = "";

if($method == "index"){
    $classIndex = "active";
    $classAboutus = "";
    $classContactus = "";
}
if($method == "about_us"){
    $classIndex = "";
    $classAboutus = "active";
    $classContactus = "";
}
if($method == "contact_us"){
    $classIndex = "";
    $classAboutus = "";
    $classContactus = "active";
}
?>


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
				<a class="navbar-brand customLogoStyle" href="<?php echo base_url()?>">
					<img src="<?php echo base_url()?>assets/Logo/logo.png" alt="" />
                                        
				</a>
                            
			</div>
			<nav class="navbar-collapse collapse">
                            
				<ul class="nav navbar-nav navbar-right" >
                                    <li class="<?php echo $classIndex?>"><a href="<?php echo base_url()?>">HOME</a></li>
                                    <li class="<?php echo $classAboutus?>"><a href="<?php echo base_url('about-us')?>">ABOUT US</a></li>
                                    <li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                                          <ul class="dropdown-menu">
						<?php 
                                                foreach(servicesListActive() as $val => $key){
                                                    $service_id = $key['id'];
                                                    $service_name = $key['service_name'];
                                                    $service_url = $key['meta_url'];
                                                ?>
                                              <!--<li><a href=""><b><?php //echo strtoupper($service_image)?></b></a></li>-->
                                              
                                              <li class="dropdown-submenu" style="position: relative;">
                                            <a href="<?= base_url('services/'.$service_url)?>" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label"><b><?php echo strtoupper($service_name)?></b></span></a>
                                            <ul class="dropdown-menu customNavStyle">
                                                <?php
                                                if(!empty($service_id)){
                                                $child_services = $this->AdminModel->getChildServiceList($service_id);
                                                    foreach($child_services as $chilkey => $childval){
                                                ?>
                                                <!--<li><a href="<?php //echo base_url('service_part/'.$childval['meta_url'])?>"><?php //echo strtoupper($childval['sub_service_name'])?></a></li>-->
                                                <li><a href="<?= base_url('services/'.$childval['meta_url'])?>"><?php echo strtoupper($childval['sub_service_name'])?></a></li>
                                                    <?php } ?>
                                                
                                            </ul>
                                        </li>
                                                <?php } ?>
                                                <?php } ?>
                                                                                            
					  </ul>
					</li>
                                    <li><a href="">BLOG</a></li>
					<li class="<?php echo $classContactus?>"><a href="<?php echo base_url('contact-us')?>">CONTACT</a></li>
<!--					<li class="dropdown">
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
					</li>-->
				</ul>
			</nav>
                    
		</div>
    </div>

<?php include "enquiryPopup.php" ?>

<!--- Whatsapp Button Style ----> 
<style>
    .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:20px;
	left:20px;
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

<!-----Whatsapp Links ----->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=+917678929880&text=Hello" title="Chat on Whatsapp" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

<!-----Call us Links ----->
<a class="lgscreenphone phonelink" href="tel:+91 7678929880" title="Call us"><img class="phoneicon" src="<?= base_url()?>assets/images/call-us-btn.png"></a>


<!----- Live Chat Module ----------- >
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f00b6c2223d045fcb7b4fd1/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


