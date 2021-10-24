<!-- Understand how to embed php file into another file using require_once statement. -->
<?php
include "header.html";
?>
<body>
<?php
require "menu.php";

require_once "menu.php";
require_once "menu.php";
require "menu.php";
require_once "menu.php";

//This is always recommanded if you want to embed only once.

?>
<?php
include "footer.html";
?>