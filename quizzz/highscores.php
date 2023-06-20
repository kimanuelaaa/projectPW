<?php
include 'dbb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>High Scores</title>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="app.css">
</head>
<body>
<div class="container">
    <div id="highScores" class="flex-center flex-column">
        <h1 id="finalScore">High Scores</h1>
        <?php
        // Menampilkan data nama dari database
$sql = mysqli_query($conn, "SELECT * FROM `highscores` ORDER BY `score_highscore` DESC");

        if(mysqli_num_rows($sql) > 0) {
            echo "<ul>";
            while($row = mysqli_fetch_assoc($sql)) :
                echo "<li class='high-score'>" . $row['name_highscore'] . " - " . $row['score_highscore'] . "</li>";
            endwhile;
            echo "</ul>";
        } else {
            echo "Belum ada nama yang tersimpan.";
        }
        ?>
        <a class="btn" href="index.html">Go Home</a>
    </div>
</div>
</body>
</html>
