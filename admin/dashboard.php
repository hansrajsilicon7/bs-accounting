<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alt Office- Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    
    <style>
		.navbar-right
		{
			margin-right:10px;
		}
	</style>
</head>
<body>
<?php

session_start();

if($_SESSION["username"]==null)
{
	header("location:index.php");
}

?>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Alt Office</span> Admin</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
    
    <!-- sidebar -->

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="avatar.png" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION["username"];  ?></div>
			</div>
			<div class="clear"></div>
		</div	>
		<div class="divider"></div>
		
		<ul class="nav menu">
			<li class="active"><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-map-marker">&nbsp;</em> Location <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-arrow-right"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="add_location.php">
						<span class="fa fa-plus">&nbsp;</span> Add 
					</a></li>
					<li><a class="" href="edit_delete_location.php">
						<span class="fa fa-edit">&nbsp;</span> Edit / Delete
					</a></li>
				</ul>
			</li>
			<li><a href="edit_contact.php"><em class="fa fa-book">&nbsp;</em> Contact Details</a></li>
			<!--<li><a href="panels.html"><em class="fa fa-support">&nbsp;</em> Support</a></li>-->
			
			<li><a href="#" data-toggle="modal" data-target="#myModal"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div>
    
     <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Logout</h4>
        </div>
        <div class="modal-body">
          <p>Do You Really Want to Logout? </p>
        </div>
        <div class="modal-footer">
          <a href="query/logout.php"> <button type="button" class="btn btn-default">Yes</button></a>
          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>
                <!-- modal ends -->
	<!--/.sidebar-->
    
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-4 col-md-4 col-sm-4 col-lg-4 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-map-marker color-teal"></em>
							<div class="large">12</div>
							<div class="text-muted">Locations</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4 col-md-4 col-sm-4 col-lg-4 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-building color-teal"></em>
							<div class="large">52</div>
							<div class="text-muted">Offices</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4 col-md-4 col-sm-4 col-lg-4 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-teal"></em>
							<div class="large">24</div>
							<div class="text-muted">Queries</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
        
		<!--<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>New Orders</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent">92%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Comments</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent">65%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>New Users</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">56%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Visitors</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span></div>
					</div>
				</div>
			</div>
		</div>--><!--/.row-->

				<!-- Contact -Details -->
				<div class="panel panel-default">
					<div class="panel-heading">
						Your Contact Details
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
					<div class="panel panel-container">
                        <div class="row">
                            <div class="col-xs-12 col-md-4 col-sm-4 col-lg-4 no-padding">
                                <div class="panel panel-teal panel-widget">
                                    <div class="row no-padding"><em class="fa fa-xl fa-phone color-teal"></em>
                                        <div class="large-contact">	Phone No</div>
                                        <div class="text-muted content-padding"><?php echo $r['phone_no'] ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4 col-sm-4 col-lg-4 no-padding">
                                <div class="panel panel-blue panel-widget ">
                                    <div class="row no-padding"><em class="fa fa-xl fa-globe color-teal"></em>
                                    <div class="large-contact">Address</div>
                                        <div class="text-muted content-padding"><?php echo $r['address']; ?></div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4 col-sm-4 col-lg-4 no-padding">
                                <div class="panel panel-orange panel-widget">
                                    <div class="row no-padding"><em class="fa fa-xl fa-envelope color-teal"></em>
                                        <div class="large-contact">Email Id</div>
                                        <div class="text-muted content-padding"><?php echo $r['email_id']; mysqli_close($con); ?></div>
                                    </div>
                                </div>
                            </div>
			</div><!--/.row-->
		</div>
				</div>
			</div><!--/.col-->
			</div><!--/.col-->
		</div><!--/.row-->
        
        	
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>