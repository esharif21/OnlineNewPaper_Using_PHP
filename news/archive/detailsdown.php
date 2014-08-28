<?php session_start();
?>
<div id="sidebar2">
					<div class="poll"></div>
	
<fieldset><legend>Hit Counts</legend><br />Todays Online Readers 
	<?php
		echo "<h3>";
		include("../gethits.php");
		echo " Person(s)."."</h3>";
	?></fieldset><br /><br />
	<fieldset><legend><b>Give Opinion</b></legend><br />
	<?php echo $str="Will Bangladesh win the one day series against WI?"; ?><br>
	<form name=opinion  method="post" action="../../news/userFeedbackForm.php" style="font-size:15px" >
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
?></fieldset><br />
<form name="registrationform" action="../../news/archive/index.php" method="post" onclick="<?php session_unregister('date');
?>">
						<fieldset>
							<legend>Read Old News</legend>
							<br /><label for=birthDate>Aspected Date</label>
							<ol>
								
									<select id=archiveDate name=year size="">
											  <option value="" selected >-Year-</option>
											  <option value="2009" >2009</option>
											  <option value="2010" >2010</option>
											  <option value="2011" >2011</option>
											  <option value="2012" >2012</option>
											  <option value="2013" >2013</option>
										</select>
										<select id=archiveDate name=month size="">
											  <option value="" selected >-Month-</option>
											  <option value="01" >Jan</option>
											  <option value="02" >Feb</option>
											  <option value="03" >Mer</option>
											  <option value="04" >Apr</option>				  
											  <option value="05" >May</option>
											  <option value="06" >Jun</option>				  
											  <option value="07" >Jul</option>
											  <option value="08" >Aug</option>				  
											  <option value="09" >Sep</option>
											  <option value="10" >Oct</option>				  
											  <option value="11" >Nov</option>
											  <option value="12" >Dec</option>				  
									</select>
									<select id=archiveDate name=day size="">
											  <option value="" selected >-Day-</option>
											  <option value="01" >1</option>
											  <option value="02" >2</option>
											  <option value="03" >3</option>
											  <option value="04" >4</option>				  
											  <option value="05" >5</option>
											  <option value="06" >6</option>				  
											  <option value="07" >7</option>
											  <option value="08" >8</option>				  
											  <option value="09" >9</option>
											  <option value="10" >10</option>				  
											  <option value="11" >11</option>
											  <option value="12" >12</option>
											  <option value="13" >13</option>
											  <option value="14" >14</option>				  
											  <option value="15" >15</option>
											  <option value="16" >16</option>
											  <option value="17" >17</option>
											  <option value="18" >18</option>				  
											  <option value="19" >19</option>
											  <option value="20" >20</option>
											  <option value="21" >21</option>
											  <option value="22" >22</option>				  
											  <option value="23" >23</option>
											  <option value="24" >24</option>
											  <option value="25" >25</option>
											  <option value="26" >26</option>				  
											  <option value="27" >27</option>
											  <option value="28" >28</option>
											  <option value="29" >29</option>
											  <option value="30" >30</option>				  
											  <option value="31" >31</option>						  				  
									</select>
							</ol>
							<button type=submit>Enter</button>
						</fieldset>
					</form>

			</div>
		</div>
		<div id="footer">
		<center><font color="#660000" style="font-weight:bolder">All &copy; Rights Reserved By <a href="../aboutus.php">084020 and 084021</a> | <a href="http://www.duetcs.org" target="_blank">Computer Science & Engineering(CSE)</a> <br /> <a href="http://www.duet.ac.bd" target="_blank">Dhaka University of Engineering & Technology, Gazipur</a>.</font></center>
		</div>
	</div>
</body>
</html>