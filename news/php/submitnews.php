<?php
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	$_POST[title]=mysql_real_escape_string($_POST[title]);
	$_POST[news]=mysql_real_escape_string($_POST[news]);
	//$insert_data = mysql_real_escape_string($_POST[news]);
	mysql_select_db("onlineNewsDB", $con);
	$sql="INSERT INTO  newsarchives
	(date,title,journalist,spot,news)
	VALUES
	('$_POST[date]','$_POST[title]','$_POST[name]','$_POST[spot]','$_POST[news]')";
	if (!mysql_query($sql,$con))
	{
		die('Error: ' . mysql_error());echo "<script>alert(\"Go back and fix the problem.\");history.back();</script>";
	}
	echo "<script>alert(\"News has been entered Successfully.\");history.back();</script>";
?>
