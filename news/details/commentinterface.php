<form id=payment name="logIn" action="insertcomment.php" method="post"  onsubmit="return validate_form();" >
	<fieldset><?php echo "Hi! <b>Mr. ".$_SESSION['UName']."</b> Enter Your Feelings About The News"; ?>
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
		if(document.logIn.comment.value == "")
		{
			alert ( "Comment is required, Try again!");
			valid = false;
		}
		return valid;
	}
	
	//-->
	</script>
		</form>