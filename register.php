<?php
include 'db.php';
$message = '';

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encrypt password

    // Check if email or username exists
    $check = $conn->query("SELECT * FROM users WHERE email='$email' OR username='$username'");
    if($check->num_rows > 0){
        $message = "Username or Email already exists!";
    } else {
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if($conn->query($sql)){
            $message = "Registration successful! You can now <a href='login.php'>Login</a>";
        } else {
            $message = "Error: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Player Registration</h2>
    <?php if($message != ''){ echo "<p>$message</p>"; } ?>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>
