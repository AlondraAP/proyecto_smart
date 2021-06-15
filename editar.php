<?php 
include "conexion.php";

$id = $_GET['id'];
	
	$qry= $link->prepare("SELECT * FROM esmart WHERE id_producto=?");
    $qry->execute([$id]);
    $row = $qry->fetch(PDO::FETCH_OBJ);
    print_r($qry);
?>
<!DOCTYPE html>
<html>
<head>
	<link href="bootstrap.css" rel="stylesheet">
	<title>Editar</title>
</head>
<body>
	<div style="border:solid 3px red">
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">

    <a class="navbar-brand" href="#"><img src="img/fondo.PNG" width=300
height=80></a>
  </div>
  </nav>
  <br>
	<br>
	<br>
<center>
	<h1>Editar</h1>
	<form method="POST" action="editarproceso.php">
		<input type="hidden" name="txtid_producto" value="<?php echo $row->id_producto?>" class="form-label"><br>
		Nombre:
		<input type="text" name="txtNombre" id="txtNombre" value="<?php echo $row->nombre_producto?>" class="form-label"><br> 
		cantidad:
		<input type="text" name="txtcantidad" id="txtcantidad" value="<?php echo $row->cantidad?>" class="form-label"><br>
		codigo:
		<input type="text" name="txtCodigo" id="txtCodigo" value="<?php echo $row->codigo?>" class="form-label"><br>
		<input type="submit"  value="Editar" value="" class="btn btn-primary"><br>
	</form>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

</center>
<footer class="navbar navbar-expand-lg navbar-dark bg-primary"  >
   
    <p class="navbar-brand">-------------------------------------------------------------------Copyright: Todos Los Derechos reservados Alondra Ayala------------------------------------------------------------</p>
    <br>
	<br>
	<br>
    </footer>
</body>
</html>