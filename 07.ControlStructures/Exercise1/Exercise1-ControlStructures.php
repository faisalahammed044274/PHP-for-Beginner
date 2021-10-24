<!-- 1. Display Even and Odd Numbers
2. Define the MAX_NUMBERS in the namespace file
3. Write the for loop to loop for MAX_NUMBERS times
4. Print even and odd numbers in a table format. -->


<!doctype html>
<html>
<head>
    <title>
        Control Structures
    </title>
</head>
<body>

    <h1>Exercise 1: Display Odd and Even Numbers</h1>
    <table style="border: 5px solid green; border-radius:8px; padding:15px; width:300px; background-color:khaki; text-align:center;">
        <tr style="background-color:grey; color:white;">
            <td>Number</td>
            <td>Odd</td>
            <td>Even</td>
        </tr>


    <?php
require_once "MyConfig.php";
for ($counter = 0; $counter <= MyConfig\MAX_NUMBERS; $counter++) {
    $result = $counter % 2;
    echo "<tr>";
    echo "<td> $counter </td>";
    if ($result == 0) {
        echo "<td>NO</td>";
        echo "<td>YES</td>";
    } else {
        echo "<td>YES</td>";
        echo "<td>NO</td>";
    }
    echo "</tr>";
}

?>
   </table>
</body>
</html>

