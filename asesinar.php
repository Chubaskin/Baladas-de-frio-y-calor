<?php require_once('conexion.php') ?>
<!DOCTYPE html>
<style media="screen">
.btn-group button {
    background-color: #4CAF50; /* Green background */
    border: 1px solid green; /* Green border */
    color: white; /* White text */
    padding: 10px 24px; /* Some padding */
    cursor: pointer; /* Pointer/hand icon */
    float: left; /* Float the buttons side by side */
}
button:disabled{
  opacity: 0.6;
  cursor: not-allowed;
  pointer-events: all !important;
}
/* Clear floats (clearfix hack) */
.btn-group:after {
    content: "";
    clear: both;
    display: table;
}
.btn-group button:not(:last-child) {
    border-right: none; /* Prevent double borders */
}
/* Add a background color on hover */
.btn-group button:hover {
    background-color: #3e8e41;
}
.btn2 button {
  background-color: #990606;
  border: 1px solid red;
  color: white;
  padding: 10px 24px;
  cursor: pointer;
  float: left;
}
.btn2 button:hover {
  background-color: #720404;
}
button:disabled{
  opacity: 0.6;
  cursor: not-allowed;
  pointer-events: all !important;
}
</style>
<html>
  <head>
    <meta charset="utf-8">
    <title>Matar un personaje</title>
  </head>
  <body>
    <h1 align="center">Matar un personaje</h1>
    <h2>**Solo se muestran personajes vivos, no se puede matar algo ya muerto, ademas se requiere que tenga almenos 1 voto positivo</h2>
    <?php
    $query = pg_query("SELECT A.Nombre_personaje, count(B.voto) as Popularidad
	     from personaje A inner join comentario_personaje B on A.nombre_personaje = B.nombre_personaje where B.voto = true
       and A.vivo_o_muerto = true group by A.nombre_personaje order by Popularidad desc limit 1");
    if (!empty($query)) {
      $row = pg_fetch_array($query);
      echo "<p> El personaje más querido por los seguidores es: <b>$row[0] </b></p><br>";
      echo "<p>¿Desea asesinarlo brutalmente?</p>";
      ?>
      <div class="btn-group" style="width:100%">
        <form action="Admin_main.php" method="post">
          <button style="width:50%">Volver y dejar vivo al personaje</button>
        </form>
      </div>
      <br><br><br>
      <div class="btn2" style="width:100%">
        <form action="asesinar2.php" method="post">
          <button style="width:50%">ASESINAR A : <input value=<?php echo "'" . $row[0] . "'" ?> name="test"/></button>
        </form>
      </div>
      <?php
    }
    else {
      echo "<p>No quedan personajes populares vivos o los que estan vivos no son populares.</p>";
      ?>
      <form action="Admin_main.php" method="post">
        <hr>
        <td colspan="2" align="center"><input type="submit" value="Volver" /></td>
      </form>
      <?php
    }
       ?>
  </body>
</html>
