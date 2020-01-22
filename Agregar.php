
<html lang="es">

<body >
<center>
    <br>
  <h2>Modificar Datos</h2>
  <br>


<form action="Agregar.php" method="POST">
  <br>
  <label><b>Nombre  </b></label>


  <input type="text" name="a">
  <br>
  <br>
  <label><b>Apellido  </b></label>

  <input type="text" name="e" >
  <br>
  <br>
  <label><b>Usuario  </b></label>

  <input type="text" name="i" >
  <br>
  <br>
  <label><b>Correo Electronico  </b></label>

  <input type="email" name="o" placeholder="usuario@servidor.com" >
  <br>
  <br>
  <label><b>Contraseña  </b></label>

  <input type="text" name="u">
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


  <?php
  $id = $_GET["id"];
  $a = $_POST["a"];
  $e = $_POST["e"];
  $i = $_POST["i"];
  $o = $_POST["o"];
  $u = $_POST["u"];


  include "config.php";
  if(($a=='')||($e=='')||($i=='')||($o=='')||($u==''))
  {


  }
  else {

    $sql = "INSERT INTO Datos (id, Nombre, Apellido, Usuario, Correo, Contrasena) VALUES (NULL, '".$a."', '".$e."', '".$i."', '".$o."', '".$u."')";
    if ($mysqli->query($sql) === TRUE) {
    		    header("Location: Perfil.php");
    		} else {
    		    header("Location: Perfil.php");
    		}


    // code...
  }


 ?>

  </html>
