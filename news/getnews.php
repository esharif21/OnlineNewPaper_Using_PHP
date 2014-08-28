<?php
$p=$_POST["selectpage"];
$b=$_POST["selectbox"];
$c=$_POST["selectcolumn"];
$n=$_POST["headline"];
echo $dat=date("Y-m-d");
echo "$p $b $c";
$con = mysql_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("onlinenewsdb", $con);
$result = mysql_query("SELECT * FROM newsarchives");
while($row = mysql_fetch_array($result))
	if($row['title']==$_POST["headline"])
	{
		$date=$row['date'];
		$title=$row['title'];
		$journalist=$row['journalist'];
		$spot=$row['spot'];
		$news=$row['news'];
		$status=7;
		break;
	}
	
	$title=mysql_real_escape_string($title);
	$news=mysql_real_escape_string($news);
if($status!=7)
	return;
	//header("Location:../insertnews.php");
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("onlinenewsdb", $con);
	$result = mysql_query("SELECT * FROM topnewstable");
	while($row = mysql_fetch_array($result))
  		{
			if(($dat==$row['date'])&&($n==$row['title']) && ($p==$row['pagename']))
  			{	
				$flag=11;
				break;
			}
		}
	if($flag!=11)
	{
		$con = mysql_connect("localhost","root","");
		if (!$con)
		{
		die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("onlineNewsDB", $con);
		$sql="INSERT INTO topnewstable
		(date,title,journalist,spot,news,pagename,box,columnno)
		VALUES
		('$dat','$title','$journalist','$spot','$news','$p','$b','$c')";
		if (!mysql_query($sql,$con))
		{
		echo mysql_error();
		echo "<script>alert(\"Go back to fix the problem.\");history.back();</script>";
		}
		
		echo "<script>alert(\"The news added successfully to top news table as a new row.\");history.back();</script>";	
	}
	else if($flag==11)
	{
		$con2 = mysql_connect("localhost","root","");
			if (!$con2)
			{
				die('Could not connect: ' . mysql_error());
			}
			mysql_select_db("onlineNewsDB", $con);
			mysql_query("UPDATE  `onlinenewsdb`.`topnewstable` SET  `date` =  '$dat',
`title` =  '$title',
`journalist` =  '$journalist',
`spot` =  '$spot',
`news` =  '$news',
`pagename` =  '$p',
`box` =  '$b',
`columnno` =  '$c' WHERE  `topnewstable`.`date` =  '$dat' AND  `topnewstable`.`title` =  '$title' AND  `topnewstable`.`pagename` =  '$p' LIMIT 1 ;");
			echo "<script>alert(\"The news updtaed successfully to top news table to exiting position.\");history.back();</script>";	
			mysql_close($con2);
	}
//header("Location:./index.php");
?>