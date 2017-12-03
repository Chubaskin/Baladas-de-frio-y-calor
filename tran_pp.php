<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Añadir transacción: personaje-personaje</title>
  </head>
  <body>
    <h1 align="center">Añadir transacción: personaje-personaje</h1>
    <h2>** El primer personaje le entrega el dinero al segundo. Solo se muestran personajes vivos</h2>

    <form action="tran_pp2.php" method="post">

    <p>Primer personaje:</p>
    <select name="pj1">
    <?php
    $query = pg_query("SELECT * FROM personaje WHERE vivo_o_muerto = 'true' and dinero > 0 order by nombre_personaje")
      or die ('Tabla vacia');
    while ($row = pg_fetch_array($query)) {
      ?>
      <option value=<?php echo "'" . $row['nombre_personaje'] . "'" ?>><?php echo $row['nombre_personaje']?></option>
      <?php
    }
    ?>
    </select>

    <p>Segundo personaje:</p>
    <select name="pj2">
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
