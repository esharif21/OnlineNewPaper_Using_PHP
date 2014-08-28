<?php
echo 'your entered info is'." ".$_POST[id]." ".$_POST[mail]." ".$_POST[password];
if(!ereg("@yahoo.com", $_POST[mail], $strr))
{
	echo "<br>"."the email address $mail is not valid coz it is not a yahoo a/c";
	return;
}
else
	{
		$con = mysql_connect("localhost","root","");
		if (!$con)
  		{
  			die('Could not connect: ' . mysql_error());
  		}
		mysql_select_db("onlineNewsDB", $con);
		$sql="INSERT INTO userTable
		(id,email,password)
		VALUES
		('$_POST[id]','$_POST[mail]','$_POST[password]')";
		if (!mysql_query($sql,$con))
  		{
  			die('Error: ' . mysql_error());
  		}
		echo "<br>Success!";
	}
?>