<?php session_start(); ?>
<html>
<head>
	<title>Inicio de Sesion</title>
</head>

<body>
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($mysqli, $_POST['usuario']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['contrasenna']);

	if($user == "" || $pass == "") {
		echo "Usuario y/o contraseña incorrectos.";
		echo "<br/>";
		echo "<a href='login.php'>Regresar</a>";
	} else {
		$result = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE usuario ='$user' AND contrasenna='$pass'")
					or die("Error en la ejecucion de la consulta.");
		
		$row = mysqli_fetch_assoc($result);
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['usuario'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['nombre'] = $row['nombre'];
			$_SESSION['apellido_uno'] = $row['apellido_uno'];
			$_SESSION['apellido_dos'] = $row['apellido_dos'];
			$_SESSION['id'] = $row['id'];
		} else {
			echo "Usuario y/o contraseña incorrectos.";
			echo "<br/> <br/>";
			echo "<a href='index.php'>Regresar</a>";
		}

		if(isset($_SESSION['valid'])) {
			header('Location: index.php');			
		}
	}
} else {
?>

<form  name="form1" method="post" action="" class="text-left">
 
   


  <div class="form-group">
    <label>Usuario</label>
    <input type="text" class="form-control" name="usuario">
  </div>

  <div class="form-group">
    <label>Contraseña</label>
    <input type="password" class="form-control" name="contrasenna">
  </div>



  <input type="submit" name="submit" value="Iniciar Sesion" class="btn btn-warning btn-2">
</form>



<?php
}
?>
</body>
</html>
