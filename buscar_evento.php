<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Buscar: evento</title>
  </head>
  <body>
    <h1 align="center">Buscar: evento</h1>
    <?php
    $query = pg_query("SELECT * FROM eventos ORDER BY nombre_evento") or die ("No existen personajes en la lista");
     ?>
     <form action="buscar_evento2.php" method="post">

       <p>Nombre del Evento:</p>
       <select name="evento">
       <?php
       while ($row = pg_fetch_array($query)) {
         ?>
         <option value=<?php echo "'" . $row['nombre_evento'] . "'" ?>><?php echo $row['nombre_evento']?></option>
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
