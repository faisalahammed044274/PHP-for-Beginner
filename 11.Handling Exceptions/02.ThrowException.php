<?php
// Throw and Catch a Custom Exception
/*
function custom_exception_handler($exception){
    echo 'caught Exception : ' . $exception->getMessage() . PHP_EOL . "<br>";
}

set_exception_handler('custom_exception_handler');
throw new Exception("Exception is raised!");
*/

function custom_exception_handler($exception){
    echo 'Caught Exception : ' . $exception->getMessage() .PHP_EOL;
}

function divide ($x, $y):int {

    if( $y <= 0){

        throw new Exception("Divide by Zero Exception might happen");
    }

    $result = $x / $y;
    return $result;
}

set_exception_handler('custom_exception_handler');
divide(1,0);



?>