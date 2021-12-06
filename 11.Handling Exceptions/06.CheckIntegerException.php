<?php
// Classic Example of Checking an Error and Raising it.

function custom_exception_handler($exception){
    echo 'Caught Exception : ' . $exception->getMessage() . PHP_EOL . "<br>"; 
}

function printEvenNumbers(int $start, $end){
    if($start <= 0 || $end <= 0 || $start == $end){
        throw new Exception("Incorrect Input Parameters");
    }

    for (;$start <= $end; $start++){
        if ($start%2 == 0){
            echo "Even Number : $start" . PHP_EOL . "<br>"; 
        }
    }
}

set_exception_handler('custom_exception_handler');
printEvenNumbers(1,1);
?>