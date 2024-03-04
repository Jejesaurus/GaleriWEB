<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>Halaman Login</title>
    <style>
      body{
        font-family: "Roboto";
        background-image: url("img/bglogin.png");
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>
</head>
<body>

    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-5 mt-5">
    <div class="card o-hidden border-0 shadow-lg my-5" style="width: 25rem;">
  <div class="card-body p-0">
    <h4 class="card-title text-center p-5">Login Gallery</h4>
    <form class="card-text" action="proses_login.php" method="post">

  <div class="p-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 p-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  <center>
  <button type="submit" class="btn btn-primary">Submit</button>
  </center>
  <p class="m-4 text-center">Belum Punya Akun? <a href="register.php">Register</a></p>
    </form>
  </div>
</div>
</div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>