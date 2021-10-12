<!-- // 1) Show Examples using Arithmetical Operator
// 2) Show Examples using Conditional Operator
// 3) Show Examples using Comparison Operator
// 4) Show Examples using Logical Operator
// 5) Show Examples using Assignment Operator
// 6) Show Examples using Increment and Decrement Operator
// 7) Show Examples using Bitwise Operator
// 8) Show Examples using Execution Operator
// 9) Show Examples using Error Control Operator
// 10) Show Examples using Operator Precedence -->

<?php
//---------------------------------------------------------------------
echo"<h1>Assignment Operator</h1>" . PHP_EOL;
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
echo "<h1>Conditional Operator</h1>" . PHP_EOL;

//---------------------------------------------------------------------
$attendence = (true) ? "<h4>Attend on meeting</h4>" : "<h2>Absence on meeting</h2>";
echo $attendence;

$attendence = (false) ? "<h4>Attend on meeting</h4>" : "<h2>Absence on meeting</h2>";
echo $attendence;

$attendence = (1) ? "<h4>Attend on meeting</h4>" : "<h2>Absence on meeting</h2>";
echo $attendence;

$attendence = (0) ? "<h4>Attend on meeting</h4>" : "<h2>Absence on meeting</h2>";
echo $attendence;

//---------------------------------------------------------------------
echo"<h1>Comparision Operator</h1>" . PHP_EOL;
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
echo "<h1>Logical Operator</h1>" . PHP_EOL;
//---------------------------------------------------------------------

$result = "Passed";
$mathExam = true;
$scienceExam = true;
echo ($mathExam or $scienceExam) ? "Faisal passed in the exam" : "Faisal Failed in the exam";

//---------------------------------------------------------------------
echo "<h1>Assignment Operator</h1>" . PHP_EOL;
//---------------------------------------------------------------------
//Use += Operator
$counter = 3;
$counter = $counter + 1;
// $counter += $counter;
echo $counter .PHP_EOL;

$marks = 100;
$name = "Faisal";
$marks += 100;
echo $marks .PHP_EOL;

$marks = 100;
$name = "Faisal";
$marks -= 50;
echo $marks .PHP_EOL;

$marks = 10;
$name = "Faisal";
$marks *= 5;
echo $marks .PHP_EOL;

$marks = 10;
$name = "Faisal";
$marks .= 5;
echo $marks .PHP_EOL;

$marks = 10;
$name = "Faisal";
$marks /= 5;
echo $marks .PHP_EOL;

$marks = 10;
$name = "Faisal";
$marks %= 6;
echo $marks .PHP_EOL;

$marks = 10;
$name = "Faisal";
$marks **= 6;
echo $marks .PHP_EOL;

//---------------------------------------------------------------------
echo "<h1>Increment and Decrement Operator</h1>" . PHP_EOL;
//---------------------------------------------------------------------

$number = 10;

//Post increment

$number++;
$number++;
$number++;
echo $number .PHP_EOL;

$number--;
$number--;
echo $number . PHP_EOL;

// Pre Increment

--$number;
--$number;
echo $number . PHP_EOL;

++$number;
++$number;
echo $number . PHP_EOL;




//---------------------------------------------------------------------
echo "<h1>Bitwise Operator</h1>" . PHP_EOL;
//---------------------------------------------------------------------
$firstNumber = 2;
$secondNumber = 3;

echo $firstNumber & $secondNumber;
echo "<br>";
echo $firstNumber | $secondNumber;
echo "<br>";
echo $firstNumber ^ $secondNumber;
echo "<br>";
echo ~$firstNumber;
echo "<br>";
echo $firstNumber << $secondNumber;
echo "<br>";
echo $firstNumber >> $secondNumber;
echo "<br>";

//---------------------------------------------------------------------
echo "<h1>Execution Operator</h1>" . PHP_EOL;
//---------------------------------------------------------------------

echo `dir *.php`;

//---------------------------------------------------------------------
echo "<h1>Error Control Operator</h1>" . PHP_EOL;
//---------------------------------------------------------------------

$myNumber = 1 / 0;
echo $myNumber;
print_r(error_get_last());

//---------------------------------------------------------------------
echo "<h1>Operator Precedence</h1>" . PHP_EOL;
//---------------------------------------------------------------------
$x = 10;
$y = 20;
$z = 30;
echo $x + $y * $z;
echo "<br>";
echo ($x+$y) * $z;


?>