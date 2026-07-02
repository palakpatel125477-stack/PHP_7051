<?php

echo "<h2>1. array_change_key_case()</h2>";

$student = array(
    "Name"=>"Palak",
    "City"=>"Rajkot",
    "Course"=>"BCA"
);

print_r(array_change_key_case($student, CASE_UPPER));

echo "<hr>";

echo "<h2>2. array_chunk()</h2>";

$months = array(
"January","February","March","April","May","June",
"July","August","September","October","November","December"
);

print_r(array_chunk($months,3));

echo "<hr>";

echo "<h2>3. array_count_values()</h2>";

$color = array("Red","Blue","Red","Green","Blue","Red");

print_r(array_count_values($color));

echo "<hr>";

echo "<h2>4. array_pop()</h2>";

$fruits = array("Apple","Banana","Mango","Orange");

array_pop($fruits);

print_r($fruits);

echo "<hr>";

echo "<h2>5. array_push()</h2>";

$fruits = array("Apple","Banana");

array_push($fruits,"Mango","Orange");

print_r($fruits);

echo "<hr>";

echo "<h2>6. array_unshift()</h2>";

$cars = array("BMW","Audi");

array_unshift($cars,"Mercedes");

print_r($cars);

echo "<hr>";

echo "<h2>7. array_shift()</h2>";

$cars = array("Mercedes","BMW","Audi");

array_shift($cars);

print_r($cars);

?>