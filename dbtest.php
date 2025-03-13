<?php
$servername = "localhost";
$username = "stefan";
$password = "stefan1";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";

$conn->close();
?>

