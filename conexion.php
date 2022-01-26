<?php
$conexion = mysqli_connect('localhost','root','','formulario')or die(mysqli_error($mysqli));
    
    insertar($conexion);

    function insertar($conexion){
        
        $nombre= $_POST['name'];
        $apellido= $_POST['last_name'];
        $contraseña= $_POST['password'];
        $email= $_POST['email']; 
        $date= $_POST['date'];
        $gender= $_POST['gender'];


        $sql_insert = "INSERT INTO `usuarios`(`id`, `nombre`, `apellido`, `password`, `email`, `fcha-nacimiento`, `genero`) 
        VALUES ('0','$nombre','$apellido','$contraseña','$email','$date','$gender')";        
        mysqli_query($conexion , $sql_insert);

        if($sql_insert){
            echo "Los datos han sido insertados correctamente";
        }else{
            echo "Error al ingresar los datos";
        }
    }
?>

 