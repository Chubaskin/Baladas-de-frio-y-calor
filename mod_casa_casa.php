<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar relacion: casa-casa</title>
  </head>
  <body>
    <h1 align="center">Modificar relacion: casa-casa</h1>

    <form action="mod_casa_casa2.php" method="post">

      <p>Nombre primera casa:</p>
      <select name="casa1">
      <?php
      $query = pg_query("SELECT * FROM casa order by nombre_casa") or die ('Tabla vacia');
      while ($row = pg_fetch_array($query)) {
        ?>
        <option value=<?php echo "'" . $row['nombre_casa'] . "'" ?>><?php echo $row['nombre_casa']?></option>
        <?php
      }
      ?>
      </select>

      <p>Nombre segunda casa:</p>
      <select name="casa2">
      <?php
      $query = pg_query("SELECT * FROM casa order by nombre_casa") or die ('Tabla vacia');
      while ($row = pg_fetch_array($query)) {
        ?>
        <option value=<?php echo "'" . $row['nombre_casa'] . "'" ?>><?php echo $row['nombre_casa']?></option>
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
