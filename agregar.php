<!DOCTYPE html>
<html>
<head>
	<link href="bootstrap.css" rel="stylesheet">
	<title></title>
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
	
	<center>
<h1 >Agregar Articulos Nuevos</h1>
	<br>
	<br>
	<hr style="border:solid 3px red">
	<br>
<div >
	
	
	<form method="POST" action="agregarproceso.php">
		<label form="txtNombre">Nombre:</label>
		<input type="text" name="txtNombre" class="form-label" placeholder="Nombre"><br>
</div>
		<label form="txtcantidad">cantidad:</label>
		<input type="text" name="txtcantidad" class="form-label" placeholder="Cantidad"><br>

		<label form="txtCodigo">Codigo:</label>
		<input type="text" name="txtCodigo" class="form-label" placeholder="Codigo"><br>
        
        <label form="txtfecha">fechaCaducidad:</label>
		<input type="text" name="txtfecha" class="form-label" placeholder="Fecha Caducidad"><br>

		<input type="submit" value="Agregar" class="btn btn-primary"><br>
		<!--<input type="reset" name="Restablecer">-->
	</form>
</center>
<br>
<hr style="border:solid 3px red">
<br>
	<br>
	<br>
	
	<a  href="admin.php">Atras</a>

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