<?php
include_once("config.php");
?>

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
              <div class="img" style="background-image: url(form/images/bola.jpg);"></div>
              <div class="login-wrap p-4 p-md-5">
                <div class="d-flex">
                  <div class="w-100">
                    <h3 class="mb-4">Login</h3>
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
                  <div class="form-group mb-3"><label class="label" for="name">Username</label><input type="text" class="form-control" placeholder="Username" required name="username"></div>
                  <div class="form-group mb-3"><label class="label" for="password">Password</label><input type="password" class="form-control" placeholder="Password" required name="password"></div>
                  <div class="form-group"><input type="submit" name="submit" value="Login" class="form-control btn btn-primary rounded submit px-3"></div>
                </form>
                <p class="text-center">Belum punya akun? <a href="register.php">Register</a></p>
              </div>
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
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($_POST['username'])) {
        echo"<script>alert('Username tidak boleh kosong');</script>";
    } elseif (empty($_POST['password'])) {
        echo"<script>alert('Password tidak boleh kosong');</script>";
    } else {
        $query = "SELECT * FROM `login` WHERE `username` = '$username' AND `password` = '$password'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['username'] = $username;
            header('location:index.php');
        } else {
            echo "Login Gagal";
        }
    }
}



?>