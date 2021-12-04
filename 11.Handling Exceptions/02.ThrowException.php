<?php
// Throw and Catch a Custom Exception

function custom_exception_handler($exception){
    echo 'caught Exception : ' . $exception->getMessage() . PHP_EOL . "<br>";
}

set_exception_handler('custom_exception_handler');
throw new Exception("Exception is raised !");







?>