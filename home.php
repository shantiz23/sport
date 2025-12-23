<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - Sports Management</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>Sports Management System</h1>

        <!-- Navigation Menu -->
        <nav>
            <a href="home.php">Home</a>
            <a href="players.php">Players</a>
            <a href="games.php">Games</a>
            <a href="scores.php">Scores</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <h2>Welcome to the Sports Management System</h2>
        <p>
            This system allows you to manage players, games, and scores easily.
            Use the menu above to navigate through the system.
        </p>

        <br>

        <div style="padding:15px; background:#fff; width:60%; margin:auto; border-radius:10px; box-shadow:0 0 10px grey;">
            <h3>System Features:</h3>
            <ul style="text-align:left;">
                <li>✔ Manage Players</li>
                <li>✔ Add and View Games</li>
                <li>✔ Record Player Scores</li>
                <li>✔ Contact Page for Messages</li>
            </ul>
        </div>
    </main>

</body>
</html>
