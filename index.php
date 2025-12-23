<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #1e3d59;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: #162a45;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            padding: 15px 0;
            display: block;
        }
        nav a:hover {
            background-color: #ff6e40;
        }
        .hero {
            background: url('https://images.unsplash.com/photo-1508609349937-5ec4ae374ebf?fit=crop&w=1350&q=80') no-repeat center center/cover;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-shadow: 2px 2px 4px #000;
            font-size: 2.5em;
        }
        .content {
            padding: 50px;
            text-align: center;
        }
        .services {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 30px;
        }
        .service {
            background-color: white;
            padding: 20px;
            margin: 10px;
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        footer {
            background-color: #1e3d59;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <header>
        <h1> Sports Management</h1>
        <p>Managing Sports, Empowering Athletes</p>
    </header>

    <nav>
        <a href="home.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="scores.php">scores</a>
        <a href="Games.php">Games</a>
        <a href="contact.php">Contact</a>
         <a href="register.php">Registration</a>
         <a href="Services.php">Services</a>
    </nav>

    <div class="hero">
        Your Sports Journey Starts Here
    </div>

    <div class="content">
        <h2>Our Services</h2>
        <div class="services">
            <div class="service">
                <h3>Event Management</h3>
                <p>We organize and manage sports events with precision and excellence.</p>
            </div>
            <div class="service">
                <h3>Player Development</h3>
                <p>Training, mentorship, and support to enhance athlete performance.</p>
            </div>
            <div class="service">
                <h3>Team Management</h3>
                <p>We help teams with logistics, scheduling, and overall coordination.</p>
            </div>
        </div>
    </div>

    <footer>
        &copy; 2025 3kfc Sports Management. All rights reserved.
    </footer>
</body>
</html>
