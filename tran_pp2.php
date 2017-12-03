<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $pj1 = $_POST['pj1'];
    $pj2 = $_POST['pj2'];
    $dinero = $_POST['dinero'];
    if ($dinero >= 1) {
        $query = pg_query("INSERT INTO transaccion_personajes(nombre_personaje1, nombre_personaje2, estado_de_pago, monto)
          VALUES ('$pj2', '$pj1', 'false', '$dinero')") or die("Error en la transacción");
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
