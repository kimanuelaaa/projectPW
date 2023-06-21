<?php
include 'dbb.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];

    $sql = "INSERT INTO anggota (nama, nim) VALUES ('$nama', '$nim')";

    $sql = "SELECT * FROM `anggota` ORDER BY `nama` ASC";
}
?>

<!DOCTYPE html>
<html>
  <head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Anggota Kelompok 5</title>
    <link rel="stylesheet" href="kelompok.css">
  </head>
  <body>
    <div class="container">
		<div id="Anggota Kelompok" class="flex-center flex-column">
		  <h1 id="Anggota Kelompok">Anggota Kelompok 5</h1>
    <div id="container">
      <div class="box">
        <img src="fael.jpg" alt="Foto Anggota 1">
        <nama>Marcellino Sembel</nama>
		<nim>210211060177</nim>
      </div>
      <div class="box">
        <img src="kim.jpg" alt="Foto Anggota 2">
        <nama>Kimberly Rondonuwu</nama>
		<nim>210211060099</nim>
      </div>
      <div class="box">
        <img src="ahmad.jpg" alt="Foto Anggota 3">
        <nama>Ahmad Galang Lawendatu</nama>
		<nim>210211060204</nim>
      </div>
      <div class="box">
        <img src="nicholas.jpg" alt="Foto Anggota 4">
        <nama>Nicholas Tambun</nama>
		<nim>210211060101</nim>
      </div>
    <script src="script.js"></script>
	<a href="https://drive.google.com/drive/folders/1XXzfNfyROh4NxMr5StpkjvLysrGosw9W?usp=share_link">Link Video</a>
	<button oneclick="gotoLink(this)" value="https://drive.google.com/drive/folders/1XXzfNfyROh4NxMr5StpkjvLysrGosw9W?usp=share_link"></button>
	</div>
  <div><a class="btn" href="index.html">Go Home</a></div>
  </body>
  <script>
	  function gotoLink(link){
		  console.log(link.value);
		  window.open(link.value);
	  };
    function resizeBoxes() {
	const boxes = document.querySelectorAll('.box');
	boxes.forEach(box => {
	  box.style.width = `${(document.documentElement.clientWidth - 150) / 4}px`;
	  box.style.height = `${(document.documentElement.clientHeight - 150)}px`;
	});
  }
	</script>
</html>
