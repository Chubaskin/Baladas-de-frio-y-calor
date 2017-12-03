<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Añadir libro</title>
  </head>
  <body>
    <h1 align="center">Añadir libro</h1>
    <form action="libro2.php" method="post">
      <p>Nuevo libro:</p>
      <td align="center"><input type="text" name="name" size="30" maxlength="60"/></td>
      <p>Numero de volumen (mayor que 0):</p>
      <td align="center"><input type="number" name="vol" size="30" maxlength="30" value="1"/></td>
      <br><br>
      <td colspan="2" align="center"><input type="submit" value="Añadir" /></td>
    </form>

    <form class="" action="Admin_main.php" method="post">
      <hr>
      <td colspan="2" align="center"><input type="submit" value="Volver" /></td>
    </form>
  </body>
</html>
