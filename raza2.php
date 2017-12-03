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
      echo "El nombre de la raza es requerido... redirigiendo";
      ?>
      <script type="text/javascript">
      window.location.href = 'raza.php';
      </script>
      <?php
    }

    $car = $_POST['carac'];
    if (empty($car) or ctype_space($car)) {
      echo "Las caracteristicas son requeridas... redirigiendo";
      ?>
      <script type="text/javascript">
      window.location.href = 'raza.php';
      </script>
      <?php
    }

    $query = pg_query("INSERT INTO raza VALUES ('$nam', '$car')");

    ?>
    <h1 align="center">Raza añadida con éxito.</h1>
    <form action="Admin_main.php" method="post">
      <tr>
        <td colspan="2" align="center"><input type="submit" value="Volver al menu principal" /></td>
      </tr>
    </form>
  </body>
</html>
