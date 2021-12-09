<?php

// 1) Create CSV Files with Student details
// 2) Each line in CSV is one Student Details.
// 3) Read the CSV File and Store the Students details in Array
// 4) Iterate the Array and Print the Students Table in HTML Format.

$fileName = "student.csv";
$csvFile = file($fileName);
foreach ($csvFile as $line) {
    $data[] = str_getcsv($line);
    print_r($line) . PHP_EOL;
}
?>
<html>
<body>
    <table border="1px" height="50px" width= "350px" style="background-color:bisque; color:darkgreen; text-align:center;">
        <tr>
        <th>Student Data</th>
        </tr>
        <tr>
        <td><?php
        foreach($csvFile as $line){
            $data[] = str_getcsv($line);
            echo $line . "<br>";
        }
        ?></td>
        </tr>
    </table>
</body>

</html>
