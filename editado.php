<?php
if(
	
		!empty($_POST["cedula"])

){
	if(
		
		isset($_POST["cedula"])
		&&isset($_POST["pedido"])
		&&isset($_POST["permanencia"])
		&&isset($_POST["terminal"])
		&&isset($_POST["agencia"])


	){
		

			include "connection.php";


			$sql = "update planes set 
				cedula=	\"$_POST[cedula]\",
				pedido=	\"$_POST[pedido]\", 
				permanencia=	\"$_POST[permanencia]\", 
				terminal=	\"$_POST[terminal]\", 
				agencia=	\"$_POST[agencia]\", 
				notas=	\"$_POST[notas]\"
				

				where id=".$_POST["id"];

			$query = $mysqli->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='mostrarPlanes.php?id=$_POST[id]';</script>";
	}	
		
	}
			echo "Ocurrio un error ejecutando la consulta, contacte a su proveedor al correo disow321@gmail.com, adjuntando en el asunto Error 2x0032DBQueryInsert";

	}	
		echo "<script type=\"text/javascript\">window.alert('Debe completar los datos requeridos por el sitema.');
		 window.history.back();</script>"; 
exit;

?>