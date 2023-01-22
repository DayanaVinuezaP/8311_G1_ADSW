<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<h1><div align="center">Lectura de la tabla</div></h1>
<br>
<br>
<?php
	session_start();
	$user =$_POST['usuario'];
	$password =$_POST['password'];
	$cedula =$_POST['celular'];
	$nombre =$_POST['nombre'];
	$apellido =$_POST['apellido'];
	
	
	
//Conexion con la base
$conn = new mysqli($nombreServidor,$nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);

$conn = new mysqli("localhost","admin","admin", "amimadera");

//Validar la conexión de bdd
	if($conn ->connect_error){
		die("Connection failed: " . $conn ->connect_error);
	}
//Consulta a la base de datos.
	$query = "SELECT * FROM cp_usuarios";
	$resultado = mysqli_query($conn, $query);
?>
<table align="center">
<tr>
<th>Nombre</th>
<th>Apellido</th>	
<th>Celular</th>
<th>Usuario</th>
<th>Password</th>


</tr>
<?php
//Mostramos los registros
while ($row=mysqli_fetch_array($resultado))
{
echo '<tr><td>'.$row["usu_nombre"].'</td>';
echo '<td>'.$row["usu_apellido"].'</td>';
echo '<td>'.$row["usu_celular"].'</td>';
echo '<td>'.$row["usu_user"].'</td>';
echo '<td>'.$row["usu_password"].'</td>';


}
mysqli_free_result($resultado)
?>
</table>


</body>
</html>