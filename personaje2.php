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
    if (empty($nam) or ctype_space($nam)) {
      echo "El nombre es obligatorio... redirigiendo";
      ?>
      <script type="text/javascript">
      window.location.href = 'personaje.php';
      </script>
      <?php
    }

    $din = $_POST['dinero'];
    if ($din < 0) {
      echo "El dinero debe ser 0 o más... redirigiendo";
      ?>
      <script type="text/javascript">
      window.location.href = 'mod_personaje.php';
      </script>
      <?php
    }
    $estado = $_POST['estado'];
    $prof = $_POST['profesion'];
    $casa = $_POST['casa'];
    if ($casa != 'null') {
      $casa = "'".$_POST['casa']."'";
    }
    $raza = $_POST['raza'];

    $query = pg_query("INSERT INTO personaje
        values('$nam','$din', 0, '$estado' ,'$prof', $casa, '$raza')") or die ("No se pudo agregar personaje.");

    ?>
    <h1 align="center">El personaje ha sido añadido con éxito.</h1>
    <form action="Admin_main.php" method="post">
      <tr>
        <td colspan="2" align="center"><input type="submit" value="Volver al menu principal" /></td>
      </tr>
    </form>
  </body>
</html>
