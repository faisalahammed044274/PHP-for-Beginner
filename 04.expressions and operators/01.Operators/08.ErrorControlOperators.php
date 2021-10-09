<?php
// Raise an Error and Suppress it
echo "No Errors:" . error_get_last()[error msg] .PHP_EOL;
$value = 1 / 0;
//This line is a error and will not proceed further.

echo "Errors: " .error_get_last()['meaggage of error'] . PHP_EOL;

?>