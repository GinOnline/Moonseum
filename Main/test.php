<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
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
        <div class="w3-center">
          <h3>TITLE HEADING</h3>
          <h5>Title description, <span class="w3-opacity">May 2, 2016</span></h5>
        </div>

        <div class="w3-justify">
          <img src="/w3images/girl_hat.jpg" alt="Girl Hat" style="width:100%" class="w3-padding-16">
          <p><strong>More Hats!</strong> I am crazy about hats these days. Some text about this blog entry. Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor
            magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
          <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo1')" id="myBtn"><b>Replies  </b> <span class="w3-tag w3-white">1</span></button></p>
          <p class="w3-clear"></p>
          <div class="w3-row w3-margin-bottom" id="demo1" style="display:none">
            <hr>
              <div class="w3-col l2 m3">
                <img src="/w3images/avatar_smoke.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>George <span class="w3-opacity w3-medium">May 3, 2015, 6:32 PM</span></h4>
                <p>Great blog post! Following</p>
              </div>
          </div>
        </div>
      </div>
      <hr>

<!-- Footer -->
<footer class="col-12">
  <a href="#" class="w3-button w3-black w3-padding-large w3-margin-bottom"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <a href="./secret.html" class = "easter_egg"><img src=".\img\logo_2.png" width = "2.2%" alt="MoonDrive_logo"></a>    
  <span>© MoonDrive Company </span>
</footer>

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