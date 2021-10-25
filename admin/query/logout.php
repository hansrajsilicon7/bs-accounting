<?php

session_start();
session_destroy();
//$_SESSION["username"]=null;
//$_SESSION["passwrd"]=null;

header("location:../index.php");

?>