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
				<h1>Login</h1>
        <form name="login" action="procesarLogin.php" method="post">
          Username: <input type="text" name="username" value=""><br>
          Password: <input type="text" name="password" value=""><br>
          <input type="submit" value="Login">
        </form>
			</div>

			<?php include 'sidebarDer.php'; ?>
			<?php include 'pie.php'; ?>


		</div> <!-- Fin del contenedor -->

	</body>
</html>
