<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: ../view/login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = "UPDATE users SET email = '$email', name = '$name', password = '$password' WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "User updated successfully.";
        header('Location: ../view/success.php');
        exit();
    } else {
        echo "Error updating user: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
