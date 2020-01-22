<!DOCTYPE html>
<html leng="es">
<head>
  <title>Test</title>
  <link rel="stylesheet" href="css/style.css">
</head>
    <body>
    <br><br>
    <br>
    <br>
    <br>
    <div>
      <center>
                  <form action="Verificar.php" method="POST">
        <?php

      if(@$_GET["error"]=="1")
      {echo '<div class="alerta">llene todos los campos</div>';}
      if (@$_GET["error"]=="2")
           {    echo '<div class="alerta">El ususario es incorrecta</div>';}

           if (@$_GET["error"]=="3")
           {    echo '<div class="alerta">la contraseña es incorrecta</div>';}

           if (@$_GET["error"]=="4")
           {    echo '<div class="alerta">no tiene autorizacion</div>';}
      ?>


                  <h2>Iniciar sesión </h2>

                      </center>

                                          <center>
                                              <label >Usuario</label>
                                               <br>
                                          <input type="text" name="username" placeholder="Escribir............................................." >
                                     <br>
                                  <br>


                                                      <center>
                                                      <label>Contraseña</label>
                                                       <br>
                                                     <input type="password" name= "pass"  placeholder="Escribir.............................................">


                                                      <br><br>
                                      <div>
                                           <button type="submit" class="btn-aceptar"> Iniciar</button>
                                      </div>
                                     </center>
    </div>
    </body>
</html>
