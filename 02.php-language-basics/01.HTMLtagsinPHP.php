<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embed php in html</title>
    <!-- sample 5 -->
    <script type="text/javascript">
        <?=
    "alert('I am coming from PHP !')";
?>
    </script>
</head>

<body>
    <h1>Embed php in html</h1>

    <!-- sample 1 -->
    <?php echo "This is a sample php embeding in html" ?>

    <!-- sample 2 -->
    <?php
print "<p>Sample 1 : This is a sample text printed from PHP</p>";
?>

    <?="<hr>"?>

    <p>
        <?php
echo "sample 2: This text is printed from PHP ! "
?>
    </p>

    <!-- sample 3 -->
    <p style="color: #ff0000;">
        Sample 3 : This is a red text!
    </p>

    <p <?='style="color: #ff0000;"'?>>
        Sample 3 : This is a red text!
    </p>

    <p> <?='style="color: #ff0000;"'?>
        Sample 3 : This is a red text!
    </p>

    <!-- sample 4 -->

    <?="<p>"?>
    Smaple 4: this is printed from php.
    <?="</p>"?>

</body>

</html>