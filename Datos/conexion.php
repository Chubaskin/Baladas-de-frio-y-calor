<?php
function conectarBD(){
	$bd = pg_connect("host=localhost port=5432 dbname=Tarea_2 user=postgres password=666ded");

	if (!$bd){echo "Error: ".pg_last_error; }
}
	$conexion = conectarBD();
?>
