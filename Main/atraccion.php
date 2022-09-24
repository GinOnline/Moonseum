<!DOCTYPE html>
<html>
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
  <head>
    
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

    <link rel="icon" href=".\img\icono.ico">
    <title>Home</title>

    
  </head>  
  <body>
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
        <br>
        <br>
        <?php
            $sql = "SELECT * FROM atraccion WHERE ID = ".$_SESSION['cod_atraccion']." ";
            $resultado = mysqli_query($con,$sql) or die(mysqli_error($con));
            // print($sql);
            while($fila = mysqli_fetch_array($resultado) ){
            
                



            }
        ?>
        

  </body>
</html>