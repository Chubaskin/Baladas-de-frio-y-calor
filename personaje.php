<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Añadir personaje</title>
  </head>
  <body>
    <h1 align="center">Añadir personaje</h1>
    <form action="personaje2.php" method="post">

    <p>Nombre del personaje:</p>
    <td align="center"><input type="text" name="name" size="30" maxlength="60"/></td>

    <p>Dinero:</p>
    <td align="center"><input type="number" name="dinero" size="30" maxlength="60" value="0"/></td>

    <p>Vivo o muerto</p>
    <select name="estado">
      <option value="true">Vivo</option>
      <option value="false">Muerto</option>
    </select>

    <p>Profesion:</p>
    <select name="profesion">
    <?php
    $query = pg_query("SELECT * FROM profesiones order by nombre_profesion") or die ('Tabla vacia');
    while ($row = pg_fetch_array($query)) {
      ?>
      <option value=<?php echo "'" . $row['nombre_profesion'] . "'" ?>><?php echo $row['nombre_profesion']?></option>
      <?php
    }
    ?>
    </select>

    <p>Casa:</p>
    <select name="casa">
      <option value="null">Sin casa</option>
    <?php
    $query2 = pg_query("SELECT * FROM casa order by nombre_casa") or die ('Tabla vacia');
    while ($row2 = pg_fetch_array($query2)) {
      ?>
      <option value=<?php echo "'" . $row2['nombre_casa'] . "'" ?>><?php echo $row2['nombre_casa']?></option>
      <?php
    }
    ?>
    </select>

    <p>Raza:</p>
    <select name="raza">
    <?php
    $query3 = pg_query("SELECT * FROM raza order by nombre_raza") or die ('Tabla vacia');
    while ($row3 = pg_fetch_array($query3)) {
      ?>
      <option value=<?php echo "'" . $row3['nombre_raza'] . "'" ?>><?php echo $row3['nombre_raza']?></option>
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
