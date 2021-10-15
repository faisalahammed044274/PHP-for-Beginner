<!doctype html>
<html>

<head>
    <title>
        Data Types
    </title>
</head>

<body style="background-color:chartreuse">

    <h1>Exercise 1: Use All Data Types</h1>

    <h2>Calculate the area using Length and breath using Integer:</h2>
    <?php
    $length = 10;
    $breath = 20;
    $area = $length * $breath;
    echo $area . "<br>";
    ?>
    <h2>Calculate Student Exact Marks Percentage with Double:</h2>
    <?php
    $english = 65;
    $math = 95;
    $total = $math + $english;
    $totalMarks = 200;
    $percentage = $total / $totalMarks;
    echo "Percentage : " . $percentage . "<br>";
    ?>
    <h2>Check if the user has admin roles:</h2>
    <?php

    $userName = "Faisal";
    $hasRoles = null;
    $adminRoles = "Admin";
    $userRoles = "Admin";

    $hasRoles = ($adminRoles == $userRoles);
    echo ($hasRoles) ? "$userName has Admin Roles." : "$userName has not assigned as admin." . "<br>";

    ?>
    <h2>Define and Display a User Name using Strings:</h2>
    <?php
    $fName = "Faisal";
    $lName = "Ahammed";
    $fullName = $fName . " " . $lName;
    echo $fullName;
    ?>
    <h2>Check if the variable is null or not:</h2>
    <?php

    $inputValue = "";
    $hasValue = is_null($inputValue);
    // Check
    echo (!$hasValue) ? "Input has a Value" : "Input has no Value";
    ?>
</body>

</html>