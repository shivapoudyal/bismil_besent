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
	
    <!------------------------------------------------ Header Part ------------------------------------------------> 
       <?php include "includes/header.php"; ?>
    <!------------------------------------------------ //Header Part ------------------------------------------------>     
        
	<!-- BANNER -->
	<div class="section subbanner">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="caption">BLOG</div>
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Blog</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!-- WHY  -->
	<div class="section service">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-4">
					<div class="widget categories">
						<div class="widget-title">
							<h4>CATEGORIES</h4>
						</div>
						<ul class="category-nav">
                                                    
                                                    <?php 
                                                    foreach(activeServices() as $key => $val){
                                                        $service_url = $val['meta_url'];
                                                        $active_class = "";
//                                                        if($val['id'] == $service_id){
//                                                            $active_class = "active";
//                                                        }
                                                    ?>
                                                    <li class="<?php echo $active_class;?>"><a href="<?php echo base_url('services/'. $service_url)?>"><?php echo strtoupper($val['service_name'])?></a></li>
                                                    <?php } ?>    
						</ul>
					</div>
					<div class="widget recent-post">
						<div class="widget-title">
							<h4>RECENT NEWS</h4>
						</div>
						<?php 
                                            foreach(getRecentBlogs() as $bkey => $bval){
                                                $blog_id = $bval['id'];
                                                $blog_url = $bval['meta_url'];
                                                $blog_image = $bval['blog_image'];
                                                $comment_count = getCommentCounting($blog_id)['comment_count'];
                                            ?>
                                            
						<div class="media">
							<div class="media-left">
								<a href="<?php echo base_url('blogs/').$blog_url?>">
								  <img class="media-object" src="<?php echo base_url(blog_image_upload_path.$blog_image)?>" alt="...">
								</a>
							</div>
							<div class="media-body">
								<p><a href="<?php echo base_url('blogs/').$blog_url?>" title=""><?php echo ($bval['blog_heading'])?></a></p>
							</div>
						</div>
                                            <?php } ?>
						
					</div>
					<div class="widget recent-post">
						<div class="widget-title">
							<h4>TAG CLOUD</h4>
						</div>
						<ul class="list-inline bullet-lists">
                                                     <?php 
                                                       $keywords = blogAllKeywords();
                                                       $keyword_explode = explode(",", $keywords);
                                                       foreach($keyword_explode as $kkey){
                                                    ?>
                                                    <li style="background:#3378E1; color:white"><a href="" ><b><?php echo $kkey?></b></a></li>
                                                        
                                                       <?php } ?>
							
						</ul>
					</div>
				</div>
				<div class="col-sm-8 col-md-8">
                                    <?php 
                                        foreach($list as $key => $val){
                                            $blog_id = $val['id'];
                                            $service_id = $val['service_id'];
                                            $blog_url = $val['meta_url'];
                                            
                                            $comment_count = getCommentCounting($blog_id)['comment_count'];
                                    ?>
					<div class="blog-item">
						<div class="gambar">
							<img src="<?php echo base_url(blog_image_upload_path.$val['blog_image'])?>" alt="" class="img-responsive">
						</div>
						<div class="item-body">
							<div class="metadate">
								<div class="month"><?php echo $val["created_month"]?></div>
								<div class="date"><?php echo $val["created_day"]?>, <?php echo $val["created_year"]?></div>
							</div>
							<div class="description">
								<h4>
									<a href="<?php echo base_url('blogs/').$blog_url?>" title=""><?php echo $val["blog_heading"]?></a>
								</h4>
								<p class="postby">
									by Admin <span>/</span> <?php echo $comment_count;?> <a href="<?php echo base_url('blogs/').$blog_url?>" title="">Comments</a>
								</p>
                                                                <p class="equalAlign">
                                                                    <?php echo $val["about"]?>
                                                                </p>
							</div>
						</div>
					</div>
                                        <?php } ?>
					
					
					<ul class="pagination">
						 <?php foreach ($links as $l) { ?>
                                                <li><?php echo $l; ?></li>
                                                <?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
<!------------------------------------------------ Footer Part ------------------------------------------------> 
    <?php include "includes/footer.php"; ?>
<!------------------------------------------------ //Footer Part ------------------------------------------------>  
</body>
</html>