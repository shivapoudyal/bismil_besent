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
	<!-- BANNER -->
	<div id="slides" class="section banner">
		<ul class="slides-container">
			<li>
				<img src="<?php echo base_url()?>assets/images/slide-1.jpg" alt="">
				<div class="carousel-caption">
					<div class="container">
						<div class="wrap-caption">
							<div class="caption-heading">
								<div class="color1">
									<span>WE ARE THE EXPERTS</span>
								</div>
								<div class="color2">
									<span>IN PEST CONTROL</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<img src="<?php echo base_url()?>assets/images/slide-2.jpg" alt="">
				<div class="carousel-caption">
					<div class="container">
						<div class="wrap-caption">
							<div class="caption-heading">
								<div class="color1">
									<span>PROTECT YOUR</span>
								</div>
								<div class="color2">
									<span>HOME TODAY</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<img src="<?php echo base_url()?>assets/images/slide-3.jpg" alt="">
				<div class="carousel-caption">
					<div class="container">
						<div class="wrap-caption">
							<div class="caption-heading">
								<div class="color1">
									<span>WE CARE ABOUT</span>
								</div>
								<div class="color2">
									<span>YOUR PEST INFESTATION</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<!-- SERVICES -->
	<div class="section feature">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-8">
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<div class="blok feature-item">
								<div class="image">
									<a href="index.html" title=""><img src="<?php echo base_url()?>assets/images/about-1.jpg" alt="" class="img-responsive"></a>
								</div>
								<div class="item-body">
									<div class="description">
										<h5 class="blok-title">
											<a href="index.html" title="">RESIDENTIAL PEST CONTROL</a>
										</h5>
										<p>Lorem ipsum dolor sit amet libero turpis non cras ligula id commodo aenean est in volutpat amet sodales porttitor bibendum facilisi.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-md-4">
							<div class="blok feature-item">
								<div class="image">
									<a href="index.html" title=""><img src="<?php echo base_url()?>assets/images/about-2.jpg" alt="" class="img-responsive"></a>
								</div>
								<div class="item-body">
									<div class="description">
										<h5 class="blok-title">
											<a href="index.html" title="">COMMERCIAL PEST CONTROL</a>
										</h5>
										<p>Lorem ipsum dolor sit amet libero turpis non cras ligula id commodo aenean est in volutpat amet sodales porttitor bibendum facilisi.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-md-4">
							<div class="blok feature-item">
								<div class="image">
									<a href="index.html" title=""><img src="<?php echo base_url()?>assets/images/about-3.jpg" alt="" class="img-responsive"></a>
								</div>
								<div class="item-body">
									<div class="description">
										<h5 class="blok-title">
											<a href="index.html" title="">PEST PREVENTION</a>
										</h5>
										<p>Lorem ipsum dolor sit amet libero turpis non cras ligula id commodo aenean est in volutpat amet sodales porttitor bibendum facilisi.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
                                <!------------------------------------------------ Header Part ------------------------------------------------> 
                                    <?php include "includes/enquiry_form.php"; ?>
                                <!------------------------------------------------ //Header Part ------------------------------------------>
				</div>
			</div>
		</div>
	</div>
	<!-- PEST CONTROL -->
	<div class="section pest-control bgc">
		<div class="container">
                    <?php foreach($data as $key => $val){
                        $service_id = $val["id"];
                    ?>
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="section-title">
                                            <h3 class="lead"><?php echo strtoupper($val['service_name'])?></h3>
					</div>
				</div>
				
			</div>
                    
			<div class="row">
                            <?php 
                            $child_services = $this->AdminModel->getChildServiceList($service_id);
                                foreach($child_services as $chilkey => $childval){
                                    $service_image = $childval['service_image'];
                            ?>
				<div class="col-sm-4 col-md-3">
					<div class="box-image">
						<div class="image">
                                                    <a href="<?php echo base_url('services/').$childval['meta_url']?>" title=""><img src="<?php echo base_url(sub_service_image_upload_path.$service_image)?>" alt="" class="img-responsive"></a>
						</div>
						<div class="description">
							<h5 class="blok-title">
								<a href="<?php echo base_url('services/').$childval['meta_url']?>" title="<?php echo strtoupper($childval['sub_service_name'])?>"><?php echo strtoupper($childval['sub_service_name'])?></a>
							</h5>
						</div>
					</div>
				</div>
                                <?php } ?>
				
			</div>
                    <?php } ?>
		</div>
	</div>
	<!-- STATS -->
