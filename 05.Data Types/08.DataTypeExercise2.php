<!doctype html>
<html>

<head>
    <title>
        Data Types -Print Student Details
    </title>
</head>

<body style="background-color:chartreuse">

    <h1>Exercise 1: Print Student Details</h1>
    <?php

    $studentName = "Faisal";
    $classSection = "5C";
    $age = 25;
    $gender = "Male";
    $contact = "+8801701062266";

    //Initialize the variables
    $maths  = 0;
    $science = 0;
    $total = 0;
    $totalMarks = 200;
    $percentage = 0;
    $passed = null;
    ?>
    <h2>Student Information:</h2>
    <table border="1" style="padding:10px; border-radius:10px; background-color:antiquewhite; text-align:center; width: 600px;">
        <tr>
            <td>Name</td>
            <td>Class</td>
            <td>Age</td>
            <td>Sex</td>
            <td>Contact</td>
        </tr>
        <tr>
            <td><?= $studentName ?></td>
            <td><?= $classSection ?></td>
            <td><?= $age ?></td>
            <td><?= $gender ?></td>
            <td><?= $contact ?></td>
        </tr>
    </table>
    <h2>Exams Attended and Marks:</h2>
    <?php
    $maths = 87;
    $science = 57;
    $total = ($maths + $science);
    $examAttended = ($total > 0) ? true : false;
    ?>
    Exam Attended : <?= ($examAttended) ? "Yes, Attend on exam !" : "No, Not atteded on exam !"?>
    <h2>Final Marks:</h2>
    Total Marks: <?= $totalMarks ?> 
    <h2>Percentage:</h2>
    <?php
    $percentage = ($total / $totalMarks) * 100;
    ?>
    Percentage : <?php $percentage ?>
    <h2>Result:</h2>
    

</body>

</html>