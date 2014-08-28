<?php
class page {
	var $bgcolor;
	var $textcolor;
	function page() 
	{
		echo 'no arguments';
	}
	function page1() 
	{
		$this->bgcolor = "white";
		$this->textcolor = "black";
		print "page1--Created default page";
	}
	function page2($bgcolor) 
	{
		$this->bgcolor = $bgcolor;
		$this->textcolor = "black";
		print "page2--Created custom page";
	}
}

$html_page = new page();
$h2 = new page();
$h2.page1();
$h2.page2("red");
?>