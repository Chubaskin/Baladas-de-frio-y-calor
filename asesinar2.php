<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $var = $_POST['test'];
    $query = pg_query("UPDATE personaje SET vivo_o_muerto = false WHERE nombre_personaje = '$var'")
      or die ("El personaje es indestructible, indesterrable e imbloqueable.");
     ?>
     <h1 align="center">Asesinato completado con éxito</h1>
     <form action="Admin_main.php" method="post">
       <hr>
       <td colspan="2" align="center"><input type="submit" value="Volver al menú principal" /></td>
     </form>
  </body>
</html>
