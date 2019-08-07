<?php

if($_POST) {
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
    if(strlen($_POST["email"]) == 0){
        echo "<p class='error'> * Debes agregar tu email. </p>";
    }
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        echo "<p class='error'> * Tu email es incorrecto. </p>";
    }
    // PASSWORD //
    if(strlen($_POST["password"]) == 0 && strlen($_POST["confirm_password"]) == 0){
        echo "<p class='error'> * Debes generar tu contraseña. </p>";
    }
    if(strlen($_POST["password"]) == 0 && strlen($_POST["confirm_password"]) > 0){
        echo "<p class='error'> * Debes generar tu contraseña. </p>";
    }
    if(strlen($_POST["password"]) > 0 && strlen($_POST["confirm_password"]) == 0){
        echo "<p class='error'> * Debes confirmar tu contraseña. </p>";
    }
    if(strlen($_POST["password"]) > 0 && strlen($_POST["confirm_password"]) > 0 && $_POST["password"] !== $_POST["confirm_password"]){
        echo "<p class='error'> * Confirme correctamente su contraseña. </p>";
    }
}




