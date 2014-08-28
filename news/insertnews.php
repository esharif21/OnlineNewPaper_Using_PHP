<?php
session_start();
if (!isset($_SESSION['JLogged_in'])) 
{
	header ( "Location: index.php" );
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>The Sun Online Edition</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>online news paper</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div id="wrapper">
<div id="header">
	<table id="date"> <td><?php echo (date("l, F d, Y"))."'s Sun";?></td></table>
	
</div>
<table id="menubar">
	
	<td class="menu"> <a href="index.php"> Today's Paper</a></td>
	<td class="menu"> <a href="editorial.php"> Editorial</a></td> 
	<td class="menu"> <a href="metropoliton.php"> Metropoliton</a></td>
	<td class="menu"> <a href="national.php"> National</a></td>
	<td class="menu"> <a href="international.php"> International</a></td>
	<td class="menu"> <a href="entertainment.php"> Entertainment </a></td>
	<td class="menu"> <a href="sports.php"> Sports </a></td>
	<td class="menu"> <a href="technology.php"> Technology </a></td>
	
</table>
<table id="latestnews">
	<td id="news">Latest News</td>
	<td id="feednews"><marquee>Have CS, but they have no activity, DUET admission test has been held, DPL is about ending, Dr. FR khan Hall is champion, Ahamadinazad  win the election of President</marquee></td>
</table>
<div id="sidebar1">
	Menu <br /> <br />

	<a href="registration.php">Registration <br /> </a>
	<a href="admin.php">Admin <br /> </a>
	<a href="columnist.php">Columnist<br /> </a>
	<a href="aboutus.php">About Us<br /> </a>
	<a href="aboutsite.php">About Site<br /> </a>
<br /><br /><br /><br />
</div>

<div id="content"><br><br>

	<form action="php/submitnews.php" method="post" enctype="multipart/form-data">

	<ul><fieldset><legend><h1>NEWS SUBMITION FORM</h1></legend>
	<table class="lebelcol">
	    <td><br /><br />
		Date:<br />	
		Title:<br />
		Journalist Name:<br  />
		Occurence Spot: <br />
		Description Details: <br /><br /><br />
		Attach Image: <br />
	    </td>	
	</table>
	
	<table class="fieldcol">
	    <td><br /><br />
		<input type="text" name="date" /> YYYY-MM-DD<br />
		<input type="text" name="title" size="30" /><br />
		<input type="text" name="name" value="<?php echo $_SESSION['JName'];?>" /><br />
		<input type="text" name="spot" /><br />
		<textarea cols="25" rows="4" name="news"></textarea><br />
		
		<input type="file" name="file" id="file" /><br />
	     </td>
	</table><br><br><br><br>
	</fieldset>
	<input type="submit" name="updateButton" value="Insert" onClick="return Update();"/>
	<input type="reset" />
	==>><a href="Jsession.php?do=logout" onClick="return log_out()">Log Out</a>
  <script>
function log_out()
{
	return confirm('Are you sure you want to log out?');
}

function Update()
{
	//history.back();
	return confirm('Are you sure you want to update?');
}

</script>
	</form>
</div>


<div id="sidebar2">
	<div class="poll"></div><br />
	Todays Online readers <br />
	<?php	
		//echo $_SESSION['views']." person(s)<br>";
	?><br /><br />
	Give your openion<br />
	<?php echo $str="DPL would make world classs Cricketer, do U think so?"; ?><br>
	
<form  method="post" action="userfeedbackform.php" style="font-size:15px">
	<input type="hidden" name="speech" value="DPL would make world classs Cricketer, do U think so?" />
	<pre> Email: </pre><input type="text" name="email" /><br />
	<pre> Password: </pre><input type="password" name="password"/><br />
	<input type="radio" value="Yes" name="openion" />Yes<input type="radio" value="No" name="openion" /> No<input type="radio" value="None" name="openion" />None<br /><br />	
	<input type="submit" name="submit" value="Submit" />
</form>


<?php
	$countYes=0;
	$countNo=0;
	$countNone=0;
	$total=0;
 	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("onlinenewsdb", $con);
	$result = mysql_query("SELECT * FROM userfeedbacktable");
	while($row = mysql_fetch_array($result))
  	{
  		if(($row['speech']==$str) && ($row['feedback'])=="Yes")
  			$countYes+=1;
		else if(($row['speech']==$str) && ($row['feedback'])=="No")
  			$countNo+=1;
		else if(($row['speech']==$str) && ($row['feedback'])=="None")
  			$countNone+=1;
		$total+=1;			
	}
	$Yes=round($countYes*100/$total,2);
	$No=round($countNo*100/$total,2);
	$None=round($countNone*100/$total,2);
	echo "Online Users have polled today:<br>Yes: $Yes %<br>No: $No %<br>None: $None %"; 

?>



	<br /><br /><br />
</div>


<div id="footer">
	<p class="para3">
		All Rights Reserved: cse10thbatch_duet
	</p>
</div>
</div>
</body>
</html>