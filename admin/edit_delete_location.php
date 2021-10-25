<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Location</title>
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
				<li class="active">edit location</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><span class="fa fa-edit"> Edit Locations</span></h1>
			</div>
		</div><!--/.row-->

				<div class="panel panel-default panel-body">
                		<!-- confirmation messages -->
                		<?php
							if(isset($_GET['res_id'])){
							if($_REQUEST['res_id']==1)
							{
								?>
						<div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Location Updated Successfully </strong> 
                    </div>
                    <?php }
					
						else if($_REQUEST['res_id']==2)
						{
							?>
                          <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Location Deleted Successfully </strong> 
                    </div>
                    <?php  	
						}
						
						else if($_REQUEST['res_id']==3)
						{
							?>
                            <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Server Error! Please try again after sometime </strong> 
                    </div>
                    <?php  
						}
					} ?> <!-- confirmation messages ends -->
							
	
                	 <div class="row">
                        <div class="col-lg-12">
                             <h3>Search by any keyword</h3>
                             <input type="text" class="form-control" placeholder="Search By Anything..." id="search_field">
                        </div>
                    </div>
				
                
                    <table  id="myTable" class="table table-striped " >
                     <thead>
                            <tr  class"text-center">
                              <th><center>#</center></th>
                              <th><center>City</center></th>
                             <th><center>Address</center></th>
                             <th><center>Photo</center></th>
                             <th colspan="2"><center>Actions</center></th>
                             <th></th>
                            </tr>
                    </thead>
                    <tr id="row_heading" align="center">
                    
                    
                    <?php
                    $con=mysqli_connect("localhost","root") or die ("can not connect");
                    mysqli_select_db($con,"altoffice") or die ("database not found");
                    
                    $sql="SELECT * FROM location order by city";
                    $result=mysqli_query($con,$sql);
					$path="query/";
                    //$slno=1;
					$sl_no=1;
                    while($r=mysqli_fetch_array($result))
                    {
                    echo '<tr>';
                    echo '<td>'.$sl_no.'</td>';
                    echo '<td>'.$r['city'].'</td>';
                    echo '<td>'.$r['address'].'</td>';
					/*echo '<td><img  src=\'avatar.png\' class="img-rounded" alt="Image Not Loaded" width="80" height="80"/></td>';*/
					echo ("<td><img  src=\"query/$r[photo]\" class=\"img-rounded\" alt=\"No Image\" width=\"140\" height=\"100\"/></td>");
                    echo("<td> <a href=\"edit_location.php?id=$r[id]\"><i class=\"btn  btn-teal  btn-lg fa fa-edit\"></i></a></td>");
                    echo"<td> <a  data-toggle=\"modal\" href=\"#deleteModal$sl_no\"><i class=\"btn btn-delete  btn-lg fa fa-trash\"></i></a></td>";
					
					?>
                    <!-- //Delete Modal -->
					 <div class="modal fade" id="deleteModal<?php echo $sl_no; ?>" role="dialog">
						<div class="modal-dialog modal-sm">
						  <div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal">&times;</button>
							  <h4 class="modal-title">Confirm Delete?</h4>
							</div>
							<div class="modal-body">
							  <p>Are you sure to DELETE? </p>
							</div>
							<div class="modal-footer">
							  <a href="query/delete_location.php?id=<?php echo $r['id']?>&filename=<?php echo $r['photo']?>"> <button type="button" class="btn btn-default">Yes</button></a>
							  <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
							</div>
						  </div>
						</div>
					  </div>
                      <?php
               // Delete modal ends
					
                    echo '</tr>';
                    $sl_no++;
                    }
                    ?>
                    </table>
                    	
                         
    
				</div><!-- /.panel-->
			</div><!-- /.col-->
	
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
    
    <script>
		$('#search_field').on('keyup', function() {
  var value = $(this).val();
  var patt = new RegExp(value, "i");

  $('#myTable').find('tr').each(function() {
    if (!($(this).find('td').text().search(patt) >= 0)) {
      $(this).not('.myHead').hide();
    }
    if (($(this).find('td').text().search(patt) >= 0)) {
      $(this).show();
    }

  });

 
});
	</script>

</body>
</html>
