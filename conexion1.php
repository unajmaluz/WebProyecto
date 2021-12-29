<?php
 
$servidor="localhost";
$dbusuario="root";
$dbpass="";
$dbnombre="registrar_tareas";
$port = 3306 ;

$conex=new mysqli($servidor,$dbusuario,$dbpass,$dbnombre,$port);

if ($conex->connect_errno>0) {
	die("no se conecto a base de datos".$conex->connect_errno);
}

?>