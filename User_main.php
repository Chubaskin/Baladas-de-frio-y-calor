<!Doctype html>
<html>
<style>
.btn-group button {
    background-color: #4c61af; /* Green background */
    border: 1px solid blue; /* Green border */
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
    background-color: #3d4691;
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
</style>
<body>

<h1 align="center">Sesión de Usuario</h1>

<p>Busca:</p>
<div class="btn-group" style="width:100%">
  <form action="buscar_personaje.php" method="post">
      <button style="width:50%">Personaje</button>
  </form>
  <form action="buscar_evento.php" method="post">
    <button style="width:50%">Evento</button>
  </form>
</div>

<p>Añadir comentario a:</p>
<div class="btn-group" style="width:100%">
  <form action="comentario_personaje.php" method="post">
      <button style="width:50%">Personaje</button>
  </form>
  <form action="comentario_evento.php" method="post">
    <button style="width:50%">Evento</button>
  </form>
</div>

<p></p><hr>
<div class="btn-group" style="width:100%">
<form action="listado_casas.php" method="post">
  <button style="width:33.3%">Listado de casas</button>
</form>
</div>
<br><br>
<form class="btn2" action="index.php" method="post">
  <button style="width:15%">Salir de la plataforma</button>
</form>

</body>
</html>
