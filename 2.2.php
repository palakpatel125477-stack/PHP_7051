<!DOCTYPE html>
<html>
<head>
    <title>Array Sorting</title>
</head>
<body>

<form method="post">
    Enter numbers separated by comma:
    <input type="text" name="numbers">
    <input type="submit" name="sort" value="Sort">
</form>

<?php
if(isset($_POST['sort']))
{
    $input = $_POST['numbers'];

    $arr = explode(",", $input);

    sort($arr);

    echo "<h3>Sorted Array:</h3>";

    foreach($arr as $value)
    {
        echo $value . " ";
    }
}
?>

</body>
</html>