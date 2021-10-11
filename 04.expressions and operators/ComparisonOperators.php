<?php

https://www.php.net/manual/en/language.operators.comparison.php

// Example      	Name        	        Result
// $a == $b 	    Equal 	                    true if $a is equal to $b after type juggling.
// $a === $b 	    Identical 	                true if $a is equal to $b, and they are of the same type.
// $a != $b 	    Not equal 	                true if $a is not equal to $b after type juggling.
// $a <> $b 	    Not equal 	                true if $a is not equal to $b after type juggling.
// $a !== $b 	    Not identical 	            true if $a is not equal to $b, or they are not of the same type.
// $a < $b          Less than 	                true if $a is strictly less than $b.
// $a > $b 	        Greater than 	            true if $a is strictly greater than $b.
// $a <= $b 	    Less than or equal to 	    true if $a is less than or equal to $b.
// $a >= $b 	    Greater than or equal to 	true if $a is greater than or equal to $b.
// $a <=> $b 	    Spaceship 	                An int less than, equal to, or greater than zero when $a is less than, equal to, or greater than $b, respectively. 

//---------------------------------------------------------------------------------------------------------------------
// Operator    Name        	               Example 	            Result 	Show it
//---------------------------------------------------------------------------------------------------------------------
//  == 	      Equal 	                   $x == $y 	    Returns true if $x is equal to $y 	
// === 	      Identical 	               $x === $y 	    Returns true if $x is equal to $y, and they are of the same type 	
// != 	      Not equal 	               $x != $y 	    Returns true if $x is not equal to $y 	
// <> 	      Not equal 	               $x <> $y 	    Returns true if $x is not equal to $y 	
// !== 	      Not identical 	           $x !== $y 	    Returns true if $x is not equal to $y, or they are not of the same type 	
// > 	      Greater than 	               $x > $y 	        Returns true if $x is greater than $y 	
// < 	      Less than 	               $x < $y 	        Returns true if $x is less than $y 	
// >= 	      Greater than or equal to     $x >= $y 	    Returns true if $x is greater than or equal to $y 	
// <= 	      Less than or equal to 	   $x <= $y 	    Returns true if $x is less than or equal to $y 	
// <=> 	      Spaceship 	               $x <=> $y   	    Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.

//---------------------------------------------------------------------------------------------------------------------

$a = 3;
$b = 3;

echo "<h3>Equal</h3>";
echo "<br>";

$equal = $a == $b;
echo $equal;
echo "<br>";

echo "<h3>Identical</h3>";
echo "<br>";

$identical = ($a === $b);
echo $identical;
echo "<br>";

echo "<h3>Not Equal </h3>";
echo "<br>";

$notEqual = ($a != $b);
echo $notEqual;
echo "<br>";

echo "<h3>Not Identical - 1</h3>";
echo "<br>";

$notEqualTwo = ($a <> $b);
echo $notEqualTwo;
echo "<br>";

echo "<h3>Not Identical -2</h3>";
echo "<br>";

$notIdentical = ($a !== $b);
echo $notIdentical;
echo "<br>";

echo "<h3>Greater Than</h3>";
echo "<br>";

$greaterThan = ($a > $b);
echo $greaterThan;
echo "<br>";

echo "<h3>Less Than</h3>";
echo "<br>";

$lessThan = ($a < $b);
echo $lessThan;
echo "<br>";

echo "<h3>Greater than or equal to</h3>";
echo "<br>";

$greaterThanOrEqualTo = ($a >= $b);
echo $greaterThanOrEqualTo;
echo "<br>";

echo "<h3>Less than or equal to</h3>";
echo "<br>";

$lessThanOrEqualTo = ($a <= $b);
echo $lessThanOrEqualTo;
echo "<br>"; 

echo "<h3>Spaceship</h3>";
echo "<br>";

$spaceship = ($a <=> $b);
echo $spaceship;
echo "<br>";
?>