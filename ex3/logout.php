<?php
  session_start();
  session_destroy();
  echo "Usted cerro sesion. En un momento será redirigido a la pagina principal";
  header("refresh:2;url=index.php");
  exit;
 ?>
