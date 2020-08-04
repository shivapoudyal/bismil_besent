<!-- CLIENT -->
<!--	<div class="section stat-client">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3">
					<div class="client-img">
						<img src="<?php echo base_url()?>assets/images/client1.png" alt="" class="img-responsive">
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="client-img">
						<img src="<?php echo base_url()?>assets/images/client2.png" alt="" class="img-responsive">
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="client-img">
						<img src="<?php echo base_url()?>assets/images/client3.png" alt="" class="img-responsive">
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="client-img">
						<img src="<?php echo base_url()?>assets/images/client4.png" alt="" class="img-responsive">
					</div>
				</div>
			</div>
		</div>
	</div>
	 CTA 
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
						<a href="demo/pestco/contact.html" title="" class="btn btn-contact pull-right btn-view-all">CONTACT US</a>
					</div>
				</div>
			</div>
		</div>
	</div>-->

<div class="footer bgi-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-4">
					<div class="box-info">
						<div class="box-info-icon">
							<span class="fa fa-phone"></span>
						</div>
						<div class="box-info-body">
							<p>Have a question? call us now</p>
                                                        <h6><b><a href="tel:+91 7678929880">+91 7678929880</a>, <a href="tel:+91 9953589905">+91 9953589905</a></b></h6>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="box-info">
						<div class="box-info-icon">
							<span class="fa fa-clock-o"></span>
						</div>
						<div class="box-info-body">
							<p>We are open on</p>
							<!--<h4>Mon - Fri 08:00 - 20:00</h4>-->
							<h4>24*7</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="box-info">
						<div class="box-info-icon">
							<span class="fa fa-phone"></span>
						</div>
						<div class="box-info-body">
							<p>Need support? Drop us an email</p>
							<h4><a href="mailto:support@yoursite.com" title="">info@apsos.in</a></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-md-4">
					<div class="footer-item">
						<div class="footer-title">
							<h5>ABOUT AP<span>SO</span></h5>
						</div>
						<p class="equalAlign"><b style='color:white'>APSO Services Pvt. Ltd. </b><?php echo who_we_are?></p>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="footer-item">
						<div class="footer-title">
							<h5>SERVICES</h5>
						</div>
						<ul class="list">
                                                    <?php 
                                                    foreach(getTopServices() as $skey => $sval){
                                                        $meta_url = $sval['meta_url'];
                                                        $service_name = $sval['service_name'];
                                                    ?>
                                                    
                                                    <li><a href="<?=base_url('services/').$meta_url?>" title=""> <?php echo strtoupper($service_name)?> </a></li>
                                                    
                                                    <?php } ?>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="footer-item">
						<div class="footer-title">
							<h5>COMPANY</h5>
						</div>
<!--						<ul class="list">
							<li><a href="<?=base_url('about-us')?>" title="">About Us</a></li>
							<li><a href="" title="">Faq</a></li>
							<li><a href="#" title="">Support</a></li>
							<li><a href="<?=base_url('contact-us')?>" title="">Contact</a></li>
						</ul>-->
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7009.235428933777!2d77.34457858870094!3d28.551208139053873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scorporate%20office%20near%20Sector-45%2C%20Noida%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1593857265355!5m2!1sen!2sin" width="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
                                    
				</div>
			</div>
		</div>
		<div class="fsosmed">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<p class="fsos">APSO SOCIAL</p>
						<div class="footer-sosmed">
                                                    <a href="https://www.facebook.com/APSO-Services-Pvt-Ltd-103838034418791/" title="Facebook" target="_blank">
								<div class="item">
									<i class="fa fa-facebook"></i>
								</div>
							</a>
							<a href="#" title="">
								<div class="item">
									<i class="fa fa-twitter"></i>
								</div>
							</a>
							<a href="#" title="">
								<div class="item">
									<i class="fa fa-pinterest"></i>
								</div>
							</a>
							<a href="#" title="">
								<div class="item">
									<i class="fa fa-google"></i>
								</div>
							</a>
							<a href="#" title="">
								<div class="item">
									<i class="fa fa-instagram"></i>
								</div>
							</a>
							<a href="https://www.linkedin.com/company/apso-services-private-limited/" title="LinkedIn" target="_blank">
								<div class="item">
									<i class="fa fa-linkedin"></i>
								</div>
							</a> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fcopy">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<p class="ftex">&copy; 2020 Apso - All Rights Reserved</p> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.superslides.js"></script>
	<!-- <script type='text/javascript' src='maps/api/js_sensor_false_ver_4.1.5.js'></script> -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/owl.carousel.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-hover-dropdown.min.js"></script>
	<!-- sendmail -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/validator.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/form-scripts.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/script.js"></script>
        
        <script>
    $(document).ready(function () {
        $('.number').keypress(function (event) {
            return isNumber(event, this)
        });
    });
    // THE SCRIPT THAT CHECKS IF THE KEY PRESSED IS A NUMERIC OR DECIMAL VALUE.
    function isNumber(evt, element) {
        
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (
                (charCode < 48 || charCode > 57))
            return false;

        return true;
    }

</script>

<?php $method = $this->router->fetch_method(); 
if($method != "contact_us" && $method != "service" ){
?>

<script>
     $(window).load(function(){
   setTimeout(function(){
       $('#enquiryForm').modal('show');
   }, 10000);
});
</script>

<?php } ?>