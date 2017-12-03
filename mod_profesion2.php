<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
  require_once('conexion.php');
  $descripcion = $_POST['desc'];
  $name = $_POST['nombre'];

  if (empty($descripcion)) {
    echo "Descripcion no ingresada... redireccionando";
    ?>
    <script type="text/javascript">
    window.location.href = 'mod_raza.php';
    </script>
    <?php
  }

  $query = pg_query("UPDATE profesiones SET descripcion = '$descripcion'
      WHERE nombre_profesion = '$name'") or die ("No se pudo cambiar la descripción.");

  ?>
  <h1 align="center">Las caracteristicas han sido modificadas con éxito.</h1>
  <form action="Admin_main.php" method="post">
    <tr>
      <td colspan="2" align="center"><input type="submit" value="Volver al menu principal" /></td>
    </tr>
  </form>

   </body>
 </html>
