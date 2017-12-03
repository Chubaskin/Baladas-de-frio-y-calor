<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $nam = $_POST['casa'];
    if (ctype_space($nam) or empty($nam)) {
      echo "El nombre de la profesion es requerido... redirigiendo";
      ?>
      <script type="text/javascript">
      window.location.href = 'casa.php';
      </script>
      <?php
    }

    $din = $_POST['dinero'];
    if ($din<0) {
      echo "La descripción es requerida... redirigiendo";
      ?>
      <script type="text/javascript">
      window.location.href = 'casa.php';
      </script>
      <?php
    }

    $query = pg_query("INSERT INTO casa VALUES ('$nam', 0, '$din', 0, null)");

    ?>
    <h1 align="center">Casa añadida con éxito.</h1>
    <form action="Admin_main.php" method="post">
      <tr>
        <td colspan="2" align="center"><input type="submit" value="Volver al menu principal" /></td>
      </tr>
    </form>
  </body>
</html>
