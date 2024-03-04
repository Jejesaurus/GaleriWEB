<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>Halaman Landing</title>
    <style>
      body{
        font-family: "Roboto";
        background-color: #0A0A0A;
      }
    </style>
</head>
<body class="">

    <?php
        session_start();
        if(!isset($_SESSION['userid'])){
    ?>
    <div class="container d-flex justify-content-center" style="margin-top:10rem;">
    <div class="card" style="width: 25rem;">  
  <div class="card-body">
    <h5 class="card-title text-center">Login / Register First:)</h5>
    <div class="d-flex justify-content-center mt-4">
    <a href="register.php" class="btn btn-primary mx-1">Register</a>
    <a href="login.php" class="btn btn-primary mx-1">Login</a>
    </div>
  </div>
</div>
</div>
    <?php
        }else{
    ?>   
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
        <span class="border mx-1 border-light rounded-4"><a class="nav-link text-white" href="plus_foto.php"><i class="bi bi-plus-circle"> Upload</i></a></span>
        <span class="border mx-1 border-light rounded-4"><a class="nav-link text-white" href="logout.php"><i class="bi bi-box-arrow-left"> Logout</i></a></span>
      </div>
    </div>
  </div>
</nav>

    

    <table width="100%" border="1" cellpadding="5" cellspacing="0">

        <?php
            include "koneksi.php";
            $sql=mysqli_query($conn,"select * from foto,user where foto.userid=user.userid");
            while($data=mysqli_fetch_array($sql)){
        ?>
            
  <div class="row align-items-start mt-5">
    <div class="col">
    </div>
    <div class="col">
    <div class="card text-bg-dark mb-5" style="width: 28rem;">
    <div class="card-header">
    <div class="container text-center">
        <h5><i class="bi bi-person-circle">  </i><?=$data['namalengkap']?></h5>
    </div>
    </div>
    <img class="p-2 card-img-top" src="gambar/<?=$data['lokasifile']?>" height="400px">
  <div class="card-body">
    <h5 class="card-title"><?=$data['judulfoto']?></h5>
    <p class="card-text"><?=$data['deskripsifoto']?></p>
    <p>
        <i class="bi bi-heart-fill text-danger">
        <?php
            $fotoid=$data['fotoid'];
            $sql2=mysqli_query($conn,"select * from likefoto where fotoid='$fotoid'");
            echo mysqli_num_rows($sql2);
            ?>
        </i>
    </p>
    <a href="like.php?fotoid=<?=$data['fotoid']?>"><i class="bi bi-suit-heart text-light h2 mx-2"></i></a>
    <a href="komentar.php?fotoid=<?=$data['fotoid']?>"><i class="bi bi-chat-left-dots text-light h3 mx-2"></i></a>
  </div>
</div>
    </div>
    <div class="col">
    </div>
  </div>

            
        <?php
            }
        ?>
            <?php
        }
    ?>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>