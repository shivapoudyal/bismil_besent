<!DOCTYPE html>
<html class="no-js" lang="en">
<!------------------------------------------------ Head Part ------------------------------------------------> 
<?php include "includes/head.php"; ?>
<!------------------------------------------------ //Head Part ------------------------------------------------> 
<body>
    <?php 
    $comment_count = getCommentCounting($data['id'])['comment_count'];
    $blog_id = $data['id'];
    $service_id = $data['service_id'];
    ?>
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
					<div class="caption"><?php echo $data["blog_heading"]?></div>
					<ol class="breadcrumb">
                                            <li><a href="<?= base_url()?>">Home</a></li>
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
                                                        $service_id = $data['service_id'];
                                                        $service_url = $val['meta_url'];
                                                        $active_class = "";
                                                        if($val['id'] == $service_id){
                                                            $active_class = "active";
                                                        }
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
                                            foreach(getRecentBlogs($blog_id) as $bkey => $bval){
                                                $blogg_id = $bval['id'];
                                                $blog_url = $bval['meta_url'];
                                                $blog_image = $bval['blog_image'];
                                                //$comment_count = getCommentCounting($blogg_id)['comment_count'];
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
                                                       $keywords = $data['meta_keywords'];
                                                       $keyword_explode = explode(",", $keywords);
                                                       foreach($keyword_explode as $kkey){
                                                    ?>
                                                    <li style="background:#3378E1; color:white"><a href="" ><b><?php echo $kkey?></b></a></li>
                                                        
                                                       <?php } ?>
						</ul>
					</div>
				</div>
				<div class="col-sm-8 col-md-8">
					<div class="blog-item detail">
						<div class="gambar">
							<img src="<?php echo base_url(blog_image_upload_path.$data['blog_image'])?>" alt="" class="img-responsive">
						</div>
						<div class="item-body">
							<div class="metadate">
								<div class="month"><?php echo $data["created_month"]?></div>
								<div class="date"><?php echo $data["created_day"]?>, <?php echo $data["created_year"]?></div>
							</div>
							<div class="description">
								<h4>
									<?php echo $data["blog_heading"]?>
								</h4>
								<p class="postby">
									by Admin <span>/</span> <?php echo $comment_count;?> Comments
								</p>
<!--								<p>Lorem ipsum dolor sit amet libero turpis non cras ligula id commodo aenean est in volutpat amet sodales porttitor bibendum facilisi suspendisse aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra vel varius eget sit mollis.</p>
								<br /><br />-->
<!--								<blockquote>
								Donec mattis consequat pharetra. Pellentesque egestas turpis eget mauris elementum mollis. Nulla interdum semper est, eget aliquet nulla varius hendrerit. Fusce quis massa a sem semper ultrices.
								<footer>JAMES ANDERSON</footer>
								</blockquote>-->
								<br />
								<h4><?php echo $data["blog_heading"]?></h4>
                                                                <p class="aligncenter">
                                                                    <?php echo $data["about"]?>
                                                                </p>
							</div>
							<br /><br />
<!--							<div class="row">
								<div class="col-sm-6 col-md-6">
									<div class="post-image">
										<img src="../../demo/pestco/images/pest-3.jpg" alt="" class="img-responsive" />
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="post-image">
										<img src="../../demo/pestco/images/pest-4.jpg" alt="" class="img-responsive" />
									</div>
								</div>
							</div>-->
<!--							<div class="share-post">
								<strong>SHARE </strong>
								<div class="share-sosmed">
									<a href="#" title="">
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
									<a href="#" title="">
										<div class="item">
											<i class="fa fa-linkedin"></i>
										</div>
									</a> 
								</div>
							</div>-->
						</div>
					</div>
<!--					<div class="author-box">
						<div class="media">
                           <div class="media-left">
                                <a href="#">
                                  <img src="../../demo/pestco/images/testimony-thumb-1.jpg" alt="...">
                                </a>
                            </div>
                          <div class="media-body">
                                <h4 class="media-heading">By : <span>JAMES DOELSOEMBANG</span></h4>
                                We are also create and designing template for categories Graphic template and Game asset. in November 2014, we have won big contest Envato most wanted for categories game assets.
								<div class="share-sosmed author">
									<a href="#" title="">
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
									<a href="#" title="">
										<div class="item">
											<i class="fa fa-linkedin"></i>
										</div>
									</a> 
								</div>
                          </div>
                        </div>
					</div>-->

                                    <?php 
                                    if(!empty(getBlogComments($blog_id))){
                                    ?>    
					<div class="comments-box">
						<h4 class="title-heading">COMMENTS <span>(<?=$comment_count?>)</span></h4>
                                                
                                                <?php 
                                                foreach(getBlogComments($blog_id) as $ckey => $cval)
                                                {
                                                ?>
						<div class="media comment">
                                                    <div class="media-left">
                                                        
                                                            <img alt="80x80" src="<?php echo base_url('assets/images/dummypic.jpg')?>">
                                                        
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="media-heading">Post By : <span><?php echo ucfirst($cval['visitor_name'])?></span><small class="date"><?php echo $cval["created_month"]?> <?php echo $cval["created_day"]?>, <?php echo $cval["created_year"]?></small>
                                                        </div>    
                                                        <p class="aligncenter">
                                                            <?php echo $cval["visitor_msg"]?>
                                                        </p>
<!--                                                                                        <div class="replay"><a href="#" title=""><span class="fa fa-mail-reply"></span>Replay</a></div>-->
                                                    </div>
                                                </div>
                                                <?php } ?>
                                                
					</div>
                                    <?php } ?>    

					<div class="leave-comment-box">
						<h4 class="title-heading">LEAVE COMMENTS</h4>
						<?php echo form_open(base_url('Welcome/saveComment'), array('id' => 'saveComment', 'data-toggle' => 'validator', 'role' => 'form', "enctype" => "multipart/form-data",)); ?>
                                                <input type="hidden" value="<?php echo $data['id'];?>" name="blog_id">
                                                <input type="hidden" value="<?php echo $data['meta_url'];?>" name="blog_meta_url">
                                                
                                                        <div class="row">
								<div class="col-xs-12 col-md-6">
									<div class="form-group">
                                                                            <input type="text" id="visitor_name" name="visitor_name" value="" class="inputtext form-control" placeholder="Enter Name" required="">
									</div>
								</div>
								<div class="col-xs-12 col-md-6">
									<div class="form-group">
                                                                            <input type="email" id="visitor_email" name="visitor_email" value="" class="inputtext form-control" placeholder="Enter Email" required="">
									</div>
								</div>
								<div class="col-xs-12 col-md-12">
									<div class="form-group">
                                                                            <textarea id="visitor_msg" name="visitor_msg" class="inputtext form-control" rows="6" placeholder="Enter Your Message..." required=""></textarea>
									</div>
								</div>
								<div class="col-xs-12 col-md-12">
									<div class="form-group">
										<button id="send" type="submit" class="btn btn-default">POST COMMENT</button>
									</div>
								</div>
							</div>
						<?= form_close()?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- CTA --> 
	
	<!-- FOOTER SECTION -->
	
<!------------------------------------------------ Footer Part ------------------------------------------------> 
    <?php include "includes/footer.php"; ?>
<!------------------------------------------------ //Footer Part ------------------------------------------------>  
        
</body>
</html>