<?php
session_start();

if (isset($_SESSION['username'])) {
    echo "<h2>Welcome " . $_SESSION['username'] . "</h2>";
    echo "<br><a href='logout.php'>Logout</a>";
    exit();
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "1234") {
        $_SESSION['username'] = $username;
        header("Location: login.php");
        exit();
    } else {
        echo "Invalid Username or Password.<br><br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Login</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post">
    Username:
    <input type="text" name="username"><br><br>

    Password:
    <input type="password" name="password"><br><br>

    <input type="submit" name="login" value="Login">
</form>

</body>
</html>