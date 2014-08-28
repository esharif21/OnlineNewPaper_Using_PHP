<div id="sidebar2">
					<div class="poll"></div>
	
<fieldset><legend>Hit Counts</legend><br />Todays Online Readers 
	<?php
		echo "<h3>";
		include("../../gethits.php");
		echo " Person(s)."."</h3>";
	?></fieldset><br /><br />
	<fieldset><legend><b>Give Opinion</b></legend><br />
	<?php echo $str="Will Bangladesh win the one day series against WI?"; ?><br>
	<form name=opinion  method="post" action="../../../news/userFeedbackForm.php" style="font-size:15px" >
	<input type="hidden" name="speech" value="Will Bangladesh win the one day series against WI?" />
	<input type="radio" value="yes" id=openion name=openion />Yes
	<input type="radio" id=openion value="no" name=openion /> No
	<input type="radio" id=openion value="none" name=openion />None<br /><br />	
	<input type="submit" name="submit" value="Submit" />
	</form>
</fieldset><br /><br />
<?php //include("retriveCount.php"); ?>
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
	echo "Online Users have polled today:<br>Yes: $Yes %<br>No: $No %<br>None: $None %"; 
?></fieldset>

			</div>
		</div>
		<div id="footer">
		<center><font color="#660000" style="font-weight:bolder">All &copy; Rights Reserved By <a href="../aboutus.php">084020 and 084021</a> | <a href="http://www.duetcs.org" target="_blank">Computer Science & Engineering(CSE)</a> <br /> <a href="http://www.duet.ac.bd" target="_blank">Dhaka University of Engineering & Technology, Gazipur</a>.</font></center>
		</div>
	</div>
</body>
</html>