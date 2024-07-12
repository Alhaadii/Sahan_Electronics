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

if (isset($_POST["save"])) {
    $itemId = $_POST['id'];
    $item_name = $_POST["name"];
    $item_qty = intval($_POST["qyt"]);
    $item_price = floatval($_POST["price"]);
    $totalPrice = $item_qty * $item_price;

    $sqlQuery = "INSERT INTO items VALUES ($itemId, '$item_name',$item_qty,$item_price, $totalPrice)";
    echo $itemId;
    $result = $connection->query($sqlQuery);
    if ($result) {
        echo "Item added successfully!";
        header("Location: item_portal.php");
    } else {
        echo "Error: " . $sqlQuery . "<br>" . $connection->error;
    }
}
if (isset($_POST["edit"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $qyt = intval($_POST["qyt"]);
    $price = floatval($_POST["price"]);
    $totalPrice = $qyt * $price;

    $sqlQuery = "UPDATE items SET  itemname='$name', qyt=$qyt,price=$price,totalprice=$totalPrice WHERE itemid=$id";
    $result = $connection->query($sqlQuery);
    if ($result) {
        echo "updated";
        header("Location:item_portal.php");
    } else {
        echo "Error At Database" . $connection->error;
    }
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM  items  WHERE itemid=$id";
    $result = $connection->query($sql);

    if ($result) {
        echo "Deleted the record";
        header("Location: item_portal.php");
    } else {
        echo "Error" . $connection->error;
    }
}
