<?php


$id = $_GET["id"];


  include "config.php";



		$sql = "DELETE FROM Datos WHERE id =".$id;




    if ($mysqli->query($sql) === TRUE) {
    		    header("Location: Perfil.php");
    		} else {
    		    header("Location: Perfil.php");

    		}





 ?>
