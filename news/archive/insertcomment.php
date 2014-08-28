<?php
	session_start();
	include("../../../../news/classobj.php");//class file included here
	//$_POST[comment]=mysql_real_escape_string($_POST[comment]);
	$date=date("Y-m-d");
	$className::postcomment($_SESSION[pagename], $_SESSION[box], $_SESSION[columnno], $date, $_POST[comment]);
?>