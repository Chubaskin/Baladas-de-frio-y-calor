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
    <title>Listado de popularidad</title>
  </head>
  <body>
    <h1 align="center">Listado de popularidad de los personajes</h1>
    <?php
      $query = pg_query("SELECT A.Nombre_personaje, count(B.voto) as Popularidad
	     from personaje A inner join comentario_personaje B on A.nombre_personaje = B.nombre_personaje where B.voto = true
       group by A.nombre_personaje order by Popularidad desc;");
      $nr = pg_num_rows($query);

      echo "<table border='4' class='stats' cellspacing='0' align='center'>
            <th>Nombre del personaje</th>
            <th>Votos postivos totales</th>
            <th>Estado</th>
            </tr>";
      while ($row = pg_fetch_array($query)) {
        echo "<tr>";
        echo "<td>".$row['nombre_personaje']."</td>";
        echo "<td>".$row[1]."</td>";
        if ($row['vivo_o_muerto'] = 'true') {
          echo "<td>Vivo</td>";
        }
        else {
          echo "<td>Muerto</td>";
        }
        echo "</tr>";
      }
       ?>
    <button onclick="goBack()">Página anterior</button>
  </body>
</html>
