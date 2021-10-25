<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>Our Presence | Alt Office</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/icon/fevicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Mobile Menu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- jQuery -->
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
    <!-- header area start -->
    <?php 
	    include('header.php');
    ?>
    <!-- header area end -->
    <!--Breadcrumb Area Start-->
    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title">
                        <h2>Location</h2>
                        <a href="#">home <i class="fa fa-angle-double-right"></i></a>
                        <a class="active" href="#"><span>Location</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Team Area Strat -->
    <div id="team" class="section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 tex">
                    <div class="section-title text-center">
                    	<i class=""><img src="icons/map-location.png" width="120" height="120"/></i>
                        <h1>Our Presence</h1>
                        <p>Alt-Office presently manage office spaces for over 80 companies in Delhi NCR. Our company is known to deliver managed offices/co-working spaces for startups and SMBs with team size of 1-100 members.</p>
                        <h3><i class="fa fa-location-arrow color-teal"></i> Coming to Delhi, Mumbai, and Bengaluru Soon</h3>
                        <div class="separator"></div>
                    </div>
                </div>
            </div>
            <?php
$con=mysqli_connect("localhost","root") or die ("can not connect");
mysqli_select_db($con,"altoffice") or die ("database not found");
$sql_loc="SELECT DISTINCT city FROM  location";
$result_loc=mysqli_query($con,$sql_loc);

/*$res = mysqli_fetch_array($result);
$sql="SELECT * FROM  location";
$result=mysqli_query($con,$sql);*/
 while($res=mysqli_fetch_array($result_loc))
                    {
						
            echo '<span><h1 >'.$res['city'].'</h1></span>';
			echo '<div class="separator"></div>';
            echo '<div class="row">';
				$sql="SELECT * FROM  location where city='$res[city]' ";
				$result=mysqli_query($con,$sql);
				while($r=mysqli_fetch_array($result))
                    {
						echo '<div class="col-md-3 col-xs-12">
								<div class="single-team">
									<div class="team-im">
									<img  src="admin/query/'.$r['photo'].'"  alt="No Image" style="width:100%; height:200px"/>
									</div>
									<div class="team-info">
										 <h3>'.$r['city'].'</h3>
										<p>'.$r['address'].'</p>
									</div>
									<div class="separator"></div>
								</div>
							 </div>';
					}
            echo '</div>';
            
             }?>

        </div>
    </div>
    <!--Team Area End -->

    <!--Call to Action Start-->
    <div class="section-padding about-col-to light-yellow-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <div class="col-to-text">
                        <h2>Don't Miss Out Our Offers</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-5 text-right">
                    <a href="plans.php" class="colto-btn">View Details <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--Call to Action End-->
    <!--    Footer Start-->
    <?php
	    include('footer.php')
    ?>
    <!-- Footer end-->


    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Mobile Menu JS -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- Owl Carousel JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS -->
    <script src="assets/js/jquery.scrollUp.js"></script>
    <!-- WOW JS -->
    <script src="assets/js/wow-1.3.0.min.js"></script>
    <!-- countdown JS -->
    <script src="assets/js/countdown.js"></script>
    <!-- Waypoints JS -->
    <script src="assets/js/waypoints.js"></script>
    <!-- ajax-mail JS -->
    <script src="assets/js/ajax-mail.js"></script>
    <!-- Active JS -->
    <script src="assets/js/active.js"></script>
</body>

</html>