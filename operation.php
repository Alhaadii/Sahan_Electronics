<?php

include("conn.php");


if (isset($_POST["submit"])) {
    $name = $_POST["user"];
    $password = $_POST["pass"];

    $sqlQuery = "Select *from users where username = '$name' and password = '$password' ";
    $result = $connection->query($sqlQuery);

    if ($result->num_rows > 0) {
        echo "Login successful!";
        header("Location:items_reg.php");
    } else {
        echo "Either Password or Username is incorrect.";
    }
}
