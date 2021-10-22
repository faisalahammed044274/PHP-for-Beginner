<?php

//Print Odd Numbers from 1 to 10.

/*
for(initialization; condition; increment) {
    //code to be executed
}
*/

//Sample 1 - Recommend Way

for ($value = 2; $value<=10;$value++){

    $result = $value;
    if ($result > 0) {
        echo 'Odd Number' . $value . PHP_EOL;
    }
}
echo '<br>';

//Sample 2

$value = 1;
for (; $value <= 10; $value++) {

    $result = $value % 2;
    if ($result>0){
        echo 'Odd Number' . $value . PHP_EOL;
    }
}

// Sample 3

$value = 1;
for(; $value <= 10;)




?>