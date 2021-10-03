<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical Test</title>
</head>
<body>
<h2> 1. Define and Assign $firstname and $lastname variable with your name.</h2>
<?php
$firstname = "Faisal";
$lastname = "Ahammed";
echo $firstname . " " . $lastname; //for output
?>
<h2>2. Print the firstname, lastname using echo / print</h2>
<?php
$firstname = "Faisal";
$lastname = "Ahammed";
echo $firstname . " " . $lastname;
?>
<h2>3. Embed the variable inside the quotes.</h2>
<?php
$firstname ="Faisal";
$lastname = "Ahammed";
echo  "Hello here\"s my name $firstname $lastname" ;
?>
<h2>4. Define a function to print the name.</h2>
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
<h2>5. Show PHP Variables are case sensitive.</h2>
<?php
    $name = "I am a variable <br>";
    echo $Name;
?>
<h2>6. Create a local variable outside the function and define same inside the function. Display the variable</h2>
<?php

$name = "Setu";
function print_name(){
    $name = "Faisal <br>";
    echo $name;
}
print_name();

?>
<h2>7. Define and show the Global Variable</h2>
<?php
global $name;
$name = "Faisal";

function print_myname()
{
    global $name;
    echo $name;
}
echo $name;
?>
<h2>8. Define and show the Static Variable</h2>
<?php
function my_static(){
    static $number1 =1;
    echo $number1 . "<br>";
    $number1 = $number1 + 1;

}
my_static();
my_static();
my_static();
?>
<h2>9. Show a Super Global Variable</h2>

<h2>10. Define and show Variable of Variables</h2>
<h2>11. Use the isset method using tenary operators</h2>
<h2>12. Define and Display a Constant.</h2>
<h2>13. Show magic constant</h2>

</body>
</html>