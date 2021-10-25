<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>Admin Login | Alt Office </title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/icon/fevicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <!-- Carousel CSS -->
    <link rel="stylesheet" href="../assets/css/owl.carousel.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <!-- Mobile Menu CSS -->
    <link rel="stylesheet" href="../assets/css/meanmenu.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../assets/css/responsive.css">

    <!-- jQuery -->
    <script src="../assets/js/jquery-1.11.3.min.js"></script>
    
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    
    
    <style type="text/css">
	.head
	{
		box-shadow: 0 3px 6px rgba(0, 0, 0, 0.12);
	}
	.form-control {
        min-height: 41px;
		background: #fff;
		box-shadow: none !important;
		border-color: #e3e3e3;
	}
	.form-control:focus {
		border-color: #70c5c0;
	}
    .form-control, .btn {        
        border-radius: 2px;
    }
	.login-form {
		width: 350px;
		margin: 0 auto;
		padding: 100px 0 30px;		
	}
	.login-form form {
		color: #7a7a7a;
		border-radius: 2px;
    	margin-bottom: 15px;
        font-size: 13px;
       
        box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.3);
        padding: 30px;	
        position: relative;	
    }
	.login-form h2 {
		font-size: 22px;
        margin: 50px 0 25px;
    }
	.login-form .avatar {
		position: absolute;
		margin: 0 auto;
		left: 0;
		right: 0;
		top: -50px;
		width: 125px;
		height: 125px;
		border-radius: 50%;
		z-index: 9;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.login-form .avatar img {
		width: 100%;
	}	
    .login-form input[type="checkbox"] {
        margin-top: 2px;
    }
    .login-form .btn {        
        font-size: 16px;
        font-weight: bold;
		
		border: none;
		margin-bottom: 20px;
    }
	.login-form .btn:hover, .login-form .btn:focus {
		background: #10ba76;
        outline: none !important;
	}    
	.login-form a {
		color: #fff;
		text-decoration: underline;
	}
	.login-form a:hover {
		text-decoration: none;
	}
	.login-form form a {
		color: #7a7a7a;
		text-decoration: none;
	}
	.login-form form a:hover {
		text-decoration: underline;
	}
	
	@media screen and (max-width: 480px) {
    .login-form {
		width: 90%;
}
</style>
</head>

<body>
   <!-- prelaoder start -->
    <div id="preloader-wrapper">
        <div class="preloader-wave-effect"></div>
    </div>
    <!-- prelaoder end -->
    <!-- header area start -->
    <?php 
		include('header.php');
	?>
    <!-- header area end -->
    
     <!--Login Area Start-->
          	
          			<div class="login-form">
          				<form action="query/login_check.php" method="post">
                            <div class="avatar text-center">
                                <img src="../icons/avatar.png" alt="Avatar">
                            </div>
                            <h2 class="text-center">Admin Login</h2>  
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                            </div>        
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block slide-btn">Login</button>
                            </div>
                            
                            <div class="text-center">
                                <a href="#" data-toggle="modal" data-target="#myModal">Forgot Password?</a>
                            </div>
                        </form>
                    </div>    
                
                
       <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Forgot Password??</h4>
        </div>
        <div class="modal-body">
          <p>Contact Webdadz Support Team to Reset Password </p>
          <p> <i class="fa fa-phone"></i>+91 9546749205</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
                <!-- modal ends -->

    <!--Login Area End--

    <!--    Footer Satart-->
    	<?php
			include('footer.php')
		?>
    
    <!-- Footer  End-->
    
    <!-- Bootstrap JS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Mobile Menu JS -->
    <script src="../assets/js/jquery.meanmenu.js"></script>
    <!-- Owl Carousel JS -->
    <script src="../assets/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS -->
    <script src="../assets/js/jquery.scrollUp.js"></script>
    <!-- WOW JS -->
    <script src="../assets/js/wow-1.3.0.min.js"></script>
    <!-- countdown JS -->
    <script src="../assets/js/counterup.min.js"></script>
    <!-- Waypoints JS -->
    <script src="../assets/js/waypoints.js"></script>
    <!-- ajax-mail JS -->
    <script src="../assets/js/ajax-mail.js"></script>
    <!-- Active JS -->
    <script src="../assets/js/active.js"></script>
</body>

</html>