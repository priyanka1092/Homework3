<?php

$obj= new main();
$text= "Hello World";
$obj->printthis($text);


$array = array(1,2,3,4,5,6,7);


$array2= array("WSD", "UXD" ,"SAD");
$obj-> countArray($array2);

$array3= array("Semester1", "Semester2", "Semester3", "Semester2");
$obj-> arrayPush($array3);

$array4= array("BPI", "UXD", "SAD");

$obj-> arrayDifference($array2, $array4);
 
$obj->padArray($array3);
/*$obj->arrayValues($array4);*/

$input_array = array("First" => 1, "Second" => 4);
$obj->changeCase($input_array);


$array5 = array(10,20);
 $array6 = array(30,40,50);
 $obj->mergeArray($array5,$array6);
 $obj->arrayProduct($array5);
 $obj->shiftarray($array5);
 $obj->arrayunique($array3);


class main 
{
public function __construct() 
{
	echo '<h2> Web Systems Development </h2>'; 
	echo '<br>';
}


public function printthis($text)
{
  echo'<h2> Print Function </h2>';
  print_r($text);
  echo '<hr>';
}

public function mergeArray($array5, $array6)
  {
    echo '<h2> Merge Array Function </h2>';
    print_r(array_merge($array5, $array6));
    

  }

public function countArray($array2)
  {
    echo '<h2> Count Array Function </h2>';
     print_r(count($array2));
     echo '<hr>';
  }
 
public function arrayProduct($array5) 
{
echo '<h2> Product Array Function </h2>';
     
     echo "product = " . array_product($array5) . "\n";
     echo '<hr>';

}
 
  public function arrayPush($array3) 
{
echo '<h2> Product Array Function </h2>';
     print_r(array_push($array3,"WSD"));
     echo '<hr>';

}

public function arrayDifference($array2, $array4)
{
echo '<h2> Difference Array Function </h2>';
     print_r(array_diff($array2, $array4));
     echo '<hr>';
}

public function shiftarray($array5)
{
 echo '<h2> Shift Array Function </h2>';
 print_r(array_shift($array5));
 echo '<hr>';

}
public function changeCase($input_array)
{
 echo '<h2> Change case Array Function </h2>';
 print_r(array_change_key_case($input_array));
 echo '<hr>';
}


public function padArray($array3)
  {
     echo '<h1> Array Pad Function</h1>';
     echo '<h4>Before padding</h4>';
     print_r($array3);
     echo '<h4>after padding</h4>';
     print_r(array_pad($array3, 3, 2));
     echo '<hr>';
  }

public function arrayunique($array3)
  {
     echo '<h1> Array Unique Function</h1>';
     echo '<h3>Original Array </h3>';
     print_r($array3);
     echo '<h3> Unique Array </h3>';
     print_r(array_unique($array3));
     echo '<hr>';
  }



}

?>



