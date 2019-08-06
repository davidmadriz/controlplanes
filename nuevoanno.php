<?php session_start(); ?>
<html>

<?php include("includes/head.php") ?>
<body class="text-left">
	<div class="rotulo">
		Bienvenido!
	</div>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM usuarios where id=$iduser");
	?>
				
		<?php echo $_SESSION['nombre'] ?>
		<?php echo $_SESSION['apellido_uno'] ?> 
		<?php echo $_SESSION['apellido_dos'] ?> 
		&middot;
		<a href='logout.php'>Cerrar Sesion</a><br/>
		<br/>
		<div class="text-left" style="margin:5px">
			
	<?php $user_id =  $_SESSION['id'] ?>
	<?php	

	} else{
		print("<br> <img src='assets/img/kolbi.png'>");
		include("includes/btns.php");
	}
	
	 ?>
		<form class="form-inline" action="generaranno.php" method="POST">

	  <div class="form-group mx-sm-3 mb-2">
	    <label for="inputPassword2" class="sr-only">Año de Ventas</label>
	    <input type="text" class="form-control" name="anno">
	    <input type="hidden" class="form-control" name="user_id" value='<?php echo $user_id ?>'>
	  </div>
	  <button type="submit" class="btn btn-warning mb-2 btn-2">Generar Año</button>
	</form>





	<div class="footer text-left">
		<i>Software creado por David Madriz  &middot; &middot; &middot; DISOW Company</i>
	</div>
</body>
</html>
