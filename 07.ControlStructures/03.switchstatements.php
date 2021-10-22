<?php

//Check for Odd or Even Numbers and Print it.
//Using elseif
/*
$input_number = 10;
$result = $input_number % 2 ;
if($result){
echo 'Odd Number' . PHP_EOL;
}elseif(!$result){
echo 'Even Number' . PHP_EOL;
}
 */
$input_number = 9;

switch (true) {
    case 1:
        echo "Odd Number" . PHP_EOL;
        break;
    case 0:
        echo "Even Number" . PHP_EOL;
        break;

    default:
        echo "Invalid Input" . PHP_EOL;
}

//Check if the input_number is greater than 10
/*
if($input_number > 10){
echo "Number is greater than 10" . PHP_EOL;
} elseif ($input_number == 10){
echo "Number is equal to 10" . PHP_EOL;
}else{
echo "Number is less than 10" . PHP_EOL;
}
 */
echo "<br>";

switch (true) {
    case $input_number > 10:
        echo "Number is greater than 10" . PHP_EOL;
        break;
    case $input_number == 10:
        echo "Number is equal to 10" . PHP_EOL;
        break;
    default:
        echo "Number is less than 10" . PHP_EOL;
}

echo "<br>";
// String based Condition

$weekly = "Friday";

switch ($weekly) {
    case "Monday":
        echo "MONDAY" . PHP_EOL;
        break;
    case "Friday":
        echo "FRIDAY" . PHP_EOL;
        break;
    default:
        echo "Others" . PHP_EOL;
}
