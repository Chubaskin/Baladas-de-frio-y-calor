<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Añadir casa</title>
  </head>
  <body>
    <h1 align="center">Añadir casa</h1>
    <h2>** Las casas se crean sin lider ni integrates</h2>
    <form action="casa2.php" method="post">

    <p>Nombre casa:</p>
    <td align="center"><input type="text" name="casa" size="30" maxlength="60" /></td>

    <p>Dinero:</p>
    <td align="center"><input type="number" name="dinero" size="30" maxlength="60" value="0"/></td>

    <br><br>
    <td colspan="2" align="center"><input type="submit" value="Añadir" /></td>
    </form>

    <form action="Admin_main.php" method="post">
      <hr>
      <td colspan="2" align="center"><input type="submit" value="Volver" /></td>
    </form>
  </body>
</html>
