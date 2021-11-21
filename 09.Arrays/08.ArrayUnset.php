<?php
// Remove / Delete Elements from the Array Safely.


// $arr = [1, 2, 3, 4, 5];
// print_r($arr);

// print "<br>";

// unset($arr[6]);
// print_r($arr);
// echo '<br>';
// $arr[]  = 5;
// print_r($arr);
// echo '<br>';

$arr1 = ["first" => 1, 2, 3, 4, "last" => 5,"final"=>67];
print_r($arr1) . PHP_EOL;

unset($arr1["last"]);
print_r($arr1) . PHP_EOL;

$arr1["last"] = 5;
print_r($arr1) . PHP_EOL;

$arr1[] = 6;
print_r($arr1);


?>