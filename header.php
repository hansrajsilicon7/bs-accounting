<?php
$con=mysqli_connect("localhost","root") or die ("can not connect");
mysqli_select_db($con,"altoffice") or die ("database not found");
$sql="SELECT * FROM  company_contact WHERE id=1";
$result=mysqli_query($con,$sql);
$r = mysqli_fetch_array($result);
?>
<script type="text/javascript" src="embed.js"></script>
<header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8">
                        <!-- header to info -->
                        <div class="header-info">
                            <i class="fa fa-phone"></i> <a href="tel:01745208208"><?php echo $r['phone_no'] ?> </a>
                            <i class="fa fa-envelope"></i> <a href="mailto:support@altoffice.com"><?php echo $r['email_id'];mysqli_close($con); ?></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4">
                        <div class="header-social text-right">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- header to info -->
                    </div>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="logo">
                            <a href="index.php"><h2 align="center">B.S Accounting & Taxation Solution</h2></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="/bs-accounting/index.php">Home</a></li>
                                       <!-- First Tier Drop Down -->
                                       <!-- <ul>
                                            <li><a href="gurgaon.php">Gurgaon</a></li>
                                            <li><a href="banagalore.php">Bangalore</a></li>
                                            <li><a href="pune.php">Pune</a>
                                            </li>
                                        </ul>-->
                                    </li>
                                    <li><a href="service.php">Services / Amenities</a></li>
                                    <li><a href="plans.php">Plans</a></li>
                                    <li><a href="location.php" >Locations<span></i></span></a>	 
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
