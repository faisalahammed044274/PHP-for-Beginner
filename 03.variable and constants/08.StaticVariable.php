<?php

// 1) Define a Static Variable and Print it

 // Sample 1
function counter(){
    $count = 1;
    echo $count . "<br>";
    $count = $count + 1;
}

counter();
counter();
counter();
counter();
counter();

// Sample 2

echo "<h1>Static Variables</h1>";

function counter_static(){
    static $count = 1;
    echo $count . "<br>";
    $count = $count + 1;
}

counter_static();
counter_static();
counter_static();
counter_static();
counter_static();


