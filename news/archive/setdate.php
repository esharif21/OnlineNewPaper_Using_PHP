<?php
session_start();
if($_POST[year]=="" || $_POST[month]=="" || $_POST[day]=="")
	echo "<script>alert(\"ERROR: You should select a date.\");history.back();</script>";
else 
	{
		$date=$_POST[year]."-".$_POST[month]."-".$_POST[day];
		$_SESSION['date']=$date;
	}	
	
$todaydate=date("Y-m-d");
if($date>$todaydate)
{
	echo "<script>alert(\"ERROR: The Date You've Selected Is Not In Calander Yet!\");history.back();</script>";
}
else if($date==$todaydate)
{
	echo "<script>alert(\"---Oops! You've Selected Today's Date. Just Click The Link Home Or Today's Paper In Order To Read---\");history.back();</script>";
}
header("Location:../archive/index.php");
				
?>