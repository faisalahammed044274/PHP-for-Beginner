<!-- 1. Syntax of if and else condition
2. Check if the inputs given by user is correct.
3. if condition statement without braces.
4. Check if Student is passed or failed. -->

<?php

//Sample 1
// Syntex of if and else condition
// please follow the coding style.

$some_boolean_condition = TRUE;
if ($some_boolean_condition) {
    echo 'This is a if Block Condition. <br>' . PHP_EOL;
    echo 'This is a True Condition.' . PHP_EOL;
} else {
    echo 'This is a Else Block Condition.' . PHP_EOL;
    echo 'This is a False Condition.' . PHP_EOL;
}
echo "<br>";

$one_more_boolean_condition = FALSE;
if ($some_boolean_condition && $one_more_boolean_condition){
    echo 'This is a if Block Condition. <br>' . PHP_EOL;
    echo 'This is a True Condition.' . PHP_EOL;
} else {
    echo 'This is a Else Block Condition. <br>' . PHP_EOL;
    echo 'This is a False Condition.' . PHP_EOL;
}
?>

<!-- 
    Example 	    Name 	Result
--------------------------------------------------------------------------
    $a and $b 	    And 	true if both $a and $b are true.
    $a or $b 	    Or 	    true if either $a or $b is true.
    $a xor $b 	    Xor 	true if either $a or $b is true, but not both.
    ! $a 	        Not 	true if $a is not true.
    $a && $b 	    And 	true if both $a and $b are true.
    $a || $b 	    Or 	    true if either $a or $b is true.
---------------------------------------------------------------------------
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if else condition</title>
</head>
<body>
    <?php
     if ($some_boolean_condition || TRUE){
        ?>
        <h1>This is a True Condition.</h1>
    <?php } else { ?>

        <h1>This is a False Condition</h1>

    <?php } ?>

</body>
</html>