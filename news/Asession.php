<?php
	session_start();
	session_unregister('ALogged_in');	
	session_unregister('AName');

	//session_destroy();
	header("location: index.php");  
?>
