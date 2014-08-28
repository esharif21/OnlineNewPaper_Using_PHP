<?php
	session_start();
	$_SESSION['hit'];
	$_SESSION['news'];
	if($_SESSION['ALogged_in']!=7)
	{	
		echo "<script>history.back();</script>";
	}			
	$_SESSION['speech']="Bangladesh will win the one day series against WI, Do U think so?";
	include("hitexecute.php");

	$con = mysql_connect("localhost","root","");
	if (!$con)
		die('Could not connect: ' . mysql_error());
	mysql_select_db("onlinenewsdb", $con);
	$result = mysql_query("SELECT count(*) FROM newsarchives");
	$row=mysql_fetch_array($result);
	$size=$row['count(*)'];
	mysql_close($con);
	include("indexUp.php"); ?>
	<div id="allnews">
	<div id="logInInterface">
		<form id=payment name="editorform"  method="post" action="getnews.php" onsubmit="return validate_update();" >
		<!--form id=payment name="registrationform" action="php/register.php" method="post"  onsubmit="return validate_form();" -->
			<fieldset>
				<legend>Edit Page Content</legend>
				<ol>
					<li>
						<label for=headline>Select News</label>
						<SELECT id=headline name="headline" size="10" >
			  				<option value="" selected>[choose News]
							<option value="<?php
								$con = mysql_connect("localhost","root","");
								if (!$con)
								{
									die('Could not connect: ' . mysql_error());
								}
								mysql_select_db("onlinenewsdb", $con);
								$result = mysql_query("SELECT * FROM newsarchives");
								$row = mysql_fetch_array($result);
								{
									echo $str=$row['title'];
								}
								?>"> <?php echo $str; ?>
							</option>
							<?php while($size>1)
							{
								$size-=1;
								$row = mysql_fetch_array($result);
								echo "<option value=\"".$str=$row['title']."\">"; 
								echo $row['title'];
								echo "</option>";
							}
							?>
					</SELECT>
					</li>
					<li>
						<label for=pageselection>Select Page</label>
						<select id=selectpage name=selectpage size="">
								  <option value="" selected >[Choose Page]</option>
								  <option value="frontpage" >Front Page</option>
								  <option value="sports" >Sports</option>
								  <option value="worldsnews" >World's News</option>
								  <option value="technology" >Technology</option>
								  <option value="education" >Education</option>
								  <option value="bussiness" >Bussiness</option>
								  <option value="entertainment" >Entertainment</option>
								  <option value="editorial" >Editorial</option>
						</select>
					</li>
					<li>
						<label for=columnselection>Select Box</label>
						<select id=selectcolumn name=selectcolumn size="">
								  <option value="" selected >[Choose Column]</option>
								  <option value="column1" >Column#1</option>
								  <option value="column2" >Column#2</option>
						</select>
					</li>
					<li>
						<label for=boxselection>Select Box</label>
						<select id=selectbox name=selectbox size="">
								  <option value="" selected >[Choose Box]</option>
								  <option value="headline" >Headline</option>
								  <option value="box1" >Box#1</option>
								  <option value="box2" >Box#2</option>
								  <option value="box3" >Box#3</option>
								  <option value="box4" >Box#4</option>
								  <option value="box5" >Box#5</option>
						</select>
					</li>
				</ol>
			</fieldset>
			<fieldset>
			<button type=submit name="updateButton" value="Update"/>Update</button>
	  <!--input type="submit" name="logoutButton" value="Logout!" /-->
	  <a href="Asession.php?do=logout" onClick="return log_out()">Log Out</a>
	  <!--button type=submit>Update</button-->
			</fieldset>
			<script type="text/javascript">
	<!--
	
	function validate_update()
	{
		valid = true;
		if((document.editorform.headline.value == "")||(document.editorform.selectpage.value == "") || (document.editorform.selectcolumn.value == "") || (document.editorform.selectbox.value == ""))
		{
			alert ( "You did not fill required fields, Try again!" );
			valid = false;
		}
		return valid;
	}
	
	//-->
	</script>
		</form>
		</div>		
	<?php include("indexDown.php"); ?>

