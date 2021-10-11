<?php

//Understand How Operator Precedence Works

/* 
* Unary - !, ++, --
* Multiplication - * / %
* Add/Substract - +, -
* Relational - <, >, <=, >=
* Equality - ==, !=
* Logical AND - &&
* Logical OR - ||
* Conditional - ? :
* Assignment - =, +=, -=, *=, /=, %= 
*/

$val = 10;
echo $val++;
$counter = $val++;
echo $counter;
echo $val;

//Guess the output
$val = 5 * 2 +5;
echo $value;

//Classic - Assignment has higher precedence over and 
$result1 = true && false;
$result2 = true and false; //DONT GET (and false) PART

echo ($result1) ? "true" : "false";
echo PHP_EOL;
echo ($result2) ? "true" : "false";
echo PHP_EOL;

//https://www.php.net/manual/en/language.operators.precedence.php

?>
