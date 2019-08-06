<html>
<head>
	<title>Nuevo Usuario</title>
</head>

<body>
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$name = $_POST['nombre'];
	$lastName1 = $_POST['apellido_uno'];
	$lastName2 = $_POST['apellido_dos'];
	$user = $_POST['usuario'];
	$pass = $_POST['contrasenna'];
	$token = $_POST['token'];





	if($name == "" || $lastName1 == "" || $lastName2 == "" || $user == "" || $pass == "" || $token != "3232" ) {
		echo "Debe completar todos los datos requeridos para poder realizar el registro.";
		echo "<br/>";
		echo "<a href='register.php'>Regresar </a>";
	} else {
		mysqli_query($mysqli, "INSERT INTO usuarios(nombre, apellido_uno, apellido_dos, usuario, contrasenna) VALUES('$name', '$lastName1', '$lastName2', '$user', '$pass')")
			or die("No se puede concluir con la insercion de datos.");
			
		echo "Registro realizado satisfactoriamente";
		echo "<br/>";
		echo "<a href='login.php'>Iniciar Sesion</a>";
	}
} else {
?>


<form  name="form1" method="post" action="">

  <div class="form-group row">
    <label for="text" class="col-sm-3 text-left col-form-label">Nombre</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nombre">
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-sm-3 text-left col-form-label">Apellido 1</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="apellido_uno">
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-sm-3 text-left col-form-label">Apellido 2</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="apellido_dos">
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-sm-3 text-left col-form-label">Usuario</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="usuario">
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-sm-3 text-left col-form-label">Contraseña</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="contrasenna">
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-sm-3 text-left col-form-label">Token</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="token">
    </div>
  </div>

  <input type="submit" name="submit" value="Registrar" class="btn btn-warning btn-2 float-right">
</form>


<?php
}
?>
</body>
</html>
