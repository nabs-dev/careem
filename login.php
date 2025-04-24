<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - Careem Clone</title>
    <style>
        body { font-family: Arial; background: #e6f2f2; display: flex; justify-content: center; align-items: center; height: 100vh; }
        form { background: white; padding: 40px; border-radius: 12px; box-shadow: 0 0 20px #bbb; }
        input, button { display: block; width: 100%; margin-bottom: 15px; padding: 10px; border-radius: 6px; border: 1px solid #ccc; }
        button { background: #00b488; color: white; border: none; cursor: pointer; }
        button:hover { background: #00996e; }
    </style>
</head>
<body>
    <form onsubmit="return redirectLogin()" method="post">
        <h2>Login</h2>
        <input name="email" type="email" placeholder="Email" required>
        <input name="password" type="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <p>New here? <a href="signup.php">Signup</a></p>
    </form>
    <script>
        function redirectLogin() {
            let form = document.forms[0];
            form.action = 'process_login.php';
            return true;
        }
    </script>
</body>
</html>
