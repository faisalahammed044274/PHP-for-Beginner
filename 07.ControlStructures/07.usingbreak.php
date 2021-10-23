<?php
//Understand how to break the loop using 'break' keyword

//Break the infinite loop
//Print 1 to 20 using infinite loop

$value = 1;

do{

    echo $value . PHP_EOL;

    if ($value >= 2000){
        break;
    }
    $value++;

}while(true);

?>