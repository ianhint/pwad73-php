<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            font-family: Arial, sans-serif;
            background: #f3f6fb;
            color: #1f2937;
        }
        .card {
            background: #fff;
            padding: 30px 24px;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(0,0,0,.08);
            border: 1px solid #e5e7eb;
            width: min(90vw, 450px);
            text-align: center;
        }
        h2 { margin-top: 0; }
        a {
            display: inline-block;
            margin-top: 16px;
            color: #2563eb;
            text-decoration: none;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Welcome to Dashboard</h2>

        <?php
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
        ?>

        <br>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>