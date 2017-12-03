<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro de cuenta</title>
  </head>
  <body>
    <form action="index.php" method="post">
      <input type="submit" value="Volver" />
    </form>
    <form id='register' action='registro2.php' method='post'
    accept-charset='UTF-8'>
  <fieldset>
  <legend>Nuevo usuario</legend>
  <input type='hidden' name='submitted' id='submitted' value='1'/>
  <label for='name' >Nombre del usuario*: </label>
  <input type='text' name='name' id='name' maxlength="60" />

  <label for='username' >Identificador*:</label>
  <input type='text' name='username' id='username' maxlength="10" />

  <label for='password' >Contraseña*:</label>
  <input type='password' name='password' id='password' maxlength="60" />
  <input type='submit' name='Submit' value='Registrarse' />
  <legend>Los campos con * son obligatorios</legend>
  </fieldset>
  </form>
    </form>
  </body>
</html>
