
<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
        }

        .navbar {
            background: #222;
            color: white;
            padding: 20px 40px;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            margin: 0;
        }

        .logout {
            background: #e74c3c;
            color: white;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 5px;
        }

        .logout:hover {
            background: #c0392b;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .welcome {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .welcome h1 {
            margin-bottom: 10px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .card h2 {
            margin-bottom: 10px;
        }

        .card p {
            color: #666;
        }

        @media (max-width: 768px) {

            .cards {
                grid-template-columns: 1fr;
            }

            .navbar {
                padding: 15px 20px;
            }

        }

    </style>

</head>

<body>


    <!-- Navbar -->

    <div class="navbar">

        <h2>My Dashboard</h2>

        <a href="logout.php" class="logout">
            Logout
        </a>

    </div>


    <!-- Main Container -->

    <div class="container">


        <!-- Welcome Section -->

        <div class="welcome">

            <h1>Welcome to Dashboard 👋</h1>

            <p>
                You have successfully logged in.
            </p>

        </div>


        <!-- Dashboard Cards -->

        <div class="cards">

            <div class="card">

                <h2>👤 Users</h2>

                <p>
                    Manage your users
                </p>

            </div>


            <div class="card">

                <h2>📊 Reports</h2>

                <p>
                    View your reports
                </p>

            </div>


            <div class="card">

                <h2>⚙️ Settings</h2>

                <p>
                    Manage settings
                </p>

            </div>

        </div>


    </div>

</body>

</html>

