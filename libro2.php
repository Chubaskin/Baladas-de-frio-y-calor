<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
  require_once('conexion.php');
  $name = $_POST['name'];
  $vol = $_POST['vol'];

  if (empty($name) or ctype_space($name) or ($vol < 1)) {
    echo "Todos los campos son requeridos... redireccionando";
    ?>
    <script type="text/javascript">
    window.location.href = 'libro.php';
    </script>
    <?php
  }

  $query = pg_query("INSERT INTO libros values('$name', '$vol','George R.R. Martí')") or die ("No se pudo agregar el libro.");

  ?>
  <h1 align="center">El libro ha sido añadido con éxito.</h1>
  <form action="Admin_main.php" method="post">
    <tr>
      <td colspan="2" align="center"><input type="submit" value="Volver al menu principal" /></td>
    </tr>
  </form>

   </body>
 </html>
