<?php
// FILEPATH: /C:/laragon/www/websites/iNotes/config.php

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud-app-php";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // Connection successful
    echo "Connected to the database successfully!";
}
?>