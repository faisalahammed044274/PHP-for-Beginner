<?php
// Learn How to return values from Functions

 /*
    function functionName(params) : return type{
        return something;
    }
 */

    function add($a , $b) : int {
        $addition = $a + $b;
        return $addition;
    }

    echo " Sum Result : " . add(1,2) . PHP_EOL . "<br>";

    function getEvenNumbers($limit) : array {
        $returnArr = [];
        for($index = 0; $index <= $limit; $index++){
            if($index%2==0){
                $returnArr[] = $index;
            }
        }
        return $returnArr;
    }

    $evenNumbers = getEvenNumbers(20);
    print_r($evenNumbers);

?>