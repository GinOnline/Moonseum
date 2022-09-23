<?php

include 'conection.php';

    session_start();
    $id = $_POST['id_card'];
    
    // Cambiamos el status a Devuelto  
    $eliminar = "UPDATE request
        SET status = 'DEVUELTO'
        WHERE ID = ". $id." ";
    mysqli_query($con, $eliminar) or die(mysqli_error($con));


    // Seleccionamos el nombre del elemento
    $sql = "SELECT * FROM request WHERE ID = '".$id."'";
    $res = mysqli_query($con,$sql) or die(mysqli_error($con));
    $request = mysqli_fetch_array($res);


    date_default_timezone_set('America/Argentina/Cordoba');
    $DateAndTime = date('d/m/y h:i', time());

    // Fecha_devolucion
    $setDevolucion = "UPDATE request
    SET fecha_devolucion = '". $DateAndTime."'
    WHERE ID = ". $id." ";
    mysqli_query($con,$setDevolucion) or die(mysqli_error($con));

   
    // Seleccionamos el stock del elemento
    $sql = "SELECT * FROM elemento WHERE nombre = '".$request["elemento"]."'";
    $res = mysqli_query($con,$sql) or die(mysqli_error($con));
    $elemento = mysqli_fetch_array($res);

    $newstock = $elemento['faltantes'] - $request['cantidad'];
    
    $reestockear = "UPDATE elemento
    SET faltantes = ".$newstock."
    WHERE cod = ". $elemento['cod']." ";
    mysqli_query($con,$reestockear) or die(mysqli_error($con));





    header("Location: index.php");

        
?>