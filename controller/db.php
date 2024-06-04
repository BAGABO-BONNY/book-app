<?php
// Database configuration
$dbHost = 'localhost'; // Change this to your database host
$dbUsername = 'root'; // Change this to your database username
$dbPassword = ''; // Change this to your database password
$dbName = 'UserDatabase'; // Change this to your database name
$port=3309;

// Create database connection
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName,$port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
