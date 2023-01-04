<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Eliminar</title>
</head>

<body>
	<?php
//Conexion con la base
$conn = new mysqli("localhost","admin","admin","amimadera");

//selección de la base de datos con la que vamos a trabajar 

$nombre=$_POST['nombre'];		
$user=$_POST['usuario'];
$celular=$_POST['celular'];
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update cp_usuarios Set usu_estado='0' Where usu_celular='$celular'";
mysqli_query($conn,$sSQL);
?>

<h1><div align="center">Registro Eliminado</div></h1>
<div align="center"><a href="mostrarUsuario.php">Visualizar el contenido de la base</a></div>
</body>
</html>