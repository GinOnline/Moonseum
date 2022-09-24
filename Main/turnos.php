<!DOCTYPE html>
<html>
<?php
include 'conection.php';
session_start();

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva obra</title>

    <!-- CSS -->
    <link rel="StyleSheet" href="./css/request.css" type="text/css">

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

    <p id="p" style="text-align: center;">Ingrese los datos de su visita</p>

    <form action="carga_form_new_atraccion.php" class="fondoForm" method="POST">

        <div id="volverBoth">
            <i class="fas fa-chevron-left" id="volverAtrasElemento"></i>
            <a id="volverAtras" onmouseover="cambioColor()" onmouseout="vueltaColor()" href="index.php"> Volver</a>
        </div>
        <label for="">Turno</label>
        <div class="personal_info">

            <!-- Mensaje de error -->
            <?php
            if (!empty($_SESSION['error_form_request'])) {

                print("<label class = 'error'> Error: " . $_SESSION['error_form_request'] . "</label>");
                $_SESSION['error_form_request'] = "";
            }
            ?>

            <div class="name_forms">

                <input type="date" class="inputRequest" style="height: 2rem;" name="fecha" placeholder="Fecha" required>
                <br>
                <input type="time" class="inputRequest" style="height: 2rem;color:#fff;" name="hora" placeholder="Hora" required>
            </div>


            <!-- Message -->
            <?php
            if (isset($_SESSION['message_a']) && $_SESSION['message_a'] && $_SESSION['message_a'] != 'File is successfully uploaded.') {
                echo '<b class="errorMessage";>' . $_SESSION['message_a'] . '</b>';
                unset($_SESSION['message_a']);
            }
            ?>
        </div>
        <br>
        <label for="">Contacto</label>
        <div class="personal_info">

            <div class="name_forms">

                <input type="text" class="inputRequest" style="height: 2rem;" name="nombre" placeholder="Nombre" required>
                <br>
                <input type="text" class="inputRequest" style="height: 2rem;" name="autor" placeholder="Apellido" required>
            </div>
            <br>
            <input type="number" class="inputRequest" style="height: 2rem;width:310px; margin-left:3%;" name="telefono" placeholder="Teléfono" required>

        </div>
        <br>

        <input type="submit" id="enviarBoton" name="uploadBtn" value="Enviar">
    </form>

</body>

</html>