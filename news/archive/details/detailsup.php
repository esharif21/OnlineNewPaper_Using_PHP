<?php
	session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>The Sun News: :Online Edition</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<style type="text/css">
		.yes{width: <?php echo $_SESSION[yes]."px"; ?>;height:20px;background-color:#006600; color:#FFFFFF;}
		.no{width: <?php echo $_SESSION[no]."px"; ?>;height:20px;background-color:#CC0000; color:#FFFFFF;}
		.none{width: <?php echo $_SESSION[none]."px"; ?>;height:20px;background-color:#663300; color:#FFFFFF;}
	</style>
	 <LINK REL=ICON href="../graphics/icon.jpg">
	 <script language="JavaScript" src="../js/gen_validatorv31.js" type="text/javascript"></script>
</head>
<body>
<div id="wrapper">
		<div class="bar"><font size="4px"><?php echo (date("l, F d,Y"))."'s SUN :: ";?></font>
		<?php 
				if((!isset($_SESSION['CLogged_in'])) && (!isset($_SESSION['ALogged_in'])) & (!isset($_SESSION['uLogged_in'])))
					echo "<a href=\"../logIn.php?fromindex=88\">Log In</a> |";
				if(isset($_SESSION['CLogged_in']))
					echo "<font size=\"4px\">Hi! ".$_SESSION['regType'].", Mr/s. <b>".$_SESSION['CName']."</b> Wanna </font><a href=\"../php/session4user.php\" onClick=\"return log_out()\">Log Out</a>? | ";
				else if(isset($_SESSION['ALogged_in']))
					echo "<font size=\"4px\">Hi! ".$_SESSION['regType'].", Mr/s. <b>".$_SESSION['AName'].",</b> Wanna </font><a href=\"../php/session4user.php\" onClick=\"return log_out()\">Log Out</a>? | ";
				else if(isset($_SESSION['uLogged_in']))
					echo "<font size=\"4px\">Hi! ".$_SESSION['regType'].", Mr/s. <b>".$_SESSION['UName']."</b> Wanna </font><a href=\"../php/session4user.php\" onClick=\"return log_out()\">Log Out</a>? | ";
		?>
					<a href="../registrationform.php">Register</a>
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
						<ul> 
				<li><a href="../../index.php">Back Today</a></li> 
				<li><a href="../index.php"><?php echo $_SESSION['date'];?>'s Paper</a> 
				  <ul> 
					<li><a href="../index.php">Front Page</a></li>
					<li><a href="../worldsnews.php">World's News</a></li>
					<li><a href="../technology.php">Technology</a></li> 
					<li><a href="../bussiness.php">Bussiness</a></li> 
					<li><a href="../education.php">Education</a></li>
					<li><a href="../sports.php">Sports</a></li> 
					<li><a href="../entertainment.php">Entertainment</a></li>
					<li><a href="../editorial.php">Editorial</a></li>
				  </ul> 
				</li> 
				<li><a href="">Search</a> 
				  <ul> 
					<li><a href="../../archiveui.php">Older news</a></li> 
					<li><a href="../../cartoonz.php">Cartoonz</a></li> 
				  </ul> 
				</li> 
				<li><a href="">Help</a> 
				  <ul> 
					<li><a href="../../aboutus.php">About Us</a></li>  
					<li><a href="">FAQ</a></li> 
				  </ul> 
				</li> 
			</ul>
		</div>
<!--Menu bar end------------------------------------->		
		<div class="bar">
			<div class="come">
				Latest News
			</div>
			<div class="feednews">
				<marquee>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("onlinenewsdb", $con);
$result = mysql_query("SELECT * FROM topnewstable");
while($row = mysql_fetch_array($result))
	echo $row['title']." | ";
	
?></marquee>
			</div>			
		</div>