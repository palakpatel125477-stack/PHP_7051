<?php
    include "db.php";

    $query = "SELECT * FROM user";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1' cellpadding='10'>";
        echo "<tr><th>id</th><th>Firstname</th><th>Lastname</th><th>Password</th><th>Email</th><th>Phone Number</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['Firstname'] . "</td>";
            echo "<td>" . $row['Lastname'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phonenumber'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No products found.";
    }

?>