<?php
session_start();
$_SESSION[ccc];
$_SESSION['user'];
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
						include("back4w.php");
						?>
					</font>	
					<?php
						$date=date("Y-m-d");
						
						$pagename=frontpage;
						$box=headline;
						$columnno=column1;
						
						$className::getheadlinedetails(worldsnews,headline,$date);
						$_SESSION[path]="Location:../details/wh.php";
					?>
					</div>
					<div class="devContainer">
						<?php 
							include("getpostcomment.php");
						?>	
					</div>
	<!--Contens or news end------------------------------------->	
			</div>
			<?php include("detailsdown.php");
			?>