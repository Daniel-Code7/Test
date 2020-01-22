<!DOCTYPE html>
<html leng="es">
<head>


  <title>Menu</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <br><br>
<h3><a href='index.php'> Salir</a></h3>




    <form name="forml" method="post" action="Perfil.php" >
<center>
  <h2>Buscar Datos </h2>
  <label>Usted Puede buscar Por <b>Nombre, Apellido, Usuario o Correo Electronico</b></label>

  <br>
  <br>
  <br>
  <input type="text" name="Buscar" placeholder="Escribir...." >
  <button type="submit" >Buscar</button>

</center>
 </form>

 <center>
<?php
include "Buscar.php";

 ?>
</center>





    </body>
    </html>
