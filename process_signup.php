<?php
include "db.php";
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$check = $conn->query("SELECT * FROM users WHERE email='$email'");
if ($check->num_rows > 0) {
    echo "<script>alert('Email already exists'); window.location='signup.php';</script>";
} else {
    $conn->query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");
    echo "<script>alert('Signup successful'); window.location='login.php';</script>";
}
?>
