


<?php

$busc= $_POST["Buscar"];
if ($busc=='') {

  include "config.php";
$sql = "SELECT * FROM Datos";
  $resultadob = $mysqli -> query($sql);

           $numerodefilab = mysqli_num_rows($resultadob);
        echo "   <table>
          <caption class = 'btt'>Lista de Los Usuarios Que Encontro</caption>

  "
        ;

            echo " <tr>
              <td class = 'btt'>Nombre  </td>
              <td class = 'btt'>Apellido  </td>
              <td class = 'btt'>Usuario  </td>
              <td class = 'btt'>Correo Electronico  </td>
              <td class = 'btt'>Acción </td>

            </tr>
  ";

              if ($numerodefilab > 0 ) {
  while($columnab = $resultadob ->fetch_assoc()){
  echo "<tr>";
      echo "<td>".$columnab["Nombre"]."</td>";
      echo "<td>".$columnab["Apellido"]."</td>";
      echo "<td>".$columnab["Usuario"]."</td>";
      echo "<td>".$columnab["Correo"]."</td>";
      echo "<td>
      <a href='Eliminar.php?id=".$columnab["id"]."'> Eliminar</a>
      <a href='Editar.php?id=".$columnab["id"]."'> Editar</a>






      </td>";
    }

                }

echo "  </table>";



echo "<caption class = 'btt'><a href='Agregar.php'> Agregar Nuevo Dato</a></caption>";










  // code...
}
else {
  // code...

  include "config.php";
  $sql = "SELECT * FROM Datos WHERE Nombre='".$busc."' OR Apellido='".$busc."' OR Usuario='".$busc."' OR Correo='".$busc."' "  ;

                          $resultadob = $mysqli -> query($sql);


                                   $numerodefilab = mysqli_num_rows($resultadob);
                                echo "   <table>
                                  <caption class = 'btt'>Lista de Los Usuarios Que Encontro</caption>

"
                                ;

                                    echo " <tr>
                                      <td class = 'btt'>Nombre  </td>
                                      <td class = 'btt'>Apellido  </td>
                                      <td class = 'btt'>Usuario  </td>
                                      <td class = 'btt'>Correo Electronico  </td>
                                      <td class = 'btt'>Acción </td>

                                    </tr>
";







                                      if ($numerodefilab > 0 ) {
                          while($columnab = $resultadob ->fetch_assoc()){
echo "<tr>";
                              echo "<td>".$columnab["Nombre"]."</td>";
                              echo "<td>".$columnab["Apellido"]."</td>";
                              echo "<td>".$columnab["Usuario"]."</td>";
                              echo "<td>".$columnab["Correo"]."</td>";
                              echo "<td>
<a href='Eliminar.php?id=".$columnab["id"]."'> Eliminar</a>
<a href='Editar.php?id=".$columnab["id"]."'> Editar</a>






                              </td>";
echo "</tr>";

                          }

                                      }
echo "  </table>";

echo "<caption class = 'btt'><a href='Agregar.php'> Agregar Nuevo Dato</a></caption>";

}


 ?>
