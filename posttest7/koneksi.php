<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "cartoon_recommendation";

$conn = mysqli_connect($host, $user, $pass, $db);
    if (mysqli_connect_error()) {
        die("Database connection failed: " . mysqli_connect_error());
    }
?>