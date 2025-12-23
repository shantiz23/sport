<?php
include 'db.php';
$message = "";

// Handle Add Score
if(isset($_POST['add_score'])){
    $player_id = $_POST['player_id'];
    $game_id = $_POST['game_id'];
    $score = $_POST['score'];

    $sql = "INSERT INTO scores (player_id, game_id, score)
            VALUES ('$player_id', '$game_id', '$score')";

    if($conn->query($sql)){
        $message = "Score added successfully!";
    } else {
        $message = "Error: " . $conn->error;
    }
}

$players = $conn->query("SELECT * FROM players");

$games = $conn->query("SELECT * FROM games");

$scores = $conn->query("
    SELECT scores.id, players.name AS player_name, games.game_name AS game_name, 
           scores.score 
    FROM scores
    JOIN players ON scores.player_id = players.id
    JOIN games ON scores.game_id = games.id
    ORDER BY scores.id DESC
");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scores</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h2>Record Scores</h2>

    <?php if($message != ""){ echo "<p>$message</p>"; } ?>

    <!-- Add Score Form -->
    <form method="POST" action="">
        <select name="player_id" required>
            <option value="">Select Player</option>
            <?php while($p = $players->fetch_assoc()) { ?>
                <option value="<?php echo $p['id']; ?>">
                    <?php echo $p['name']; ?>
                </option>
            <?php } ?>
        </select>
        <br><br>

        <select name="game_id" required>
            <option value="">Select Game</option>
            <?php while($g = $games->fetch_assoc()) { ?>
                <option value="<?php echo $g['id']; ?>">
                    <?php echo $g['game_name']; ?>
                </option>
            <?php } ?>
        </select>
        <br><br>

        <input type="number" name="score" placeholder="Enter Score" required><br><br>

        <input type="submit" name="add_score" value="Add Score">
    </form>

    <hr>

    <h3>All Scores</h3>

    <table border="1" cellpadding="10" cellspacing="0" style="margin:auto;">
        <tr>
            <th>ID</th>
            <th>Player</th>
            <th>Game</th>
            <th>Score</th>
        </tr>

        <?php while($row = $scores->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['player_name']; ?></td>
                <td><?php echo $row['game_name']; ?></td>
                <td><?php echo $row['score']; ?></td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>
