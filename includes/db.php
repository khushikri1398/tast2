<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p1";

// Create connection using mysqli_connect
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
