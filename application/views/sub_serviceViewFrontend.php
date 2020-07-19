<!DOCTYPE html>
<html class="no-js" lang="en">
    
<!------------------------------------------------ Head Part ------------------------------------------------> 
<?php include "includes/head.php"; ?>
<!------------------------------------------------ //Head Part ------------------------------------------------> 
  
<style>
    .quotes{
        height: 480px !important;
        overflow:auto;
    }
</style>
    
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
					<!--<div class="caption"><?php //echo strtoupper(serviceNameFromId($data['service_id']))?></div>-->
					<div class="caption"><?php echo strtoupper($data['sub_service_name'])?></div>
					<ol class="breadcrumb">
                                            <li><a href="<?= base_url()?>">Home</a></li>
						<li class="active">Services</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!-- WHY  -->
	<div class="section service">
		<div class="container">
                    
                    <br>
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
					<div class="box-service">
						<div class="row">
							                                                    
                                                    <div class="col-sm-6 col-md-6">
                                                            <br>
								<!------------------------------------------------ Header Part ------------------------------------------------> 
                                                                    <?php include "includes/enquiry_form.php"; ?>
                                                                <!------------------------------------------------ //Header Part ------------------------------------------>
                                                    </div>
                                                    
                                                    <div class="col-sm-6 col-md-6">
                                                        
                                                        <div class="col-xs-12 col-md-12" style="width: 100%;text-align: center;padding:0 20px 20px">
                                                            <div class="col-xs-12 col-md-6" style="border-right:1px solid #3378E1"><span style="display:block;width:100%;text-align:center; font-size: 18px">MRP</span>
                                                                <label style="font-size: 18px; font-weight: bold">₹<?php echo $data['mrp_price']?></label>
                                                            </div>
                                                             
                                                            <div class="col-xs-12 col-md-6"><span style="display:block;width:100%;text-align:center; font-size: 18px">Online Price</span>
                                                                <label style="font-size: 18px; font-weight: bold">₹<?php echo $data['online_price']?> (<?php echo $data['discount']?>%) </label>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="discount_part horizontalAlign" style="color: #3378E1">
                                                            <?php echo $data['discount']?>% OFF on Online Payment
                                                        </div>

                                                        <span style="display:block;width:100%;text-align:center; margin-top: 2%; color: darkgray">
                                                            Rates are inclusive of all taxes.
                                                        </span>
                                                        
                                                        <br>
                                                        <div class="box">
                                                            <img src="<?php echo base_url(sub_service_image_upload_path.$data['service_image'])?>" alt="" class="img-responsive" style="height:280px; width: 100%" />
							</div>
                                                        
							</div>
						</div>
					</div>
					
				</div>
                        </div>
                    
                    <br>
                   
			<div class="row">
                            <div class="col-sm-12 col-md-12">
					<div class="box-service">
						<div class="row">
<!--							<div class="col-sm-6 col-md-6">
								<div class="box">
                                                                    <img src="<?=base_url()?>assets/images/about-1.jpg" alt="" class="img-responsive" />
								</div>
							</div>-->
							<div class="col-sm-12 col-md-12">
								<div class="description">
									<h5 class="blok-title">
										<?php echo strtoupper($data['sub_service_name'])?>
									</h5>
									<p class="equalAlign"><?php echo $data['about']?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
                    
                   
			<div class="row">
                            <div class="col-sm-12 col-md-12 equalAlign" style="font-size:13px; ">
					<div class="tab" style="font-size:13px">
                                            <button class="tablinks active" onclick="openCity(event, 'services')" style="border-right: 1px solid #ccc;">Services</button>
                                            <button class="tablinks" onclick="openCity(event, 'offers')" style="border-right: 1px solid #ccc;">Offers</button>
                                            <button class="tablinks" onclick="openCity(event, 'why_us')" style="border-right: 1px solid #ccc;">Why Us</button>
                                            <button class="tablinks" onclick="openCity(event, 'faqs')">Faqs</button>
                                          </div>

                                          <div id="services" class="tabcontent" style="display:block;">
                                            <!--<h3>Services</h3>-->
                                               <?php if(!empty($data['service_tab'])) {
                                                   echo $data['service_tab'];
                                               }
                                               else echo "No Service Available Right Now"; 
?>                                              
                                            
                                          </div>

                                          <div id="offers" class="tabcontent">
                                            <!--<h3>Offers</h3>-->
                                            <?php if(!empty($data['offer_tab'])) {
                                                   echo $data['offer_tab'];
                                               }
                                               else echo "No Offer Available Right Now"; ?>
                                          </div>

                                          <div id="why_us" class="tabcontent">
                                            <!--<h3>Why Us</h3>-->
                                            <?php if(!empty($data['whyus_tab'])) {
                                                   echo $data['whyus_tab'];
                                               }
                                               else echo "No Data Available Right Now"; ?>
                                          </div>
                                
                                          <div id="faqs" class="tabcontent">
                                            <!--<h3>Faqs</h3>-->
                                            <?php if(!empty($data['faqs_tab'])) {
                                                   echo $data['faqs_tab'];
                                               }
                                               else echo "No Data Available Right Now"; ?>
                                          </div>
				</div>
			</div>
                    
		</div>
	</div>
	
	<!-- FOOTER SECTION -->
	<!------------------------------------------------ Footer Part ------------------------------------------------> 
            <?php include "includes/footer.php"; ?>
        <!------------------------------------------------ //Footer Part ------------------------------------------------>   
        <script src="<?=base_url()?>assets/custom_js/services.js"></script>
</body>
</html>