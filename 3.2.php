<?php

if(isset($_COOKIE["username"]))
{
    echo "Name : " . $_COOKIE["username"];
}
else
{
    echo "Cookie Not Found";
}

?>