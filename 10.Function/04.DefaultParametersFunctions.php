<?php
// Assign Default and Optional Parameters to Functions

declare (strict_types = 1);

 function printOddNumbers(int $limit, $skipNumber = 3){
     for ($index = 0; $index <= $limit; $index++){
         if($skipNumber == $index){
             continue;
         }
         if ($index%2 != 0){
             echo "Odd Number : $index " . PHP_EOL . "<br>";
         }
     }
 }

    //Optional parameters should be last.
    function printEvenNumbers($skipNumber, int $limit){ //$skipNumber = -1 //assign value is deprecated 
        for($index = 0; $index <= $limit; $index++){
            if($skipNumber == $index) {
                continue;
            }
            if( $index%2 == 0){
                echo "Even Number : $index" . PHP_EOL . "<br>";
            }
        }
    }
    printOddNumbers(15);
    echo "<br>";
   printEvenNumbers( 12, 15);

   //Start

?>