<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>Halaman Home</title>
    <style>
        body, html {
          font-family: "Roboto";
  height: 100%;
}

.bg {
  /* The image used */
  background-image: url("img/bghome.gif");
  animation: play 0s steps(1, end) 1;

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.container{
    margin-top: 15%;
}
    </style>
</head>
<body>

<div class="bg">
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end mx-5" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link text-light" aria-current="page" href="index.php">Home</a>
        <a class="nav-link text-light" href="album.php">Album</a>
        <a class="nav-link text-light" href="foto.php">Foto</a>
        <a class="nav-link text-light" href="logout.php">Logout</a>
      </div>
    </div>
  </div>
</nav>

<div class="container text-center">
  <div class="row align-items-center">
    <div class="col mt-3 text-light">
    <h3>Selamat datang</h3><h1><b><?=$_SESSION['namalengkap']?></b></h1>
        <p class="mt-3"></p>
    </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>