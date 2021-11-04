<?php
//Define and Work with Empty Arrays
//Remember [] means empty array


//Empty Arrays
$arr = [];

echo count($arr) . PHP_EOL;
var_dump($arr) . PHP_EOL;
print_r($arr) . PHP_EOL;

if (empty($arr) ) {
    echo "Array is Empty" . PHP_EOL;
}
var_dump($arr) . PHP_EOL;
$arr = 10; //Converted Array to Integers
var_dump($arr) . PHP_EOL;

$arr = [10];
var_dump($arr);

$arr [0] = [10];
//Index 0 holds an array which has 10 as first value
var_dump($arr);

//Reset the array
$arr = [];
var_dump($arr);
if (empty ($arr) ) {
    echo "Array is Empty" . PHP_EOL;
}

$arr = [ [] ]; //Very Important to understand this concept of arrays.
var_dump($arr);


$arr = []; //Remember this square bracket is empty arrays
?>