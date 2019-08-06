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
		$result = mysqli_query($mysqli, "SELECT * FROM usuarios where id=$id_user");
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
  $sql3= "select * from meses where id=".$_GET['id'];
  $query = $mysqli->query($sql3);
  }
?>

      <?php while ($r=$query->fetch_array()):?>
		<h2>Mes de  (<?php echo $r["mes"]?>) </h2>
        <?php endwhile;?>
        <p style="color: gray; font-style: italic;">Informaciòn de Planes</p>






        <?php $mes_id = $_GET['id'] ?>
		<a href="nuevoPlan.php?id=<?php echo $mes_id ?>"; ?>Nuevo</a>




<?php 
  {	
  $sql2= "select * from planes where mes_id=".$_GET['id'];
  $query = $mysqli->query($sql2);
  }
?>
	<table class="table" style="text-align: left; width: 100%">
		<thead class="thead-dark">
			<tr>
				<th>Cedula</th>
				<th>Pedido</th>
				<th>Permanencia</th>
				<th>Terminal</th>
				<th>Agencia</th>
				<th>Notas</th>
				<th></th>
				<th></th>

			</tr>
		</thead>
		<tbody>
			<tr>
     <?php while ($r=$query->fetch_array()):?>
				
				<td><?php echo $r["cedula"]?></td>
				<td><?php echo $r["pedido"]?></td>
				<td><?php echo $r["permanencia"]?></td>
				<td><?php echo $r["terminal"]?></td>
				<td><?php echo $r["agencia"]?></td>
				<td><?php echo $r["notas"]?></td>
					<td><a href="mostrarPlanes.php?id=<?php echo $r["id"];?>" >Mostrar</a></td>
<td>
					<a style="color: red;" href="eliminarPlan.php?id=<?php echo $r["id"];?>" id="del-<?php echo $r["id"];?>" onclick="return confirm('¿Seguro de eliminar este usuario?')">Eliminar</a>
					
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
