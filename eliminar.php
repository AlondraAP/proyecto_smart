<?php

$id= $_GET['id'];
  include 'conexion.php';
	$qry = $link->prepare("DELETE FROM esmart WHERE id_producto =?;");
	$qry->execute([$id]);

	if ($qry->rowCount()==1) {
    echo "Eliminacion exitora!";

    header("Location: home.php");
}
 	 else{
 		echo "Fallo la eliminacion!";
 		header("Location: home.php");
 	 }
//inicia una nueva session o reanuda la existente
//destrulle la informacion registrada en una session




?>