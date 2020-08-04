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
    
    <?php 
    $blog_heading = getBlogHeadingById($data['blog_id'])['blog_heading'];
    ?>

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
						<h2>Edit Blog Comment</h2>
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
									<a href="<?php echo base_url('Admin/blogCommentsList'); ?>"><button class="btn btn-md btn-danger">Back</button></a>
								</div>
								<div class="form-body">
									<?php echo form_open(base_url('Admin/updateBlogComment'), array('id' => 'saveBlog', 'data-toggle' => 'validator', 'role' => 'form', "enctype" => "multipart/form-data",)); ?>
                                                                                
                                                                    <input type="hidden" name="id" value="<?php echo $data["id"];?>">
                                                                    
                                                                    
                                                                                <div class="form-group"> 
                                                                                    <label for="field-1">Blog Heading Name <b style="color:red">*</b></label> 
                                                                                    <input type="text" name="blog_heading" value="<?php echo $blog_heading;?>" class="form-control" placeholder="Enter Blog Heading" required="" readonly=""> 
										</div>
                                                                    
                                                                                <div class="form-group"> 
                                                                                    <label for="field-1">User Name <b style="color:red">*</b></label> 
                                                                                    <input type="text" name="visitor_name" value="<?php echo $data['visitor_name'];?>" class="form-control" placeholder="Enter User Name" required="" readonly=""> 
										</div>
                                                                    
                                                                                <div class="form-group"> 
                                                                                    <label for="field-1">User Name <b style="color:red">*</b></label> 
                                                                                    <input type="email" name="visitor_email" value="<?php echo $data['visitor_email'];?>" class="form-control" placeholder="Enter User Email" required="" readonly=""> 
										</div>
                                                                    
                                                                                <div class="form-group"> 
											<label for="field-1-3">User Comment</label> 
                                                                                        <textarea name="visitor_msg" id="about" required="true" readonly><?php echo $data["visitor_msg"];?></textarea>
										</div>
                                                                                                                                                										
                                                                                                                                                                                                                   
                                                                                <div class="form-group"> 
                                                                                    <label for="field-1">Status </label> 
                                                                                    <select name="status" class="form-control" id="status" placeholder="Enter Service Name" required="">
                                                                                        <option value="1" <?php if($data['status'] == 1) echo "selected"; ?> >Approved</option>
                                                                                        <option value="0" <?php if($data['status'] == 0) echo "selected"; ?>>Pending</option>
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
