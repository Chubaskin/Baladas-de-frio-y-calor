<?php require_once('conexion.php');
  $aux = $_POST["UserName"];
  if (empty($aux)) {
    echo "Usuario vacio... redirigiendo";
    ?>
    <script type="text/javascript">
    window.location.href = 'index.php';
    </script>
    <?php
  }

  $aux2 = $_POST["Password"];
  if (empty($aux2)) {
    echo "Contraseña vacia... redirigiendo";
    ?>
    <script type="text/javascript">
    window.location.href = 'index.php';
    </script>
    <?php
  }

  $rev = "SELECT * from Usuario where user_id =  '$aux' ";
  $query = pg_query($rev);
  $nr = pg_num_rows($query);
  $row = pg_fetch_array($query);
  if ($nr != 1) {
    echo "<h1>USUARIO INCORRECTO</h1><hr>";
  }
  else if ($row['contraseña'] == $aux2) {
    echo strval($row['contraseña']);
    echo (string)$aux2;
    echo strcmp((string)$row['contraseña'], (string)$aux2);
    echo strcmp( strval($row['contraseña']),  strval($aux2));
    echo "<h1>CONTRASEÑA INCORRECTA</h1><hr>";
  }
  else {//Usuario y contraseña coinciden
    $admin = "SELECT * FROM Escritor";
    $query2 = pg_query($admin);
    $row2 = pg_fetch_array($query2);
    if (strcmp($row2['user_id'], $row['user_id']) == 0) {
      ?>
      <script type="text/javascript">
      window.location.href = 'Admin_main.php';
      </script>
      <?php
    }
    else {
      ?>
      <script type="text/javascript">
      window.location.href = 'User_main.php';
      </script>
      <?php
    }
  }
?>
<form action="index.php" method="post">
  <input type="submit" value="Volver">
</form>
