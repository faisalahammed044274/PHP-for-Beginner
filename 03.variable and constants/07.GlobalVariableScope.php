<?php
// 1) Define Global Variable and compare it with local variable.
// 2) Error Accessing global variable inside the function.
// 3) Right way to access GLobal Variable inside the function.

// Sample 1
// Defining the global Variable
global $name;

// Assigning the global Variable
$name = "Faisal";

function print_name()
{
    $name = "PHP !";
    echo $name;
}
echo $name;
print_name();

//Sample 2
// global $message;

// $message = "Welcome to PHP!";

// function print_message()
// {
//     echo $message; //undefined
// }

// print_message();
// echo $message;

// Sample 3
global $message1;

$message1 = "Welcome to php 1 !";

function print_message1()
{
    global $message1;
    echo $message1;
}

print_message1();
echo "<br>";
echo $message1;
