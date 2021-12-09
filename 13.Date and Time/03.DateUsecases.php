<?php
//Commonly Use case of Date Functions

    echo date_create("now")->format("Y-m-d H:i:s") . PHP_EOL;
    echo date_create("+1 day")->format("Y-m-d H:i:s") . PHP_EOL;
    echo date_create("-1 day")->format("Y-m-d H:i:s") . PHP_EOL;

    //converted time and date format
    $strTime = strtotime("2021-12-12 5:09:00");
    echo date("d:m:y h:i:s", $strTime) . PHP_EOL;

    //Milli Seconds and they are numbers
    if(time() >= $strTime){
        echo "You passed your time.";
    } else{
        echo "You just wait for few days";
    }










?>