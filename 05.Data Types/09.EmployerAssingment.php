<!-- 
// 1. Print the Employee Details
// 2. Working Hours
// 3. Employee Email ID and Address
// 4. Check if Employer is Married or not
// 5. Print the Employer Last Salary Drawn using Doubles -->

<!doctype html>
<html>

<head>
    <title>
        Exercise - Data Types
    </title>
</head>

<body>

    <h1>Print the Employee Details</h1>
    <?php

    $id = 234;
    $name = "Faisal Ahammed";
    $workingHourPerDay = 8;
    $hourlyRate = 15;
    $totalLeaveTaken = 6;
    $workingDays = 30;
    ?>
    <h2>Working Hours</h2>
    <?=
    $totalWorkingDays = $workingHourPerDay * $workingDays;
    ?>
    <h2>Employee Email ID and Address</h2>
        <?=
            $emailId = "setufaisal7@gmail.com <br>";
            echo $address = "ECB Canteen, Sagufta Mor, Mirpur, Dhaka 1212";
        ?>
    <h2>Check if Employer is Married or not</h2>
        
    <?=
    $married = "Employee :";
    $unmarried = "Employee :";
    $maritalStatus = ($married == $unmarried);
    echo ($maritalStatus) ? " Married" : " Unmarried";
    ?>
    <h2>Print the Employer Last Salary Drawn using Doubles</h2>
    <?php
    echo $employeeWorkingDays = $workingDays - $totalLeaveTaken;
    echo "<br>";
    $salaryworkinghour = $totalWorkingDays * $workingHourPerDay;
    echo $employerSalary = $salaryworkinghour * $hourlyRate;
    ?>
</body>

</html>