<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "rest_api_demo";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
