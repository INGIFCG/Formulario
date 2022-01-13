<?php
$conexion = mysqli_connect('localhost','root','','datos_usuarios')or die(mysqli_error($mysqli));

insertar($conexion);

function insertar($conexion){
    
    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $password= $_POST['password'];
    $email= $_POST['email'];

    $consulta_insersion = "INSERT INTO `registro`(`Nombre`, `Apellido`, `Password`, `Email`)
     VALUES ('$nombre','$apellido','$password','$email)";
     mysqli_query($conexion , $consulta_insersion);
     mysqli_close($conexion);
}
?>