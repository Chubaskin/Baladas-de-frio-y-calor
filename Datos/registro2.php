<?php
  require_once('conexion.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Intento de registro</title>
  </head>
  <body>
    <?php
    $id = $_POST["username"];
    if (empty($id)) {
      echo "El identificador es necesario... redireccionando";
      ?>
      <script type="text/javascript">
      window.location.href = 'registro.php';
      </script>
      <?php
    }
    $pass = $_POST["password"];
    if (empty($pass)) {
      echo "La contraseña es necesaria... redireccionando";
      ?>
      <script type="text/javascript">
      window.location.href = 'registro.php';
      </script>
      <?php
    }
    $name = $_POST['name'];
    if (empty($name)) {
      echo "El nombre es necesario... redireccionando";
      ?>
      <script type="text/javascript">
      window.location.href = 'registro.php';
      </script>
      <?php
    }
      $insertar = "insert into usuario values ('$name', '$pass');";
      $query = pg_query($insertar) or die ("No es posible hacer un nuevo usuario");
      if (!$query){
        echo "<h3>Error: ". pg_last_error. "</h3><hr>";
        ?>
        <form action="index.php" method="post">
          <tr>
            <td colspan="2" align="center"><input type="submit" value="Volver a la raiz" /></td>
          </tr>
        </form>
        <?php
      }
      else {
        $insertar = "insert into seguidor values ('$id', '$name');";
        $query = pg_query($insertar) or die ("No existe ese user identificador");
        if (!$query) {
          echo "<h3>Error: ". pg_last_error. "</h3><hr>";
          ?>
          <form action="index.php" method="post">
            <tr>
              <td colspan="2" align="center"><input type="submit" value="Volver a la raiz" /></td>
            </tr>
          </form>
          <?php
        }
      }
    ?>
    <h1 align="center">¡FELICITACIONES!</h1>
    <h2>Tu usuario a sido generado</h2>
    <form action="index.php" method="post">
      <tr>
        <td colspan="2" align="center"><input type="submit" value="Volver a la raiz" /></td>
      </tr>
    </form>
  </body>
</html>