<!--	<div class="section stats bg1">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-3">
					<div class="box-stat">
						<div class="icon">
							<div class="fa fa-users"></div>
						</div>
						<h2 class="counter">1000+</h2>
						<p>Passionate Employee</p>
					</div>
				</div>
				<div class="col-sm-4 col-md-3">
					<div class="box-stat">
						<div class="icon">
							<div class="fa fa-building-o"></div>
						</div>
						<h2 class="counter">500+</h2>
						<p>Passionate Employee</p>
					</div>
				</div>
				<div class="col-sm-4 col-md-3">
					<div class="box-stat">
						<div class="icon">
							<div class="fa fa-heart-o"></div>
						</div>
						<h2 class="counter">320+</h2>
						<p>Passionate Employee</p>
					</div>
				</div>
				<div class="col-sm-4 col-md-3">
					<div class="box-stat">
						<div class="icon">
							<div class="fa fa-trophy"></div>
						</div>
						<h2 class="counter">24+</h2>
						<p>Passionate Employee</p>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- WHY -->
	<div class="section why">
		<div class="container">
			<div class="row">	
				<div class="col-sm-8 col-md-8">
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="section-title">
								<h3 class="lead">WHY APSO?</h3>
							</div>
						</div>
					</div>
					<div class="row">
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
									<p class="equalAlign"><?php echo full_service_pest_removal?></p>
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
				<div class="col-sm-4 col-md-4">
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="section-title">
								<h3 class="lead">WHO WE ARE</h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="box-image-2">
								<div class="image animg">
									<img src="<?php echo base_url()?>assets/images/we-1.jpg" alt="" class="img-responsive">
								</div>
								<div class="box-image-body">
                                                                    <p class="equalAlign"><b style='color:#545454'>APSO Services Pvt. Ltd. </b> <?php echo who_we_are?></p>
								</div>
							</div>
