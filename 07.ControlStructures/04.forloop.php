<?php

//Print Odd Numbers from 1 to 10.

/*
for(initialization; condition; increment) {
//code to be executed
}
 */

//Sample 1 - Recommend Way

for ($value = 1; $value <= 10; $value++) {

    $result = $value;
    if ($result > 0) {
        echo '1. Odd Number' . $value . PHP_EOL;
    }
}

//Sample 2 - pre increment

$value = 1;
for (; $value <= 10; $value++) {

    $result = $value;
    if ($result > 0) {
        echo '2. Odd Number' . $value . PHP_EOL;
    }
}

//Sample 3 - post increment

$value = 0;
for (; $value <= 10; ++$value) {

    $result = $value % 2;
    if ($result > 0) {
        echo ' 3. Odd Number' . $value . PHP_EOL;
    }
}

echo "<br>";
// Sample 4

$value = 1;
for (; $value <= 10;) {

    $result = $value % 2;
    if ($result > 0) {
        echo '4. Odd Number' . $value . PHP_EOL;
    }
    $value++;
}

// Infinite loop

// $value = 1;
// for ( ; true ; ) {

//     $result = $value % 2;
//     if ($result > 0) {
//         echo 'Me SetuFaisal' . $value . PHP_EOL;
//     }
//     $value++;
// }


/*
Comparison      Operators                         Example 	Name 	Result
-----------------------------------------------------------------------------------------------------------------------------------
$a == $b 	    Equal 	                        true if $a is equal to $b after type juggling.
-----------------------------------------------------------------------------------------------------------------------------------
$a === $b   	Identical           	        true if $a is equal to $b, and they are of the same type.
-----------------------------------------------------------------------------------------------------------------------------------
$a != $b 	    Not equal           	        true if $a is not equal to $b after type juggling.
-----------------------------------------------------------------------------------------------------------------------------------
$a <> $b 	    Not equal           	        true if $a is not equal to $b after type juggling.
-----------------------------------------------------------------------------------------------------------------------------------
$a !== $b 	    Not identical       	        true if $a is not equal to $b, or they are not of the same type.
-----------------------------------------------------------------------------------------------------------------------------------
$a < $b 	    Less than           	        true if $a is strictly less than $b.
-----------------------------------------------------------------------------------------------------------------------------------
$a > $b 	    Greater than    	            true if $a is strictly greater than $b.
-----------------------------------------------------------------------------------------------------------------------------------
$a <= $b 	    Less than or equal to 	        true if $a is less than or equal to $b.
-----------------------------------------------------------------------------------------------------------------------------------
$a >= $b 	    Greater than or equal to 	    true if $a is greater than or equal to $b.
-----------------------------------------------------------------------------------------------------------------------------------
$a <=> $b   	Spaceship 	                    An int less than, equal to, or greater than zero when $a is less than, 
                                                equal to, or greater than $b, respectively.
----------------------------------------------------------------------------------------------------------------------------------- 
*/


?>