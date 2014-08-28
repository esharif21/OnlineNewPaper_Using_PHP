<?php
session_start();
$_SESSION['news'];
$_SESSION['date'];
session_unregister('date');
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
				<div class="headline">
						
					<?php
						$className::getheadline(editorial,headline, $date);
					?>					
				</div>	
				<div class="columnContainer">
					<div class="column1">	
						<div class="box">			
							<?php
							$className::getnews(editorial, box1, column1, $date);
							?>
						</div>
						<div class="box">			
							<?php
							$className::getnews(editorial, box2, column1, $date);
							?>
						</div>
						<div class="box">			
							<?php
							$className::getnews(editorial, box3, column1, $date);
							?>
						</div>
						<div class="box">			
							<?php
							$className::getnews(editorial, box4, column1, $date);
							?>
						</div>
						<div class="box">			
							<?php
							$className::getnews(editorial, box5, column1, $date);
							?>
						</div>
					</div>
					<div class="column2">	
						<div class="box">			
							<?php
							$className::getnews(editorial, box1, column2, $date);
							?>
						</div>
						<div class="box">			
							<?php
							$className::getnews(editorial, box2, column2, $date);
							?>
						</div>
						<div class="box">			
							<?php
							$className::getnews(editorial, box3, column2, $date);
							?>
						</div>
						<div class="box">			
							<?php
							$className::getnews(editorial, box4, column2, $date);
							?>
						</div>
						<div class="box">			
							<?php
							$className::getnews(editorial, box5, column2, $date);
							?>
						</div>
					</div>
				</div>
			  
	  
<!--Contens or news end------------------------------------->	
					<?php include("indexDown.php"); ?>
