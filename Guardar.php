<?php
include("conexion1.php");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$username=$_POST['username'];
$pw_temp=$_POST['password'];

$password = password_hash($pw_temp, PASSWORD_DEFAULT);

$sql_insertar ="INSERT INTO usuario SET nombre='$nombre',apellido='$apellido',username='$username',password='$password' ";

$conex->query( $sql_insertar);
 if ($conex->connect_errno) die($conex->connect_errno);

 mysqli_close($conex);
 echo "Registro exitoso <a href='Login1.php'>Ingresar</a>";
?>
