<?php
$conexion = mysqli_connect('localhost', 'root', '', 'formulario') or die(mysqli_error($mysqli));

insertar($conexion);

function insertar($conexion){

    if (isset($_POST['submit'])) {

        $nombre = strtoupper($_POST['name']);
        $apellido = strtoupper($_POST['last_name']);
        $contraseña = $_POST['password'];
        $encrypting_password = password_hash($contraseña, PASSWORD_DEFAULT);
        /*,array("cost"=>12) con este atributo se aumenta el costo de encriptado o nivel de
        incriptado del password ); */
        $username_form = $_POST['username'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $gender = $_POST['gender'];

        /* $validacion = array();
        if(empty($nombre)){
            array_push($validacion,"El campo NOMBRE no puede estar vacio");
        if(empty($apellido)){
            array_push($validacion,"El campo APELLIDO no puede estar vacio");
        }if(empty($contraseña) || strlen($contraseña)<6){
            array_push($validacion,"El campo Password no puede estar vacio, No puede ser menor a 6 caracteres");
        }if(empty($email) || strpos($email,"@")===false){
            array_push($validacion,"Ingrese una direccion de correo electonico valda");
        }if($date>=01/01/2022 || $date <=01/01/1920){
            array_push($validacion,"ingrese una fecha valida");
        }if(count($validacion)>0){
            echo "<div class='error'>";
            for($i=0; $i<count($validacion); $i++){
                echo "<li>".$validacion[$i]."</div>";
            }
        }else{ */
        echo "<div class='correcto'>
              Datos Correctamente Insertados </div>";
        $sql_insert = "INSERT INTO `usuarios`(`id`, `nombre`, `apellido`, `username`, `password`, `email`, `fcha-nacimiento`, `genero`)
              VALUES ('0','$nombre','$apellido','$username_form','$encrypting_password','$email','$date','$gender')";
        mysqli_query($conexion, $sql_insert);
        if ($sql_insert) {
            echo "<div class='correcto'>Los datos han sido insertados correctamente</div>";
        } else {
            echo "Error al ingresar los datos";
        }
    }
}
?>