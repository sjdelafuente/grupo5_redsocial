<?php

require_once('pdo.php');

function saveUser($data) {
    $nombre = $data['nombre'];
    $apellido = $data['apellido'];
    $email= $data['email'];
    $password = $data['password'];
    
    $stmt = $db->prepare("INSERT INTO usuarios VALUES (NULL, :nombre, :apellido , :email , NULL, :password)");
    
    echo "INSERT INTO usuarios VALUES (NULL, '$nombre', '$apellido' , '$email' , NULL, '$password')";
    exit;
    
    $stmt -> bindValue('nombre',$nombre);
    $stmt -> bindValue('apellido',$apellido);
    $stmt -> bindValue('email',$email);
    $stmt -> bindValue('password',$password);
    
    $stmt->execute();
    
    return $db->lastInsertId();
}

function editUser($data) {

}
?>