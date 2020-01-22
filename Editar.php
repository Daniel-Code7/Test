<?php



$id = $_GET["id"];

include "config.php";



    $sql = "SELECT * FROM Datos WHERE id=".$id;
    //echo $sql;
    $result = $mysqli->query($sql);
    while($columna = $result->fetch_assoc())
    {



      $a=$columna["Nombre"];
      $e=$columna["Apellido"];
      $i=$columna["Usuario"];
      $o=$columna["Correo"];
      $u=$columna["Contrasena"];
    }


?>
<html lang="es">

<body >
<center>
    <br>
  <h2>Modificar Datos</h2>
  <br>


<form action="mod.php?id=<?php echo $id;  ?>" method="POST">
  <br>
  <label><b>Nombre  </b></label>


  <input type="text" name="a" value="<?php echo $a; ?>">
  <br>
  <br>
  <label><b>Apellido  </b></label>

  <input type="text" name="e" value="<?php echo $e; ?>">
  <br>
  <br>
  <label><b>Usuario  </b></label>

  <input type="text" name="i" value="<?php echo $i; ?>">
  <br>
  <br>
  <label><b>Correo Electronico  </b></label>

  <input type="email" name="o" value="<?php echo $o; ?>"  placeholder="usuario@servidor.com">
  <br>
  <br>
  <label><b>Contraseña  </b></label>

  <input type="text" name="u" value="<?php echo $u; ?>">
  <br>
  <br>











<br><br>
   <button type="submit" class="btn-aceptar">Guardar</button>

</form>

<br>
<br>
<form name="forml" method="post" action="Perfil.php" >
    <button type="submit" class="btn-aceptar">Cancelar</button>
  </from>
</center>
</body>






</html>
