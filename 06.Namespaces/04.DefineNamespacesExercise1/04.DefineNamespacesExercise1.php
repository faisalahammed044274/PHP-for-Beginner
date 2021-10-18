<?php
// 1) Define Constants File using Namespace and Use it in another php file
// 2) Use Sub Namespace and Namespace Constants.

include "MyNamespace.php";

echo "Total Marks : " . StudentConstants\TOTAL_MARKS . PHP_EOL;
echo "Passing Marks : " . StudentConstants\PASSING_MARKS . PHP_EOL;


?>