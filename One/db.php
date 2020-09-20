<?php
$servername = "localhost";
$username = "id10723384_sheepishlamb";
$password = "adid3249";
$database = "id10723384_sheets";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
