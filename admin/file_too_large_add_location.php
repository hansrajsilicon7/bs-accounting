<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Location</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
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
				<div class="profile-usertitle-name"><?php echo $_SESSION["username"];  ?></div>
			</div>
			<div class="clear"></div>
		</div	>
		<div class="divider"></div>
		
		<ul class="nav menu">
			<li class=""><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li class="parent active "><a data-toggle="collapse" href="#sub-item-1">
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
			<li><a href="edit_contact.php"><em class="fa fa-book">&nbsp;</em> Contact Details</a></li>
			<!--<li><a href="panels.html"><em class="fa fa-support">&nbsp;</em> Support</a></li>-->
			
			<li><a href="" data-toggle="modal" data-target="#myModal"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
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
				<li class="active">Location</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><span class="fa fa-plus"> Add Location</span></h1>
			</div>
		</div><!--/.row-->

	
    	<!-- php  call to submit form -->
     	<?php 
		
		?>
        
        <!-- end php -->
				
				<div class="panel panel-default">
					<div class="panel-body">
                    <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>File Too Large. Image should no be more than 1 MB </strong> 
                    </div>
						<div class="col-md-6">
							<form role="form"  method="post" action="query/insert_location.php"  enctype="multipart/form-data"  onsubmit="return check();">
								<div class="form-group">
									<label>City</label>
									<input type="text" class="form-control" name="city"  required="" placeholder="Gurugram">
								</div>
                                <div class="form-group">
									<label>Address</label>
									<textarea class="form-control" required="" rows="4" name="address" placeholder="Full Address"></textarea>
								</div>
								<div class="form-group upload-btn-wrapper">
									<label>Upload Photo</label>
									<input type="file" required="" name="photo" class="color-orange"/><br>
                                    <span class="text-danger">*Image Size should not be larger than 1 MB </span
								></div>

									<button type="button" class="btn btn-primary" name="submit" data-toggle="modal" data-target="#confirm" >Submit</button>
									<button type="reset" class="btn btn-warning">Reset </button>
                         <!--Confirmation Modal -->
                                      <div class="modal fade" id="confirm" role="dialog">
                                        <div class="modal-dialog modal-sm">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">Confirm</h4>
                                            </div>
                                            <div class="modal-body">
                                              <p>>Are You Sure? </p>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="submit" class="btn btn-default" name="submit" >Yes</button>
                                              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                <!-- modal ends -->
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
		</div><!-- /.row -->
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
    
        <!-- check image size -->
    <script type="text/javascript">
    function check(){
      var imgpath=document.getElementById('imgfile');
      if (!imgpath.value==""){
        var img=imgpath.files[0].size;
        var imgsize=img/1024; 
		if(imgsize>1026.36)
		{
       	 alert('Image size should not be more than 1 MB');
		
		}
		
		else
		{
			window.location="insert_location.php";
			return true;
		}
		 return false;
      }
    }
</script>
	
</body>
</html>
