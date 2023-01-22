<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Usuarios</title>
</head>

<body
	  <?php
	  
	  $nombre = $_POST['nombre']; 
	  $apellido = $_POST['apellido']; 
	  $celular =$_POST['celular'];
	  $usuario = $_POST['usuario'];
	  $password = $_POST['password'];
	  
	 
	  echo "Nombre: ".$nombre;	  
	  echo("<br>");
	  echo "Apellido: ".$apellido;
	  echo("<br>");
	  echo "Celular: ".$celular;
	  echo("<br>");
	  echo "Usuario: ".$usuario;
	  echo("<br>");
	  echo "Contraseña: ".$password;	  
	  echo("<br>");
	  
	  	  session_start();
   
    
  // Datos para conectar a la base de datos.
  $nombreServidor = "localhost";
  $nombreUsuario = "admin";
  $passwordBaseDeDatos = "admin";
  $nombreBaseDeDatos = "amimadera";
  
  // Crear conexión con la base de datos.
  $conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
   
  // Validar la conexión de base de datos.
  if ($conn ->connect_error) {
    die("Connection failed: " . $conn ->connect_error);
  }
 
   // Consulta a la base de datos.
  $query = "INSERT INTO cp_usuarios(usu_nombre, usu_celular,usu_user, usu_password) VALUES('$nombre', '$celular','$usuario', '$password')";
  $resultado = mysqli_query($conn,$query);
  //Verifica que la consulta se realizo con o sin coincidencias en la base 
  if($resultado){
  header ("Location: ../html/Exito.html");
  }
  else
  
  	 {
        header ("Location: ../html/Incorrecto.html");}
  
  

	  ?>
</body>
</html>