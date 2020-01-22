<?php
session_start();
$u = $_POST["username"];
$pas = $_POST["pass"];
if(($u=='')||($pas=='')){

     header("location: index.php?error=1");
}
else{

  include "config.php";
$sql = "SELECT * FROM Datos WHERE Usuario='".$u."'"  ;
$resultado = mysqli_query($mysqli,$sql);
$numerodefilas = mysqli_num_rows($resultado);
if ($numerodefilas > 0 ) {
while ($columna = mysqli_fetch_row($resultado)) {
   if($columna[6]==$pas){
     header("location: Perfil.php");
          exit();
        }
        else {
            header("location: index.php?error=3");
          exit();
        }
      }
    }
    else {
  header("location: index.php?error=2");
    exit();

    }
  }
