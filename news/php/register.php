<?php
	//echo $_POST[month],$_POST[day],$_POST[year],$_POST[gender],$_POST[birthDate],$_POST[address],$_POST[registryType],$_POST[email],$_POST[password];
	$date=$_POST[year]."-".$_POST[month]."-".$_POST[day];
	$_POST[day]=$date;
	
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("onlineNewsDB", $con);
	$sql="INSERT INTO registrationtable
	(name,fatherName,motherName,gender,mobileNo,birthDate,address,registryType,emailAddress,password)
	VALUES('$_POST[name]','$_POST[fatherName]','$_POST[motherName]','$_POST[gender]','$_POST[mobile]','$_POST[day]','$_POST[address]','$_POST[registryType]','$_POST[email]','$_POST[password]')";
	if (!mysql_query($sql,$con))
	{
		echo mysql_error();
		echo "<script>alert(\"Go back to fix the problem.\");history.back();</script>";
	}
	echo "<script>alert(\"Your info has been entered Successfully.\");history.back();</script>";
?>