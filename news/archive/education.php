<?php
session_start();
$_SESSION[ccc];
$_SESSION['user'];
$date=$_SESSION['date'];

include("detailsup.php");
?>
		<div id="content">
<!--Contens or news start------------------------------------->			
<!--OOp start==--->
	<?php
	include("../classobj.php");//class file included here
	?>
			<div id="allnews">
				<div class="headline">
						
					<?php
						$className::getheadline(education,headline, $_SESSION['date']);
					?>					
				</div>	
				<div class="columnContainer">
					<div class="column1">	
						<div class="box">			
							<?php
							$className::getnews(education, box1, column1, $_SESSION['date']);
							?>
						</div>
						<div class="box">			
							<?php
							$className::getnews(education, box2, column1, $_SESSION['date']);
							?>
						</div>
						<div class="box">			
							<?php
							$className::getnews(education, box3, column1, $_SESSION['date']);
							?>
						</div>
						<div class="box">			
							<?php
							$className::getnews(education, box4, column1, $_SESSION['date']);
							?>
						</div>
						<div class="box">			
							<?php
							$className::getnews(education, box5, column1, $_SESSION['date']);
							?>
						</div>
					</div>
					<div class="column2">	
						<div class="box">			
							<?php
							$className::getnews(education, box1, column2, $_SESSION['date']);
							?>
						</div>
						<div class="box">			
							<?php
							$className::getnews(education, box2, column2, $_SESSION['date']);
							?>
						</div>
						<div class="box">			
							<?php
							$className::getnews(education, box3, column2, $_SESSION['date']);
							?>
						</div>
						<div class="box">			
							<?php
							$className::getnews(education, box4, column2, $_SESSION['date']);
							?>
						</div>
						<div class="box">			
							<?php
							$className::getnews(education, box5, column2, $_SESSION['date']);
							?>
						</div>
					</div>
				</div>
			
	<!--Contens or news end------------------------------------->	
			</div>
			<?php include("../details/detailsdown.php");
			?>