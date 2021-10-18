<?php

// Learn to Define Sub Namespaces

//include the namespace
include "NamespaceConstants1.php";
include "NamespaceConstants2.php";

// Access the sub namespaces

echo \SubNamespaces\Sub1\FILE_NAME;
echo \SubNamespaces\Sub2\FILE_NAME;