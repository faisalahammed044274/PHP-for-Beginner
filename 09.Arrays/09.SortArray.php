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
// echo "sort and rsort" . PHP_EOL;

// $arr = [5, 3 ,6, 0, 2, 4];
// print_r($arr);
// sort($arr); //Acending process
// rsort($arr); //Decending process
// print_r($arr);

//--------------------------
//asort() and arsort()
//Associative array
//--------------------------
// echo "asort and arsort" . PHP_EOL;

$arr1 = ["3"=>"Jhon" , "1" => "Smith", "2" => "Arya", "4" => "Doe"];
// print_r ($arr1);
//asort($arr1); //Acending sort by value
// arsort($arr1); //Decending sort by value
// print_r ($arr1);

// //ksort and krsort()
// //Associative array
echo "ksort and krsort" . PHP_EOL;

// print_r($arr1);
ksort($arr1); // Acending sorted by key
print_r($arr1) . PHP_EOL;
krsort($arr1); // Decending sorted by key
print_r($arr1);

?>