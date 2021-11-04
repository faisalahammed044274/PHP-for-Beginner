<?php
// Array of Elements with different data types - Mixed Arrays

//if index is not specifid, PHP will use the increment
// of the largest previously used integer key.


$arr [0] = 535777;
$arr [2] = "String";
$arr [4] = true;
$arr [10] = 14.5;

    //Adding new Values to Array

$arr [] = "New String 1";
$arr [] = "New String 2";

//Output
var_dump($arr);


$arr[0] = "Previously 1 and Now Changed value to string";
foreach ($arr as $value){
    echo $value . PHP_EOL . "<br>";
    // var_dump($value);

    //curious to know what is inside the index 1
    echo empty($arr[1]) . PHP_EOL;
}
























?>