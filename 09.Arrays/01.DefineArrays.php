<?php
//Learn how to define and use Arrays.
//ref : https://www.php.net/manual/en/language.types.array.php

$arr = [1, "2", 3.3, 4];

//function to print array
var_dump($arr);

//Human Readable
print_r($arr);

// echo $arr; //Error ||Notice: Array to string conversion

//Access and Print Arrays
echo $arr[0] . PHP_EOL;
echo $arr[1] . PHP_EOL;
echo $arr[2] . PHP_EOL;
echo $arr[3] . PHP_EOL;

echo "$arr[0]" . PHP_EOL;
echo "$arr[1]" . PHP_EOL;
echo "$arr[2]" . PHP_EOL;
echo "$arr[3]" . PHP_EOL;
//=====================================================================

//$arr is Array Variable
//$arr[0] is a Array Element
//0 is a Index of Array
//Array index starts with 0 or not 1
// Array can store any type of value -
//string, Integer, Double, or Boolean.
//Array has a length based on the number of the elements it has.
//You can have array inside array -  more about it in the next lecture.
//Usercase : collection of variables together.

//=====================================================================

echo "Array length : " . count($arr) . PHP_EOL . '<br>';

// Loop thru the Array using for loop

for($count = 0; $count < count($arr); $couunt++) {
    echo $arr[$count] . PHP_EOL;
    echo "$arr[$count]" . PHP_EOL;
}

//Access Array element inside the String using Constant
const ARRAY_ELEMENT = 1;
echo "{$arr[ARRAY_ELEMENT]}" . PHP_EOL . "<br>";

//Change Array Element
print_r($arr) . PHP_EOL;
echo "<br>";
$arr[0] = 10;
$arr[1] = 11;
$arr[2] = 12;
$arr[3] = 13;
$arr[4] = 14;
print_r($arr) . PHP_EOL;

//Change the Data Types
var_dump($arr);
$arr[0] = "This is a String";
$arr[1] = true;
$arr[3] = 5.6;
$arr[4] = 98;
var_dump($arr);

//Store any data types in arrays
// see the indentation of array
$arr1 = [
    1,
    "String",
    false,
    23.6,
];

print_r($arr1);
echo "<br>";
var_dump($arr1);
