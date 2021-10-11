<?php

// 1) Decrement a number using Decrement Operator.
// 2) Show the negative of 5 using Bitwise Operator.
// 3) Execute a dos or linux command using Execution Operator.
// 4) Raise and Error and control it using Execution Operators.
// 5) Show an example of Operator Precedence Operator.
echo "<h3>1. Decrement a number using Decrement Operator.</h3>";
$number = 15 / 3;
$number--;
print_r(error_get_last());
echo $number;
echo '<br>';

echo "<h3>2. Show the negative of 5 using Bitwise Operator.</h3>";

echo "<h3>3. Execute a dos or linux command using Execution Operator.</h3>";

echo `dir`;

echo "<h3>4. Raise and Error and control it using Execution Operators.</h3>";

$value = 1 / 0;
echo $value;
print_r(error_get_last());

echo "<h3>5. Show an example of Operator Precedence Operator.</h3>";
 
$a = 3;
$b =4;
$c = 5;
echo $a + $b * $c . PHP_EOL;
echo "<br>";
echo $a + $b / $c . PHP_EOL; 
echo "<br>";
// * has precedence for that it works first and then + works thats why it 23.
// when we use parentheses ($a + $b) * $c for adding the values then it works first and after that multiply works.
echo ($a + $b) * $c  . PHP_EOL;


?>