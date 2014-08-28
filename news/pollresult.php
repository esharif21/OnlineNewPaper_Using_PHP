<fieldset><legend>Poll Result</legend><br />
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
		if($row['speech']==$str)
  		{
			if($row['feedback']=="yes")
				$countYes+=1;
			else if($row['feedback']=="no")
				$countNo+=1;
			else if($row['feedback']=="none")
				$countNone+=1;
			$total+=1;
		}			
	}
	$Yes=round($countYes*100/$total,2);
	$No=round($countNo*100/$total,2);
	$None=round($countNone*100/$total,2);
	
	$_SESSION[yes]=$Yes;
	$_SESSION[no]=$No;
	$_SESSION[none]=$None;
	echo "Online Users have polled today:<br>";
	
	echo "<br>Yes: ($countYes) $Yes %<br><div class=\"yes\"></div><br>No: ($countNo) $No %<br><div class=\"no\"></div><br>None: ($countNone) $None %<br><div class=\"none\"></div><br><b>Total: $total Person(s).</b><br>";

		
	 
?></fieldset><br />