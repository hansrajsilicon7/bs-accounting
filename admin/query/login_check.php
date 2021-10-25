	<?php

ob_start();
$conn=mysqli_connect("localhost","root") or die ("can not connect");
mysqli_select_db($conn,"altoffice") or die ("database not found");
 
 $username=$_POST["username"];
 $password=$_POST["password"];

$sqlcommand = "SELECT * from user_login where id=1";
$query_result = mysqli_query($conn, $sqlcommand);
$row = mysqli_fetch_assoc($query_result);
if ($username==$row['username'] && $password==$row['password']) {
	session_start();
      $_SESSION["username"]=$username;
		 //on session creation
		$_SESSION['timestamp']=time();
    header("location:../dashboard.php");
		
    }
 else {
     header("location:../login_error.php");
}
		
 
//Attempt insert query execution
ob_end_clean();
?>
