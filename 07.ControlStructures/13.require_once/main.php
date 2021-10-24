<!-- Understand how to embed php file into another file using require_once statement. -->
<?php
include "header.html";
?>
<?php
// require "menu.php";
require_once "menu.php";
require_once "menu.php";
require "menu.php";
require "menu.php";
require_once "menu.php";

?>
<?php
include "footer.html";
?>