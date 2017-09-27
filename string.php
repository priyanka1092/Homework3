<?php

$obj=new main();

$strExplode = "This*is*explode*function";
$strChunk = "This is chunk split function";

$obj->echoFunction();
$obj->chrFunction();
$obj->explodeFunction($strExplode);
$obj->chunkSplitFunction($strChunk);


class main
{

	// public function __construct() 
	// {
	// 	echo '<h2> Web Systems Development </h2>'; 
	// 	echo '<br>';
	// }

	public function echoFunction()
	{
		echo '<h2> echo function </h2>';
		echo '<hr>';
	}

	public function chrFunction()
	{
		echo '<h3> Using chr String function: </h3>';
		echo chr(55) . "<br>";
		echo chr(054) ;
		echo '<hr>';
	}	

	public function explodeFunction($strExplode)
	{
		echo '<h3> Explode Function: </h3>';
		echo '<h4> Before Explode: </h4>';
		print_r($strExplode);
		echo ('<br><br> <h4> After Explode: </h4>');
		print_r  (explode("*", $strExplode));
		echo '<hr>';
	}

	public function chunkSplitFunction($strChunk)
	{
		echo '<h3> Chunk Split Function: </h3>';
		echo '<h4> Before Chuck Split: </h4>';
		print_r($strChunk);
		echo ('<h4> After Chunk Split: </h4>');
		echo chunk_split($strChunk,2,"*");
		echo '<hr>';
	}

}

?>