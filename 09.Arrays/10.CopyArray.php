<?php
// How to copy arrays from one array variable to another one.

// Sample 1
$arr = [0, 1, 2, 3, 4, 5];
$arr1 = $arr;
var_dump($arr1);

//Sample 2 
foreach($arr as $values){
    $arr2[] = $values;
}
var_dump($arr2);
?>