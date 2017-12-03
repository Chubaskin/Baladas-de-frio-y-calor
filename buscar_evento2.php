<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $nombre = $_POST['evento'];
     echo "<h1 align='center'> Evento buscado: $nombre</h1>";
     echo "<p align='center'>Casas que participan en el evento</p>";
     $query = pg_query("SELECT * FROM eventos_casa WHERE nombre_evento = '$nombre'");
     $row = pg_fetch_array($query);
     echo "<table border='4' class='stats' cellspacing='0' align='center'>
           <th>Nombre de la casa</th>
           </tr>";
     while ($row = pg_fetch_array($query)) {
       echo "<tr>";
       echo "<td>".$row['nombre_casa']."</td>";
       echo "</tr>";
     }
     echo "</table>";

     echo "<hr>";
     echo "<p align='center'>Personajes que participan en el evento.</p>";

      $query = pg_query("SELECT * FROM eventos_personaje WHERE nombre_evento = '$nombre'");
      echo "<table border='4' class='stats' cellspacing='0' align='center'>
            <th>Nombre del personaje</th>
            </tr>";
     while ($row = pg_fetch_array($query)) {
       echo "<tr>";
       echo "<td>".$row['nombre_personaje']."</td>";
       echo "</tr>";
     }
     echo "</table>";
     ?>
     <form action="buscar_evento.php" method="post">
       <td colspan="2" align="center"><input type="submit" value="Buscar otro evento" /></td>
     </form>

     <form action="User_main.php" method="post">
       <hr>
       <td colspan="2" align="center"><input type="submit" value="Volver al menú principal" /></td>
     </form>
  </body>
</html>
