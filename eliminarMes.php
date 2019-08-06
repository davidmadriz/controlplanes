<?php
if(!empty($_GET)){
			include "connection.php";
			
			$sql = "DELETE FROM meses WHERE id=".$_GET["id"];
			$query = $mysqli->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='index.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='index.php';</script>";
			}
}
?>