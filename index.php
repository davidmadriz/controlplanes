<?php session_start(); ?>
<html>

<?php include("includes/head.php") ?>
<body class="center">
	<div class="rotulo center">
		** Bienvenido **
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
			
		<h2>Control de Planes *Años*</h2>

		<a href="nuevoanno.php">Nuevo</a>

<?php 	$user_id = $_SESSION['id'] ?>


<?php 
  {	
  $sql1= "select * from annos where user_id =".$user_id;
  $query = $mysqli->query($sql1);
  }
?>

	<table class="table" style="text-align: left; width: 250px">
		<thead class="thead-dark">
			<tr>
				<th>Año</th>
				<th>Opciones</th>
				<th></th>

			</tr>
		</thead>
		<tbody>
			<tr>
     <?php while ($r=$query->fetch_array()):?>
				
				<td><?php echo $r["anno"]?></td>
				<td>
					
					<a href="mostrarAnno.php?id=<?php echo $r["id"];?>" >Mostrar</a></td>

					<td>
					<a style="color: red;" href="eliminarAnno.php?id=<?php echo $r["id"];?>" id="del-<?php echo $r["id"];?>" onclick="return confirm('¿Seguro de eliminar este usuario?')">Eliminar</a>
					
					</td>
			</tr>
        <?php endwhile;?>
		</tbody>
	</table>
</div>


		</div>
	<?php	
	} else{
		print("<br> <img src='assets/img/kolbi.png'>");
		include("includes/btns.php");
	}
	





	 ?>





















	<div class="footer">
		<i>Software creado por David Madriz  &middot; &middot; &middot; DISOW Company</i>
	</div>
</body>
</html>
