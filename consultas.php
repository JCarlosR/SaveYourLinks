<?php  
	copy('C:\Users\Juan Carlos\AppData\Local\Google\Chrome\User Data\Default\History','History');
	$con = mysql_connect("localhost","root","") or die(mysql_error());
	$bd = mysql_select_db('historial') or die(mysql_error());

	$consqlite = new PDO('sqlite:History');
	$query = 'SELECT url, title, visit_count FROM urls';
	mysql_query("DELETE FROM links", $con);

	foreach ($consqlite->query($query) as $row) 
		mysql_query("INSERT paginas VALUES ('".$row[0]."','".$row[1]."')");

	mysql_close($con);
?>

