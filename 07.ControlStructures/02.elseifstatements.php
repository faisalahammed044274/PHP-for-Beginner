<?php
//Check for Odd or Even Numbers and Print it.
//Using elseif

$input_number = 10;
$result = $input_number % 2 ;
if($result){
    echo 'Odd Number' . PHP_EOL;
}elseif(!$result){
    echo 'Even Number' . PHP_EOL;
}

/*
if(condition){
    //Code to be executed if conditional is true
} elseif(condition2){
    //Code to be executed if the conditional is false and conditional 2 is true
}else{
    //Code to be executed if both conditional and condition2 are false
}
*/
echo "<br>";
//Check if the input_number is greater than 10

if($input_number > 10){
    echo "Number is greater than 10" . PHP_EOL;
} elseif ($input_number == 10){
    echo "Number is equal to 10" . PHP_EOL;
}else{
    echo "Number is less than 10" . PHP_EOL;
}

?>