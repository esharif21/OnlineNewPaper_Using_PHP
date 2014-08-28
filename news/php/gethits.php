<?php
$date=date("Y-m-d");
$con = mysql_connect("localhost","root","");
if (!$con)
	die('Could not connect: ' . mysql_error());
mysql_select_db("onlinenewsdb", $con);
$result = mysql_query("SELECT * FROM hitcounttable");
while($row = mysql_fetch_array($result))
	if($row['date']==$date)
	{
		echo $row['hits'];
		break;
	}
mysql_close($con);
?>