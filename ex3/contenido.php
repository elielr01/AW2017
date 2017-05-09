<?php session_start(); ?>


<!DOCTYPE html>
 <html>
 	<head>
 		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
 		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 		<title>Portada</title>
 	</head>

 	<body>

 		<div id="contenedor">

 			<?php include 'cabecera.php'; ?>
 			<?php include 'sidebarIzq.php'; ?>


 			<div id="contenido">
        <?php

          if (isset($_SESSION['login']) && $_SESSION['login']) {
            echo "CONTENIDO EXCLUSIVO!!!";
          }
          else {
            echo "Usted no ha iniciado sesion. Lo invitamos a iniciar sesion para ver nuestro contenido exlusivo.";
          }

         ?>
 			</div>


 			<?php include 'sidebarDer.php'; ?>
 			<?php include 'pie.php'; ?>


 		</div> <!-- Fin del contenedor -->

 	</body>
 </html>
