<?php
$link = new PDO('mysql:host=localhost;port=3306;dbname=proyecto','root','mysql');
$link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

if($link->connect_error){
	die("connection failed:".$link->connect_error);
 
}
/*else{
	echo "<h1>Conexion Exitosa!!</h1>";
}*/




?>