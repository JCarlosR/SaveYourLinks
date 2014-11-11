<!DOCTYPE html>
<html lang="es">	
<head>
	<meta charset="UTF-8">
	<title>SaveYourLinks - Registro de usuario</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<?php 
		$subtitulo = "Registro de nuevo usuario";
		require_once 'header.php'; 
	?>

	<form method="POST" action="nuevoUsuario.php">
		<label for="mail">E-mail:
			<input type="text" name="mail" required>
		</label>
		<label for="user">Nombre de usuario:
			<input type="text" name="user" required>
		</label>		
		<label for="pass">Contraseña:
			<input type="password" name="pass" required>
		</label>		
		<input id="btnEnviar" type="submit" value="¡ Registrarme !">
		<input id="btnEnviar" type="submit" value="Registrarme con facebook" disabled>
	</form>

	<script src="main.js"></script>	
	<script>funcPrincipal()</script>		
</body>
</html>