<?php

/*

collections of values

$name="Raj"    

$nemeric=array("a","b","c");  // values    index 0 $associate=array("0"=>"a","1"=>"b","2"=>"c");
 
$associate=array("raj"=>"a","2"=>"b","3"=>"c");  // custome key & values

$multidemetional=array("a","b"=>array("p","q"),"c");

*/
$name="a";
$name1="b";
$name2="c";

$arr=array("a","b","c");

print_r($arr);

echo "<h1>" . $arr[0] . "</h1>";
echo "<h1>" . $arr[1] . "</h1>";
echo "<h1>" . $arr[2] . "</h1>";

foreach($arr as $string)
{
	echo "<h1>" . $string . "</h1>";
}
?>