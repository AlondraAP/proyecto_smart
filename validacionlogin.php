<?php
session_start();
require 'conexion.php';//requiere del archivo conexion.php

$usuario=$_POST['usuario'];
$pass=$_POST['pass'];



$qry=$link->prepare("SELECT * FROM usuarios WHERE usuario='$usuario'");
//prepara la sentencia de qry
$qry -> execute();//ejecutar las sentencias
$row=$qry->fetch(PDO::FETCH_OBJ);//almacenar en un objeto
//print_r($row);

if (password_verify($pass, $row->contrasena)) {
	//header('Location: home.php');
	$_SESSION['Nombre'] = $row->nombre;
 	$_SESSION['usuario'] = $row->Tipo_usuario;

 switch ($_SESSION['usuario']) {
 	case 1:
 	header('Location: admin.php');
 	break;
 	case 2:
 	header('Location: home.php');
 	break;
 	default:
 	header('Location: login.php');
 	break;
 }
 }
 else{
 	echo "No se encontro un registro! ";
 }

?>