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
<body class="dashboard-page">
    
    <?php
        $url = base_url() . "Admin/servicesList/";
        $current_page = 1;
        $url_page_no = $this->uri->segment(3);
        if ($url_page_no != '' && $url_page_no > 1) {
            $current_page = $url_page_no;
        }
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
				<!-- tables -->
				
				<div class="table-heading">
					<h2>Service List</h2>
				</div>
                                
                                <?php if($this->session->flashdata('smsg')) { ?>  
                                    <center>
                                        <div class="success-msg" style="width:30%">
                                            <i class="fa fa-check-circle"></i>
                                            <?php echo $this->session->flashdata('smsg'); ?>
                                        </div>
                                    </center>
                                    <?php } ?>
                                
				<div class="agile-tables">
					<div class="w3l-table-info">
                                            <a href="<?php echo base_url('Admin/addService'); ?>"><button class="btn btn-md btn-success">Add Service</button></a>
					    <table id="table">
						<thead>
						  <tr>
							<th>#</th>
							<th>Service Name</th>
							<th>Image</th>
							<th>Status</th>
							<th>Created At</th>
							<th>Action</th>
						  </tr>
						</thead>
						<tbody>
                                                    <?php
                                                    $status_array = array("0" => "<label class='label label-danger'>Inactive</label>", "1" => "<label class='label label-success'>Active</label>");
                                                    
                                                    if (!empty($list)) {
                                                        
                                                        $sr_no = 1;

                                                        if (isset($per_page_cnt)) {
                                                                $sr_no = ((($current_page - 1) * $per_page_cnt) + 1);
                                                        }
                                                    
                                                    foreach($list as $key => $data) {
                                                            $id = $data["id"];
                                                            $service_image = $data["service_image"];
                                                        ?>
						    <tr>
                                                        <td><?php echo $sr_no; ?></td>
							<td><?php echo ucwords($data["service_name"]) ?></td>
                                                        <td>
                                                            <img class="list-icon img-thumbnail" src="<?php echo base_url(image_upload_path.$service_image)?>" style="width:60px; height: 50px" >
                                                        </td>
							<td><?php echo $status_array[$data["status"]] ?></td>
							<td><?php echo $data["created_at"]; ?></td>
                                                        <td>
                                                            <a href="<?php echo base_url('Admin/editService/'.$id); ?>"><button class="btn btn-xs btn-primary">Edit</button></a>
                                                            <!--<button class="btn btn-xs btn-danger">Delete</button>-->
                                                        </td>
						    </tr>
                                                    <?php  $sr_no++; } ?>
                                                    <?php } else echo "<tr><td align='center' colspan=6><b style='color:red'>No records found</b></td></tr>"; ?>
                                                  
                                                  
						</tbody>
					  </table>
                                            
                                            <ul class="pagination pagination-sm mt-0 mb-0 mr-15">
                                                <?php foreach ($links as $l) { ?>
                                                <li><?php echo $l; ?></li>
                                                <?php } ?>
                                            </ul>
                                            
					</div>

				</div>
				<!-- //tables -->
			</div>
		</div>
		
        <!------------------------------------------------ Footer Part ------------------------------------------------> 
            <?php include "includes/footer.php"; ?>
        <!------------------------------------------------ //Footer Part ------------------------------------------------>  
        
        <script>
        $('.success-msg').fadeOut(10000);
        </script>
</body>
</html>
