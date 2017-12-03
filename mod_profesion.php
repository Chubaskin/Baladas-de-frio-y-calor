<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar profesion</title>
  </head>
  <body>
    <h1 align="center">Modificar profesion</h1>
    <?php
      $query = pg_query("SELECT * FROM profesiones order by nombre_profesion") or die ('Tabla vacia');
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

      <form action="mod_profesion2.php" method="post">
        <select name="nombre">
        <?php
        while ($row = pg_fetch_array($query)) {
          ?>
          <option value=<?php echo "'" . $row['nombre_profesion'] . "'"?>><?php echo $row['nombre_profesion']?></option>
          <?php
        }
        ?>
        </select>

        <p>Nueva descripcion:</p>
        <td align="center"><input type="text" name="desc" size="30" maxlength="60"/></td>
        <br><br>
        <td colspan="2" align="center"><input type="submit" value="Modificar" /></td>
      </form>

      <form class="" action="Admin_main.php" method="post">
        <hr>
        <td colspan="2" align="center"><input type="submit" value="Volver" /></td>
      </form>
  </body>
</html>
