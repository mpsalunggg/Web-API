<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="post">
            <table>
                <tr>
                    <td>
                        <h1>REGISTER</h1>
                    </td>
                </tr>
                    <td>
                        <input type="text" name="usernameregis" placeholder="Username">
                    </td>
                <tr>
                    <td>
                        <input type="text" name="passwordregis" placeholder="Password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="tombol" value="REGISTER">
                        <a href="login.php">
                            <input type="button" value="LOGIN">
                        </a> 
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html> -->

<!-- login baru -->
<!doctype html>
<html lang="en">
  <head>
    <title>WEBSITE API</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="form/css/style.css">
    <style>
        *{
            overflow: hidden;
        }
        .ftco-section {
            padding-top:60px;
        }
    </style>
  </head>
  <body>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="wrap d-md-flex">
              
              <div class="login-wrap p-4 p-md-5">
                <div class="d-flex">
                  <div class="w-100">
                    <h3 class="mb-4">Register</h3>
                  </div>
                  <div class="w-100">
                    <div class="social-media d-flex justify-content-end">
                        <p class="d-flex align-items-center justify-content-end">
                            <img src="image/untad.png" width="40px">
                        </p>
                       
                    </div>
                  </div>
                </div>
                <form method="post" class="signin-form">
                  <div class="form-group mb-3"><label class="label" for="name">Username</label><input type="text" class="form-control" placeholder="Username" required name="usernameregis"></div>
                  <div class="form-group mb-3"><label class="label" for="password">Password</label><input type="password" class="form-control" placeholder="Password" required name="passwordregis"></div>
                  <div class="form-group"><input type="submit" name="tombol" value="Register" class="form-control btn btn-primary rounded submit px-3"></div>
                </form>
                <p class="text-center">Sudah punya akun? <a href="login.php">Login</a></p>
            </div>
            <div class="img" style="background-image: url(form/images/bola.jpg);"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="form/js/jquery.min.js"></script>
    <script src="form/js/popper.js"></script>
    <script src="form/js/bootstrap.min.js"></script>
    <script src="form/js/main.js"></script>
  </body>
</html>

<?php


if (isset ($_POST['tombol'])) {
    $usernameregis = $_POST['usernameregis'];
    $passwordregis = $_POST['passwordregis'];
    include_once("config.php");

    if (empty($_POST['usernameregis'])){
        echo"<script>alert('Username Tidak Boleh Kosong')</script>";
    } elseif (empty($_POST['passwordregis'])){
        echo"<script>alert('Password tidka boleh kosong')</script>";
    } else {
        $query = "INSERT INTO `login` (`username`, `password`) VALUES ('$usernameregis', '$passwordregis');";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo"<script>alert('Berhasil Daftar')</script>";
        } else {
             echo "Gagal";
        }
    }
}

?>