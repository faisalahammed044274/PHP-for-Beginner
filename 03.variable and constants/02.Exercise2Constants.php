<!doctype html>
<html>
<head>
    <title>
        Constants
    </title>
</head>
<body>

    <h1>Exercise 1: Define and Display Constants</h1>
    <?php
define("NAME", "I am a Constant");
echo NAME;

?>
    <h2>String Constant:</h2>
    <?php
define("MYNAME", "I am a String Constant");
echo MYNAME;
?>

    <h2>Integer Constant:</h2>
    <?php
define("AGE", 29);
echo AGE;
?>
    <h2>Print Constant from Function:</h2>
    <?php
define("PROGRAMVERSION", "7.4");
function print_version()
{
    echo PROGRAMVERSION;
}
print_version();
?>
    <h2>Display Magic Constant:</h2>
<?php
echo __LINE__ . "<br>";
echo __FILE__ . "<br>";
echo __DIR__ . "<br>";
?>
</body>
</html>

