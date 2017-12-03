<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $casa1 = $_POST['casa1'];
    $casa2 = $_POST['casa2'];
    $dinero = $_POST['dinero'];
    if ($dinero >= 1) {
        $query = pg_query("INSERT INTO transaccion_casa(nombre_casa1, nombre_casa2, estado_de_pago, monto)
          VALUES ('$casa2', '$casa1', 'false', '$dinero')") or die("Error en la transacción");
        echo "<p>Transacción realizada satisfactoriamente</p>";
        echo "<hr>";
        ?>
        <form action="Admin_main.php" method="post">
          <tr>
            <td colspan="2" align="center"><input type="submit" value="Volver al menu principal" /></td>
          </tr>
        </form>
        <?php
    }
    else {
      ?>
      <form action="tran_pp.php" method="post">
        <tr>
          <td colspan="2" align="center"><input type="submit" value="Volver a intentar" /></td>
        </tr>
      </form>

      <?php
    }
    ?>




  </body>
</html>
