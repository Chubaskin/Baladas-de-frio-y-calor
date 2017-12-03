<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $nombre = $_POST['pj'];
     echo "<h1 align='center'> Personaje buscado: $nombre</h1>";
     $query = pg_query("SELECT * FROM personaje WHERE nombre_personaje = '$nombre'");
     $row = pg_fetch_array($query);
     echo "<table border='4' class='stats' cellspacing='0' align='center'>
           <th>Casa de pertenencia</th>
           <th>Lider de casa</th>
           <th>Raza</th>
           <th>Profesión</th>
           </tr>";
    $aux = pg_query("SELECT CASE WHEN EXISTS (Select nombre_personaje from personaje where
           '$nombre' = (Select nombre_lider from casa where nombre_lider = '$nombre'))
           THEN CAST(1 AS BIT) ELSE CAST(0 AS BIT) END ");
    $aux2 = pg_fetch_array($aux);
     if ($aux2[0]) {
        $lider = 'true';
     }
     else {
        $lider = 'false';
     }
     echo "<tr>";
     echo "<td>".$row['nombre_casa']."</td>";
     echo "<td>".$lider."</td>";
     echo "<td>".$row['nombre_raza']."</td>";
     echo "<td>".$row['nombre_profesion']."</td>";
     echo "</table>";
     ?>
     <hr>
     <p align="center">Personajes con los que se lleva muy bien.</p>
     <?php
      $query = pg_query("SELECT nombre_personaje2 FROM relacion_personaje
          WHERE nombre_personaje1 = '$nombre' and estadorel_pp = 'Superbuena'");
      echo "<table border='4' class='stats' cellspacing='0' align='center'>
            <th>Nombre del personaje</th>
            </tr>";
     while ($row = pg_fetch_array($query)) {
       echo "<tr>";
       echo "<td>".$row['nombre_personaje2']."</td>";
       echo "</tr>";
     }
     echo "</table>";
     ?>
     <hr>
     <p align="center">Personajes con los que se lleva muy mal.</p>
     <?php
      $query = pg_query("SELECT nombre_personaje2 FROM relacion_personaje
          WHERE nombre_personaje1 = '$nombre' and estadorel_pp = 'Supermala'");
      echo "<table border='4' class='stats' cellspacing='0' align='center'>
            <th>Nombre del personaje</th>
            </tr>";
     while ($row = pg_fetch_array($query)) {
       echo "<tr>";
       echo "<td>".$row['nombre_personaje2']."</td>";
       echo "</tr>";
     }
     echo "</table>";
     ?>
     <form action="buscar_personaje.php" method="post">
       <td colspan="2" align="center"><input type="submit" value="Buscar otro personaje" /></td>
     </form>

     <form action="User_main.php" method="post">
       <hr>
       <td colspan="2" align="center"><input type="submit" value="Volver al menú principal" /></td>
     </form>
  </body>
</html>
