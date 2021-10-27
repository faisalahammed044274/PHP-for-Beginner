<table border="1" align="center"cellpadding="5" cellspacing="5" style="background-color:grey; height:auto; width:400px; text-align:center;">
        <tr style="background-color: burlywood;">
            <td>Number</td>
            <td>Odd</td>
            <td>Even</td>
        </tr>

<?php
//Write Infinite loop with for loop and print even and odd numbers till 20 numbers.

require_once "infiniteConfigure.php";
for ($counter = 1; $counter <= infiniteConfigure\MAX_NUMBERS; $counter++) {
    $result = $counter % 2;
    echo "<tr>";
    echo "<td>$counter</td>";
    if ($result == 0) {
        echo "<td>No</td>";
        echo "<td>Yes</td>";
    } else {
        echo "<td>Yes</td>";
        echo "<td>No</td>";
    }
    echo "</tr>";
}
?>
