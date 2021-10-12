<?php
// Understand how to define and work with Integers

/*

* Integer are whole numbers

* Integer values doesnot have decimal

* Integers could have + or - values

* Integer Variables can hold Octal (base-8),
Hexadecimal(base 16) and binary (base 2) Values

*Every Platform will have limited integer number to be defined.

*Constant PHP_INT_SIZE can be used to find out the integer limit.

*/

//Define and Print Integer Variable

$marks = 87;
echo $marks . PHP_EOL;
echo "<br>";
//HexaDecimal variables
$marks = 0xA9C0B95B4; //45567677876
//convert decimal to hexadecimal then it
// shows and for hexadecimal we have to use 0x.
echo $marks . PHP_EOL;
echo "<br>";
//String to Integer Addition
$marks = 10;
$total = "1000" + $marks;
echo $total . PHP_EOL;

//Negetive Numbers
$finalMarks = 5 - 10;
echo $finalMarks . PHP_EOL;

$finalMarks = -5 + 5;
echo $finalMarks . PHP_EOL;
echo "<br>";
//Windows

echo PHP_INT_SIZE . PHP_EOL;

echo PHP_INT_MAX . PHP_EOL;

?>