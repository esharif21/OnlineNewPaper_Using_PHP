<?php
session_start();
$_SESSION['hit'];
$_SESSION['news'];
$_SESSION['speech']="Bangladesh will win the one day series against WI, Do U think so?";
include("hitexecute.php");
?>
<?php include("indexUp.php"); ?>
<!--Contens or news start------------------------------------->
			<div id="allnews">
				<div id="logInInterface">
	
	<form id=payment name="logIn" action="php/login.php" method="post"  onsubmit="return validate_login_form();" >
		<fieldset>
			<legend>Enter Login Info<?php if($_GET[fromindex]==88) $_SESSION[fromindex]=88; ?></legend>
			<ol>
				<li>
					<label for=name>Name</label>
					<input id=name name=name type=text placeholder="Enter Your Name" required autofocus>
				</li>
				<li>
					<label for=password>Password</label>
					<input id=password name=password type=password placeholder="Enter Your Password" required>
				</li>
				<li>
					<label for=loginType>Login Type</label>
					<select id=loginType name=loginType size="">
			                  <option value="" selected >--- You Are ---
		                      <option value="Admin" >Admin
		                      <option value="Collumnist" >Collumnist
							  <option value="User/ Guest" >User/ Guest				  							  
			    	</select>
				</li>
			</ol>
		</fieldset>	
		<fieldset>
		<button type=submit>Submit</button>
		Not a member? Please Click <a href="registrationform.php" STYLE="TEXT-DECORATION: NONE" > Register</a>
		</fieldset>
		<script type="text/javascript">
<!--

function validate_login_form()
{
    valid = true;
	if((document.logIn.name.value == "") || (document.logIn.password.value == "") || (document.logIn.loginType.value == ""))
	{
       	alert ( "All fields are required, Try again!");
        valid = false;
    }
    return valid;
}

//-->
</script>
	</form>	
	
				</div>
<!--Contens or news end------------------------------------->	
					<?php include("indexDown.php"); ?>
