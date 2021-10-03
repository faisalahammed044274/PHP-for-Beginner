
//Check the Exercise1VariablesBefore.php file for the topics

<!doctype html>
<html>
<head>
    <title>
        Variables
    </title>
</head>
<body>

    <h1>Exercise 1: Create and Display Variables</h1>
    <?=$name = "Faisal";
echo $name;
?>

    <h2>String Variable:</h2>
    <?=$name = "Faisal";
echo $name;
?>
    <h2>Integer Variable:</h2>
    <?=$number1 = 55;
echo $number1;
?>

    <h2>Print Variable from Function:</h2>

    <?php

function add()
{

    $firstValue = 10;
    $secondValue = 20;
    $total = $firstValue + $secondValue;
    echo $total;
}

add();

?>

    <h2>Static Variable:</h2>

    <?php
function MyStatic()
{
    static $count = 1;
    echo $count . "<br>";
    $count = $count + 1;
}
MyStatic();
MyStatic();
MyStatic();
MyStatic();

?>

    <h2>Global Variable:</h2>
    <?php
global $value;
$value = 11;
function myfunc()
{
    global $value;
    echo $value;
}
?>
    <h2>Super Global Variable:</h2>
<?php
global $message;
$message = "This is my message";
echo $GLOBALS["message"];

?>
    <h2>Variables of Variables:</h2>

<?php
$car = "BMW";
$vehicle = "car";
$bmw = "vehicle";
$buy = "bmw";

echo $$$$buy;
?>
</body>
</html>


