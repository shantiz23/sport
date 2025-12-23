<?php
// player.php

$conn = new mysqli("localhost", "root", "", "sports_management");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Add new player
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $conn->prepare("INSERT INTO players (name, age, team, position) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("siss", $_POST['name'], $_POST['age'], $_POST['team'], $_POST['position']);
    $stmt->execute();
    $stmt->close();
}

// Fetch players
$result = $conn->query("SELECT * FROM players");
?>

<h2>Players</h2>
<table border="1">
<tr><th>ID</th><th>Name</th><th>Age</th><th>Team</th><th>Position</th></tr>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['age'] ?></td>
    <td><?= $row['team'] ?></td>
    <td><?= $row['position'] ?></td>
</tr>
<?php endwhile; ?>
</table>

<h2>Add Player</h2>
<form method="POST">
    Name: <input name="name" required><br>
    Age: <input type="number" name="age" required><br>
    Team: <input name="team" required><br>
    Position: <input name="position" required><br>
    <input type="submit" value="Add">
</form>

<?php $conn->close(); ?>

