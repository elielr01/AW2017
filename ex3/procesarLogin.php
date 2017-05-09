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

          $username = htmlspecialchars(trim(strip_tags($_REQUEST["username"])));
          $password = htmlspecialchars(trim(strip_tags($_REQUEST["password"])));

          if ($username == "user" && $password == "userpass") {
            $_SESSION['login'] = true;
            $_SESSION['nombre'] = 'Juan';

            header("Location: index.php");
            exit;
          }
          elseif ($username == "admin" && $password == "adminpass") {
            $_SESSION['login'] = true;
            $_SESSION['nombre'] = 'Administrador';
            $_SESSION['esAdmin'] = true;

            header("Location: index.php");
            exit;
          } else {
            echo "Usuario o contraseña inválidos<br>";
            echo "<h1>Login</h1>";
            echo '<form name="login" action="procesarLogin.php" method="post">
              Username: <input type="text" name="username" value=""><br>
              Password: <input type="text" name="password" value=""><br>
              <input type="submit" value="Login">
            </form>';
          }

         ?>
 			</div>


 			<?php include 'sidebarDer.php'; ?>
 			<?php include 'pie.php'; ?>


 		</div> <!-- Fin del contenedor -->

 	</body>
 </html>
