<?php
include "db.php";
session_start();
if (!isset($_SESSION['user_id'])) die();
$result = $conn->query("SELECT * FROM rides WHERE user_id={$_SESSION['user_id']} ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ride History</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; padding: 30px; }
        table { width: 100%; border-collapse: collapse; background: white; box-shadow: 0 0 10px #ccc; }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: left; }
        th { background: #00b488; color: white; }
    </style>
</head>
<body>
    <h2>Your Ride History</h2>
    <table>
        <tr><th>Pickup</th><th>Dropoff</th><th>Type</th><th>Fare</th><th>Status</th></tr>
        <?php while($r = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $r['pickup'] ?></td>
            <td><?= $r['dropoff'] ?></td>
            <td><?= $r['type'] ?></td>
            <td>Rs. <?= $r['fare'] ?></td>
            <td><?= $r['status'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br><a href="dashboard.php">← Back to Dashboard</a>
</body>
</html>
