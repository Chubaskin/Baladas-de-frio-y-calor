<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Añadir evento</title>
  </head>
  <body>
    <h1 align="center">Añadir evento</h1>
    <form action="evento2.php" method="post">
      <p>Nombre del evento</p>
      <td align="center"><input type="text" name="name" size="30" maxlength="60"/></td>

      <p>Descripcion del evento</p>
      <td align="center"><input type="text" name="desc" size="30" maxlength="250"/></td>

      <p>Libro al que pertenece</p>
      <?php
      $query = pg_query("SELECT * FROM libros order by titulo") or die ('Tabla vacia');
      $nr = pg_num_rows($query);
      ?>
      <select name="titulo">
      <?php
      while ($row = pg_fetch_array($query)) {
        ?>
        <option value=<?php echo "'" . $row['titulo'] . "'"?>><?php echo $row['titulo']?></option>
        <?php
      }
      ?>

      </select>
      <br><br>
      <td colspan="2" align="center"><input type="submit" value="Añadir" /></td>
    </form>

    <form action="Admin_main.php" method="post">
      <hr>
      <td colspan="2" align="center"><input type="submit" value="Volver" /></td>
    </form>
  </body>
</html>
