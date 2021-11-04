<?php

//Array inside an array is called as Multi Dimention array. 
//Array holding one or multiple arrays

//Single Dimention
// $arr = [0, 1, 2, 3, 4, 5];
// var_dump($arr);

//Single Dimention - Associative Arrays
// $arr1 = [
//     "Jhon" => "jhon@gmail.com",
//     "Jenny" => "jenny@example.com",
//     "Jame" => "jame@gmail.com"
// ];
// var_dump($arr1);

//Multi Dimentional with Indexed
$arr2 = [
    [0,1,2,3,4,5],
    [6,7,8],
    [9, 10, 11, 12, 13,14, 15],
];

var_dump($arr2);

// foreach($arr2 as $singleArr) {
//     var_dump($singleArr);
// }

foreach($arr2 as $singleArr){
    echo "[";
    foreach ($singleArr as $values){
        echo $values . ", ";
    }

    echo "]" . PHP_EOL;
}
?>