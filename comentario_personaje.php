<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Añadir comentario a: personaje</title>
  </head>
  <body>
    <h1 align="center">Añadir comentario a: personaje</h1>
    <?php
      $query = pg_query("SELECT * FROM personaje order by nombre_personaje") or die ('Tabla vacia');
      $nr = pg_num_rows($query);
      if ($nr < 1) {
        echo "Lista vacia, no hay que comentar... redirigiendo";
        ?>
        <script type="text/javascript">
          window.location.href = 'User_main.php';
        </script>
        <?php
      }
      ?>
    <form action="comentario_personaje2.php" method="post">
      <select name="nombre">
      <?php
      while ($row = pg_fetch_array($query)) {
        ?>
        <option value=<?php echo "'" . $row['nombre_personaje'] . "'" ?>><?php echo $row['nombre_personaje']?></option>
        <?php
      }
      ?>
      </select>
      <p>Voto</p>
      <select name="voto">
        <option value="true">Postivo</option>
        <option value="false">Neutro</option>
      </select>
      <p>Comentario:</p>
      <td align="center"><input type="text" name="comentario" size="30" maxlength="250"/></td>
      <br><br>
      <td colspan="2" align="center"><input disabled type="submit" value="Añadir" /></td>
    </form>
    <hr>
    <form action="User_main.php" method="post">
      <tr>
        <td colspan="2" align="center"><input type="submit" value="Volver" /></td>
      </tr>
    </form>
  </body>
</html>
