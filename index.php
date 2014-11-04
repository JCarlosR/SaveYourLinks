<!DOCTYPE html>
<html lang="es">	
<head>
	<meta charset="UTF-8">
	<title>SaveYourLinks - Inicio</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<?php 
		$subtitulo = "Los sitios que más visitas...";
		require_once 'header.php'; 
	?>

	<form method="GET" action="http://www.google.com/search">
		<label for="q">Buscar:
			<input type="text" name="q">
		</label>
		<input id="btnBuscar" type="submit" value="Realizar búsqueda">
	</form>

	<?php 
		require_once 'consultas.php'
  	?>
	<script src="main.js"></script>	
	<script>funcPrincipal()</script>		
</body>
</html>