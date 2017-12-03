<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Buscar: personaje</title>
  </head>
  <body>
    <h1 align="center">Buscar: personaje</h1>
    <?php
    $query = pg_query("SELECT * FROM personaje ORDER BY nombre_personaje") or die ("No existen personajes en la lista");
     ?>
     <form action="buscar_personaje2.php" method="post">

       <p>Nombre del personaje:</p>
       <select name="pj">
       <?php
       while ($row = pg_fetch_array($query)) {
         ?>
         <option value=<?php echo "'" . $row['nombre_personaje'] . "'" ?>><?php echo $row['nombre_personaje']?></option>
         <?php
       }
       ?>
       </select>
       <br><br>
       <td colspan="2" align="center"><input type="submit" value="Buscar" /></td>
     </form>
     <form action="User_main.php" method="post">
       <hr>
       <td colspan="2" align="center"><input type="submit" value="Volver" /></td>
     </form>
  </body>
</html>
