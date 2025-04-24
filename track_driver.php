<?php
session_start();
if (!isset($_SESSION['user_id'])) die();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tracking Driver</title>
    <style>
        body { font-family: Arial; background: #fffbe7; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .box { background: white; padding: 40px; border-radius: 12px; box-shadow: 0 0 15px #bbb; text-align: center; }
        .loader { width: 100%; background: #eee; border-radius: 12px; overflow: hidden; margin-top: 20px; }
        .progress { height: 20px; background: #00b488; width: 0%; animation: move 5s forwards; }
        @keyframes move { to { width: 100%; } }
    </style>
</head>
<body>
    <div class="box">
        <h2>Your driver is arriving...</h2>
        <div class="loader"><div class="progress"></div></div>
        <p id="done" style="display:none; margin-top:20px;">Driver arrived! Enjoy your ride.</p>
    </div>
    <script>
        setTimeout(() => {
            document.getElementById('done').style.display = 'block';
        }, 5000);
    </script>
</body>
</html>
