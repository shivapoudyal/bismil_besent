
<!DOCTYPE html>
<!------------------------------------------------ Head Part ------------------------------------------------> 
<?php include "includes/head.php"; ?>
<!------------------------------------------------ //Head Part ------------------------------------------------> 

<body class="signup-body">
    <br>
    <br>
    <br>
    <br>
    <br>
    
<?php if($this->session->flashdata('emsg')) { ?>  
<center>
    <div class="error-msg" style="width:30%">
        <i class="fa fa-info-circle"></i>
        <?php echo $this->session->flashdata('emsg'); ?>
    </div>
</center>
<?php } ?>
		<div class="agile-signup">	
			
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
                                    <h2 style="color:#fff">Apsos Admin</h2>
				</div>
				<form action="<?php echo base_url('Login/admin_login')?>" method="post">
                                    <input type="text" name="email" placeholder="Username" required="">
                                    <input type="password" name="password" placeholder="*************" required="">
					<input type="submit" class="register" value="Sign In">
				</form>
<!--				<div class="signin-text">
					<div class="text-left">
						<p><a href="#"> Forgot Password? </a></p>
					</div>
					<div class="text-right">
						<p><a href="signup.html"> Create New Account</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<h5>- OR -</h5>-->
				
			</div>
			
			<!-- footer -->
<!--			<div class="copyright">
				<p>© 2020 Apsos . All Rights Reserved</p>
			</div>-->
			<!-- //footer -->
			
		</div>
	<script src="<?php echo base_url()?>admin_assets/js/proton.js"></script>
        
        <script>
            $('.error-msg').fadeOut(2000);
        </script>
        
</body>
</html>
