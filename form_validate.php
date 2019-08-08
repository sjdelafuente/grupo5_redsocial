<?php

$errores = [

];

//Si el formulario fue 'submitted'...
if(isset($_POST['submit'])){
 
    //Obtener los valores de los campos del formulario.
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;
    $confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : null;
    //Hashing de la contraseña.
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $verify = password_verify($confirm_password, $hash);
 
    //NOMBRE
    if(empty($nombre)){
        $errores[] = "Debes ingresar un nombre.";
    }elseif(is_numeric($nombre)){
        $errores[] = "Su nombre debe contener letras.";
    }elseif(!empty($nombre) && is_numeric($nombre)){
        $errores[] = "Su nombre no debe contener numeros.";
    }

    //NOMBRE != APELLIDO

    if($nombre === $apellido){
        $errores[] = "Nombre y apellido no pueden ser iguales.";
    }

    //APELLIDO
    if(empty($apellido)){
        $errores[] = "Debes ingresar un apellido.";
    }elseif(is_numeric($apellido)){
        $errores[] = "Su apellido debe contener letras.";
    }elseif(!empty($apellido) && is_numeric($apellido)){
        $errores[] = "Su apellido no debe contener numeros.";
    }

    //EMAIL
    if(empty($email) ){
        $errores[] = "Debes ingresar un email.";
    } else {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errores[] = "El correo es incorrecto.";
        }
    }

    //PASSWORD
    if(strlen($password) === 0){
        $errores[] = "Debes ingresar una contraseña.";
    }   

    if(strlen($password) > 0 && strlen($confirm_password) === 0){
        $errores[] = "Debes confirmar la contraseña.";
    }

    if(strlen($confirm_password) > 0 && strlen($password) === 0){
        $errores[] = "Debes escribir la contraseña primero, luego confirmarla.";
    }

    if($verify == false){
        $errores[] = "Las contraseñas deben coincidir.";
    }

    // Ejecucion final del formulario.
    if(!empty($errores)){
        foreach ($errores as $error) {
            echo "<p class='error'> $error</p>";
        }
    } else {
        header("location: index.php");
    }
} 