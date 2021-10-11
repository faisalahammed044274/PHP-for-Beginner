<?php

// 1) Show Examples using Arithmetical Operator
// 2) Show Examples using Conditional Operator
// 3) Show Examples using Comparison Operator
// 4) Show Examples using Logical Operator
// 5) Show Examples using Assignment Operator
// 6) Show Examples using Increment and Decrement Operator
// 7) Show Examples using Bitwise Operator
// 8) Show Examples using Execution Operator
// 9) Show Examples using Error Control Operator
// 10) Show Examples using Operator Precedence

//---------------------------------------------------------------------
//      Assignment Operator
//---------------------------------------------------------------------


$a = 3;
$b = 3;

echo +$a; //Identity
echo "<br>";
echo -$a; //Negation
echo "<br>";
$addition = $a + $b; //Addition
echo $addition;
echo "<br>";
$substraction = $a - $b;
echo $substraction;
echo "<br>";
$multiplication = $a * $b;
echo $multiplication;
echo "<br>";
$division = $a / $b;
echo $division;
echo "<br>";
$modulo = $a % $b;
echo $modulo;
echo "<br>";
$exponentiation = $a ** $b;
echo $exponentiation;
echo "<br>";
//---------------------------------------------------------------------
//      Conditional Operator
//---------------------------------------------------------------------
$attendence = (true) ? "<h4>Attend on meeting</h4>" : "<h2>Absence on meeting</h2>";
echo $attendence;

$attendence = (false) ? "<h3>Attend on meeting</h3>" : "<h2>Absence on meeting</h2>";
echo $attendence;

$attendence = (1) ? "<h3>Attend on meeting</h3>" : "<h2>Absence on meeting</h2>";
echo $attendence;

$attendence = (0) ? "<h3>Attend on meeting</h3>" : "<h2>Absence on meeting</h2>";
echo $attendence;

//---------------------------------------------------------------------
//      Comparision Operator
//---------------------------------------------------------------------

$a = 3;
$b = 3;

echo "<h3>Equal</h3>";
echo "<br>";

$equal = $a == $b;
echo $equal;
echo "<br>";

echo "<h3>Identical</h3>";
echo "<br>";

$identical = ($a === $b);
echo $identical;
echo "<br>";

echo "<h3>Not Equal </h3>";
echo "<br>";

$notEqual = ($a != $b);
echo $notEqual;
echo "<br>";

echo "<h3>Not Identical - 1</h3>";
echo "<br>";

$notEqualTwo = ($a <> $b);
echo $notEqualTwo;
echo "<br>";

echo "<h3>Not Identical -2</h3>";
echo "<br>";

$notIdentical = ($a !== $b);
echo $notIdentical;
echo "<br>";

echo "<h3>Greater Than</h3>";
echo "<br>";

$greaterThan = ($a > $b);
echo $greaterThan;
echo "<br>";

echo "<h3>Less Than</h3>";
echo "<br>";

$lessThan = ($a < $b);
echo $lessThan;
echo "<br>";

echo "<h3>Greater than or equal to</h3>";
echo "<br>";

$greaterThanOrEqualTo = ($a >= $b);
echo $greaterThanOrEqualTo;
echo "<br>";

echo "<h3>Less than or equal to</h3>";
echo "<br>";

$lessThanOrEqualTo = ($a <= $b);
echo $lessThanOrEqualTo;
echo "<br>"; 

echo "<h3>Spaceship</h3>";
echo "<br>";

$spaceship = ($a <=> $b);
echo $spaceship;
echo "<br>";


//---------------------------------------------------------------------
//      Logical Operator
//---------------------------------------------------------------------

?>