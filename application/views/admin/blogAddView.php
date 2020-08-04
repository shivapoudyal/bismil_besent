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
						<h2>Add Blog Details</h2>
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
									<a href="<?php echo base_url('Admin/blogList'); ?>"><button class="btn btn-md btn-danger">Back</button></a>
								</div>
								<div class="form-body">
									<?php echo form_open(base_url('Admin/saveBlog'), array('id' => 'saveBlog', 'data-toggle' => 'validator', 'role' => 'form', "enctype" => "multipart/form-data",)); ?>
                                                                                
                                                                            <input type="hidden" name="id">
                                                                    
                                                                                <div class="form-group"> 
                                                                                    <label for="field-1">Select Service <b style="color:red">*</b></label> 
                                                                                        <select name="service_id" class="form-control" id="service_id" required=""> 
                                                                                            <option value="">Select Service </option>
                                                                                             <?php 
                                                                                            foreach(activeServices() as $val => $key){
                                                                                                $service_image = $key['service_name'];
                                                                                                $service_id = $key['id'];
                                                                                                echo "<option value = $service_id>$service_image</option>";
                                                                                            }
                                                                                            ?>
                                                                                        </select>
										</div> 
                                                                            
                                                                                <div class="form-group"> 
                                                                                    <label for="field-1">Blog Heading <b style="color:red">*</b></label> 
                                                                                        <input type="text" name="blog_heading" class="form-control" id="blog_heading" placeholder="Enter Blog Heading" required=""> 
										</div> 
                                                                            
                                                                                <div class="form-group"> 
                                                                                    <label for="field-1">Meta Title <b style="color:red">*</b></label> 
                                                                                        <input type="text" name="meta_title" class="form-control" id="meta_title" placeholder="Enter Meta Title" required=""> 
										</div>
                                                                            
                                                                                <div class="form-group"> 
                                                                                    <label for="field-1">Meta Keywords <b style="color:red">*</b></label> 
                                                                                        <input type="text" name="meta_keywords" class="form-control" id="meta_keywords" placeholder="Enter Meta Keywords" required=""> 
										</div>
                                                                            
                                                                                <div class="form-group"> 
                                                                                    <label for="field-1">Meta Description <b style="color:red">*</b></label> 
                                                                                        <input type="text" name="meta_description" class="form-control" id="meta_description" placeholder="Enter Meta Description" required=""> 
										</div>
                                                                            
                                                                                <div class="form-group"> 
                                                                                    <label for="field-1">Slug URL <b style="color:red">*</b></label> 
                                                                                        <input type="text" name="meta_url" class="form-control" id="meta_url" placeholder="Enter Slug URL" required=""> 
										</div>
                                                                            										
										<div class="form-group"> 
											<label for="field-1-2">Blog Image <b style="color:red">*</b></label> 
                                                                                        <input type="file" id="blog_image" name="blog_image" required=""> 
										</div>
                                                                            
                                                                                <div class="form-group"> 
											<label for="field-1-3">About</label> 
                                                                                        <textarea name="about" id="about" required="true"></textarea>
										</div>
                                                                            
                                                                            
                                                                                <div class="form-group"> 
                                                                                    <label for="field-1">Status </label> 
                                                                                    <select name="status" class="form-control" id="status" placeholder="Enter Service Name" required="">
                                                                                        <option value="1" >Active</option>
                                                                                        <option value="0" >Inactive</option>
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
