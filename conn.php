<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "course";

$connection = new mysqli($server, $user, $password, $database);
if ($connection->connect_error) {
    echo " connection error: " . $connection->error;
} else {
    // echo "Connected successfully";
}
