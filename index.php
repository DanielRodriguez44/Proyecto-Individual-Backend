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
	<link rel="stylesheet" type="text/css" href="css\estilo.css">
	<link rel="shortcut icon" type="image/png" href="escudo_udg.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Inicio de sesion</title>
	
	
</head>
<body  id="fondo" style="background: url(escudo_udg.png) no-repeat center center fixed;
background-attachment: fixed;
overflow: scroll;
background-repeat: no-repeat;
margin: auto;
position: center center;
background-color: black;">

	<nav id="top">						>ADVISORY POLITECNICO<
	</nav>
<img  class="img" src="escudo_udg.png">
<h1 style="color:white"><i>ADVISORY POLITECNICO</i></h1>
	<style>
		#text{display: none;color: black;}


	</style>
	

	<section id="login" >
	<h1 style="text-align: center; 
	background-color: rgba(0,0,0,0.6);">Bienvenido</h1>
	<p style="background-color: rgba(0,0,0,0.6); text-align:center;">Ingrese sus datos y presione ingresar</p>

   <form id="ing" name ="form" method="post" action="validar.php">
    <input type="text"  name="user" placeholder="nombre de usuario" required>
    <input type ="password" name="pw"  placeholder="Contraseña" required>
	<input   type="submit" name="login" value="Enviar" >
	</form>
	<br><br><br><br><br>
	<center><label style="background-color: rgba(0,0,0,0.9); text-align: center;">¿Aun no estas registrado?
	registrate aqui</label></center>
	<a id="e" href="registro_de_aspirantes.php">
	<input   type="submit" value="Registrarse"></a>
</section>
</body>
</html>