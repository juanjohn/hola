<?php
$username=0;$password=0;
require "../signup/connect.php";
session_start();
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
	{
		$user_id=$_SESSION['user_id'];
		$query="SELECT `username`,`password` FROM `logindata` WHERE `id`='$user_id'";
		$query_run=mysql_query($query);
		$result_array=mysql_fetch_assoc($query_run);
		include "../loggedin/loggedin.php";
	}
else
{

	$username=$_POST["username"];
	$password=$_POST["password"];
	$hashpassword=md5($password);
	$query="SELECT `id` FROM `logindata` WHERE `username`='$username' AND `password`='$hashpassword'";
	$query_run=mysql_query($query);
	$numrows=mysql_num_rows($query_run);
	if($numrows==1)
	{
		$user_id=mysql_result($query_run,"0","id");
		$_SESSION['user_id']=$user_id;
		include "../loggedin/loggedin.php";
	}
	else
	{
		echo "incorrect uname or password";
	}
}
?>