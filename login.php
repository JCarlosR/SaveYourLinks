<!DOCTYPE html>
<html lang="es">	
<head>
	<meta charset="UTF-8">
	<title>SaveYourLinks - Registro de usuario</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<?php 
		$subtitulo = "Inicio de sesión";
		require_once 'header.php'; 
	?>

	<form method="POST" action="iniciar.php">
		<label for="mail">E-mail:
			<input type="text" name="mail">
		</label>		
		<label for="pass">Contraseña:
			<input type="password" name="pass">
		</label>		
		<input id="btnEnviar" type="submit" value="¡ Ingresar !">
	</form>

	<script src="main.js"></script>	
	<script>funcPrincipal()</script>		
</body>
</html>