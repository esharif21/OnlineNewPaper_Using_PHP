<form id=payment name="logIn" action="insertcomment.php" method="post"  onsubmit="return validate_form();" >
	<fieldset>
		<legend>Enter Your Comment(Max: 500 laters)</legend>
		<ol>
			<li>
				<label for=comment>Comment</label>
				<textarea id=comment name=comment rows=5 required></textarea>
			</li>
		</ol>
	</fieldset>	
	<fieldset>
	<button type=submit>Enter</button>
	</fieldset>
	<script type="text/javascript">
	<!--
	
	function validate_form()
	{
		valid = true;
		if((document.logIn.name.value == "") && (document.logIn.password.value == ""))
		{
			if(document.logIn.loginType.value == "")
				alert ( "You did not fill any fields, Try again!");
			else if(document.logIn.name.value == "")
				alert ( "You should select your Login Type!!");	
			valid = false;
		}
		return valid;
	}
	
	//-->
	</script>
		</form>