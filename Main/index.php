<!DOCTYPE html>
<html>
  <?php
    include 'conection.php';

    session_start();
    $usuario = $_SESSION['username'];
    
    if(!isset($usuario)){

      header('location: login.php');

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
        <br>

      <div class = "row justify-content-center">
    
        <div class = "col-5 row" style="align-items:center;">
          <!--Museos -->
          <h2 class="col-4 btn_title">Museos</h2>
          <!--Agregar nueva -->
            <a  class="col-1" href="form_new_museum.php">
              <button class="icon-btn add-btn">
                <div class="add-icon"></div>
                <div class="btn-txt">Agregar Nuevo</div>
              </button>
            </a>

        </div>

        <div class = "col-7 row search-part" style="align-items:center;">

            <!--SearchBar -->

            <div class="col-7" >
              <div class = "col-7">
                <form class="d-flex input-group" id="searchbar" method = "GET">
                  <!-- Se necesita centrar la X de eliminar -->
                  <?php
                    if(!empty($_GET['seachbar_input']))
                    {
                      echo'<a href="index.php" class="fas fa-times-circle" style = "position: relative; margin:5px;"></a>';
                    }
                  ?>
                  
                  <input class="form-control" type="search" name = "seachbar_input" placeholder="Buscar..." aria-label="Search">
                  <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </form>
              </div>
            </div>

            <!-- Ordenador de archivos -->
    
            <div class=" col-4" id="select" style="float: right;">
              <form action = ""  id="ordenador" method = "post">
                <select class="form-select" name = "select_ordenador" onchange= "selectOptionSort()" aria-label="Default select example">
                <?php 
                  if(!empty($_POST['select_ordenador']))
                  {
                    $seleccionador = $_POST['select_ordenador'];
                    echo '<option selected> Ordenado por:  '.$seleccionador.' </option>';
                  }
                  
                ?>
                  <optgroup label="Ordenar por Nombre">
                    <option value="nombre ASC">A-Z</option>
                    <option value="nombre DESC">Z-A</option>
                  </optgroup>

                  <optgroup label="Ordenar por ID">
                    <option value="cod DESC">Más recientes</option>
                    <option value="cod ASC">Más antiguos</option>
                  </optgroup>

                </select>
              </form>
            </div>

          </div>

      </div>
      <br>
      
    
    <!-- Items Body --> 
    
    <div class="items-container display-flex row justify-content-center">
      
      
      <?php

      // Definimos la variable ordenador
      if(!empty($_POST['select_ordenador']))
      {
        $seleccionador = $_POST['select_ordenador'];
      }
      else
      {
        $seleccionador = "cod";
      }

      // Definimos la searchbar
      if(!empty($_GET['seachbar_input']))
      {
        $searchbar = trim($_GET['seachbar_input']);
      }
      else
      {
        $searchbar = "";
      }

      

      

      $sql = "SELECT * FROM museo WHERE 
      (nombre LIKE '%".$searchbar."%' OR cod LIKE '%".$searchbar."%' OR descripcion LIKE '%".$searchbar."%')  
      ORDER BY ".$seleccionador."";
      $resultado = mysqli_query($con,$sql) or die(mysqli_error($con));
     
      if(mysqli_num_rows($resultado) == 0)
      {?>
        <!-- Add card -->
        <a class="card-add col-3" href = "form_new_museum.php" >
          <strong class="card_title"></strong> 
          <div class="card__body">
            <span>+</span>  
          </div>
        </a>
      <?php
      }
      

      //Generacion de las peticiones (cards)
      while($fila = mysqli_fetch_array($resultado) ){ 

      ?>

          <a href="index_obras.php?museo=<?php print($fila["cod"])?>" class="card col-3">
              <strong class="card_title"><?php echo ' '.$fila["nombre"].'_'.$fila["cod"]; //estaba testeando como quedaba con la cantidad en el titulo?></strong> 
              <div class="card__body">
                  
                  <img <?php echo 'src="'.$fila['imagen'].'" alt="'.$fila['nombre'].'"'; ?> width="400px" height = "220px" >
              </div>
              <span class="info-container" >           
                <!-- Por alguna razon que desconozco, al usar class en vez de id, hace que el texto se agrande. despues se resolverá-->
                <?php 
                  // $fecha = date('d/m/y h:i', $fila['fecha_generacion'] );
                  // $dateNew = DateTime::createFromFormat('Y-m-d H:i:s', $fila['fecha_generacion'])->format('d/m/y H:i');

                  date_default_timezone_set('America/Argentina/Cordoba');                  
                  $currentTime =  strtotime(date('H:i', time()));     

                  // Se necesita sacar la diferencia de la currentTime - fecha_estimada_devolucion
                  
                  // $diff = $currentTime - strtotime($fila['fecha_estimada_devolucion']);

                  // echo $diff . ' days ';


                ?>
                <!-- <input name="button" type=button onclick="if(confirm('¿Estas seguro/a que ha sido devuelto este elemento?')){
                    this.form.submit();}
                else{ alert('Operación cancelada');}" 
                title="Marcar como entregada" value = "X" class="fas fa-times-circle" <?php echo 'id ="'.$fila['cod'].'" ' ?>></input> -->
                <input name = "id_card" <?php echo ' value = "'.$fila['cod'].'" ' ?> style="display: none">
                <p id="text1"><strong>Nombre :</strong> <?php print($fila['nombre']); ?></p>
                <p id="text1"><strong>ID  : </strong><?php print($fila['cod']); ?></p>
                <p id="text1"><strong>Ubicacion   :</strong><?php print($fila['ubicacion']); ?></p>            

              </span>    
      </a>
                  
      <?php

      }
      ?>

    </div>
    </div>
    
    
    <footer>
      <a href="./secret.html" class = "easter_egg"><img src=".\img\logo_2.png" width = "2.2%" alt="MoonDrive_logo"></a>    
      <span>© MoonDrive Company </span>
      
    </footer>

    


    <script>

      function selectOptionSort(){
    
        let option = document.getElementById('ordenador');
        option.submit();


      }
      
      function SeachBar(){
        
        let searchbar = document.getElementById('searchbar');
  

        searchbar.submit();

      }

      $(document).ready(function(){
			var active = false;
            var down = false;
            
            $("#bell").click(function(e){
				
                var color = $(this).text();
				if(down){
                
					$("#box").css("height","0px");
					$("#box").css("opacity","0");
					down = false;
				}else{
					
					$("#box").css("height","auto");
					$("#box").css("opacity","1");
					down = true;
					
				}
                
            });
			//funcion para que el boton agregar amigos pueda abrir y cerrar el PopUp al tocarlo
			$("#friendsbtn").click(function(e){
                
				if(active == true){
                
					$(".addfriends_container").css("display","none");
					active = false;
				}else{
					
					$(".addfriends_container").css("display","block");
					
					active = true;
					
				}
                
            });
			//funcion el boton X para cerrar el formulario
            $(".close-btn").click(function(e){
                
                $(".addfriends_container").css("display","none");
                active=false;
                
                
            });
                
        });
    </script>

  </body>
</html>