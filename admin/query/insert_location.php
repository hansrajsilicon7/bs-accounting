<?php
ob_start();
$con=mysqli_connect("localhost","root") or die ("can not connect");
mysqli_select_db($con,"altoffice") or die ("database not found");

$id=0;
$sqlcommand = "SELECT max(id) as id1 FROM location";
$query_result = mysqli_query($con, $sqlcommand);

if (mysqli_num_rows($query_result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($query_result)) {
        $id=$row['id1']+1;
    }
} else {
    echo "0 results";
}

$city=ucwords($_REQUEST["city"]);
$address=$_REQUEST["address"];
$target_dir = "uploaded_image/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$FileType = pathinfo($target_file,PATHINFO_EXTENSION);


if($target_file== "uploaded_image/")
{
	//header("location:write_notice_field_empty.php");
	//echo 'A';
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

			$sqlcommand1 = "INSERT INTO location (id,city,address,photo) values ('$id','$city','$address','$target_file')";
	
			if (mysqli_query($con, $sqlcommand1)) {
				//echo "success";
				header("location:../add_location_success.php");
   
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
       		 echo " <h2>Sorry, there was an error uploading your file.</h2>";
    	 }
	}
	
}

mysqli_close($con);
?>