<?php
// 1) Define a Config file with Constants.
// 2) Name the Constant file as ConfigNamespaces.php and Create some Constants.
// 3) Use the Constants in the file UseNamespaces.php
//How to define namespace name in the php file?

include "ConfigNamespaces.php";

echo MyConstants\FILE_NAME;
?>