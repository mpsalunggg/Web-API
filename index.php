<?php
include('sidebar.php');
include_once('config.php');
// include('login.php');
// session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  /* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap'); */
* {box-sizing: border-box;}
body {font-family: 'poppins', sans-serif, ; margin-left:240px;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  /* margin: auto; */
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<link href="style.css" rel="stylesheet">
</head>
<body>

<h1>Football</h1>
<?php
// if(!isset($_SESSION['username'])){
    // print_r($_SESSION);
    // if($_SESSION['username'] == 'admin'){
    //     echo "halo";
    // }
?>
<p>Sepak bola dikenal di Amerika Serikat dan Kanada sebagai football adalah olahraga yang dimainkan dua tim yang masing-masing terdiri dari 11 pemain. Permainan menggunakan bola yang disebut football (bola kaki), berbentuk oval dan berwarna coklat. Kedua ujung lapangan disebut bidang endzone yang merupakan daerah gawang lawan.</p>

<div class="slideshow-container">

    <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="image/bola1.png" style="width:100%">
    </div>

    <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="image/bola2.png" style="width:100%">
    </div>

    <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="image/bola3.png" style="width:100%">
    </div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 
