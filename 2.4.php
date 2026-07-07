<!DOCTYPE html>
<html>
<head>
    <title>String Functions</title>
</head>
<body>

<?php

$str = "Welcome to Programming Language. Example of String Functions in PHP.";

echo "<h2>Original String: $str</h2>";

echo "1. Length of String: " . strlen($str) . "<br><br>";

echo "2. Position of 'PHP': " . strpos($str, "PHP") . "<br><br>";

echo "3. Total Words: " . str_word_count($str) . "<br><br>";

echo "4. Reverse String: " . strrev($str) . "<br><br>";

echo "5. Lowercase: " . strtolower($str) . "<br><br>";

echo "6. Uppercase: " . strtoupper($str);

?>

</body>
</html>