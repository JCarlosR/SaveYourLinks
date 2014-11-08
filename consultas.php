<?php  
	set_time_limit(300);
	copy('C:\Users\Juan Carlos\AppData\Local\Google\Chrome\User Data\Default\History','History');
	$con = mysql_connect("localhost","root","") or die(mysql_error());
	$bd = mysql_select_db('historial') or die(mysql_error());

	$consqlite = new PDO('sqlite:History');
	$query = '
		SELECT url, title, visit_count FROM urls WHERE url NOT LIKE "%localhost%"
		AND ((last_visit_time/1000000)-11644473600) - '.$_SESSION['tInicial'].' > 0
	';
	mysql_query("DELETE FROM links", $con);

	foreach ($consqlite->query($query) as $row) 
		mysql_query("INSERT visitas VALUES ('".$_SESSION['email']."', '".$row[0]."', '".$row[1]."', ".$row[2].")");

	mysql_close($con);
?>

