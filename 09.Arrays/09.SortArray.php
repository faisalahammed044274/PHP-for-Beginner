<?php

// 6 functions to sort and array
//   1) Sort Indexed Arrays - Ascending
//   2) Sort Indexed Arrays - Descending
//   3) Sort Associative Arrays - Ascending - By Values
//   4) Sort Associative Arrays - Descending - By Values
//   5) Sort Associative Arrays - Ascending - By Key
//   6) Sort Associative Arrays - Descending - By Key

//--------------------------
//sort() and rsort()
//Indexed Array
//--------------------------

$arr = [5, 3 ,6, 0, 2, 4];
print_r($arr);
sort($arr);
rsort($arr);
print_r($arr);

//--------------------------
//asort() and arsort()
//Associative array
//--------------------------

$arr1 = ["3"=>"Jhon" , "1" => "Smith", "2" => "Arya", "4" => "Doe"];
print_r ($arr1);
arsort($arr1);
print_r ($arr1);

//ksort and krsort()
//Associative array

print_r($arr1);
ksort($arr1);
print_r($arr1);
arsort($arr1);
print_r($arr1);

?>