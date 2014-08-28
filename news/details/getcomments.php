<?php
	session_start();
	include("../classobj.php");//class file included here
	//$date=date("Y-m-d");
	$className::getcomment($_SESSION['date']);
?>