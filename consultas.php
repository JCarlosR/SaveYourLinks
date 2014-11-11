<?php  
	// Configuramos el tiempo de ejecución máximo:
	set_time_limit(333);

	// Nos conectamos a nuestra bd:
	$con = mysql_connect("localhost","root","") or die(mysql_error());
	$bd = mysql_select_db('historial') or die(mysql_error());

	// Copiamos History y nos conectamos a tal bd:
	copy('C:\Users\Juan Carlos\AppData\Local\Google\Chrome\User Data\Default\History','History');
	$consqlite = new PDO('sqlite:History');

	// Redactamos la consulta:
	$query = 
	'SELECT url, title, visit_count FROM urls WHERE url NOT LIKE "%localhost%"
	AND ((last_visit_time/1000000)-11644473600) - '.$_SESSION['tInicial'].' > 0';
	
	// Borramos links para capturar los nuevos:
	mysql_query("DELETE FROM links", $con);

	// Capturamos los nuevos links visitados en la tabla visitas:
	foreach ($consqlite->query($query) as $row) 
		mysql_query("INSERT visitas VALUES ('".$_SESSION['email']."', '".$row[0]."', '".$row[1]."', ".$row[2].")");

	// Cerramos la conexión:
	mysql_close($con);
?>

