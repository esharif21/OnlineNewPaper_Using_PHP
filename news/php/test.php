<?php
class Page
{
	var $bgcolor;
	var $textcolor;
	function Page() 
	{
		echo ' no args ';
	}
	function fun()
	{
		echo ' Fun unlimited ';
	}
}
$html= new Page();
$html.fun();
?>