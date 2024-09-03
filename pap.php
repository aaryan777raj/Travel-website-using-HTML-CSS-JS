<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_db";
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>