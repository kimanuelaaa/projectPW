<?php
include 'dbb.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $username = $data['username'];
    $score = $data['score'];

    // Insert data into the database
    $sql = "INSERT INTO highscores (name_highscore, score_highscore) VALUES (:username, :score)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':score', $score);

    if ($stmt->execute()) {
        $response = array('success' => true, 'message' => 'High score saved successfully!');
        echo json_encode($response);
    } else {
        $response = array('success' => false, 'message' => 'Failed to save high score.');
        echo json_encode($response);
    }
}

$conn = null;
?>
