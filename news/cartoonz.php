<?php
session_start();
$_SESSION['news'];
$_SESSION['date'];
//session_unregister('date');
$date=date("Y-m-d");
$_SESSION['speech']="Bangladesh will win the one day series against WI, Do U think so?";
include("hitexecute.php");
?>
<?php include("indexUp.php"); ?>
<!--Contens or news start------------------------------------->			
<!--OOp start==--->
	
			<div id="allnews">
				<h3> Click on thambles to show individual cartoon </h3>
				<div id="gallery">
					<div id="thumbs">
						<a href="javascript: changeImage(1);"><img src="images/image (1).jpg" alt="" /></a>
						<a href="javascript: changeImage(2);"><img src="images/image (2).jpg" alt="" /></a>
						<a href="javascript: changeImage(3);"><img src="images/image (3).jpg" alt="" /></a>
						<a href="javascript: changeImage(4);"><img src="images/image (4).jpg" alt="" /></a>
						<a href="javascript: changeImage(5);"><img src="images/image (5).jpg" alt="" /></a>
						<a href="javascript: changeImage(6);"><img src="images/image (6).jpg" alt="" /></a>
						<a href="javascript: changeImage(7);"><img src="images/image (7).jpg" alt="" /></a>
						<a href="javascript: changeImage(8);"><img src="images/image (8).jpg" alt="" /></a>
						<a href="javascript: changeImage(9);"><img src="images/image (9).jpg" alt="" /></a>
						<a href="javascript: changeImage(10);"><img src="images/image (10).jpg" alt="" /></a>
						<a href="javascript: changeImage(11);"><img src="images/image (11).jpg" alt="" /></a>
						<a href="javascript: changeImage(12);"><img src="images/image (12).jpg" alt="" /></a>
						<a href="javascript: changeImage(13);"><img src="images/image (13).jpg" alt="" /></a>
						<a href="javascript: changeImage(14);"><img src="images/image (14).jpg" alt="" /></a>
						<a href="javascript: changeImage(15);"><img src="images/image (15).jpg" alt="" /></a>
						<a href="javascript: changeImage(16);"><img src="images/image (16).jpg" alt="" /></a>
						<a href="javascript: changeImage(17);"><img src="images/image (17).jpg" alt="" /></a>
						<a href="javascript: changeImage(18);"><img src="images/image (18).jpg" alt="" /></a>
						<a href="javascript: changeImage(19);"><img src="images/image (19).jpg" alt="" /></a>
						<a href="javascript: changeImage(20);"><img src="images/image (20).jpg" alt="" /></a>
				
					</div>
				 
					<div id="bigimages">
						<div id="normal1">
							<img src="images/image (1).jpg" alt=""/>
						</div>
				 
						<div id="normal2">
							<img src="images/image (2).jpg" alt=""/>
						</div>
				 
						<div id="normal3">
							<img src="images/image (3).jpg" alt=""/>
						</div>
				 
						<div id="normal4">
							<img src="images/image (4).jpg" alt=""/>
						</div>
				 
						<div id="normal5">
							<img src="images/image (5).jpg" alt=""/>
						</div>
						<div id="normal6">
							<img src="images/image (6).jpg" alt=""/>
						</div>
						<div id="normal7">
							<img src="images/image (7).jpg" alt=""/>
						</div>
						<div id="normal8">
							<img src="images/image (8).jpg" alt=""/>
						</div>
						<div id="normal9">
							<img src="images/image (9).jpg" alt=""/>
						</div>
						<div id="normal10">
							<img src="images/image (10).jpg" alt=""/>
						</div>
						<div id="normal11">
							<img src="images/image (11).jpg" alt=""/>
						</div>
						<div id="normal12">
							<img src="images/image (12).jpg" alt=""/>
						</div>
						<div id="normal13">
							<img src="images/image (13).jpg" alt=""/>
						</div>
						<div id="normal14">
							<img src="images/image (14).jpg" alt=""/>
						</div>
						<div id="normal15">
							<img src="images/image (15).jpg" alt=""/>
						</div>
						<div id="normal16">
							<img src="images/image (16).jpg" alt=""/>
						</div>
						<div id="normal17">
							<img src="images/image (17).jpg" alt=""/>
						</div>
						<div id="normal18">
							<img src="images/image (18).jpg" alt=""/>
						</div>
						<div id="normal19">
							<img src="images/image (19).jpg" alt=""/>
						</div>
						<div id="normal20">
							<img src="images/image (20).jpg" alt=""/>
						</div>
					</div>
				</div>				
	  
<!--Contens or news end------------------------------------->	
					<?php include("indexDown.php"); ?>
