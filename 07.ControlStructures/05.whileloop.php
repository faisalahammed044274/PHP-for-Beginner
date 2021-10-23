<?php

//Print Even Numbers from 1 to 10.
/*
while (condition){
    //Code to be executed
}
*/

// Sample 1 - recommended Way
$value = 1;
while ($value <= 10){ //condition
    echo $value . PHP_EOL;
    $value++; //increment
}


// for ($value = 1; $value <= 10; $value++) {

//     $result = $value;
//     if ($result > 0) {
//         echo '1. Odd Number' . $value . PHP_EOL;
//     }
// }

$value = 1;
while($value <= 100){
    $result = $value % 2;
    if($result > 0){
        echo 'Odd Number' . $value . PHP_EOL;
    }
    $value++;
}


// while(true){
//     echo $value++ . PHP_EOL;
// }

?>