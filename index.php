<?php require_once('conexion.php');?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wiki de Baladas de frío y calor </title>
  </head>
  <body>
    <fieldset>
    <legend>Entrar a la plataforma</legend>
    <form action="test.php" method="post">
          <table border="0">
            <tr>
              <td>Identificador</td>
              <td align="center"><input type="text" name="UserName" size="30" maxlength="10" /></td>
            </tr>
            <td>Contraseña</td>
            <td align="center"><input type="password" name="Password" size="30" maxlength="60" /></td>
            <tr>
              <td colspan="2" align="center"><input type="submit" value="Entrar" /></td>
            </tr>
          </table>
        </form>
        <form action="registro.php" method="post">
          <tr>
            <td colspan="2" align="center"><input type="submit" value="Registrarse" /></td>
          </tr>
        </form>
        
  </fieldset>
  </body>
</html>
