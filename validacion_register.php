<?php

require_once('form_validate.php');

  if($_POST) {
      // Validamos los campos
      if (length(old('nombre'), 2, 255)) {
        addError('nombre', "Su nombre debe contener más de 2 caracteres.");
      }
      if(!preg_match('/^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/', old('nombre'))) {
        addError('nombre', "Su nombre contiene caracteres incorrectos.");
      }
      if (empty(old('nombre'))) {
        addError('nombre', "Debe introducir su nombre.");
      }
      if (length(old('apellido'), 2, 255)) {
        addError('apellido', "Su apellido debe contener más de 2 caracteres.");
      }
      if(!preg_match('/^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/', old('apellido'))) {
        addError('apellido', "Su apellido contiene caracteres incorrectos.");
      }
      if (empty(old('apellido'))) {
        addError('apellido', "Debe introducir su apellido.");
      }
      if (!email(old('email'))) {
        addError('email', "Debes escribir un email válido.");
      }
      if (length(old('password'), 8, 12)) {
        addError('password', "Su password debe contener entre 8 y 12 caracteres.");
      }
      if (empty(old('password'))) {
        addError('password', "Debe introducir su password.");
      }
      if (old('password') !== old('confirm_password')) {
        addError('confirm_password', "Tus passwords deben coincidir.");
      }
      if (empty(old('confirm_password'))) {
        addError('confirm_password', "Debe confirmar su password.");
      }
      if (isValid()) {
        $_SESSION['saludo'] = 'Welcome ' . old('nombre');
        header('location: index.php');
      }
}
?>