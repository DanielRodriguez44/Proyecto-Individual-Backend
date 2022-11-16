<?php
include 'conexion.php';

$user=$_POST['name'];
$pas1=$_POST['p1'];
$pas2=$_POST['p2'];
$userfull=$_POST['name2'];
$mail=$_POST['m'];
//
$resultado=mysql_query("SELECT * FROM registro_de_usuarios WHERE usuario='$user'",$conexion);
$numero_filas=mysql_num_rows($resultado);

if($numero_filas==1){
	echo"<script type='text/javascript'>
		alert('ESA CUENTA YA EXISTE.');
		window.location.replace('registro_de_aspirantes.php');
        </script>";
		    		}
else{
    if($pas1==$pas2){
    $sql="INSERT INTO registro_de_usuarios (id,usuario,contrasena,nombre,correo_electronico) VALUES(null,'$user','$pas1','$userfull','$mail')";
    $act=mysql_query($sql);
	echo"
	alert('REGISTRADO CORRECTAMENTE');
		<script type='text/javascript'>
	  	 window.location.replace('pagina_principal.html');
	  	 </script>
	  	 ";
				   }
else{	echo"<script type='text/javascript'>
	  	 alert('LAS CLAVES NO COINCIDEN');
	  	 window.location.replace('registro_de_aspirantes.php');
	  	 </script>
	  	 ";
    }
	}
?>