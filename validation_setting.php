<?php
// NOTE: usuario cambia foto de perfil

$resultado = null;

if (isset($_POST['formulario']))
{
  $_SESSION['perfil'] = $name = $_FILES['imagen']['name'];
  $tmp_name = $_FILES['imagen']['tmp_name'];
  $error = $_FILES['imagen']['error'];
  $size = $_FILES['imagen']['size'];
  $type = $_FILES['imagen']['type'];

  if ($error)
   {
  $resultado = "Ha ocurrido un error";
  var_dump($error);
  }
  else if ($type != 'image/jpg' && $type != 'image/jpeg' && $type != 'image/png') {
  $resultado = 'Archivos permitidos jpg,jpeg,png.';
  }
  else {
    $ruta = 'perfil/'.$name;
    move_uploaded_file($tmp_name, $ruta);
    $resultado = "La imagen '<strong>$name</strong>' ha sido guardada con exito";
  }
}

 ?>
