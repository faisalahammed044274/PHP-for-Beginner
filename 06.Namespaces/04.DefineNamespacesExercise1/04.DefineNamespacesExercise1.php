<?php
// 1) Define Constants File using Namespace and Use it in another php file
// 2) Use Sub Namespace and Namespace Constants.

include "MyNamespace.php";

echo "Total Marks : " . StudentConstants\Student1\TOTAL_MARKS . PHP_EOL;
echo "Passing Marks : " . StudentConstants\Student1\PASSING_MARKS . PHP_EOL;

echo "FileName : " . \StudentConstants\Student1\FILE_NAME . PHP_EOL;
?>