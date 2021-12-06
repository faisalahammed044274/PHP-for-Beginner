<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Handling</title>
</head>
<body>

<?php
    phpinfo();

    error_reporting(E_ERROR | E_WARNING | E_PARSE );
    $price = 45; 
    if($price == 45){
        print 'The Product price is :' . $price;
    } else{
        print 'Product price is not 45';
    }
?>
</body>
</html>