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

	<ul>
	<?php
	if( isset($_SESSION['email']) )
	{ 
		require_once 'consultas.php';
		$con = mysql_connect("localhost", "root", "") or die(mysql_error());
		$bd = mysql_select_db('historial') or die(mysql_error());
		$resultSet = mysql_query("SELECT url, title FROM visitas WHERE email='".$_SESSION['email']."' ORDER BY cantidad DESC LIMIT 4", $con);
		while( $row = mysql_fetch_row($resultSet) )
		{
	?>
			<li><?php echo $row[0].": ".$row[1] ?></li>
	<?php
		}
	}
	?>
	</ul>

	<script src="main.js"></script>	
	<script>funcPrincipal()</script>		
</body>
</html>