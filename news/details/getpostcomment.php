<?php 
	session_start();
	
	if($_SESSION['uLogged_in']!=7)
	   echo "<b>To post comment <a href=\"../logIn.php\" onclick=\"<?php $_SESSION[backthatpage]=8; ?>\">Log In</a> first</b><br /><br />";
	else if($_SESSION['uLogged_in']==7)
		include("commentinterface.php"); 
	echo "<br><br>";
	$date=date("Y-m-d");
	$className::getcomment($date);
?>							