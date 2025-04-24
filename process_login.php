<?php
include "db.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$result = $conn->query("SELECT * FROM users WHERE email='$email'");
if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        echo "<script>window.location='dashboard.php';</script>";
    } else {
        echo "<script>alert('Incorrect password'); window.location='login.php';</script>";
    }
} else {
    echo "<script>alert('User not found'); window.location='login.php';</script>";
}
?>
