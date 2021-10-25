<?php
ob_start();
$con=mysqli_connect("localhost","root") or die ("can not connect");
mysqli_select_db($con,"altoffice") or die ("database not found");

$id=$_REQUEST["id"];
$city=$_REQUEST["city"];
$address=$_REQUEST["address"];
$target_dir = "uploaded_image/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$FileType = pathinfo($target_file,PATHINFO_EXTENSION);


if($target_file== "uploaded_image/")
{
	//header("location:write_notice_field_empty.php");
	$query= "UPDATE location set city='$city', address='$address' where id='$id'";
		if (mysqli_query($con, $query)) {
			header("location:../edit_delete_location.php?res_id=1");
   		}
}
else
{
	
	if (file_exists($target_file))
	 {
		header("location:../file_already_exist_add_location.php");
		//echo "Sorry, file already exists.";
	   // $uploadOk = 0;
   
	}
	else if ($_FILES["photo"]["size"] > 1051000)
	 {
		header("location:../file_too_large_add_location.php");
	
		   echo "Sorry, your file is too large.";
		//$uploadOk = 0;
	}
	else
	{
		 if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) 
	  	{

			$sqlquery = "UPDATE location set city='$city', address='$address', photo='$target_file' where id='$id'";
	
			if (mysqli_query($con, $sqlquery)) {
				//echo "success";
				header("location:../edit_delete_location.php?res_id=1");
   
			}
		 else
  			{
				echo mysqli_error($con);
	 			 //header("location:write_notice_error.php");
   				 //echo "Error: " . $sqlcommand1 . "<br>" . mysqli_error($con);
			}

    	}
	 	else
		 {
       		 header("location:../edit_delete_location.php?res_id=3");
    	 }
	}
	
}

mysqli_close($con);
?>