<!--							<div class="download-brochure">
								<a href="#" title="" class="btn btn-brochure">
									<span class="fa fa-file-pdf-o doc"></span>DOWNLOAD BROCHURE
									<span class="caret-brochure"></span>
								</a>
							</div>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- BLOG --> 
	<div class="section blog bgc">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6">
					<div class="section-title">
						<h3 class="lead">COMPANY NEWS</h3>
					</div>
				</div>
				<div class="col-sm-6 col-md-6">
                                    <a href="<?php echo base_url('bloglist')?>" title="" class="btn btn-default pull-right btn-view-all">VIEW ALL NEWS</a>
				</div>
			</div>
			<div class="row">
                            <?php 
                                foreach(getRecentBlogs() as $bkey => $bval){
                                    $blog_id = $bval['id'];
                                    $blog_url = $bval['meta_url'];
                                    $blog_image = $bval['blog_image'];
                                    $comment_count = getCommentCounting($blog_id)['comment_count'];
                            ?>
				<div class="col-sm-4 col-md-4">
					<div class="blog-item">
						<div class="gambar">
                                                    <img src="<?php echo base_url(blog_image_upload_path.$blog_image)?>" alt="" class="img-responsive" style="height: 225px">
						</div>
						<div class="item-body">
							<div class="metadate">
								<div class="month"><?php echo $bval["created_month"]?></div>
								<div class="date"><?php echo $bval["created_day"]?>, <?php echo $bval["created_year"]?></div>
							</div>
							<div class="description">
								<h4>
                                                                    <a href="<?php echo base_url('blogs/').$blog_url?>" title=""><?php echo strtoupper($bval['blog_heading'])?></a>
								</h4>
								<p class="postby">
									by Admin <span>/</span> <?php echo $comment_count?> Comments
								</p>
                                                                <p class="equalAlign"><?php echo excerptShow($bval["about"], 235); ?></p>
							</div>
						</div>
					</div>
				</div>
                                <?php } ?>
			</div>
		</div>
	</div>
	<!-- TESTIMONY --> 
	<div class="section testimony bgi-2">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="section-title center cwhite">
						<h3 class="lead">TESTIMONIALS</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div id="owl-testimony">
						
						<div class="item">
							<div class="item-testimony">
								<div class="quote-box">
									<blockquote class="quote">
									 I have taken service for pest for my home now I am satisfied & I can say the treatment has done by Apsos services. thanks. Apsos Services
									</blockquote>
								</div>
                                                            
								<div class="people">
									<!--<img class="img-rounded user-pic" src="<?php echo base_url()?>assets/images/testimony-thumb-2.jpg" alt="">-->
									<p class="details">
										Monika Malhotra <span>Delhi</span>
									</p>                        
								</div>
								<div class="icon"><span class="fa fa-quote-left"></span></div>
							</div>
						</div>
						<div class="item">
							<div class="item-testimony">
								<div class="quote-box">
									<blockquote class="quote">
									 The greatest problem of bed bugs in my home and  I called from this Apsos pest control. Their response was good. They sort out of the bed bug problem and they gave  6 months for the warranty period.
									</blockquote>
								</div>
								<div class="people">
									<!--<img class="img-rounded user-pic" src="<?php echo base_url()?>assets/images/testimony-thumb-3.jpg" alt="">-->
									<p class="details">
										Dipti Rawat <span>Noida</span>
									</p>                        
								</div>
								<div class="icon"><span class="fa fa-quote-left"></span></div>
							</div>
						</div>
						<div class="item">
							<div class="item-testimony">
								<div class="quote-box">
									<blockquote class="quote">
									 This is the best pest removing company in Delhi NCR. They provide a 1-year guarantee treatment certificate. Really love their work and highly recommended them.
									</blockquote>
								</div>
								<div class="people">
									<!--<img class="img-rounded user-pic" src="<?php echo base_url()?>assets/images/testimony-thumb-4.jpg" alt="">-->
									<p class="details">
										Raman Attri <span>Mumbai</span>
									</p>                        
								</div>
								<div class="icon"><span class="fa fa-quote-left"></span></div>
							</div>
						</div>
						<div class="item">
							<div class="item-testimony">
								<div class="quote-box">
									<blockquote class="quote">
									 I can recommend Apsos pest control to everyone because it gives assured service and their job is professional. I always prefer it to the best service. I was very much satisfied with their work in removing the honeycomb.
									</blockquote>
								</div>
								<div class="people">
									<!--<img class="img-rounded user-pic" src="<?php echo base_url()?>assets/images/testimony-thumb-5.jpg" alt="">-->
									<p class="details">
										Sudhanshu Pareek <span>Lucknow</span>
									</p>                        
								</div>
								<div class="icon"><span class="fa fa-quote-left"></span></div>
							</div>
						</div>
						<div class="item">
							<div class="item-testimony">
								<div class="quote-box">
									<blockquote class="quote">
									 I was suffering a lot of trouble from bed bugs so I availed their service and they also provided a 1year contract. These guys really did a great job so I can suggest Apsos.
									</blockquote>
								</div>
								<div class="people">
									<!--<img class="img-rounded user-pic" src="<?php echo base_url()?>assets/images/testimony-thumb-6.jpg" alt="">-->
									<p class="details">
										Ashish Tamale <span>Pune</span>
									</p>                        
								</div>
								<div class="icon"><span class="fa fa-quote-left"></span></div>
							</div>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
<!------------------------------------------------ Footer Part ------------------------------------------------> 
<?php include "includes/footer.php"; ?>
<!------------------------------------------------ //Footer Part ------------------------------------------------>         
	

</html>