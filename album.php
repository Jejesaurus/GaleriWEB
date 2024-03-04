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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>Halaman Album</title>
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
        <span class="border mx-1 border-light rounded-4"><a class="nav-link text-white" href="plus_album.php"><i class="bi bi-plus-circle"> Upload</i></a></span>
        <span class="border mx-1 border-light rounded-4"><a class="nav-link text-white" href="logout.php"><i class="bi bi-box-arrow-left"> Logout</i></a></span>
      </div>
    </div>
  </div>
</nav>


    
    <div class="col text-light">
    <div class="container text-center">
  <div class="row align-items-center">
    <div class="mt-4">
    <table class="table table-dark mt-5 caption-top">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Tanggal dibuat</th>
            <th>Aksi</th>
        </tr>
        <?php
            include "koneksi.php";
            $userid=$_SESSION['userid'];
            $sql=mysqli_query($conn,"select * from album where userid='$userid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
                <tr>
                    <td><?=$data['albumid']?></td>
                    <td><?=$data['namaalbum']?></td>
                    <td><?=$data['deskripsi']?></td>
                    <td><?=$data['tanggaldibuat']?></td>
                    <td>
                        </i><a href="hapus_album.php?albumid=<?=$data['albumid']?>"><button class="btn btn-danger"><i class="bi bi-trash3"> Hapus</i></button></a>
                        <a href="edit_album.php?albumid=<?=$data['albumid']?>"><button class="btn btn-warning"><i class="bi bi-pencil-fill"> Edit</i></button></a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
    </div>
</div>

    </div>
  </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>