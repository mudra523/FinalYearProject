<?php
$servername = "192.168.1.13:3307";
$username = "root";
$password = "toor";
$dbname = "ProDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
