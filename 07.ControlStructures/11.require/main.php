<?php
// include keep on executing the other part of the program 
// require doesnot execuite the rest code if can't found the required file.
include 'header.php';
?>
<body>
 <?php   
include 'menu.php';
// require 'sub-menu.php';
require 'subMenu.php';
?>

<?php
include 'footer.html';
?>