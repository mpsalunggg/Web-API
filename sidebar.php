<?php
include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .sidebar {
            z-index: 9999;
            padding-top: 170px;
            width: 200px;
            height: 100%;
            background-color: rgb(22, 22, 22);
            position: fixed;
            top: 0;
            left: 0;
            overflow: auto;
        }
        .sidebar-header img{
            width: 90px;
            border-radius: 50%;
            margin:auto;
            display: flex;
            justify-content: center;
        }
        .sidebar-header p{
            text-align: center;
            font-size: 12px;
            letter-spacing: 1px;
            color: white;
            font-family: arial;
            font-weight: bold;
        }
        .sidebar-content {
            /* margin-right: px; */
            padding-top: 1px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        hr {
            width:90%;
            border: 1px solid rgb(255, 255, 255);
        }
        .sidebar-content a{
            width:100%;
            text-decoration: none;
            color: white;
            text-align:center;
        }
        .sidebar-content a:hover{
            width:100%;
            text-decoration: none;
            background-color: rgb(255, 255, 255);
            color: rgb(22, 22, 22);
        }
        .sidebar-content a{
            list-style: none;
            padding: 10px;
            font-size: 12px;
            color: white;
            font-family: arial;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <img src="image/untad.png">
            <!-- <p>&copy;Kelompok5</p> -->
        </div>
        <div class="sidebar-content">
            
            <?php
                if ($_SESSION['username'] == 'admin') {
            ?>     
                    <a href="profil.php">Profil Kelompok</a>
                     
            <?php
                }         
            ?>
            <a href="index.php">Home</a>
            <a href="football-leagues.php">Football Leagues</a>
            <a href="logout.php" onclick="return confirm('Yakin ingin Logout!')">Logout</a>
        </div>
    </div>
</body>
</html>