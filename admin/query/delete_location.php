<?php

$con=mysqli_connect("localhost","root") or die ("can not connect");
mysqli_select_db($con,"altoffice") or die ("database not found");

$id=$_REQUEST['id'];
$filename=$_REQUEST['filename'];

unlink($filename);

$sqlcommand = "delete from location where id='$id'";

if (mysqli_query($con, $sqlcommand))
 {
	header("location:../edit_delete_location.php?res_id=2");
   
}
 else
  {
  header("location:../edit_delete_location.php?res_id=3");
}
  


mysqli_close($con);
?>