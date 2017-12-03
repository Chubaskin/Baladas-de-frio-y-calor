<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $nam1 = $_POST['raza1'];
    $nam2 = $_POST['raza2'];
    $query = pg_query("SELECT * FROM relacion_raza WHERE nombre_raza1 = '$nam1' and nombre_raza2 = '$nam2'");
    $nr = pg_num_rows($query);
    if ($nr>0) {
      $rel = $_POST['relacion'];
      $query = pg_query("UPDATE relacion_raza SET estadorel_rr = '$rel' WHERE nombre_raza1 = '$nam1' and nombre_raza2 = '$nam2' ");
      ?>
      <h1 align="center">Relación raza-raza modificada con éxito.</h1>
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
    <form action="mod_raza_raza.php" method="post">
      <tr>
        <td colspan="2" align="center"><input type="submit" value="Volver a intentar" /></td>
      </tr>
    </form>
    <?php
    }
    ?>
  </body>
</html>
