<?php
	session_start();
	session_unregister('uLogged_in');
	session_unregister('UName');
	session_unregister('ALogged_in');
	session_unregister('CLogged_in');
	$_SESSION['reload']=8;
	echo "<script>alert(\"You've Loged Out!!\");history.back();</script>";

?>
