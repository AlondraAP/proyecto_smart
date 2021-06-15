<?php
session_start();
if(isset($_SESSION['Nombre'])){
  if($_SESSION['usuario'] !=2){

	header('Location:login.php');
}
}
else{
	header('Location: login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<link href="bootstrap.css" rel="stylesheet">
	<title>supervisor</title>
</head>
<body>
	<div style="border:solid 3px red">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">

    <a class="navbar-brand" href="#"><img src="img/fondo.PNG" width=300
height=80></a>
  </div>
  </nav>
<center>
<h1>Bienvenido (a)<?php echo $_SESSION['Nombre']?></h1>

<h1>SMART</h1>

<a href="agregar.php">Agregar Nuevo</a><br>
<table class="table table-hover">
	<tr class="table-primary">
		<td>id producto</td>
		<td>Nombre</td>
        <td>cantidad</td>
        <td>Codigo</td>
        <td>fechaC</td>
        <td>Editar</td>
        <td>Eliminar</td>

	</tr>
	<?php
	require 'conexion.php';
	$qry = $link->prepare("SELECT * FROM esmart");
    $qry-> execute();
    $row = $qry->fetchAll(PDO::FETCH_OBJ);
    print_r($row);
    foreach ($row as $dato ) {
    
  
	?>
	 <tr class="table-success">
	 	<td><?php echo $dato->id_producto; ?></td>
	 	<td><?php echo $dato->nombre_producto?></td>
	 	<td><?php echo $dato->cantidad ?></td>
	 	<td><?php echo $dato->codigo ?></td>
	 	<td><?php echo $dato->fecha ?></td>
	 	<td><a href="editar.php?id=<?php echo $dato->id_producto ?>">Editar</a></td>
	 	<td><a href="eliminar.php?id=<?php echo $dato->id_producto ?>">Eliminar</a></td>
	 </tr>
	 <?php 
     }
	 ?> 

	  
</table>

<a href="cerrar.php">Cerrar session</a>

</center>
<br>
	<br>
	<br>

	<footer class="navbar navbar-expand-lg navbar-dark bg-primary"  >
   
    <p class="navbar-brand">-------------------------------------------------------------------Copyright: Todos Los Derechos reservados Alondra Ayala------------------------------------------------------------</p>
    <br>
	<br>
	<br>
	<br>
    </footer>
    </div>

</body>
</html>