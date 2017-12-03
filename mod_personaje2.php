<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
  $din = $_POST['dinero'];
  if ($din < 0) {
    echo "El dinero debe ser 0 o más... redirigiendo";
    ?>
    <script type="text/javascript">
    window.location.href = 'mod_personaje.php';
    </script>
    <?php
  }
  $nom = $_POST['nombre'];
  $prof = $_POST['profesion'];
  $casa = $_POST['casa'];
  $raza = $_POST['raza'];
  if ($casa != 'null') {
    $casa = "'".$_POST['casa']."'";
  }

  $query = pg_query("UPDATE personaje SET dinero = $din, vivo_o_muerto = 'true',
      nombre_profesion = '$prof', nombre_casa = $casa, nombre_raza = '$raza' WHERE nombre_personaje = '$nom'") or die
        ('Hay un problema con la modificacion de la tabla');
    ?>

    <h1 align="center">Modificacion de personaje con éxito.</h1>
    <form action="Admin_main.php" method="post">
      <tr>
        <td colspan="2" align="center"><input type="submit" value="Volver al menu principal" /></td>
      </tr>
    </form>
  </body>
</html>
