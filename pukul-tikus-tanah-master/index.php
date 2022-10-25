<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pukul Tikus Tanah</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    .kembali {
      background-color: red;
      color: white;
      padding: 10px;
      margin: auto;
      border-radius: 10px;
      margin-left: 47.5%;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <h1>Pukul Tikus Tanah</h1>


  <button type="button" class="mulai" onclick="mulai()">Mulai!</button><br>



  <h2 class="papan-skor">0</h2>

  <div class="container">
    <div class="tanah">
      <div class="tikus"></div>
    </div>
    <div class="tanah">
      <div class="tikus"></div>
    </div>
    <div class="tanah">
      <div class="tikus"></div>
    </div>
    <div class="tanah">
      <div class="tikus"></div>
    </div>
    <div class="tanah">
      <div class="tikus"></div>
    </div>
    <div class="tanah">
      <div class="tikus"></div>
    </div>
  </div><br><br>
  <a href="../siswa/games.php" class="kembali">Kembali</a>
  <audio src="audio/Pop.mp3" id="pop"></audio>
  <script src="js/script.js"></script>


</body>

</html>
<?php
if (isset($_SESSION['status'])) { ?>
<?php
} else {
  echo "<script>
                alert('Silahkan login terlebih dahulu !')
                window.location='../index.php';  
                </script>";
}
?>