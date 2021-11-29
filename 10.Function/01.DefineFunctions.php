<?php
// Define and Call a Function

/* 
    function function_name(param_1, ... , param_n)
    {
        statement_1;
        statement_2;
        ...
        statement_m;

        return return_value;
    }
*/

//Define a function
function printEvenNumbers($limit){
    for ($index = 0; $index <= $limit; $index++){
        if($index%2==0) {
            echo "Even Number : $index" . PHP_EOL . "<br>";
        }
    }
}
//Calling the function
printEvenNumbers(60);

function add ($a, $b){
    return $a + $b;
}

echo " Total Function add is :" . add(10,80) . PHP_EOL . "<br>";
?>