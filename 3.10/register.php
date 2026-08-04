<?php

$conn = mysqli_connect("localhost", "root", "", "college");

if (!$conn) {
    die("Connection Failed");
}

if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(name, email, password)
            VALUES('$name', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "<h3>Registration Successful!</h3>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="post">

Name:
<input type="text" name="name" required><br><br>

Email:
<input type="email" name="email" required><br><br>

Password:
<input type="password" name="password" required><br><br>

<input type="submit" name="register" value="Register">

</form>

</body>
</html>