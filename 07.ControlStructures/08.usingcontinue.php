<?php

//Print Even Numbers using While Infinite Loop and Break after 10 numbers.

//continue will skip the next line and go to next loop


$value = 1;
while(true){
    $result = $value % 2;

    if ($result == 1){
        $value++;
        continue; 
        //continue statement skips next lines and  back to the
        // while loop then it'll start executing the next lines 
    }

    if ($value > 10){
        break;
    }

    echo 'Even Numbers : ' . $value . PHP_EOL . '<br>';
    $value++;
}



?>