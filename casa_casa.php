<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Añadir relacion: casa-casa</title>
  </head>
  <body>
    <h1 align="center">Añadir relacion: casa-casa</h1>

    <form action="casa_casa2.php" method="post">

    <p>Primera casa:</p>
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

    <p>Segunda casa:</p>
    <select name="casa2">
    <?php
    $query2 = pg_query("SELECT * FROM casa order by nombre_casa") or die ('Tabla vacia');
    while ($row2 = pg_fetch_array($query2)) {
      ?>
      <option value=<?php echo "'" . $row2['nombre_casa'] . "'" ?>><?php echo $row2['nombre_casa']?></option>
      <?php
    }
    ?>
    </select>

    <p>Relacion:</p>
  <select name="relacion">
    <option value="Supermala">Super mala</option>
    <option value="Mala">Mala</option>
    <option value="Neutral">Neutral</option>
    <option value="Buena">Buena</option>
    <option value="Superbuena">Super buena</option>
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
