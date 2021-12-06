<?php
// Catch the Errors in your program

function custom_error_handler($errorno, $errstr){
    echo $errstr;
}

set_error_handler('custom_error_handler');
    echo (5 / 0);




?>