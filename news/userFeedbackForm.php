<center> 
<?php 
	$str=$_POST['speech'];
	if($_POST['openion']=="")
	{
		echo "<script>alert(\"ERROR: You should choice an option.\");history.back();</script>";
		//return;
	}
	$con = mysql_connect("localhost","root","");
	if (!$con)
  	{
  		die('Could not connect: ' . mysql_error());
  	}
	mysql_select_db("onlinenewsdb", $con);
	$sql="INSERT INTO userfeedbacktable
	(speech, feedback)
	VALUES
	('$_POST[speech]','$_POST[openion]')";
	if (!mysql_query($sql,$con))
  	{
  		die('Error: ' . mysql_error());echo "<script>alert(\"Go back to fix the problem.\");history.back();</script>";
	}
	echo "<script>alert(\"Polled successfully.\");history.back();</script>";
?>