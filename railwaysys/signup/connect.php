<?php
	if(!@mysql_connect("localhost","root","") || !@mysql_select_db("reservationsystem"))
	{
		die("Error!The server is not communicating in a timely fashion.Sorry for the inconvienience");
	}
	else
	{
	}
?>