<html>
    <head>
        <title>Variables and Constants</title>
    </head>
    <body>
    <!-- Sample 1  -->
    <h1>Define Strings</h1>
    <?php
$name = "Faisal Ahammed";
$message = "This is a string Message";
echo $name . ": " . $message . "<br>";
echo "$name : $message";
?>
    <h1>Define Integers</h1>
<?php
$version = 7.0;
echo "PHP Version is $version. <br>";
?>

    <!-- Sample 2  -->
    <h1>Define String and Integer together.</h1>
    <?php
        $name ="Faisal";
        $age = 25;

        echo "My name is $name and age is $age.";
    ?>

    <!-- Sample 3 -->
    <h1>Add Two Numbers with Integer Variable</h1>
    <?php
        $number1 = 6;
        $number2 = 5;
        $totalNumber = ($number1+$number2);

        echo "Whole number is : $totalNumber";
    ?>
    </body>
</html>