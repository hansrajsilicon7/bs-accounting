<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>B.S Accounting & Taxation Solution- Edit Contact</title>
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
				<a class="navbar-brand" href="#"><span>B.S Accounting & Taxation Solution</span> Admin</a>
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
			<li ><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
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
			<li class="active"><a href="edit_contact.php"><em class="fa fa-book">&nbsp;</em> Contact Details</a></li>
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
				<li class="active">contact details</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Contact</h1>
			</div>
		</div><!--/.row-->

				<!-- Panel Contact Details -->
				<div class="panel panel-default">
					<div class="panel-heading">
						Edit Your Contact
					</div>
                    
                    <!-- confirmation messages -->
                		<?php
							if(isset($_GET['res_id'])){
							if($_REQUEST['res_id']==1)
							{
								?>
						<div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Phone No Updated Successfully </strong> 
                    </div>
                    <?php }
					
						else if($_REQUEST['res_id']==2)
						{
							?>
                          <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Address Updated Successfully </strong> 
                    </div>
                    <?php  	
						}
						
						else if($_REQUEST['res_id']==3)
						{
							?>
                            <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Email Id Updated Successfully  </strong> 
                    </div>
                    <?php  
						}
					} ?> <!-- confirmation messages ends -->
                    
                    <!-- php  to render data-->
						<?php
                            $con=mysqli_connect("localhost","root") or die ("can not connect");
                            mysqli_select_db($con,"altoffice") or die ("database not found");
                            $sql="SELECT * FROM  company_contact WHERE id=1";
                            $result=mysqli_query($con,$sql);
                            $r = mysqli_fetch_array($result);
                        ?>
                        
                      <!-- end php -->
					<div class="panel panel-container content-padding">
                    
                     <table  id="myTable" class="table table-striped " >

                    <tr id="row_heading" align="center">
                    	<form role="form"  method="post" action="query/update_company_contact.php?executeid=1"  enctype="multipart/form-data">
                    	<td><i class="fa fa-3x fa-phone color-teal"></i></td>
                        <td><input type="text" class="form-control" name="phone"  required="" value="<?php echo $r['phone_no'] ?>"></td>
                        <td><button type="button" class="btn btn-primary" name="submit" data-toggle="modal" data-target="#confirmPh" >Edit</button></td>
                      	<!--Confirmation Phone Modal -->
                                      <div class="modal fade" id="confirmPh" role="dialog">
                                        <div class="modal-dialog modal-sm">
                                          <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">Confirm</h4>
                                            </div>
                                            <div class="modal-body">
                                              <p>Are You Sure? </p>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="submit" class="btn btn-default" name="submit">Yes</button>
                                              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
               				 <!-- Confirmation Phone modal ends -->
                        </form>
                    </tr>
                    <tr id="row_heading" align="center">
                    	<form role="form"  method="post" action="query/update_company_contact.php?executeid=2"  enctype="multipart/form-data">
                    	<td><i class="fa fa-3x fa-globe color-teal"></i></td>
                        <td><textarea class="form-control" required="" rows="4" name="address"><?php echo $r['address']; ?></textarea></td>
                        <td><button type="button" class="btn btn-primary" name="submit" data-toggle="modal" data-target="#confirmAd" >Edit</button></td>
                         <!--Confirmation Address Modal -->
                                      <div class="modal fade" id="confirmAd" role="dialog">
                                        <div class="modal-dialog modal-sm">
                                          <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">Confirm</h4>
                                            </div>
                                            <div class="modal-body">
                                              <p>Are You Sure? </p>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="submit" class="btn btn-default" name="submit" >Yes</button>
                                              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
               				 <!-- Confirmation Address modal ends -->
                        </form>
                    </tr>
                    <tr id="row_heading" align="center">
                    	<form role="form"  method="post" action="query/update_company_contact.php?executeid=3"  enctype="multipart/form-data">
                    	<td><i class="fa fa-3x fa-envelope color-teal"></i></td>
                        <td><input type="text" class="form-control" name="email" required="" value="<?php echo $r['email_id']; mysqli_close($con); ?>"></td>
                        <td><button type="button" class="btn btn-primary" name="submit" data-toggle="modal" data-target="#confirmEm" >Edit</button></td>
                       	 <!--Confirmation Email Modal -->
                                      <div class="modal fade" id="confirmEm" role="dialog">
                                        <div class="modal-dialog modal-sm">
                                          <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">Confirm</h4>
                                            </div>
                                            <div class="modal-body">
                                              <p>Are You Sure? </p>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="submit" class="btn btn-default" name="submit" >Yes</button>
                                              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
               				 <!-- Confirmation Email modal ends -->     
                    </form>
                    </tr>
                    </table>
     
					</div><!-- panel ends -->
				</div> <!-- Edit Contact Area -->
            
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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script>
$(document).ready(function(){
	

    $("#edit_phone").click(function(){
        $("#edit-contact-area").slideToggle();
		$("#editPhone").show();
		$("#editAddress").hide();
		$("#editEmail").hide();
    });
	 $("#edit_address").click(function(){
        $("#edit-contact-area").slideToggle();
		$("#editAddress").show();
		$("#editPhone").hide();
		$("#editEmail").hide();
    });
	 $("#edit_email").click(function(){
        $("#edit-contact-area").slideToggle();
		$("#editEmail").show();
		$("#editAddress").hide();
		$("#editPhone").hide();
        
    });
});
</script>
		
</body>
</html>