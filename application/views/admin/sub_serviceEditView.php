<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<!------------------------------------------------ Head Part ------------------------------------------------> 
<?php include "includes/head.php"; ?>
<!------------------------------------------------ //Head Part ------------------------------------------------> 
  <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        
<body class="dashboard-page">

	<!------------------------------------------------ Header Part ------------------------------------------------> 
            <?php include "includes/header.php"; ?>
        <!------------------------------------------------ //Header Part ------------------------------------------------>
        
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		
                <!------------------------------------------------ Top Menu Part ------------------------------------------------> 
                    <?php include "includes/topMenu.php"; ?>
                <!------------------------------------------------ //Top Menu Part ------------------------------------------------> 
            
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- validation -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Edti Sub Service</h2>
					</div>
                                    
                                    <?php if($this->session->flashdata('emsg')) { ?>  
                                    <center>
                                        <div class="error-msg" style="width:30%">
                                            <i class="fa fa-info-circle"></i>
                                            <?php echo $this->session->flashdata('emsg'); ?>
                                        </div>
                                    </center>
                                    <?php } ?>
					
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
								<div class="form-title">
									<a href="<?php echo base_url('Admin/sub_servicesList'); ?>"><button class="btn btn-md btn-danger">Back</button></a>
								</div>
								<div class="form-body">
									<?php echo form_open(base_url('Admin/saveService'), array('id' => 'saveService', 'data-toggle' => 'validator', 'role' => 'form', "enctype" => "multipart/form-data",)); ?>
                                                                                
                                                                    <input type="hidden" name="id" value="<?php echo $data["id"];?>">
                                                                    <input type="hidden" name="service_type" value="child_service">
                                                                    
                                                                                <div class="form-group"> 
                                                                                    <label for="field-1">Select Service <b style="color:red">*</b></label> 
                                                                                        <select name="service_id" class="form-control" id="service_id" placeholder="Enter Service Name" required=""> 
                                                                                            <option value="">Select Service </option>
                                                                                             <?php 
                                                                                            foreach(activeServices() as $val => $key){
                                                                                                $service_image = $key['service_name'];
                                                                                                $service_id = $key['id'];
                                                                                                $selected = "";
                                                                                                
                                                                                                if($data["service_id"] == $service_id){
                                                                                                    $selected = "selected";
                                                                                                }
                                                                                                echo "<option value = $service_id $selected >$service_image</option>";
                                                                                            }
                                                                                            ?>
                                                                                        </select>
										</div>     
                                                                    
                                                                                <div class="form-group"> 
                                                                                    <label for="field-1">Service Name <b style="color:red">*</b></label> 
                                                                                        <input type="text" name="sub_service_name" value="<?php echo $data["sub_service_name"];?>" class="form-control" id="service_name" placeholder="Enter Sub Service Name" required=""> 
										</div>
                                                                    
                                                                                <div class="form-group"> 
                                                                                    <label for="field-1">Meta Title <b style="color:red">*</b></label> 
                                                                                    <input type="text" name="meta_title" class="form-control" id="meta_title" value="<?php echo $data["meta_title"];?>" placeholder="Enter Meta Title" required=""> 
										</div>
                                                                            
                                                                                <div class="form-group"> 
                                                                                    <label for="field-1">Meta Keywords <b style="color:red">*</b></label> 
                                                                                        <input type="text" name="meta_keywords" class="form-control" id="meta_keywords" value="<?php echo $data["meta_keywords"];?>" placeholder="Enter Meta Keywords" required=""> 
										</div>
                                                                            
                                                                                <div class="form-group"> 
                                                                                    <label for="field-1">Meta Description <b style="color:red">*</b></label> 
                                                                                        <input type="text" name="meta_description" class="form-control" id="meta_description" value="<?php echo $data["meta_description"];?>" placeholder="Enter Meta Description" required=""> 
										</div>
                                                                            
                                                                                <div class="form-group"> 
                                                                                    <label for="field-1">Slug URL <b style="color:red">*</b></label> 
                                                                                        <input type="text" name="meta_url" class="form-control" id="meta_url" value="<?php echo $data["meta_url"];?>" placeholder="Enter Slug URL" required=""> 
										</div>
                                                                    
                                                                            <center>
                                                                                <div class="form-group"> 
											<label for="field-1-2">Uploaded Image </label> 
                                                                                        <img class="list-icon img-thumbnail" src="<?php echo base_url(sub_service_image_upload_path.$data['service_image'])?>" style="width:60px; height: 50px" >
										</div> 
                                                                            </center>
                                                                            										
										<div class="form-group"> 
											<label for="field-1-2">Service Image </label> 
                                                                                        <input type="file" id="service_image" name="service_image" > 
										</div>
                                                                    
                                                                                <div class="form-group"> 
											<label for="field-1-3">About</label> 
                                                                                        <textarea name="about" id="about" required="true"><?php echo $data["about"];?></textarea>
										</div>
                                                                            
                                                                                <div class="form-group"> 
											<label for="field-1-3">Services</label> 
                                                                                        <textarea name="service_tab" id="service_tab" required=""><?php echo $data["service_tab"];?></textarea>
										</div> 
                                                                            
                                                                                <div class="form-group"> 
											<label for="field-1-4">Offers</label> 
                                                                                        <textarea name="offer_tab" id="offer_tab" required=""><?php echo $data["service_tab"];?></textarea>
										</div>
                                                                            
                                                                                <div class="form-group"> 
											<label for="field-1-5">Why Us</label> 
                                                                                        <textarea name="whyus_tab" id="whyus_tab" required=""><?php echo $data["whyus_tab"];?></textarea>
										</div>
                                                                            
                                                                                <div class="form-group"> 
											<label for="field-1-5">Faqs</label> 
                                                                                        <textarea name="faqs_tab" id="faqs_tab" required=""><?php echo $data["faqs_tab"];?></textarea>
										</div>
                                                                    
                                                                                <div class="form-group"> 
                                                                                    <label for="field-1">MRP <b style="color:red">*</b></label> 
                                                                                        <input type="text" name="mrp_price" class="form-control" value="<?php echo $data["mrp_price"];?>" id="mrp_price" placeholder="Enter MRP" required=""> 
										</div> 
                                                                            
                                                                                <div class="form-group"> 
                                                                                    <label for="field-1">Online Price <b style="color:red">*</b></label> 
                                                                                        <input type="text" name="online_price" class="form-control" id="online_price" value="<?php echo $data["online_price"];?>" placeholder="Enter Online Price" required=""> 
										</div>
                                                                            
                                                                                <div class="form-group"> 
                                                                                    <label for="field-1">Discount (%) <b style="color:red">*</b></label> 
                                                                                        <input type="text" name="discount" class="form-control" id="discount" value="<?php echo $data["discount"];?>" placeholder="Enter Discount" required=""> 
										</div>
                                                                    
                                                                                <div class="form-group"> 
                                                                                    <label for="field-1">Status </label> 
                                                                                    <select name="status" class="form-control" id="status" placeholder="Enter Service Name" required="">
                                                                                        <option value="1" <?php if($data['status'] == 1) echo "selected"; ?> >Active</option>
                                                                                        <option value="0" <?php if($data['status'] == 0) echo "selected"; ?>>Inactive</option>
                                                                                    </select>
										</div> 
										
                                                                            <center><button type="submit" class="btn btn-default w3ls-button">Submit</button> </center>
									<?php echo form_close(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //validation -->
			</div>
		</div>
		<!-- footer -->
		
		<!-- //footer -->
	</section>
	<script src="<?=base_url()?>admin_assets/custom_js/service.js"></script>
        <!------------------------------------------------ Footer Part ------------------------------------------------> 
            <?php include "includes/footer.php"; ?>
        <!------------------------------------------------ //Footer Part ------------------------------------------------>  
        
       
        
</body>
</html>
