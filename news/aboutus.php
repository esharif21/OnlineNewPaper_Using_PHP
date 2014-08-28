<?php
session_start();
$_SESSION['news'];
$date=date("Y-m-d");
$_SESSION['speech']="Bangladesh will win the one day series against WI, Do U think so?";
include("hitexecute.php");
?>
<?php include("indexUp.php"); ?>
<!--Contens or news start------------------------------------->			
<!--OOp start==--->
	<?php
		//include("classobj.php"); //class file included here
	?>

			<div id="allnews">
			<div class="devContainer">
			<h3>SUPERVISED BY</h3><BR />
			<center><img src="graphics/sir.jpg" /><br />Mr. Md. Shafiqul Islam <br />
			Asst. Prof., CSE, DUET<br />
B.Sc Engg. (KUET), M. Sc. Engg. (MITHT, Russia)<br />   
E-mail: msislam_80@yahoo.com<br /></center>
			</div>
				<h3><div class="devContainer">
							<h3>DEVELOPERS</h3>
					<div class="column1">	
						<div class="boxabout">			
					
					<IMG src="graphics/mine.jpg" /><br /> Md. Shariful Islam<br />Id:084021, Semester: 6th <br />Dept. : CSE, DUET.
				
						</div>
					</div>
					<div class="column2">	
						<div class="boxabout">			
						<img src="graphics/20.png" /><br />Mst. Shirin Khatun<br />Id: 084020, Semester: 6th<br />Dept. : CSE, DUET.
						</div>
				  </div>
				 </div></h3>
	  
<!--Contens or news end------------------------------------->	
					<?php include("indexDown.php"); ?>
