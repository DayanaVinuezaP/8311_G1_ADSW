<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Eliminación</title>
</head>

<body>
	
<div align="center">
<h1>Eliminar un registro</h1>
<br>
<?php
    //Conexion con la base
    $conn = new mysqli("localhost","admin","admin","cursosprog"); 

echo '<form method="post" action="../php/F_eliminarUsuario.php">Cédula<br>';

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Select usu_celular from cp_usuarios Order By usu_celular";
$resultado=mysqli_query($conn,$sSQL);

echo '<select name="celular">';

//Generamos el menu desplegable
while ($row=mysqli_fetch_array($resultado))
{echo '<option>'.$row["usu_celular"];}
	?>

<input type="Submit" value="Eliminar">
</FORM>
</div>
</body>
</html>