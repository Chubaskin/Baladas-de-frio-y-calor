<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $nam = $_POST['name'];
    if (ctype_space($nam) or empty($nam)) {
      echo "El nombre de la profesión es requerido... redirigiendo";
      ?>
      <script type="text/javascript">
      window.location.href = 'profesion.php';
      </script>
      <?php
    }

    $des = $_POST['desc'];
    if (empty($des) or ctype_space($des)) {
      echo "La descripción es requerida... redirigiendo";
      ?>
      <script type="text/javascript">
      window.location.href = 'profesion.php';
      </script>
      <?php
    }

    $query = pg_query("INSERT INTO profesiones VALUES ('$nam', '$des')");

    ?>
    <h1 align="center">Profesión añadida con éxito.</h1>
    <form action="Admin_main.php" method="post">
      <tr>
        <td colspan="2" align="center"><input type="submit" value="Volver al menu principal" /></td>
      </tr>
    </form>
  </body>
</html>
