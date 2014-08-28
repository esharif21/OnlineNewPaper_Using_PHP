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
					<form id=payment name="registrationform" action="archive/setdate.php" method="post">
						<fieldset>
							<legend>Select The Specific Date You Want To Read</legend>
							<ol>
								<li>
									<label for=birthDate>Aspected Date</label>
									<select id=archiveDate name=year size="">
											  <option value="" selected >-Year-</option>
											  <option value="2009" >2009</option>
											  <option value="2010" >2010</option>
											  <option value="2011" >2011</option>
											  <option value="2012" >2012</option>
											  <option value="2013" >2013</option>
										</select>
										<select id=archiveDate name=month size="">
											  <option value="" selected >-Month-</option>
											  <option value="01" >Jan</option>
											  <option value="02" >Feb</option>
											  <option value="03" >Mer</option>
											  <option value="04" >Apr</option>				  
											  <option value="05" >May</option>
											  <option value="06" >Jun</option>				  
											  <option value="07" >Jul</option>
											  <option value="08" >Aug</option>				  
											  <option value="09" >Sep</option>
											  <option value="10" >Oct</option>				  
											  <option value="11" >Nov</option>
											  <option value="12" >Dec</option>				  
									</select>
									<select id=archiveDate name=day size="">
											  <option value="" selected >-Day-</option>
											  <option value="01" >1</option>
											  <option value="02" >2</option>
											  <option value="03" >3</option>
											  <option value="04" >4</option>				  
											  <option value="05" >5</option>
											  <option value="06" >6</option>				  
											  <option value="07" >7</option>
											  <option value="08" >8</option>				  
											  <option value="09" >9</option>
											  <option value="10" >10</option>				  
											  <option value="11" >11</option>
											  <option value="12" >12</option>
											  <option value="13" >13</option>
											  <option value="14" >14</option>				  
											  <option value="15" >15</option>
											  <option value="16" >16</option>
											  <option value="17" >17</option>
											  <option value="18" >18</option>				  
											  <option value="19" >19</option>
											  <option value="20" >20</option>
											  <option value="21" >21</option>
											  <option value="22" >22</option>				  
											  <option value="23" >23</option>
											  <option value="24" >24</option>
											  <option value="25" >25</option>
											  <option value="26" >26</option>				  
											  <option value="27" >27</option>
											  <option value="28" >28</option>
											  <option value="29" >29</option>
											  <option value="30" >30</option>				  
											  <option value="31" >31</option>						  				  
									</select>
								</li>
							</ol>
						</fieldset>
						
						<fieldset>
						<button type=submit>Enter</button>
						</fieldset>
					</form>
				</div>	
				
			  
	  
<!--Contens or news end------------------------------------->	
					<?php include("indexDown.php"); ?>
