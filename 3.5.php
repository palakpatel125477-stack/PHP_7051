<?php

session_start();

$_SESSION["name"] = "Palak";

echo "Session Created<br>";
echo $_SESSION["name"];

?>