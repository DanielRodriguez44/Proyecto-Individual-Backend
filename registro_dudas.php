<?php
include 'conexion.php';

$user=$_POST['nameuser'];
$userape=$_POST['nameape'];
$mail=$_POST['m'];
$userfull=$_POST['carr'];

$resultado=mysql_query("SELECT * FROM registro_de_dudas WHERE nombre='$user'",$conexion);
$numero_filas=mysql_num_rows($resultado);

if($numero_filas==1){
	echo"<script type='text/javascript'>
		alert('ESTA USUARIO YA DEJO UN REGISTRO, ESPERE HASTA QUE SE LE ENVIE UN CORREO ELECTRONICO');
		window.location.replace('tienes_alguna_duda.php');
        </script>";
		    		}
else{
    $sql="INSERT INTO registro_de_dudas (id,nombre,apellido,correo_electronico,carrera) VALUES(null,'$user','$userape','$mail','$userfull')";
    $act=mysql_query($sql);
	echo"
        <script type='text/javascript'>
        alert('registrado correctamente. Espere a que se le envie un correo');
	  	 window.location.replace('tienes_alguna_duda.php');
	  	 </script>
           ";
    }
?>