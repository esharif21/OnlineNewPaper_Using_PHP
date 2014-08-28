<?php
session_start();
$_SESSION[ccc];
?>
	<br /><fieldset><legend>Hit Counts</legend><br />Todays Online Readers 
	<?php
		echo "<h3>";
		include("gethits.php");
		echo " Person(s)."."</h3>";
	?></fieldset><br />

	<fieldset><legend><b>Give Opinion</b></legend><br />
	<?php echo $str="Will Bangladesh win the one day series against WI?"; ?><br>
	<form name=opinion  method="post" action="userFeedbackForm.php" style="font-size:15px" >
	<input type="hidden" name="speech" value="Will Bangladesh win the one day series against WI?" />
	<input type="radio" value="yes" id=openion name=openion />Yes
	<input type="radio" id=openion value="no" name=openion /> No
	<input type="radio" id=openion value="none" name=openion />None<br /><br />	
	<input type="submit" name="submit" value="Submit" />
	</form>
</fieldset><br />
<?php
	include("pollresult.php");
?>

<?php
	include("archiveatsidebar.php");
?>