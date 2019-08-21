<?php


$dsn= 'mysql:host=localhost;dbname=HostHelper;port=3306';


$username='root';


$password='root';


try {
    $db=new PDO($dsn,$username,$password);
} catch (\Throwable $th) {
    echo "no se pudo establecer una conexion a la base de datos";
}



if($_POST){


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email= $_POST['email'];
$password = $_POST['password'];



$stmt = $db->prepare('INSERT INTO usuarios VALUES :nombre, :apellido , :email , :password');


$stmt -> bindValue('nombre',$nombre);
$stmt -> bindValue('apellido',$apellido);
$stmt -> bindValue('email',$email);
$stmt -> bindValue('password',$password);


$stmt->execute();

}








?>