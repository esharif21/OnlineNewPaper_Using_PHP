<?php session_start();
?>
<?php
	$countYes=0;
	$countNo=0;
	$countNone=0;
	$total=0;
 	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("onlinenewsdb", $con);
	$result = mysql_query("SELECT * FROM userfeedbacktable");
	while($row = mysql_fetch_array($result))
  	{
  		if($row['speech']==$_SESSION['speech'])
  		{
			$countYes=$row['yes'];
			$countNo=$row['no'];
			$countnone=$row['none'];
			$total=$countYes+$countNo+$countNone;
		}			
	}
	$Yes=round($countYes*100/$total,2);
	$No=round($countNo*100/$total,2);
	$None=round($countNone*100/$total,2);
	echo "Online Users have polled today:<br>Yes: $Yes %<br>No: $No %<br>None: $None %";
?>