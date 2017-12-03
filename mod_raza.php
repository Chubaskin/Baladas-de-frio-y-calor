<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar raza</title>
  </head>
  <body>
    <h1 align="center">Modificar raza</h1>
    <p>Nombre de la raza</p>
    <?php
      $query = pg_query("SELECT * FROM raza order by nombre_raza") or die ('Tabla vacia');
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

    <form action="mod_raza2.php" method="post">
      <select name="nombre">
      <?php
      while ($row = pg_fetch_array($query)) {
        ?>
        <option value=<?php echo "'" . $row['nombre_raza'] . "'" ?>><?php echo $row['nombre_raza']?></option>
        <?php
      }
      ?>
      </select>
      <p>Caracteristicas nuevas:</p>
      <td align="center"><input type="text" name="desc" size="30" maxlength="250" /></td>
      <br><br>
      <td colspan="2" align="center"><input type="submit" value="Modificar" /></td>
    </form>
    <hr>
    <form action="Admin_main.php" method="post">
      <td colspan="2" align="center"><input type="submit" value="Volver" /></td>
    </form>
  </body>
</html>
