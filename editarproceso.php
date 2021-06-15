<?php 
require "conexion.php";

$id=$_POST['txtid_producto'];
$nombre = $_POST['txtNombre'];
$precio = $_POST['txtPrecio'];
$codigo = $_POST['txtCodigo'];
$qry = $link->prepare("UPDATE esmart SET nombre_producto=?,cantidad=?,codigo=? WHERE id_producto=?");
$qry->execute([$nombre,$cantidad,$codigo,$id]);
if($qry->rowCount()==1){
	header("Location: home.php");
}
else{
	echo"Error en la actualizacion de datos";
	header("Location: editor.php");
}
?>