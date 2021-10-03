<?php
//Recap all the Constant Concepts

//Define Constant
define(LANGUAGE, "PHP");

//Do not redefine the constant
define (LANGUAGE, "JAVA");

//Do not use same Variable and Constant  names
$name = "Jhon, Smith";
define(name,"Jhon, Smith");
echo $name . name;

//Assign Constant to Variable and print inside th string
$lang = LANGUAGE;
echo "This is a language : $lang";

//Magic Constant

echo __LINE__;

?>