<?php 
include "conexion.php";

	$nombre=$_POST['txtNombre'];
	$cantidad=$_POST['txtcantidad'];
	$codigo=$_POST['txtCodigo'];
    $fecha=$_POST['txtfecha'];
	$qry = $link->prepare("INSERT INTO esmart (nombre_producto,cantidad,codigo,fecha) VALUES (?,?,?,?)");
	$qry->execute([$nombre,$cantidad,$codigo,$fecha]);

	if ($qry->rowCount()==1) {
		echo "Se agrego exitosamente";
		header("Location: home.php");
	}
	else {
		echo "no se agrego";
	}

?>