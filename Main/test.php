<?php
    include 'conection.php';

    session_start();
    $usuario = $_SESSION['username'];
    
    if(!isset($usuario)){

      header('location: login.php');

    }
    if(isset($_GET['atraccion']))
    {
        $_SESSION['cod_atraccion'] = $_GET['atraccion'];
    }
  ?>

<!DOCTYPE html>
<html>
<head>
  <title>Atraccion</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     
   <!-- JQuery  -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <script type="text/javascript" src="./js/clock.js"></script>
   
   <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="StyleSheet" href="./css/index.css" type="text/css" >
    <link rel="StyleSheet" href="./css/card.css" type="text/css" >

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   

    <link rel="icon" href=".\img\icono.ico">

<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}




</style>
</head>
<body class="w3-light-grey">


  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

<header>
          <h2 class="logo">
            <a style="text-decoration: none; margin:0;" href="index.php">
              <img src="./img/museumLogo2.png" height = "115px">
              MOONSEUM
            </a>
          </h2>
   
          <nav>
                <ul>
                  <li>
                      <a class="header-btn active" href="index.php">Inicio</a>
                  </li>
                  <li>
                      <a class = "header-btn" href="historial.php">Historial</a>
                  </li>
                  <li>
                      <a class = "header-btn" href="form_new_museum.php">Nuevo Elemento</a>
                  </li>
                  
                  <li>
                      <a class = "logOut" href="close.php">LogOut</a>
                  </li>
                    
                </ul>
                <a href="#"></a>
          </nav>
 
          
        </header>
  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l12 s12">
    
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <?php
           $sql = "SELECT * FROM atraccion WHERE ID = ".$_SESSION['cod_atraccion']." ";
           $resultado = mysqli_query($con, $sql) or die(mysqli_error($con));

           while ($fila = mysqli_fetch_array($resultado)) {

              //  echo  '<option value="' . $fila['nombre'] . '">';


        ?>
        <!-- Mapa -->
        <button style="border-radius:25px; padding:20px; font-size:20px;" type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">
          <i class="fas fa-map-marked-alt"></i>
        </button>

        <!-- IMG -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <img src="./img/Mapa_jardin.jpg" alt="Plano General">
            </div>
          </div>
        </div>


        <div class="w3-center">
          <h3><?php print($fila['nombre']); ?></h3>
          <h6><?php print($fila['descripcion']); ?> ,  <span class="w3-opacity">May 2, 1512</span></h6>
        </div>
        
        <div class="w3-justify">
          <img src="<?php print($fila['imagen']); ?>" alt="<?php print($fila['nombre']); ?>" style="width:30%" class="w3-padding-16">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia doloribus deleniti, assumenda, enim eaque amet, optio libero dignissimos esse aperiam ratione consequuntur fuga. Possimus suscipit perspiciatis expedita sed. Dolor, dolorem.<?php print($fila['descripcion']); ?></p>
          <p>Aut soluta voluptatem id nemo nobis blanditiis optio fuga neque iure. Facilis, fugit illum cum quisquam fugiat alias iusto iure expedita sapiente!<p><?php print($fila['descripcion']); ?></p></p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo1')" id="myBtn"><b>Replies  </b> <span class="w3-tag w3-white">4</span></button></p>
          <p class="w3-clear"></p>
          <div class="w3-row w3-margin-bottom" id="demo1" style="display:none">
          <!-- Comentario -->
            <div>              
              <div class="w3-col l2 m3">
                <hr>
                <img src="./img/user.png" style="width:25%;">
              </div>
              <div class="w3-col l10 m9">
                <hr>
                <h4>Pedro <span class="w3-opacity w3-medium">June 17, 2020, 6:32 PM</span></h4>
                <p>Exelente obra! </p>
              </div>
            <!-- Comentario -->
            <div>              
              <div class="w3-col l2 m3">
                <hr>
                <img src="./img/user5.png" style="width:25%;">
              </div>
              <div class="w3-col l10 m9">
                <hr>
                <h4>Laura <span class="w3-opacity w3-medium">May 4, 2021, 7:32 PM</span></h4>
                <p> Muy linda experiencia. Ideal para ir con familia</p>
              </div>

            <!-- Comentario -->
            <div>              
              <div class="w3-col l2 m3">
                <hr>
                <img src="./img/user3.png" style="width:25%;">
              </div>
              <div class="w3-col l10 m9">
                <hr>
                <h4>Gabriel <span class="w3-opacity w3-medium">Dec 3, 2019, 8:32 PM</span></h4>
                <p>De hecho es mucho mejor de lo que esperaba... </p>
              </div>

            <!-- Comentario -->
            <div>              
              <div class="w3-col l2 m3">
                <hr>
                <img src="./img/user4.png" style="width:25%;">
              </div>
              <div class="w3-col l10 m9">
                <hr>
                <h4>Marta <span class="w3-opacity w3-medium">Jan 7, 2022, 9:32 PM</span></h4>
                <p>La verdad que la obra no me encanto, pero los juegos que contiene al aplicacion me entretuvieron bastante </p>
              </div>

            </div>

          </div>
          
          <?php } ?>
        </div>
      </div>

<!-- Footer -->
<!-- <footer class="col-12"> -->
  <!-- <a href="#" class="w3-button w3-black w3-padding-large w3-margin-bottom"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a> -->
  <!-- <a href="./secret.html" class = "easter_egg"><img src=".\img\logo_2.png" width = "2.2%" alt="MoonDrive_logo"></a>     -->
  <!-- <span>© MoonDrive Company </span> -->
<!-- </footer> -->

<script>
// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").click();
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

function likeFunction(x) {
  x.style.fontWeight = "bold";
  x.innerHTML = "✓ Liked";
}
</script>

</body>
</html>