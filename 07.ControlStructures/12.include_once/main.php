<!-- Understand how to embed php file into another file using include_once statement. -->

<?php
include "header.php"
?>
<body>
<?php
include "menu.php";         //Include shows everytime when you call it.
include_once "submenu.php";
include_once "submenu.php"; //Include once only show once in a page.
?>

<?php
include "footer.html";
?>