<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $nam1 = $_POST['casa1'];
    $nam2 = $_POST['casa2'];
    $query = pg_query("SELECT * FROM relacion_casa WHERE nombre_casa1 = '$nam1' and nombre_casa2 = '$nam2'");
    $nr = pg_num_rows($query);
    if ($nr>0) {
      $rel = $_POST['relacion'];
      $query = pg_query("UPDATE relacion_casa SET estadorel_cc = '$rel' WHERE nombre_casa1 = '$nam1' and nombre_casa2 = '$nam2' ");
      ?>
      <h1 align="center">Relación casa-casa modificada con éxito.</h1>
      <form action="Admin_main.php" method="post">
        <tr>
          <td colspan="2" align="center"><input type="submit" value="Volver al menu principal" /></td>
        </tr>
      </form>
      <?php
    }

  else{
    echo "La relacion no existe por lo que no puede ser modificada.";
    ?>
    <form action="mod_casa_casa.php" method="post">
      <tr>
        <td colspan="2" align="center"><input type="submit" value="Volver a intentar" /></td>
      </tr>
    </form>
    <?php
    }
    ?>
  </body>
</html>
