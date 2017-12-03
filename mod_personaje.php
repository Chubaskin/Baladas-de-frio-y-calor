<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar personaje</title>
  </head>
  <body>
    <h1 align="center">Modificar personaje</h1>
    <h2>** Modificar un personaje muerto en esta seccion ademas lo revive.</h2>
    <p>Nombre del personaje</p>
    <?php
      $query = pg_query("SELECT * FROM personaje order by nombre_personaje") or die ('Tabla vacia');
      $nr = pg_num_rows($query);
      if ($nr < 1) {
        echo "Lista vacia, no hay nada que modificar... redirigiendo";
        ?>
        <script type="text/javascript">
        window.location.href = 'Admin_main.php';
        </script>
        <?php
      }
      ?>

    <form action="mod_personaje2.php" method="post">
      <select name="nombre">
      <?php
      while ($row = pg_fetch_array($query)) {
        ?>
        <option value=<?php echo "'" . $row['nombre_personaje'] . "'"?>><?php echo $row['nombre_personaje']?></option>
        <?php
      }
      ?>
      </select>

      <!-- NO SE CAMBIA EL NOMBRE POR LAS DEUDAS DE ESTE -->

      <p>Dinero poseido (0 o más):</p>
      <td align="center"><input type="number" name="dinero" size="30" maxlength="60" value="0"/></td>

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
      $query = pg_query("SELECT * FROM casa order by nombre_casa") or die ('Tabla vacia');
      while ($row = pg_fetch_array($query)) {
        ?>
        <option value=<?php echo "'" . $row['nombre_casa'] . "'" ?>><?php echo $row['nombre_casa']?></option>
        <?php
      }
      ?>
      </select>

      <p>Raza:</p>
      <select name="raza">
      <?php
      $query = pg_query("SELECT * FROM raza order by nombre_raza") or die ('Tabla vacia');
      while ($row = pg_fetch_array($query)) {
        ?>
        <option value=<?php echo "'" . $row['nombre_raza'] . "'" ?>><?php echo $row['nombre_raza']?></option>
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
