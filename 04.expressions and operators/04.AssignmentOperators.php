<?php

// 3) Learn to Use /= and Use %=

//------------------------------------------------------------
// Sample 1 Addition + String Concatenation
//------------------------------------------------------------
// 1) Assign value 10 to variable $marks and Use += operator
$marks = 10;

//Assign any name String to variable $name
$name = "Faisal, Setu";

//Use += Operator
$counter = 1;
$counter = $counter + 1;
$counter += $counter;
echo $counter .PHP_EOL;

$marks += 10;
echo $marks .PHP_EOL;

echo $name.PHP_EOL;
$name1 = "Ahammed";
$name1 .= ",";
$name1 .= "Setu";
echo $name1 . PHP_EOL;

//------------------------------------------------------------
// Sample 2 Substraction + Multiplication
//------------------------------------------------------------

// 2) Learn How to Use -= and Use *= Operators

// Use -= Operator
$counter = 100;
$counter = $counter - 5;
$counter -= $counter;
echo $counter . PHP_EOL;

//Use *= Operator
$square = 15;
$square *= $square;
echo $square . PHP_EOL;

//------------------------------------------------------------
// Sample 3  division + Reminder/module
//------------------------------------------------------------

// Use /=
$devideby2  = 50;
$devideby2 /=2;
echo $devideby2 . PHP_EOL;

//Use %=
$reminder = 50;
$reminder %= 3;
echo $reminder . PHP_EOL; 



?>