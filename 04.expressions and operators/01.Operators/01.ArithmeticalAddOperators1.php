<?php

//--------Sample 1--------ArithmeticalAddOperators
// 1) Calculate the Student Total Marks for 3 Subjects

$maths = 70;
$science = 30;
$english = 80;
$totalMarks = $maths + $science +$english;
echo "Student Total Marks : $totalMarks for Maths($maths) + Science($science) + English($english)" . "<br>" . PHP_EOL;

//--------Sample 2--------ArithmeticalAddOperators
// 2) Display the total without a $totalMarks Variable
echo "<br>";
$maths = 70;
$science = 30;
$english = 80;
echo "Student Total Marks :". ($maths + $science +$english) ."for Maths($maths) + Science($science) + English($english)" . "<br>" . PHP_EOL;

//--------Sample 3--------ArithmeticalSubtractOperators
// 3) Find the difference between marks achieved and total marks
$totalSubjects = 300;
$totalDifference = $totalSubjects - $totalMarks;
echo "Difference between total marks and achived marks :" . $totalDifference . "<br>";

//--------Sample 4--------ArithmeticalMultiplyOperators
// 4) Calculate the area using length and breath
$length = 10;
$breath = 20;
$area = $length * $breath;
echo $area . PHP_EOL;

//--------Sample 5--------ArithmeticalDivideOperators
// 5) Calculate the Percentage of Overall Scored Marks

$percentage = ($totalMarks / $totalSubjects) * 100;
echo "Percentage Scored : $percentage%" . PHP_EOL ."<br>";

//--------Sample 6--------ArithmeticalModulusOperators
// 6) Check if the remainder is 0 or 1

$a = 100 % 6;
echo $a . PHP_EOL;

$b = 101 % 5;
echo $b . PHP_EOL;

$a = 105 % 5;
echo $a . PHP_EOL;

$b = 106 % 5;
echo $b . PHP_EOL;


//--------Sample 7---------ArithmeticalExponentOperators
// 7) Use Multiplication Operator || Exponentiation
echo "<br>";
$a = 10;
$b = 2;
$result = ($a ** 2) * ($b ** 2);
//($a * $b) * ($b * $b);
echo $result . PHP_EOL;

?>