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
	
<!------------------------------------------------ Header Part ------------------------------------------------> 
<?php include "includes/header.php"; ?>
<!------------------------------------------------ //Header Part ------------------------------------------------> 
        
	<div class="section subbanner">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="caption">ABOUT US</div>
					<ol class="breadcrumb">
                                            <li><a href="<?= base_url()?>">Home</a></li>
						<li class="active">About Us</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!-- WHY  -->
	<div class="section why">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="section-title">
								<h3 class="lead">WHY APSO?</h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<div class="box">
								<img src="<?php echo base_url()?>assets/images/why-img.png" alt="" class="img-responsive" />
							</div>
						</div>
						<div class="col-sm-8 col-md-8">
							<div class="row">
								<div class="col-sm-12 col-md-12">
									<p class="equalAlign"><b style='color:#545454'>APSO Services Pvt. Ltd. </b> <?php echo why_apso?></p>
									<br />
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="box-icon">
										<div class="icon">
											<div class="fa fa-clock-o"></div>
										</div>
										<div class="box-icon-body">
											<h5>ONE-TIME EXTERMINATION</h5>
											<p class="equalAlign"><?php echo one_time_extermination?></p>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="box-icon">
										<div class="icon">
											<div class="fa fa-table"></div>
										</div>
										<div class="box-icon-body">
											<h5>MONTHLY MAINTENANCE</h5>
											<p class="equalAlign"><?php echo monthly_maintenance?></p>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="box-icon">
										<div class="icon">
											<div class="fa fa-briefcase"></div>
										</div>
										<div class="box-icon-body">
											<h5>FULL SERVICE PEST REMOVAL</h5>
											<p class="equalAlign">C<?php echo full_service_pest_removal?></p>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="box-icon">
										<div class="icon">
											<div class="fa fa-money"></div>
										</div>
										<div class="box-icon-body">
											<h5>COMPETITIVE PRICES</h5>
											<p class="equalAlign"><?php echo competitive_price?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- PEST CONTROL -->
	<div class="section who bgc">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6">
					<div class="section-title">
						<h3 class="lead">WHO WE ARE</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-6">
					<div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
<!--						<ul id="myTabs" class="nav nav-tabs" role="tablist">
							<li class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><span class="fa fa-bookmark"></span></a></li>
							<li class=""><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"><span class="fa fa-flag"></span></a></li>
							<li class=""><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"><span class="fa fa-lightbulb-o"></span></a></li>
						</ul>-->
						<div id="myTabContent" class="tab-content" style="margin-top: -5%">
							<div role="tabpanel" class="tab-pane fade active in" id="tab1">
                                                            <div class="body-tab">
									<p class="equalAlign"><?php echo who_we_are_aboutUs?></p>
								</div>
								<div class="body-tab" style="margin-top: -7%">
									<h5>Our Promise:-</h5>
                                                                        <p style="margin-top: -2%">
                                                                        <li class="ourPromiseMargin">Unequaled commitment to thorough workmanship.</li>
                                                                        <li class="ourPromiseMargin">Use of premium products.</li>
                                                                        <li class="ourPromiseMargin">Latest maintained equipment and technology.</li>
                                                                        <li class="ourPromiseMargin">Up to date chemical knowledge and procedures applied.</li>
                                                                        <li class="ourPromiseMargin">Leadership within the industry.</li>
                                                                        <li class="ourPromiseMargin">Trained and certified technicians.</li>
                                                                        <li class="ourPromiseMargin">Adherence to code of practice for the use of pesticides.</li>
                                                                        <li class="ourPromiseMargin">Compliant with occupational.</li>
                                                                        <li class="ourPromiseMargin">Health & safety regulations.</li>
                                                                        </p>
								</div>
                                                            
                                                            <div class="body-tab" style="margin-top: -7%">
									<h5>Popular Cities:-</h5>
                                                                        <p style="margin-top: -2%">
                                                                        <?php echo popular_cities ?>
                                                                        </p>
								</div>
							</div>
<!--							<div role="tabpanel" class="tab-pane fade" id="tab2">
								<div class="body-tab">
									<h5>AWARD &amp; RECONGNITION</h5>
									<p>Lorem ipsum dolor sit amet libero turpis non cras ligula id commodo aenean est in volutpat amet sodales porttitor bibendum facilisi suspendisse aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra vel varius eget sit mollis.</p><p>Lorem ipsum dolor sit amet libero turpis non cras ligula id commodo aenean est in volutpat amet sodales porttitor bibendum.</p>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab3">
								<div class="body-tab">
									<h5>AWARD &amp; RECONGNITION</h5>
									<p>Lorem ipsum dolor sit amet libero turpis non cras ligula id commodo aenean est in volutpat amet sodales porttitor bibendum facilisi suspendisse aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra vel varius eget sit mollis.</p><p>Lorem ipsum dolor sit amet libero turpis non cras ligula id commodo aenean est in volutpat amet sodales porttitor bibendum.</p>
								</div>
							</div>-->
						</div>
					</div>
					
				</div>
				<div class="col-sm-6 col-md-6">
					<div id="about-caro" class="owl-carousel owl-theme">
						<div class="item">
							<img src="<?php echo base_url()?>assets/images/about-1.jpg" alt="" class="img-responsive" />
						</div>
						<div class="item">
							<img src="<?php echo base_url()?>assets/images/about-2.jpg" alt="" class="img-responsive" />
						</div>
						<div class="item">
							<img src="<?php echo base_url()?>assets/images/about-3.jpg" alt="" class="img-responsive" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- STATS  -->
	
	<!-- TEAM  -->
