<?php
$id = $_GET["id"];
$a = $_POST["a"];
$e = $_POST["e"];
$i = $_POST["i"];
$o = $_POST["o"];
$u = $_POST["u"];




include "config.php";


		$sql = "UPDATE Datos SET Nombre = '".$a."', Apellido = '".$e."', Usuario = '".$i."', Correo= '".$o."', Contrasena = '".$u."' WHERE id =".$id;
		//echo $sql;
		//exit();
		if ($mysqli->query($sql) === TRUE) {
		    header("Location: Perfil.php");
		} else {
		    header("Location: Perfil.php");
		}







 ?>
