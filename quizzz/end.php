<?php
include 'dbb.php';
$score = $_GET['score'];
if(isset($_POST['submit'])) {
    
    $username = $_POST['username'];

    // Insert data into the database
    $sql = mysqli_query($conn, "INSERT INTO highscores (name_highscore, score_highscore) VALUES ('$username', $score)");
    if($sql) {
    echo "<script>alert('High score saved successfully!')</script>";
    echo "<script>window.location = 'index.html' </script>";
} else {
    echo "<script>alert('Failed to save high score.')</script>";
    $location = 'end.php?score=' . $score;
    echo "<script>window.location = '$location'</script>";
    die();
}

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Congrats!</title>
    <link rel="stylesheet" href="app.css" />
  </head>
  <body>
    <div class="container">
      <div id="end" class="flex-center flex-column">
        <h1 id="finalScore"><?php echo $score; ?></h1>
        <form action="" method="POST">
          <input
            type="text"
            name="username"
            id="username"
            placeholder="username"
          />
          <input
            type="submit"
            name="submit"
            class="btn"
            id="saveScoreBtn"
            value = "save"
          />
        </form>
        <a class="btn" href="game.html">Play Again</a>
        <a class="btn" href="index.html">Go Home</a>
      </div>
    </div>
  </body>
</html>
