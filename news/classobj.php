<?php
	session_start();
	//$date=date("Y-m-d");
	
	class test
	{
		public function getcomment($date)
		{
			$totalComments=0;
			$con = mysql_connect("localhost","root","");
			if (!$con)
				die('Could not connect: ' . mysql_error());
			mysql_select_db("onlinenewsdb", $con);
			$result = mysql_query("SELECT * FROM commntstable");
			while($row = mysql_fetch_array($result))
				if($row['newspublishingdate']==$date && $row['pagename']==$_SESSION[pagename] && $row[columnno]==$_SESSION[columnno] && $row[box]==$_SESSION[box])
				{
					echo "<div class=\"para1\">".$row['name']."<font color=\"#000000\" size=\"4px\"> said:</font> </div><div class=\"para2\">On :";
					$timestamp = strtotime($row['date']);
					$timestamp += 6 * 3600;
					echo date('F j, Y, g:i:s a', $timestamp);
					echo "</div><br><div class=\"para4\">";
					echo $row['comment']."</div>";
					$totalComments+=1;
					echo "______________________________________________________________________<br>";
				}
			mysql_close($con);
			if($totalComments==0)
				echo "There is no comments for this news.<br>";
			else if($totalComments==1)
				echo "This is the only comment for this news.<br>";
			else
				echo "<b>There is total $totalComments comments for this news</b>.<br>";
		}
		
		public function postcomment($pagename, $box, $columnno, $date, $comment)
		{
		
			$nam=$_SESSION['UName'];
			$commenteddate=Date('Y-m-d H:i:s');
			$con = mysql_connect("localhost","root","");
			if (!$con)
			{
				die('Could not connect: ' . mysql_error());
			}
			$comment=mysql_real_escape_string($comment);
			mysql_select_db("onlineNewsDB", $con);
			$sql="INSERT INTO  commntstable
			(name,newspublishingdate,date,comment,pagename,box,columnno)
			VALUES
			('$nam','$date','$commenteddate','$comment','$pagename','$box','$columnno')";
			if (!mysql_query($sql,$con))
			{
				die('Error: ' . mysql_error());echo "<script>alert(\"ERROR:: fix the problem.\");history.back();</script>";
			}
			echo "<script>alert(\"Your comment has been entered Successfully.\");history.back();</script>";
		}
		public function getheadline($pagename, $box, $date)
		{	
			$con = mysql_connect("localhost","root","");
			if (!$con)
			{
				die('Could not connect: ' . mysql_error());
			}
			mysql_select_db("onlinenewsdb", $con);
			$result = mysql_query("SELECT * FROM topnewstable");
			while($row = mysql_fetch_array($result))
			{
				if(($date==$row['date'])&&($row['pagename']==$pagename)&& ($row['box']==$box))
				{	
					$tl=$row['title'];
					$link=test::makepath($pagename,$box,$columnno,$date);	
					//echo "Thsi is Link: $link..";				
					echo "<h1><a href=$link>$tl</a></h1>";
					if($row['news']!="")
					{
						echo "<br><b> From ".$row['spot']."</b><br><br>";
						$str=$row['news'];
					}
					$str1=substr($str,0,370);
					echo $str1.">>><a href=$link>Details</a>";
					break;
				}
			}			
		}
		
		public function getheadlinedetails($pagename, $box, $date)
		{	
			$con = mysql_connect("localhost","root","");
			if (!$con)
			{
				die('Could not connect: ' . mysql_error());
			}
			mysql_select_db("onlinenewsdb", $con);
			$result = mysql_query("SELECT * FROM topnewstable");
			while($row = mysql_fetch_array($result))
			{
				if(($date==$row['date'])&&($row['pagename']==$pagename)&& ($row['box']==$box))
				{	
					$tl=$row['title'];
					echo "<h1>$tl</h1>";
					if($row['news']!="")
					{
						echo "<br><b> From ".$row['spot']."</b><br><br>";
						echo $row['news'];
					}
					echo "<br>";
					$_SESSION[pagename]=$row[pagename];
					$_SESSION[box]=$row[box];
					$_SESSION[columnno]=$row[columnno];

					break;
				}		
			}
		}
		public function getnews($pagename, $box, $columnno, $date)
		{	
			$con = mysql_connect("localhost","root","");
			if (!$con)
			{
				die('Could not connect: ' . mysql_error());
			}
			mysql_select_db("onlinenewsdb", $con);
			$result = mysql_query("SELECT * FROM topnewstable");
			while($row = mysql_fetch_array($result))
			{	
				if(($date==$row['date'])&&($row['pagename']==$pagename)&& ($row['box']==$box)&&($row['columnno']==$columnno))
				{	
					$tl=$row['title'];
					$link=test::makepath($pagename,$box,$columnno,$date);
					echo "<h3><a href=$link>$tl</a></h3>";
					if($row['news']!="")
					{
						echo "<br><b> From ".$row['spot']."</b><br><br>";
						$str=$row['news'];
					}
					$str1=substr($str,0,210);
					//echo $link;
					echo $str1.">>><a href=$link>Details</a><br><br>_______________________________________";
					break;
				}
			}
		}
		public function makepath($pagename,$box,$columnno,$date)
		{
			if($box=="headline")
			{
				if($pagename=="frontpage")
					return "details/fh.php";
				else if($pagename=="worldsnews")
					return "details/wh.php";
				else if($pagename=="technology")
					return "details/th.php";
				else if($pagename=="bussiness")
					return "details/bh.php";
				else if($pagename=="education")
					return "details/eduh.php";
				else if($pagename=="sports")
					return "details/sh.php";
				else if($pagename=="entertainment")
					return "details/enth.php";
				else if($pagename=="editorial")
					return "details/edih.php";
			}
			else if($pagename=="frontpage")
			{	
				if($columnno==column1)
				{
					if($box==box1)
						return "details/f11.php";
					else if($box==box2)
						return "details/f21.php";
					else if($box==box3)
						return "details/f31.php";
					else if($box==box4)
						return "details/f41.php";
					else if($box==box5)
						return "details/f51.php";
				}
				else if($columnno==column2)
				{
					if($box==box1)
						return "details/f12.php";
					else if($box==box2)
						return "details/f22.php";
					else if($box==box3)
						return "details/f32.php";
					else if($box==box4)
						return "details/f42.php";
					else if($box==box5)
						return "details/f52.php";
				}
			}
			else if($pagename=="worldsnews")
			{
				if($columnno==column1)
				{
					if($box==box1)
						return "details/w11.php";
					else if($box==box2)
						return "details/w21.php";
					else if($box==box3)
						return "details/w31.php";
					else if($box==box4)
						return "details/w41.php";
					else if($box==box5)
						return "details/w51.php";
				}
				else if($columnno==column2)
				{
					if($box==box1)
						return "details/w12.php";
					else if($box==box2)
						return "details/w22.php";
					else if($box==box3)
						return "details/w32.php";
					else if($box==box4)
						return "details/w42.php";
					else if($box==box5)
						return "details/w52.php";
				}
			}
			else if($pagename=="technology")
			{
				if($columnno==column1)
				{
					if($box==box1)
						return "details/t11.php";
					else if($box==box2)
						return "details/t21.php";
					else if($box==box3)
						return "details/t31.php";
					else if($box==box4)
						return "details/t41.php";
					else if($box==box5)
						return "details/t51.php";
				}
				else if($columnno==column2)
				{
					if($box==box1)
						return "details/t12.php";
					else if($box==box2)
						return "details/t22.php";
					else if($box==box3)
						return "details/t32.php";
					else if($box==box4)
						return "details/t42.php";
					else if($box==box5)
						return "details/t52.php";
				}
			}		
			else if($pagename=="bussiness")
			{
				if($columnno==column1)
				{
					if($box==box1)
						return "details/b11.php";
					else if($box==box2)
						return "details/b21.php";
					else if($box==box3)
						return "details/b31.php";
					else if($box==box4)
						return "details/b41.php";
					else if($box==box5)
						return "details/b51.php";
				}
				else if($columnno==column2)
				{
					if($box==box1)
						return "details/b12.php";
					else if($box==box2)
						return "details/b22.php";
					else if($box==box3)
						return "details/b32.php";
					else if($box==box4)
						return "details/b42.php";
					else if($box==box5)
						return "details/b52.php";
				}
			}
			else if($pagename=="education")
			{
				if($columnno==column1)
				{
					if($box==box1)
						return "details/edu11.php";
					else if($box==box2)
						return "details/edu21.php";
					else if($box==box3)
						return "details/edu31.php";
					else if($box==box4)
						return "details/edu41.php";
					else if($box==box5)
						return "details/edu51.php";
				}
				else if($columnno==column2)
				{
					if($box==box1)
						return "details/edu12.php";
					else if($box==box2)
						return "details/edu22.php";
					else if($box==box3)
						return "details/edu32.php";
					else if($box==box4)
						return "details/edu42.php";
					else if($box==box5)
						return "details/edu52.php";
				}
			}
			else if($pagename=="sports")
			{
				if($columnno==column1)
				{
					if($box==box1)
						return "details/s11.php";
					else if($box==box2)
						return "details/s21.php";
					else if($box==box3)
						return "details/s31.php";
					else if($box==box4)
						return "details/s41.php";
					else if($box==box5)
						return "details/s51.php";
				}
				else if($columnno==column2)
				{
					if($box==box1)
						return "details/s12.php";
					else if($box==box2)
						return "details/s22.php";
					else if($box==box3)
						return "details/s32.php";
					else if($box==box4)
						return "details/s42.php";
					else if($box==box5)
						return "details/s52.php";
				}
			}
			else if($pagename=="entertainment")
			{
				if($columnno==column1)
				{
					if($box==box1)
						return "details/ent11.php";
					else if($box==box2)
						return "details/ent21.php";
					else if($box==box3)
						return "details/ent31.php";
					else if($box==box4)
						return "details/ent41.php";
					else if($box==box5)
						return "details/ent51.php";
				}
				else if($columnno==column2)
				{
					if($box==box1)
						return "details/ent12.php";
					else if($box==box2)
						return "details/ent22.php";
					else if($box==box3)
						return "details/ent32.php";
					else if($box==box4)
						return "details/ent42.php";
					else if($box==box5)
						return "details/ent52.php";
				}
			}
			else if($pagename=="editorial")
			{
				if($columnno==column1)
				{
					if($box==box1)
						return "details/edi11.php";
					else if($box==box2)
						return "details/edi21.php";
					else if($box==box3)
						return "details/edi31.php";
					else if($box==box4)
						return "details/edi41.php";
					else if($box==box5)
						return "details/edi51.php";
				}
				else if($columnno==column2)
				{
					if($box==box1)
						return "details/edi12.php";
					else if($box==box2)
						return "details/edi22.php";
					else if($box==box3)
						return "details/edi32.php";
					else if($box==box4)
						return "details/edi42.php";
					else if($box==box5)
						return "details/edi52.php";
				}
			}
		}
		
		public function getnewsdetails($pagename, $box, $columnno,$date)
		{	
			$con = mysql_connect("localhost","root","");
			if (!$con)
			{
				die('Could not connect: ' . mysql_error());
			}
			mysql_select_db("onlinenewsdb", $con);
			$result = mysql_query("SELECT * FROM topnewstable where pagename='$pagename' AND box='$box' AND columnno='$columnno' AND date='$date'");
			$row = mysql_fetch_array($result);
			{
				$tt=$row['title'];
				echo "<h1>$tt</h1>";
				if($row['news']!="")
					echo "<br> From ".$row['spot']."<br><br>";
				echo $row['news']."<br>";
				$_SESSION[pagename]=$row[pagename];
				$_SESSION[box]=$row[box];
				$_SESSION[columnno]=$row[columnno];
			}
		}	
  }
  $className = 'test';
?>