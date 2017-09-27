<?php

$obj=new main();

$obj->echoFunction();
$obj->chrFunction();

$strFindChar="";

class main
{

	// public function __construct() 
	// {
	// 	echo '<h2> Web Systems Development </h2>'; 
	// 	echo '<br>';
	// }

	public function echoFunction()
	{
		echo '<h2> This is echo function </h2>';
		echo '<hr>';
	}

	public function chrFunction()
	{
		echo '<h3> Using chr String function: </h3>';
		echo chr(55) . "<br>";
		echo chr(054) ;
		echo '<hr>';
	}	


}

?>