<?php
include 'db.php';
$message = "";

if (isset($_POST['add_game'])) {
    $game_name = $_POST['game_name'];
    $game_date = $_POST['game_date'];

    // Prepared statement (secure)
    $stmt = $conn->prepare("INSERT INTO games (game_name, `date`) VALUES (?, ?)");
    $stmt->bind_param("ss", $game_name, $game_date);

    if ($stmt->execute()) {
        $message = "Game added successfully!";
    } else {
        $message = "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Fetch games
$games = $conn->query("SELECT * FROM games ORDER BY `date` ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Games</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Games List</h2>

<?php if (!empty($message)) { ?>
    <p><?php echo htmlspecialchars($message); ?></p>
<?php } ?>

<!-- Add Game Form -->
<form method="POST">
    <input type="text" name="game_name" placeholder="Game Name" required><br><br>
    <input type="date" name="game_date" required><br><br>
    <input type="submit" name="add_game" value="Add Game">
</form>

<hr>

<h3>All Games</h3>

<table border="1" cellpadding="10" cellspacing="0" style="margin:auto;">
    <tr>
        <th>ID</th>
        <th>Game Name</th>
        <th>Date</th>
    </tr>

    <?php if ($games && $games->num_rows > 0) { ?>
        <?php while ($row = $games->fetch_assoc()) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row['id']); ?></td>
                <td><?php echo htmlspecialchars($row['game_name']); ?></td>
                <td><?php echo htmlspecialchars($row['date']); ?></td>
            </tr>
        <?php } ?>
    <?php } else { ?>
        <tr>
            <td colspan="3">No games found</td>
        </tr>
    <?php } ?>
</table>

</body>
</html>
