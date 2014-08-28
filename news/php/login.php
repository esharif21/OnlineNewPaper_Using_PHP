<?php
session_start();
//if($_SESSION['logged_in'] == true)
	//			header("Location:./adminform.php");
	//echo $_POST['name'], $_POST['password'], $_POST['loginType'];
//$_SESSION['uLogged_in'];

$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("onlinenewsdb", $con);
	$result = mysql_query("SELECT * FROM registrationtable");
	while($row = mysql_fetch_array($result))
  		{
			$_SESSION['regType']=$_POST['loginType'];
			if(($_POST['name']==$row['name'])&&($_POST['password']==$row['password']))
  			{	
				if($_POST['loginType']=="Admin")
				{
					$_SESSION['ALogged_in']=7;
					$_SESSION['AName']=$_POST['name'];
					header("Location:../adminui.php");
				}
				else if(($_POST['loginType']==$row['registryType']) && ($row['registryType']=="Collumnist"))
				{
					$_SESSION['CLogged_in']=7;
					$_SESSION['CName']=$_POST['name'];
					header("Location:../collumnistui.php");
				}
				else if(($_POST['loginType']==$row['registryType']) && ($row['registryType']=="User/ Guest"))
				{
					if(($row['name']=$_POST['name']) && ($row['password']==$_POST['password']))
					{ 
						$_SESSION['uLogged_in']=7;
						$_SESSION['UName']=$_POST['name'];
						if($_SESSION[fromindex]==88)
						{
							session_unregister('fromindex');
							header("Location:../index.php");
						}
						else if(isset($_SESSION[path]))
						{
							session_unregister('backthatpage');
							$str=$_SESSION[path];
							session_unregister('path');
							header($str);
							/*echo "<script>alert(\"You've Logged As User/ Guest.\");history.back();</script>";*/
						}
					}
					//header("Location:../details/fh.php");
				}
			}
		}
		echo "<script>alert(\"Wrong: Name Or Password You've Entered!!, Try Again.\");history.back();</script>";
?>