<?php

/*
$a=20;
$b=10;
echo $sum=$a+$b;
*/

//Function is two types 1) user defined / 2) buildin function
// user defined function

function sum()
{
	$a=10;
	$b=20;
	echo $sum=$a+$b."<br>";
}
sum();
sum();

//=================== Buildin function

$a=25;
$name="Raj nagar";

echo var_dump($a);
echo var_dump($name);
echo strlen($name);


// function with parameter


function sum($a,$b)
{
	echo $sum=$a+$b."<br>";
}
sum(50,10);
sum(30,20);
sum(25,20)




// function with parameter with default value
function sum($a=0,$b=0)
{
	echo $sum=$a+$b."<br>";
}
sum(50,10);  // 60
sum(20);     // 20
sum()        // 0




// return
/
function sum()
{
	return 5+7;
}
echo sum();







?>