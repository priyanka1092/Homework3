<?php

$obj=new main();

$strExplode="This*is*explode*function";

$obj->echoFunction();
$obj->chrFunction();
$obj->explodeFunction(strExplode);

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

	public function explodeFunction(strExplode)
	{
		echo '<h3> This is Explode Function: </h3>';
		echo explode("*", strExplode);
		echo '<hr>';
	}



}

?>