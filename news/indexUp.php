<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>The Sun News: :Online Edition</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<style type="text/css">
		.yes{width: <?php echo $_SESSION[yes]."px"; ?>;height:20px;background-color:#006600; color:#FFFFFF;}
		.no{width: <?php echo $_SESSION[no]."px"; ?>;height:20px;background-color:#CC0000; color:#FFFFFF;}
		.none{width: <?php echo $_SESSION[none]."px"; ?>;height:20px;background-color:#663300; color:#FFFFFF;}
	</style>
	 <LINK REL=ICON href="graphics/icon.jpg">
	 <script language="JavaScript" src="js/gen_validatorv31.js" type="text/javascript"></script>
	 <script><?php 
	 	if(isset($_SESSION['reload']))
		{
			session_unregister('reload');
			include("reload.php");
		}
	?></script>
</head>
<body>
<center>
	<div id="wrapper">
		<div class="bar"><font size="4px"><?php echo (date("l, F d,Y"))."'s SUN :: ";?></font>
		<?php 
				if((!isset($_SESSION['CLogged_in'])) && (!isset($_SESSION['ALogged_in'])) & (!isset($_SESSION['uLogged_in'])))
					echo "<a href=\"logIn.php?fromindex=88\">Log In</a> |";
				if(isset($_SESSION['CLogged_in']))
					echo "<font size=\"4px\">Hi! ".$_SESSION['regType'].", Mr/s. <b>".$_SESSION['CName']."</b> Wanna </font><a href=\"php/session4user.php\" onClick=\"return log_out()\">Log Out</a>? | ";
				else if(isset($_SESSION['ALogged_in']))
					echo "<font size=\"4px\">Hi! ".$_SESSION['regType'].", Mr/s. <b>".$_SESSION['AName'].",</b> Wanna </font><a href=\"php/session4user.php\" onClick=\"return log_out()\">Log Out</a>? | ";
				else if(isset($_SESSION['uLogged_in']))
					echo "<font size=\"4px\">Hi! ".$_SESSION['regType'].", Mr/s. <b>".$_SESSION['UName']."</b> Wanna </font><a href=\"php/session4user.php\" onClick=\"return log_out()\">Log Out</a>? | ";
		?>
					<a href="registrationform.php">Register</a>
  <script>
	function log_out()
	{
		return confirm('Are you sure you want to log out?');
	}
	</script>
		</div>
		<div id="header">
		
			</div>
		

<!--Menu bar start------------------------------------->
		<div class="bar2">
			<?php include("menuBar.php"); ?>
		</div>
<!--Menu bar end------------------------------------->		
		<div class="bar">
			<div class="come">
				Latest News
			</div>
			<div class="feednews">
				<marquee onmouseover="this.stop();" onMouseOut="this.start();" scrolldelay="0">
<?php
$date=date("Y-m-d");
include("classobj.php"); //class file included here

$con = mysql_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("onlinenewsdb", $con);
$result = mysql_query("SELECT * FROM topnewstable");
while($row = mysql_fetch_array($result))
{
	if($date==$row['date'])
	{
		$link=test::makepath($row['pagename'],$row['box'],$row['columnno'],$date);
		echo "<a href=$link>".$row['title']."</a> | ";
	}
}
	
?></marquee>
			</div>			
		</div>
		<div id="content">
<!--Contens or news start------------------------------------->