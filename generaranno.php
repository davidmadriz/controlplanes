
<?php 
	// VALIDAR DATOS REQUERIDOS
	if (
		!empty($_POST["anno"])
		&&($_POST["user_id"]) 
	) {
	// INSERTAR LOS DATOS EN AL BD

		if(
			isset($_POST["anno"]) 
			&&isset($_POST["user_id"]) 
		){
			include "connection.php";
	
			$sql = "insert into annos(anno, user_id) value ( 
						\"$_POST[anno]\", 
						\"$_POST[user_id]\")";


			$query = $mysqli->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='index.php';</script>";
	}	
		
	}
			echo "Ocurrio un error ejecutando la consulta, contacte a su proveedor al correo disow321@gmail.com, adjuntando en el asunto Error 2x0032DBQueryInsert";

	}	
		echo "<script type=\"text/javascript\">window.alert('Debe completar los datos requeridos por el sitema.');
		 window.history.back();</script>"; 
exit;


?>