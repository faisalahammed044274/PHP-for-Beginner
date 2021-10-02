<?php

// 1) Understand Local Variable Concept
// 2) Learn about Scope of Variable using Functions

//Sample 1
    $name = "SETU";

    function print_name(){
        $name = "PHP !<br>";
        echo $name;
    }

    print_name();
    echo $name;

//Sample 2

// $message = "Welcome to PHP !";
// function print_message(){
//     echo " my message";
//     // echo "$message";
//     //it's not running because it's unable to get the veriable outside of the function.
//     //$message varible works outside the function.
// }
// print_message();

?>