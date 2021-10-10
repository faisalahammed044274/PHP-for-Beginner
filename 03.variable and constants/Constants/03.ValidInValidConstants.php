<?php

// Good Practise for Constants
//  Good Practice  1: Always use UPPERCASE to define constants

define (LANGUAGE, "PHP");
// define (VERSION,7.4);

// Good Practice 2 : Donot use constants like -> _CONSTANTS_
//define (_CONSTANTS_, "Wrong Practice");

// Good Practice 3 : Avoid same name as Variable
$name = "Setu, Faisal";
define(NAME, "Setu, Faisal");

//Good Practice : use the same naming convention.
//Do not start variable or constantname with integers

//Bad practice try to not start with underscore
// $_1message = "Hello";
// define (_1message , "Hello");
// echo $_1message . _1message;

?>