<!--	<div class="section team">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6">
					<div class="section-title">
						<h3 class="lead">TEAM MEMBERS</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-md-3">
					<div class="box-team">
						<div class="image">
							<img src="<?php echo base_url()?>assets/images/team-1.jpg" alt="" class="img-responsive">
						</div>
						<div class="description">
							<h5 class="blok-title">
								JOHNATHAN DOE
							</h5>
							<p>Pest Control Worker</p>
							<div class="social-team">
								<a href="#" title=""><span class="fa fa-facebook"></span></a>
								<a href="#" title=""><span class="fa fa-twitter"></span></a>
								<a href="#" title=""><span class="fa fa-linkedin"></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-3">
					<div class="box-team">
						<div class="image">
							<img src="<?php echo base_url()?>assets/images/team-2.jpg" alt="" class="img-responsive">
						</div>
						<div class="description">
							<h5 class="blok-title">
								JOHNATHAN DOE
							</h5>
							<p>Pest Control Worker</p>
							<div class="social-team">
								<a href="#" title=""><span class="fa fa-facebook"></span></a>
								<a href="#" title=""><span class="fa fa-twitter"></span></a>
								<a href="#" title=""><span class="fa fa-linkedin"></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-3">
					<div class="box-team">
						<div class="image">
							<img src="<?php echo base_url()?>assets/images/team-3.jpg" alt="" class="img-responsive">
						</div>
						<div class="description">
							<h5 class="blok-title">
								JOHNATHAN DOE
							</h5>
							<p>Pest Control Worker</p>
							<div class="social-team">
								<a href="#" title=""><span class="fa fa-facebook"></span></a>
								<a href="#" title=""><span class="fa fa-twitter"></span></a>
								<a href="#" title=""><span class="fa fa-linkedin"></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-3">
					<div class="box-team">
						<div class="image">
							<img src="<?php echo base_url()?>assets/images/team-4.jpg" alt="" class="img-responsive">
						</div>
						<div class="description">
							<h5 class="blok-title">
								JOHNATHAN DOE
							</h5>
							<p>Pest Control Worker</p>
							<div class="social-team">
								<a href="#" title=""><span class="fa fa-facebook"></span></a>
								<a href="#" title=""><span class="fa fa-twitter"></span></a>
								<a href="#" title=""><span class="fa fa-linkedin"></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-3">
					<div class="box-team">
						<div class="image">
							<img src="<?php echo base_url()?>assets/images/team-5.jpg" alt="" class="img-responsive">
						</div>
						<div class="description">
							<h5 class="blok-title">
								JOHNATHAN DOE
							</h5>
							<p>Pest Control Worker</p>
							<div class="social-team">
								<a href="#" title=""><span class="fa fa-facebook"></span></a>
								<a href="#" title=""><span class="fa fa-twitter"></span></a>
								<a href="#" title=""><span class="fa fa-linkedin"></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-3">
					<div class="box-team">
						<div class="image">
							<img src="<?php echo base_url()?>assets/images/team-6.jpg" alt="" class="img-responsive">
						</div>
						<div class="description">
							<h5 class="blok-title">
								JOHNATHAN DOE
							</h5>
							<p>Pest Control Worker</p>
							<div class="social-team">
								<a href="#" title=""><span class="fa fa-facebook"></span></a>
								<a href="#" title=""><span class="fa fa-twitter"></span></a>
								<a href="#" title=""><span class="fa fa-linkedin"></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-3">
					<div class="box-team">
						<div class="image">
							<img src="<?php echo base_url()?>assets/images/team-7.jpg" alt="" class="img-responsive">
						</div>
						<div class="description">
							<h5 class="blok-title">
								JOHNATHAN DOE
							</h5>
							<p>Pest Control Worker</p>
							<div class="social-team">
								<a href="#" title=""><span class="fa fa-facebook"></span></a>
								<a href="#" title=""><span class="fa fa-twitter"></span></a>
								<a href="#" title=""><span class="fa fa-linkedin"></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-3">
					<div class="box-team">
						<div class="image">
							<img src="<?php echo base_url()?>assets/images/team-8.jpg" alt="" class="img-responsive">
						</div>
						<div class="description">
							<h5 class="blok-title">
								JOHNATHAN DOE
							</h5>
							<p>Pest Control Worker</p>
							<div class="social-team">
								<a href="#" title=""><span class="fa fa-facebook"></span></a>
								<a href="#" title=""><span class="fa fa-twitter"></span></a>
								<a href="#" title=""><span class="fa fa-linkedin"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- CTA --> 
	
        
<!------------------------------------------------ Footer Part ------------------------------------------------> 
<?php include "includes/footer.php"; ?>
<!------------------------------------------------ //Footer Part ----------------------------------------------->

</body>
</html>