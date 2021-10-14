<?php
//--------------------------
echo "<center><h1>Integer Data Type </h1></center>" . PHP_EOL;
//--------------------------

echo "<h3>Define and Print Integer Variable :</h3>" . PHP_EOL;
$a = 23;
$b = 37;
$c = $a+$b . PHP_EOL;
echo $c . PHP_EOL;
echo "<h3>HexaDecimal variables :</h3>" . PHP_EOL;
$c = 0x1C1A49AFF; //7543757567 || decimal to hexa decimal
echo $c . PHP_EOL;

echo "<h3>String to Integer Addition :</h3>" . PHP_EOL;
$number1 = 500;
$number2 = $number1 + 50;
echo $number2 . PHP_EOL;


echo "<h3>Negetive Numbers :</h3>" . PHP_EOL;

$finalNumber = 15 - 16;
echo $finalNumber . PHP_EOL;

$fNumber = -11 + 8;
echo $fNumber . PHP_EOL;

//--------------------------
echo "<center><h1>Double Data Type</h1></center>" . PHP_EOL;
//--------------------------

echo "<h3>Define and Print Decimal Variables :</h3>" . PHP_EOL;
$totalNumber = 76.98;
echo $totalNumber . PHP_EOL;
echo "Negetive Decimals : <br>" . PHP_EOL;
$negNumber = -87.84;
echo $negNumber . PHP_EOL;
$myRoundNumber = 6.45;
echo round($myRoundNumber) . PHP_EOL;
$price = 1.75;
$bid = 1.26;
echo (abs($price - $bid)< 0.97) ? "Accepted" : "Rejected" . PHP_EOL;
//abs = absolute

//--------------------------
echo "<center><h1>Boolean Data Type</h1></center>" . PHP_EOL;
//--------------------------


echo "<h3>define and use the boolean variable :</h3>" . PHP_EOL;
$flag1 = TRUE;
$flag2 = FALSE;
echo ($flag1) ? "True" : "False" . PHP_EOL;
echo ($flag2) ? "True" : "False" . PHP_EOL;

echo "<h3>Print Boolean Variables</h3>";
echo "True: " . $flag1 . PHP_EOL; 
echo "True: " . $flag2 . PHP_EOL;

echo "<h3>Use String as Boolean Condition</h3>";

$isLogin = true;
$session = 1;
echo ($isLogin && $session) ? "Login Successful" : "Login Failed";

//--------------------------
echo "<center><h1>String Data Type</h1></center>" . PHP_EOL;
//--------------------------
 echo "<h3>Define String and Use String</h3>";
$fName =  "Faisal";
$lName = "Ahammed";
$fullName = $fName ." ". $lName;
echo "my first name is $fName and  last Name is $lName." .PHP_EOL;
echo "my full name is $fullName" . PHP_EOL;

//--------------------------
echo "<center><h1>NULL Data Type</h1></center>" . PHP_EOL;
//--------------------------





?>