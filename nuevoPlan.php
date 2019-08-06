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
  $sql1= "select * from meses where id =".$_GET['id'];
  $query = $mysqli->query($sql1);
  }
?>
<?php while ($r=$query->fetch_array()):?>
		<h2>Nuevo plan (<?php echo $r["mes"]?>)</h2>
<?php endwhile;?>


	<?php include("includes/nuevoPlanForm.php") ?>


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
