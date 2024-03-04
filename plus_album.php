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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>Tambah Album</title>
    <style>
        body{
          font-family: "Roboto";
            background-color: #0A0A0A;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand text-white" href="foto.php">
    <div class="collapse navbar-collapse justify-content-center mx-5" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <span class="border border-light px-3 py-2 rounded-5"><i class="bi bi-person-circle"> </i><?=$_SESSION['namalengkap']?></span>
        <a class="nav-link text-light" aria-current="page" href="index.php"></a>
        <span class="border mx-1 border-light rounded-4"><a class="nav-link text-white" href="index.php"><i class="bi bi-house"> Home</i></a></span>
        <span class="border mx-1 border-light rounded-4"><a class="nav-link text-white" href="album.php"><i class="bi bi-journal"> Album</i></a></span>
        <span class="border mx-1 border-light rounded-4"><a class="nav-link text-white" href="foto.php"><i class="bi bi-camera"> Foto</i></a></span>
        <span class="border mx-1 border-light rounded-4"><a class="nav-link text-white" href="logout.php"><i class="bi bi-box-arrow-left"> Logout</i></a></span>
      </div>
    </div>
  </div>
</nav>

<div data-aos="fade-up"  data-aos-duration="1000">
<div class="container text-center" style="margin-top: 100px;">
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
        <h2 class="me-3 text-light">Tambah Album</h2>
    <div class="card ms-3 bg-dark text-light" style="width: 18rem;">
  <div class="card-body">
  <form action="tambah_album.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Album</label>
    <input type="text" name="namaalbum" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
    <input type="text" name="deskripsi" class="form-control" id="exampleInputPassword1">
  </div>
  <a href="album.php"><button type="submit" class="btn btn-primary"><i class="bi bi-check-square"> Submit</i></button></a>
</form>
  </div>
</div>
    </div>
    <div class="col">
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>