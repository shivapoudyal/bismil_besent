<!DOCTYPE html>
<html class="no-js" lang="en">
  <!------------------------------------------------ Head Part ------------------------------------------------> 
<?php include "includes/head.php"; ?>
<!------------------------------------------------ //Head Part ------------------------------------------------>  
<body>
	<!-- Load page -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	<!-- NAVBAR SECTION -->
<!------------------------------------------------ header Part ------------------------------------------------> 
<?php include "includes/header.php"; ?>
<!------------------------------------------------ //header Part ------------------------------------------------>  
	<!-- BANNER -->
	<div class="section subbanner">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="caption">CONTACT</div>
					<ol class="breadcrumb">
						<li><a href="<?=base_url()?>">Home</a></li>
						<li class="active">Contact</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!-- CONTACT  -->
	<div class="section contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6">
					<div class="section-title">
						<h3 class="lead">WHY APSO?</h3>
					</div>
                                    <p class="equalAlign" style="margin-top:-5%; font-size: 13px"><b style='color:#545454'>APSO Services Pvt. Ltd. </b> offers a comprehensive range of Professional Pest & Hygiene Solutions for Commercial and Residential premises. The APSO brand also focuses on developing industry-leading service operations through the sharing of best practices, new innovations and the use of digital technologies. Our professional, certified, well trained & friendly service teams are committed to providing our customers with outstanding customer care, efficiency & quality service. They undergo thorough, frequent service training to provide you with the best possible service(s) & products for your requirement</p>
                                      <div class="body-tab" style="">
									<h5>Popular Cities:-</h5>
                                                                        <p style="margin-top: -2%">
                                                                        <?php echo popular_cities ?>
                                                                        </p>
								</div>
                                    
                                    <div class="contact-info">
						<div class="contact-info-item customeFont-size">
							<span class="fa fa-phone"></span> +91 7678929880, +91 9953589905
						</div>
						<div class="contact-info-item customeFont-size">
							<span class="fa fa-clock-o"></span> Mon-Sat: 9.00-18.00 
						</div>
						<div class="contact-info-item customeFont-size">
							<span class="fa fa-envelope"></span> <a href="mailto:info@pestco.com" title="">info@apso.in</a>
						</div>
                                            <div class="contact-info-item customeFont-size">
							<span class="fa fa-map-marker"></span> Corporate Office – B -271, 3rd Floor, Sector – 45 Noida, 201303 
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6">
                                    <div class="post-image" style="max-width: 150%;">
						<img src="<?php echo base_url()?>assets/images/we-1.jpg" alt="" class="img-responsive">
					</div>
				</div>
				<div class="col-sm-12 col-md-12">
					<div class="maps-wraper">
                                            
						
<!--						<div id="maps" class="maps" data-lat="-7.452278" data-lng="112.708992" data-marker="images/cd-icon-location.png">
						</div>-->
					</div>
				</div>
				<div class="col-sm-12 col-md-8 col-md-offset-2">
					<br /><br />
					<div class="section-title center">
						<h3 class="lead">SEND MESSAGE</h3>
					</div>
					<br /><br />
					<div class="blok quotes">
						<form action="#" class="form-contact shake" id="contactForm" data-toggle="validator" novalidate="true">
							<div class="form-group">
								<input type="text" class="form-control" id="name" placeholder="Enter Name *" required="">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" placeholder="Enter Email *" required="">
								<div class="help-block with-errors"></div>
							</div>
                                                     <div class="form-group">
                                                            <input type="text" class="form-control number" maxlength="10" minlength="10" id="mobile" placeholder="Enter Mobile Number *" required>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								 <select class="form-control " style="height: 40px; color: #CEA686" required>
                                                                 <option value="">Select Service </option>
                                                                <?php 
//                                                                foreach(servicesListActive() as $val => $key){
//                                                                    $service_image = $key['service_name'];
//                                                                    echo "<option>$service_image</option>";
//                                                                }
                                                                
                                                                    foreach(servicesListActive() as $key => $val){
                                                                    $service_id = $val["id"];
                                                                    $service_name = $val['service_name'];
                                                                ?>
                                                                
                                                                <option><?php echo $service_name;?></option>
                                                                
                                                                    <?php 
                                                                        foreach(getChildServiceList($service_id) as $chilkey => $childval){
                                                                        $sub_service_name = $childval['sub_service_name'];
                                                                    ?>
                                                                
                                                                    <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sub_service_name;?></option>
                                                                
                                                                <?php } ?>
                                                                <?php } ?>
                                                            </select>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<div id="success"></div>
								<button type="submit" class="btn btn-default disabled" style="pointer-events: all; cursor: pointer;">ASK A QUOTE</button>
							</div>
						</form>
						<div class="icon"><span class="fa fa-calendar"></span></div>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- CTA --> 
	<div class="section cta">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="wrap-cta">
						<div class="cta-img">
							<img src="<?php echo base_url()?>assets/images/img-cta.png" alt="" />
						</div>
						<div class="cta-desc">
							<p>Have Any Question!</p>
							<h3>DON'T HESITATE TO CONTACT US ANY TIME.</h3>
						</div>
						<span title="" class="btn btn-contact pull-right btn-view-all">CONTACT US</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- FOOTER SECTION -->
<!------------------------------------------------ Footer Part ------------------------------------------------> 
<?php include "includes/footer.php"; ?>
<!------------------------------------------------ //Footer Part ----------------------------------------------->
</body>
</html>