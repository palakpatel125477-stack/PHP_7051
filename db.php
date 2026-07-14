<?php
    $dbhost = "localhost";
    $dbname = "BCA_5A";
    $dbuser = "root";
    $dbpass = "";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}else {
}
    
?>