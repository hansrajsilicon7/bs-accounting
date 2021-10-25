<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>Contact | B.S Accounting & Taxation Solution</title>
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
                        <h2>Contact</h2>
                        <a href="#">home <i class="fa fa-angle-double-right"></i></a>
                        <a class="active" href="#"><span>Contact</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- php  to render data-->
						<?php
                            $con=mysqli_connect("localhost","root") or die ("can not connect");
                            mysqli_select_db($con,"altoffice") or die ("database not found");
                            $sql="SELECT * FROM  company_contact WHERE id=1";
                            $result=mysqli_query($con,$sql);
                            $r = mysqli_fetch_array($result);
                        ?>
                        
                      <!-- end php -->
                      
    <!--Contact Section Area Start-->
    <div class="section-padding our-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title text-center">
                    	 <i class=""><img src="icons/contact-heading.png" width="180" height="180"/></i>
                        <h2>Our Contacts </h2>
                        <p>We are available 24x7	</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="contact-info-area">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-contact">
                            <div class="icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <span>Address</span><?php echo $r['address']; ?>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-contact">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <span>Phone Number</span><?php echo $r['phone_no']; ?> 
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-contact">
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <span>Email</span><?php echo $r['email_id']; mysqli_close($con); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Contact Section Area End -->
    <!-- Contact form Start -->
    <div id="contact" class="section-padding contact-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-box">
                        <h4>Send us a Message</h4>
                        
                        <form id="contact-form" class="form-group" method="POST" action="sendmails.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" id="name" placeholder="First Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input name="lastname" type="text" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="email" name="email" id="email" placeholder="Email" required>
                                </div>
                                <div class="col-md-6">
                                    <input name="subject" id="subject" type="text" placeholder="Subject" required>
                                </div>
                            </div>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Write Your Message" required></textarea>
                            <button class="submit" type="submit">Send Massage</button>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Contact form Section End -->
    <!--Call to Action Start-->
    <div class="section-padding about-col-to light-yellow-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <div class="col-to-text">
                        <h2>Check Out our Plans</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-5 text-right">
                    <a href="plans.php" class="colto-btn">Let's Go <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--Call to Action End-->
    <!--    Footer Start-->
    <?php
	    include('footer.php')
    ?>
    <!-- Footer  End-->

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
    <!-- ajax-mail JS -->
    <script src="assets/js/ajax-mail.js"></script>
    <!-- Active JS -->
    <script src="assets/js/active.js"></script>
</body>

</html>