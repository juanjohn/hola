<?php
include "../signup/connect.php";
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
	{
		$user_id=$_SESSION['user_id'];
		$query="SELECT `username` FROM `logindata` WHERE `id`='$user_id'";
		$query_run=mysql_query("$query");
		$username=mysql_result($query_run,0,'username');
		echo "you are logged in! ".$username."<br/>";
		echo "<input type=\"button\" value=\"Logout\" onClick=\"location.href='../login/logout.php'\" />";
	}
?>