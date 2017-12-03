<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Añadir transacción: casa-casa</title>
  </head>
  <body>
    <h1 align="center">Añadir transacción: casa-casa</h1>
    <h2>** La primera casa le entrega dinero a la segunda casa.</h2>

    <form action="tran_cc2.php" method="post">

    <p>Primera casa:</p>
    <select name="casa1">
    <?php
    $query = pg_query("SELECT * FROM casa WHERE dinero >0 order by nombre_casa") or die ('Tabla vacia');
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

    <p>Dinero (1 o más):</p>
    <td align="center"><input type="number" name="dinero" size="30" maxlength="60" value="1"/></td>

    <br><br>
    <td colspan="2" align="center"><input type="submit" value="Añadir" /></td>
    </form>
  </form>

  <form action="Admin_main.php" method="post">
    <hr>
    <td colspan="2" align="center"><input type="submit" value="Volver" /></td>
  </form>
  </body>
  </body>
</html>
