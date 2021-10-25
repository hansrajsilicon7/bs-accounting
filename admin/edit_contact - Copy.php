<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Contact</title>
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
				<div class="profile-usertitle-name"><?php echo $_SESSION["username"]; ?></div>
			</div>
			<div class="clear"></div>
		</div	>
		<div class="divider"></div>
		
		<ul class="nav menu">
			<li class=""><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-map-marker">&nbsp;</em> Location <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-arrow-right"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="add_location.php">
						<span class="fa fa-plus">&nbsp;</span> Add Location
					</a></li>
					<li><a class="" href="edit_delete_location.php">
						<span class="fa fa-edit">&nbsp;</span> Edit / Delete
					</a></li>
				</ul>
			</li>
			<li class="active"><a href="edit_contact.php"><em class="fa fa-book">&nbsp;</em> Contact Details</a></li>
			<!--<li><a href="panels.html"><em class="fa fa-support">&nbsp;</em> Support</a></li>-->
			
			<li><a href="/index.php" data-toggle="modal" data-target="#myModal"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
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
          <a href="index.php"> <button type="button" class="btn btn-default">Yes</button></a>
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
				<li class="active">Contact Details</li>
			</ol>
		</div><!--/.row-->

	<!-- Contact -Details -->
				<div class="panel panel-default">
					<div class="panel-heading">
						Your Company Contact
                     </div>
					<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-phone color-teal"></em>
							<div class="large-contact">	Phone No</div>
							<div class="text-muted">+91 9871489998</div>
                            <div><button type="button" id="edit_phone" class="btn btn-primary button-edit-contact"><i class="fa fa-edit"></i>Edit</button></div>
                         
                           <!-- <div id="divPhone" class=" row bg-blue" style="height:200px;display:none;">
                            	<div class="col-xs-12 col-md-6 col-sm-12 col-lg-6 no-padding">
                           			<button type="button"  class="btn btn-primary button-edit-contact bg-blue" ><i class="fa fa-edit"></i>Edit</button>
                            	</div>
                            </div>-->
                        
                            
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-globe color-teal"></em>
                        <div class="large-contact">Address</div>
							<div class="text-muted"><span style="word-wrap: break-word;">A-584-585-586, Sushant Lok I Gurgaon (Haryana) 122002 Near:-IFFCO Chowk Metro Station</span></div>
                            <div><button type="submit" class="btn btn-primary button-edit-contact"><i class="fa fa-edit"></i> Edit</button></div>
							
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-envelope color-teal"></em>
							<div class="large-contact">Email Id</div>
							<div class="text-muted">info@altoffice.com</div>
                            <div><button type="submit" class="btn btn-primary button-edit-contact"><i class="fa fa-edit"></i> Edit</button></div>
						</div>
					</div>
				</div>
			</div>
		</div>
        </div>
        <!-- contact -details -->	
        <?php  include('footer.php'); ?>		
	</div><!--/.main-->
	
		<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script>
$(document).ready(function(){
	
	$("#divPhone").hide();
	$("#divAddress").hide();
	$("#divEmail").hide();
	
    $("#edit_phone").click(function(){
        $("#divPhone").slideToggle();
    });
	 $("#edit_address").click(function(){
        $("#divAddress").slideToggle();
    });
	 $("#edit_email").click(function(){
        $("#divEmail").slideToggle();
        
    });
});
</script>
	
</body>
</html>
