<?php session_start(); ?>
<html>

<?php include("includes/head.php") ?>
<body class="center">
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
			

<?php 
  {	
  $sql3= "select * from annos where id=".$_GET['id'];
  $query = $mysqli->query($sql3);
  }
?>

      <?php while ($r=$query->fetch_array()):?>
		<h2>Año (<?php echo $r["anno"]?>) </h2>
        <?php endwhile;?>
        <?php $anno_id = $_GET['id'] ?>
		<a href="nuevomes.php?id=<?php echo $anno_id ?>"; ?>Nuevo</a>

<?php 	$user_id = $_SESSION['id'] ?>


<?php 
  {	
  $sql2= "select * from meses where anno_id=".$_GET['id'];
  $query = $mysqli->query($sql2);
  }
?>
	<table class="table" style="text-align: left; width: 250px">
		<thead class="thead-dark">
			<tr>
				<th>Mes</th>
				<th>Opciones</th>
				<th></th>

			</tr>
		</thead>
		<tbody>
			<tr>
     <?php while ($r=$query->fetch_array()):?>
				
				<td><?php echo $r["mes"]?></td>
					<td><a href="mostrarMes.php?id=<?php echo $r["id"];?>" >Mostrar</a></td>
<td>
					<a style="color: red;" href="eliminarMes.php?id=<?php echo $r["id"];?>" id="del-<?php echo $r["id"];?>" onclick="return confirm('¿Seguro de eliminar este usuario?')">Eliminar</a>
					
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
