<?php

// Learn to pass parameters to Function and Validate them.
declare(strict_types =1);

function printOddNumbers(int $limit, $skipNumber){
    for ($index  = 0; $index<=$limit; $index++){
        if ($index === $skipNumber){
            continue;
        }
        if ($index%2!=0){
            echo "Odd Number : $index" .  PHP_EOL . "<br>";
        }
    }
}

    //Call the function
    echo printOddNumbers(50, "3");



?>