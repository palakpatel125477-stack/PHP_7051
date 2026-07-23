<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bca_5a";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>