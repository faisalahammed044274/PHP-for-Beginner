<html style="border: 2px solid red; display:flex-inline;">
<form action="" method="post" style="padding:50px;  background-color:darkseagreen;">
    <input style="margin:5px; padding:5px;" type="text" name="no" value="" placeholder="Enter Number">
    <br>
    <input style="margin:5px; padding:5px; background-color:green; color:cornsilk;" type="submit" name="s" value="Execute Even Numbers">
    <p><?php echo "Even:";
    if (isset($_POST['s'])) //if click on submit button then
    {
        $n = $_POST['no']; //get textbox name
        for($i=0;$i<=$n;$i+=2) //start value=0 lessthen $n increment 2
        { //even numbers
            echo $i. " ";
        }
    }
    
    ?></p>
</form>
<form action="" method="post" style="padding:50px;  background-color:darkseagreen;">
    <input style="margin:5px; padding:5px;" type="text" name="no" value="" placeholder="Enter Number">
    <br>
    <input style="margin:5px; padding:5px; background-color:green; color:cornsilk;" type="submit" name="b" value="Execute Odd Numbers">
    <p><?php echo "Odd:";
    if (isset($_POST['b'])) //if click on submit button then
    {
        $n = $_POST['no']; //get textbox name
        for($i=1;$i<=$n;$i+=2) //start value=0 lessthen $n increment 2
        { //odd numbers
            echo $i. " ";
        }
    }
    ?></p>
</form>
</html>

