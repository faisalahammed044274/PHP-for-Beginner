<?php
//Understand how to define and work with Null.

/*
* NULL is case insensitive null / NULL are same.
* null is used to initialize a variable with empty value.
* unset() and is_null() methods.
* Most common use case is to check if the variable has a
value or empty.
*/

// Define and Check null
$name = null;
echo $name . PHP_EOL;
echo ($name) ? "Has Value" : "Empty Value" . PHP_EOL;

//Check if the variable is null or not

$name = "0";
echo ($name) ? "Has Value" : "Empty Value" . PHP_EOL;
echo ( !is_null($name) ) ? "Has Value" : "Empty" . PHP_EOL;

// Remove th variable form the program and memory
echo $name . PHP_EOL;
unset($name);
echo $name . PHP_EOL;
echo ( !is_null($name) ) ? "Has Value" : "Empty" . PHP_EOL;


?>