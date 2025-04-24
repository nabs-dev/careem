<?php
include "db.php";
session_start();
if (!isset($_SESSION['user_id'])) die();

$pickup = $_POST['pickup'];
$dropoff = $_POST['dropoff'];
$type = $_POST['type'];
$fare = rand(150, 550);

$conn->query("INSERT INTO rides (user_id, pickup, dropoff, type, fare, status) VALUES 
($_SESSION[user_id], '$pickup', '$dropoff', '$type', $fare, 'Pending')");

echo "<script>alert('Ride requested. Tracking driver...'); window.location='track_driver.php';</script>";
?>
