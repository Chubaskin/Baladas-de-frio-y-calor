<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Añadir profesión</title>
  </head>
  <body>
    <h1 align="center">Añadir profesión</h1>

    <form action="profesion2.php" method="post">

    <p>Nombre profesión:</p>
    <td align="center"><input type="text" name="name" size="30" maxlength="60" /></td>

    <p>Descripción:</p>
    <td align="center"><input type="text" name="desc" size="30" maxlength="250" /></td>
    <br><br>
    <td colspan="2" align="center"><input type="submit" value="Añadir" /></td>
    </form>

    <form action="Admin_main.php" method="post">
      <hr>
      <td colspan="2" align="center"><input type="submit" value="Volver" /></td>
    </form>
  </body>
</html>
