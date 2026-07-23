<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
</head>
<body>

<center>

<h2>Product Details</h2>

<form method="post" enctype="multipart/form-data">

Product Name :
<input type="text" name="Product_Name" required>
<br><br>

Product Price :
<input type="number" name="Product_Price" required>
<br><br>

Product Quantity :
<input type="number" name="Product_Quantity" required>
<br><br>

Product Type :
<select name="Product_Type" required>
    <option value="">Select Product Type</option>
    <option>Fruits & Vegetables</option>
    <option>Dairy & Eggs</option>
    <option>Bakery & Bread</option>
    <option>Snacks & Beverages</option>
    <option>Packaged Foods</option>
</select>

<br><br>

Product Image :
<input type="file" name="image" required>

<br><br>

<input type="submit" name="submit" value="Submit">

</form>

</center>

<?php

include("db1.php");

if(isset($_POST['submit']))
{
    $pname = $_POST['Product_Name'];
    $price = $_POST['Product_Price'];
    $qty = $_POST['Product_Quantity'];
    $ptype = $_POST['Product_Type'];

    $image = $_FILES['image']['name'];

    move_uploaded_file($_FILES['image']['tmp_name'],"uploads/".$image);

    $sql = "INSERT INTO product_table
    (product_name,product_price,product_quantity,product_type,image_name)
    VALUES
    ('$pname','$price','$qty','$ptype','$image')";

    if(mysqli_query($conn,$sql))
    {
        echo "<center><h3>Product Inserted Successfully</h3></center>";
    }
    else
    {
        echo mysqli_error($conn);
    }
}

?>

</body>
</html>