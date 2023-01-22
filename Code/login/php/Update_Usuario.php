<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ACTUALIZACION</title>
</head>

<body>
	
<div align="center">
<h1>Actualizar un registro</h1>
<br>
<?php
    //Conexion con la base
    $conn = new mysqli("localhost","admin","admin","amimadera"); 

echo '<form method="post" action="Actualizar_Usuario.php">Celular<br>';

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Select usu_celular from cp_usuarios";
$resultado=mysqli_query($conn,$sSQL);

echo '<select name="celular">';

//Generamos el menu desplegable
while ($row=mysqli_fetch_array($resultado))
{echo '<option>'.$row["usu_celular"];}
?>
</select>
<br>
Usuario<br>
<INPUT TYPE="TEXT" NAME="usuario"> <br>
	<input type="Submit" value="Actualizar">
</FORM>
</div>
</body>
</html>