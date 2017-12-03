<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Añadir transacción: casa-personaje</title>
  </head>
  <body>
    <h1 align="center">Añadir transacción: casa-personaje</h1>
    <h2>** La casa le dará el dinero al personaje, la casa debe tener dinero y el personaje debe estar vivo</h2>
    <form action="tran_cp2.php" method="post">

    <p>Primera casa:</p>
    <select name="casa">
    <?php
    $query = pg_query("SELECT * FROM casa WHERE dinero > 0 order by nombre_casa") or die ('Tabla vacia');
    while ($row = pg_fetch_array($query)) {
      ?>
      <option value=<?php echo "'" . $row['nombre_casa'] . "'" ?>><?php echo $row['nombre_casa']?></option>
      <?php
    }
    ?>
    </select>

    <p>Personaje:</p>
    <select name="pj">
    <?php
    $query2 = pg_query("SELECT * FROM personaje WHERE vivo_o_muerto = 'true' order by nombre_personaje") or die ('Tabla vacia');
    while ($row2 = pg_fetch_array($query2)) {
      ?>
      <option value=<?php echo "'" . $row2['nombre_personaje'] . "'" ?>><?php echo $row2['nombre_personaje']?></option>
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
</html>
