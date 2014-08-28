<center> 
<?php 
	 echo "<h1>Confirmation Message</h1><br>";
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("onlinenewsdb", $con);
	$result = mysql_query("SELECT * FROM columnisttable");
	while($row = mysql_fetch_array($result))
  	{
  		if(($_POST["id"]==$row['id']) && ($_POST["password"]==$row['password']))
  		{	
			echo "Web page side data<br>Id: ".$_POST['id']." and Password: ".$_POST['password'];
			echo "<br><br>And Server side data<br>Id: ".$row['id']." and Password: ".$row['password'];
			//echo "<br>Welcome! Login Success";
			$status=7;
			header("index.php");
			//return;
		}
	}
	if($status!=7)
	{	
		echo	"Invalid Password or Id";
		return;
	}
?>
		<!--<form  method="post" action="adminform.php" style="font-size:15px">
			<input type="submit" name="submit" value="Login" />

			</form> -->

