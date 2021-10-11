// Understand How Operator Precedence Works
----------------------------------------------------------
// 1. Add two numbers using Arithmetical Operators.
// 2. Find Student passed or failed using conditional Operator.
// 3. Show a number is even or odd using Comparison Operators.
// 4. Check if user has access and login rights using logical Operators.
// 5. Assign a integer value and increment by 10 using Assignment Operator.


<h3>1. Add two numbers using Arithmetical Operators.</h3>

<?php
$number1 = 45;
$number2 = 5;

$addition = ($number1 + $number2);

echo $addition . PHP_EOL . "<br>";
?>

<h3>2. Find Student passed or failed using conditional Operator.</h3>

<?php
// $result = (0) ? "Passed" : " Failed";
// echo "This student is :" . $result . PHP_EOL;

$result = "Passsed";
echo ($result === "Passed") ? "Student is Passed" : "Student is Failed";
?>

<h3>3. Show a number is even or odd using Comparison Operators</h3>

<?php
$number = 10;
$result = $number%2;
echo ( $result = 0 ) ? "Even Number" : "Odd Number";
?>

<h3>4. Check if user has access and login rights using logical Operators</h3>
<?php
$verify = 1;
$login = 1;
echo ($verify and $login) ? "Access for login" : "Not access to login" . PHP_EOL;

?>
<h3>5. Assign a integer value and increment by 10 using Assignment Operator</h3>
<?php
$number = 5;
$number += 10;
echo $number;

?>
