<?php


	session_start();
	include 'conexion.php';
	if(isset($_SESSION['user'])){
	echo '<script> window.location="panel.php"; </script>';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="shortcut icon" type="image/png" href="escudo_udg.png">
	<meta charset="utf-8">
	<title > Registro </title>
</head>
<body>
<img src="images/im6.jpeg" alt="background image" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: -1;">
	<nav id="top">>ADVISORY POLITECNICO<
    <li style="float: right;"><a  style=" text-decoration: none;background: black; color: white;text-shadow:-1px -1px 1px #000, 1px 1px 1px #000, -2px 2px 1px #000, 2px -2px 1px #000; padding: 5px;" href="INDEX.php" >Salir</a>
	</nav>


<div class="wrapper row1">
      <h1><img class="logobycenj"  src="escudo_udg.png" width="50%"></h1>
</div>
<div class="izq"></div>
<div class="der"></div>
<form class="formreg" method="post" action="registro.php">
	<h1 style="background-color: rgba(0,0,0,0.6);" class="formreg">Registro</h1>
	<label class="color_de_letras"> nombre de usario</label>
	<input type="text" name="name" placeholder="este se usara para iniciar sesion" required>
	<label class="color_de_letras"> Contraseña</label>
	<input type="password" name="p1" placeholder="Evite usar algo como 1234" required>
	<label class="color_de_letras"> Repetir Contraseña</label>
	<input type="password" name="p2" placeholder="las contraseñas Deben coinsidir" required>
	<label class="color_de_letras">Nombre completo</label>
	<input type="text" name="name2" placeholder="Nombre(s)/Apellido(s)" required>
	<label class="color_de_letras">Correo electronico</label>
	<input type="email" name="m" placeholder="Servirá de referencia" required>
	<input type="reset">
	<input type="submit">
</form>
<footer id="under">
    <p class="fl_left">Si ya estas registrado solo clickea aqui para iniciar sesion<a id="bycenj" href="index.php"> Inicio de sesion</a></p>
 </footer>
</body>
</html>