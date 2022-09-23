<?php

include "conection.php";

$n=6;
function getName($n) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
  
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
  
    return $randomString;
}




 //recuperar las variables
 $user2=$_POST['user2'];
 $pass2=$_POST['pass2'];
 $email=$_POST['email'];
 $tel = $_POST['tel'];
 //hacemos la sentencia de sql

$query = mysqli_query($con,"SELECT user,mail FROM register WHERE user = '".$user2."' or mail = '".$email."'");
$nr = mysqli_num_rows($query);


if($nr == 1)
{
    echo "User taken or mail pa";
    
}
else if ($nr == 0) 
{
    $id_user = getName($n);
    
    $sql="INSERT INTO register VALUES('$user2',
       '$pass2',
       '$email')";
    //ejecutamos la sentencia de sql
    $ejecutar=mysqli_query($con,$sql);

     echo"Datos Guardados Correctamente<br><a href='login.php'>Volver</a>";

}





?>

