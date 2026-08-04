<?php

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Store username and password in cookies for 30 days
    setcookie("username", $username, time() + (30 * 24 * 60 * 60));
    setcookie("password", $password, time() + (30 * 24 * 60 * 60));

    echo "<h3>Login Successful</h3>";
}

$user = isset($_COOKIE['username']) ? $_COOKIE['username'] : "";
$pass = isset($_COOKIE['password']) ? $_COOKIE['password'] : "";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Remember Username and Password</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post">

Username:
<input type="text" name="username" value="<?php echo $user; ?>"><br><br>

Password:
<input type="password" name="password" value="<?php echo $pass; ?>"><br><br>

<input type="submit" name="login" value="Login">

</form>

</body>
</html>