<!DOCTYPE html>
<html>
<head>
    <title>Simple UDF Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="post">
    Number 1:
    <input type="number" name="n1" required><br><br>

    Number 2:
    <input type="number" name="n2" required><br><br>

    Operation:
    <select name="operation">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Division</option>
    </select>

    <br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php

function calculator($a, $b, $operation)
{
    switch($operation)
    {
        case "add":
            return $a + $b;

        case "sub":
            return $a - $b;

        case "mul":
            return $a * $b;

        case "div":
            if($b != 0)
                return $a / $b;
            else
                return "Cannot divide by zero.";
    }
}

if(isset($_POST['submit']))
{
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operation = $_POST['operation'];

    echo "<h3>Result = " . calculator($n1, $n2, $operation) . "</h3>";
}

?>

</body>
</html>