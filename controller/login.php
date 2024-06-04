<?php
include 'db.php';
session_start(); // Start the session

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and bind parameters to prevent SQL injection
    $stmt = $conn->prepare("SELECT id, email, password, name FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];

        // Verify the hashed password
        if (password_verify($password, $storedPassword)) {
            // Password is correct
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];

            // Redirect to the success page with the user ID as a parameter
            header("Location: ../view/success.php?id=" . $row['id']);
            exit();
        } else {
            // Password is incorrect
            $_SESSION['error'] = 'Invalid credentials';
        }
    } else {
        // User not found
        $_SESSION['error'] = "Invalid email or password!";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();

    // Redirect back to login page with error message
    header("Location: ../view/login.php");
    exit();
}
?>
