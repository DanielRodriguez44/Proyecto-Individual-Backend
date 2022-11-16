<?php


	session_start();
	include 'conexion.php';
	if(isset($_SESSION['user'])){
	echo '<script> window.location="registro_dudas.php"; </script>';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilopaginasprincipales.css">
	<link rel="shortcut icon" type="image/png" href="escudo_udg.png">
	<title>Dudas</title>
	<meta charset="utf-8">
</head>
<body style="background: url(images/dudas.jpeg) no-repeat center center fixed;
height: 100%;
width: 100%;
background-attachment: fixed;
background-repeat: no-repeat;
margin: auto;
position: center center;">
	<nav class="ADVISORY">
		<section class="divisor6"></section>
		<section class="divisor5"></section>
		<img class="img" style="float: left; " src="escudo_udg.png">
		<h1 class="titulo"><i>ADVISORY POLITECNICO</i></h1> 
		<a  style=" text-decoration: none;
		background: none;
		color: white;
		text-shadow:-1px -1px 1px #000, 1px 1px 1px #000, -2px 2px 1px #000, 2px -2px 1px #000;
		padding: 5px;
	float: right;" href="pagina_principal.html">Salir
		</a>
	</nav>
	<strong><p class="nombredecarreras"><i>Para cualquier duda</i></p></strong>
	<section class="divisor1"></section>
	<section class="video1">
		<section class="contenidoapartadodedudas">
			<section class="divisor9"></section>
			<section class="cad">¿TE SIGUES PREGUNTANDO ALGO?, TE INVITAMOS A QUE INGRESES TU CORREO PARA ENVIARTE MAS INFORMACION Y ACLARAR TUS DUDAS.</section>
			<section class="divisor9"></section>
		</section>
		<section class="contenidoformulariodedudas">
			<section class="divisor8"></section>
			<section class="cfd">
				<section class="divisor9"></section>
				<section class="fd">
					<h5>Datos Personales</h5>
					<form class="formdud" method="post" action="registro_dudas.php">
						<pre class="edidud">Nombre(s)		<input type="text" name="nameuser" placeholder="Ejem. Juan Pablo" required></pre>
						<pre class="edidud">Apellidos		<input type="text" name="nameape" placeholder="Ejem. Hernandez Villa" required></pre>
						<pre class="edidud">Correo electronico	<input type="email" name="m" placeholder="Servirá de referencia" required></pre>
						<pre class="edidud">Carrera de interes	<input type="text" name="carr" placeholder="ejem. TPSI" required></pre>
						<input type="reset">							<input type="submit">
					</form>
				</section>
				<section class="vacio"></section>
			</section>
			<section class="divisor8"></section>
		</section>
		<footer class="direccionpoli">
			<pre class="edicion_direccion1" style="color: white;">ESCUELA POLITECNICA DE GUADALAJARA
Av Revolucion No. 1500, col. Universitaria, C.P. 44420, Guadalajara, Jalisco , Mexico
Telefono: +52 (33) 3619 9814/8315 Ext. 101 y 102</pre></footer>
	</section>
</body>
</html>