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

<div class="preferidos">
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
			<div class="preferidos-item">
				<a href=<?php echo $row[0] ?> target="_blank" class="preferidos-link">
					<img class="preferidos-img" src="http://img.bitpixels.com/getthumbnail?code=47880&size=200&url=<?php echo $row[0] ?>">
					<h4 class="preferidos-title"><?php echo $row[1] ?></h4>
				</a>
			</div>
	<?php  
		}
	}?>
</div>

	<script src="main.js"></script>	
	<script>funcPrincipal()</script>		
</body>
</html>