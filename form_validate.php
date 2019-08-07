<?php

$password="";

$confirm_password="";


if($_POST) {
    
    $password=$_POST["password"];
    $confirm_password=$_POST["confirm_password"];

    
    // NOMBRE //
    if(strlen($_POST["nombre"]) == 0){
        echo "<p class='error'> * Debes agregar tu nombre. </p>";
      }
    if(strlen($_POST["nombre"] == 1)){
        echo "<p class='error'> * Su nombre debe contener más de 1 letra. </p>"; 
    }
    if(strlen($_POST["nombre"] > 18)){
        echo "<p class='error'> * Su nombre es demasiado largo. </p>"; 
    }
    if(is_numeric($_POST["nombre"])){
        echo "<p class='error'> * Su nombre no debe contener números. </p>"; 
    }
    // APELLIDO //
    if(strlen($_POST["apellido"]) == 0){
        echo "<p class='error'> * Debes agregar tu apellido. </p>";
    }
    if(strlen($_POST["apellido"] == 1)){
        echo "<p class='error'> * Su apellido debe contener más de 1 letra. </p>"; 
    }
    if(strlen($_POST["apellido"] > 18)){
        echo "<p class='error'> * Su apellido es demasiado largo. </p>"; 
    }
    if(is_numeric($_POST["apellido"])){
        echo "<p class='error'> * Su apellido no debe contener números. </p>"; 
    }
    // EMAIL //
    if(!strlen($_POST["email"]) == 0){
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            echo "<p class='error'> * Tu email es incorrecto. </p>";
        }

    } else {echo "<p class='error'> * Debes agregar tu email. </p>";
    }
    

    // PASSWORD //

    $hash_password=password_hash($password,PASSWORD_DEFAULT);

    $resultado_password=password_verify($password,$hash_password);


    
    if(strlen($password) == 0 && strlen($confirm_password) == 0){
        echo "<p class='error'> * Debes generar tu contraseña. </p>";
    }
    if(strlen($password) == 0 && strlen($confirm_password) > 0){
        echo "<p class='error'> * Debes generar tu contraseña. </p>";
    }
    if(strlen($password) > 0 && strlen($confirm_password) == 0){
        echo "<p class='error'> * Debes confirmar tu contraseña. </p>";
    }
    if(strlen($password) > 0 && strlen($confirm_password) > 0 && $password !== $confirm_password){
        echo "<p class='error'> * Confirme correctamente su contraseña. </p>";
    }
}



    
    




