<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $nom = $_POST['name'];
    if (empty($nom) or ctype_space($nom)) {
      echo "El nombre de evento es obligatorio... redirigiendo";
      ?>
      <script type="text/javascript">
      window.location.href = 'evento.php';
      </script>
      <?php
    }
    ?>
    <?php
    $desc = $_POST['desc'];
    if (empty($desc) or ctype_space($desc)) {
      echo "La descripcion es obligatoria... redirigiendo";
      ?>
      <script type="text/javascript">
      window.location.href = 'evento.php';
      </script>
      <?php
    }
    $tit = $_POST['titulo'];
    $query = pg_query("INSERT INTO eventos VALUES ('$nom', '$desc', '$tit') ") or die ("El evento no pudo ser añadido");
    ?>
    <h1 align="center">El evento fue añadido con éxito.</h1>
    <form action="Admin_main.php" method="post">
      <tr>
        <td colspan="2" align="center"><input type="submit" value="Volver al menu principal" /></td>
      </tr>
    </form>
  </body>
</html>
