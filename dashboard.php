<?php
include "db.php";
session_start();
if (!isset($_SESSION['user_id'])) echo "<script>window.location='login.php';</script>";
$user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Careem Clone</title>
    <style>
        body { font-family: Arial; background: #f8f8f8; padding: 30px; }
        .card { background: white; max-width: 500px; margin: auto; padding: 30px; border-radius: 12px; box-shadow: 0 0 15px #ccc; }
        input, select, button { width: 100%; margin-bottom: 15px; padding: 10px; border-radius: 6px; border: 1px solid #ddd; }
        button { background: #00b488; color: white; border: none; }
        button:hover { background: #00996e; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Book a Ride</h2>
        <form onsubmit="return bookRide()" method="post">
            <input name="pickup" placeholder="Pickup Location" required>
            <input name="dropoff" placeholder="Dropoff Location" required>
            <select name="type" required>
                <option value="">Select Ride Type</option>
                <option value="Go">Go</option>
                <option value="Business">Business</option>
                <option value="Bike">Bike</option>
            </select>
            <button type="submit">Request Ride</button>
        </form>
        <a href="ride_history.php">View Ride History</a> | 
        <a href="logout.php">Logout</a>
    </div>
    <script>
        function bookRide() {
            document.forms[0].action = 'book_ride.php';
            return true;
        }
    </script>
</body>
</html>
