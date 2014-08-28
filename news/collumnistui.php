<?php
session_start();
$_SESSION['hit'];
$_SESSION['news'];
	if($_SESSION['CLogged_in']!=7)
	{	
		echo "<script>history.back();</script>";
	}
$_SESSION['speech']="Bangladesh will win the one day series against WI, Do U think so?";
include("hitexecute.php");
?>
<?php include("indexUp.php"); ?>
	<div id="allnews">
		
		<center> <h4> Collumnist Interface</h4></center>
		<form action="php/submitnews.php" method="post" enctype="multipart/form-data">
	<ul><fieldset style="width:650px"><legend>NEWS SUBMITION</legend>
	<table class="lebelcol">
	    <td><br /><br />
		Date:<br />	
		Title:<br />
		Journalist Name:<br  />
		Occurence Spot: <br />
		Description Details: <br /><br /><br />
		
	    </td>	
	</table>
	
	<table class="fieldcol">
	    <td><br /><br />
		<input type="text" name="date" /> YYYY-MM-DD<br />
		<input type="text" name="title" size="" /><br />
		<input type="text" name="name" value="<?php echo $_SESSION[CName]; ?>" disabled="disabled"/><br />
		<input type="text" name="spot" /><br />
		<textarea cols="25" rows="4" name="news"></textarea><br />
		
		 </td>
	</table><br><br><br><br>
	</fieldset></ul>
	<input type="submit" name="updateButton" value="Insert" onClick="return Update();"/>
	<input type="reset" />
	
	</form>


<?php include("indexDown.php"); ?>
