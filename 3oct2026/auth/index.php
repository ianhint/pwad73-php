<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            font-family: Arial, sans-serif;
            background: #f3f6fb;
            color: #1f2937;
        }
        .login-box {
            width: min(92vw, 360px);
            background: #fff;
            padding: 30px 24px;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(0,0,0,.08);
            border: 1px solid #e5e7eb;
        }
        h3 {
            margin: 0 0 20px;
            text-align: center;
            font-size: 26px;
        }
        form {
            display: grid;
            gap: 12px;
        }
        input {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #d1d5db;
            border-radius: 10px;
            font-size: 15px;
        }
        input[type="submit"] {
            background: #2563eb;
            color: #fff;
            border: none;
            cursor: pointer;
            font-weight: 600;
        }
        .error {
            margin: 0 0 12px;
            text-align: center;
            color: #b91c1c;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h3>Login Form</h3>

        <?php
        if (isset($_POST['submit'])) {
            extract($_POST);
            $password = md5($password);
            include_once 'dbconfig.php';

            $result = $conn->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");

            if ($result && $result->num_rows > 0) {
                session_start();
                $_SESSION['email'] = $email;
                header("Location: dashboard.php");
                exit;
            } else {
                echo "<div class='error'>Login Failed</div>";
            }
        }
        ?>
        
        <form action="" method="post">
            <input type="email" name="email" placeholder="Enter email" value="<?php if(isset($_POST['email']))echo $_POST['email'];?>" required>
            <input type="password" name="password" placeholder="Enter password" required>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>
</html>