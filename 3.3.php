<?php

setcookie("username", "Palak", time() + 3600);

header("Location: home.php");
exit();

?>