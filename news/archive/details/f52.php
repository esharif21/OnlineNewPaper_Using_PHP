<?php
session_start();
$_SESSION[ccc];
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
					<font style="text-align:left"> <?php
						include("back.php");
						?>
					</font>	
					<?php
						$date=date("Y-m-d");
						$className::getnewsdetails(frontpage, box5, column2, $date);
					?>
			
				</div>
	<!--Contens or news end------------------------------------->	
		</div>
			<?php include("detailsdown.php");
			?>