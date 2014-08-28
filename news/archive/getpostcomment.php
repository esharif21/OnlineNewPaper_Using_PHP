<?php 
	session_start();
	include("../../../news/classobj.php");
	if($_SESSION['uLogged_in']!=7)
		echo "<b>To post comment <a href=\"../logIn.php\">Log In</a> first</b><br /><br />";
	else if($_SESSION['uLogged_in']==7)
		include("commentinterface.php"); 
	echo "<br><br>";
	$date=$_SESSION['date'];
	$className::getcomment($date);
?>							