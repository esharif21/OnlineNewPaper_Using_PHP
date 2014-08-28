<?php
session_start();
$_SESSION['hit'];
$_SESSION['news'];
$_SESSION['speech']="Bangladesh will win the one day series against WI, Do U think so?";
include("hitexecute.php");
?>
<?php include("indexUp.php"); ?>
	<div id="allnews">

	<div id="logInInterface">
	<form id=payment name="registrationform" action="php/register.php" method="post"  onsubmit="return validate_reg_form();" >
		<fieldset>
			<legend>Enter About Yourself</legend>
			<ol>
				<li>
					<label for=name>Name</label>
					<input id=name name=name type=text placeholder="CHRIS CPOONER" required autofocus>
				</li>
				<li>
					<label for=fatherName>Father Name</label>
					<input id=fatherName name=fatherName type=text placeholder="Father name" required>
				</li>
				<li>
					<label for=motherName>Mother Name</label>
					<input id=motherName name=motherName type=text placeholder="Motehr name" required>
				</li>
				<li>
					<fieldset>
						<legend>Select Gender</legend>
						<ol>
							<li>
								<input id=male value="male" name=gender type=radio>
								<label for=male><pre>Male     </pre></label>
							</li>
							<li>
								<input id=female value="female" name=gender type=radio>
								<label for=female>Female</label>
							</li>
						</ol>
					</fieldset>
				</li>
					
				<li>
					<label for=mobile>Mobile No.</label>
					<input id=mobile name=mobile type=text placeholder="e.g., +8801812345678" required>
				</li>	
				
				<li>
					<label for=birthDate>Birth Date</label>
					<select id=birthDate name=month size="">
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
					<select id=birthDate name=day size="">
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
					<select id=birthDate name=year size="">
			                  <option value="" selected >-Year-</option>
							  <option value="1975" >1975</option>
		                      <option value="1976" >1976</option>				  
							  <option value="1977" >1977</option>
		                      <option value="1978" >1978</option>
							  <option value="1979" >1979</option>
		                      <option value="1980" >1980</option>				  
							  <option value="1981" >1981</option>
		                      <option value="1982" >1982</option>
							  <option value="1983" >1983</option>
		                      <option value="1984" >1984</option>				  
							  <option value="1985" >1985</option>
		                      <option value="1986" >1986</option>
							  <option value="1987" >1987</option>
		                      <option value="1988" >1988</option>				  
							  <option value="1989" >1989</option>
		                      <option value="1990" >1990</option>
							  <option value="1991" >1991</option>
		                      <option value="1992" >1992</option>				  
							  <option value="1993" >1993</option>
		                      <option value="1994" >1994</option>
							  <option value="1995" >1995</option>
						</select>
				</li>				

				<li>
					<label for=address>Address</label>
					<textarea id=address name=address rows=5 required></textarea>
				</li>
				<li>
					<label for=registryType>Register As</label>
					<select id=registryType name=registryType size="">
			                  <option value="" selected >-Registry Type-
		                      <option value="Collumnist" >Collumnist
							  <option value="User/ Guest" >User/ Guest						  							  			    	</select>
				</li>
				<li>
					<label for=email>Email Address</label>
					<input id=email name=email type=text placeholder="e.g., example@domain.com" required>
				</li>
				<li>
					<label for=password>Password</label>
					<input id=password name=password placeholder="password" type="password" required>
				</li>
				<li>
					<label for=confirmPassword>Confirm Password</label>
					<input id=confirmPassword name=confirmPassword placeholder="Re-Type the password" type="password" required>
				</li>
			</ol>
		</fieldset>
		
		<fieldset>
		<button type=submit>Save Info</button>
		</fieldset>
	</form>
	<script language="JavaScript" type="text/javascript">
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("registrationform");
  
  frmvalidator.addValidation("name","req","Please enter your Name");
  frmvalidator.addValidation("name","maxlen=20",	"Max length for Name is 20");
	
  frmvalidator.addValidation("fatherName","req","Please enter your Father Name");
  frmvalidator.addValidation("fatherName","maxlen=20","Max length father name is 20");

  frmvalidator.addValidation("motherName","req","Please enter your Mother Name");
  
  //chktestValidator.addValidation("gender","selone_radio");
  
  frmvalidator.addValidation("mobile","maxlen=14");
  frmvalidator.addValidation("mobile","req");
  
  frmvalidator.addValidation("month","req","'Month' required");
  frmvalidator.addValidation("day","req","'Day' required");
  frmvalidator.addValidation("year","req","'Year' required");
  
  frmvalidator.addValidation("address","req","Please Enter Your Address");
  frmvalidator.addValidation("address","maxlen=50");
  
  frmvalidator.addValidation("registryType","req","Please Choice your Registration Type");

  frmvalidator.addValidation("email","maxlen=50");
  frmvalidator.addValidation("email","req","Please Enter your Email Address");
  frmvalidator.addValidation("email","email");
  
  frmvalidator.addValidation("password","maxlen=50");
  frmvalidator.addValidation("password","req");

  frmvalidator.addValidation("confirmPassword","req");  
  
  function validate_reg_form()
{
    valid = true;
	x = document.registrationform.password.value;
	y= document.registrationform.confirmPassword.value;
	if(x!=y)
	{
		alert ( "Your entered 'Password' and 'Confirm password' box does not match" );
        valid = false;
	}
    return valid;
}
</script>

	</div>
<?php include("indexDown.php"); ?>

