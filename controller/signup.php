<?php
session_start(); // Start session

// Include database connection
include './db.php';

// Get form data
$first_name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Hash the password securely
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert user data into database
$query = "INSERT INTO Users (name, email, password) VALUES ('$first_name', '$email', '$hashed_password')";
$result = mysqli_query($conn, $query);

if ($result) {
    // User registered successfully
    $_SESSION['message'] = "Signup successful! You can now login.";
    header("Location: ../view/login.php"); // Redirect to login page
    exit(); // Terminate script after redirect
} else {
    // Error in registration
    $_SESSION['error'] = "Error: " . mysqli_error($conn);
    header("Location: ../view/signup.php"); // Redirect back to signup page
    exit(); // Terminate script after redirect
}

mysqli_close($conn); // Close database connection
?>
