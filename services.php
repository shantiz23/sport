<?php
include 'db.php'; // optional if you want dynamic content later
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - 3kfc Sports Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- HEADER SECTION -->
    <header>
        <h1>3kfc Sports Management</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="players.php">Players</a>
            <a href="games.php">Games</a>
            <a href="scores.php">Scores</a>
            <a href="services.php" class="active">Services</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <!-- PAGE TITLE -->
    <section class="page-title">
        <h2>Our Services</h2>
        <p>We offer professional sports management and player support services.</p>
    </section>

    <!-- SERVICES SECTION -->
    <section class="services-container">

        <div class="service-box">
            <h3>Player Management</h3>
            <p>We manage athletes by offering training programs, career planning, and personal development.</p>
        </div>

        <div class="service-box">
            <h3>Game Scheduling</h3>
            <p>We organize and coordinate matches, tournaments, and training sessions for teams.</p>
        </div>

        <div class="service-box">
            <h3>Performance Tracking</h3>
            <p>We record and analyze scores, player statistics, and game reports for improvement.</p>
        </div>

        <div class="service-box">
            <h3>Team Support</h3>
            <p>We provide logistics, equipment management, and team coordination support.</p>
        </div>

        <div class="service-box">
            <h3>Coaching Services</h3>
            <p>Professional coaching services to help athletes reach their maximum potential.</p>
        </div>

        <div class="service-box">
            <h3>Sports Consultancy</h3>
            <p>We offer expert advice for clubs, sports programs, and athletic development.</p>
        </div>

    </section>

    <!-- FOOTER -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> 3kfc Sports Management. All rights reserved.</p>
    </footer>

</body>
</html>
