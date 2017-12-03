<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $casa = $_POST['casa'];
    $eve = $_POST['evento'];
    $query = pg_query("SELECT * FROM eventos_casa WHERE nombre_evento = '$eve' and nombre_casa = '$casa'");
    $nr = pg_num_rows($query);

    if (empty($nr)) {
      $query = pg_query("INSERT INTO eventos_casa VALUES ('$casa','$eve')");

      ?>
      <h1 align="center">La participación de la casa ha sido añadida.</h1>
      <form action="Admin_main.php" method="post">
        <tr>
          <td colspan="2" align="center"><input type="submit" value="Volver al menu principal" /></td>
        </tr>
      </form>
      <?php
    }

  else{
    echo "La casa ya participa en este evento.";
    ?>
    <form action="per_evento.php" method="post">
      <tr>
        <td colspan="2" align="center"><input type="submit" value="Volver a intentar" /></td>
      </tr>
    </form>
    <?php
    }
    ?>
  </body>
</html>
