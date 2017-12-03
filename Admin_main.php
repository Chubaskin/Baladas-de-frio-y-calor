<!Doctype html>
<html>
<style>
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
</style>
<body>

<h1 align="center">Sesión de Adiministrador</h1>

<p>Añadir transacciones:</p>
<div class="btn-group" style="width:100%">
  <form action="tran_bc.php" method="post">
    <button disabled style="width:25%">Banco-Casa</button>
  </form>
  <form action="tran_cc.php" method="post">
    <button style="width:25%">Casa-Casa</button>
  </form>
  <form action="tran_cp.php" method="post">
    <button style="width:25%">Casa-personaje</button>
  </form>
  <form action="tran_pp.php" method="post">
    <button style="width:25%">Personaje-personaje</button>
  </form>
</div>

<p>Pagar transacciones:</p>
<div class="btn-group" style="width:100%">
  <button disabled style="width:25%">Banco-casa</button>
  <button disabled style="width:25%">Casa-Casa</button>
  <button disabled style="width:25%">Casa-personaje</button>
  <button disabled style="width:25%">Personaje-personaje</button>
</div>

<p>Añadir:</p>
<div class="btn-group" style="width:100%">
  <form action="libro.php" method="post">
    <button style="width:16.6%">Libro</button>
  </form>
  <form action="evento.php" method="post">
    <button style="width:16.6%">Evento</button>
  </form>
  <form action="personaje.php" method="post">
    <button style="width:16.6%">Personaje</button>
  </form>
  <form action="raza.php" method="post">
    <button style="width:16.6%">Raza</button>
  </form>
  <form action="profesion.php" method="post">
    <button style="width:16.6%">Profesión</button>
  </form>
  <form action="casa.php" method="post">
    <button style="width:16.7%">Casa</button>
  </form>
</div>

<p>Modificar:</p>
<div class="btn-group" style="width:100%">
  <form action="mod_personaje.php" method="post">
    <button style="width:20%">Personaje</button>
  </form>
  <form action="mod_raza.php" method="post">
    <button style="width:20%">Raza</button>
  </form>
  <form action="mod_profesion.php" method="post">
    <button style="width:20%">Profesión</button>
  </form>
  <form action="mod_casa.php" method="post">
    <button disabled style="width:20%">Casa</button>
  </form>
  <form action="mod_evento.php" method="post">
    <button style="width:20%">Evento</button>
  </form>
</div>

<p>Añadir relaciones:</p>
<div class="btn-group" style="width:100%">
  <form action="casa_casa.php" method="post">
    <button style="width:33.3%">Casa-casa</button>
  </form>
  <form action="per_per.php" method="post">
    <button style="width:33.3%">Personaje-personaje</button>
  </form>
  <form action="raza_raza.php" method="post">
    <button style="width:33.3%">Raza-raza</button>
  </form>
</div>

<p>Modificar relaciones:</p>
<div class="btn-group" style="width:100%">
  <form action="mod_casa_casa.php" method="post">
    <button style="width:33.3%">Casa-casa</button>
  </form>
  <form action="mod_per_per.php" method="post">
    <button style="width:33.3%">Personaje-personaje</button>
  </form>
  <form action="mod_raza_raza.php" method="post">
    <button style="width:33.3%">Raza-raza</button>
  </form>
</div>

<p>Añadir participaciones:</p>
<div class="btn-group" style="width:100%">
  <form action="per_evento.php" method="post">
    <button style="width:50%">Personaje-evento</button>
  </form>
  <form action="casa_evento.php" method="post">
    <button style="width:50%">Casa-evento</button>
  </form>
</div>

<br><hr>
<p></p>
<div class="btn-group" style="width:100%">
  <form action="popularidad.php" method="post">
    <button style="width:33.3%">Lista de popularidad</button>
  </form>
  <form action="asesinar.php" method="post">
    <button style="width:33.3%">ASESINAR AL PERSONAJE MÁS FAMOSO</button>
  </form>
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
