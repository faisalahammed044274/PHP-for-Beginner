<?php
//          Arithmetic Operators
//      Example 	           Name 	        Result
//---------------------------------------------------------------------
//      +$a 	            Identity 	        Conversion of $a to int or float as appropriate.
//      -$a 	            Negation 	        Opposite of $a.
//      $a + $b 	        Addition 	        Sum of $a and $b.
//      $a - $b 	        Subtraction 	    Difference of $a and $b.
//      $a * $b 	        Multiplication 	    Product of $a and $b.
//      $a / $b 	        Division 	        Quotient of $a and $b.
//      $a % $b 	        Modulo 	            Remainder of $a divided by $b.
//      $a ** $b 	        Exponentiation 	    Result of raising $a to the $b'th power.

//  https://www.php.net/manual/en/language.operators.arithmetic.php

//--------Sample 1--------ArithmeticalAddOperators
echo "<br>";
echo "1) Calculate the Student Total Marks for 3 Subjects";
echo "<br>";
$maths = 70;
$science = 30;
$english = 80;
$totalMarks = $maths + $science +$english;
echo "Student Total Marks : $totalMarks for Maths($maths) + Science($science) + English($english)" . "<br>" . PHP_EOL;

//--------Sample 2--------ArithmeticalAddOperators
echo "<br>";
echo "2) Display the total without a $totalMarks Variable";
echo "<br>";
$maths = 70;
$science = 30;
$english = 80;
echo "Student Total Marks :". ($maths + $science +$english) ."for Maths($maths) + Science($science) + English($english)" . "<br>" . PHP_EOL;

//--------Sample 3--------ArithmeticalSubtractOperators
echo "<br>";
echo "3) Find the difference between marks achieved and total marks";
echo "<br>";
$totalSubjects = 300;
$totalDifference = $totalSubjects - $totalMarks;
echo "Difference between total marks and achived marks :" . $totalDifference . "<br>";

//--------Sample 4--------ArithmeticalMultiplyOperators
echo "<br>";
echo "4) Calculate the area using length and breath";
echo "<br>";
$length = 10;
$breath = 20;
$area = $length * $breath;
echo $area . PHP_EOL;

//--------Sample 5--------ArithmeticalDivideOperators
echo "<br>";
echo "5) Calculate the Percentage of Overall Scored Marks";
echo "<br>";

$percentage = ($totalMarks / $totalSubjects) * 100;
echo "Percentage Scored : $percentage%" . PHP_EOL ."<br>";

//--------Sample 6--------ArithmeticalModulusOperators
echo "<br>";
echo "6) Check if the remainder is 0 or 1";
echo "<br>";

$a = 100 % 6;
echo $a . PHP_EOL;
echo "<br>";

$b = 101 % 5;
echo $b . PHP_EOL;
echo "<br>";

$a = 105 % 5;
echo $a . PHP_EOL;
echo "<br>";

$b = 106 % 5;
echo $b . PHP_EOL;


//--------Sample 7---------ArithmeticalExponentOperators
echo "<br>";
echo "7) Use Multiplication Operator || Exponentiation";
echo "<br>";
$a = 10;
$b = 2;
$result = ($a ** 2) * ($b ** 2);
//($a * $b) * ($b * $b);
echo $result . PHP_EOL;

?>