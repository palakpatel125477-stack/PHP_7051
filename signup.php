<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN_UP page</title>
</head>
<body>
    <center>
    <h1>SIGN_UP PAGE</h1>
    <form action="" method="post" enctype="multipart/form-data">
        First Name : <input type="text" name="Firstname"><br><br>
        Last Name : <input type="text" name="Lastname"><br><br>
        Password : <input type="password" name="password"><br><br>
        Confirm Password : <input type="password" name="confirmpassword"><br><br>
        Email : <input type="email" name="email"><br><br>
        Phone Number : <input type="text" name="phone_number"><br><br>
        Upload Image : <input type="file" name="image"><br><br>
        <input type="submit" name="submit" value="SIGN UP">
    </form>
    </center>
</body>
</html>

<?php
include 'db.php';

if(isset($_POST['submit'])){
    $firstname = $_POST['Firstname'];
    $lastname = $_POST['Lastname'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phone_number'];
    
    $image_name = "";
    if(isset($_FILES['image'])){
        $image_name = $_FILES['image']['name'];
    }

    if($password == $confirmpassword){
        $sql = "INSERT INTO user (Firstname, Lastname, password, email, phonenumber, image) VALUES ('$firstname', '$lastname', '$password', '$email', '$phonenumber', '$image_name')";
        
        if(mysqli_query($conn, $sql)){
            echo "User registered successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Passwords do not match.";
    }
}
?>
