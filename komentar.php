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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <style>
      body{
        font-family: "Roboto";
        background-color: #0A0A0A;
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>
    <title>Halaman Komentar</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end mx-5" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link mx-1 text-white active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link mx-1 text-white" href="album.php">Album</a>
        <a class="nav-link mx-1 text-white" href="foto.php">Foto</a>
        <a class="nav-link mx-1 text-white" href="logout.php">Logout</a>
      </div>
    </div>
  </div>
</nav>

<div class="container text-center">
        <div class="row">
        <div class="col">
        </div>
        <div class="col">
        <div class="row justify-content-center">
<form action="tambah_komentar.php" method="post">
        <?php
            include "koneksi.php";
            $fotoid=$_GET['fotoid'];
            $sql=mysqli_query($conn,"select * from foto where fotoid='$fotoid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
    <div class="col-4">
    <div class="card" style="width: 30rem;">
    <img class="card-img-top p-3" src="gambar/<?=$data['lokasifile']?>" width="200px">
  <div class="card-body">
    <h5 class="card-title"><?=$data['judulfoto']?></h5>
    <p class="card-text"><?=$data['deskripsifoto']?></p>
  </div>
</div>
    </div>
    <div class="col-4">
</div>
  </div>    
  <?php
            }
        ?>
    </form>

    <form action="tambah_komentar.php" method="post">
        <?php
            include "koneksi.php";
            $fotoid=$_GET['fotoid'];
            $sql=mysqli_query($conn,"select * from foto where fotoid='$fotoid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
        <input type="text" name="fotoid" value="<?=$data['fotoid']?>" hidden>
        <table>

            <tr>
                <td>
                <div class="form-floating">
                <span style="width: 480px;" class="input-group-text" id="addon-wrapping"><i class="bi bi-chat-dots-fill text-dark h4 me-2"></i>
                <textarea class="form-control" id="floatingTextarea" type="text" name="isikomentar"></textarea>
                </span>
                </div>
                </td>
            </tr>
            <tr>
                <td><button type="submit" class="btn btn-primary">Send</button></td>
            </tr>
        </table>
        <?php
            }
        ?>
    </form>
        </div>
        <div class="col">
        </div>
        </div>
        </div>

    <table class="text-light" width="100%" border="1" cellpadding=5 cellspacing=0>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Komentar</th>
            <th>Tanggal</th>
        </tr>
        <?php
            include "koneksi.php";
            $userid=$_SESSION['userid'];
            $sql=mysqli_query($conn,"select * from komentarfoto,user where komentarfoto.userid=user.userid and fotoid='$fotoid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
            <tr>
                <td><?=$data['komentarid']?></td>
                <td><?=$data['namalengkap']?></td>
                <td><?=$data['isikomentar']?></td>
                <td><?=$data['tanggalkomentar']?></td>
            </tr>
        <?php
            }
        ?>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>