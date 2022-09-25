<!DOCTYPE html>
<html lang="en">
    <?php
        include 'conection.php';
        session_start(); 
    ?>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Elemento</title>

    <!-- CSS -->
    <link rel="StyleSheet" href="./css/element.css" type="text/css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@500&display=swap" rel="stylesheet">

    <script>
        function cambioColor() {
            var flecha = document.getElementById('volverAtrasElemento');

            flecha.style.color = 'red';
        }

        function vueltaColor() {
            var flecha = document.getElementById('volverAtrasElemento');

            flecha.style.color = 'white';
        }
    </script>

</head>
<body>
    <div>

        <p id="p" style="text-align: center;">Ingrese los Datos del Museo</p>

        <form id="fondoForm" method="POST" action="carga_form_new_museum.php" enctype="multipart/form-data">

            <div id="volverBoth">
                <i class="fas fa-chevron-left" id="volverAtrasElemento"></i>
                <a id="volverAtras" onmouseover="cambioColor()" onmouseout="vueltaColor()" href="index.php"> Volver</a>
            </div>

        <br>
            <input type="text" class="inputElement" name="nombre" placeholder="Nombre"  required>     
            <br>
            <br> 
            <input type="text" class="inputElement" name="descripcion" placeholder="Descripción" required> 
            <br>
            <br>
            <input type="text" class="inputElement" name="ubicacion" placeholder="Ubicación" required> 
            <br>
            <br>
            
            <div class="iframeCont" >  
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4973.385590621022!2d-64.4871928788715!3d-31.093033348512456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x942d82fe21382471%3A0x397735a75f080556!2sInstituto%20T%C3%A9cnico%20La%20Falda!5e0!3m2!1ses!2sar!4v1663881903316!5m2!1ses!2sar" width="380" height="100" style="display:flex; margin-left:17px; border-radius:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <br>

                <label>Sube una imagen:</label>
                <br>
                <br>
                <input id="subirArchivo" type="file" name="uploadedFile" />

            <br>
            <!-- Message -->
            <?php
                if (isset($_SESSION['message']) && $_SESSION['message'] && $_SESSION['message'] != 'File is successfully uploaded.')
                {
                    echo'<b class="errorMessage";>'.$_SESSION['message'].'</b>';
                    unset($_SESSION['message']);
                    
                }
            ?>
            <br>
            <input type="submit" id="cargarElemento" name="uploadBtn" value="Cargar" />
        </form>
    
    </div>  
</body>
</html>