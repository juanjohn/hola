<?php
ob_start();
require "connect.php";
$username=$_POST["username"];
$password=md5($_POST["password"]);
$DOB=$_POST["DOB"];
$email_id=$_POST["email_id"];
$phonenum=$_POST["phonenum"];
$query="INSERT INTO `logindata` VALUES ('','$username','$password','$DOB','$email_id','$phonenum')";
mysql_query($query);
header("Location: ../homepage.php");
ob_end_clean();
?>