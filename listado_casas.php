<?php require_once('conexion.php') ?>
<script>
function goBack() {
    window.history.back();
}
</script>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de las casas</title>
  </head>
  <body>
    <h1 align="center">Listado de las casas</h1>
    <?php
      $query = pg_query("SELECT * FROM Casa order by dinero desc, integrantes desc");
      $nr = pg_num_rows($query);

      echo "<table border='4' class='stats' cellspacing='0' align='center'>
            <th>Nombre de la casa</th>
            <th>Integrantes</th>
            <th>Dinero</th>
            <th>Deuda actual</th>
            <th>Nombre del lider</th>
            </tr>";
      while ($row = pg_fetch_array($query)) {
        echo "<tr>";
        echo "<td>".$row['nombre_casa']."</td>";
        echo "<td>".$row['integrantes']."</td>";
        echo "<td>".$row['dinero']."</td>";
        echo "<td>".$row['deuda_bancaria']."</td>";
        echo "<td>".$row['nombre_lider']."</td>";
        echo "</tr>";
      }
       ?>
    <button onclick="goBack()">Página anterior</button>
  </body>
</html>
