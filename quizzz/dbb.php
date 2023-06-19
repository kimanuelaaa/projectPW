<?php
$servername = "localhost";
$username = "id20921693_projekquiz";
$password = "projek_Quiz1";
$dbname = "id20921693_quiz";


    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("<script>alert('Terjadi error pada saat koneksi ke database!')</script>");
}
?>
