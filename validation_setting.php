<?php

require_once('form_validate.php');



$errors = [];

if (isset($_POST['formulario']))
{

  $_SESSION['perfil'] = $name = $_FILES['imagen']['name'];
  $ext = pathinfo($_FILES['imagen']['name'],PATHINFO_EXTENSION);

  if ($ext != 'jpg'  && $ext != 'jpeg' && $ext !='png'){

    
    $errors = "Solo se permiten archivos JPG , JPEG o PNG";

  }

  else{
  $tmp_name = $_FILES['imagen']['tmp_name'];
  $error = $_FILES['imagen']['error'];
  $size = $_FILES['imagen']['size'];
  $type = $_FILES['imagen']['type'];

    $ruta = 'perfil/'.$name;
    move_uploaded_file($tmp_name, $ruta);
    $resultado = "La imagen '<strong>$name</strong>' ha sido guardada con exito";
  }
}

 ?>
