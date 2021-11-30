<?php
//Calling Function from the Variable Value

function add($a, $b): int{
    return $a + $b;
} 

function sub($a , $b): int {
    return $a - $b;
}

function multiply($a, $b) : int{
    return $a * $b;
}

function divide($a , $b) : int{
    return $a / $b;
}

$addFunction = "add";
echo " Add Result : " . $addFunction(1,2) . PHP_EOL . "<br>";

$subFunction = "sub";
echo "Subtraction Result : " . $subFunction(10, 3) . PHP_EOL . "<br>";

$MultiplyFunction = "multiply";
echo "Multiply Result :" . $MultiplyFunction(3,3) . PHP_EOL . "<br>";

$divisionFunction = "divide";
echo "Division Result :" . $divisionFunction(15,5) . PHP_EOL . "<br>";

?>