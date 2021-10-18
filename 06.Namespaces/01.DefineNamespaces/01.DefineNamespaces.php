<?php

//Understand How to declare A Namespace and use it

/*

1. Namespaces are case-insensitive
2. Namespaces are used to avoid name collision between other libraries.
3. Namespace is the keyword used to define namespace.
4. Only Classes, Interface, Functions and constants should be defined in namespaces.
5. namespace should be always in the first line.
6. Include is used to include any file into another file.
7. Use the backslash to refer to sub directories or file name.

*/

//Include the namespace file
include "NamespaceConstants.php";

//Access the Namespace
echo MyConstants\FILE_NAME;


?>