<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar relacion: personaje-personaje</title>
  </head>
  <body>
    <h1 align="center">Modificar relacion: personaje-personaje</h1>

    <form action="mod_per_per2.php" method="post">

      <p>Nombre primer personaje:</p>
      <select name="personaje1">
      <?php
      $query = pg_query("SELECT * FROM personaje order by nombre_personaje") or die ('Tabla vacia');
      while ($row = pg_fetch_array($query)) {
        ?>
        <option value=<?php echo "'" . $row['nombre_personaje'] . "'" ?>><?php echo $row['nombre_personaje']?></option>
        <?php
      }
      ?>
      </select>

      <p>Nombre segundo personaje:</p>
      <select name="personaje2">
      <?php
      $query = pg_query("SELECT * FROM personaje order by nombre_personaje") or die ('Tabla vacia');
      while ($row = pg_fetch_array($query)) {
        ?>
        <option value=<?php echo "'" . $row['nombre_personaje'] . "'" ?>><?php echo $row['nombre_personaje']?></option>
        <?php
      }
      ?>
      </select>

      <p>Nueva relacion:</p>
    <select name="relacion">
      <option value="Supermala">Super mala</option>
      <option value="Mala">Mala</option>
      <option value="Neutral">Neutral</option>
      <option value="Buena">Buena</option>
      <option value="Superbuena">Super buena</option>
    </select>
    <br><br>
    <td colspan="2" align="center"><input type="submit" value="Modificar" /></td>
    </form>

    <form action="Admin_main.php" method="post">
      <hr>
      <td colspan="2" align="center"><input type="submit" value="Volver" /></td>
    </form>
  </body>
</html>
