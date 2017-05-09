<div id="cabecera">
  <h1>Mi gran página web</h1>
  <div class="saludo">
    <?php
      if (isset($_SESSION['login']) ) {
        echo "Hola ".$_SESSION['nombre']." <a href='logout.php'>Logout</a>";
      }
      else {
        echo "Usuario desconocido. <a href='login.php'>Login</a>";
      }

     ?>

  </div>
</div>
