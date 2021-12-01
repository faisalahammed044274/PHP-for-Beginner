<?php
// 1) Write a function to accept two integer values and show add, sub, multiple and divide.
// 2) Accept Optional parameter to perform specific operations
// 3) Print the output from the function.
// 4) declare(strict_types=1);

declare(strict_types = 1);

function calculator(int $a, int $b, String $operation = "all")
{
    $operation = strtolower($operation);

    switch($operation){
        case 'add':
            $result = $a + $b;
            echo "Add : $result" . "<br>";
            break;
        case 'sub':
            $result = $a - $b;
            echo "Subtract : $result" . "<br>";
            break;
        case 'multiply':
            $result = $a * $b;
            echo "Multiplication : $result" . "<br>";
            break;
        case 'divide':
            $result = $a / $b;
            echo "Divide : $result" . "<br>";
            break;
        default:
        $result = $a + $b . "<br>";
        echo "Add : $result" . "<br>";
        $result = $a - $b . "<br>";
        echo "Subtract : $result" . "<br>";
        $result = $a * $b . "<br>";
        echo "Multiply : $result" . "<br>";
        $result = $a / $b . "<br>";
        echo "Divide : $result" . "<br>";

            break;

    }
}

calculator(1,2);
calculator (1, 2, "add");
calculator (2,3, "sub");
calculator (1,2, 'multiply');
calculator(3,5, "sub");

?>