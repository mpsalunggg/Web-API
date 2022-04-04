<?php
include('sidebar.php');
include_once('config.php');

$sumber = 'https://api-football-standings.azharimm.site/leagues';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    <title>Hello, world!</title>
    <style>
      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        text-align: center;
        font-family: arial;
      }
      .card:hover{
        transform: scale(1.1);
        transition: 0.5s;
      }
    </style>
  </head>
  <body>
    <h1 class="mt-3">Football Leagues</h1>
    <!-- <hr style="width:95%"> -->
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach($data['data'] as $row) {

            ?>
                
            <div class="col-sm-3 mt-3">
                <div class="card" style="width: 12em;">
                <img src="<?php echo $row['logos']['light'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><?php echo $row['name'] ?></p>
                </div>
                </div>   
            </div>
            <?php } ?>
            
        </div>
    </div>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
