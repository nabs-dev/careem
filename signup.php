<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Signup - Careem Clone</title>
    <style>
        body { font-family: Arial; background: #f0f0f0; display: flex; justify-content: center; align-items: center; height: 100vh; }
        form { background: white; padding: 40px; border-radius: 12px; box-shadow: 0 0 20px #ccc; }
        input { display: block; width: 100%; margin-bottom: 15px; padding: 10px; border-radius: 6px; border: 1px solid #ddd; }
        button { background: #00b488; color: white; border: none; padding: 10px; border-radius: 6px; cursor: pointer; width: 100%; }
        button:hover { background: #00996e; }
    </style>
</head>
<body>
    <form onsubmit="return redirectToProcess()" method="post">
        <h2>Create Account</h2>
        <input name="name" placeholder="Full Name" required>
        <input name="email" type="email" placeholder="Email" required>
        <input name="password" type="password" placeholder="Password" required>
        <button type="submit">Signup</button>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </form>
    <script>
        function redirectToProcess() {
            let form = document.forms[0];
            form.action = 'process_signup.php';
            return true;
        }
    </script>
</body>
</html>
