<?php

// Indexed Arrays are sequence array of element with integer index numbers.
// Mostly it is in Sequence.
// Index starts with 0
// New element get the index of highest index +1 number.
// You can always break the sequence and add element to future index.

$arr = [1,3, 5, 7 ,9];
var_dump($arr) . PHP_EOL;

$arr[100] = 100;

$arr[] = 43;
$arr[] = 101;

var_dump($arr) . PHP_EOL;
var_dump($arr);
$arr = ["Mon","Tues","Wed","Thurs","Fri", "Sat" ,"Sun"];
var_dump($arr);

?>