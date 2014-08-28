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
	<?php
		//include("classobj.php"); //class file included here
	?>
			<div id="allnews">
				<div class="headline">
					<h3>Q. Should I register to poll?</h3>
					<h4>A. No, you can poll without registration.</h4><b>______________________________________________________________</b><br />
					<h3>Q. How can I comment on a news?</h3>
					<h4>A. You just click the link want to comment and just write your comment, if you loged already. Otherwise click the 'Log In' link below the news details.</h4><b>______________________________________________________________</b><br />
					<h3>Q. Have news archival system in this website? If have, How can I get the old newses?</h3>
					<h4>A. Yes, the SUN have news archival system. You can get old news just going 'Search->Older news' or simply entering the 'Aspected Date' on the side bar of the SUN.</h4><b>______________________________________________________________</b><br />
					<h3>Q. Can I Submit News contents to the SUN?</h3>
					<h4>A. Yes, iff you are registerd as collumnist.</h4><b>______________________________________________________________</b><br />
					<h3>Q. Can I put the news of `Today's Paper'?</h3>
					<h4>A. No, it is only right of `Admin/ Editor'.</h4><br />
				</div>	
				
			  
	  
<!--Contens or news end------------------------------------->	
					<?php include("indexDown.php"); ?>
