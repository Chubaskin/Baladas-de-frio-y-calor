<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php

  $var = $_POST['casa'];
  $var2 = $_POST['dinero'];
  $var3 = $_POST['lider'];
  echo "<hr>$var";
  echo "<hr>$var2";
  echo "<hr>$var3";
  ?>

  <h1 align="center">Modificacion de casa con éxito.</h1>
  <form action="Admin_main.php" method="post">
    <tr>
      <td colspan="2" align="center"><input type="submit" value="Volver al menu principal" /></td>
    </tr>
  </form>

</body>
</html>
