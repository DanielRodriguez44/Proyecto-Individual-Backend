<?php
session_start();
include 'conexion.php';

if(isset($_SESSION['user'])) {?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
</head>
<body>
<div>
  <article>
    <p> 
        Estas Por cerrar sesion
    </p>
  </article>
  <a href="logout.php"><button>Salir</button></a>
  <script language="javascript">location.href = "logout.php";</script>
</div>
</body>
</html>
<?php
}else{
	echo '<script> window.location="index.php"; </script>';
}
?>