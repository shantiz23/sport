<?php
include 'db.php';
$message = '';

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['message'];

    $sql = "INSERT INTO contact_messages (name, email, subject, message) 
            VALUES ('$name', '$email', '$subject', '$msg')";

    if($conn->query($sql)){
        $message = "Thank you! Your message has been sent.";
    } else {
        $message = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Contact Us</h2>
    <?php if($message != '') { echo "<p>$message</p>"; } ?>

    <form method="POST" action="">
        <input type="text" name="name" placeholder="Your Name" required><br><br>
        <input type="email" name="email" placeholder="Your Email" required><br><br>
        <input type="text" name="subject" placeholder="Subject"><br><br>
        <textarea name="message" placeholder="Your Message" rows="5" cols="30" required></textarea><br><br>
        <input type="submit" name="send" value="Send Message">
    </form>
</body>
</html>
