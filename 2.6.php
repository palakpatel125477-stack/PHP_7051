<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATE AND TIME FUNCTION</title>
</head>
<body>
    <h3>DATE AND TIME FUNCTION</h3>
</body>
</html>





<?php

echo "DAYOFWEEK(): " . date("w") . "<br>";   // 1 = Sunday
echo "WEEKDAY(): " . date("N") . "<br>";     // 0 = Monday
echo "DAYOFMONTH(): " . date("d") . "<br>";
echo "DAYOFYEAR(): " . date("z") + 1 . "<br>";
echo "DAYNAME(): " . date("l") . "<br>";

?>