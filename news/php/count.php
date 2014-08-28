<?php
if($_SESSION['counted'])
{
echo $dt=date("Y-m-d");
$ht=1;
$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("onlineNewsDB", $con);
	$sql="INSERT INTO hitcountertable
	(id,date,hit)
	VALUES
	('','$dt','$ht')";
	if (!mysql_query($sql,$con))
	{
		die('Error: ' . mysql_error());
	}
	echo "<br>Success!";
	//header("Location:../insertnews.php");

session_destroy();

}
?>