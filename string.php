<?php

$obj=new main();

$strExplode = "This*is*explode*function";
$strChunk = "This is chunk split function";
$strChop = "This is chop function";
$strCountChar = "Using Count Char Function";

$obj->echoFunction();
$obj->chrFunction();
$obj->explodeFunction($strExplode);
$obj->chunkSplitFunction($strChunk);
$obj->chopFunction($strChop);	
$obj->countCharFunction($strCountChar);
$obj->strLengthFunction($strCountChar);
$obj->stringLTrimFunction($strCountChar);


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

	public function chopFunction($strChop)
	{
		echo '<h3> Chop Function: </h3>';
		echo '<h4> Before Chop: </h4>';
		print_r($strChop);
		echo ('<h4> After Chop: </h4>');
		echo chop($strChop,"function");
		echo '<hr>';
	}

	public function countCharFunction($strCountChar)
	{
		echo '<h3> Count Char Function: </h3>';
		echo count_chars($strCountChar,3);
		// echo count_chars($strCountChar,4);
		echo '<hr>';
	}

	public function strLengthFunction($str)
	{
		echo '<h3> String Length Function: </h3>';
		echo strlen($str);
		echo '<hr>';
	}

	public function stringLTrimFunction($str)
	{
		echo '<h3> String Trim Function: </h3>';
		echo '<h4> Before Trim: </h4>';
		print_r($str);
		echo ('<h4> After Trim: </h4>');
		echo ltrim($str,"Using Co");
		echo '<hr>';
	}
}

?>