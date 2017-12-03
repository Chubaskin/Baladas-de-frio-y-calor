<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar casa</title>
  </head>
  <body>
    <h1 align="center">Modificar Casa</h1>

    <p>Nombre de la casa</p>
    <?php
      $query = pg_query("SELECT * FROM casa order by nombre_casa") or die ('Tabla vacia');
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

      <form action="mod_casa2.php" method="post">
        <select name="casa">
        <?php
        while ($row = pg_fetch_array($query)) {
          ?>
          <option value=<?php echo "'" . $row['nombre_casa'] . "'" ?>><?php echo $row['nombre_casa']?></option>
          <?php
        }
        ?>
        </select>

      <p>Dinero poseido (0 o más):</p>
      <td align="center"><input type="number" name="dinero" size="30" maxlength="60" value="0"/></td>

      <p>Nombre del lider (solo se muestran personajes vivos):</p>
      <select name="lider">
        <option value="null">Sin lider</option>
      <?php
      $query2 = pg_query("SELECT nombre_personaje FROM personaje where vivo_o_muerto = 'true'"); // ACA FALTA
      while ($row2 = pg_fetch_array($query2)) {
        ?>
        <option value=<?php echo "'" . $row2['nombre_personaje'] . "'" ?>><?php echo $row2['nombre_personaje']?></option>
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
