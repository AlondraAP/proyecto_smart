<?php
require 'conexion.php';

$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$passwor=$_POST['passwor'];
//$user=$_POST['user'];
$passwor=password_hash($passwor, PASSWORD_DEFAULT);

$qry=$link->prepare("INSERT INTO usuarios(nombre,usuario,contrasena)VALUES(?,?,?)");


$qry->execute([$nombre,$usuario,$passwor]);


if($qry->rowCount()==0){
echo "Registro fallo!";
}
 else if($qry->rowCount()==1){
 	echo "Se registro Exitosamente!";
 }
 else{
 	echo "error de sistema";
 }
?>