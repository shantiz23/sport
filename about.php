<?php
include 'db.php';

// Fetch About Us content from the database
$sql = "SELECT title, content FROM about LIMIT 1";
$result = $conn->query($sql);

$aboutTitle = "About 3kfc Sports Management";
$aboutContent = "3kfc Sports Management is dedicated to organizing and managing sports activities...";

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $aboutTitle = $row['title'];
    $aboutContent = $row['content'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - 3kfc Sports Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>3kfc Sports Management</h1>
        <p>Managing Sports, Empowering Athletes</p>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="players.php">Players</a>
        <a href="games.php">Games</a>
        <a href="scores.php">Scores</a>
        <a href="contact.php">Contact</a>
    </nav>

    <div class="hero" style="background: url('https://images.unsplash.com/photo-1521412644187-c49fa049e84d?fit=crop&w=1350&q=80') no-repeat center center/cover;">
        About Us
    </div>

    <div class="content">
        <h2><?php echo $aboutTitle; ?></h2>
        <p><?php echo $aboutContent; ?></p>
        <p>
            <a href="index.php" style="color: #ff6e40; text-decoration: none;">← Back to Home</a>
        </p>
    </div>

    <footer>
        &copy; 2025 3kfc Sports Management. All rights reserved.
    </footer>
</body>
</html>
