<?php

//Difference between Variable vs Constant

/*
1) No need to use $ to use Constant.
2) Constant are defined only via the define method.
3) Value can be assigned only once.
4) Constant has global scope. Can access anywhere.
5) Constant can be used to access the constants.

*/

$name = "Setu, Faisal";
define ("name", "Faisal Ahammed");
echo $name ."<br>". name."<br>";

//Able to change Variable but not constant

$name = "Walter, White";
define (name, "Walter , White");
echo $name."<br>".name ."<br>";

function print_constant(){ // make it local variable 
    echo $name ."<br>".name;
}

print_constant(); // define the local variable

?>