<?php

// 1) Define a Function and call it
// 2) Duplicate Functions
// 3) Sequence of Functions


// sample 1

function add(){
    $firstValue = 10;
    $secondValue = 20;
    $total = $firstValue + $secondValue;
    echo $total;

    echo "<br> This is a function here <br>";
}

add();

// sample 2

// function add(){
//     echo "This is duplicate function";
// }
// add();

// sample 3

welcome_message();
function welcome_message(){
    echo "<h3>Welcome to the php function</h3>";
}
welcome_message();
?>