<!DOCTYPE html>
<html>
<?php
include 'conection.php';

session_start();
$usuario = $_SESSION['username'];

if (!isset($usuario)) {

  header('location: login.php');
}
if (isset($_GET['museo'])) {
  $_SESSION['museo_selected'] = $_GET['museo'];
}
?>

<head>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- JQuery  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script type="text/javascript" src="./js/clock.js"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="StyleSheet" href="./css/index.css" type="text/css">
  <link rel="StyleSheet" href="./css/card.css" type="text/css">

  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap" rel="stylesheet">

  <link rel="icon" href=".\img\icono.ico">
  <title>Home</title>


</head>

<body>
  <header>
    <h2 class="logo">
      <a class="logoText" href="index.php">
        <img src="./img/museumLogo2.png" height="115px">
        MOONSEUM
      </a>
    </h2>
    <nav>
      <ul>
        <li>
          <a class="header-btn" href="index.php">Inicio</a>
        </li>
        <li>
          <a class="header-btn" href="secret.html">Presentacion</a>
        </li>
        <li>
          <a class="header-btn active" href="#">App</a>
        </li>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <img src="./img/plano_gral.png" alt="Plano Museo ">
            </div>
          </div>
        </div>


        <li>
          <a class="logOut" href="close.php">LogOut</a>
        </li>

      </ul>
      <a href="#"></a>
    </nav>
  </header>


  <br>

  <center>
    <h2 style="font-weight:990;">Demo APP</h2>    
    <iframe style="border-radius:55px;" src="https://drive.google.com/file/d/1HXOea6gKIOLVBgXYl-WsEMRO-dpWJ2rg/preview" width="1050" height="620" allow="autoplay"></iframe>
  </center>


</body>

</html>