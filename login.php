<?php 
session_start();
if (isset($_SESSION['usuario'])) {
	//header("Location: home.php");
	switch ($_SESSION['usuario']) {
 	case 1:
 	header('Location: admin.php');
 	break;
 	case 2:
 	header('Location: home.php');
 	break;
 	case 3:
 	header('Location: Gerente.php');
 	break;
 	
 }
}
?>
<!DOCTYPE html>
<html>
<head>
	 <link href="bootstrap.css" rel="stylesheet">
	<title>Documento</title>
</head>
<body >
<div style="border:solid 3px red">
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">

    <a class="navbar-brand" href="#"><img src="img/fondo.PNG" width=300
height=60></a>
  </div>
<br>
	
  	
</nav>
<br>
	
	<br>
	
	<center>
<h1 >USUARIOS</h1>
	
	<br>
<hr style="border:solid 3px green">

		<br>
<div class="form-group" >
<form action="validacionlogin.php" method="POST" class="php-email-form">

	<div class="form-group has-success">
		 <label for="usuario" class="form-label" >Usuario:</label>
		<input  type="email" placeholder="Usuario" name="usuario" id="usuario" class="form-control is-valid">
    </div><br>

<div class="form-group has-success" >
		<label for="password" class="form-label">Contraseña:</label>
		<input type="password" class="form-control is-valid" placeholder="Contraseña" name="pass" id="pass"><br>
		<div class="validate"></div>
		<div class="valid-feedback">Revisar Que Tus Datos Sean Correctos.</div>
		</div><br>


		<input type="submit" class="btn btn-primary" value="Iniciar Sesion" ><br>


	</form>
	</div>
	<hr style="border:solid 3px green">
	<br>
	<br>
	<br>
	
	

	</center>
	-<a  href="index.html">Atras</a>
	<footer class="navbar navbar-expand-lg navbar-dark bg-primary"  >
   
    <p class="navbar-brand">----------------------------------------------------------------Copyright: Todos Los Derechos reservados Alondra Ayala------------------------------------------------------------</p>
    <br>
	
    </footer>
    </div>
</body>
</html>