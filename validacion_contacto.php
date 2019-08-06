<?php

$errores="";

$enviado="";

if(isset($_POST["enviar"])){
  $nombre= $_POST["name"];
  $email= $_POST["email"];
  $subject= $_POST["subject"];
  $message=$_POST["message"];


  if(!empty($nombre)){
    $nombre=trim($nombre);
    $nombre=filter_var($nombre,FILTER_SANITIZE_STRING);
    }   
  else{
    $errores.= "Por favor ingrese un nombre <br />";
  }

  if(!empty($email)){
    $email=trim($email);
    $email=filter_var($email,FILTER_SANITIZE_EMAIL);

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores.="Ingrese un correo valido <br />";
        }
      
      }
      else{
      $errores.="Por favor ingrese un correo! <br />";

    }
  
  if(!empty($subject)){
    $subject=trim($subject);
    $subject=filter_var($subject,FILTER_SANITIZE_STRING);
  }
  else{
    $errores.="Ha olvidado colocarle un subject a su mensaje";
  }

  if(!empty($message)){
    $message=trim($message);
    $message=filter_var($message,FILTER_SANITIZE_STRING);
  }

  else{
    $errores.="no ha ingresado ningun mensaje";
  }

  if(!$errores){
    $enviar_a="ezeotero@gmail.com";
    $asunto=$subject;
    $mensaje = $message;

    mail($enviar_a,$asunto,$mensaje);
    $enviado=true;

  }

}



?>