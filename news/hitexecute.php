<?php 
$date=date("Y-m-d");
$con = mysql_connect("localhost","root","");
if (!$con)
	die('Could not connect: ' . mysql_error());
mysql_select_db("onlinenewsdb", $con);
$result = mysql_query("SELECT * FROM hitcounttable");
while($row = mysql_fetch_array($result))
	if($row['date']==$date && $_SESSION['count']!=9)
	{
		$status=8;
		$hit=$row['hits'];
		$hit=$hit+1;
		$_SESSION['hit']=$hit;
			$con2 = mysql_connect("localhost","root","");
			if (!$con)
			{
				die('Could not connect: ' . mysql_error());
			}
			mysql_select_db("onlineNewsDB", $con);
			mysql_query("UPDATE onlinenewsdb.hitcounttable SET hits = '$hit' WHERE hitcounttable.date ='$date'");
			mysql_close($con2);
			$_SESSION['count']=9;
			break;
		mysql_close($con);
	}
	
if($status!=8 && $_SESSION['count']!=9)
{	$_SESSION['hit']=1;
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("onlineNewsDB", $con);
	$sql="INSERT INTO onlinenewsdb.hitcounttable
	(id,date,hits)
	VALUES('','$date','1')";
	if (!mysql_query($sql,$con))
	{
		echo mysql_error();
	}
	$status=8;
	$_SESSION['count']=9;
	mysql_close($con);
}
?>