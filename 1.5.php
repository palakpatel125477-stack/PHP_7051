<?php
echo "<h3> Using For_Loop </h3>";

for($i=5; $i<=10; $i++)
{
    echo $i ."<br>";
}
echo "<h3> Using For_Each_Loop </h3>";
$numbers = array(5,6,7,8,9,10);
foreach($numbers as $arr)
{
    echo $arr ."<br>";
}
?>