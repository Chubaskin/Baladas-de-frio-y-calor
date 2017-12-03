<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Añadir participacion: casa-evento</title>
  </head>
  <body>
    <h1 align="center">Añadir participacion: casa-evento</h1>
      <form action="casa_evento2.php" method="post">
        <p>Casa:</p>
        <select name="casa">
        <?php
        $query = pg_query("SELECT * FROM casa order by nombre_casa") or die ('Tabla vacia');
        while ($row = pg_fetch_array($query)) {
          ?>
          <option value=<?php echo "'" . $row['nombre_casa'] . "'" ?>><?php echo $row['nombre_casa']?></option>
          <?php
        }
        ?>
        </select>

        <p>Evento:</p>
        <select name="evento">
        <?php
        $query2 = pg_query("SELECT * FROM eventos order by nombre_evento") or die ('Tabla vacia');
        while ($row2 = pg_fetch_array($query2)) {
          ?>
          <option value=<?php echo "'" . $row2['nombre_evento'] . "'" ?>><?php echo $row2['nombre_evento']?></option>
          <?php
        }
        ?>
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
